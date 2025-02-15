<?php

#
# Copyright (c) 2006-2008 Sun Microsystems, Inc.
#                         All rights reserved.
# $COPYRIGHT$
#
# Additional copyrights may follow
#
# $HEADER$
#

#########################################
#                                       #
#  Definitions                          #
#                                       #
#########################################

# Constant to mute SQL errors (set true to mute)
define('SILENT', true);

# Screen dimemsion constants for graphing
define('SCREEN_WIDTH', 1200);
define('SCREEN_HEIGHT', 700);

# HTML colors
define('GRAY',     "#A0A0A0");
define('DGRAY',    "#808080");
define('LGRAY',    "#C0C0C0");
define('LLGRAY',   "#DEDEDE");
define('LLLGRAY',  "#E8E8E8");
define('LRED',     "#FFC0C0");
define('DRED',     "#E0C0C0");
define('LGREEN',   "#C0FFC0");
define('DGREEN',   "#C0E0C0");
define('LYELLOW',  "#FFFFC0");
define('DYELLOW',  "#E0E0C0");
define('LORANGE',  "#FFDF7F");
define('DORANGE',  "#E0C07F");
define('LBLUE',    "#C0C0FF");
define('DBLUE',    "#C0C0E0");
define('WHITE',    "#FFFFFF");
define('THCOLOR',  LLGRAY);

# Mask the trial column using HTML comments
define('TRIAL_TRUE',  't');
define('TRIAL_FALSE', 'f');

# Define paths
define('DOCROOT',  dirname('http://'.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME']));
define('PATH',     dirname($_SERVER['SCRIPT_NAME']));
define('FULLSELF', dirname('http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']));

# Use GMT as the global timezone constant
# Note: we have temporarily removed the timezone preference
# for the sake of query speed. 
define('TIMEZONE', 'GMT');

#########################################
#                                       #
#  Global arrays                        #
#                                       #
#########################################

# Return a listing of which results go with which phase

# XXX: This subquery-aggregating-result-counting madness is required because of
# the database schema. That is, there's just a single integer test_result
# column, instead of 5 result field booleans (e.g., pass, fail, timed-out,
# skipped, perf). Adding these four (boolean) bytes per test result might be a
# good space-for-performance trade-off, and would also probably simplify the
# code.
function phase_results_table($start_date) {

    # NOTE: WE CAN'T MAKE $ret STATIC, SINCE IT GETS USED
    # FOR COMPOSING THE QUERY (CLEVER USE), BUT ALSO FOR
    # SUMMARY TABLE HEADERS (SILLY USE)

    # Setup results cases for the *temporary* view
    $result_name = 'test_result';
    $ret['cases'] = array(
        'mpi_install' =>
            array(
                "(CASE WHEN mpi_install.$result_name = 1
                  THEN 1 ELSE 0 END) as _mpi_p",
                "(CASE WHEN mpi_install.$result_name = 0
                  THEN 1 ELSE 0 END) as _mpi_f",
                "(0) as _build_p",
                "(0) as _build_f",
                "(0) as _run_p",
                "(0) as _run_f",
                "(0) as _run_s",
                "(0) as _run_t",
                "(0) as _run_l"
            ),
        "test_build"  =>
            array(
                "(0) as _mpi_p",
                "(0) as _mpi_f",
                "(CASE WHEN test_build.$result_name = 1
                  THEN 1 ELSE 0 END) as _build_p",
                "(CASE WHEN test_build.$result_name = 0
                  THEN 1 ELSE 0 END) as _build_f",
                "(0) as _run_p",
                "(0) as _run_f",
                "(0) as _run_s",
                "(0) as _run_t",
                "(0) as _run_l"
            ),
        "test_run"    =>
            array(
                "(0) as _mpi_p",
                "(0) as _mpi_f",
                "(0) as _build_p",
                "(0) as _build_f",
                "(CASE WHEN test_run.$result_name = 1
                  THEN 1 ELSE 0 END) as _run_p",
                "(CASE WHEN test_run.$result_name = 0
                  THEN 1 ELSE 0 END) as _run_f",
                "(CASE WHEN test_run.$result_name = 2
                  THEN 1 ELSE 0 END) as _run_s",
                "(CASE WHEN test_run.$result_name = 3
                  THEN 1 ELSE 0 END) as _run_t",
                "(CASE WHEN test_run.performance_id > 0
                  THEN 1 ELSE 0 END) as _run_l"
            ),
    );

    $ret['where'] = 
        array(
            "_mpi_p" => "mpi_install.$result_name = 1",
            "_mpi_f" => "mpi_install.$result_name = 0",
            "_build_p" => "test_build.$result_name = 1",
            "_build_f" => "test_build.$result_name = 0",
            "_run_p" => "test_run.$result_name = 1",
            "_run_f" => "test_run.$result_name = 0",
            "_run_s" => "test_run.$result_name = 2",
            "_run_t" => "test_run.$result_name = 3",
            "_run_l" => "test_run.performance_id > 0",
    );


    # Setup aggregate clauses for to get from the
    # *temporary* table
    $ret['aggregates'] = array(
        'mpi_install' =>
            array('_mpi_p', '_mpi_f'),
        'test_build'  =>
            array('_build_p', '_build_f'),
        'test_run'    =>
            array('_run_p', '_run_f', '_run_s', '_run_t', '_run_l'),
    );

    return $ret;
}

# Return a list of MTT tables (to be able to
# decipher between MTT tables, and Postgres meta
# tables)
function setup_mtt_db_tables() {

    static $ret;
    if ($ret)
        return $ret;

    # Must be from an MTT table (in case a
    # Postgres meta table has an identical column name)
    $ret = array(
        'compute_cluster',
        'submit',
        'compiler',
        'mpi_get',
        'description',
        'result_message',
        'environment',
        'mpi_install_configure_args',
        'test_suites',
        'test_names',
        'latency_bandwidth',
        'performance',
        'test_run_command',
        'mpi_install',
        'test_build',
        'test_run',
    );

    return $ret;
}

# Convert English fraction to floating point value
function english_fraction_2_float($english) {
    $ret = array(
        'whole'         => (1/1),
        '*whole'        => (1/1),
        'no splitting'  => (1/1),
        '*no splitting' => (1/1),
        'halves'        => (1/2),
        'thirds'        => (1/3),
        'quarters'      => (1/4),
        'fifths'        => (1/5),
        'sixths'        => (1/6),
        'sevenths'      => (1/7),
        'eighths'       => (1/8),
        'ninths'        => (1/9),
        'tenths'        => (1/10),
    );

    if (isset($ret[$english])) {
        return $ret[$english];
    } else {
        return $english;
    }
}

# Return a list of preferences to hand off to prefs_popup
function setup_prefs() {

    static $prefs;

    if (! $prefs)
        $prefs = array(
            'general'  => array(
                'limit'             => array(array('10', '50', '*100', '200')),
                'wrap'              => array(100),
                'trial'             => array(false),
                'enable_drilldowns' => array(true),
            ),
            'graphing' => array(
                'yaxis_scale'      => array(array('Logarithmic', '*Linear')),
                'xaxis_scale'      => array(array('Logarithmic', '*Text')),
                'hide_subtitle'    => array(false),
                'split_graphs'     => array(array('*No splitting', 'Halves', 'Thirds', 'Quarters')),
                #'graph_size'       => array(array('Small', '*Medium', 'Large')),
                #'legend_placement' => array(array('*Bottom', 'In plotting area')),
                #'graph_type'       => array(array('*Line', 'Bar', 'Points')),
            ),
            #
            # X: SHOULDN'T HAVE TO DIG THROUGH THE QUERY STRING TO TURN OFF
            # DEBUGGING FLAGS. PERHAPS WE NEED TO TREAT THESE USING DEFINE(),
            # LIKE THE OTHER PREFERENCES FOR SOME REASON ...
            #
            # 'debugging' => array(
            #     'sql'            => array(array(0, 1, 2)),
            #     'cgi'            => array(false),
            #     "stats"          => array(false),
            #     'debug'          => array(false),
            #     'explain'        => array(false),
            #     'analyze'        => array(false),
            #     'no_cache'       => array(false),
            #     'no_cookies'     => array(false),
            # ),
        );

    return $prefs;
}

# Return a list of columns to show/hide
function setup_advanced($params) {

    static $menu;

    if ($menu)
        return $menu;

    # Put hide first so it defaults as the shown menu item
    $control = array('hide', 'show');

    $phases = process_phase_field($params);
    $main_window = setup_mainwin_fields($phases);

    $menu = array(
        'compute_cluster' => array(
            'compute_cluster_id'  => null,
            'os_version'          => array('', $control),
            'platform_type'       => array('', $control),
            'platform_hardware'   => array('', $control),
            'platform_name'       => array('', $control),
            'os_name'             => array('', $control),
        ),
        'submit' => array(
            'submit_id'           => null,
            'hostname'            => array('', $control),
            'local_username'      => array('', $control),
            'http_username'       => array('', $control),
        ),
        'mpi_install' => array(

            'mpi_get_id'               => null,
            'mpi_install_compiler_id'  => null,
            'mpi_install_configure_id' => null,
            'mpi_install_id'           => null,

            'compiler_name'       => array('', $control),
            'compiler_version'    => array('', $control),
            'vpath_mode'          => array('', $control),
            'endian'              => array('', $control),
            'bitness'             => array('', $control),
            'mpi_name'            => array('', $control),
            'mpi_version'         => array('', $control),
            'configure_arguments' => array(''),
        ),
        'results' => array(
            'exit_value'          => array('', $control),
            'exit_signal'         => array('', $control),
            'duration'            => array('', $control),
            'client_serial'       => array('', $control),
            'result_message'      => array(''),
            'result_stdout'       => array(''),
            'result_stderr'       => array(''),
            'environment'         => array(''),
            'description'         => array(''),
        ),
    );

    if (sizeof($phases) == 1) {

        if (array_search('test_build', $phases) !== false or
            array_search('test_run', $phases)   !== false) {
            $menu =
                array_merge(
                    $menu,
                    array('test_build' =>
                        array(
                            'test_build_id' => null,
                            'test_build_compiler_id' => null,
                            'suite_name' => array('', $control),
                        ))
                );
        }
        if (array_search('test_run', $phases) !== false) {
            $menu =
                array_merge(
                    $menu,
                    array('test_run' =>
                        array(
                            'test_run_id'         => null,
                            'test_name_id'        => null,
                            'test_run_command_id' => null,
                            'test_suite_id'       => null,
                            'performance_id'      => null,

                            'launcher'     => array('', $control),
                            'resource_mgr' => array('', $control),
                            'network'      => array('', $control),
                            'parameters'   => array('', $control),
                            'test_name'    => array('', $control),
                            'np'           => array('', $control),
                            'full_command' => array('', $control),
                        ))
                );
        }
    }

    # Exclude fields that are already in the main window
    # to avoid overlapping of form controls
    foreach (array_keys($menu) as $table) {
        foreach (array_keys($menu[$table]) as $k) {
            if (isset($main_window[$k])) {
                unset($menu[$table][$k]);
            }
        }
    }
    # Whack any empty advanced categories
    foreach (array_keys($menu) as $table)
        if (sizeof($menu[$table]) == 0)
            unset($menu[$table]);

    return $menu;
}

# Return a 1D array of advanced fields, instead of 
# the multi-tiered hash used to group advanced fields
# by phase
function setup_advanced_1d($params) {

    $setup_advanced = setup_advanced($params);

    foreach (array_keys($setup_advanced) as $table) {
        foreach (array_keys($setup_advanced[$table]) as $field) {
            $ret[] = $field;
        }
    }

    return $ret;
}

# Display more human-readable labels
function label($str) {

    static $labels;

    if (! $labels) {
        $labels = array(

            # Database column names
            "bandwidth_avg"       => "Bandwidth avg.",
            "bandwidth_max"       => "Bandwidth max.",
            "bandwidth_min"       => "Bandwidth min.",
            "bitness"             => "Bitness",
            "client_serial"       => "Client serial",
            "full_command"        => "Command",
            "compiler_name"       => "Compiler",
            "compiler_version"    => "Compiler version",
            "configure_arguments" => "Configure arguments",
            "description"         => "Description",
            "duration"            => "Duration",
            "email_address"       => "Email address",
            "enabled"             => "Enabled",
            "endian"              => "Endian",
            "environment"         => "Environment",
            "exit_value"          => "Exit value",
            "field"               => "Field",
            "first_occurrence"    => "First occurrence",
            "gecos"               => "Gecos",
            "hostname"            => "Hostname",
            "http_username"       => "Org",
            "last_occurrence"     => "Last occurrence",
            "latency_avg"         => "Latency avg.",
            "latency_max"         => "Latency max.",
            "latency_min"         => "Latency min.",
            "local_username"      => "Local username",
            "merge_stdout_stderr" => "Merge stdout stderr",
            "message_size"        => "Message size",
            "message_size_range"  => "Message sizes",
            "mpi_name"            => "MPI name",
            "mpi_version"         => "MPI version",
            "mtt_version_major"   => "MTT version major",
            "mtt_version_minor"   => "MTT version minor",
            "mtt_client_version"  => "MTT version",
            "np"                  => "np",
            "os_name"             => "OS",
            "os_version"          => "OS version",
            "phase"               => "Phase",
            "platform_hardware"   => "Hardware",
            "platform_name"       => "Platform name",
            "platform_type"       => "Platform type",
            "result_message"      => "Result message",
            "result_stderr"       => "Stderr",
            "result_stdout"       => "Stdout",
            "exit_signal"         => "Signal",
            "start_timestamp"     => "Date range",
            "subject"             => "Subject",
            "submit_timestamp"    => "Date range",
            "suite_name"          => "Suite",
            "test_name"           => "Test",
            "test_result"         => "Test result",
            "url"                 => "Url",
            "username"            => "Username",
            "value"               => "Value",
            "parameters"          => "Runtime Parameters",
            "launcher"            => "Launcher",
            "network"             => "Network",
            "resource_mgr"        => "Resource Manager",
            "vpath_mode"          => "Vpath mode",

            # MTT phase names
            "all_phases"        => "All phases",
            "mpi_get"           => "MPI get",
            "mpi_install"       => "MPI install",
            "test_build"        => "Test build",
            "test_run"          => "Test run",

            # Other schema tables
            'compute_cluster'   => 'Cluster',
            "compiler"          => "Compiler",
            'submit'            => 'Submit',
            'results'           => 'Results',

            # Result types

            # Result string to column name
            '_mpi_p'               => 'pass',
            '_mpi_f'               => 'fail',
            '_build_p'             => 'pass',
            '_build_f'             => 'fail',
            '_run_p'               => 'pass',
            '_run_f'               => 'fail',
            '_run_s'               => 'skipped',
            '_run_t'               => 'timed_out',
            '_run_l'               => 'latency_bandwidth',

            # Column name to web page label
            "pass"              => "Pass",
            "fail"              => "Fail",
            "skip"              => "Skip",
            "timed"             => "Timed",
            "skipped"           => "Skip",
            "timed_out"         => "Timed",
            "latency_bandwidth" => "Perf",

            # Latency/bandwidth
            "latency_avg"       => "Average Latency",
            "latency_min"       => "Minimum Latency",
            "latency_max"       => "Maximum Latency",
            "bandwidth_avg"     => "Average Bandwidth",
            "bandwidth_min"     => "Minimum Bandwidth",
            "bandwidth_max"     => "Maximum Bandwidth",

            # Selection/unselection
            "show"                  => "Show",
            "hide"                  => "Hide",

            # General preferences
            'general'              => 'General',

            'limit'                => 'Max rows per page',
            'timezone'             => 'Time zone',
            'wrap'                 => 'Text wrap <i>(in Detail)</i>',

            # Two labels: one for the UI, one for the column header
            'trial'                => 'Trial',
            'Trial'                => 'Show trial runs',
            'enable_drilldowns'    => 'Enable drilldown links',

            # Graphing preferences
            'graphing'             => 'Graphing',

            'graph_size'           => 'Graph size',
            'legend_placement'     => 'Legend placement',
            'yaxis_scale'          => 'Y-axis scale',
            'xaxis_scale'          => 'X-axis scale',
            'graph_type'           => 'Graph type',
            'hide_subtitle'        => 'Hide subtitle',
            'split_graphs'         => 'Split graphs',

            # Row number
            "n" => "#",

            # Debugging options
            "debugging"      => "Debugging",

            "sql"            => "SQL",
            "cgi"            => "Display input selections",
            "stats"          => "Display query statistics",
            'debug'          => "Debug",
            'explain'        => 'Use EXPLAIN',
            'analyze'        => 'Use ANALYZE',
            'no_cache'       => 'Turn off SQL caching',
            'no_cookies'     => 'Turn off cookies',
            'dynamic_view'   => 'Create the SQL VIEW dynamically',

            # Failure columns
            'failure_id'      => 'ID',
            '_params'         => 'Params',
            '_values'         => 'Values',
            'first_occurence' => 'First occurence',
            'last_occurence'  => 'Last occurence',
        );
    }

    if (isset($labels[$str]))
        return $labels[$str];
    elseif (isset($labels[strip_prefix($str)]))
        return $labels[strip_prefix($str)];
    else
        return $str;
}

# Remove the prefix part of the parameter,
# which will leave only a database column name
function strip_prefix($str) {
    return preg_replace('/^more_|^show_|^text_/', '', $str);
}

#########################################
#                                       #
#  Common screen/report functions       #
#                                       #
#########################################

# Return an array of default values for textfields
# (Feed this too form_carryover)
function setup_mainwin_fields($phases) {

    # Arrayify the argument
    if (! is_array($phases)) {
        $phases = array($phases);
    }

    $single_phase = (sizeof($phases) == 1) ? true : false;

    # ompi does not submit results
    $http_username = $_SERVER['PHP_AUTH_USER'];
    if (! $http_username or preg_match("/ompi/i", $http_username))
        $http_username = 'all';

    $defaults = array(
        # results
        'start_timestamp'   => 'past 24 hours',

        # submit
        'http_username'     => $http_username,
        'local_username'    => 'all',
        'platform_name'     => 'all',

        # mpi_install
        'platform_hardware' => 'all',
        'os_name'           => 'all',
        'mpi_name'          => 'all',
        'mpi_version'       => 'all',
    );

    # Phase-specific
    if ($single_phase) {
        if (array_search('mpi_install', $phases) !== false)
            $specific = array(
                'configure_arguments' => '',
                'compiler_name'       => 'all',
                'bitness'             => 'all',
                'endian'              => 'all',
            );
        elseif (array_search('test_build', $phases) !== false)
            $specific = array(
                'suite_name'       => 'all',
                'compiler_name'    => 'all',
                'compiler_version' => 'all',
                'bitness'          => 'all',
            );
        elseif (array_search('test_run', $phases) !== false)
            $specific = array(
                'suite_name' => 'all',
                'test_name'  => 'all',
                'np'         => 'all',
                'full_command' => '',
            );
    }

    $ret = array_merge(
        $defaults,
        $specific
    );

    # Show all columns (except local_username)
    foreach (array_keys($ret) as $k)
        $ret['show'][$k] = 'show';

    $ret['show']['local_username'] = 'hide';

    # In Detail view, they likely want to see test name
    $go = get_go_or_click($_GET);

    if (preg_match("/summary/i", $go) or is_null($go))
        $ret['show']['test_name'] = 'hide';

    # Phase
    $ret['phase'] = 'all_phases';

    # Developer params
    $ret['dev'] = setup_developer_params();

    return $ret;
}

function setup_bitmapped_fields() {

    static $ret;
    if ($ret)
        return $ret;
    
    # Map these both ways for both SELECT and WHERE clauses
    $ret =
        array(
            "select" => array(
                "bitness" => "(CASE
                     WHEN (bitness = B'000000')  THEN 'unknown'
                     WHEN (bitness = B'000001')  THEN '8'
                     WHEN (bitness = B'000010')  THEN '16'
                     WHEN (bitness = B'000100')  THEN '32'
                     WHEN (bitness = B'001000')  THEN '64'
                     WHEN (bitness = B'001100')  THEN '32/64'
                     WHEN (bitness = B'010000')  THEN '128'
                     ELSE 'unknown' END) as bitness",
                "endian" => "(CASE
                     WHEN (endian = B'01')       THEN 'little'
                     WHEN (endian = B'10')       THEN 'big'
                     ELSE 'unknown' END) as endian",
                "vpath_mode" => "(CASE
                     WHEN (vpath_mode = B'01')   THEN 'relative'
                     WHEN (vpath_mode = B'10')   THEN 'absolute'
                     ELSE 'unknown' END) as vpath_mode",
            ),
            "where" => array(
                "bitness" => array(
                     'unknown'   => "B000000",
                     '8'         => "B000001",
                     '16'        => "B000010",
                     '32'        => "B000100",
                     '64'        => "B001000",
                     '32/64'     => "B001100",
                     '128'       => "B010000",
                     '^unknown$' => "B000000",
                     '^8$'       => "B000001",
                     '^16$'      => "B000010",
                     '^32$'      => "B000100",
                     '^64$'      => "B001000",
                     '^32/64$'   => "B001100",
                     '^128$'     => "B010000",
                ),
                "endian" => array(
                     'unknown'   => "B00",
                     'little'    => "B01",
                     'big'       => "B10",
                     '^unknown$' => "B00",
                     '^little$'  => "B01",
                     '^big$'     => "B10",
                ),
                "vpath_mode" => array(
                     'unknown'    => "B00",
                     'relative'   => "B01",
                     'absolute'   => "B10",
                     '^unknown$'  => "B00",
                     '^relative$' => "B01",
                     '^absolute$' => "B10",
                ),
            ),
    );

    return $ret;
}

function human_to_bitmapped($column, $value) {
    static $bitmapped_fields;
    if (! $bitmapped_fields)
        $bitmapped_fields = setup_bitmapped_fields();

    $ret = $value;
    # Map human-readable text string to a PostgreSQL bit string
    if (isset($bitmapped_fields['where']["$column"]["$value"])) {
        $ret = $bitmapped_fields['where']["$column"]["$value"];
    }

    return $ret;
}

# Return true if the column name is a bitmapped field
# (we should really query the Postgres metadata for this)
function is_bitmapped($column) {
    static $bitmapped_fields;
    if (! $bitmapped_fields)
        $bitmapped_fields = setup_bitmapped_fields();

    if (isset($bitmapped_fields['where']["$column"])) {
        return true;
    }

    return false;
}


# Grab the report type from either a button click or a drilldown's "go"
function get_go_or_click($params) {
    return isset($params['click']) ? $params['click'] : $params['go'];
}

# Some helpful params for validating reporter.php
function setup_developer_params() {
    static $params;
    if (! $params)
        $params = array(
            'dev'          => null,
            'sql'          => null,
            'cgi'          => null,
            'debug'        => null,
            'stats'        => null,
            'explain'      => null,
            'analyze'      => null,
            'no_cache'     => null,
            'no_cookies'   => null,
            'db'           => null,
            'dynamic_view' => null,
        );
    return $params;
}

# Take a 'defaults' array (output from setup_mainwin_fields) Carry
# over textfields, show/hide menus, and radios from the last
# invocation (Returns an arr2qstring-ready list)
#
# Dual-purpose function:
# (1). Used for filling in form controls from "last time"
# (2). Used (in tandem with setup_mainwin_fields) for creating
#      drilldown links, for transitions between phase
#      changes
#
# (X: FOR CONSISTENCY, THIS FUNCTION SHOULD ONLY BE USED FOR
# (1) - AUTO-FILLING A FORM)
#
function form_carryover($defaults, $phase) {

    foreach (array_keys($defaults) as $k) {

        # Only deal with text fields
        if ($k == 'show' or
            $k == 'phase' or
            $k == 'go' or
            $k == 'dev')
            continue;

        $textfield = "text_$k";
        $showfield = "show_$k";

        # Carryover textfields
        if (isset($_GET[$textfield]))
            $params[$textfield] = $_GET[$textfield];
        else
            $params[$textfield] = $defaults[$k];

        # Carryover show/hide menus
        if ($_GET[$showfield])
            $params[$showfield] = $_GET[$showfield];
        else
            $params[$showfield] = $defaults['show'][$k];
    }

    $clicks = array('go', 'click');

    # Press 'Summary' for them if they traverse from a
    # detailed report into multi-phase mode
    foreach ($clicks as $click) {
        if (! is_null($_GET[$click])) {
            if (preg_match("/^all/i", $phase))
                $params[$click] = 'summary';
            else
                $params[$click] = $_GET[$click];
        }
    }

    # Carryover phase
    $phase = $_GET['phase'];
    if ($phase)
        $params['phase'] = $phase;
    else
        $params['phase'] = $defaults['phase'];

    # Carryover trial field
    $text_trial = $_GET['text_trial'];
    if ($text_trial)
        $params['text_trial'] = $text_trial;
    else
        $params['text_trial'] = $defaults['text_trial'];

    # Carryover preferences in query string
    static $prefs;
    if (! $prefs)
        $prefs = setup_prefs();

    foreach (array_keys($prefs) as $category)
        foreach (array_keys($prefs[$category]) as $pref)
            if ($_GET[$pref] != '')
                $params[$pref] = $_GET[$pref];

    # Carryover developer params
    foreach (array_keys($defaults['dev']) as $k)
        if (isset($_GET[$k]))
            $params[$k] = $_GET[$k];

    # It would be nonsensical to carry these onward
    # (this is only done in the case of clicking a
    # ''slices_index'' link)
    unset($params['offset']);
    unset($params['rows']);
    unset($params['slice']);

    return $params;
}

# Just like form_carryover, but for Advanced menu
function advanced_carryover($params) {

    $advanced_fields = setup_advanced_1d($params);

    foreach ($advanced_fields as $k) {

        $textfield = "text_$k";
        $showfield = "show_$k";

        # Carryover textfields
        if (isset($params[$textfield]))
            $ret[$textfield] = $params[$textfield];

        # Carryover show/hide menus
        if ($params[$showfield])
            $ret[$showfield] = $params[$showfield];
    }

    return $ret;
}

# Grab phase field
function process_phase_field($params) {

    if (isset($params['phase'])) {
        if (preg_match('/^all/', $params['phase']))
            return array("mpi_install", "test_build", "test_run");
        else
            return tokenize($params['phase']);
    }
    else
        return array("mpi_install", "test_build", "test_run");
}

# Reference: http://www.php.net/strtok
#
# Tokenize a whitespace-delimited or ;-delimited string
function tokenize($string) {
    $tokens = array();

    $c = "/\s*(;|\|)\s*/";
    if (preg_match($c, $string))
        return preg_split($c, $string);

    for ($next_token = strtok($string, ' ');
         $next_token !== false;
         $next_token = strtok(' ')) {

        if ($next_token{0} == '"')
            $next_token =
                $next_token{strlen($next_token) - 1} == '"' ?
                     substr($next_token, 1, -1) :
                     substr($next_token, 1) . ' ' . strtok('"');
        $tokens[] = $next_token;
    }

    return $tokens;
}

# Tokenize a whitespace delimited string which may contain single and double
# quoted parts.

#
# Tested on these strings:
#   "'back'-'to back with single-quoted negation'" .
#   "\"back\"-\"to back with double-quoted negation\"" .
#   "'back''to back single-quoted atoms'" .
#   "\"back\"\"to back double-quoted atoms\"" .
#   " \"\" - ' ' \"-\" '-foo' '-  space after the -' " .
#   "\" \" '' '-' " .
#   "\"foo bar\" -\"negate this string\" " .
#   "'single quoted \"string' " .
#   "baz boz -exclude -these -tokens");
function tokenize_quoted($q) {

    # Check parameters
    if (!isset($q) or false === $q or !is_string($q)) {
        return false;
    }

    # Get the tokens from the query.
    $x = trim($q);

    # Short circuit
    if ('' === $x) {
        return array();
    }

    # Split the string into single characters
    $chars  = preg_split("//", $x);
    $mode   = 'non-quoting';
    $token  = '';
    $tokens = array();

    for ($i = 0; $i < count($chars); $i++) {

        switch ($mode) {
            case 'non-quoting':
                # Double quoting
                if ('"' == $chars[$i]) {

                    if ('' != $token) {
                        $tokens[] = $token;
                    }
                    $token = '';
                    $mode = 'double-quoting';
                } else if (('"' == $chars[$i+1]) and ('-' == $chars[$i])) {

                    if ('' != $token) {
                        $tokens[] = $token;
                    }
                    $token .= $chars[$i];
                    $mode = 'double-quoting';
                    $i++;

                # Single quoting
                } else if ('\'' == $chars[$i]) {
                    if ('' != $token) {
                        $tokens[] = $token;
                    }
                    $token = '';
                    $mode = 'single-quoting';
                } else if (('\'' == $chars[$i+1]) and ('-' == $chars[$i])) {
                    if ('' != $token) {
                        $tokens[] = $token;
                    }
                    $token .= $chars[$i];
                    $mode = 'single-quoting';
                    $i++;

                # Whitespace is the token separator
                } else if ((' ' == $chars[$i]) or ("\t" == $chars[$i]) or ("\n" == $chars[$i])) {
                    if ('' != $token) {
                        $tokens[] = $token;
                    }
                    $token = '';
                } else {
                    $token .= $chars[$i];
                }
                break;

            case 'double-quoting':
                if ('"' == $chars[$i]) {
                    if ('' != $token) {
                        $tokens[] = $token;
                    }
                    $token = '';
                    $mode = 'non-quoting';
                } else {
                    $token .= $chars[$i];
                }
                break;
            case 'single-quoting':
                if ('\'' == $chars[$i]) {
                    if ('' != $token) {
                        $tokens[] = $token;
                    }
                    $token = '';
                    $mode = 'non-quoting';
                } else {
                    $token .= $chars[$i];
                }
                break;
        }

    }
    if ('' != $token) {
        $tokens[] = $token;
    }
    return $tokens;
}


# String conversion function to convert this:
#   "foo" "bar" "baz"
# to:
#   foo | bar | baz
function convert_quoted_tokens_to_pipe_delimited($str) {
    if (!preg_match('/"/', $str)) {
        return $str;
    }

    $tokens = tokenize_quoted($str);
    foreach ($tokens as $t) {
        $ret .= "$t |";
    }
    $ret = rtrim($ret, " |");

    return $ret;
}

# Convert an associative array to an HTTP-ready query string
function arr2qstring($arr) {
    foreach (array_keys($arr) as $key)
        $str .= "&$key=" . urlencode($arr[$key]);
    return $str;
}

# Return an English-formatted list
function en_join($list) {

    $size = sizeof($list);

    if ($size == 0)
        return null;
    elseif ($size == 1)
        return $list[0];
    elseif ($size == 2)
        return $list[0] . " and " . $list[1];
    elseif ($size > 2)
        return join(", ", array_slice($list, 0, -1)) .
                ", and " . $list[$size-1];
}

# Capitalize the first char of a string
function capitalize($str) {
    $len = strlen($str);
    return strtoupper(substr($str, 0, 1)) . substr($str, 1, $len);
}

?>

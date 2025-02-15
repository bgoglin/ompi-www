# -*- shell-script -*-
#
# Copyright (c) 2009      The University of Tennessee and The University
#                         of Tennessee Research Foundation.  All rights
#                         reserved.
# Copyright (c) 2009-2010 Cisco Systems, Inc.  All rights reserved.
# Copyright (c) 2010-2012 IBM Corporation.  All rights reserved.
# Copyright (c) 2014      Los Alamos National Security, LLC. All rights
#                         reserved.
# $COPYRIGHT$
#
# Additional copyrights may follow
#
# $HEADER$
#
# AC_MSG_FAILURE
# MCA_btl_lf_CONFIG([action-if-can-compile],
#                   [action-if-cant-compile])
# ------------------------------------------------
AC_DEFUN([MCA_opal_btl_lf_CONFIG],[
    AC_CONFIG_FILES([opal/mca/btl/lf/Makefile])
])dnl

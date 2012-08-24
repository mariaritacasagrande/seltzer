<?php 

/*
    Copyright 2009-2012 Edward L. Platt <elplatt@alum.mit.edu>
    
    This file is part of the Seltzer CRM Project
    member.inc.php - Member module

    Seltzer is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    any later version.

    Seltzer is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Seltzer.  If not, see <http://www.gnu.org/licenses/>.
*/

/**
 * @return This module's revision number.  Each new release should increment
 * this number.
 */
function member_revision () {
    return 1;
}

/**
 * @return Array of paths to stylesheets relative to this module's directory.
 */
function member_stylesheets () {
    return array('style.css');
}

// Installation functions //////////////////////////////////////////////////////
require_once('install.inc.php');

// Utility functions ///////////////////////////////////////////////////////////
require_once('utility.inc.php');

// DB to Object mapping ////////////////////////////////////////////////////////
require_once('data.inc.php');

// Table data structures ///////////////////////////////////////////////////////
require_once('table.inc.php');

// Forms ///////////////////////////////////////////////////////////////////////
require_once('form.inc.php');

// Request Handlers ////////////////////////////////////////////////////////////
require_once('command.inc.php');

// Member pages ////////////////////////////////////////////////////////////////
require_once('page.inc.php');

// Member reports //////////////////////////////////////////////////////////////
require_once('report.inc.php');

// Themeing ////////////////////////////////////////////////////////////////////
require_once('theme.inc.php');

?>
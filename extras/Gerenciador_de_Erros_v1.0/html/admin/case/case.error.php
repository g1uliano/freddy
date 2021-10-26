<?php
/************************************************************************/
/* 					Error Manager v2.1				27/01/2003			*/
/************************************************************************/
/* This program is free software. You can redistribute it and/or modify	*/
/* it under the terms of the GNU General Public License as published by	*/
/* the Free Software Foundation; either version 2 of the License.		*/
/************************************************************************/
/* This Error Manager is made by Gijza.net 								*/
/* The idea came from Error Management from http://dr3n.endoria.net		*/
/* This addon is made for PHP-NUKE 6.0. but may work for other versions */
/* Admin CP is also included in this version. 							*/
/* From the latest version go to www.gijza.net							*/
/* Send you language-files to webmaster@gijza.net						*/
/*							ENJOY !!									*/
/************************************************************************/

if (!eregi("admin.php", $PHP_SELF)) { die ("Access Denied"); }

switch($op) {

	case "ConfigErrors":
	case "ErrorConfigSave":
    case "Error":
    case "Delete":
	case "Delete_all":
	case "ResetErrorCounter";
	include ("admin/modules/error.php");
	break;
	
}

?>
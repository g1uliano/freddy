<?php
if (!eregi("admin.php", $PHP_SELF)) { die ("Acesso Negado!"); }

$result = sql_query("select radminsuper from ".$prefix."_authors where aid='$aid'", $dbi);
list($radminsuper) = sql_fetch_row($result, $dbi);
//language 
if( isset( $newlang ) ) {
   include( "language/erro-br.php" );
   $language = $newlang;
} elseif ( isset( $lang ) ) {
   include( "language/erro-br.php" );
   $language = $lang;
} else {
   include( "language/erro-br.php" );
}


if ($radminsuper==1) {
function ErrorManagerMenu() {
	include("header.php");
	GraphicAdmin();
	OpenTable();
    echo "<center><b><a href=\"admin.php?op=ConfigErrors\">"._EMCONFIG."</a> | <a href=\"admin.php?op=Error\">"._EMSHOWERRORS."</a></center>";
	CloseTable();
	echo "<br>";
}
	


function ConfigErrors() {
    global $prefix, $dbi;
	ErrorManagerMenu();
	$result = sql_query("SELECT log_errors, show_image, rightblocks, show_info_saved, totalerrors FROM ".$prefix."_error_config", $dbi);
	list($log_errors, $show_image, $rightblocks, $show_info_saved, $totalerrors) = sql_fetch_row($result, $dbi);
    OpenTable();
	echo "<form action='admin.php' method='post'>";
	echo "<table border=\"0\"><tr><td>";

	//show settings
	echo ""._EALOGERRORS."</tr><td>";
    if ($log_errors==1) {
	echo "<input type='radio' name='xlog_errors' value='1' checked>"._YES." &nbsp; <input type='radio' name='xlog_errors' value='0'>"._NO."<br>";
    } else {
	echo "<input type='radio' name='xlog_errors' value='1'>"._YES." &nbsp; <input type='radio' name='xlog_errors' value='0' checked>"._NO."<br>";
    }
    echo "</td></tr><tr><td>";
	echo ""._EASHOWIMAGE."</td><td>";
    if ($show_image==1) {
	echo "<input type='radio' name='xshow_image' value='1' checked>"._YES." &nbsp; <input type='radio' name='xshow_image' value='0'>"._NO."<br>";
    } else {
	echo "<input type='radio' name='xshow_image' value='1'>"._YES." &nbsp; <input type='radio' name='xshow_image' value='0' checked>"._NO."<br>";
    }
    echo "</td></tr><tr><td>";
	echo ""._EASHOWRIGHTBLOCKS."</td><td>";
    if ($rightblocks==1) {
	echo "<input type='radio' name='xrightblocks' value='1' checked>"._YES." &nbsp; <input type='radio' name='xrightblocks' value='0'>"._NO."<br>";
    } else {
	echo "<input type='radio' name='xrightblocks' value='1'>"._YES." &nbsp; <input type='radio' name='xrightblocks' value='0' checked>"._NO."<br>";
    }
    echo "</td></tr><tr><td>";
	echo ""._EASHOWINFOSAVED."</td><td>";
    if ($show_info_saved==1) {
	echo "<input type='radio' name='xshow_info_saved' value='1' checked>"._YES." &nbsp; <input type='radio' name='xshow_info_saved' value='0'>"._NO."<br>";
    } else {
	echo "<input type='radio' name='xshow_info_saved' value='1'>"._YES." &nbsp; <input type='radio' name='xshow_info_saved' value='0' checked>"._NO."<br>";
    }
    echo "</td></tr><tr><td>";
	echo ""._TOTALERRORS."</td><td><strong>";
	echo $totalerrors;
	echo "</strong> <a href=\"admin.php?op=ResetErrorCounter\"> "._RESETCOUNTER."</a>";
	echo "</td></tr></table><br><br>";
	//send the form
	echo "<input type='hidden' name='op' value='ErrorConfigSave'>";
	echo "<center><input type='submit' value='"._SAVECHANGES."'></center>";
	echo "</form>";
    CloseTable();
    include ("footer.php");
}

function ResetErrorCounter () {
    global $prefix, $dbi;
	sql_query("UPDATE ".$prefix."_error_config SET totalerrors='0'", $dbi);
    Header("Location: admin.php?op=ConfigErrors");

}
function ErrorConfigSave ($xlog_errors, $xshow_image, $xrightblocks, $xshow_info_saved) {
    global $prefix, $dbi;
    sql_query("UPDATE ".$prefix."_error_config SET log_errors='$xlog_errors', show_image='$xshow_image', rightblocks='$xrightblocks', show_info_saved='$xshow_info_saved'", $dbi);
    Header("Location: admin.php?op=ConfigErrors");
}



function display_errors() {
    global $admin, $dbi, $prefix;
	ErrorManagerMenu();
    OpenTable();
    echo "<table width=100% border=1 cellpadding=5 cellspacing=1>\n<tr>\n"
	."<td colspan=\"6\" align=\"center\">"._EMALIST."</td>\n</tr>\n"
	."<tr><td NOWRAP align=\"center\"><B>"._EMADATETIME."</B></td><td NOWRAP align=\"center\"><B>"._EMASORT."</B></td><td NOWRAP align=\"center\"><B>"._EMAIP."</B></td><td NOWRAP align=\"center\"><B>"._EMAREF."</B></td><td NOWRAP align=\"center\"><B>"._EMAURL."</B></td><td NOWRAP align=\"center\"><B><a href=\"admin.php?op=Delete_all\">"._EMADELALL."</A></B></td>\n</tr>\n";
	$result = mysql_query("SELECT error_id, error_sort, time, ip_address, referer, error_url FROM ".$prefix."_errors ORDER BY error_id");
	while(list($error_id, $error_sort, $time, $ip_address, $referer, $error_url) = mysql_fetch_row($result)) {
    echo "<tr>\n<td NOWRAP align=\"center\">&nbsp;".$time." </td><td NOWRAP align=\"center\">&nbsp;".$error_sort." </td><td NOWRAP align=\"center\">&nbsp;".$ip_address." </td><td NOWRAP align=\"center\">&nbsp;".$referer."</td><td NOWRAP align=\"center\">&nbsp;".$error_url."</td><td NOWRAP align=\"center\">&nbsp;<a href=\"admin.php?op=Delete&amp;error_id=$error_id\">"._EMADEL."</A>\n</tr>\n"; 
}

    echo "</td>\n</tr>\n"
        ."</table>\n";
        CloseTable();
    include("footer.php");
}


function delete_errors() {
    global $admin, $dbi, $prefix, $error_id;
	ErrorManagerMenu();
    OpenTable();
	mysql_query("DELETE FROM ".$prefix."_errors WHERE error_id = '".$error_id."' LIMIT 1");
    echo "<table width=100% border=0>\n<tr>\n"
	."<td align=\"center\">"._EMADELETED."</tr>\n<tr>"
	."<td align=\"center\"><a href=\"admin.php?op=Error\">"._EMABACK."</A></td>\n"
	."</tr>\n"
    ."</table>\n";
    CloseTable();
    include("footer.php");
}


function delete_all() {
    global $admin, $dbi, $prefix, $error_id;
    ErrorManagerMenu();
	OpenTable();
	mysql_query("DELETE FROM ".$prefix."_errors");
    echo "<table width=100% border=0>\n<tr>\n"
	."<td align=\"center\">"._EMADELETEDALL."</td>\n"
	."</tr>\n<tr>"
	."<td align=\"center\"><a href=\"admin.php?op=Error\">"._EMABACK."</A></td>\n"
	."</tr>\n"
    ."</table>\n";
    CloseTable();
    include("footer.php");
}

switch($op) {

	case "ConfigErrors":
	ConfigErrors();
	break;
	
	case "ErrorConfigSave":
	ErrorConfigSave ($xlog_errors, $xshow_image, $xrightblocks, $xshow_info_saved);
	break; 
	
	case "ResetErrorCounter":
	ResetErrorCounter();
	break;
	
    case "Error":
    display_errors();
    break;

    case "Delete":
    delete_errors();
    break;
			
	case "Delete_all":
    delete_all();
    break;
}

} else {
    echo "Access Denied";
}

?>
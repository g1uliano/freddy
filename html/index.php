<?php
/**********************************************/
/* Freddy - Baseado na Engine do Php-Nuke 7.5 */
/* ------------------------------------------ */
/*                                            */
/* Freddy é um Software Livre liberado sob    */
/* Licença GNU/GPL.                           */
/*                                            */
/* CoDeD By HellNeT InterneT Services         */
/* Desenvolvedor: Giuliano Cardoso            */
/**********************************************/
/* Baseado no Php-Nuke 7.5                    */
/* http://www.phpnuke.org                     */
/**********************************************/
//Sobre a  Licença GNU/GPL - http://www.gnu.org
/************************************************************************************/
/*  Freedy é um software livre; você pode redistribui-lo e/ou                       */
/*  modifica-lo dentro dos termos da Licença Pública Geral GNU como                 */
/*  publicada pela Fundação do Software Livre (FSF); na versão 2 da                 */
/*  Licença.                                                                        */
/*                                                                                  */
/*  O Freddy é distribuido na esperança que possa ser  util,                        */
/*  mas SEM NENHUMA GARANTIA; sem uma garantia implicita de ADEQUAÇÂO a qualquer    */
/*  MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a                                      */
/*  Licença Pública Geral GNU para maiores detalhes.                                */
/*                                                                                  */
/*  Você deve ter recebido uma cópia da Licença Pública Geral GNU                   */
/*  junto com este programa, se não, escreva para a Fundação do Software            */
/*  Livre(FSF) Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA       */
/************************************************************************************/

require_once("mainfile.php");
global $prefix, $db; 
$modpath = '';
define('AREA_ARQUIVO', true);
$_SERVER['SCRIPT_NAME'] = "area.php";
$row = $db->sql_fetchrow($db->sql_query("SELECT main_module from ".$prefix."_main"));
$nome = $row['main_module'];
$home = 1;
if ($httpref==1) {
    $referer = $_SERVER["HTTP_REFERER"];
    $referer = check_html($referer, nohtml);
    if ($referer=="" OR eregi("^unknown", $referer) OR substr("$referer",0,strlen($nukeurl))==$nukeurl OR eregi("^bookmark",$referer)) {
    } else {
	$result = $db->sql_query("INSERT INTO ".$prefix."_referer VALUES (NULL, '$referer')");
    }
    $numrows = $db->sql_numrows($db->sql_query("SELECT * FROM ".$prefix."_referer"));
    if($numrows>=$httprefmax) {
	$result2 = $db->sql_query("DELETE FROM ".$prefix."_referer");
    }
}
if (!isset($mop)) { $mop="modload"; }
if (!isset($mod_file)) { $mod_file="index"; }
$nome = trim($nome);
$file = trim($file);
$mod_file = trim($mod_file);
$mop = trim($mop);
if (ereg("\.\.",$nome) || ereg("\.\.",$file) || ereg("\.\.",$mod_file) || ereg("\.\.",$mop)) {
    echo "Isto não é legal...";
} else {
    $ThemeSel = get_theme();
    if (file_exists("themes/$ThemeSel/module.php")) {
	include("themes/$ThemeSel/module.php");
	if (is_active("$default_module") AND file_exists("modules/$default_module/".$mod_file.".php")) {
	    $nome = $default_module;
	}
    }
    if (file_exists("themes/$ThemeSel/modules/$nome/".$mod_file.".php")) {
	$modpath = "themes/$ThemeSel/";
    }
    $modpath .= "modules/$nome/".$mod_file.".php";
    if (file_exists($modpath)) {
	include($modpath);
    } else {
	$index = 1;
	include("header.php");
	OpenTable();
	if (is_admin($admin)) {
	    echo "<center><font class=\"\"><b>"._HOMEPROBLEM."</b></font><br><br>[ <a href=\"admin.php?op=modules\">"._ADDAHOME."</a> ]</center>";
	} else {
	    echo "<center>"._HOMEPROBLEMUSER."</center>";
	}
	CloseTable();
	include("footer.php");
    }
}
?>
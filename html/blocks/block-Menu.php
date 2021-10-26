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
/*  Licença.                                                                         */
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

if (stristr($_SERVER['SCRIPT_NAME'], "block-Modules.php")) {
    Header("Location: index.php");
    die();
}

global $prefix, $db, $admin;

    $ThemeSel = get_theme();
    if (file_exists("themes/$ThemeSel/module.php")) {
	include("themes/$ThemeSel/module.php");
	if (is_active("$default_module") AND file_exists("modules/$default_module/index.php")) {
	    $def_module = $default_module;
	} else {
	    $def_module = "";
	}
    }

    $row = $db->sql_fetchrow($db->sql_query("SELECT main_module FROM ".$prefix."_main"));
    $main_module = $row['main_module'];

    
    $result2 = $db->sql_query("SELECT title FROM " . $prefix . "_modules");
    while ($row2 = $db->sql_fetchrow($result2)) {
	$title = stripslashes($row2['title']);
	$a = 0;
	$handle=opendir('modules');
	while ($file = readdir($handle)) {
    	    if ($file == $title) {
		$a = 1;
	    }
	}
	closedir($handle);
	if ($a == 0) {
	    $db->sql_query("DELETE FROM ".$prefix."_modules WHERE title='$title'");
	}
    }

    
    $content .= "<strong><big>&middot;</big></strong>&nbsp;<a href=\"index.php\">"._HOME."</a><br>\n";
    $result3 = $db->sql_query("SELECT title, custom_title, view FROM " . $prefix . "_modules WHERE active='1' AND title!='$def_module' AND inmenu='1' ORDER BY custom_title ASC");
    while ($row3 = $db->sql_fetchrow($result3)) {
	$m_title = stripslashes($row3['title']);
	$custom_title = $row3['custom_title'];
	$view = intval($row3['view']);
	$m_title2 = ereg_replace("_", " ", $m_title);
	if ($custom_title != "") {
	    $m_title2 = $custom_title;
	}
	if ($m_title != $main_module) {
	    if ((is_admin($admin) AND $view == 2) OR $view != 2) {
		$content .= "<strong><big>&middot;</big></strong>&nbsp;<a href=\"area.php?nome=$m_title\">$m_title2</a><br>\n";
	    }
	}
    }

     
    
    if (is_admin($admin)) {
	$handle=opendir('modules');
	while ($file = readdir($handle)) {
	    if ( (!ereg("[.]",$file)) ) {
		$modlist .= "$file ";
	    }
	}
	closedir($handle);
	$modlist = explode(" ", $modlist);
	sort($modlist);
	for ($i=0; $i < sizeof($modlist); $i++) {
	    if($modlist[$i] != "") {
		$row4 = $db->sql_fetchrow($db->sql_query("SELECT mid FROM ".$prefix."_modules WHERE title='$modlist[$i]'"));
		$mid = intval($row4['mid']);
		$mod_uname = ereg_replace("_", " ", $modlist[$i]);
		if ($mid == "") {
		    $db->sql_query("INSERT INTO ".$prefix."_modules VALUES (NULL, '$modlist[$i]', '$mod_uname', '0', '0', '1', '0', '')");
		}
	    }
	}
	}
?>
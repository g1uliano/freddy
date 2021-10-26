<?php
/**********************************************/
/* Freddy - Baseado na Engine do Php-Nuke 7.5 */
/* ------------------------------------------ */
/*                                            */
/* Freddy � um Software Livre liberado sob    */
/* Licen�a GNU/GPL.                           */
/*                                            */
/* CoDeD By HellNeT InterneT Services         */
/* Desenvolvedor: Giuliano Cardoso            */
/**********************************************/
/* Baseado no Php-Nuke 7.5                    */
/* http://www.phpnuke.org                     */
/**********************************************/
//Sobre a  Licen�a GNU/GPL - http://www.gnu.org
/************************************************************************************/
/*  Freedy � um software livre; voc� pode redistribui-lo e/ou                       */
/*  modifica-lo dentro dos termos da Licen�a P�blica Geral GNU como                 */
/*  publicada pela Funda��o do Software Livre (FSF); na vers�o 2 da                 */
/*  Licen�a.                                                                        */
/*                                                                                  */
/*  O Freddy � distribuido na esperan�a que possa ser  util,                        */
/*  mas SEM NENHUMA GARANTIA; sem uma garantia implicita de ADEQUA��O a qualquer    */
/*  MERCADO ou APLICA��O EM PARTICULAR. Veja a                                      */
/*  Licen�a P�blica Geral GNU para maiores detalhes.                                */
/*                                                                                  */
/*  Voc� deve ter recebido uma c�pia da Licen�a P�blica Geral GNU                   */
/*  junto com este programa, se n�o, escreva para a Funda��o do Software            */
/*  Livre(FSF) Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA       */
/************************************************************************************/
define('AREA_ARQUIVO', true);
require_once("mainfile.php");
$module = 1;
$nome = $_GET['nome'];

$nome = trim($nome);
if (isset($nome)) {
if (eregi("http\:\/\/", $nome)) {
	die("Hi&nbsp;and&nbsp;Bye");
    }
    $modstring = strtolower($_SERVER['QUERY_STRING']);
if (stripos_clone($modstring,"&user=")) header("Location: index.php");
    global $nukeuser, $db, $prefix;
    $nukeuser = base64_decode($user);
    $nukeuser = addslashes($nukeuser);
    $result = $db->sql_query("SELECT active, view FROM ".$prefix."_modules WHERE title='$nome'");
    $row = $db->sql_fetchrow($result);
    $mod_active = intval($row['active']);
    $view = intval($row['view']);
    if (($mod_active == 1) OR ($mod_active == 0 AND is_admin($admin))) {
		if (!isset($mop)) { $mop="modload"; }
		if (!isset($file)) { $file="index"; }
		if (ereg("\.\.",$nome) || ereg("\.\.",$file) || ereg("\.\.",$mop)) {
		    echo "You are so cool...";
		} else {
		    $ThemeSel = get_theme();
	    if (file_exists("themes/$ThemeSel/modules/$nome/".$file.".php")) {
				$modpath = "themes/$ThemeSel/";
		    } else {
				$modpath = "";
		    }
		    if ($view == 0) {
		$modpath .= "modules/$nome/".$file.".php";
	    		if (file_exists($modpath)) {
			    	include($modpath);
	    		} else {
			    	die ("Desculpe, o arquivo n�o existe...");
		    }
            } else if ($view == 1 AND (is_user($user) OR is_group($user, $nome)) OR is_admin($admin)) { 
		$modpath .= "modules/$nome/".$file.".php";
	    		if (file_exists($modpath)) {
			    	include($modpath);
	    		} else {
			    	die ("Desculpe, o arquivo n�o existe...");
				}
		    } elseif ($view == 1 AND !is_user($user) AND !is_admin($admin)) {
				$pagetitle = "- "._ACCESSDENIED."";
				include("header.php");
				title("$sitename: "._ACCESSDENIED."");
				OpenTable();
				echo "<center><b>"._RESTRICTEDAREA."</b><br><br>"
				    .""._MODULEUSERS."";
		$result2 = $db->sql_query("SELECT mod_group FROM ".$prefix."_modules WHERE title='$nome'"); 
		$row2 = $db->sql_fetchrow($result2); 
	    if ($row2[mod_group] != 0) { 
		$result3 = $db->sql_query("SELECT name FROM ".$prefix."_groups WHERE id='$row2[mod_group]'"); 
		$row3 = $db->sql_fetchrow($result3); 
		echo ""._ADDITIONALYGRP.": <b>$row3[name]</b><br><br>";
				}
				echo ""._GOBACK."";
				CloseTable();
				include("footer.php");
				die();
            } else if ($view == 2 AND is_admin($admin)) { 
		$modpath .= "modules/$nome/".$file.".php";
	    		if (file_exists($modpath)) {
			    	include($modpath);
	    		} else {
			    	die ("Este arquivo n�o existe...");
				}
		    } elseif ($view == 2 AND !is_admin($admin)) {
				$pagetitle = "- "._ACCESSDENIED."";
				include("header.php");
				title("$sitename: "._ACCESSDENIED."");
				OpenTable();
				echo "<center><b>"._RESTRICTEDAREA."</b><br><br>"
				    .""._MODULESADMINS.""
				    .""._GOBACK."";
				CloseTable();
				include("footer.php");
				die();
            } else if ($view == 3 AND paid()) { 
				$modpath .= "modules/$nome/$file.php";
	    		if (file_exists($modpath)) {
			    	include($modpath);
	    		} else {
			    	die ("Desculpe, o arquivo n�o existe...");
				}
		    } else {
				$pagetitle = "- "._ACCESSDENIED."";
				include("header.php");
				title("$sitename: "._ACCESSDENIED."");
				OpenTable();
				echo "<center><b>"._RESTRICTEDAREA."</b><br><br>"
				    .""._MODULESSUBSCRIBER."";
				if ($subscription_url != "") {
					echo "<br>"._SUBHERE."";
				}
				echo "<br><br>"._GOBACK."";
				CloseTable();
				include("footer.php");
				die();
		    }
		}
    } else {
		include("header.php");
		OpenTable();
		echo "<center>"._MODULENOTACTIVE."<br><br>"
		    .""._GOBACK."</center>";
		CloseTable();
		include("footer.php");
    }
} else {
    die ("Voc� n�o pode acessar este arquivo diretamente...");
}
?>
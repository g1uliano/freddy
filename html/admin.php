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

define('ADMIN_FILE', true);
if($aid AND (!isset($admin) OR empty($admin)) AND $op!='login') {
unset($aid);
unset($admin);
echo "Acesso Negado!";
die();
}
// Descomente caso seja necess�rio aumentar sua seguran�a
/*$nomedodominio = "www.onomedoseudominio.com";
if ($_SERVER['SERVER_NAME'] != $nomedodominio ) {
  echo "Acesso Negado!";
  die();
}*/
require_once("mainfile.php");
$checkurl = $_SERVER['REQUEST_URI']; 
if((stripos_clone($_SERVER["QUERY_STRING"],'AddAuthor')) || (stripos_clone($_SERVER["QUERY_STRING"],'VXBkYXRlQXV0aG9y')) || (stripos_clone($_SERVER["QUERY_STRING"],'QWRkQXV0aG9y')) || (stripos_clone($_SERVER["QUERY_STRING"],'UpdateAuthor')) || (preg_match("/\?admin/", "$checkurl")) || (preg_match("/\&admin/", "$checkurl"))) {
die("Illegal Operation");
}
get_lang(admin);

function create_first($name, $url, $email, $pwd, $user_new) {
    global $prefix, $db, $user_prefix;
    $first = $db->sql_numrows($db->sql_query("SELECT * FROM ".$prefix."_authors"));
    if ($first == 0) {
		$pwd = md5($pwd);
		$the_adm = "God";
		$db->sql_query("INSERT INTO ".$prefix."_authors VALUES ('$name', '$the_adm', '$url', '$email', '$pwd', '0', '1', '')");
		login();
    }
}

$the_first = $db->sql_numrows($db->sql_query("SELECT * FROM ".$prefix."_authors"));
if ($the_first == 0) {
    if (!$name) {
	    include("header.php");
	    title("$sitename: "._ADMINISTRATION."");
	    OpenTable();
	    echo "<center><b>"._NOADMINYET."</b></center><br><br>"
			."<form action=\"admin.php\" method=\"post\">"
			."<table border=\"0\">"
			."<tr><td><b>"._NICKNAME.":</b></td><td><input type=\"text\" name=\"name\" size=\"30\" maxlength=\"25\"></td></tr>"
			."<tr><td><b>"._HOMEPAGE.":</b></td><td><input type=\"text\" name=\"url\" size=\"30\" maxlength=\"255\" value=\"http://\"></td></tr>"
			."<tr><td><b>"._EMAIL.":</b></td><td><input type=\"text\" name=\"email\" size=\"30\" maxlength=\"255\"></td></tr>"
			."<tr><td><b>"._PASSWORD.":</b></td><td><input type=\"password\" name=\"pwd\" size=\"11\" maxlength=\"10\"></td></tr>"
			."<tr><td><input type=\"hidden\" name=\"fop\" value=\"create_first\">"
			."<input type=\"submit\" value=\""._SUBMIT."\">"
			."</td></tr></table></form>";
	    CloseTable();
	    include("footer.php");
    }
    switch($fop) {
		case "create_first":
		create_first($name, $url, $email, $pwd, $user_new);
	break;
    }
    die();
}

if (ereg("[^a-zA-Z0-9_-]",trim($aid))) { 
    die("Begone"); 
}
$aid = substr("$aid", 0,25);
$pwd = substr("$pwd", 0,18);
if ((isset($aid)) && (isset($pwd)) && ($op == "login")) {
    $datekey = date("F j");
    $rcode = hexdec(md5($_SERVER[HTTP_USER_AGENT] . $sitekey . $_POST[random_num] . $datekey));
    $code = substr($rcode, 2, 6);
    if (extension_loaded("gd") AND $code != $_POST[gfx_check] AND ($gfx_chk == 1)) {
	Header("Location: admin.php");
	die();
    }
    if($aid!="" AND $pwd!="") {
	$pwd = md5($pwd);
        $result = $db->sql_query("SELECT pwd, admlanguage FROM ".$prefix."_authors WHERE aid='$aid'");
	$row = $db->sql_fetchrow($result);
        $admlanguage = addslashes($row['admlanguage']);
        $rpwd = $row['pwd'];
	if($rpwd == $pwd) {
	    $admin = base64_encode("$aid:$pwd:$admlanguage");
	    setcookie("admin","$admin",time()+2592000);
	    unset($op);
	}
    }
}

$admintest = 0;

if(isset($admin) && $admin != "") {
  $admin = addslashes(base64_decode($admin));
  $admin = explode(":", $admin);
  $aid = addslashes($admin[0]);
  $pwd = "$admin[1]";
  $admlanguage = "$admin[2]";
  if ($aid=="" || $pwd=="") {
    $admintest=0;
    echo "<html>\n";
    echo "<title>ALERTA DE INTRUSOS!!!</title>\n";
    echo "<body bgcolor=\"#FFFFFF\" text=\"#000000\">\n\n<br><br><br>\n\n";
    echo "<center><img src=\"images/eyes.gif\" border=\"0\"><br><br>\n";
    echo "<font face=\"Verdana\" size=\"+4\"><b>V� embora, agora!</b></font></center>\n";
    echo "</body>\n";
    echo "</html>\n";
    exit;
  }
  $aid = substr("$aid", 0,25);
  $result2 = $db->sql_query("SELECT pwd FROM ".$prefix."_authors WHERE aid='$aid'");
  if (!$result2) {
        echo "Erro na sele��o do banco de dados.";
        exit;
  } else {
    $row2 = $db->sql_fetchrow($result2);
    $rpwd = $row2['pwd'];
    if($rpwd == $pwd && $rpwd != "") {
        $admintest = 1;
    }
  }
}

if(!isset($op)) { $op = "adminMain"; }
$pagetitle = "- "._ADMINMENU."";

/*********************************************************/
/* Login Function                                        */
/*********************************************************/

function login() {
    global $gfx_chk;
    include ("header.php");
    mt_srand ((double)microtime()*1000000);
    $maxran = 1000000;
    $random_num = mt_rand(0, $maxran);
    OpenTable();
    echo "<center><font class=\"title\"><b>"._ADMINLOGIN."</b></font></center>";
    CloseTable();
    echo "<br>";
    OpenTable();
    echo "<form action=\"admin.php\" method=\"post\">"
        ."<table border=\"0\">"
		."<tr><td>"._ADMINID."</td>"
		."<td><input type=\"text\" NAME=\"aid\" SIZE=\"20\" MAXLENGTH=\"25\"></td></tr>"
		."<tr><td>"._PASSWORD."</td>"
		."<td><input type=\"password\" NAME=\"pwd\" SIZE=\"20\" MAXLENGTH=\"18\"></td></tr>";
    if (extension_loaded("gd") AND ($gfx_chk == 1)) {
	echo "<tr><td colspan='2'>"._SECURITYCODE.": <img src='?gfx=gfx&random_num=$random_num' border='1' alt='"._SECURITYCODE."' title='"._SECURITYCODE."'></td></tr>"
	    ."<tr><td colspan='2'>"._TYPESECCODE.": <input type=\"text\" NAME=\"gfx_check\" SIZE=\"7\" MAXLENGTH=\"6\"></td></tr>";
    }
    echo "<tr><td>"
		."<input type=\"hidden\" NAME=\"random_num\" value=\"$random_num\">"
		."<input type=\"hidden\" NAME=\"op\" value=\"login\">"
		."<input type=\"submit\" VALUE=\""._LOGIN."\">"
		."</td></tr></table>"
		."</form>";
    CloseTable();
    include ("footer.php");
}

function adminmenu($url, $title, $image) {
    global $counter, $admingraphic, $Default_Theme;
    $ThemeSel = get_theme();
    if (file_exists("themes/$ThemeSel/images/admin/$image")) {
		$image = "themes/$ThemeSel/images/admin/$image";
    } else {
		$image = "images/admin/$image";
    }
    if ($admingraphic == 1) {
		$img = "<img src=\"$image\" border=\"0\" alt=\"$title\" title=\"$title\"></a><br>";
		$close = "";
    } else {
		$img = "";
		$close = "</a>";
    }
    echo "<td align=\"center\" valign=\"top\" width=\"16%\"><font class=\"content\"><a href=\"$url\">$img<b>$title</b>$close<br><br></font></td>";
    if ($counter == 5) {
		echo "</tr><tr>";
		$counter = 0;
    } else {
		$counter++;
    }
}

function GraphicAdmin() {
    global $aid, $admingraphic, $language, $admin, $prefix, $db, $counter, $modules_admin;
    $newsubs = $db->sql_numrows($db->sql_query("SELECT qid FROM ".$prefix."_queue"));
    $row = $db->sql_fetchrow($db->sql_query("SELECT radminsuper FROM ".$prefix."_authors WHERE aid='$aid'"));
    $radminsuper = intval($row['radminsuper']);
	if ($radminsuper == 1) {
	    OpenTable();
	    echo "<center><a href=\"admin.php\"><font class='title'>"._ADMINMENU."</font></a>";
	    echo "<br><br>";
	    echo"<table border=\"0\" width=\"100%\" cellspacing=\"1\"><tr>";
	    $linksdir = dir("admin/links");
	    while($func=$linksdir->read()) {
	        if(substr($func, 0, 6) == "links.") {
	    	    $menulist .= "$func ";
			}
	    }
	    closedir($linksdir->handle);
	    $menulist = explode(" ", $menulist);
	    sort($menulist);
	    for ($i=0; $i < sizeof($menulist); $i++) {
			if($menulist[$i]!="") {
		    	$sucounter = 0;
		    	include($linksdir->path."/$menulist[$i]");
			}
	    }
	    adminmenu("admin.php?op=logout", ""._ADMINLOGOUT."", "logout.gif");
		echo"</tr></table></center>";
		$counter = "";
    	CloseTable();
    	echo "<br>";
	}
	if ($modules_admin == 1) {
    OpenTable();
    echo "<center><a href=\"admin.php\"><font class='title'>"._MODULESADMIN."</font></a>";
    echo "<br><br>";
    echo"<table border=\"0\" width=\"100%\" cellspacing=\"1\"><tr>";
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
	    	$row = $db->sql_fetchrow($db->sql_query("SELECT mid from " . $prefix . "_modules where title='$modlist[$i]'"));
	    	$mid = intval($row['mid']);
	    	if ($mid == "") {
				$db->sql_query("insert into " . $prefix . "_modules values (NULL, '$modlist[$i]', '$modlist[$i]', '0', '0', '1', '0', '')");
	    	}
		}
    }
	$result = $db->sql_query("SELECT title, admins FROM ".$prefix."_modules ORDER BY title ASC");
	$row2 = $db->sql_fetchrow($db->sql_query("SELECT name FROM ".$prefix."_authors WHERE aid='$aid'"));
	while ($row = $db->sql_fetchrow($result)) {
		$admins = explode(",", $row[admins]);
		$auth_user = 0;
		for ($i=0; $i < sizeof($admins); $i++) {
			if ($row2[name] == "$admins[$i]") {
				$auth_user = 1;	
			}
		}
		if ($radminsuper == 1 || $auth_user == 1) {
			if (file_exists("modules/$row[title]/admin/index.php") AND file_exists("modules/$row[title]/admin/links.php") AND file_exists("modules/$row[title]/admin/case.php")) {
	    		include("modules/$row[title]/admin/links.php");
			}
		}
	}
    adminmenu("admin.php?op=logout", ""._ADMINLOGOUT."", "logout.gif");
    echo"</tr></table></center>";
    CloseTable();
    }
    echo "<br>";
}

function adminMain() {
    global $language, $admin, $aid, $prefix, $file, $db, $sitename, $user_prefix;
    include ("header.php");
    $dummy = 0;
    $Today = getdate();
    $month = $Today['month'];
    $mday = $Today['mday'];
    $year = $Today['year'];
    $pmonth = $Today['month'];
    $pmday = $Today['mday'];
    $pmday = $mday-1;
    $pyear = $Today['year'];
    if ($pmonth=="January") { $pmonth=1; } else
    if ($pmonth=="February") { $pmonth=2; } else
    if ($pmonth=="March") { $pmonth=3; } else
    if ($pmonth=="April") { $pmonth=4; } else
    if ($pmonth=="May") { $pmonth=5; } else
    if ($pmonth=="June") { $pmonth=6; } else
    if ($pmonth=="July") { $pmonth=7; } else
    if ($pmonth=="August") { $pmonth=8; } else
    if ($pmonth=="September") { $pmonth=9; } else
    if ($pmonth=="October") { $pmonth=10; } else
    if ($pmonth=="November") { $pmonth=11; } else
    if ($pmonth=="December") { $pmonth=12; };
    $test = mktime (0,0,0,$pmonth,$pmday,$pyear,1);
    $curDate2 = "%".$month[0].$month[1].$month[2]."%".$mday."%".$year."%";
    $preday = strftime ("%d",$test);
    $premonth = strftime ("%B",$test);
    $preyear = strftime ("%Y",$test);
    $curDateP = "%".$premonth[0].$premonth[1].$premonth[2]."%".$preday."%".$preyear."%";
    GraphicAdmin();
    $aid = substr("$aid", 0,25);
    $row = $db->sql_fetchrow($db->sql_query("SELECT radminsuper, admlanguage FROM ".$prefix."_authors WHERE aid='$aid'"));
    $radminsuper = intval($row['radminsuper']);
    $admlanguage = $row['admlanguage'];
    $result = $db->sql_query("SELECT admins FROM ".$prefix."_modules WHERE title='News'");
	$row2 = $db->sql_fetchrow($db->sql_query("SELECT name FROM ".$prefix."_authors WHERE aid='$aid'"));
	while ($row = $db->sql_fetchrow($result)) {
		$admins = explode(",", $row[admins]);
		$auth_user = 0;
		for ($i=0; $i < sizeof($admins); $i++) {
			if ($row2[name] == "$admins[$i]") {
				$auth_user = 1;	
			}
		}
		if ($auth_user == 1) {
			$radminarticle = 1;
		}
	}
    if ($admlanguage != "" ) {
		$queryalang = "WHERE alanguage='$admlanguage' ";
    } else {
		$queryalang = "";
    }
    $row3 = $db->sql_fetchrow($db->sql_query("SELECT main_module from ".$prefix."_main"));
    $main_module = $row3['main_module'];
    OpenTable();
    echo "<center><b>$sitename: "._DEFHOMEMODULE."</b><br><br>"
		.""._MODULEINHOME." <b>$main_module</b><br>[ <a href=\"admin.php?op=modules\">"._CHANGE."</a> ]</center>";
    CloseTable();
    echo "<br>";
    #Verificador de Atualiza��es - Adicionado no Freddy 0.6
    $row = $db->sql_fetchrow($db->sql_query("SELECT verificar_versao, Version_Num from ".$prefix."_config"));
    $pode_ou_nao = $row['verificar_versao'];
    $versao = $row['Version_Num'];
    $verificar_versao = "http://freddy.codigolivre.org.br/verificar.versao"; //URL        
    $versao_atual = @file_get_contents($verificar_versao);
    if (($versao_atual != $versao) && ($versao_atual > $versao) && ($pode_ou_nao == 1) && ($versao_atual != "")){
    OpenTable();
    echo "<center><b>Disponivel nova vers�o do Freddy: Freddy $versao_atual<br> <a href=\"http://freddy.codigolivre.org.br/index.php?area=downloads\">[Para baixar a nova vers�o do Freddy clique aqui]</a>.</b></center>";
    CloseTable();
    echo "<br>";
    }
    OpenTable();
    $xptz = "visitante(s)";
    $guest_online_num = $db->sql_numrows($db->sql_query("SELECT uname FROM ".$prefix."_session WHERE guest='1'"));
    $who_online_num = $guest_online_num;
    $who_online = "<center><font class=\"option\">Quem est� on-line</font><br><br><font class=\"content\">"._CURRENTLY." $guest_online_num $xptz<br>";
    $row3 = $db->sql_fetchrow($db->sql_query("SELECT COUNT(user_id) AS userCount from $user_prefix"._users." WHERE user_regdate LIKE '$curDate2'"));
    $userCount = $row3['userCount'];
    $row4 = $db->sql_fetchrow($db->sql_query("SELECT COUNT(user_id) AS userCount FROM $user_prefix"._users." WHERE user_regdate LIKE '$curDateP'"));
    $userCount2 = $row4['userCount'];
    echo "<center>$who_online<br></center>";
    echo "<b>Administrador, Seu IP �:</b> ";
    echo "[";
    include("includes/ip.php");
    echo "]";
    CloseTable();
    echo "<br>";
    include ("footer.php");
}

if($admintest) {

    switch($op) {

	case "do_gfx":
	do_gfx();
	break;

	case "deleteNotice":
	deleteNotice($id);
	break;

	case "GraphicAdmin":
        GraphicAdmin();
        break;

	case "adminMain":
	adminMain();
	break;

	case "logout":
		setcookie("admin", false);
		$admin = "";
		include("header.php");
		OpenTable();
		echo "<center><font class=\"title\"><b>"._YOUARELOGGEDOUT."</b></font></center>";
		CloseTable();
		echo "<META HTTP-EQUIV=\"refresh\" content=\"3;URL=admin.php\">";
		include("footer.php");
	break;

	case "login";
	unset($op);

	default:
      if (!is_admin($admin)) {
          login();
      }
	$casedir = dir("admin/case");
	while($func=$casedir->read()) {
	    if(substr($func, 0, 5) == "case.") {
			include($casedir->path."/$func");
	    }
	}
	closedir($casedir->handle);
	$result = $db->sql_query("SELECT title FROM ".$prefix."_modules ORDER BY title ASC");
	while ($row = $db->sql_fetchrow($result)) {
		if (file_exists("modules/$row[title]/admin/index.php") AND file_exists("modules/$row[title]/admin/links.php") AND file_exists("modules/$row[title]/admin/case.php")) {
	    	include("modules/$row[title]/admin/case.php");
		}
	}
	break;

	}

} else {

    switch($op) {

	default:
	login();
	break;

    }

}

?>
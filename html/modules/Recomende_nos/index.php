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

if (!defined('AREA_ARQUIVO')) {
    die ("Você não pode acessar este arquivo diretamente...");
}
require_once("mainfile.php");
$module_name = basename(dirname(__FILE__));
get_lang($module_name);
$pagetitle = "- "._RECOMMEND."";

function RecommendSite() {
    global $user, $cookie, $prefix, $db, $user_prefix, $module_name;
    include ("header.php");
    title(""._RECOMMEND."");
    OpenTable();
    echo "<center><font class=\"content\"><b>"._RECOMMEND."</b></font></center><br><br>"
		."<form action=\"area.php?nome=$module_name\" method=\"post\">"
		."<input type=\"hidden\" nome=\"op\" value=\"SendSite\">";
    if (is_user($user)) {
    	$row = $db->sql_fetchrow($db->sql_query("SELECT username, user_email from ".$user_prefix."_users where usernome='$cookie[1]'"));
		$yn = stripslashes($row['username']);
		$ye = stripslashes($row['user_email']);
    }
    echo "<b>"._FYOURNAME." </b> <input type=\"text\" nome=\"yname\" value=\"$yn\"><br><br>\n"
		."<b>"._FYOUREMAIL." </b> <input type=\"text\" nome=\"ymail\" value=\"$ye\"><br><br><br>\n"
		."<b>"._FFRIENDNAME." </b> <input type=\"text\" nome=\"fname\"><br><br>\n"
		."<b>"._FFRIENDEMAIL." </b> <input type=\"text\" nome=\"fmail\"><br><br>\n"
		."<input type=submit value="._SEND.">\n"
		."</form>\n";
    CloseTable();
    include ('footer.php');
}

function SendSite($yname, $ymail, $fname, $fmail) {
    global $sitename, $slogan, $nukeurl, $module_name;
    $fname = stripslashes(FixQuotes(check_html(removecrlf($fname))));
    $fmail = stripslashes(FixQuotes(check_html(removecrlf($fmail))));
    $yname = stripslashes(FixQuotes(check_html(removecrlf($yname))));
    $ymail = stripslashes(FixQuotes(check_html(removecrlf($ymail))));
    $subject = ""._INTSITE." $sitename";
    $message = ""._HELLO." $fname:\n\n"._YOURFRIEND." $yname "._OURSITE." $sitename "._INTSENT."\n\n\n"._FSITENAME." $sitename\n$slogan\n"._FSITEURL." $nukeurl\n";
    if ($fname == "" || $fmail == "" || $yname == "" || $ymail == "") {
    Header("Location: area.php?nome=$module_name");
    } else {
    mail($fmail, $subject, $message, "From: \"$yname\" <$ymail>\nX-Mailer: PHP/" . phpversion());
    update_points(3);
    Header("Location: area.php?nome=$module_name&op=SiteSent&fnome=$fname");
   }
}

function SiteSent($fname) {
    include ('header.php');
    $fname = stripslashes(FixQuotes(check_html(removecrlf($fname))));
    OpenTable();
    echo "<center><font class=\"content\">"._FREFERENCE." $fname...<br><br>"._THANKSREC."</font></center>";
    CloseTable();
    include ('footer.php');
}


switch($op) {

    case "SendSite":
    SendSite($yname, $ymail, $fname, $fmail);
    break;
	
    case "SiteSent":
    SiteSent($fname);
    break;

    default:
    RecommendSite();
    break;

}
?>
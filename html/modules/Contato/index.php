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
$aid = substr("$aid", 0,25);
$row = $db->sql_fetchrow($db->sql_query("SELECT radminsuper FROM " . $prefix . "_authors WHERE aid='$aid'"));

/**********************************/
/* Configuration                  */
/*                                */
/* You can change this:           */
/* $index = 0; (right side off)   */
/**********************************/
$index = 1;
$subject = "$sitename "._FEEDBACK."";
/**********************************/

include("header.php");
$cookie[0] = intval($cookie[0]);
if ($cookie[1] != "") {
    $row = $db->sql_fetchrow($db->sql_query("SELECT name, username, user_email FROM ".$user_prefix."_users WHERE user_id='$cookie[0]'"));
    if ($row['name'] != "") {
	$sender_name = $row['name'];
    } else {
	$sender_name = $row['username'];
    }
    $sender_email = $row['user_email'];
}
if ($chdir == "") $chdir = getcwd( );
$permissoes = "db/dbtxt/Contato";
verificar_permissoes($permissoes);
$xls = "$chdir/$permissoes";
$fp = @fopen($xls, "a+"); 
$feedback = @file_get_contents($xls);
@fclose($fp);
$form_block = "
    <center><font class=\"title\"><b>$sitename: "._FEEDBACKTITLE."</b></font>
    <br><br><font class=\"content\">$feedback</font>
    <FORM METHOD=\"post\" ACTION=\"area.php?nome=$module_name\">
    <P><strong>"._YOURNAME.":</strong><br>
    <INPUT type=\"text\" NAME=\"sender_name\" VALUE=\"$sender_name\" SIZE=30></p>
    <P><strong>"._YOUREMAIL.":</strong><br>
    <INPUT type=\"text\" NAME=\"sender_email\" VALUE=\"$sender_email\" SIZE=30></p>
    <P><strong>"._MESSAGE.":</strong><br>
    <TEXTAREA NAME=\"message\" COLS=48 ROWS=10 WRAP=virtual>$message</TEXTAREA></p>
    <INPUT type=\"hidden\" nome=\"opi\" value=\"ds\">
    <P><INPUT TYPE=\"submit\" NAME=\"submit\" VALUE=\""._SEND."\"></p>
    </FORM></center>
";

OpenTable();
if ($opi != "ds") {
    echo "$form_block";
} elseif ($opi == "ds") {
    if ($sender_name == "") {
	$name_err = "<center><font class=\"option\"><b><i>"._FBENTERNAME."</i></b></font></center><br>";
	$send = "no";
    } 
    if ($sender_email == "") {
	$email_err = "<center><font class=\"option\"><b><i>"._FBENTEREMAIL."</i></b></font></center><br>";
	$send = "no";
    } 
    if ($message == "") {
    	$message_err = "<center><font class=\"option\"><b><i>"._FBENTERMESSAGE."</i></b></font></center><br>";
	$send = "no";
    } 
    if ($send != "no") {
	$sender_name = removecrlf($sender_name);
	$sender_email = removecrlf($sender_email);
	$charset="iso-8859-1";
	$msg = "<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=$charset\"></head><body bgcolor=#ffffff>";
	$msg = "$sitename<br><br>";
	$msg .= ""._SENDERNAME.": $sender_name<br>";
	$msg .= ""._SENDEREMAIL.": $sender_email<br>";
	$msg .= ""._MESSAGE.": $message\n\n";
	$to = $adminmail;
	$mailheaders ="MIME-Version: 1.0 \n";
	$mailheaders .="From: $nome<$email>\n";
	$mailheaders .="X-Mailer: WEbMailer \n";
	$mailheaders .="X-Priority: 1\n";
	$mailheaders .="Content-Type: text/html; charset=$charset \n";
	$mailheaders .= "From: $sender_name <$sender_email>\n";
	$mailheaders .= "Reply-To: $sender_email\n\n";
	mail($to, $subject, $msg, $mailheaders);
	echo "<P><center>"._FBMAILSENT."</center></p>";
	echo "<P><center>"._FBTHANKSFORCONTACT."</center></p>";
    } elseif ($send == "no") {
	OpenTable2();
	echo "$name_err";
	echo "$email_err";
	echo "$message_err";
	CloseTable2();
	echo "<br><br>";
	echo "$form_block";  
    } 
}
if (is_admin($admin)) {
echo "<a href=admin.php?op=editor&see=Contato>[Editar este módulo]</a>";
}
CloseTable();   
include("footer.php");
?>
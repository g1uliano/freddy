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

if ( !defined('ADMIN_FILE') )
{
	die("Acesso Ilegal ao Arquivo");
}
if (!stristr($_SERVER['SCRIPT_NAME'], "admin.php")) { die ("Acesso Negado"); }
global $prefix, $db;
$aid = substr("$aid", 0,25);
$row = $db->sql_fetchrow($db->sql_query("SELECT radminsuper FROM " . $prefix . "_authors WHERE aid='$aid'"));
if ($row['radminsuper'] == 1) {

function hreferer() {
    global $bgcolor2, $prefix, $db;
    include ("header.php");
    GraphicAdmin();
    OpenTable();
    echo "<center><font class=\"title\"><b>" . _HTTPREFERERS . "</b></font></center>";
    CloseTable();
    echo "<br>";
    OpenTable();
    echo "<center><b>" . _WHOLINKS . "</b></center><br><br>"
	."<table border=\"0\" width=\"100%\">";
    $result = $db->sql_query("SELECT rid, url from " . $prefix . "_referer");
    while ($row = $db->sql_fetchrow($result)) {
	$rid = intval($row['rid']);
	$url = $row['url'];
	echo "<tr><td bgcolor=\"$bgcolor2\"><font class=\"content\">$rid</td>"
	    ."<td bgcolor=\"$bgcolor2\"><font class=\"content\"><a target=\"_blank\" href=\"$url\">$url</a></td></tr>";
    }
    echo "</table>"
	."<form action=\"admin.php\" method=\"post\">"
	."<input type=\"hidden\" name=\"op\" value=\"delreferer\">"
	."<center><input type=\"submit\" value=\"" . _DELETEREFERERS . "\"></center>";
    CloseTable();
    include ("footer.php");
}

function delreferer() {
    global $prefix, $db;
    $db->sql_query("delete from " . $prefix . "_referer");
    Header("Location: admin.php?op=adminMain");
}

switch($op) {

    case "hreferer":
    hreferer();
    break;

    case "delreferer":
    delreferer();
    break;

}

} else {
    echo "Access Denied";
}

?>
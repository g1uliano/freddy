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
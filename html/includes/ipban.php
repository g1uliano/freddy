<?php
/**********************************************/
/* Freddy - Baseado na Engine do Php-Nuke 7.5 */
/* ------------------------------------------ */
/*                                            */
/* Freddy ? um Software Livre liberado sob    */
/* Licen?a GNU/GPL.                           */
/*                                            */
/* CoDeD By HellNeT InterneT Services         */
/* Desenvolvedor: Giuliano Cardoso            */
/**********************************************/
/* Baseado no Php-Nuke 7.5                    */
/* http://www.phpnuke.org                     */
/**********************************************/
//Sobre a  Licen?a GNU/GPL - http://www.gnu.org
/************************************************************************************/
/*  Freedy ? um software livre; voc? pode redistribui-lo e/ou                       */
/*  modifica-lo dentro dos termos da Licen?a P?blica Geral GNU como                 */
/*  publicada pela Funda??o do Software Livre (FSF); na vers?o 2 da                 */
/*  Licen?a.                                                                        */
/*                                                                                  */
/*  O Freddy ? distribuido na esperan?a que possa ser  util,                        */
/*  mas SEM NENHUMA GARANTIA; sem uma garantia implicita de ADEQUA??O a qualquer    */
/*  MERCADO ou APLICA??O EM PARTICULAR. Veja a                                      */
/*  Licen?a P?blica Geral GNU para maiores detalhes.                                */
/*                                                                                  */
/*  Voc? deve ter recebido uma c?pia da Licen?a P?blica Geral GNU                   */
/*  junto com este programa, se n?o, escreva para a Funda??o do Software            */
/*  Livre(FSF) Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA       */
/************************************************************************************/

global $prefix, $db;
$ip = $_SERVER["REMOTE_ADDR"];
$numrow = $db->sql_numrows($db->sql_query("SELECT id FROM ".$prefix."_banned_ip WHERE ip_address='$ip'"));
if ($numrow != 0) {
	echo "<br><br><center><img src='images\admin\ipban.gif'><br><br><b>Voc? foi banido pelo Administrador!</b></center>";
	die();
}

?>
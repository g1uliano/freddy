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

include("mainfile.php");
$db->sql_query("DROP TABLE IF EXISTS ".$prefix."_error_config");
$db->sql_query("CREATE TABLE ".$prefix."_error_config (log_errors int(2) NOT NULL default '0', show_image int(2) NOT NULL default '0', rightblocks int(2) NOT NULL default '0', show_info_saved int(2) NOT NULL default '0', totalerrors int(10) unsigned NOT NULL default '0')");
$db->sql_query("INSERT INTO ".$prefix."_error_config VALUES (1, 1, 1, 0, 0)");
$db->sql_query("DROP TABLE IF EXISTS ".$prefix."_errors");
$db->sql_query("CREATE TABLE ".$prefix."_errors (error_id int(11) NOT NULL auto_increment, error_sort text, time text, ip_address text, referer text, error_url text, PRIMARY KEY  (error_id), KEY error_id (error_id))");
echo "<b>O Gerenciador de Erros foi instalado com sucesso!</b><br>";
echo "<b>Delete este arquivo imediatamente.</b>";
?>
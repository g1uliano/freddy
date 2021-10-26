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

include("mainfile.php");
$db->sql_query("DROP TABLE IF EXISTS ".$prefix."_error_config");
$db->sql_query("CREATE TABLE ".$prefix."_error_config (log_errors int(2) NOT NULL default '0', show_image int(2) NOT NULL default '0', rightblocks int(2) NOT NULL default '0', show_info_saved int(2) NOT NULL default '0', totalerrors int(10) unsigned NOT NULL default '0')");
$db->sql_query("INSERT INTO ".$prefix."_error_config VALUES (1, 1, 1, 0, 0)");
$db->sql_query("DROP TABLE IF EXISTS ".$prefix."_errors");
$db->sql_query("CREATE TABLE ".$prefix."_errors (error_id int(11) NOT NULL auto_increment, error_sort text, time text, ip_address text, referer text, error_url text, PRIMARY KEY  (error_id), KEY error_id (error_id))");
echo "<b>O Gerenciador de Erros foi instalado com sucesso!</b><br>";
echo "<b>Delete este arquivo imediatamente.</b>";
?>
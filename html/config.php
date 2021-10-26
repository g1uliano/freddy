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
#Verificar de Novas Vers�es.
#Este Recursos foi adicionado, para que, quando for tentado a instala��o de uma vers�o obsoleta, o usu�rio esteja consciente disso, e possa atualiza o seu Freddy.
$verificar_versao = "http://freddy.codigolivre.org.br/verificar.versao"; //URL
$versao_atual = @file_get_contents($verificar_versao);
$minha_versao = "0.8";
if (($versao_atual != "") && ($versao_atual > $minha_versao ) && ($versao_atual != $minha_versao)) {
die ("<html><head><title>Freddy $minha_versao - Aviso de Atualiza��o</title></head><body bgcolor=\"#FFFFFF\" hlink=\"#000000\" vlink=\"#000000\" link=\"#000000\"><center><font face=\"verdana\" size=\"2\" color=\"#000000\"><b><h1>Aviso de Atualiza��o</h1>Voc� est� tentando instalar uma vers�o desatualizada do Freddy, deseja continua mesmo assim?<br><br><a href=\"install/index.php\">Sim</a>&nbsp;<a href=\"http://freddy.codigolivre.org.br/index.php?area=downloads\">N�o</a></b><br><br><font color=\"red\"><b>Obs: Voc� est� utilizando a vers�o $minha_versao, por�m a vers�o mais recente � a $versao_atual; vers�es recentes tem menas falhas e mais estabilidade, do que vers�es antigas do Freddy, por isso um upgrade � altamente recomend�vel.</b></font></font></body></html>");
} else {
$local = "install/index.php";
$header_location = ( @preg_match('/Microsoft|WebSTAR|Xitami/', $_SERVER['SERVER_SOFTWARE']) ) ? 'Refresh: 0; URL=' : 'Location: ';
header($header_location . $local);
}
?>
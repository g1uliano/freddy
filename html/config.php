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
#Verificar de Novas Versões.
#Este Recursos foi adicionado, para que, quando for tentado a instalação de uma versão obsoleta, o usuário esteja consciente disso, e possa atualiza o seu Freddy.
$verificar_versao = "http://freddy.codigolivre.org.br/verificar.versao"; //URL
$versao_atual = @file_get_contents($verificar_versao);
$minha_versao = "0.8";
if (($versao_atual != "") && ($versao_atual > $minha_versao ) && ($versao_atual != $minha_versao)) {
die ("<html><head><title>Freddy $minha_versao - Aviso de Atualização</title></head><body bgcolor=\"#FFFFFF\" hlink=\"#000000\" vlink=\"#000000\" link=\"#000000\"><center><font face=\"verdana\" size=\"2\" color=\"#000000\"><b><h1>Aviso de Atualização</h1>Você está tentando instalar uma versão desatualizada do Freddy, deseja continua mesmo assim?<br><br><a href=\"install/index.php\">Sim</a>&nbsp;<a href=\"http://freddy.codigolivre.org.br/index.php?area=downloads\">Não</a></b><br><br><font color=\"red\"><b>Obs: Você está utilizando a versão $minha_versao, porém a versão mais recente é a $versao_atual; versões recentes tem menas falhas e mais estabilidade, do que versões antigas do Freddy, por isso um upgrade é altamente recomendável.</b></font></font></body></html>");
} else {
$local = "install/index.php";
$header_location = ( @preg_match('/Microsoft|WebSTAR|Xitami/', $_SERVER['SERVER_SOFTWARE']) ) ? 'Refresh: 0; URL=' : 'Location: ';
header($header_location . $local);
}
?>
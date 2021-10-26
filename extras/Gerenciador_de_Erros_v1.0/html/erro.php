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
/************************************************************************/
/* Gerenciador de Erros v 1.0                                           */
/* Este M�dulo foi Desenvolvido para Freddy                             */
/************************************************************************/
if (isset($newlang) AND !eregi("\.","$newlang")) {
if (file_exists("language/erro-br.php")) {
    @include("language/erro-br.php");
        $currentlang = $newlang;
} else {
    @include("language/erro-br.php");
    $currentlang = $language;
}
   } elseif (isset($lang)) {
@include("language/erro-br.php");
$currentlang = $lang;
   } else {
@include("language/erro-br.php");
$currentlang = $language;
   }
require_once("mainfile.php");
echo "<base href=\"$nukeurl\">\n\n";
if($erro == "") {
@include("includes/erros/404.php");
}
 elseif ($erro == "404") {
 @include("includes/erros/404.php");
 }
 elseif ($erro == "403") {
 @include("includes/erros/403.php");
 }
 elseif ($erro == "500") {
 @include("includes/erros/500.php");
 }
 elseif ($erro == "401") {
 @include("includes/erros/401.php");
 }
else {
@include("includes/erros/404.php");
}
include("footer.php");
?>
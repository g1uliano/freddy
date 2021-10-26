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
/************************************************************************/
/* Gerenciador de Erros v 1.0                                           */
/* Este Módulo foi Desenvolvido para Freddy                             */
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
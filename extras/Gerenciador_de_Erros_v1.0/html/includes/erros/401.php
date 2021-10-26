<?php
/************************************************************************/
/* Gerenciador de Erros v 1.0                                           */
/* Este Módulo foi Desenvolvido para Nuke Lite                          */
/* Baseado no Error Manager v 2.1                                       */
/************************************************************************/
/* This program is free software. You can redistribute it and/or modify	*/
/* it under the terms of the GNU General Public License as published by	*/
/* the Free Software Foundation; either version 2 of the License.	*/
/************************************************************************/
/* This Error Manager is made by Gijza.net			        */
/* The idea came from DR3N.tk						*/
/************************************************************************/
//Este Módulo utiliza as linhas de código do Error Manager original.
if (!eregi("erro.php", $PHP_SELF)) { die ("Acesso Negado!"); }
$pagetitle = "- "._EM401.""; //Define o Titulo da Página.
//query the database for the configuration settings
$result = sql_query("SELECT log_errors, show_image, rightblocks, show_info_saved, totalerrors FROM ".$prefix."_error_config", $dbi);
list($log_errors, $show_image, $rightblocks, $show_info_saved, $totalerrors) = sql_fetch_row($result, $dbi);
include("includes/erros/bd.php"); //Inlui o arquivo que se conecta ao banco de dados e insere as innstruções.
//Corpo da Página.
OpenTable();
$erro = "401";
echo "<center><B>"._EM401."</B></center>";
echo "<br>";
if ($show_image == 1) {
echo "<center><img src=images/error/$erro-error.gif alt=\"\" border=0></center>";
}
echo "<br><center><A href =\"javascript:history.go(-1)\">"._EMGOBACK."</A> "._EMORTRY." <A href=\"$nukeurl/index.php\">"._EMHOME."</A></center>";
echo "<center>"._EMSORRY.", $sitename !</center>";

if ($log_errors == 1) {
if ($show_info_saved == 1) {
echo "<BR>\n"._EMRECDATA.":<BR>";
echo "<table>\n<tr>\n<td nowrap>"._EMDATETIME." : </td><td nowrap>$data</td>\n</tr>";//Linha Modificada.
echo "<tr>\n<td nowrap>"._EMSORT." : </td><td nowrap>$erro</td>\n</td>";
echo "<tr>\n<td nowrap>"._EMIP." : </td><td nowrap>$ip_address</td>\n</tr>";
echo "<tr>\n<td nowrap>"._EMREF." : </td><td nowrap>$referer</td>\n</tr>";
echo "<tr>\n<td nowrap>"._EMURL." : </td><td nowrap>$error_url</td>\n</tr>\n</table>";
}
}
CloseTable();
?> 

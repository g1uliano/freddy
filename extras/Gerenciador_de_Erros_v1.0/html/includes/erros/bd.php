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
$index = $rightblocks;
include("header.php");
/*Inclusão Feita por: Giuliano Cardoso*/
global $diasemana, $mesnome, $ano, $mes, $dia, $diasem, $hora, $horacerta, $data;
$diasemana[0] = "Domingo";
$diasemana[1] = "Segunda-feira";
$diasemana[2] = "Terça-feira";
$diasemana[3] = "Quarta-feira";
$diasemana[4] = "Quinta-feira";
$diasemana[5] = "Sexta-feira";
$diasemana[6] = "Sábado";

$mesnome[1] = "janeiro";
$mesnome[2] = "fevereiro";
$mesnome[3] = "março";
$mesnome[4] = "abril";
$mesnome[5] = "maio";
$mesnome[6] = "junho";
$mesnome[7] = "julho";
$mesnome[8] = "agosto";
$mesnome[9] = "setembro";
$mesnome[10] = "outubro";
$mesnome[11] = "novembro";
$mesnome[12] = "dezembro";

$ano = date('Y');
$mes = date('n');
$dia = date('d');
$diasem = date('w');
$hora=getdate();  

if ($hora['minutes']<10)
{
       $hora['minutes']="0".$hora['minutes']  ;    
}

$horacerta=($hora['hours'].':'.$hora['minutes']);

$data = $diasemana[$diasem].', '.$dia.' de '.$mesnome[$mes].' de '.$ano.' - Hora: '.$horacerta;
/*Fim da Inclusão Feita por: Giuliano Cardoso*/
global $nukeurl, $siteurl, $dbi, $prefix, $log_errors, $show_image, $rightblocks, $show_info_saved, $totalerrors, $data; //Linha Modificada.
if ($log_errors == 1) {
	$referer= getenv("HTTP_REFERER");
	$ip_address= getenv("REMOTE_ADDR");
	// Build the current URL
	$servername = getenv("SERVER_NAME");
	$serverport = getenv("SERVER_PORT");
	$current_url = getenv("REQUEST_URI");
	$error_url= "http://".$servername.":".$serverport."".$current_url;
	mysql_query("insert into ".$prefix."_errors values ('', '$erro', '$data', '$ip_address', '$referer', '$error_url')");//Linha Modificada.
	//add 1 to the counter of total errors
	$totalerrors = $totalerrors + 1;
    sql_query("UPDATE ".$prefix."_error_config SET totalerrors='$totalerrors'", $dbi);
}
// lets build the error page!
?>
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

if (!isset($mainfile)) { include("mainfile.php"); }


$index = 0;
$height = 600;


include("header.php"); 
OpenTable();
function busca($search,$pg) {

//	Essa função conecta ao Google e retorna os resultados da busca

	global $tr;

	$fp    = fsockopen ("www.google.com", 80, $errno);

	if ($fp) {

		$conectar =  "Get /search?num=30&hl=pt&ie=UTF-8&oe=UTF-8&q=$search&btnG=Pesquisa+Google&lr=lang_pt&start=$pg HTTP/1.0\r\nHost: www.google.com\r\n\r\n";

		fputs ($fp, $conectar);

		$resultado = "";

		while (!feof($fp)) {
	
		$resultado .= fgets ($fp,128);
	
	}
		fclose ($fp);
	
	$resultado = ereg_replace("\n","",$resultado);
	
	$eng       = "/<p class=g><a href=(.*?)>(.*?)<\/a><br><font size=-1>(.*?)<br>/";

		preg_match_all($eng,$resultado,$matches);


		$exp_reg_total_resultados = "/<\/b> de <b>(.*?)<\/b>. A pesquisa/";

		preg_match_all($exp_reg_total_resultados,$resultado,$total_resultados);

		$tr  = formata_valor($total_resultados[1][0]) * 1;

	}

	return $matches;

}


function formata_valor($valor) {

// funcao usada para formatar o valor dos resultados
	
$valor    = str_replace(".","",$valor);

	$valor    = str_replace(",","",$valor);

	return $valor;
}


/*

Início do código
*/


$search = substr($q,0,255); // limitar a 255 caracteres a busca

$search = urlencode(stripslashes($search));

$tr     = 0; // total de resultados

$pg     = ($pg * 5); // páginas

$matches= busca($search,$pg); // resultados da pesquisa

$num    = count($matches[0]); // número de resultados da pesquisa na página


echo '
<img src="http://www.google.com/intl/pt-BR/logos/Logo_60wht.gif" name="Google"><br>

<form>
	
<input type="text" size="50" maxlength="255" name="q" value="">

	<input type="submit" value="Buscar">

</form>

';


// Imprime os resultados
// inclui a pesquisa da te respondo
include"includes/tr.php";
for($x=0;$x<$num;$x++) {

	 $url = $matches[1][$x];

	 $title = $matches[2][$x];

	 $description = $matches[3][$x];
  
	 echo "<br><a href=$url>$title<br></a>$description<br>$url<br>\n";

}


$numero_paginas = ceil($tr / 30); // arredonda o número de páginas


echo "<br><br>";


if (($numero_paginas > 1) && ($pg > 0)) {

	echo '<a href="ms.php?q='.$search.'&pg='.($pg - 30).'"> << Anterior </a> &nbsp;';
}

if (($numero_paginas > 1) && ($pg < $numero_paginas)) {

	echo '&nbsp; <a href="busca.php?q='.$search.'&pg='.($pg + 30).'"> Próxima >> </a>';
}

	CloseTable();
	include("footer.php");	

?>
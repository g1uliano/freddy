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

if (!isset($mainfile)) { include("mainfile.php"); }


$index = 0;
$height = 600;


include("header.php"); 
OpenTable();
function busca($search,$pg) {

//	Essa fun��o conecta ao Google e retorna os resultados da busca

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

In�cio do c�digo
*/


$search = substr($q,0,255); // limitar a 255 caracteres a busca

$search = urlencode(stripslashes($search));

$tr     = 0; // total de resultados

$pg     = ($pg * 5); // p�ginas

$matches= busca($search,$pg); // resultados da pesquisa

$num    = count($matches[0]); // n�mero de resultados da pesquisa na p�gina


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


$numero_paginas = ceil($tr / 30); // arredonda o n�mero de p�ginas


echo "<br><br>";


if (($numero_paginas > 1) && ($pg > 0)) {

	echo '<a href="ms.php?q='.$search.'&pg='.($pg - 30).'"> << Anterior </a> &nbsp;';
}

if (($numero_paginas > 1) && ($pg < $numero_paginas)) {

	echo '&nbsp; <a href="busca.php?q='.$search.'&pg='.($pg + 30).'"> Pr�xima >> </a>';
}

	CloseTable();
	include("footer.php");	

?>
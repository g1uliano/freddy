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

	if (substr($file,0,7)=="http://"){
		echo "<IFRAME src=\"$file\" width=\"100%\" height=\"$height\" scrolling=\"auto\" frameborder=\"0\">";
		echo "</IFRAME><center><hr size=\"1\" noshade><a href=\"$file\" target=\"_blank\">$file</a></center>";
		
		

	} else {
	
		if(substr($file,-4)!=".htm" && substr($file,-5)!=".html" ){
			echo "ERROR: Somente arquivos html ou htm"; 
			CloseTable();
		} else {
		include ($file);
		}

}

	CloseTable();
	include("footer.php");	
?>
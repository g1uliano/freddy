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
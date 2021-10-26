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

if ( !defined('ADMIN_FILE') )
{
	die("OpS! Você não pode acessar este arquivo.");
}
if (!stristr($_SERVER['SCRIPT_NAME'], "admin.php")) { die ("Acesso Negado!"); }
global $prefix, $db;
$aid = substr("$aid", 0,25);
$row = $db->sql_fetchrow($db->sql_query("SELECT radminsuper FROM " . $prefix . "_authors WHERE aid='$aid'"));
if ($row['radminsuper'] == 1) {

include("header.php");
GraphicAdmin();
title("Upload de Arquivos");
OpenTable();
if ($chdir == "") $chdir = getcwd( );
$myurl = $_SERVER['SERVER_NAME'];
if($mode =="upload_file") // Se a variavel $mode do form for upload_file entao entra aqui!! //
{
      $diretorio = "$chdir/upload";  /* não deixe de dar chmod 777 para este diretorio */
   
    if ($userfile != "")
    {
       
	$nome_img = $_FILES['userfile']['name'];
	$tamanho = $_FILES['userfile']['size'];
        @copy("$userfile","$diretorio/$nome_img") or die("$nome_img: Erro na cópia do arquivo! verifique a permissão do seu diretório!");
	$size = $tamanho;
        echo "Arquivo transferido com sucesso!";
        echo "<br>";
        echo "URL: <a href=upload/$nome_img>http://$myurl/upload/$nome_img </a>";
        echo "<br>Nome: ";
        echo $nome_img;
	echo "<br>Tamanho: $size";
        echo "<br>";
        echo "<center>";
        echo "<a href='admin.php?op=upload'>Voltar</a>";
        }

}

if(!$submit) {

echo "<table width=\"90%\" cellspacing=\"4\" align=\"center\">";
echo "<FORM METHOD=\"post\" ACTION=\"admin.php?op=upload\" ENCTYPE=\"multipart/form-data\">";
echo "<input type=\"hidden\" name=\"mode\" value=\"upload_file\">";
echo "<tr>";
echo "<td>Selecione o arquivo para upload:</td>";
echo "<td><INPUT TYPE=\"file\" NAME=\"userfile\" SIZE=\"30\"></td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan=\"2\" align=\"center\"><input type=\"submit\" name=\"submit\" value=\"Enviar\" width=\"150\"></td>";
echo "</tr>";
echo "</table>";
}    
CloseTable();
include("footer.php");     

} else {
    echo "Acesso Negado!";
}
?>

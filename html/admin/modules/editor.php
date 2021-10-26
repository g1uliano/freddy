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

if ( !defined('ADMIN_FILE') )
{
	die("OpS! Voc� n�o pode acessar este arquivo.");
}
if (!stristr($_SERVER['SCRIPT_NAME'], "admin.php")) { die ("Acesso Negado!"); }
global $prefix, $db;
$aid = substr("$aid", 0,25);
$row = $db->sql_fetchrow($db->sql_query("SELECT radminsuper FROM " . $prefix . "_authors WHERE aid='$aid'"));
if ($row['radminsuper'] == 1) {

include("header.php");
GraphicAdmin();
title("Editor de Conte�do");
OpenTable();
if ($chdir == "") $chdir = getcwd( );
if ($see != "Contato" && $arquivo != "Contato") {
if ($dir = opendir("$chdir/db/dbtxt/")) {
      echo "<br><i>O conte�do dos m�dulos (que tenham sido criados com o Easy Modules) do seu site est�o contidos em arquivos txt's.Usando este editor voc� pode editar o conte�do deles, para isto basta clicar em um dos arquivos abaixo</i>.<br><br>";
      echo "<TABLE border=1 cellspacing=1 cellpadding=0>";
      echo "<TR>";
      echo "<TD valign=top>";
      echo "<b><font size=2 face=arial>Listando todos os Arquivos</b> <br><br>";
   while ($nome_itens = readdir($dir)) { // monta o vetor com os itens da pasta
    $itens[] = $nome_itens;
}
sort($itens); // ordena o vetor de itens
foreach ($itens as $listar) {  //percorre o vetor para fazer a separacao entre arquivos e pastas
   if ($listar!="." && $listar!=".." && $listar!="index.html" && $listar!="Contato"){ // retira os itens "./" e "../" para que retorne apenas os arquivos
   		if (is_dir($listar)) { // checa se � uma pasta
			$pastas[]=$listar; // caso VERDADEIRO adiciona o item ao vetor de pastas
		} else{ 
			$arquivos[]=$listar;// caso FALSO adiciona o item ao vetor de arquivos
		}
   }
}
if ($arquivos != "") {      
foreach($arquivos as $listar){// lista os arquivos
   print "[>] <a href='admin.php?op=editor&see=$listar'>$listar</a><br>";}
          flush( );
} else { echo "[!] Nenhum m�dulo instalado!"; }
        }
      echo "</TD>";
      echo "</TR>";
      echo "</TABLE>";
}
if ($see != "") {
$result3 = $db->sql_query("SELECT mid, title, custom_title, active, view, inmenu, mod_group from " . $prefix . "_modules order by title ASC");
    while ($row3 = $db->sql_fetchrow($result3)) {
	$mid = intval($row3['mid']);
	$title = $row3['title'];
	$custom_title = $row3['custom_title'];
	if ($custom_title == "") {
	    $custom_title = ereg_replace("_"," ",$title);
	    $db->sql_query("update " . $prefix . "_modules set custom_title='$custom_title' where mid='$mid'");
	}
	if ($custom_title == "") {
	    $custom_title = ereg_replace("_", " ", $title);
	}
	if ($title == $see) $xmodulo = $custom_title;
	}
$permissoes = "db/dbtxt/$see";
$xls = "$chdir/$permissoes";
verificar_permissoes($permissoes);
$linha = @file_get_contents($xls);
echo "<form name=\"read\" action=\"admin.php?op=editor&arquivo=$see\" method=\"post\" enctype=\"multipart/form-data\">";
echo "<b>Editando: [$see] </b><br>";
if ($see != Contato) {
echo "Titulo do M�dulo<br>Ex: <i> Jogos & Filmes.</i><br><input type=\"text\" name=\"modulo\" value=\"$xmodulo\" size=\"60\"><br><br>";
}
echo "<textarea name=\"conteudo\" cols=80 rows=15>"; 
echo "$linha";
echo "</textarea>";
echo "<input type=\"submit\" name=\"alterar\" value=\"Enviar\" class=boton>";
echo "</form>";
}
if($alterar){
if ($arquivo != "Contato") {
$AREA_ARQUIVO = "'AREA_ARQUIVO'";
$index_php = '<?php' . "\n" .
	   '##############################################' . "\n" .
	   '# Freddy - Baseado no Miolo do Php-Nuke 7.5  #' . "\n" .
           '# ------------------------------------------ #' . "\n" .
           '# Este � um software propriet�rio e a sua    #' . "\n" .
           '# distribui��o n�o autorizada � crime.       #' . "\n" .
           '#                                            #' . "\n" .
           '# Altera��es no c�digo-fonte s�o autorizadas #' . "\n" .
           '##############################################' . "\n" .
           '#M�dulo '.$modulo.' ' . "\n" .
	   'if (!defined('.$AREA_ARQUIVO.')) {die ("Voc� n�o pode acessar este arquivo diretamente..."); }' . "\n" .
	   'require_once("mainfile.php");' . "\n" .
	   '$module_name = basename(dirname(__FILE__));' . "\n" .
	   'get_lang($module_name);' . "\n" .
	   '$pagetitle = "- '.$modulo.'";' . "\n" .
	   'include("header.php");' . "\n" .
	   '$index = 0;' . "\n" .
	   'if ($chdir == "") $chdir = getcwd( );' . "\n" .
	   'OpenTable();' . "\n" .
	   '$contentx = "$chdir/db/dbtxt/'.$arquivo.'";' . "\n" .
	   'if (file_exists($contentx)) {' . "\n" .
	   '$vazio = filesize($contentx);' . "\n" .
	   'if ($vazio == 2) echo "<font color=red><center><img src=\"images/$site_logo\"><br><br>M�dulo Gerado pelo Easy Modules<br><br><i>Obs: Quando voc� adicionar o conteudo a este m�dulo, esta mensagem desaparecer�.</i><br><br><b>[!] Adicione conte�do a este m�dulo usando o <a href=admin.php?op=editor>Editor</a></b></font></center>";' . "\n" .
	   '@include("$contentx"); }' . "\n" .
	   'else {' . "\n" .
	   'echo "<b>H� um erro nesta �rea</b>";' . "\n" .
	   '}' . "\n" .
	   'CloseTable();' . "\n" .
	   'include("footer.php");' . "\n" .
	   '?>';
	   $basedomodulo = "$chdir/modules/$arquivo";
	   $fpm = @fopen("$basedomodulo/index.php", "w");
	   @fputs($fpm, $index_php);
	   @fclose($fpm);
	   }
	$fp = fopen("$chdir/db/dbtxt/$arquivo", "w");
	$content = trim($conteudo);
	$conteudofinal = stripslashes($content);
	fputs($fp, $conteudofinal);
	fclose($fp);
	echo "<b>Conte�do alterado com sucesso!</b><br>";
	if ($arquivo == "Contato") {
	echo "<a href=area.php?nome=Contato>Voltar para o M�dulo Contato</a>";
	}
}
    
CloseTable();
include("footer.php");     
} else {
    echo "Acesso Negado!";
}
?>
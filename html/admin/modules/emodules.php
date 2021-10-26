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
title("Easy Modules");
OpenTable();
if ($chdir == "") $chdir = getcwd( );
if ($xls == "") { //Por precaução a variavel xls garante que o formulário não será exibido na index.
echo "<i>Muitos navegadores, para acelerar o carregamento das páginas, exibem o cache em vez da página atualizada, caso você tenha criado um módulo e não consiga vê-lo ainda, clique em atualizar ou pressione F5.</i><br><br></b>";
echo "<b>[*] Criar Novo Módulo<br></b>";
echo "<i>[!] É necessário preencher todos os campos para que o módulo seja criado.<br></i>";
echo "<form name=\"easymodules\" action=\"admin.php?op=emodules\" method=\"post\" enctype=\"multipart/form-data\">";
echo "Titulo do Módulo<br>Ex: <i> Jogos & Filmes.</i><br><input type=\"text\" name=\"modulo\" size=\"60\"><br>";
echo "Nome da Pasta<br>Ex: <i>Jogos_e_Filmes, JogoseFilmes.</i><br><input type=\"text\" name=\"pasta\" size=\"60\"><br>";
echo "<input type=\"hidden\" name=\"xls\" value=\"1\">";
echo "<input type=\"submit\" name=\"enviar\" value=\"Criar Módulo\">";
echo "</form>";
}
else {
      if (($modulo != "") && ($pasta != "") && ($pasta != "")) { //Se modulo ou pasta ou caixabranca estiverem vazios não funfa.
      #Criando Diretório - Aqui nós criamos a pasta que irá abrigar nosso grande amigo módulo.
      $chmod = "0700"; //Permissão do Diretório.Segundo o Manual do PHP, 0700 é constante do PHP e da permissões suficientes a pasta.Mas como tem dia que é noite, eu resolvi que isso deveria ser uma variavel.Numca se sabe.
      $basedomodulo = "$chdir/modules/$pasta";
           if (file_exists($basedomodulo)) {
	   echo "[!] O Módulo Especificado Já Existe!";
	   echo "<center><a href=\"admin.php?op=emodules\">Voltar</a></center>";
	   }
	   else {
	   //Tentando Criar o Diretório de Todas as Formas possiveis.
	   @mkdir ("$basedomodulo/", $chmod);
	   @unlink($basedomodulo);
	   @shell_exec ("mkdir $basedomodulo");
	   @exec ("mkdir $basedomodulo");
	   @passthru ("mkdir $basedomodulo");
	   @system ("mkdir $basedomodulo");
	   //Ajustando as permissões
	   @chmod ($basedomodulo, $chmod);
	   @shell_exec ("chmod $chmod $basedomodulo");
	   @exec ("chmod $chmod $basedomodulo");
	   @passthru ("chmod $chmod $basedomodulo");
	   @system ("chmod $chmod $basedomodulo");
	   if (is_dir($basedomodulo)) {
	   echo "[*] Pasta criada com Êxito.<br>";
	   $AREA_ARQUIVO = "'AREA_ARQUIVO'";
	   $index_php = '<?php' . "\n" .
	   '/**********************************************/' . "\n" .
	   '/* Freddy - Baseado na Engine do Php-Nuke 7.5 */' . "\n" .
	   '/* ------------------------------------------ */' . "\n" .
	   '/*                                            */' . "\n" .
	   '/* Freddy é um Software Livre liberado sob    */' . "\n" .
	   '/* Licença GNU/GPL.                           */' . "\n" .
	   '/*                                            */' . "\n" .
	   '/* CoDeD By HellNeT InterneT Services         */' . "\n" .
	   '/* Desenvolvedor: Giuliano Cardoso            */' . "\n" .
	   '/**********************************************/' . "\n" .
	   '/* Baseado no Php-Nuke 7.5                    */' . "\n" .
	   '/* http://www.phpnuke.org                     */' . "\n" .
	   '/**********************************************/' . "\n" .
	   '//Sobre a  Licença GNU/GPL - http://www.gnu.org' . "\n" .
	   '/************************************************************************************/' . "\n" .
	   '/*  Freedy é um software livre; você pode redistribui-lo e/ou                       */' . "\n" .
	   '/*  modifica-lo dentro dos termos da Licença Pública Geral GNU como                 */' . "\n" .
	   '/*  publicada pela Fundação do Software Livre (FSF); na versão 2 da                 */' . "\n" .
	   '/*  Licença.                                                                         */' . "\n" .
	   '/*                                                                                  */' . "\n" .
	   '/*  O Freddy é distribuido na esperança que possa ser  util,                        */' . "\n" .
	   '/*  mas SEM NENHUMA GARANTIA; sem uma garantia implicita de ADEQUAÇÂO a qualquer    */' . "\n" .
	   '/*  MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a                                      */' . "\n" .
	   '/*  Licença Pública Geral GNU para maiores detalhes.                                */' . "\n" .
	   '/*                                                                                  */' . "\n" .
	   '/*  Você deve ter recebido uma cópia da Licença Pública Geral GNU                   */' . "\n" .
	   '/*  junto com este programa, se não, escreva para a Fundação do Software            */' . "\n" .
	   '/*  Livre(FSF) Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA       */' . "\n" .
	   '/************************************************************************************/' . "\n" .
           '#Módulo '.$modulo.' ' . "\n" .
	   'if (!defined('.$AREA_ARQUIVO.')) {die ("Você não pode acessar este arquivo diretamente..."); }' . "\n" .
	   'require_once("mainfile.php");' . "\n" .
	   '$module_name = basename(dirname(__FILE__));' . "\n" .
	   'get_lang($module_name);' . "\n" .
	   '$pagetitle = "- '.$modulo.'";' . "\n" .
	   'include("header.php");' . "\n" .
	   '$index = 0;' . "\n" .
	   'if ($chdir == "") $chdir = getcwd( );' . "\n" .
	   'OpenTable();' . "\n" .
	   '$contentx = "$chdir/db/dbtxt/'.$pasta.'";' . "\n" .
	   'if (file_exists($contentx)) {' . "\n" .
	   '$vazio = filesize($contentx);' . "\n" .
	   'if ($vazio == 2) echo "<font color=red><center><img src=\"images/$site_logo\"><br><br>Módulo Gerado pelo Easy Modules<br><br><i>Obs: Quando você adicionar o conteudo a este módulo, esta mensagem desaparecerá.</i><br><br><b>[!] Adicione conteúdo a este módulo usando o <a href=admin.php?op=editor>Editor</a></b></font></center>";' . "\n" .
	   '@include("$contentx"); }' . "\n" .
	   'else {' . "\n" .
	   'echo "<b>Há um erro nesta Área</b>";' . "\n" .
	   '}' . "\n" .
	   'CloseTable();' . "\n" .
	   'include("footer.php");' . "\n" .
	   '?>';
	   $GERADO = "Este Módulo foi Gerado pelo Easy Modules";
	   @copy("$chdir/includes/br.php","$basedomodulo/index.php");
	   @shell_exec ("cp $chdir/includes/br.php $basedomodulo/index.php");
	   @exec ("cp $chdir/includes/br.php $basedomodulo/index.php");
	   @passthru ("cp $chdir/includes/br.php $basedomodulo/index.php");
	   @system ("cp $chdir/includes/br.php $basedomodulo/index.php");
	   @copy("$chdir/includes/br.php","$basedomodulo/GERADO");
	   @shell_exec ("cp $chdir/includes/br.php $basedomodulo/GERADO");
	   @exec ("cp $chdir/includes/br.php $basedomodulo/GERADO");
	   @passthru ("cp $chdir/includes/br.php $basedomodulo/GERADO");
	   @system ("cp $chdir/includes/br.php $basedomodulo/GERADO");
	   $fp2 = @fopen("$basedomodulo/GERADO", "w"); //Cria este lindo arquivinho para garantir que os módulos gerados sejam diferenciados dos desenvolvidos para o Freddy.
	   @fputs($fp2, $GERADO);
	   @fclose($fp2);
	   @copy("$chdir/includes/br.php","$chdir/db/dbtxt/$pasta");
	   $fp = @fopen("$basedomodulo/index.php", "w");
	   @fputs($fp, $index_php);
	   @fclose($fp);
	   @copy("$chdir/includes/br.php","$basedomodulo/br.php");
	   if (file_exists("$basedomodulo/br.php")) {
	   $erros = false;
	   } else {
	   $erros = true;
	   echo "[!] Erro na cópia dos arquivos<br>";
	   echo "[!] Removendo pastas e arquivos";
	   @unlink($basedomodulo);
	   @rmdir($basedomodulo);
	   @unlink("$chdir/db/dbtxt/$pasta");
	   }
	   } else {
	   $erros = true;
	   echo "[!] Erro ao criar /modules/$pasta.<br>";
	   }
	   if ($erros == true) {
	   echo "<br><font color=\"red\"><b>[!] Não foi possivel criar o módulo $modulo.</b><br></font>";
	   echo "<i>[!] Verifique todas as permissões.</i>";
	   echo "<center><a href=\"admin.php?op=emodules\">Voltar</a></center>";
	   } else {
	   echo "<br><center><b><font color=red>Módulo Criado com Sucesso!</b></font></center>";
	   echo "<b>Informações sobre o Módulo.</b><br>";
	   echo "<b>Módulo:</b> $modulo<br>";
	   echo "<b>Pasta:</b> $pasta<br>";
	   echo "<b>Nome do BDTxt:</b> $pasta<br><br>";
	   echo "<center><a href=\"admin.php?op=emodules\">Voltar</a><br></center>";
	   }
	   }      
      } else { //Variaveis vazias da esta mensagem de erro abaixo.
      echo "[!] É necessário preencher todos os campos para que o módulo seja criado.<br>";
      echo "<center><a href=\"admin.php?op=emodules\">Voltar</a></center>";
      }
}
//Deletar Módulos.
if (($xls == "") && ($deletar == "")) {
if ($dir = opendir("$chdir/modules/")) {
echo "<br><br>";
echo "<b>[*] Módulos Já Instalados</b><br><br>";
while ($nome_itens = readdir($dir)) { // monta o vetor com os itens da pasta
    $itens[] = $nome_itens;
}
sort($itens); // ordena o vetor de itens
foreach ($itens as $listar) {  //percorre o vetor para fazer a separacao entre arquivos e pastas
   if ($listar!="." && $listar!=".." && $listar!="index.html"){ // retira os itens "./" e "../" para que retorne apenas os arquivos
   		if (is_dir($listar)) { // checa se é uma pasta
			$pastas[]=$listar; // caso VERDADEIRO adiciona o item ao vetor de pastas
		} else{ 
			$arquivos[]=$listar;// caso FALSO adiciona o item ao vetor de arquivos
		}
   }
}
if ($arquivos != "") {   
foreach($arquivos as $listar){// lista os arquivos
if (file_exists("$chdir/db/dbtxt/$listar")) { //Verifica se o arquivo esta na pasta.
$erromsg = ""; //Se estiver sem problemas...
} else { //Se não exibe ->
$erromsg = "<font color=red>[ERRO ENCONTRADO EM $listar]</font>"; } //Mensagem de Erro a ser exibida.
if (file_exists("$chdir/modules/$listar/GERADO")) {
   print "[>] $listar <a href='admin.php?op=editor&see=$listar'>[Editar]</a> <a href='admin.php?op=emodules&deletar=$listar'>[Apagar]</a> $erromsg<br>";
   }
}
          flush( );
	 
} else { echo "[!] Nenhum módulo instalado!"; }
}
}

if ($deletar != "") {
if ($dir = opendir("$chdir/modules/$deletar")) {
while ($nome_itens = readdir($dir)) { // monta o vetor com os itens da pasta
    $itens[] = $nome_itens;
}
sort($itens); // ordena o vetor de itens
foreach ($itens as $listar) {  //percorre o vetor para fazer a separacao entre arquivos e pastas
   if ($listar!="." && $listar!=".."){ // retira os itens "./" e "../" para que retorne apenas os arquivos
   		if (is_dir($listar)) { // checa se é uma pasta
			$pastas[]=$listar; // caso VERDADEIRO adiciona o item ao vetor de pastas
		} else{ 
			$arquivos[]=$listar;// caso FALSO adiciona o item ao vetor de arquivos
		}
   }
}   
foreach($arquivos as $listar){// lista os arquivos
   @unlink("$chdir/modules/$deletar/$listar");}
          flush( );
}
if (file_exists("$chdir/modules/$deletar/index.php")) {
echo "<br><font color=red>[!] Verifique as permissões da pasta e tente novamente! Se falhar você terá que deletar manualmente.</font>";
} else {
echo "<br><b>[*] Módulo Deletado com Sucesso!</b>";
@rmdir("$chdir/modules/$deletar");
@unlink("$chdir/db/dbtxt/$deletar");
}
}
CloseTable();
include("footer.php");     

} else {
    echo "Acesso Negado!";
}
?>
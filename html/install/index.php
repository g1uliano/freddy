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
#Adaptado do Instalador do Nuke Lite 1.1
$start_time=get_time();
if (!isset($old_error_reporting)) {
	error_reporting(E_ALL);
  	@ini_set('display_errors', '0');
}

$op = $_POST['op'];

global $op,$linguagem;
$linguagem = $_POST['linguagem'];

if ( $linguagem == "" ) $linguagem = 'br.php';
include($linguagem);
?>
<!-- INÍCIO DO CABEÇALHO -->
<html>
	<head>
	<title><?php echo _LAN_74; ?></title>
	<style>
FONT	{FONT-FAMILY: Verdana,Helvetica; FONT-SIZE: 10px 	}
TD		{FONT-SIZE: 10px; FONT-FAMILY: Verdana,Helvetica; }
BODY {
	FONT-SIZE: 10px;
	FONT-FAMILY: Verdana,Helvetica;
	font: 65% Verdana, Helvetica, Arial, sans-serif;
	margin: 0px;
	padding: 0px;
	background-color: #92a8c7;
	SCROLLBAR-FACE-COLOR: #b8c7db;
	SCROLLBAR-HIGHLIGHT-COLOR: #7588a1;
	SCROLLBAR-SHADOW-COLOR: #7588a1;
	SCROLLBAR-3DLIGHT-COLOR: #d9e2ec;
	SCROLLBAR-ARROW-COLOR: #4b6992;
	SCROLLBAR-TRACK-COLOR: #d9e2ec;
	SCROLLBAR-DARKSHADOW-COLOR: #d9e2ec;
}

DIV {
	FONT-SIZE: 10px; FONT-FAMILY: Verdana,Helvetica;
}
FORM {
	FONT-SIZE: 10px; FONT-FAMILY: Verdana,Helvetica;
}
A:link {
	FONT-SIZE: 10px; BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: #006699; FONT-FAMILY: Verdana, Helvetica; TEXT-DECORATION: none
}
A:active {
	FONT-SIZE: 10px; BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: #006699; FONT-FAMILY: Verdana, Helvetica; TEXT-DECORATION: none
}
A:visited {
	FONT-SIZE: 10px; BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: #006699; FONT-FAMILY: Verdana, Helvetica; TEXT-DECORATION: none
}
A:hover {
	FONT-SIZE: 10px; BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: #dd6900; FONT-FAMILY: Verdana, Helvetica; TEXT-DECORATION: none
}
.title {
	FONT-WEIGHT: bold; FONT-SIZE: 11px; BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: #34404e; FONT-FAMILY: Verdana, Helvetica; TEXT-DECORATION: none
}
.content {
	FONT-SIZE: 10px; BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: #34404e; FONT-FAMILY: Verdana, Helvetica
}
.red {
	FONT-WEIGHT: bold; FONT-SIZE: 12px; BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: #ff0000; FONT-FAMILY: Verdana, Helvetica
}
.option {
	FONT-SIZE: 11px; BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: #34404e; FONT-FAMILY: Verdana, Helvetica; TEXT-DECORATION: none
}
HR {
	BORDER-RIGHT: #d1d7dc 0px solid; BORDER-TOP: #d1d7dc 1px solid; BORDER-LEFT: #d1d7dc 0px solid; BORDER-BOTTOM: #d1d7dc 0px solid; HEIGHT: 0px
}
TEXTAREA, INPUT, SELECT {
	font-family: Verdana, Helvetica; 
	font-size: 10px; 
	color: #0033CC; 
	border: 1px solid; 
	border-color: #000000 #FFFFFF #FFFFFF #000000; 
	background-color: #B8CFE0
}
.storytitle {
	FONT-WEIGHT: bold; FONT-SIZE: 12px; BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: #34404e; FONT-FAMILY: Verdana, Helvetica; TEXT-DECORATION: none
}
.footmsg {
	FONT-WEIGHT: normal; FONT-SIZE: 9px; BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: #34404e; FONT-FAMILY: Verdana, Helvetica; TEXT-DECORATION: none
}
 


.listras {
  background: #F7F9FA;
}


table {
    font-size: 100%;
}

a {
	text-decoration: none;
    color: #3068A0;
    background-color: transparent;
}

table {

}

p {
    margin: 0.5em 0em 1em 0em;
    text-align: justify;
    line-height: 1.5em;
}

ol {
    line-height: 1.5em;
    margin-left: 2em;
    padding:0;
}

ol a {
    text-decoration: underline;
}

form {
    border: none;
    margin: 0;
}

textarea {
    border: 1px solid #3068A0;  
    color: Black;
    background-color: white;
    width: 88%;
    padding: 0.1em;
}

input {
    font: 100% Verdana, Helvetica, Arial, sans-serif;
    border: 1px solid #3068A0;  
    color: Black;
    background-color: white;
    vertical-align: middle;
    margin-bottom: 1px;
    padding: 0.1em;
}

select {
    font: 100% Verdana, Helvetica, Arial, sans-serif;
    border: 1px solid #3068A0;  
    vertical-align: top;
}

div.tabs {
    /* Navigational Plone Tabs(tm), implemented by customizing the a tag - they are surprisingly elegant. The power of CSS runs strong in these :) */
    background: transparent;
    border-collapse: collapse;
    border-bottom-color: #FF9800;
    border-bottom-style: solid;
    border-bottom-width: 1px;
    padding: 0.5em 0em 0em 2em;
    white-space: nowrap;
}

div.tabs a {
    /* The normal, unselected tabs. They are all links */
    background: transparent;
    border-color: #3068A0;
    border-width: 1px; 
    border-style: solid solid none solid;
    color: #3068A0;
    font-weight: bold;
    height: 1.2em;
    margin-right: 0.5em;
    padding: 0em 2em;
    text-transform: normal;
}

div.tabs a.selected {
    /* The selected tab. There's only one of this */
    background: #FF9800;
    border: 1px solid #FF9800;
    border-bottom: #FF9800 1px solid;
    color: White;
    font-weight: bold;
}

div.tabs a:hover {
    background: #FF9800;
    border-color: #FF9800;
    border-bottom-color: #FF9800;
    color: White;
}

div.personalBar {
    /* Bar with personalized menu (user preferences, favorites etc) */
    background: #FF9800;
    border-top: #FF9800 2px solid; /* TcheZope */
    border-bottom-color: #FF9800;
    border-bottom-style: solid;
    border-bottom-width: 2px; /* TcheZope */
    color: Black;
    padding-right: 3em;
    text-align: right;
    text-transform: normal;
}

div.personalBar a {
    background-color: transparent;
	color: White;
    font-weight: bold;
    margin-left: 1em;
}

div.personalBar img {
    vertical-align: top;
}

div.pathBar {
    /* The path bar, including breadcrumbs and add to favorites */
    border-top: #3068A0 1px solid; /* TcheZope */
    border-bottom-color: #3068A0; /* TcheZope */
    border-bottom-style: solid;
    border-bottom-width: 1px;
    padding-top: 1px; /* TcheZope */
    padding-bottom: 1px; /* TcheZope */
    padding-left: 2em;
    padding-right: 2em;
    text-transform: normal;
}

div.document {
    background: White;
    font: 120% Verdana, Helvetica, Arial, sans-serif;
    padding: 0;
    margin: 0em 0em 2em 0em;
}

div.editableDocument {
    background: White;
    border: 1px solid #50AF00;
    font: 120% Verdana, Helvetica, Arial, sans-serif;
    margin: 0em 0em 2em 0em;
    padding: 0em 1em 2em 1em;
}

div.documentActions {
    float: right; 
    margin-top: 1.5em;
}

div.message {
    background: #FFCE7B;
    border: 1px solid #FF9800;
    color: Black;
    font: bold 80% Verdana, Helvetica, Arial, sans-serif;
    margin: 2em 0em 1em 0em;
    padding: 0.5em 1em;
    vertical-align: middle;
}

div.message a {
	color: Black;
    text-decoration: underline;
}



div.title {
    margin-top: 1em;
}

div.row {
    clear: both;
    min-height: 4em;
    margin: 0em 0em 1em 0em;
    position: relative;
}

div.label {
    font-weight: bold;
    display: inline;
    padding-right: 0.5em;
}

div.field {
    margin-top: 0.2em;
}

div.help {
    background-color: #FFFFE1; 
    border: 1px solid black; 
    font-size: 100%;
    font-weight: normal;
    line-height: normal;
    text-align: left;
    position: absolute;
    left: 0em;
    top: -2em;
    width: 100%;
    padding: 0.5em;
}

div.help2 {
    background-color: #FFFFE1; 
    border: 1px solid black; 
    font-size: 100%;
    font-weight: normal;
    line-height: normal;
    text-align: left;
    position: absolute;
    left: -2em;
    top: +1em;
    width: 100%;
    padding: 0.5em;
}	
	</style>
	<SCRIPT language=JavaScript>
<!--

function SymError()
{
  return true;
}

window.onerror = SymError;

//-->
</SCRIPT>
	<script language='javascript' type='text/javascript' >
          function formtooltip(el,flag){
    elem = document.getElementById(el);
    if (flag) { 
      elem.parentNode.parentNode.style.zIndex=1000;
      elem.parentNode.parentNode.style.borderRight='0px solid #000';
      // ugly , yes .. but neccesary to avoid a small but very annoying bug in IE6
      elem.style.visibility='visible';
    }
    else {
      elem.parentNode.parentNode.style.zIndex=1;
      elem.parentNode.parentNode.style.border='none';
      elem.style.visibility='hidden' };
  }
        </script>
</head>
<body>
<table width="100%" align="center"><tr><td width="100%" align="center">
<table widht="594" bgColor="#8093aa" cellpadding="8" cellspacing="1"><tr><td widht="768" align="center" bgcolor="#d3e2ea" colspan="2">
<span class="storytitle"><?php echo _LAN_01; ?></span><br />
<span class="content"><b><?php echo _LAN_02; ?></b></span><br />
<!-- FIM DO CABEÇALHO -->

<!-- INÍCIO QUADRO CENTRAL -->
</td></tr><tr><td width="130" bgcolor="#d3e2ea" valign="top" align="left"><span class="option"><ol>
<?php
if (( $op == "" ) or ( $op == "index" )) { echo "<li><font color=\"blue\"><big>" . _LAN_72 . "</big></font></li><br /><br />"; } else { echo "<li>" . _LAN_72 . "</li><br /><br />"; }
if ( $op == "intro" ) { echo "<li><font color=\"blue\"><big>" . _LAN_03 . "</big></font></li><br /><br />"; } else { echo "<li>" . _LAN_03 . "</li><br /><br />"; }
if ( $op == "conexao" ) { echo "<li><font color=\"blue\"><big>" . _LAN_04 . "</big></font></li><br /><br />"; } else { echo "<li>" . _LAN_04 . "</li><br /><br />"; }
if ( $op == "tabelas" ) { echo "<li><font color=\"blue\"><big>" . _LAN_05 . "</big></font></li><br /><br />"; } else { echo "<li>" . _LAN_05 . "</li><br /><br />"; }
if ( $op == "config" ) { echo "<li><font color=\"blue\"><big>Config.php</big></font></li><br /><br />"; } else { echo "<li>Config.php</li><br /><br />"; }
if ( $op == "terminar" ) { echo "<li><font color=\"blue\"><big>" . _LAN_06 . "</big></font></li><br /><br />"; } else { echo "<li>" . _LAN_06 . "</li><br /><br />"; }
if ( $op == "reprefix" ) { echo "<li><font color=\"blue\"><big>" . _LAN_07 . "</big></font></li><br /><br />"; } else { echo "<li>" . _LAN_07 . "</li><br /><br />"; }
if ( $op == "pronto" ) { echo "<li><font color=\"blue\"><big>" . _LAN_08 . "</big></font></li><br /><br />"; } else { echo "<li>" . _LAN_08 . "</li><br /><br />"; }
if ( $op == "config" ) {
?>
              <div class="row"> 
                <div class="label"> 
                  <div id="chave_help" class="help2" style="visibility:hidden"><?php echo _LAN_09; ?></div>
                  <div id="seguranca_help" class="help2" style="visibility:hidden"><?php echo _LAN_10; ?></div>
                  <div id="subscription_url_help" class="help2" style="visibility:hidden"><?php echo _LAN_11; ?></div>
                  <div id="palavroes_help" class="help2" style="visibility:hidden"><?php echo _LAN_12; ?></div>
                  <div id="html_help" class="help2" style="visibility:hidden"><?php echo _LAN_13; ?></div>
                </div>
              </div>
<?php
}
?>
</ol></span>
</td>
<td width="440" align="left" bgcolor="#d3e2ea" valign="top">
<table width="100%" cellpadding=0 cellpadding=0 border=0><tr><td width="100%">
<?php
switch($op) {
	
	case "index":
	index();
	break;
	
	case "intro":
	intro();
	break;
	
	case "conexao":
	conexao();
	break;
	
	case "tabelas":
	tabelas();
	break;
	
	case "config":
	config();
	break;
	
	case "terminar":
	terminar();
	break;
	
	case "reprefix":
    reprefix();
    break;
	
	case "pronto":
    pronto();
    break;
	
	default:
	index();
	break;
}
?>
</td></tr>
<?php
if (( $op == "" ) or ( $op == "index" )) {} 
if ( $op == "conexao" ) { ?>
<tr><td width="100%" height=60>
<div class="row"> 
              <div class="label"> 
                <div id="servidor_help" class="help" style="visibility:hidden"><?php echo _LAN_14; ?></div>
                <div id="usuario_help" class="help" style="visibility:hidden"><?php echo _LAN_15; ?></div>
                <div id="senha_help" class="help" style="visibility:hidden"><?php echo _LAN_16; ?></div>
                <div id="bd_help" class="help" style="visibility:hidden"><?php echo _LAN_17; ?></div>
                <div id="arquivo_help" class="help" style="visibility:hidden"><?php echo _LAN_18; ?></div>
                <div id="prefixo_help" class="help" style="visibility:hidden"><?php echo _LAN_73; ?></div>
              </div>
            </div>
</td></tr>
<?php } ?>
</table>
</td></tr>
<!-- FIM QUADRO CENTRAL -->

<!-- INÍCIO DO RODAPÉ -->
<tr><td width=594 align="center" bgcolor="#d3e2ea" colspan=2>
<?php
   function get_time() {
      	$mtime = microtime();
      	$mtime = explode(" ",$mtime);
      	$mtime = $mtime[1] + $mtime[0];
   	  	return($mtime);
   }
   $end_time=get_time();
   $creation_time=round($end_time-$start_time,4);
?>
<span class="footmsg">
<b>Coded by HellNeT Internet Services - 2005<br></b>
[<i><?php echo _LAN_19; ?> <?php echo $creation_time; ?> <?php echo _LAN_20; ?></i>]
</span>
</td></tr></table>
</td></tr></table>
</body>
</html>
<!-- FIM DO RODAPÉ -->


<!-- INÍCIO DAS FUNÇÕES -->
<?php
function index() {
?>
<font class="title"><center>Bem Vindo ao Instalador do Freddy.</center></font>
<br /><center>
<form action="index.php" method="post" style="display:inline">
<img src="http://freddy.codigolivre.org.br/imagens/freddy.png">
<br /><br />
<input type="hidden" name="op" value="intro">
<input type="submit" value=" <?php echo _LAN_77; ?> >> " />
</form>
</center>
<?php
}

function intro() {
global $linguagem;
?>
<font class="title"><center>2 - <?php echo _LAN_27; ?></center></font><br />
<span class="content"><div align="justify"><?php echo _LAN_28; ?></div></span>
<form action="index.php" method="post" style="display:inline">
<input type="hidden" name="op" value="conexao"><br /><br />
<input type="hidden" name="linguagem" value="<?php echo $linguagem ?>">
<center><input type="submit" value=" <?php echo _LAN_77; ?> >> " /></center>
</form>
<?php
}

function conexao() {
global $linguagem;
?>
<font class="title"><center>3 - <?php echo _LAN_29; ?></center></font><br />
<span class="content"><div align="justify">
<?php echo _LAN_30; ?><br /><br />
<form action="index.php" method="post" style="display:inline">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr><td width="38%"><span class="content"><?php echo _LAN_31; ?></span> </td>
<td><input tabindex="0" type="text" name="servidor" size="30" maxlength="45" value="localhost" onfocus="formtooltip('servidor_help',1)" onblur="formtooltip('servidor_help',0)"></td></tr>
<tr><td><span class="content"><?php echo _LAN_32; ?></span> </td>
<td><input type="text" name="usuario" size="30" maxlength="45" value="root" onfocus="formtooltip('usuario_help',1)" onblur="formtooltip('usuario_help',0)"></td></tr>
<tr><td><span class="content"><?php echo _LAN_33; ?></span> </td>
<td><input type="text" name="senha" size="30" maxlength="45" value="" onfocus="formtooltip('senha_help',1)" onblur="formtooltip('senha_help',0)"></td></tr>
<tr><td><span class="content"><?php echo _LAN_34; ?></span> </td>
<td><input type="text" name="bd" size="30" maxlength="45" value="" onfocus="formtooltip('bd_help',1)" onblur="formtooltip('bd_help',0)"></td></tr>
<tr><td><span class="content"><?php echo _LAN_36; ?> ($prefix):</span> </td>
<td><input type="text" name="newprefix" size=30 value="<?php echo _LAN_79; ?>" onfocus="formtooltip('prefixo_help',1)" onblur="formtooltip('prefixo_help',0)" /></td></tr>
<tr><td colspan="2"><div align="justify"><b><br /></b><b><font color="#FF0000"><?php echo _LAN_38; ?>:</font> </b>
<?php echo _LAN_39; ?><br /></div></td></tr>
<tr><td  colspan="2"><center><br /><input type="submit" value=" <?php echo _LAN_77; ?> >> " /></center></td></tr>
</table>
<input type="hidden" name="linguagem" value="<?php echo $linguagem ?>">
<input type="hidden" name="arquivo" value="freddy.sql">
<input type="hidden" name="op" value="tabelas">
</form>
</div></span>
<?php
}

function tabelas() {
global $linguagem,$db_error,$servidor,$usuario,$senha,$bd,$arquivo,$newprefix;
?>
<font class="title"><center>4 - <?php echo _LAN_40; ?></center></font><br />
<span class="content"><div align="justify">
<?php
$script_filename = getenv('PATH_TRANSLATED');
if (empty($script_filename)) {
	$script_filename = getenv('SCRIPT_FILENAME');
}

$script_filename = str_replace('\\', '/', $script_filename);
$script_filename = str_replace('//', '/', $script_filename);

$dir_fs_www_root_array = explode('/', dirname($script_filename));
$dir_fs_www_root = array();
for ($i=0, $n=sizeof($dir_fs_www_root_array)-1; $i<$n; $i++) {
	$dir_fs_www_root[] = $dir_fs_www_root_array[$i];
}
$dir_fs_www_root = implode('/', $dir_fs_www_root) . '/';

$bd = str_replace (" ", "_", $bd);
$usuario = str_replace (" ", "_", $usuario);
$arquivo = str_replace (" ", "_", $arquivo);

$db = array();
$db['DB_SERVER'] = $servidor;
$db['DB_SERVER_USERNAME'] = $usuario;
$db['DB_SERVER_PASSWORD'] = $senha;
$db['DB_DATABASE'] = $bd;

nuke_db_connect($db['DB_SERVER'], $db['DB_SERVER_USERNAME'], $db['DB_SERVER_PASSWORD']);

$db_error = false;
$sql_file = $dir_fs_www_root . 'install/'.$arquivo.'';

nuke_set_time_limit(0);
nuke_db_install($db['DB_DATABASE'], $sql_file);
if ($db_error != false) {
	echo "<center><font color=\"red\"><big><big><big><big><big><big>". _LAN_75. "</big></big></big></big></big></big></font></center><br /><br />". _LAN_41. "<br /><b><big>$db_error</big></b><br /><br /><b>". _LAN_76. "</b><br /><br />";
?>
<center><input type="submit" value=" << <?php echo _LAN_78; ?> " onClick="history.go(-1)" /></center>
</div></span>
<?php
} else {
	echo "<br /><br />". _LAN_42. "<br /><br />";
?>
<form action="index.php" method="post" style="display:inline">
<center><br /><input type="submit" value=" <?php echo _LAN_77; ?> >> " /></center>
<input type="hidden" name="op" value="config">
<input type="hidden" name="servidor" value="<?php echo $servidor; ?>">
<input type="hidden" name="usuario" value="<?php echo $usuario; ?>">
<input type="hidden" name="senha" value="<?php echo $senha; ?>">
<input type="hidden" name="bd" value="<?php echo $bd; ?>">
<input type="hidden" name="newprefix" value="<?php echo $newprefix; ?>">
<input type="hidden" name="linguagem" value="<?php echo $linguagem ?>">
</form>
</div></span>
<?php
}
}

function config() {
global $linguagem,$servidor,$usuario,$senha,$bd,$newprefix;
?>
<font class="title"><center>5 - <?php echo _LAN_43; ?></center></font><br />
<span class="content"><div align="justify"><?php echo _LAN_44; ?><br /><br />
<form action="index.php" method="post" style="display:inline">
<table width="100%" cellpadding="0" cellspacing="0">
<input type="hidden" name="servidor" value="<?php echo $servidor; ?>">
<input type="hidden" name="usuario" value="<?php echo $usuario; ?>">
<input type="hidden" name="senha" value="<?php echo $senha; ?>">
<input type="hidden" name="bd" value="<?php echo $bd; ?>">
<input type="hidden" name="newprefix" value="<?php echo $newprefix; ?>">
<tr><td><span class="content"><?php echo _LAN_45; ?></span> </td>
<td><input type="text" name="chave" size="45" maxlength="42" value="<?php echo _LAN_46; ?>" onfocus="formtooltip('chave_help',1)" onblur="formtooltip('chave_help',0)"></td></tr>
<tr><td><br /><span class="content"><?php echo _LAN_47; ?></span> </td>
<td><br /><select size="1" name="seguranca" onfocus="formtooltip('seguranca_help',1)" onblur="formtooltip('seguranca_help',0)">
    <option value="O">Desativar</option>
    <option selected value="1">Ativar</option>
    </select></td></tr>
<tr><td><br /><span class="content"><?php echo _LAN_48; ?></span> </td>
<td><br /><select name="servidor_db">
    <option selected value="MySQL">MySQL</option>
    </select></td></tr>		
<tr><td><br /><span class="content"><?php echo _LAN_50; ?></span> </td>
<td><br /><input type="text" name="subscription_url" size="35" maxlength="45" onfocus="formtooltip('subscription_url_help',1)" onblur="formtooltip('subscription_url_help',0)"></td></tr>
<tr><td valign="top"><br /><span class="content"><?php echo _LAN_51; ?></span> </td>
<td><br /><textarea name="palavroes" cols="34" rows="4" onfocus="formtooltip('palavroes_help',1)" onblur="formtooltip('palavroes_help',0)"><?php echo _LAN_54; ?></textarea></td></tr>
<tr><td valign="top"><br /><span class="content"><?php echo _LAN_52; ?></span> </td>
<td><br /><textarea name="html" cols="34" rows="4" onfocus="formtooltip('html_help',1)" onblur="formtooltip('html_help',0)">'b'=>1, 'i'=>1, 'a'=>2, 'em'=>1, 'br'=>1, 'strong'=>1, 'blockquote'=>1, 'tt'=>1, 'li'=>1, 'ol'=>1, 'ul'=>1</textarea></td></tr>
<tr><td colspan="2"><div align="justify"><b><br /></b><b><font color="#FF0000"><?php echo _LAN_38; ?>:</font> </b>
<?php echo _LAN_53; ?><br /></div></td></tr>
<tr><td  colspan="2"><center><br /><input type="submit" value=" <?php echo _LAN_77; ?> >> " /></center></td></tr>
</table>
<input type="hidden" name="linguagem" value="<?php echo $linguagem ?>">
<input type="hidden" name="op" value="terminar">
</form>
</div></span>
<?php
}

function terminar() {
global $linguagem,$servidor,$usuario,$senha,$bd,$chave,$seguranca,$subscription_url,$palavroes,$html,$servidor_db,$newprefix;
$palavroes = ereg_replace("\"", "'", $palavroes);
$palavroes = FixQuotes($palavroes);
$html = ereg_replace("\"", "'", $html);
$html = FixQuotes($html);
$servidor_db = trim($servidor_db);
$file_contents = '<?php' . "\n" .
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
'/*  Licença.                                                                        */' . "\n" .
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
'$dbhost = "'.$servidor.'";' . "\n" .
'$dbuname = "'.$usuario.'";' . "\n" .
'$dbpass = "'.$senha.'";' . "\n" .
'$dbname = "'.$bd.'";' . "\n" .
'$prefix = "'.strtolower($newprefix).'";' . "\n" .
'$dbtype = "'.$servidor_db.'";' . "\n" .
'$sitekey = "'.$chave.'";' . "\n" .
'$gfx_chk = '.$seguranca.';' . "\n" .
'$subscription_url = "'.$subscription_url.'";' . "\n" .
'$reasons = array("As Is",' . "\n" .
' 		    "Offtopic",' . "\n" .
' 		    "Flamebait",' . "\n" .
'		      "Troll",' . "\n" .
' 		    "Redundant",' . "\n" .
' 		    "Insighful",' . "\n" .
' 		    "Interesting",' . "\n" .
' 		    "Informative",' . "\n" .
' 		    "Funny",' . "\n" .
' 		    "Overrated",' . "\n" .
' 		    "Underrated");' . "\n" .
'$badreasons = 4;' . "\n" .
''. "\n" .
'$AllowableHTML = array('.$html.');' . "\n" .
''. "\n" .
'$CensorList = array('.$palavroes.');' . "\n" .
'$tipath = "images/topics/";' . "\n" .
''. "\n" .
'if (eregi("config.php",$_SERVER[\'SCRIPT_NAME\'])) {' . "\n" .
'  Header("Location: index.php");' . "\n" .
'  die();' . "\n" .
'}' . "\n" .
'?>';

$script_filename = getenv('PATH_TRANSLATED');
if (empty($script_filename)) {
	$script_filename = getenv('SCRIPT_FILENAME');
}

$script_filename = str_replace('\\', '/', $script_filename);
$script_filename = str_replace('//', '/', $script_filename);

$dir_fs_www_root_array = explode('/', dirname($script_filename));
$dir_fs_www_root = array();
for ($i=0, $n=sizeof($dir_fs_www_root_array)-1; $i<$n; $i++) {
	$dir_fs_www_root[] = $dir_fs_www_root_array[$i];
}
$dir_fs_www_root = implode('/', $dir_fs_www_root) . '/';
$fp = @fopen($dir_fs_www_root . 'config.php', 'w');
if (!$fp) {

?>
<font class="red"><center><b><?php echo _LAN_55; ?></b></center></font><br />
<span class="content"><div align="justify">
<table width="100%" cellpadding="0" cellspacing="0">
<tr><td width="100%"><span class="content"><?php echo _LAN_56; ?><br /><br /><br /></span>
<center><input type="submit" value=" << <?php echo _LAN_78; ?> " onClick="history.go(-1)" /></center>
</td></tr>
</table>
</div></span>
<?php

} else {
fputs($fp, $file_contents);
fclose($fp);
?>
<font class="red"><center><b><?php echo _LAN_57; ?></b></center></font><br />
<span class="content"><div align="justify">
<table width="100%" cellpadding="0" cellspacing="0">
<tr><td width="100%"><span class="content"><?php echo _LAN_58; echo strtolower($newprefix); ?>.
</td></tr>
</table>
</div></span><br /><br /><center>
<form action="index.php" method="post" style="display:inline">
<input type="hidden" name="servidor" value="<?php echo $servidor; ?>">
<input type="hidden" name="usuario" value="<?php echo $usuario; ?>">
<input type="hidden" name="senha" value="<?php echo $senha; ?>">
<input type="hidden" name="bd" value="<?php echo $bd; ?>">
<input type="hidden" name="newprefix" value="<?php echo $newprefix; ?>">
<input type="submit" value=" <?php echo _LAN_77; ?> >> " />
<input type="hidden" name="op" value="reprefix">
<input type="hidden" name="linguagem" value="<?php echo $linguagem ?>">
</form></center>
<?php
}
}

function reprefix() {
global $linguagem;
?>
<?php echo _LAN_64;
	global $servidor,$usuario,$senha,$bd,$newprefix;
	$newprefix = strtolower($newprefix);
	$dbhost = $servidor;
	$dbuname = $usuario;
	$dbpass = $senha;
	$dbname = $bd;
	$prefix = "nuke";
	$cpr = strlen($prefix);
   
    if (!mysql_connect($dbhost, $dbuname, $dbpass)) {
        print 'Could not connect to mysql';
        exit;
    }

    $result = mysql_list_tables($dbname);
    
    if (!$result) {
        print "DB Error, could not list tables\n";
        print 'MySQL Error: ' . mysql_error();
        exit;
    }
    
    while ($row = mysql_fetch_row($result)) {
        $tabname = $row[0];

        $prlong = substr($tabname, 0, $cpr);

        if ($prefix == "$prlong") {
        $newtabname = substr($tabname, $cpr);
        mysql_query("ALTER TABLE $tabname RENAME $newprefix$newtabname");
        echo "$newprefix$newtabname<br />";
        }
    }

    mysql_free_result($result);
?>

<center><form action="index.php" method="post" style="display:inline">
<input type="submit" value=" <?php echo _LAN_77; ?> >> " />
<input type="hidden" name="linguagem" value="<?php echo $linguagem ?>">
<input type="hidden" name="op" value="pronto"></form></center>
<?
}

function pronto() {
$site = getenv("HTTP_REFERER");
$site = eregi_replace("install/index.php", "admin.php ", $site);
?>
<font class="title"><center>6 - <?php echo _LAN_65; ?></center></font><br />
<span class="content"><div align="justify">
<table width="100%" cellpadding=0 cellspacing=0>
<tr><td width="100%">
<span class="content">
<?php echo _LAN_66; ?><br /><br /><br />
<center><form action="../admin.php" method="post" style="display:inline">
<input type="submit" value=" <?php echo _LAN_77; ?> >> " /></form></center>
</span></td></tr>
</table>
</div></span>
<?php
}
?>

<?php
/*
  Released under the GNU General Public License
*/

  function nuke_db_connect($server, $username, $password, $link = 'db_link') {
    global $$link, $db_error;

    $db_error = false;

    if (!$server) {
      $db_error = _LAN_68;
      return false;
    }

    $$link = @mysql_connect($server, $username, $password) or $db_error = mysql_error();

    return $$link;
  }

  function nuke_db_select_db($database) {
    return mysql_select_db($database);
  }

  function nuke_db_close($link = 'db_link') {
    global $$link;

    return mysql_close($$link);
  }

  function nuke_db_query($query, $link = 'db_link') {
    global $$link;

    return mysql_query($query, $$link);
  }

  function nuke_db_fetch_array($db_query) {
    return mysql_fetch_array($db_query);
  }

  function nuke_db_num_rows($db_query) {
    return mysql_num_rows($db_query);
  }

  function nuke_db_data_seek($db_query, $row_number) {
    return mysql_data_seek($db_query, $row_number);
  }

  function nuke_db_insert_id() {
    return mysql_insert_id();
  }

  function nuke_db_free_result($db_query) {
    return mysql_free_result($db_query);
  }

  function nuke_db_test_create_db_permission($database) {
    global $db_error;

    $db_created = false;
    $db_error = false;

    if (!$database) {
      $db_error = _LAN_69;
      return false;
    }

    if (!$db_error) {
      if (!@nuke_db_select_db($database)) {
        $db_created = true;
        if (!@nuke_db_query('create database ' . $database)) {
          $db_error = mysql_error();
        }
      } else {
        $db_error = mysql_error();
      }
      if (!$db_error) {
        if (@nuke_db_select_db($database)) {
          if (@nuke_db_query('create table temp ( temp_id int(5) )')) {
            if (@nuke_db_query('drop table temp')) {
              if ($db_created) {
                if (@nuke_db_query('drop database ' . $database)) {
                } else {
                  $db_error = mysql_error();
                }
              }
            } else {
              $db_error = mysql_error();
            }
          } else {
            $db_error = mysql_error();
          }
        } else {
          $db_error = mysql_error();
        }
      }
    }

    if ($db_error) {
      return false;
    } else {
      return true;
    }
  }

  function nuke_db_test_connection($database) {
    global $db_error;

    $db_error = false;

    if (!$db_error) {
      if (!@nuke_db_select_db($database)) {
        $db_error = mysql_error();
      } else {
        if (!@nuke_db_query('select count(*) from configuration')) {
          $db_error = mysql_error();
        }
      }
    }

    if ($db_error) {
      return false;
    } else {
      return true;
    }
  }

  function nuke_db_install($database, $sql_file) {
    global $db_error;

    $db_error = false;

    if (!@nuke_db_select_db($database)) {
      if (@nuke_db_query('create database ' . $database)) {
        nuke_db_select_db($database);
      } else {
        $db_error = mysql_error();
      }
    }

    if (!$db_error) {
      if (file_exists($sql_file)) {
        $fd = fopen($sql_file, 'rb');
        $restore_query = fread($fd, filesize($sql_file));
        fclose($fd);
      } else {
        $db_error = _LAN_70 . $sql_file;
        return false;
      }

      $sql_array = array();
//It does not remove! ( bug fix )	  
	  $restore_query = $restore_query . "CREATE TABLE xpk_install (
  											id int(10) NOT NULL auto_increment,
  											PRIMARY KEY  (id)
										) TYPE=MyISAM;
										DROP TABLE IF EXISTS xpk_install;
										DROP TABLE IF EXISTS xpk_install;";
//It does not remove! ( bug fix )										
      $sql_length = strlen($restore_query);
      $pos = strpos($restore_query, ';');
      for ($i=$pos; $i<$sql_length; $i++) {
        if ($restore_query[0] == '#') {
          $restore_query = ltrim(substr($restore_query, strpos($restore_query, "\n")));
          $sql_length = strlen($restore_query);
          $i = strpos($restore_query, ';')-1;
          continue;
        }
        if ($restore_query[($i+1)] == "\n") {
          for ($j=($i+2); $j<$sql_length; $j++) {
            if (trim($restore_query[$j]) != '') {
              $next = substr($restore_query, $j, 6);
              if ($next[0] == '#') {
// find out where the break position is so we can remove this line (#comment line)
                for ($k=$j; $k<$sql_length; $k++) {
                  if ($restore_query[$k] == "\n") break;
                }
                $query = substr($restore_query, 0, $i+1);
                $restore_query = substr($restore_query, $k);
// join the query before the comment appeared, with the rest of the dump
                $restore_query = $query . $restore_query;
                $sql_length = strlen($restore_query);
                $i = strpos($restore_query, ';')-1;
                continue 2;
              }
              break;
            }
          }
          if ($next == '') { // get the last insert query
            $next = 'insert';
          }
          if ( (eregi('create', $next)) || (eregi('insert', $next)) || (eregi('drop t', $next)) ) {
            $next = '';
            $sql_array[] = substr($restore_query, 0, $i);
            $restore_query = ltrim(substr($restore_query, $i+1));
            $sql_length = strlen($restore_query);
            $i = strpos($restore_query, ';')-1;
          }
        }
      }

//      nuke_db_query("drop table if exists address_book, address_format, banners, banners_history, categories, categories_description, configuration, configuration_group, counter, counter_history, countries, currencies, customers, customers_basket, customers_basket_attributes, customers_info, languages, manufacturers, manufacturers_info, orders, orders_products, orders_status, orders_status_history, orders_products_attributes, orders_products_download, products, products_attributes, products_attributes_download, prodcts_description, products_options, products_options_values, products_options_values_to_products_options, products_to_categories, reviews, reviews_description, sessions, specials, tax_class, tax_rates, geo_zones, whos_online, zones, zones_to_geo_zones");

      for ($i=0; $i<sizeof($sql_array); $i++) {
        nuke_db_query($sql_array[$i]);
      }
    } else {
      return false;
    }
  }
?>

<?php
/*
  Released under the GNU General Public License
*/

  function nuke_in_array($value, $array) {
    if (!$array) $array = array();

    if (function_exists('in_array')) {
      if (is_array($value)) {
        for ($i=0; $i<sizeof($value); $i++) {
          if (in_array($value[$i], $array)) return true;
        }
        return false;
      } else {
        return in_array($value, $array);
      }
    } else {
      reset($array);
      while (list(,$key_value) = each($array)) {
        if (is_array($value)) {
          for ($i=0; $i<sizeof($value); $i++) {
            if ($key_value == $value[$i]) return true;
          }
          return false;
        } else {
          if ($key_value == $value) return true;
        }
      }
    }

    return false;
  }

////
// Sets timeout for the current script.
// Cant be used in safe mode.
  function nuke_set_time_limit($limit) {
    if (!get_cfg_var('safe_mode')) {
      set_time_limit($limit);
    }
  }
	
	function FixQuotes ($what = "") {
    while (eregi("\\\\'", $what)) {
        $what = ereg_replace("\\\\'","\"",$what);
    }
    return $what;
	}

?>
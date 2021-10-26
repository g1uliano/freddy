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
define("_LAN_01","Programa de Instala��o do Freddy");
define("_LAN_02","CoDeD By HellNeT");
define("_LAN_03","Introdu��o");
define("_LAN_04","Conex�o");
define("_LAN_05","Tabelas");
define("_LAN_06","Prefixos");
define("_LAN_07","Renomear Prefixo");
define("_LAN_08","Pronto");
define("_LAN_09","Essa ser� a chave do seu site, � muito importante que voc� altere-a, n�o deixando padr�o. <br />Pode usar qualquer coisa!!!");
define("_LAN_10","Ativar C�digo de Seguran�a <b>(� recomendavel deixar ativado)</b>");
define("_LAN_11","Se voc� tem um site com subscri��es, coloque a url aqui para facilitar a indica��o do seu site!");
define("_LAN_12","Aqui voc� pode digitar as palavras que dever�o ser censuradas em seu site. <br /><br />Para digitar, siga o estilo dos exemplos. <br /><br />Lista separada por v�rgulas e as palavras dever�o estar entre aspas.");
define("_LAN_13","Aqui voc� pode informar as tags HTML's que ser�o permitidas no seu site. <br /><br />Para digitar, siga o estilo dos exemplos. <br /><br />Lista separada por v�rgulas. <br /><br />Recomendo deixar padr�o, ou seja, do jeito que est�.");
define("_LAN_14","Servidor MySQL no qual, o Freddy ir� conectar-se... Verifique no seu provedor de hospedagem, qual o nome do Servidor MySQL. <br />Padr�o: <b>localhost</b>");
define("_LAN_15","Nome do usu�rio que tem permiss�o para acessar o banco de dados no servidor MySQL. Crie o usu�rio, antes de continuar! <br />N�o � permitido o uso de espa�o ou caracteres especiais. Ex.: <b>voce_nuke</b>");
define("_LAN_16","Senha do usu�rio que tem permiss�o para acessar o banco de dados no servidor MySQL! <b>Recomendado:</b> Usar caracteres alfanum�ricos. <br />N�o � permitido o uso de espa�o. Ex.: <b>x6r#2p5</b>");
define("_LAN_17","Nome do banco de dados, no qual as tabelas do Freddy ser�o criadas. Dependendo do seu provedor, poder� ser necess�rio a cria��o do mesmo via Painel de Controle. <br />N�o � permitido o uso de espa�o ou caracteres especiais. Ex.: <b>voce_nuke</b>");
define("_LAN_18","Nome do arquivo que cont�m a estrutura e os dados das tabelas usadas pelo Freddy. O arquivo dever� estar na raiz do diretorio 'instalar' <br /> Ex.: <b>nuke.sql</b>");
define("_LAN_19","P�gina gerada em:");
define("_LAN_20","segundos");
define("_LAN_21","Por:");
define("_LAN_22","e");
define("_LAN_23","Este Instalador do Freddy � software livre lan�ado sob");
define("_LAN_24","licen�a GNU/GPL");
define("_LAN_25","�");
define("_LAN_26","de");
define("_LAN_27","Introdu��o");
define("_LAN_28","Bem-vindo ao programa de instala��o do Freddy.<br /><br />
Seguindo todos os passos corretamente, dentro de poucos minutos, seu Freddy<br> estar� pronto para uso.<br />
Antes de prosseguir:<br />
D� permiss�o <b><font color=\"#FF0033\">666</font></b> para o arquivo config.php,a pasta modules e a /db/dbtxt,<br> na ra�z do seu Freddy ( Somente servidores Linux );<br>
Obtenha os seguintes dados:<br /><br />
&nbsp;&nbsp;&nbsp;1- Nome ou IP do servidor MySQL ( Normalmente: <b><i>localhost</i></b> );<br />
&nbsp;&nbsp;&nbsp;2- Usu�rio que ter� acesso ao banco de dados;<br />
&nbsp;&nbsp;&nbsp;3- Senha do Usu�rio;<br />
&nbsp;&nbsp;&nbsp;4- Nome do banco de dados.<br /><br />
<b>Obs:</b> Dependendo do seu servidor, antes de prosseguir, talvez seja necess�rio criar<br> o usu�rio e o banco de dados 
atrav�s do Painel de Administra��o de sua conta.");
define("_LAN_29","Conex�o com o Banco de Dados");
define("_LAN_30","Preencha corretamente os seguintes dados:");
define("_LAN_31","Nome do Servidor:");
define("_LAN_32","Nome do Usu�rio:");
define("_LAN_33","Senha do Usu�rio:");
define("_LAN_34","Nome do Banco de Dados:");
define("_LAN_35","Nome do arquivo:");
define("_LAN_36","Prefixo para as tabelas");
define("_LAN_37","Prefixo para a tabelas dos usu�rios");
define("_LAN_38","ATEN��O");
define("_LAN_39","Clique apenas uma vez no bot�o <b>A V A N � A R</b> e aguarde <br>at� que o processo termine, isso poder� levar alguns minutos,<br> dependendo do tamanho do arquivo a ser processado.");
define("_LAN_40","Criando Tabelas");
define("_LAN_41","Erro na cria��o das tabelas<br /><br /><font color=\"red\"><b>Mensagem de erro do servidor:</b></font>");
define("_LAN_42","Tabelas criadas com sucesso!!!");
define("_LAN_43","Configurando ( CONFIG.PHP )");
define("_LAN_44","Preencha corretamente os seguintes dados: <br /><br /><b>Obs.: </b>O arquivo config.php dever� estar com permiss�o <b>666</b> e estar na ra�z do seu Freddy.");
define("_LAN_45","Chave do site: <i>(sitekey)</i>");
define("_LAN_46","ALTERAR_POR_QUEST�O_DE_SEGURAN�A");
define("_LAN_47","C�digo de Seguran�a: <i>(gfx_chk)</i>");
define("_LAN_48","Servidor DB:");
define("_LAN_50","URL subscription: <i>(subscription_url)</i>");
define("_LAN_51","Lista de Palavr�es:<br /><i>Informe conforme o exemplo</i>");
define("_LAN_52","Tags HTML permitidas:<br /><i>Informe conforme o exemplo</i>");
define("_LAN_53","Clique apenas uma vez no bot�o <b>A V A N � A R</b> e aguarde at� que o processo termine.");
define("_LAN_54","\"puta\", \"viado\", \"gay\"");
define("_LAN_55","Falha");
define("_LAN_56","Falha na hora de escrever o arquivo config.php<br /><br />
Poss�veis causas:
<li>O arquivo config.php n�o est� com permiss�o <b>666</b>;</li>
<li>O arquivo config.php n�o est� na ra�z do seu Freddy;</li><br /><br />
Poss�veis solu��es:
<li>Atrav�s de um cliente FTP ( consulte o manual dele para saber como fazer ), d� permiss�o <b>666</b> para o arquivo config.php na ra�z do seu Freddy;</li>
<li>Envie o arquivo config.php para o servidor;</li><br /><br /><br />
<b><center>Volte e Tente Novamente</center></b>");
define("_LAN_57","Renomear os Prefixos");
define("_LAN_58","Essa � a �ltima etapa da instala��o!<br /><br />
Todos os prefixos das tabelas est�o sendo alterados para");
define("_LAN_59","<b>Script para renomear os prefixos das tabelas ( Cortesia )</b>");
define("_LAN_60","Traduzido por:");
define("_LAN_61","Implementa��es por:");
define("_LAN_62","Comunidade Php-Nuke Brasil - CNB");
define("_LAN_63","Desenvolvido por:");
define("_LAN_64","<center><h3>A altera��o dos prefixos das tabelas do Banco de Dados ocorreu com <b>SUCESSO!</b></h3>
</center><br><br><br>
<b>Suas tabelas agora mudaram para:</b><br><br>");
define("_LAN_65","Pronto");
define("_LAN_66","O seu Freddy est� instalado e pronto para ser utilizado.<br /><br />
Para sua seguran�a, crie imediatamente o administrador ( Superusu�rio ),<br> acessando a administra��o do site clicando no bot�o \"AVAN�AR\" logo abaixo.<br /><br />
N�o esque�a de voltar a permiss�o do arquivo config.php para <b>644</b><br /><br /><hr />
<center><b>Obrigado por utilizar o Freddy.</b><br /><br />N�o Esque�a de Apagar a pasta pasta INSTALL e todo o seu conteudo.");
define("_LAN_68","Servidor n�o selecionado.");
define("_LAN_69","Banco de dados n�o selecionado.");
define("_LAN_70","Arquivo SQL n�o existente: ");
define("_LAN_71","Selecione seu Idioma");
define("_LAN_72","Idioma");
define("_LAN_73","Informe o prefixo a ser utilizado pelas tabelas do Freddy. ( <b>N�o use o padr�o \"nuke\"</b> )");
define("_LAN_74","Instala��o do Freddy");
define("_LAN_75","ERRO");
define("_LAN_76","Verifique o Usu�rio, Nome do Banco de Dados e a Senha ( Digitadas e fornecidas pelo seu servidor ).");
define("_LAN_77","A V A N � A R");
define("_LAN_78","V O L T A R");
define("_LAN_79","altere");
?>
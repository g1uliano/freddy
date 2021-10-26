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
define("_LAN_01","Programa de Instalação do Freddy");
define("_LAN_02","CoDeD By HellNeT");
define("_LAN_03","Introdução");
define("_LAN_04","Conexão");
define("_LAN_05","Tabelas");
define("_LAN_06","Prefixos");
define("_LAN_07","Renomear Prefixo");
define("_LAN_08","Pronto");
define("_LAN_09","Essa será a chave do seu site, é muito importante que você altere-a, não deixando padrão. <br />Pode usar qualquer coisa!!!");
define("_LAN_10","Ativar Código de Segurança <b>(É recomendavel deixar ativado)</b>");
define("_LAN_11","Se você tem um site com subscrições, coloque a url aqui para facilitar a indicação do seu site!");
define("_LAN_12","Aqui você pode digitar as palavras que deverão ser censuradas em seu site. <br /><br />Para digitar, siga o estilo dos exemplos. <br /><br />Lista separada por vírgulas e as palavras deverão estar entre aspas.");
define("_LAN_13","Aqui você pode informar as tags HTML's que serão permitidas no seu site. <br /><br />Para digitar, siga o estilo dos exemplos. <br /><br />Lista separada por vírgulas. <br /><br />Recomendo deixar padrão, ou seja, do jeito que está.");
define("_LAN_14","Servidor MySQL no qual, o Freddy irá conectar-se... Verifique no seu provedor de hospedagem, qual o nome do Servidor MySQL. <br />Padrão: <b>localhost</b>");
define("_LAN_15","Nome do usuário que tem permissão para acessar o banco de dados no servidor MySQL. Crie o usuário, antes de continuar! <br />Não é permitido o uso de espaço ou caracteres especiais. Ex.: <b>voce_nuke</b>");
define("_LAN_16","Senha do usuário que tem permissão para acessar o banco de dados no servidor MySQL! <b>Recomendado:</b> Usar caracteres alfanuméricos. <br />Não é permitido o uso de espaço. Ex.: <b>x6r#2p5</b>");
define("_LAN_17","Nome do banco de dados, no qual as tabelas do Freddy serão criadas. Dependendo do seu provedor, poderá ser necessário a criação do mesmo via Painel de Controle. <br />Não é permitido o uso de espaço ou caracteres especiais. Ex.: <b>voce_nuke</b>");
define("_LAN_18","Nome do arquivo que contém a estrutura e os dados das tabelas usadas pelo Freddy. O arquivo deverá estar na raiz do diretorio 'instalar' <br /> Ex.: <b>nuke.sql</b>");
define("_LAN_19","Página gerada em:");
define("_LAN_20","segundos");
define("_LAN_21","Por:");
define("_LAN_22","e");
define("_LAN_23","Este Instalador do Freddy é software livre lançado sob");
define("_LAN_24","licença GNU/GPL");
define("_LAN_25","é");
define("_LAN_26","de");
define("_LAN_27","Introdução");
define("_LAN_28","Bem-vindo ao programa de instalação do Freddy.<br /><br />
Seguindo todos os passos corretamente, dentro de poucos minutos, seu Freddy<br> estará pronto para uso.<br />
Antes de prosseguir:<br />
Dê permissão <b><font color=\"#FF0033\">666</font></b> para o arquivo config.php,a pasta modules e a /db/dbtxt,<br> na raíz do seu Freddy ( Somente servidores Linux );<br>
Obtenha os seguintes dados:<br /><br />
&nbsp;&nbsp;&nbsp;1- Nome ou IP do servidor MySQL ( Normalmente: <b><i>localhost</i></b> );<br />
&nbsp;&nbsp;&nbsp;2- Usuário que terá acesso ao banco de dados;<br />
&nbsp;&nbsp;&nbsp;3- Senha do Usuário;<br />
&nbsp;&nbsp;&nbsp;4- Nome do banco de dados.<br /><br />
<b>Obs:</b> Dependendo do seu servidor, antes de prosseguir, talvez seja necessário criar<br> o usuário e o banco de dados 
através do Painel de Administração de sua conta.");
define("_LAN_29","Conexão com o Banco de Dados");
define("_LAN_30","Preencha corretamente os seguintes dados:");
define("_LAN_31","Nome do Servidor:");
define("_LAN_32","Nome do Usuário:");
define("_LAN_33","Senha do Usuário:");
define("_LAN_34","Nome do Banco de Dados:");
define("_LAN_35","Nome do arquivo:");
define("_LAN_36","Prefixo para as tabelas");
define("_LAN_37","Prefixo para a tabelas dos usuários");
define("_LAN_38","ATENÇÃO");
define("_LAN_39","Clique apenas uma vez no botão <b>A V A N Ç A R</b> e aguarde <br>até que o processo termine, isso poderá levar alguns minutos,<br> dependendo do tamanho do arquivo a ser processado.");
define("_LAN_40","Criando Tabelas");
define("_LAN_41","Erro na criação das tabelas<br /><br /><font color=\"red\"><b>Mensagem de erro do servidor:</b></font>");
define("_LAN_42","Tabelas criadas com sucesso!!!");
define("_LAN_43","Configurando ( CONFIG.PHP )");
define("_LAN_44","Preencha corretamente os seguintes dados: <br /><br /><b>Obs.: </b>O arquivo config.php deverá estar com permissão <b>666</b> e estar na raíz do seu Freddy.");
define("_LAN_45","Chave do site: <i>(sitekey)</i>");
define("_LAN_46","ALTERAR_POR_QUESTÃO_DE_SEGURANÇA");
define("_LAN_47","Código de Segurança: <i>(gfx_chk)</i>");
define("_LAN_48","Servidor DB:");
define("_LAN_50","URL subscription: <i>(subscription_url)</i>");
define("_LAN_51","Lista de Palavrões:<br /><i>Informe conforme o exemplo</i>");
define("_LAN_52","Tags HTML permitidas:<br /><i>Informe conforme o exemplo</i>");
define("_LAN_53","Clique apenas uma vez no botão <b>A V A N Ç A R</b> e aguarde até que o processo termine.");
define("_LAN_54","\"puta\", \"viado\", \"gay\"");
define("_LAN_55","Falha");
define("_LAN_56","Falha na hora de escrever o arquivo config.php<br /><br />
Possíveis causas:
<li>O arquivo config.php não está com permissão <b>666</b>;</li>
<li>O arquivo config.php não está na raíz do seu Freddy;</li><br /><br />
Possíveis soluções:
<li>Através de um cliente FTP ( consulte o manual dele para saber como fazer ), dê permissão <b>666</b> para o arquivo config.php na raíz do seu Freddy;</li>
<li>Envie o arquivo config.php para o servidor;</li><br /><br /><br />
<b><center>Volte e Tente Novamente</center></b>");
define("_LAN_57","Renomear os Prefixos");
define("_LAN_58","Essa é a última etapa da instalação!<br /><br />
Todos os prefixos das tabelas estão sendo alterados para");
define("_LAN_59","<b>Script para renomear os prefixos das tabelas ( Cortesia )</b>");
define("_LAN_60","Traduzido por:");
define("_LAN_61","Implementações por:");
define("_LAN_62","Comunidade Php-Nuke Brasil - CNB");
define("_LAN_63","Desenvolvido por:");
define("_LAN_64","<center><h3>A alteração dos prefixos das tabelas do Banco de Dados ocorreu com <b>SUCESSO!</b></h3>
</center><br><br><br>
<b>Suas tabelas agora mudaram para:</b><br><br>");
define("_LAN_65","Pronto");
define("_LAN_66","O seu Freddy está instalado e pronto para ser utilizado.<br /><br />
Para sua segurança, crie imediatamente o administrador ( Superusuário ),<br> acessando a administração do site clicando no botão \"AVANÇAR\" logo abaixo.<br /><br />
Não esqueça de voltar a permissão do arquivo config.php para <b>644</b><br /><br /><hr />
<center><b>Obrigado por utilizar o Freddy.</b><br /><br />Não Esqueça de Apagar a pasta pasta INSTALL e todo o seu conteudo.");
define("_LAN_68","Servidor não selecionado.");
define("_LAN_69","Banco de dados não selecionado.");
define("_LAN_70","Arquivo SQL não existente: ");
define("_LAN_71","Selecione seu Idioma");
define("_LAN_72","Idioma");
define("_LAN_73","Informe o prefixo a ser utilizado pelas tabelas do Freddy. ( <b>Não use o padrão \"nuke\"</b> )");
define("_LAN_74","Instalação do Freddy");
define("_LAN_75","ERRO");
define("_LAN_76","Verifique o Usuário, Nome do Banco de Dados e a Senha ( Digitadas e fornecidas pelo seu servidor ).");
define("_LAN_77","A V A N Ç A R");
define("_LAN_78","V O L T A R");
define("_LAN_79","altere");
?>
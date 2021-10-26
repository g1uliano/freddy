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

define("_CHARSET","ISO-8859-1");
define("_SEARCH","Busca");
define("_LOGIN","Login");
define("_WRITES","enviou");
define("_POSTEDON","Postado em");
define("_NICKNAME","Apelido");
define("_PASSWORD","Senha");
define("_WELCOMETO","Bem vindo a");
define("_EDIT","Editar");
define("_DELETE","Apagar");
define("_POSTEDBY","Postado por");
define("_READS","vizualiza��o(�es)");
define("_GOBACK","[ <a href=\"javascript:history.go(-1)\">Voltar</a> ]");
define("_COMMENTS","coment�rios");
define("_PASTARTICLES","Not�cias anteriores");
define("_OLDERARTICLES","Not�cias antigas");
define("_BY","por");
define("_ON","em");
define("_LOGOUT","Logout");
define("_WAITINGCONT","No aguardo...");
define("_SUBMISSIONS","Envios");
define("_WREVIEWS","Revis�es");
define("_WLINKS","Links");
define("_EPHEMERIDS","Efem�rides");
define("_ONEDAY","Um dia como hoje...");
define("_ASREGISTERED","Ainda n�o � Cadastrado? Voc� pode se cadastrar clicando <a href=\"area.php?name=Your_Account&amp;op=new_user\">aqui</a>. Como usu�rio cadastrado voc� tem algumas vantagens como escolher o Tema do site (template) e enviar coment�rios com seu name.");
define("_MENUFOR","Menu para");
define("_NOBIGSTORY","Ainda n�o h� uma not�cia postada hoje.");
define("_BIGSTORY","A not�cia mais lida de hoje �:");
define("_SURVEY","Pesquisa");
define("_POLLS","Enquete");
define("_PCOMMENTS","Coment�rios:");
define("_RESULTS","resultados");
define("_HREADMORE","Leia mais...");
define("_CURRENTLY","Neste momento temos on-line");
define("_GUESTS","visitante(s) e");
define("_MEMBERS","usu�rio(s) cadastrado(s).");
define("_YOUARELOGGED","Voc� est� logado como");
define("_YOUHAVE","Voc� tem");
define("_PRIVATEMSG","Mensagem(ns) Privada(s).");
define("_YOUAREANON","VOc� � um usu�rios an�nimo. Voc� pode se cadastrar gratuitamente clicando <a href=\"area.php?name=Your_Account&amp;op=new_user\">aqui</a>.");
define("_NOTE","Nota:");
define("_ADMIN","Admin:");
define("_WERECEIVED","At� o momento, recebemos");
define("_PAGESVIEWS","vizualiza��es de p�ginas (page views) desde");
define("_TOPIC","T�pico");
define("_UDOWNLOADS","Downloads");
define("_VOTE","Voto");
define("_VOTES","Votos");
define("_MVIEWADMIN","Somente administradores");
define("_MVIEWUSERS","Somente usu�rios cadastrados");
define("_MVIEWANON","Somente usu�rios an�nimos");
define("_MVIEWALL","Todos");
define("_EXPIRELESSHOUR","Expira em menos de 1 hora");
define("_EXPIREIN","Expira em");
define("_HTTPREFERERS","Refer�ncias HTTP");
define("_UNLIMITED","Ilimitado(a)");
define("_HOURS","Horas");
define("_RSSPROBLEM","H� um problema em visualizar as not�cias deste site");
define("_SELECTLANGUAGE","Selecione o idioma");
define("_SELECTGUILANG","Selecione o idioma pra o site:");
define("_NONE","Nenhum(a)");
define("_BLOCKPROBLEM","<center>H� um problema com este Bloco.</center>");
define("_BLOCKPROBLEM2","<center>N�o h� conte�do para ser mostrado neste Bloco.</center>");
define("_MODULENOTACTIVE","Desculpe. Este M�dulo n�o est� ativo!");
define("_NOACTIVEMODULES","M�dulos inativos");
define("_FORADMINTESTS","(para teste de admins)");
define("_BBFORUMS","Foros");
define("_ACCESSDENIED", "Acesso negado!");
define("_RESTRICTEDAREA", "Voc� est� tentando acesar uma �re de conte�do restrito.");
define("_MODULEUSERS", "Sentimos muito mas esa parte do nosso conte�do � somente para <b>usu�rios cadastrados</b>.<br><br>Voc� pode se cadastrar gratuitamente clicando <a href=\"area.php?name=Your_Account&op=new_user\">aqui</a>, e ent�o voc� ter� accesso<br>a esta e outras se��es do nosso conte�do sem restri��es.<br><br>");
define("_MODULESADMINS", "Sentimos muito, mas esta parte do nosso conte�do � somente para <b>Administradores</b><br><br>");
define("_HOME","Home");
define("_HOMEPROBLEM","H� um problema em visualizar esta se��o! N�o h� um M�dulo definido na HomePage!!!");
define("_ADDAHOME","Adicione um M�dulo em sua Home");
define("_HOMEPROBLEMUSER","H� um problema com este site no momento. Por avor, retorne detnro de alguns instantes.");
define("_MORENEWS","Mais conte�do como este na se��o de not�cias");
define("_ALLCATEGORIES","Todas as categorias");
define("_DATESTRING","%A, %B %d @ %T %Z");
define("_DATESTRING2","%A, %B %d");
define("_DATE","Data");
define("_HOUR","Hora");
//Dias da Semana
define("_DATADOMINGO","Domingo");
define("_DATASEGUNDA","Segunda-Feira");
define("_DATATERCA","Ter�a-Feira");
define("_DATAQUARTA","Quarta-Feira");
define("_DATAQUINTA","Quinta-Feira");
define("_DATASEXTA","Sexta-Feira");
define("_DATASABADO","S�bado");
//--------------
define("_UMONTH","M�s");
define("_YEAR","ano");
define("_JANUARY","Janeiro");
define("_FEBRUARY","Fevereiro");
define("_MARCH","Mar�o");
define("_APRIL","Abril");
define("_MAY","Maio");
define("_JUNE","Junho");
define("_JULY","Julho");
define("_AUGUST","Agosto");
define("_SEPTEMBER","Setembro");
define("_OCTOBER","Outubro");
define("_NOVEMBER","Novembro");
define("_DECEMBER","Dezembro");
define("_BWEL","Bem-vindo(a)");
define("_BPM","Mensagens Privadas");
define("_BUNREAD","N�o lidas");
define("_BREAD","Lidas");
define("_BMEMP","Cadastramento");
define("_BLATEST","�ltimo(a)");
define("_BTD","Hoje:");
define("_BYD","Ontem");
define("_BOVER","Total");
define("_BVISIT","Pessoas on-line");
define("_BVIS","Visitantes");
define("_BMEM","Cadastrados");
define("_BTT","Total");
define("_BON","On-line agora");
define("_BREG","Cadastre-se");
define("_BROADCAST","Enviar Mensagem P�blica");
define("_BROADCASTFROM","Mensagem P�blica de");
define("_TURNOFFMSG","Desligar Mensagem P�blica");
define("_JOURNAL","Blog");
define("_READMYJOURNAL","Leia meu Blog");
define("_ADD","Adicionar");
define("_YES","Sim");
define("_NO","N�o");
define("_INVISIBLEMODULES","M�dulos invis�veis");
define("_ACTIVEBUTNOTSEE","(Ativos e n�o mostrados)");
define("_THISISAUTOMATED","Esta � uma mensagem autom�tica para lhe comunicar que seu banner de an�ncio alojado em nosso site foi completada.");
define("_THERESULTS","Os resultados de sua campanha podem ser visto abaixo:");
define("_TOTALIMPRESSIONS","Total de impress�es:");
define("_CLICKSRECEIVED","Cliques recebidos:");
define("_IMAGEURL","URL para a imagem");
define("_CLICKURL","URL para o clique:");
define("_ALTERNATETEXT","Texto alternativo:");
define("_HOPEYOULIKED","Esperamos que voc� tenha gostado dos nossos servi�os. Esperamos que voc� renove sua campanha o mais breve poss�vel!");
define("_THANKSUPPORT","Obrigado pelo seu suporte!");
define("_TEAM","Equipe");
define("_BANNERSFINNISHED","Banners com campanha conclu�da");
define("_MODREQLINKS","Mod. Links");
define("_BROKENLINKS","Links quebrados");
define("_MODREQDOWN","Mod. Downloads");
define("_BROKENDOWN","Downloads quebrados");
define("_PAGEGENERATION","Tempo para gerar esta p�gina:");
define("_SECONDS","segundos");
define("_YOUHAVEONEMSG","Voc� tem uma nova Mensagem Privada!");
define("_YOUHAVE","Voc� tem");
define("_NEWPMSG","Novas Mensagens Privadas!");
define("_CONTRIBUTEDBY","Enviado por");
define("_CHAT","Chat");
define("_REGISTERED","Cadastrados");
define("_CHATGUESTS","Visitantes");
define("_USERSTALKINGNOW","Usu�rios conversando");
define("_ENTERTOCHAT","Entre no Chat!");
define("_CHATROOMS","Salas dispon�veis");
define("_SECURITYCODE","C�digo de Seguran�a");
define("_TYPESECCODE","Digite o C�digo");
define("_ASSOTOPIC","T�picos relacionados");
define("_ADDITIONALYGRP","Este m�dulo adicional pertence ao Grupo de Usu�rios");
define("_YOUHAVEPOINTS","Seus pontos por participa��o no conte�do do Site:");
define("_MVIEWSUBUSERS","Ver: Somente Usu�rios Subscritos");
define("_MODULESSUBSCRIBER","Desculpe, mas esta se��o do Site � somente para <i>Usu�rios Subscritos.</i>");
define("_SUBHERE","Voc� pode subscrever-se em nossos servi�os <a href=\"$subscription_url\">aqui</a>");
define("_SUBEXPIRED","Sua Subscri��o Expirou");
define("_HELLO","Ol�");
define("_SUBSCRIPTIONAT","Esta � uma mensagem autom�tica para lhe informar que sua subscri��o em");
define("_HASEXPIRED","est� expirada agora.");
define("_HOPESERVED","Esperamos deix�-lo servido satisfeito...");
define("_SUBRENEW","Para renovar sua subscri��o dir�ga-se a:");
define("_YOUARE","Voc� �");
define("_SUBSCRIBER","subscritor");
define("_OF","de");
define("_SBYEARS","anos");
define("_SBYEAR","ano");
define("_SBMINUTES","minutos");
define("_SBHOURS","horas");
define("_SBSECONDS","segundos");
define("_SBDAYS","dias");
define("_SUBEXPIREIN","Sua subscri��o expira em:");
define("_NOTSUB","Voc� n�o � um subscrito de");
define("_SUBFROM","Voc� pode subscrever-se");
define("_HERE","aqui");
define("_NOW","agora!");
define("_ADMSUB","Usu�rio Subscrito!");
define("_ADMNOTSUB","Usu�rio n�o Subscrito");
define("_ADMSUBEXPIREIN","A Subscri��o Expira em:");
define("_LASTIP","�ltimo Usu�rio IP:");
define("_BANTHIS","Banir este IP");


function translate($phrase) {
    switch($phrase) {
	case "xdatestring":	$tmp = "%A, %B %d @ %T %Z"; break;
	case "linksdatestring":	$tmp = "%d-%b-%Y"; break;
	case "xdatestring2":	$tmp = "%A, %B %d"; break;
	default:		$tmp = "$phrase"; break;
    }
    return $tmp;
}

?>

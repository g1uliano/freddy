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
define("_READS","vizualização(ões)");
define("_GOBACK","[ <a href=\"javascript:history.go(-1)\">Voltar</a> ]");
define("_COMMENTS","comentários");
define("_PASTARTICLES","Notícias anteriores");
define("_OLDERARTICLES","Notícias antigas");
define("_BY","por");
define("_ON","em");
define("_LOGOUT","Logout");
define("_WAITINGCONT","No aguardo...");
define("_SUBMISSIONS","Envios");
define("_WREVIEWS","Revisões");
define("_WLINKS","Links");
define("_EPHEMERIDS","Efemérides");
define("_ONEDAY","Um dia como hoje...");
define("_ASREGISTERED","Ainda não é Cadastrado? Você pode se cadastrar clicando <a href=\"area.php?name=Your_Account&amp;op=new_user\">aqui</a>. Como usuário cadastrado você tem algumas vantagens como escolher o Tema do site (template) e enviar comentários com seu name.");
define("_MENUFOR","Menu para");
define("_NOBIGSTORY","Ainda não há uma notícia postada hoje.");
define("_BIGSTORY","A notícia mais lida de hoje é:");
define("_SURVEY","Pesquisa");
define("_POLLS","Enquete");
define("_PCOMMENTS","Comentários:");
define("_RESULTS","resultados");
define("_HREADMORE","Leia mais...");
define("_CURRENTLY","Neste momento temos on-line");
define("_GUESTS","visitante(s) e");
define("_MEMBERS","usuário(s) cadastrado(s).");
define("_YOUARELOGGED","Você está logado como");
define("_YOUHAVE","Você tem");
define("_PRIVATEMSG","Mensagem(ns) Privada(s).");
define("_YOUAREANON","VOcê é um usuários anônimo. Você pode se cadastrar gratuitamente clicando <a href=\"area.php?name=Your_Account&amp;op=new_user\">aqui</a>.");
define("_NOTE","Nota:");
define("_ADMIN","Admin:");
define("_WERECEIVED","Até o momento, recebemos");
define("_PAGESVIEWS","vizualizações de páginas (page views) desde");
define("_TOPIC","Tópico");
define("_UDOWNLOADS","Downloads");
define("_VOTE","Voto");
define("_VOTES","Votos");
define("_MVIEWADMIN","Somente administradores");
define("_MVIEWUSERS","Somente usuários cadastrados");
define("_MVIEWANON","Somente usuários anônimos");
define("_MVIEWALL","Todos");
define("_EXPIRELESSHOUR","Expira em menos de 1 hora");
define("_EXPIREIN","Expira em");
define("_HTTPREFERERS","Referências HTTP");
define("_UNLIMITED","Ilimitado(a)");
define("_HOURS","Horas");
define("_RSSPROBLEM","Há um problema em visualizar as notícias deste site");
define("_SELECTLANGUAGE","Selecione o idioma");
define("_SELECTGUILANG","Selecione o idioma pra o site:");
define("_NONE","Nenhum(a)");
define("_BLOCKPROBLEM","<center>Há um problema com este Bloco.</center>");
define("_BLOCKPROBLEM2","<center>Não há conteúdo para ser mostrado neste Bloco.</center>");
define("_MODULENOTACTIVE","Desculpe. Este Módulo não está ativo!");
define("_NOACTIVEMODULES","Módulos inativos");
define("_FORADMINTESTS","(para teste de admins)");
define("_BBFORUMS","Foros");
define("_ACCESSDENIED", "Acesso negado!");
define("_RESTRICTEDAREA", "Você está tentando acesar uma áre de conteúdo restrito.");
define("_MODULEUSERS", "Sentimos muito mas esa parte do nosso conteúdo é somente para <b>usuários cadastrados</b>.<br><br>Você pode se cadastrar gratuitamente clicando <a href=\"area.php?name=Your_Account&op=new_user\">aqui</a>, e então você terá accesso<br>a esta e outras seções do nosso conteúdo sem restrições.<br><br>");
define("_MODULESADMINS", "Sentimos muito, mas esta parte do nosso conteúdo é somente para <b>Administradores</b><br><br>");
define("_HOME","Home");
define("_HOMEPROBLEM","Há um problema em visualizar esta seção! Não há um Módulo definido na HomePage!!!");
define("_ADDAHOME","Adicione um Módulo em sua Home");
define("_HOMEPROBLEMUSER","Há um problema com este site no momento. Por avor, retorne detnro de alguns instantes.");
define("_MORENEWS","Mais conteúdo como este na seção de notícias");
define("_ALLCATEGORIES","Todas as categorias");
define("_DATESTRING","%A, %B %d @ %T %Z");
define("_DATESTRING2","%A, %B %d");
define("_DATE","Data");
define("_HOUR","Hora");
//Dias da Semana
define("_DATADOMINGO","Domingo");
define("_DATASEGUNDA","Segunda-Feira");
define("_DATATERCA","Terça-Feira");
define("_DATAQUARTA","Quarta-Feira");
define("_DATAQUINTA","Quinta-Feira");
define("_DATASEXTA","Sexta-Feira");
define("_DATASABADO","Sábado");
//--------------
define("_UMONTH","Mês");
define("_YEAR","ano");
define("_JANUARY","Janeiro");
define("_FEBRUARY","Fevereiro");
define("_MARCH","Março");
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
define("_BUNREAD","Não lidas");
define("_BREAD","Lidas");
define("_BMEMP","Cadastramento");
define("_BLATEST","Último(a)");
define("_BTD","Hoje:");
define("_BYD","Ontem");
define("_BOVER","Total");
define("_BVISIT","Pessoas on-line");
define("_BVIS","Visitantes");
define("_BMEM","Cadastrados");
define("_BTT","Total");
define("_BON","On-line agora");
define("_BREG","Cadastre-se");
define("_BROADCAST","Enviar Mensagem Pública");
define("_BROADCASTFROM","Mensagem Pública de");
define("_TURNOFFMSG","Desligar Mensagem Pública");
define("_JOURNAL","Blog");
define("_READMYJOURNAL","Leia meu Blog");
define("_ADD","Adicionar");
define("_YES","Sim");
define("_NO","Não");
define("_INVISIBLEMODULES","Módulos invisíveis");
define("_ACTIVEBUTNOTSEE","(Ativos e não mostrados)");
define("_THISISAUTOMATED","Esta é uma mensagem automática para lhe comunicar que seu banner de anúncio alojado em nosso site foi completada.");
define("_THERESULTS","Os resultados de sua campanha podem ser visto abaixo:");
define("_TOTALIMPRESSIONS","Total de impressões:");
define("_CLICKSRECEIVED","Cliques recebidos:");
define("_IMAGEURL","URL para a imagem");
define("_CLICKURL","URL para o clique:");
define("_ALTERNATETEXT","Texto alternativo:");
define("_HOPEYOULIKED","Esperamos que você tenha gostado dos nossos serviços. Esperamos que você renove sua campanha o mais breve possível!");
define("_THANKSUPPORT","Obrigado pelo seu suporte!");
define("_TEAM","Equipe");
define("_BANNERSFINNISHED","Banners com campanha concluída");
define("_MODREQLINKS","Mod. Links");
define("_BROKENLINKS","Links quebrados");
define("_MODREQDOWN","Mod. Downloads");
define("_BROKENDOWN","Downloads quebrados");
define("_PAGEGENERATION","Tempo para gerar esta página:");
define("_SECONDS","segundos");
define("_YOUHAVEONEMSG","Você tem uma nova Mensagem Privada!");
define("_YOUHAVE","Você tem");
define("_NEWPMSG","Novas Mensagens Privadas!");
define("_CONTRIBUTEDBY","Enviado por");
define("_CHAT","Chat");
define("_REGISTERED","Cadastrados");
define("_CHATGUESTS","Visitantes");
define("_USERSTALKINGNOW","Usuários conversando");
define("_ENTERTOCHAT","Entre no Chat!");
define("_CHATROOMS","Salas disponíveis");
define("_SECURITYCODE","Código de Segurança");
define("_TYPESECCODE","Digite o Código");
define("_ASSOTOPIC","Tópicos relacionados");
define("_ADDITIONALYGRP","Este módulo adicional pertence ao Grupo de Usuários");
define("_YOUHAVEPOINTS","Seus pontos por participação no conteúdo do Site:");
define("_MVIEWSUBUSERS","Ver: Somente Usuários Subscritos");
define("_MODULESSUBSCRIBER","Desculpe, mas esta seção do Site é somente para <i>Usuários Subscritos.</i>");
define("_SUBHERE","Você pode subscrever-se em nossos serviços <a href=\"$subscription_url\">aqui</a>");
define("_SUBEXPIRED","Sua Subscrição Expirou");
define("_HELLO","Olá");
define("_SUBSCRIPTIONAT","Esta é uma mensagem automática para lhe informar que sua subscrição em");
define("_HASEXPIRED","está expirada agora.");
define("_HOPESERVED","Esperamos deixá-lo servido satisfeito...");
define("_SUBRENEW","Para renovar sua subscrição diríga-se a:");
define("_YOUARE","Você é");
define("_SUBSCRIBER","subscritor");
define("_OF","de");
define("_SBYEARS","anos");
define("_SBYEAR","ano");
define("_SBMINUTES","minutos");
define("_SBHOURS","horas");
define("_SBSECONDS","segundos");
define("_SBDAYS","dias");
define("_SUBEXPIREIN","Sua subscrição expira em:");
define("_NOTSUB","Você não é um subscrito de");
define("_SUBFROM","Você pode subscrever-se");
define("_HERE","aqui");
define("_NOW","agora!");
define("_ADMSUB","Usuário Subscrito!");
define("_ADMNOTSUB","Usuário não Subscrito");
define("_ADMSUBEXPIREIN","A Subscrição Expira em:");
define("_LASTIP","Último Usuário IP:");
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

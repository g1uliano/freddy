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
/*  Licença.                                                                         */
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

if (stristr($_SERVER['SCRIPT_NAME'], "meta.php")) {
    Header("Location: ../index.php");
    die();
}

echo "<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset="._CHARSET."\">\n";
echo "<META HTTP-EQUIV=\"EXPIRES\" CONTENT=\"0\">\n";
echo "<META NAME=\"RESOURCE-TYPE\" CONTENT=\"DOCUMENT\">\n";
echo "<META NAME=\"DISTRIBUTION\" CONTENT=\"GLOBAL\">\n";
echo "<META NAME=\"AUTHOR\" CONTENT=\"$sitename\">\n";
echo "<META NAME=\"COPYRIGHT\" CONTENT=\"Copyright (c) by $sitename\">\n";
echo "<META NAME=\"KEYWORDS\" CONTENT=\"News, news, New, new, Technology, technology, Headlines, headlines, Nuke, nuke, PHP-Nuke, phpnuke, php-nuke, Geek, geek, Geeks, geeks, Hacker, hacker, Hackers, hackers, Linux, linux, Windows, windows, Software, software, Download, download, Downloads, downloads, Free, FREE, free, Community, community, MP3, mp3, Forum, forum, Forums, forums, Bulletin, bulletin, Board, board, Boards, boards, PHP, php, Survey, survey, Kernel, kernel, Comment, comment, Comments, comments, Portal, portal, ODP, odp, Open, open, Open Source, OpenSource, Opensource, opensource, open source, Free Software, FreeSoftware, Freesoftware, free software, GNU, gnu, GPL, gpl, License, license, Unix, UNIX, *nix, unix, MySQL, mysql, SQL, sql, Database, DataBase, Blogs, blogs, Blog, blog, database, Mandrake, mandrake, Red Hat, RedHat, red hat, Slackware, slackware, SUSE, SuSE, suse, Debian, debian, Gname, GNOME, gname, Kde, KDE, kde, Enlightenment, enlightenment, Interactive, interactive, Programming, programming, Extreme, extreme, Game, game, Games, games, Web Site, web site, Weblog, WebLog, weblog, Guru, GURU, guru, Oracle, oracle, db2, DB2, odbc, ODBC, plugin, plugins, Plugin, Plugins\">\n";
echo "<META NAME=\"DESCRIPTION\" CONTENT=\"$slogan\">\n";
echo "<META NAME=\"ROBOTS\" CONTENT=\"INDEX, FOLLOW\">\n";
echo "<META NAME=\"REVISIT-AFTER\" CONTENT=\"1 DAYS\">\n";
echo "<META NAME=\"RATING\" CONTENT=\"GENERAL\">\n";

?>
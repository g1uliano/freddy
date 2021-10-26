
CREATE TABLE `nuke_authors` (
  `aid` varchar(25) NOT NULL default '',
  `name` varchar(50) default NULL,
  `url` varchar(255) NOT NULL default '',
  `email` varchar(255) NOT NULL default '',
  `pwd` varchar(40) default NULL,
  `counter` int(11) NOT NULL default '0',
  `radminsuper` tinyint(1) NOT NULL default '1',
  `admlanguage` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`aid`),
  KEY `aid` (`aid`)
) TYPE=MyISAM;

CREATE TABLE `nuke_banned_ip` (
  `id` int(11) NOT NULL auto_increment,
  `ip_address` varchar(15) NOT NULL default '',
  `reason` varchar(255) NOT NULL default '',
  `date` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) TYPE=MyISAM;

CREATE TABLE `nuke_blocks` (
  `bid` int(10) NOT NULL auto_increment,
  `bkey` varchar(15) NOT NULL default '',
  `title` varchar(60) NOT NULL default '',
  `content` text NOT NULL,
  `url` varchar(200) NOT NULL default '',
  `bposition` char(1) NOT NULL default '',
  `weight` int(10) NOT NULL default '1',
  `active` int(1) NOT NULL default '1',
  `refresh` int(10) NOT NULL default '0',
  `time` varchar(14) NOT NULL default '0',
  `blanguage` varchar(30) NOT NULL default '',
  `blockfile` varchar(255) NOT NULL default '',
  `view` int(1) NOT NULL default '0',
  `expire` varchar(14) NOT NULL default '0',
  `action` char(1) NOT NULL default '',
  `subscription` int(1) NOT NULL default '0',
  PRIMARY KEY  (`bid`),
  KEY `bid` (`bid`),
  KEY `title` (`title`)
) TYPE=MyISAM;

INSERT INTO `nuke_blocks` VALUES (1, '', 'Módulos', '', '', 'l', 3, 1, 0, '', '', 'block-Modules.php', 2, '0', 'd', 0);
INSERT INTO `nuke_blocks` VALUES (16, '', 'Administração', '<strong>&middot;</strong>&nbsp;<a href="admin.php">Administra&ccedil;&atilde;o</a><br />\r\n<strong>&middot;</strong>&nbsp;<a href="admin.php?op=BlocksAdmin">Admin Blocos</a><br />\r\n<strong>&middot;</strong>&nbsp;<a href="admin.php?op=modules">Admin Módulos</a><br />\r\n<strong>&middot;</strong>&nbsp;<a href="admin.php?op=editor">Editor</a><br />\r\n<strong>&middot;</strong>&nbsp;<a href="admin.php?op=upload">Upload de Arquivos</a><br />\r\n<strong>&middot;</strong>&nbsp;<a href="area.php?nome=Estatisticas">Estatisticas</a><br />\r\n<strong>&middot;</strong>&nbsp;<a href="admin.php?op=logout">Sair</a>', '', 'l', 2, 1, 0, '', '', '', 2, '0', 'd', 0);
INSERT INTO `nuke_blocks` VALUES (17, '', 'Menu', '', '', 'l', 1, 1, 3600, '', '', 'block-Menu.php', 0, '0', 'd', 0);

CREATE TABLE `nuke_config` (
  `sitename` varchar(255) NOT NULL default '',
  `nukeurl` varchar(255) NOT NULL default '',
  `site_logo` varchar(255) NOT NULL default '',
  `slogan` varchar(255) NOT NULL default '',
  `startdate` varchar(50) NOT NULL default '',
  `adminmail` varchar(255) NOT NULL default '',
  `anonpost` tinyint(1) NOT NULL default '0',
  `Default_Theme` varchar(255) NOT NULL default '',
  `foot1` text NOT NULL,
  `foot2` text NOT NULL,
  `foot3` text NOT NULL,
  `commentlimit` int(9) NOT NULL default '4096',
  `anonymous` varchar(255) NOT NULL default '',
  `minpass` tinyint(1) NOT NULL default '5',
  `pollcomm` tinyint(1) NOT NULL default '1',
  `articlecomm` tinyint(1) NOT NULL default '1',
  `broadcast_msg` tinyint(1) NOT NULL default '1',
  `my_headlines` tinyint(1) NOT NULL default '1',
  `top` int(3) NOT NULL default '10',
  `storyhome` int(2) NOT NULL default '10',
  `user_news` tinyint(1) NOT NULL default '1',
  `oldnum` int(2) NOT NULL default '30',
  `ultramode` tinyint(1) NOT NULL default '0',
  `banners` tinyint(1) NOT NULL default '1',
  `backend_title` varchar(255) NOT NULL default '',
  `backend_language` varchar(10) NOT NULL default '',
  `language` varchar(100) NOT NULL default '',
  `locale` varchar(10) NOT NULL default '',
  `multilingual` tinyint(1) NOT NULL default '1',
  `useflags` tinyint(1) NOT NULL default '1',
  `notify` tinyint(1) NOT NULL default '0',
  `notify_email` varchar(255) NOT NULL default '',
  `notify_subject` varchar(255) NOT NULL default '',
  `notify_message` varchar(255) NOT NULL default '',
  `notify_from` varchar(255) NOT NULL default '',
  `moderate` tinyint(1) NOT NULL default '0',
  `admingraphic` tinyint(1) NOT NULL default '1',
  `httpref` tinyint(1) NOT NULL default '0',
  `httprefmax` int(5) NOT NULL default '1000',
  `CensorMode` tinyint(1) NOT NULL default '3',
  `CensorReplace` varchar(10) NOT NULL default '',
  `advanced_editor` text NOT NULL,
  `modules_admin` text NOT NULL,
  `verificar_versao` text NOT NULL,
  `Version_Num` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`sitename`)
) TYPE=MyISAM;

INSERT INTO `nuke_config` VALUES ('Freddy', 'http://seusite.com', 'logo.gif', 'The Future of The Web', 'Agosto de 2005', 'webmaster@seusite.com', 0, 'neofreddy', '<strong>Os logotipos e marcas deste site s&atilde;o propriedades de seus respectivos donos.</strong>', '', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '', 'brazilian', 'brazilian', 'pt_BR', 0, 0, 0, '', '', '', '', 0, 1, 0, 0, 0, '', 0, 0, 1, '0.9');

CREATE TABLE `nuke_confirm` (
  `confirm_id` char(32) NOT NULL default '',
  `session_id` char(32) NOT NULL default '',
  `code` char(6) NOT NULL default '',
  PRIMARY KEY  (`session_id`,`confirm_id`)
) TYPE=MyISAM;

CREATE TABLE `nuke_counter` (
  `type` varchar(80) NOT NULL default '',
  `var` varchar(80) NOT NULL default '',
  `count` int(10) unsigned NOT NULL default '0'
) TYPE=MyISAM;

INSERT INTO `nuke_counter` VALUES ('total', 'hits', 771);
INSERT INTO `nuke_counter` VALUES ('browser', 'WebTV', 0);
INSERT INTO `nuke_counter` VALUES ('browser', 'Lynx', 0);
INSERT INTO `nuke_counter` VALUES ('browser', 'MSIE', 21);
INSERT INTO `nuke_counter` VALUES ('browser', 'Opera', 0);
INSERT INTO `nuke_counter` VALUES ('browser', 'Konqueror', 8);
INSERT INTO `nuke_counter` VALUES ('browser', 'Netscape', 743);
INSERT INTO `nuke_counter` VALUES ('browser', 'Bot', 0);
INSERT INTO `nuke_counter` VALUES ('browser', 'Other', 0);
INSERT INTO `nuke_counter` VALUES ('os', 'Windows', 21);
INSERT INTO `nuke_counter` VALUES ('os', 'Linux', 751);
INSERT INTO `nuke_counter` VALUES ('os', 'Mac', 0);
INSERT INTO `nuke_counter` VALUES ('os', 'FreeBSD', 0);
INSERT INTO `nuke_counter` VALUES ('os', 'SunOS', 0);
INSERT INTO `nuke_counter` VALUES ('os', 'IRIX', 0);
INSERT INTO `nuke_counter` VALUES ('os', 'BeOS', 0);
INSERT INTO `nuke_counter` VALUES ('os', 'OS/2', 0);
INSERT INTO `nuke_counter` VALUES ('os', 'AIX', 0);
INSERT INTO `nuke_counter` VALUES ('os', 'Other', 0);

CREATE TABLE `nuke_headlines` (
  `hid` int(11) NOT NULL auto_increment,
  `sitename` varchar(30) NOT NULL default '',
  `headlinesurl` varchar(200) NOT NULL default '',
  PRIMARY KEY  (`hid`),
  KEY `hid` (`hid`)
) TYPE=MyISAM;

INSERT INTO `nuke_headlines` VALUES (1, '100graus PHP-Nuke', 'http://100graus.com/backend.php');
INSERT INTO `nuke_headlines` VALUES (2, 'BSDToday', 'http://www.bsdtoday.com/backend/bt.rdf');
INSERT INTO `nuke_headlines` VALUES (3, 'BrunchingShuttlecocks', 'http://www.brunching.com/brunching.rdf');
INSERT INTO `nuke_headlines` VALUES (4, 'DailyDaemonNews', 'http://daily.daemonnews.org/ddn.rdf.php3');
INSERT INTO `nuke_headlines` VALUES (5, 'DigitalTheatre', 'http://www.dtheatre.com/backend.php3?xml=yes');
INSERT INTO `nuke_headlines` VALUES (6, 'DotKDE', 'http://dot.kde.org/rdf');
INSERT INTO `nuke_headlines` VALUES (7, 'FreeDOS', 'http://www.freedos.org/channels/rss.cgi');
INSERT INTO `nuke_headlines` VALUES (8, 'Freshmeat', 'http://freshmeat.net/backend/fm.rdf');
INSERT INTO `nuke_headlines` VALUES (9, 'Gnome Desktop', 'http://www.gnomedesktop.org/backend.php');
INSERT INTO `nuke_headlines` VALUES (10, 'HappyPenguin', 'http://happypenguin.org/html/news.rdf');
INSERT INTO `nuke_headlines` VALUES (11, 'HollywoodBitchslap', 'http://hollywoodbitchslap.com/hbs.rdf');
INSERT INTO `nuke_headlines` VALUES (12, 'Learning Linux', 'http://www.learninglinux.com/backend.php');
INSERT INTO `nuke_headlines` VALUES (13, 'LinuxCentral', 'http://linuxcentral.com/backend/lcnew.rdf');
INSERT INTO `nuke_headlines` VALUES (14, 'LinuxJournal', 'http://www.linuxjournal.com/news.rss');
INSERT INTO `nuke_headlines` VALUES (15, 'LinuxWeelyNews', 'http://lwn.net/headlines/rss');
INSERT INTO `nuke_headlines` VALUES (16, 'Listology', 'http://listology.com/recent.rdf');
INSERT INTO `nuke_headlines` VALUES (17, 'MozillaNewsBot', 'http://www.mozilla.org/newsbot/newsbot.rdf');
INSERT INTO `nuke_headlines` VALUES (18, 'NewsForge', 'http://www.newsforge.com/newsforge.rdf');
INSERT INTO `nuke_headlines` VALUES (19, 'NukeResources', 'http://www.nukeresources.com/backend.php');
INSERT INTO `nuke_headlines` VALUES (20, 'NukeScripts', 'http://www.nukescripts.net/backend.php');
INSERT INTO `nuke_headlines` VALUES (21, 'PDABuzz', 'http://www.pdabuzz.com/netscape.txt');
INSERT INTO `nuke_headlines` VALUES (22, 'PHP-Nuke', 'http://phpnuke.org/backend.php');
INSERT INTO `nuke_headlines` VALUES (23, 'PHP.net', 'http://www.php.net/news.rss');
INSERT INTO `nuke_headlines` VALUES (24, 'PHPBuilder', 'http://phpbuilder.com/rss_feed.php');
INSERT INTO `nuke_headlines` VALUES (25, 'PerlMonks', 'http://www.perlmonks.org/headlines.rdf');
INSERT INTO `nuke_headlines` VALUES (26, 'TheNextLevel', 'http://www.the-nextlevel.com/rdf/tnl.rdf');
INSERT INTO `nuke_headlines` VALUES (27, 'WebReference', 'http://webreference.com/webreference.rdf');

CREATE TABLE `nuke_main` (
  `main_module` varchar(255) NOT NULL default ''
) TYPE=MyISAM;

INSERT INTO `nuke_main` VALUES ('Home');

CREATE TABLE `nuke_message` (
  `mid` int(11) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL default '',
  `content` text NOT NULL,
  `date` varchar(14) NOT NULL default '',
  `expire` int(7) NOT NULL default '0',
  `active` int(1) NOT NULL default '1',
  `view` int(1) NOT NULL default '1',
  `mlanguage` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`mid`),
  UNIQUE KEY `mid` (`mid`)
) TYPE=MyISAM;

INSERT INTO `nuke_message` VALUES (1, 'Bem Vindo ao Freddy', '<p align="justify">O Freddy é um sistema de gerenciamento de conteúdo\r\nque foi desenvolvido com base na engine do Php-Nuke, porém este n&atilde;o tem\r\nsuporte aos módulos deste, apenas aos seus temas.<br />\r\n</p>\r\n\r\n<p align="justify">O Freddy é mais estável e seguro do que o próprio\r\nPhp-Nuke, já que este fora desenvolvido sobre uma vers&atilde;o estável do Nuke,\r\ne as falhas que afetavam-no na época ja haviam sido corrigidas.<br />\r\n</p>\r\n\r\n<p align="justify">90% das Falhas do Php-Nuke s&atilde;o resultantes de\r\nrecursos adicionados após a vers&atilde;o 7.5 e do módulo Forums que n&atilde;o passa\r\nde uma\r\nmedíocre adapta&ccedil;&atilde;o do phpBB ao Nuke que faz com que ele aumente\r\nconsideravelmente o seu tamanho e o deixa vulneravel aos contantes\r\nbug''s deste sistema de fórum.O Freddy n&atilde;o vem com este recurso inutil a\r\nmuitos.<br />\r\n</p>\r\n<p align="justify">O que voc&ecirc; encontra apenas nesta vers&atilde;o:<br />\r\n- Suporte a Temas do Nuke.<br />\r\n- Tempo de Gera&ccedil;&atilde;o de página abaixo de 2 segundos.<br />\r\n- EasyModules. Recurso que permite que voc&ecirc; crie módulos para ele com apenas alguns cliques.</p>\r\nO Freddy é o primeiro sistema de gerenciamento de conteudo que tem como\r\nobjetivo a máxima costumiza&ccedil;&atilde;o.Ele vem a ser o framework ideal para\r\nvoc&ecirc;.<br />\r\n<p align="justify">Em Caso de Eventuais Bug''s <u><a href="http://freddy.codigolivre.org.br/index.php?area=contato" target="_blank">contate-me</a></u>.<br />\r\n</p>\r\n\r\n<p align="justify"><strong>Para criar um super usuário clique <a href="admin.php">aqui</a>.</strong></p>', '993373194', 0, 1, 1, '');

CREATE TABLE `nuke_modules` (
  `mid` int(10) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `custom_title` varchar(255) NOT NULL default '',
  `active` int(1) NOT NULL default '0',
  `view` int(1) NOT NULL default '0',
  `inmenu` tinyint(1) NOT NULL default '1',
  `mod_group` int(10) default '0',
  `admins` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`mid`),
  KEY `mid` (`mid`),
  KEY `title` (`title`),
  KEY `custom_title` (`custom_title`)
) TYPE=MyISAM;

INSERT INTO `nuke_modules` VALUES (6, 'Contato', 'Contato', 1, 0, 1, 0, '');
INSERT INTO `nuke_modules` VALUES (12, 'Recomende_nos', 'Recomende-nos', 1, 0, 1, 0, '');
INSERT INTO `nuke_modules` VALUES (15, 'Estatisticas', 'Estatísticas', 1, 0, 1, 0, '');

CREATE TABLE `nuke_optimize_gain` (
  `gain` decimal(10,3) default NULL
) TYPE=MyISAM;

CREATE TABLE `nuke_queue` (
  `qid` smallint(5) unsigned NOT NULL auto_increment,
  `uid` mediumint(9) NOT NULL default '0',
  `uname` varchar(40) NOT NULL default '',
  `subject` varchar(100) NOT NULL default '',
  `story` text,
  `storyext` text NOT NULL,
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `topic` varchar(20) NOT NULL default '',
  `alanguage` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`qid`),
  KEY `qid` (`qid`),
  KEY `uid` (`uid`),
  KEY `uname` (`uname`)
) TYPE=MyISAM;

CREATE TABLE `nuke_referer` (
  `rid` int(11) NOT NULL auto_increment,
  `url` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`rid`),
  KEY `rid` (`rid`)
) TYPE=MyISAM;

CREATE TABLE `nuke_related` (
  `rid` int(11) NOT NULL auto_increment,
  `tid` int(11) NOT NULL default '0',
  `name` varchar(30) NOT NULL default '',
  `url` varchar(200) NOT NULL default '',
  PRIMARY KEY  (`rid`),
  KEY `rid` (`rid`),
  KEY `tid` (`tid`)
) TYPE=MyISAM;

CREATE TABLE `nuke_session` (
  `uname` varchar(25) NOT NULL default '',
  `time` varchar(14) NOT NULL default '',
  `host_addr` varchar(48) NOT NULL default '',
  `guest` int(1) NOT NULL default '0',
  KEY `time` (`time`),
  KEY `guest` (`guest`)
) TYPE=MyISAM;

CREATE TABLE `nuke_stats_date` (
  `year` smallint(6) NOT NULL default '0',
  `month` tinyint(4) NOT NULL default '0',
  `date` tinyint(4) NOT NULL default '0',
  `hits` bigint(20) NOT NULL default '0'
) TYPE=MyISAM;

CREATE TABLE `nuke_stats_hour` (
  `year` smallint(6) NOT NULL default '0',
  `month` tinyint(4) NOT NULL default '0',
  `date` tinyint(4) NOT NULL default '0',
  `hour` tinyint(4) NOT NULL default '0',
  `hits` int(11) NOT NULL default '0'
) TYPE=MyISAM;

CREATE TABLE `nuke_stats_month` (
  `year` smallint(6) NOT NULL default '0',
  `month` tinyint(4) NOT NULL default '0',
  `hits` bigint(20) NOT NULL default '0'
) TYPE=MyISAM;

CREATE TABLE `nuke_stats_year` (
  `year` smallint(6) NOT NULL default '0',
  `hits` bigint(20) NOT NULL default '0'
) TYPE=MyISAM;

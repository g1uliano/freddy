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
if (stristr($_SERVER['SCRIPT_NAME'], "footer.php")) {
    Header("Location: index.php");
    die();
}

$footer = 1;

function footmsg() {
    global $foot1, $foot2, $foot3, $total_time, $start_time, $autoria, $versao;
    $mtime = microtime();
    $mtime = explode(" ",$mtime);
    $mtime = $mtime[1] + $mtime[0];
    $end_time = $mtime;
    $total_time = ($end_time - $start_time);
    $total_time = ""._PAGEGENERATION." ".substr($total_time,0,4)." "._SECONDS."";
    $autoria = "Powered by <a href=\"http://freddy.codigolivre.org.br\" target=\"_blank\">Freddy $versao</a> - Software Livre liberado sob licença <a href=\"gpl.txt\">GNU/GPL</a>.";
    echo "<font class=\"footmsg\">\n";
    if ($foot1 != "") {
	echo "$foot1<br>\n";
    }
    if ($foot2 != "") {
	echo "$foot2<br>\n";
    }
    if ($foot3 != "") {
	echo "$foot3<br>\n";
    }
    echo "$autoria<br>$total_time<br>\n</font>\n";
}

function foot() {
    global $prefix, $user_prefix, $db, $index, $user, $cookie, $storynum, $user, $cookie, $Default_Theme, $foot1, $foot2, $foot3, $foot4, $home, $module, $name, $admin;
    if ($home == 1) {
		blocks(Down);
    }
    themefooter();
    echo "</body>\n"
		."</html>";
    die();
}

foot();
?>
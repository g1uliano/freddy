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

if (eregi("javascript.php",$_SERVER['PHP_SELF'])) {
    Header("Location: ../index.php");
    die();
}

global $module, $nome, $admin, $advanced_editor, $lang, $op;

if (file_exists("themes/$ThemeSel/style/editor.css")) {
    $edtcss = "editor_css : \"themes/$ThemeSel/style/editor.css\",";
} else {
    $edtcss = "editor_css : \"includes/tiny_mce/themes/default/editor_ui.css\",";
}
if (is_admin($admin) AND defined('ADMIN_FILE') AND $nome != "Contato" AND $op != "Configure" AND $advanced_editor == 1) {
	echo "<!-- tinyMCE -->
		<script language=\"javascript\" type=\"text/javascript\" src=\"includes/tiny_mce/tiny_mce.js\"></script>
		<script language=\"javascript\" type=\"text/javascript\">
	   	tinyMCE.init({
		mode : \"textareas\",
		theme : \"advanced\",
		language : \"pt_br\",
		force_p_newlines: \"false\",
		force_br_newlines: \"true\",
		plugins : \"table,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,zoom,flash,searchreplace,print\",
		theme_advanced_buttons1_add : \"fontselect,fontsizeselect\",
		theme_advanced_buttons2_add : \"separator,insertdate,inserttime,preview,zoom,separator,forecolor,backcolor\",
		theme_advanced_buttons2_add_before: \"cut,copy,paste,separator,search,replace,separator\",
		theme_advanced_buttons3_add_before : \"tablecontrols,separator\",
		theme_advanced_buttons3_add : \"emotions,iespell,flash,advhr,separator,print\",
		theme_advanced_toolbar_location : \"top\",
		theme_advanced_toolbar_align : \"left\",
		theme_advanced_path_location : \"bottom\",
		$edtcss
	    	plugin_insertdate_dateFormat : \"%Y-%m-%d\",
	    	plugin_insertdate_timeFormat : \"%H:%M:%S\",
		extended_valid_elements : \"a[name|href|target|title|onclick],img[class|src|border=0|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name],hr[class|width|size|noshade],font[face|size|color|style],span[class|align|style]\",
		external_link_list_url : \"example_link_list.js\",
		external_image_list_url : \"example_image_list.js\",
		flash_external_list_url : \"example_flash_list.js\",
		file_browser_callback : \"fileBrowserCallBack\"
	});
	function fileBrowserCallBack(field_name, url, type) {
		// This is where you insert your custom filebrowser logic
		alert(\"Filebrowser callback: \" + field_name + \",\" + url + \",\" + type);
	}		</script>
		<!-- /tinyMCE -->";
} elseif (is_admin($admin) AND $advanced_editor != 1 AND $nome != "Contato" AND $op != "Configure") {
	echo "<!-- tinyMCE -->
		<script language=\"javascript\" type=\"text/javascript\" src=\"includes/tiny_mce/tiny_mce.js\"></script>
		<script language=\"javascript\" type=\"text/javascript\">
	   	tinyMCE.init({
      		mode : \"textareas\",
			theme : \"simple\",
			language : \"pt_br\",
			$edtcss
			force_p_newlines: \"false\",
			force_br_newlines: \"true\"
	   	});
		</script>
		<!-- /tinyMCE -->";
} elseif (is_admin($admin) AND defined('ADMIN_FILE') AND $op == "Configure" ) {
	echo "<!-- tinyMCE -->
		<script language=\"javascript\" type=\"text/javascript\" src=\"includes/tiny_mce/tiny_mce.js\"></script>
		<script language=\"javascript\" type=\"text/javascript\">
	   	tinyMCE.init({
      		mode : \"textareas\",
			theme : \"simple\",
			language : \"pt_br\",
			$edtcss
			force_p_newlines: \"false\",
			force_br_newlines: \"true\"
	   	});
		</script>
		<!-- /tinyMCE -->";
} elseif ($nome != "") {
	echo "<!-- tinyMCE -->
		<script language=\"javascript\" type=\"text/javascript\" src=\"includes/tiny_mce/tiny_mce.js\"></script>
		<script language=\"javascript\" type=\"text/javascript\">
	   	tinyMCE.init({
      		mode : \"textareas\",
			theme : \"simple\",
			language : \"pt_br\",
			$edtcss
			force_p_newlines: \"false\",
			force_br_newlines: \"true\"
	   	});
		</script>
		<!-- /tinyMCE -->";
}

?>
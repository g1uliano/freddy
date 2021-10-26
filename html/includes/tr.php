<?
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
/*  Licen�a.                                                                         */
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
          
      
    
    	               
 
        	//
                
  
      	// Utiliza as bibliotecas HTTP e XML do PHP para fazer conex�o e convertar para HTML
 
               
        	//
                
     
   	// -----------------------------------------------------------------
   
             
        	//
   
             
        	// Vari�veis globais:
   
             
        	
                
     
   	$g_portal_key = 147; /* N�o altere este c�digo, pois o sistema n�o ir� funcioar */
  
              
        	$g_server = "search-br5147.terespondo.com";
      
          
        	
                
        	
                
        	$query = $q;	
                
        	
                
        	function begin_page()
                
        	{
                
        		?>
                
        		<html>
                
        		<head>
                
        			<title>buscas </title>
                
        		</head>
                
        		<body bgcolor=white>

                
        		<?
                
        	}
                
        	
                
        	function show_search_form()
                
        	{
                
        		global $query;
                
        		global $co;
                
        		
                
        		?>
                
        		<form action=tr.php>
                
        		<table cellspacing=0 cellpadding=4 border=1>
                
        		<tr>
                
        			<td>
                
        				<b>Busca</b>
                
        				<input type=text name=query size=30 maxlength=30>
                
        			</td>
                
        		</tr>
                
        		<tr>
                
        			<td><b>Pa�s</b>
                
        				<select name=co>
                
        				<option value="AR">Argentina
                
        				<option value="BR">Brasil
                
        				<option value="CO">Colombia
                
        				<option value="ES">Espa&ntilde;a
                
        				<option value="MX">M&eacute;xico
                
        				<option value="VE">Venezuela
                
        				</select>
                
        			</td>
                
        		</tr>
                
        		<tr>
                
        			<td>
                
        				<input type=submit value="Search">
                
        			</td>
                
        		</tr>
                
        		</table>
                
        		</form>
                
        		<?
                
        	}
                
        	
                
        	function issue_search_request()
                
        	{
                
        		global $co;
                
        		global $query;
                
        		global $g_server;
                
        		global $g_portal_key;
                
        		global $REMOTE_ADDR;
                
        		
                
        		$url = "http://${g_server}/query.phtml";
                
        		$url.= "?portal=${g_portal_key}";
                
        		$url.= "&co=BR&n_results=10&bold=1";
                
        		$url.= "&query=" . urlencode($query);
                
        		$url.= "&ip=" . urlencode($REMOTE_ADDR);
                
        		
                
        		$request_sock = fopen($url, "r");
                
        		$output = "";
                
        		while ($out = fgets($request_sock, 16384)) {
                
        			$output .= $out;
                
        		}
                
        		fclose($request_sock);
                
        		// echo $output;
                
        		return $output;
                
        	}
                
        	
                
        	function element_open($parser, $name, $attribs) {
                
        		//
                
        		// Handle any XML open tags
                
        		//
                
        		global $in_link;
                
        		global $last_url;
                
        		
                
        		switch ($name) {
                
        		case "RESULTSET":
                
        			echo "             
        				";
                
        			while (list($k,$v) = each($attribs)) {
                
        				echo "<!-- $k: $v -->";
                
        			}
                
        			break;
                
        		case "RESULT":
                
        			$u = $attribs["CLICK_URL"];
                
        			$v_u = $attribs["VISIBLE_URL"];
                
        			$t = $attribs["TITLE"];
                
        			
                
        			echo "<a href=\"$u\"
                
        				onMouseOver=\"window.status='$v_u'; return true;\"
                
        				onMouseOut=\"window.status=''; return true;\">$t</a><br>\n\n";
                
        			$last_url = $v_u;
                
        			$in_link = 1;
                
        			break;
                
        		}
                
        	}
                
        	
                
        	function element_close($parser, $name) {
                
        		global $in_link;
                
        		global $last_url;
                
        		
                
        		switch ($name) {
                
        		case "RESULTSET":
                
        			echo "</ul>";
                
        			break;
                
        		case "RESULT":
                
        			echo "
                
        				<br>
                
        				$last_url<p>";
                
        			$in_link = 0;
                
        			break;
                
        		}
                
        	}
                
        	
                
        	function character_data($parser, $cdata) {
                
        		//
                
        		// Elimina caracteres n�o v�lidos - normalmente apenas espa�os
                
        		//
                
        		global $in_link;
                
        		
                
        		if ($in_link && trim($cdata) != "") {
                
        			echo $cdata;
                
        		}
                
        	}
                
        	
                
        	function parse_xml($output)
                
        	{
                
        		$o = str_replace("<", "&lt;", $output);
                
        		$o = str_replace(">", "&gt;", $o);
                
        		$xml_parser = xml_parser_create();
                
        		xml_parser_set_option($xml_parser, XML_OPTION_CASE_FOLDING, true);
                
        		xml_set_element_handler($xml_parser, "element_open", "element_close");
                
        		xml_set_character_data_handler($xml_parser, "character_data");
                
        		xml_parse($xml_parser, $output, 1);
                
        		xml_parser_free($xml_parser);
                
        	}
                
        	
                
        	function end_page()
                
        	{
                
        		?>
                
        		</body>
                
        		</html>
                
        		<?
                
        	}
                
        	
                
        	              
        	                
        	$output = issue_search_request();
                
        	parse_xml($output);
                
        	
                ?>

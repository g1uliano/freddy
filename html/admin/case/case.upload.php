<?php
##############################################
# Freddy - Baseado no Miolo do Php-Nuke 7.5  #
# ------------------------------------------ #
# Este � um software propriet�rio e a sua    #
# distribui��o n�o autorizada � crime.       #
#                                            #
# Altera��es no c�digo-fonte s�o autorizadas #
##############################################
if ( !defined('ADMIN_FILE') )
{
	die("Acesso Negado!");
}
if (!stristr($_SERVER['SCRIPT_NAME'], "admin.php")) { die ("Acesso Negado!"); }

switch($op) {

    case "upload";
    include("admin/modules/upload.php");
    break;
 
}
?>
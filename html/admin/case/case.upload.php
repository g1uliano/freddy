<?php
##############################################
# Freddy - Baseado no Miolo do Php-Nuke 7.5  #
# ------------------------------------------ #
# Este щ um software proprietсrio e a sua    #
# distribuiчуo nуo autorizada щ crime.       #
#                                            #
# Alteraчѕes no cѓdigo-fonte sуo autorizadas #
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
<?php

include("mainfile.php");

$db->sql_query("UPDATE ".$prefix."_config SET Version_Num='0.8'");

echo "Atualização do Freddy realizada com sucesso<br><br>";
echo 'Abra o seu config.php e substitua o valor de $gfx_chk para 0 ou 1 (1 para ativar o código de segurança no admin.php e 0 para desativar o mesmo)';
echo "Apague este arquivo do seu servidor imediatamente.<br><br>";
?>
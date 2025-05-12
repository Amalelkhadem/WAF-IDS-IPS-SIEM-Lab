<?php
// Enregistrer le payload dans un fichier log
file_put_contents('/var/log/waf_tests.log', 
    date('Y-m-d H:i:s') . " - " . 
    $_SERVER['REMOTE_ADDR'] . " - " . 
    $_POST['payload'] . "\n", 
    FILE_APPEND);

// Réponse basique
echo "Payload reçu et analysé";
?>

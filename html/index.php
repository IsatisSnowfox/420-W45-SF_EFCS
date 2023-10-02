<?php
    try {
        new mysqli('mariadb', 'root', 'rootpassword'); 
    } catch(Exception $e) {
        echo 'OOPS';
    }

?>
<h1>
    <?= "ID de machine docker : " . gethostname() ?>
</h1>
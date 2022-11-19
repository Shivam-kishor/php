<?php
echo"Cookie Value:". $_COOKIE["shivam"];
setcookie("shivam","",time()-(3600),"/");
?>
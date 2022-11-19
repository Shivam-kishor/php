<?php

$SERVER_name="127.0.0.1" ||"localhost";
$user_name="root";
$password="";

$conn=mysqli_connect($SERVER_name="127.0.0.1",$user_name="root",$password="");
if(!$conn)
{
    die("SHIT".mysqli_connect_error());

}
echo("wow");
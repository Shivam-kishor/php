

<?php
//(MySQLi Object-oriented)
$SERVER_name="127.0.0.1" ||"localhost";
$user_name="root";
$password="";

$conn=mysqli_connect($SERVER_name="127.0.0.1",$user_name="root",$password="");
if(!$conn)
{
    die("SHIT".mysqli_connect_error());

}
echo("wow😁😁"."<br>");

//create database

$sql= "CREATE DATABASE  shivamzdb";
if ($conn->query($sql)== TRUE)
{
    echo"DAtabase created successfully";
}

else
{
    echo("error creating databse".$conn->error);
}
//$conn->close();


//sql create table
//%sql= "create table inside_my"
?>
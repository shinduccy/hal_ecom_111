<?php
try{
$server="localhost";
$user="root";
$password="";
$db="electronic111";
$dsn="mysql:host=$server;dbname=$db";
$conn=new PDO($dsn,$user,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

}catch(PDOException $e)
{
    echo $e->getMessage();
}
?>
<?php 
try{
$db=new PDO("mysql:host=localhost;dbname=login;charset=utf8","root","");
}catch (PDOexception $e){
echo $e->getMessage();
}

/* of

$een = "localhost";
$twee = "eindopdrachtweb";
$drie = "root";
$vier = "";
try{
$db=new PDO("mysql:host=$een;dbname=$twee;charset=utf8","$drie","$vier");
}catch (PDOexception $e){
echo $e->getMessage();
}
*/ 
?>
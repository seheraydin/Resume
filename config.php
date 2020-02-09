<?php 
$user ="root";
$pass = "";

//PDO VERİTABANI BAĞLANTISI
try{
	$db = new PDO("mysql:host=localhost; dbname=cv; charset = utf8", $user , $pass);
}
catch(PDOExpection $error){
	echo "Database bağlantısı kurulamadı"; $error->getMessage();
}

 ?>
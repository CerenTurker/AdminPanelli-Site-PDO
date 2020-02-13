<?php 

try
{

$db=new PDO("mysql:host=localhost;dbname=pdofirma;charset=utf8",'root','');

//echo "veritabanı bağlantııs başarılı";
}
catch(PDOExceptition $e){

	echo $e->getMessage();
}



 ?>
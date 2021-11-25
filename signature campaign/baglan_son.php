<?php
try {
	$db=new PDO("mysql:host=localhost;dbname=udemy;charset=utf8",'root','12345678');
	//echo "Veritabanına başarılı bir şekilde bağlanıldı";

	
} catch (PDOException $e) {
	
	echo $e -> getMessage();
}






?>
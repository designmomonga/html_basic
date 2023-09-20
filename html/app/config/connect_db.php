<?php
//DB接続設定
$host		= "";
$db_name	= "";
$user_name	= "";
$password	= "";

$dsn	= "mysql:dbname={$db_name}; host={$host}; charset=utf8mb4";

try{
	//接続処理
	$dbh	= new PDO($dsn, $user_name, $password);
    //echo "接続OK";
}catch (PDOException $e){
	//接続できない場合
	echo "Error:" . $e->getMessage();
	die();
}
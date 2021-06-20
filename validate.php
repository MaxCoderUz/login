<?php

if(!empty($_POST['login']) and !empty($_POST['password'])){
$login = $_POST['login'];
$password = md5($_POST['password']);
if($login == 'admin' and $password == md5('admin')){
	$shifr = base64_encode(md5("admin"));
	setcookie("key", $shifr, time() + 3600, '/');
	header('location: ./');
}else{
	header('location: login');
}
}else{
	header('location: login');
}
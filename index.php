<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Index</title>
</head>
<body>
<?php

if(empty($_COOKIE['key'])){
	header('location: login');
}else{
	$shifr = $_COOKIE['key'];
    if(base64_decode($shifr) == md5("admin")){
    	echo "Xush kelibsiz";
?>
<br><a href="logout">Chiqish</a>
<?php
    }else{
	header('location: login');
    }
}
?>
</body>
</html>
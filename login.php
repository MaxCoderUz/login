<?php

?>
<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <div class="row">
                <h2>Kirish</h2>
                <div class="col-md-12">
                    <form action="validate.php" method="post">
                    <label for="login">Login</label>
                    <input name="login" type="text" class="form-control" id="login" placeholder="admin">
                    <br>
                    <label for="password">Parol</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="1234">
                    <input type="submit" id="login" value="Login" class="btn btn-outline-success btn-form">
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>


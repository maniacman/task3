<?php
session_start();
if (count($_SESSION['msg']) > 0)
{
    foreach ($_SESSION['msg'] as $msg)
    {
       echo $msg . '<br>';
    }
    $_SESSION['msg'] = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>  
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Авторизация</h1>
                <form action="inside.php" method="post">
                    <div class="form-group">
                        <label for="">Ваш логин</label>
                        <input type="text" name="login" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Ваш пароль</label>
                        <input type="password" name="password" class="form-control">
                    </div>                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Ввод</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
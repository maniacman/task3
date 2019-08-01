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
                <form action="create.php" method="post">
                    <div class="form-group">
                        <label for="">Ваш логин</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Ваш пароль</label>
                        <input type="password" name="password" class="form-control" required>
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
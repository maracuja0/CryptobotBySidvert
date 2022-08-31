<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Подюключение стилей bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <!--Пользовательские стили-->
    <link rel="stylesheet" href="css/login.css">
    <title>Авторизация</title>
</head>

<body class="text-center">
    <?php 
    require('db.php');
    ?>
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="index.php">
            <img src="img/logo.png">
            <h1 class="h3 mb-3 fw-normal">Авторизация</h1>
            
            <div class="form-floating">
                <input name ="username" type="text" class="form-control" id="floatingName" placeholder="login">
                <label for="floatingName">Логин</label>
            </div>

            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="password">
                <label for="floatingPassword">Пароль</label>
            </div>
            <!--
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Запомнить меня
                </label>
            </div>

            -->
            <button class="w-100 btn btn-lg btn-primary mt-3 pt-3 pb-3" type="submit">Войти</button>
        </form>
        <br>
        <p>Еще не <a href="signip.php">зарегистрированы</a>?</p> 
		<p>Вернуться на <a href="index.php">главную</a></p>
    </main>

    <!--<script src="js/script.js"></script>-->
</body>
</html>
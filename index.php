<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Подюключение стилей bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <!--Пользовательские стили-->
    <link rel="stylesheet" href="css/style.css">
    <title>Cryptobot by Sidvert Develop</title>
</head>

<body>
    <header class="p-3">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mt-2 mb-2 mb-lg-0 text-white text-decoration-none">
                <img width="50" height ="40" src="img/logo.png">
                </a>
                
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-white">Главная</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Бот</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Сделки</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Отчетность</a></li>
                </ul>

                <div class="text-end">
                
                    <div class="row">
                        <div class="col-sm">
                            <form action="login.php" method="POST">
                                <button id="auth_button"name = "auth" type="submit" class="btn btn-outline-light me-2">Войти</button>
                            </form>
                        </div>

                        <div class="col-sm">
                            <form action="signup.php" method="POST">
                                <button id="reg_button" name = "reg "type="submit" class="btn btn-warning">Зарегистрироваться</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
  </header>

    <!--<script src="js/script.js"></script>-->
</body>
</html>
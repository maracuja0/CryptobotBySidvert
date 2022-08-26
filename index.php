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
    <title>Регистрация</title>
</head>

<body class="text-center">
    <?php 
    require('connect.php');

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT Users(username, email, password) VALUES('$username', '$email', '$password')"; 
        /* $query = "INSERT INTO Users SET username = '$username' , email = '$email', password = '$password'"; */
        $result = mysqli_query($connection, $query);

        if($result){
            $smsg = "Регистрация прошла успешно";
        }else{
            $fmsg = "Ошибка регистрации";
        }
    }
    ?>
    <main class="form-signin w-100 m-auto">
        <form method="POST">
            <h1 class="h3 mb-3 fw-normal">Регистрация</h1>
            
            <?php if(isset($smsg)){?> <div class="alert alert-success" role="alert"><?php echo $smsg;?></div><?php }?>
            <?php if(isset($fmsg)){?> <div class="alert alert-danger" role="alert"><?php echo $fmsg;?></div><?php }?>
            <div class="form-floating">
                <input name ="username" type="text" class="form-control" id="floatingName" placeholder="name">
                <label for="floatingName">Имя пользователя</label>
            </div>

            <div class="form-floating">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Электронная почта</label>
            </div>

            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Пароль</label>
            </div>
            <!--
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Запомнить меня
                </label>
            </div>

            -->
            <button class="w-100 btn btn-lg btn-primary mt-3 pt-3 pb-3" type="submit">Зарегистрироваться</button>
        </form>
    </main>

    <!--<script src="js/script.js"></script>-->
</body>
</html>
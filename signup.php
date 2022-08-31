<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Подюключение стилей bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <!--Пользовательские стили-->
    <link rel="stylesheet" href="css/signup.css">
    <title>Регистрация</title>
</head>

<body class="text-center">
    <?php 
    require('db.php');
    
    //создаем переменную для сбора данных из массива POST
    $data = $_POST;

    if(isset($data['do_signup'])){
        //массив для сбора ошибок
        $errors = array();

        if(trim($data['login']) == '') $errors[] = "Введите логин";

        if(trim($data['email']) == '') $errors[] = "Введите Email";
    
        if(trim($data['name']) == '') $errors[] = "Введите Имя";
    
        if(trim($data['surname']) == '') $errors[] = "Введите фамилию";
    
        if($data['password'] == '') $errors[] = "Введите пароль";

        if($data['password_2'] != $data['password']) $errors[] = "Повторный пароль введен неверно";

        if(mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 90) $errors[] = "Недопустимая длина логина";

        if (mb_strlen($data['name']) < 3 || mb_strlen($data['name']) > 50) $errors[] = "Недопустимая длина имени";
    
        if (mb_strlen($data['surname']) < 5 || mb_strlen($data['surname']) > 50) $errors[] = "Недопустимая длина фамилии";

        if (mb_strlen($data['password']) < 8) $errors[] = "Недопустимая длина пароля (не менее 8 символов)";

        if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $data['email'])) $errors[] = 'Неверно введен е-mail';

        if(!$errors){
            $login = $_POST['login'];
            $email = $_POST['email'];
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            mysqli_query($db, "INSERT INTO users(login, email, name, surname, password) VALUES('" . $login . "','" . $email . "','" . $name . "','" . $surname . "', '" . $password . "')");
        }else{
            echo $errors;
        }
    }
    ?>
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="index.php">
            <img src="img/logo.png">
            <h1 class="h3 mb-3 fw-normal">Регистрация</h1>

            <div class="form-floating">
                <input name ="login" type="text" class="form-control" id="floatingName" placeholder="login">
                <label for="floatingName">Ведите логин</label>
            </div>

            <div class="form-floating">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="email@example.com">
                <label for="floatingInput">Введите email</label>
            </div>

            <div class="form-floating">
                <input name="name" type="text" class="form-control" id="floatingInput" placeholder="name">
                <label for="floatingInput">Введите имя</label>
            </div>

            <div class="form-floating">
                <input name="surname" type="text" class="form-control" id="floatingInput" placeholder="surname">
                <label for="floatingInput">Введите фамилию</label>
            </div>

            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="password">
                <label for="floatingPassword">Введите пароль</label>
            </div>

            <div class="form-floating">
                <input name="password_2" type="password" class="form-control" id="floatingPassword" placeholder="repeat password">
                <label for="floatingPassword">Повторите пароль</label>
            </div>
            
            <button name="do_signup"class="w-100 btn btn-lg btn-primary mt-3 pt-3 pb-3" type="submit">Зарегистрироваться</button>

        </form>

        <br>
		<p>Если вы зарегистрированы, тогда нажмите <a href="login.php">здесь</a></p>
		<p>Вернуться на <a href="index.php">главную</a></p>
    </main>

    <!--<script src="js/script.js"></script>-->
</body>
</html>
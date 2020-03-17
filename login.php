<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Шрифты -->

        <link href="https://fonts.googleapis.com/css?family=Pacifico|Permanent+Marker&display=swap" rel="stylesheet">
    
        <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap&subset=cyrillic" rel="stylesheet">



<script src="js/jquery-3.4.1.js"></script> 

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
        <!-- Стили -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body><img src="img/lich_kab.jpg" class="w-100 h-100 m-0" style="position: absolute;" alt="Фон регистрации">
    <br> <br> <br> <br> <br>
    <div class="container login-container" style="position: relative;">
        <div class="row justify-content-end">
            
            <div class="col-lg-6 col-md-12 col-mb-12 col-sm-12" id="float-right">
                <h2 class="text-center">Авторизация</h2> <br>

                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyFields") {
                        echo '<div class="alert alert-danger text-center"><button type="button" class="close" data-dismiss="alert">&times;</button>Please fill in all fiels!</div>';
                    } else if ($_GET["error"] == "wrongPwd") {
                        echo '<div class="alert alert-danger text-center"><button type="button" class="close" data-dismiss="alert">&times;</button>Wrong Password!</div>';
                    } else if ($_GET["error"] == "noUsers") {
                        echo '<div class="alert alert-danger text-center"><button type="button" class="close" data-dismiss="alert">&times;</button>You Should Register First!</div>';
                    }
                }
                
                ?> 

                <form action="inc/login.inc.php" method="POST">

                    <div class="form-group row mb-4">
                        <div class="input-group col-lg-12 md-4 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input name="uName" type="text" class="form-control" placeholder="Имя пользователя или элекронная почта">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <div class="input-group col-lg-12 md-4 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input id="password-field" name="pass" type="password" class="form-control" placeholder="Пароль">
                        </div>
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>

                    <div class="row text-center mb-4" id="btn">
                        <div class="input-group col-lg-4 col-md-4 col-sm-6 col-6 text-left">
                            <button name="login" class="btn btn-primary" type="submit">Авторизация</button>
                        </div>

                        <div class="input-group col-lg-4 col-md-4 col-sm-6 col-6 text-left">
                            <button class="btn btn-primary" type="reset" id="reset-btn">Сброс</button>
                        </div>

                        <div class="input-group col-lg-4 col-md-4 col-sm-6 col-6 text-left home-btn">
                            <a href="index.html">
                                <button class="btn btn-success" type="button">На главную</button>
                            </a>
                        </div>
                    </div> <br> <br>
                    <div class="row mb-2 justify-content-center">
                    <div class="form-group row mb-4">
                        <div class="input-group col-lg-12 col-md-12 col-sm-12">
                            <p>Новый пользователь? </p><a href=" signin.php" style="text-decoration: none;"> &nbsp; Зарегистрироваться </a>
                        </div>
                    </div>
                </div>
                    <div class="text-center row home-btn-hide">
                        <a href="index.php" class="text-center">
                            <button class="btn btn-success" type="button">Back Home</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script type="js/jquery-3.4.1.min.js"></script>
    <script type="js/popper.min.js"></script>
    <script type="js/bootstrap.min.js"></script>
    <script src="js/show-hide-psd.js"></script>
</body>

</html>
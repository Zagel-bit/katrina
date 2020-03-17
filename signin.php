<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Шрифты -->

        <link href="https://fonts.googleapis.com/css?family=Pacifico|Permanent+Marker&display=swap" rel="stylesheet">
    
        <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap&subset=cyrillic" rel="stylesheet">

        <!-- Стили -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/signin.css">

    <script src="js/jquery-3.4.1.js"></script> 
    <title>Register</title>
</head>

<body> <div class="container-fluid m-0 p-0 "><img src="img/lich_kab.jpg" class="w-100 h-100 m-0" style="position: absolute;" alt="Фон регистрации"></div>
<br> <br> <br> <br> <br>
    <div class="container signin-container text-center" style="position: relative;">
        <div class="row justify-content-end">
            <div class="col-lg-7 md-12 mb-12 text-center" id="float-right">
                <h2 class="text-center">Регистрация</h2> <br>

                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyFields") {
                        echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please fill in all fiels!</div>';
                    } else if ($_GET["error"] == "invalidEmail") {
                        echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Invalid Email Address!</div>';
                    } else if ($_GET["error"] == "pwdMatch") {
                        echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Password does not match!</div>';
                    } else if ($_GET["error"] == "userTaken") {
                        echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Username Has Already Taken!</div>';
                    } else if ($_GET["error"] == "pwdShortLength") {
                        echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Password Should Contain At Least 8 Characters!</div>';
                    } else if ($_GET["error"] == "pwdNoUppercase") {
                        echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Should Contain At Least 1 Uppercase Characters!</div>';
                    } else if ($_GET["error"] == "pwdNoLowercase") {
                        echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Should Contain At Least 1 Lowercase Characters!</div>';
                    } else if ($_GET["error"] == "pwdNoNumber") {
                        echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Should Contain At Least 1 Number!</div>';
                    }
                }
                // else {
                //         echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Sign Up Successfull !</div>';
                // }
                ?>
                <form action="inc/signup.inc.php" method="POST" class="text-center" enctype="multipart/form-data">

                    <div class="form-group row mb-4">
                        <div class="input-group col-lg-6 col-md-6 col-sm-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <?php
                            if (isset($_GET['fName'])) {
                                $fName = $_GET['fName'];
                                echo '<input type="text" class="form-control" placeholder="Имя" name="fName" value="' . $fName . '">';
                            } else {
                                echo '<input type="text" class="form-control" placeholder="Имя" name="fName">';
                            }
                            ?>
                        </div>
                        <div class="input-group col-lg-6 col-md-6 col-sm-12 names">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <?php
                            if (isset($_GET['lName'])) {
                                $lName = $_GET['lName'];
                                echo '<input type="text" class="form-control" placeholder="Фамилия" name="lName" value="' . $lName . '">';
                            } else {
                                echo '<input type="text" class="form-control" placeholder="Фамилия" name="lName">';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <div class="input-group col-lg-6 col-md-6 col-mb-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <?php
                            if (isset($_GET['uName'])) {
                                $uName = $_GET['uName'];
                                echo '<input type="text" class="form-control" placeholder="Имя пользователя" name="uName" value="' . $uName . '">';
                            } else {
                                echo '<input type="text" class="form-control" placeholder="Имя пользователя" name="uName">';
                            }
                            ?>
                        </div>
                        <div class="input-group col-lg-6 col-md-6 col-sm-12 names">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <?php
                            if (isset($_GET['phone'])) {
                                $phone = $_GET['phone'];
                                echo '<input type="tel" class="form-control" placeholder="Номер телефона" name="contactNumber" value="' . $phone . '">';
                            } else {
                                echo '<input type="tel" class="form-control" placeholder="Номер телефона" name="contactNumber">';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <div class="input-group col-lg-12 col-md-12 col-mb-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <?php
                            if (isset($_GET['mail'])) {
                                $mail = $_GET['mail'];
                                echo '<input type="text" class="form-control" placeholder="Электронная почта" name="uMail" value="' . $mail . '">';
                            } else {
                                echo '<input type="text" class="form-control" placeholder="Электронная почта" name="uMail">';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <div class="input-group col-lg-12 col-md-12 col-mb-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input id="password-field1" type="password" class="form-control" placeholder="Пароль" name="pass">
                        </div>
                        <span toggle="#password-field1" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>

                    <div class="form-group row mb-4">
                        <div class="input-group col-lg-12 col-md-12 col-mb-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input id="password-field2" type="password" class="form-control" placeholder="Подтверждение пароля" name="re_pass">
                        </div>
                        <span toggle="#password-field2" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>

                    <div class="row mb-1" id="btn">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4 text-left">
                            <button class="btn btn-primary" type="submit" name="signup">Зарегистрироваться</button>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-4 text-center">
                            <button class="btn btn-primary" type="reset" id="reset-btn">Сброс</button>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-4 text-left home-btn">
                            <a href="index.html">
                                <button class="btn btn-success" type="button">На главную</button>
                            </a>
                        </div>
                    </div> <br> <br>
                    <div class="row m-0 justify-content-center">
                    <div class="form-group row mb-2">
                        <div class="input-group col-lg-12 col-md-12 col-sm-12">
                            <p>Уже есть аккаунт?</p><a href="login.php" style="text-decoration: none;"> &nbsp; Войти </a>
                        </div>
                    </div>
</div>
                    <div class="text-center col-lg-12 home-btn-hide">
                        <a href="index.php" class="text-center">
                            <button class="btn btn-success" type="button">Back Home</button>
                        </a>
                    </div>
                </form>
            </div>
            <br><br><br>
                

        </div>
    </div>

    <script type="js/jquery-3.4.1.min.js"></script>
    <script type="js/popper.min.js"></script>
    <script type="js/bootstrap.min.js"></script>
    <script src="js/show-hide-psd.js"></script>
</body>

</html>
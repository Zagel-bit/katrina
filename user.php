<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Шрифты -->

		<link href="https://fonts.googleapis.com/css?family=Pacifico|Permanent+Marker&display=swap" rel="stylesheet">
	
		<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap&subset=cyrillic" rel="stylesheet">

		<!-- Стили -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	<title>Личный кабинет</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg  static-top bg-dark navbar-dark">
			<a href="index.html" class="navbar-brand ml-2">
				<h1>Gallery</h1>
			</a>
		
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expand="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				<form action="login.php" class="form-inline my-2 my-lg-0">
					<button class="btn btn-outline-primary m-1 my-sm-0">Авторизация</button>
				</form>
				<form action="signin.php" class="form-inline my-2 my-lg-0">
					<button class="btn btn-outline-primary m-1 my-sm-0">Регистрация</button>
				</form>
			</div>
		</nav>
	<div class="container-fluid bg-dark">
		<div class="row pt-4 text-white text-center">
			<div class="col-sm-3 justify-content-start ml-5">
					<img src="img/ava_lich.jpg" class="w-100" alt="Аватарка пользователя">
					<div class="btn btn-primary mt-3"> Изменить аватарку</div>
			</div>
			<div class="col-sm-6 justify-content-end mt-4">
				<form action="inc/signup.inc.php" method="POST" class="text-center" enctype="multipart/form-data">
				<h4>Личный кабинет</h4><br><br>
				<div class="form-group row mb-5">
                        <div class="input-group col-lg-12 col-md-12 col-mb-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
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
                    </div>
				<div class="form-group row mb-5">
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
                    <div class="form-group row mb-5">
                        <div class="input-group col-lg-6 col-md-6 col-mb-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
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
					
                </form>	
			</div>
		</div>
			<div class="container-fluid text-center text-white pt-1">
				<div id="carousel" class="carousel slide mt-0" data-ride="carousel">
					<ol class="carousel-indicators">
						<li class="active rr" data-target="#carousel" data-slide-to="0"></li>
						<li data-target="#carousel" data-slide-to="1" class="rr"></li>
						<li data-target="#carousel" data-slide-to="2" class="rr"></li>
					</ol>

					<div class="carousel-inner"><h1 id="style">Мои работы</h1>
						<div class="carousel-item active" id="s1">
					
							<div class="row justify-content-around mt-1 mb-5">
				
								<div class="col-md-3 pr-5 mb-3">
									<img src="img/style_1.jpg" alt="blog" class="w-100 hr">
									<div class="desc_style">Одно из главных художественных направлений в искусстве 20 века, в котором структура произведения основывается исключительно на формальных элементах — линии, цветовом пятне, отвлеченной конфигурации. </div>
								</div>

								<div class="col-md-3 mb-3">
									<img src="img/style_2.jpg" alt="blog" class="w-100 hrr">
									<div class="desc_style">Андеграунд (англ.underground – подполье, подземелье) – в узком смысле – любое некоммерческое, экспериментальное искусство; в широком – понятие и явление, возникшее в США в конце 1950-х гг. и означающее «подпольную» культуру как составную часть так называемой контркультуры, противопоставившей себя ограничениям и условностям, господствовавшим в обществе культуры.</div>
								</div>

								<div class="col-md-3 pl-5 mb-3">
									<img src="img/style_3.jpg" alt="blog" class="w-100 hr2">
									<div class="desc_style">Возрождение, или Ренессанс (фр. Renaissance, итал. Rinascimento; — «снова» или «заново роджённый») — эпоха в истории культуры Европы, пришедшая на смену культуре Средних веков и предшествующая культуре нового времени. </div>
								</div>
							</div>
						</div>
						<div class="carousel-item" id="s2">

							<div class="row justify-content-around mt-1 mb-5">
				
								<div class="col-md-3 pr-5 mb-3">
									<img src="img/style_4.jpg" alt="blog" class="w-100 hr">
									<div class="desc_style">Импрессионизм (фр.impressionisme, от impression – впечатление) – художественное направление в искусстве, возникшее во Франции во второй половине XIX в.</div>
								</div>

								<div class="col-md-3 mb-3">
									<img src="img/style_5.jpg" alt="blog" class="w-100 hrr"><div class="desc_style">Магический реализм (англ. Magic realism) – художественное течение в американской живописи 1930-1950-х гг., объединившее несколько молодых нью-йоркских художников, духовным лидером которых был Пол Кадмус. </div>
								</div>

								<div class="col-md-3 pl-5 mb-3">
									<img src="img/style_6.jpg" alt="blog" class="w-100 hr2">
									<div class="desc_style">Питту ра кольта (ит. Pittura colta, букв. – ученая, просвещенная живопись) – художественное течение в европейской живописи постмодернизма, возникшее в Италии во второй половине 1970-х гг.</div>
								</div>
							</div>
						</div> 
					<a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" style="width: 40px; height: 40px;" area-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>	
					<a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
						<span class="carousel-control-next-icon" style="width: 40px; height: 40px;" area-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
					</div>
				</div>
			</div>
		</div>
	</div>


		<!-- main.js; jquery; popper; bootstrap js -->
    	<script src="js/jquery-3.4.1.min.js"></script>
    	<script src="js/popper.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	<script src="js/main.js"></script>
	</body>
</html>
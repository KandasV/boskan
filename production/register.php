<?php

require "page_layouts/settings.php"; // require, include gibi belirtilen dosyayı kodun yazıldığı dosya içerisine eklemek için kullanılır. Ama include gibi uyarı vermek yerine hata verir ve kodun çalışmasını durdurur. require fonksiyonunun da kullanımı include fonksiyonu ile aynıdır.
session_start(); // oturumu başlatıyoruz.
ob_start(); // yönlendirmelerde ihtiyacımız var. sayfa yönlendirmeleri
include_once 'connection.php';

if(isset($_POST['kayitButonu']))
	$ad = $_POST[explode(" ",'tBox_adSoyad')[0]];
	$soyad = $_POST[explode(" ",'tBox_adSoyad')[1]];
	$email = $_POST['tBox_emailGiris'];
	$pass = $_POST['tBox_passwordGiris'];
	$password = md5($pass);
	if($email && $password && $ad && $soyad){

	$query = mysqli_query($baglan, "INSERT INTO girisbilgileri (girisbilgileri.email, girisbilgileri.password) VALUES ($email,$pass)	");
		$numrow = mysqli_num_rows($query);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My Login Page &mdash; Bootstrap 4 Login Page Snippet</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
			<div class="card-wrapper">
				<br>
					<br><br>
					<br>
					<div class="card-body">
					<a href ="mainPage.php">
					<h2 class="card-title" style="text-align:center; font-family: 'Montserrat', sans-serif; font-weight: 600;">
					<img src="images/logo_black.png" width="350px" "height="150px"/>
					</h2>
					</a>
					<br>
					<br>
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Kayıt Ol</h4>
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="name">Adınız ve Soyadınız</label>
									<input id="name" type="text" class="form-control" name="tBox_adSoyadGiris" required autofocus>
									<div class="invalid-feedback">
										Adınız Nedir
									</div>
								</div>

								<div class="form-group">
									<label for="email">E-Posta</label>
									<input id="email" type="email" class="form-control" name="tBox_emailGiris" required>
									<div class="invalid-feedback">
										Geçersiz E-Posta Adresi.
									</div>
								</div>

								<div class="form-group">
									<label for="password">Şifre</label>
									<input id="password" type="password" class="form-control" name="tBox_passwordGiris" required data-eye>
									<div class="invalid-feedback">
									Şifre kısmı gerekli bir alandır.
									</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
										<label for="agree" class="custom-control-label"><a href="#">Gizlilik Sözleşmesini </a>Okudum ve Onaylıyorum</label>
										<div class="invalid-feedback">
											Kuralları ve Gizlilik Sözleşmesini Onaylamak Zorunludur
										</div>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" name="kayitButonu" class="btn btn-primary btn-block">
										Kayıt
									</button>
								</div>
								<div class="mt-4 text-center">
									Zaten hesabınız var mı? <a href="login.php">Giriş</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2022 &mdash; BOSKAN
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>
</html>
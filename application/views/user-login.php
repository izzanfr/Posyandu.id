<!DOCTYPE html>
<html>
<head>
	<link href="assets/css/login.css" rel="stylesheet">
	<title>Login | Posyandu</title>
</head>
<body>
	
	<div class="pertama" style="background-image: url('assets/pictures/bg.jpg');">
		<div class="logo">
			<img src="assets/pictures/logonew6.png">
		</div>
		<div class= "loginbox">
			<img src="assets/pictures/cut.png" class="avatar">
			<h1>Login menggunakan akun yang telah terdaftar.</h1>
			<form action="<?= base_url().'C_userlogin/aksi_login' ?>" method="post" class="login__form">
				<p>Username</p>
				<input type="text" name="username" placeholder="Enter Username">
				<p>Password</p>
				<input type="password" name="password" placeholder="Enter password">
				<input type="submit" name="login" value="LOGIN">
			</form>
		</div>
	</div>
	
</body>
</html>
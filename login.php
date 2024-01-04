<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | Bukawarung</title>
	<link rel="stylesheet" type="text/css" href="styledash.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body id="bg-login">
	<!-- header -->
	<header>
		<div class="flex fixed w-full justify-around bg-white border-2 text-lg p-2 items-center">
			<div class="navbar-logo font-bold">
				<img src="gambar/logo.png" alt="logo" width="60px">
				<a class="text" href="dashboard.php">
					<h1 class="px-14">The Kopitiam</h1>
					<p>---- BAKERY And COFFE----</p>
				</a>
			</div>
		</div>
	</header>
	<div class="w-full h-screen flex justify-center items-center">
		<div class="flex flex-col justify-center items-center">
			<form class="flex flex-col border p-5 rounded-xl border-black " action="" method="POST">
				<h2 class="text-2xl font-bold mb-3 mx-auto">Login</h2>
				<label for="user">Username</label>
				<input class="border p-2 rounded-xl border-black" type="text" name="user" placeholder="Username"
					id="user">

				<label class="mt-3" for="pass">Password</label>
				<input class="border p-2 rounded-xl border-black" type="password" name="pass" placeholder="Password"
					id="pass">
				<input class="p-1  bg-indigo-400 cursor-pointer rounded-xl mt-7 border border-black" type="submit" name="submit"
					value="Login" class="btn">
			</form>
			<?php
			if (isset($_POST['submit'])) {
				session_start();
				include 'db.php';

				$user = mysqli_real_escape_string($conn, $_POST['user']);
				$pass = mysqli_real_escape_string($conn, $_POST['pass']);

				$cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '" . $user . "' AND password = '" . MD5($pass) . "'");
				if (mysqli_num_rows($cek) > 0) {
					$d = mysqli_fetch_object($cek);
					$_SESSION['status_login'] = true;
					$_SESSION['a_global'] = $d;
					$_SESSION['id'] = $d->admin_id;
					echo '<script>window.location="dashboard.php"</script>';
				} else {
					echo '<script>alert("Username atau password Anda salah!")</script>';
				}

			}
			?>
		</div>
	</div>
</body>

</html>
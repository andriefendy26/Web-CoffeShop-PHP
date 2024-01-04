<?php
session_start();
include 'db.php';
if ($_SESSION['status_login'] != true) {
	echo '<script>window.location="login.php"</script>';
}

$query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE admin_id = '" . $_SESSION['id'] . "' ");
$d = mysqli_fetch_object($query);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bukawarung</title>
	<link rel="stylesheet" type="text/css" href="styledash.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>
	<!-- header -->
	<header>
		<div class="flex  w-full justify-around bg-white border-2 text-lg p-2 items-center">
			<div class="navbar-logo font-bold">
				<img src="gambar/logo.png" alt="logo" width="60px">
				<a class="text" href="dashboard.php">
					<h1 class="px-14">The Kopitiam</h1>
					<p>---- BAKERY And COFFE----</p>
				</a>
			</div>
			<ul class="flex ">
				<li class="mx-2 hover:text-gray-600"><a href="dashboard.php">Dashboard</a></li>
				<li class="mx-2 hover:text-gray-600"><a href="profil.php">Profil</a></li>
				<li class="mx-2 hover:text-gray-600"><a href="data-kategori.php">Data Kategori</a></li>
				<li class="mx-2 hover:text-gray-600"><a href="data-produk.php">Data Produk</a></li>
			</ul>
			<div class=" p-2 rounded-xl bg-red-600 text-white"><a href="keluar.php">LogOut</a></div>
		</div>
	</header>

	<!-- content -->
	<!-- content -->
	<div class="w-full flex justify-center">
		<div class="w-[80%] mt-10">
			<h3 class="text-4xl font-semibold mb-5">Halaman Profil</h3>
			<hr>
			<h1 class="mt-6 text-2xl font-semibold">Profil</h1>
			<div class="border-b border-gray-900/10 pb-12">
				<form action="" method="POST" class="mt-2 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
					<div class="sm:col-span-6">
						<label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Nama
							Lengkap</label>
						<div class="mt-2">
							<input type="text" name="nama" placeholder="Nama Lengkap"
								value="<?php echo $d->admin_name ?>" required
								class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
						</div>
					</div>
					<div class="sm:col-span-6">
						<label for="first-name"
							class="block text-sm font-medium leading-6 text-gray-900">Username</label>
						<div class="mt-2">
							<input type="text" name="user" placeholder="Username" value="<?php echo $d->username ?>"
								required
								class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
						</div>
					</div>
					<div class="sm:col-span-6">
						<label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">No Hp</label>
						<div class="mt-2">
							<input type="text" name="hp" placeholder="No Hp" value="<?php echo $d->admin_telp ?>"
								required
								class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
						</div>
					</div>
					<div class="sm:col-span-6">
						<label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
						<div class="mt-2">
							<input type="email" name="email" placeholder="Email" value="<?php echo $d->admin_email ?>"
								required
								class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
						</div>
					</div>
					<div class="sm:col-span-6">
						<label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Alamat</label>
						<div class="mt-2">
							<input type="text" name="alamat" placeholder="Alamat"
								value="<?php echo $d->admin_address ?>" required
								class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
						</div>
					</div>
					<div
						class="cursor-pointer border bg-indigo-500 hover:bg-indigo-700 py-2 text-white rounded-xl text-center">
						<input class="p-auto" type="submit" name="submit" value="Ubah Profil">
					</div>
				</form>
				<?php
				if (isset($_POST['submit'])) {

					$nama = ucwords($_POST['nama']);
					$user = $_POST['user'];
					$hp = $_POST['hp'];
					$email = $_POST['email'];
					$alamat = ucwords($_POST['alamat']);

					$update = mysqli_query($conn, "UPDATE tb_admin SET 
										admin_name = '" . $nama . "',
										username = '" . $user . "',
										admin_telp = '" . $hp . "',
										admin_email = '" . $email . "',
										admin_address = '" . $alamat . "'
										WHERE admin_id = '" . $d->admin_id . "' ");
					if ($update) {
						echo '<script>alert("Ubah data berhasil")</script>';
						echo '<script>window.location="profil.php"</script>';
					} else {
						echo 'gagal ' . mysqli_error($conn);
					}

				}
				?>
			</div>

			<hr>
			<div class="border-b border-gray-900/10 pb-12">
				<h1 class="mt-6 text-2xl font-semibold">Ubah Password</h1>
				<form action="" method="POST" class="mt-2 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
					<div class="sm:col-span-6">
						<label for="first-name"
							class="block text-sm font-medium leading-6 text-gray-900">Password</label>
						<div class="mt-2">
							<input type="password" name="pass1" placeholder="Password Baru" required
								class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
						</div>
					</div>
					<div class="sm:col-span-6">
						<label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Konfirmasi
							Password</label>
						<div class="mt-2">
							<input type="password" name="pass2" placeholder="Konfirmasi Password Baru" required
								class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
						</div>
					</div>

					<div
						class="cursor-pointer border bg-indigo-500 hover:bg-indigo-700 py-2 text-white rounded-xl text-center">
						<input class="p-auto" type="submit" name="ubah_password" value="Ubah Password" class="btn">
					</div>
				</form>
				<?php
				if (isset($_POST['ubah_password'])) {

					$pass1 = $_POST['pass1'];
					$pass2 = $_POST['pass2'];

					if ($pass2 != $pass1) {
						echo '<script>alert("Konfirmasi Password Baru tidak sesuai")</script>';
					} else {

						$u_pass = mysqli_query($conn, "UPDATE tb_admin SET 
										password = '" . MD5($pass1) . "'
										WHERE admin_id = '" . $d->admin_id . "' ");
						if ($u_pass) {
							echo '<script>alert("Ubah data berhasil")</script>';
							echo '<script>window.location="profil.php"</script>';
						} else {
							echo 'gagal ' . mysqli_error($conn);
						}
					}

				}
				?>
			</div>

</body>

</html>
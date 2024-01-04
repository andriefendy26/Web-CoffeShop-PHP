<?php
session_start();
include 'db.php';
if ($_SESSION['status_login'] != true) {
	echo '<script>window.location="login.php"</script>';
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bukawarung</title>
	<link rel="stylesheet" type="text/css" href="styledash.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
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
	<div class="w-full flex justify-center">
		<div class="w-[80%] mt-10">
			<h3 class="text-4xl font-semibold mb-5">Dashboard</h3>
			<hr>
			<div class="border-b border-gray-900/10 pb-12">
				<h1 class="mt-6 text-2xl font-semibold">Tambah Data Produk</h1>
				<form action="" method="POST" enctype="multipart/form-data"
					class="mt-2 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
					<div class="sm:col-span-6">
						<label for="first-name"
							class="block text-sm font-medium leading-6 text-gray-900">Kategori</label>
						<div class="mt-2">
							<select
								class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
								name="kategori" required>
								<option value="">--Pilih--</option>
								<?php
								$kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
								while ($r = mysqli_fetch_array($kategori)) {
									?>
									<option value="<?php echo $r['category_id'] ?>">
										<?php echo $r['category_name'] ?>
									</option>
								<?php } ?>
							</select>
						</div>

						<label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Nama
							Product</label>
						<div class="mt-2">
							<input type="text" name="nama" placeholder="Nama Produk" required
								class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
						</div>


						<label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Harga</label>
						<div class="mt-2">
							<input type="text" name="harga" placeholder="Harga" required
								class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
						</div>
						
						<div class="mt-2">
							<input type="file" name="gambar" class="input-control" required>
						</div>
					
						<div class="mt-2">
							<textarea class="input-control" name="deskripsi" placeholder="Deskripsi"></textarea>
						</div>
						
						<label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Status</label>
						<div class="mt-2">
							<select class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" name="status">
								<option value="">--Pilih--</option>
								<option value="1">Aktif</option>
								<option value="0">Tidak Aktif</option>
							</select>
						</div>
					</div>
					<div
						class="cursor-pointer border bg-indigo-500 hover:bg-indigo-700 py-2 text-white rounded-xl text-center">
						<input type="submit" name="submit" value="Submit" class="btn">
					</div>
				</form>
				<?php
				if (isset($_POST['submit'])) {

					// print_r($_FILES['gambar']);
					// menampung inputan dari form
					$kategori = $_POST['kategori'];
					$nama = $_POST['nama'];
					$harga = $_POST['harga'];
					$deskripsi = $_POST['deskripsi'];
					$status = $_POST['status'];

					// menampung data file yang diupload
					$filename = $_FILES['gambar']['name'];
					$tmp_name = $_FILES['gambar']['tmp_name'];

					$type1 = explode('.', $filename);
					$type2 = $type1[1];

					$newname = 'produk' . time() . '.' . $type2;

					// menampung data format file yang diizinkan
					$tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif');

					// validasi format file
					if (!in_array($type2, $tipe_diizinkan)) {
						// jika format file tidak ada di dalam tipe diizinkan
						echo '<script>alert("Format file tidak diizinkan")</scrtip>';

					} else {
						// jika format file sesuai dengan yang ada di dalam array tipe diizinkan
						// proses upload file sekaligus insert ke database
						move_uploaded_file($tmp_name, './produk/' . $newname);

						$insert = mysqli_query($conn, "INSERT INTO tb_product VALUES (
										null,
										'" . $kategori . "',
										'" . $nama . "',
										'" . $harga . "',
										'" . $deskripsi . "',
										'" . $newname . "',
										'" . $status . "',
										null
											) ");

						if ($insert) {
							echo '<script>alert("Tambah data berhasil")</script>';
							echo '<script>window.location="data-produk.php"</script>';
						} else {
							echo 'gagal ' . mysqli_error($conn);
						}

					}

				}
				?>
			</div>
		</div>
	</div>

	<script>
		CKEDITOR.replace('deskripsi');
	</script>
</body>

</html>
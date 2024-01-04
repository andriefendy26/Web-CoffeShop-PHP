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
			<header class="px-5 py-4 border-b border-gray-100">
				<h2 class="font-semibold text-gray-800 text-2xl">Products</h2>
				<div class=" w-[140px] mt-2 p-2 rounded-xl bg-indigo-400 borderd text-white"><a
						href="tambah-produk.php">Tambah Product</a>
				</div>
			</header>
			<div class="p-3">
				<div class="">
					<table class="table-auto w-full">
						<thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
							<tr>
								<th class="p-2 whitespace-nowrap">
									<div class="font-semibold text-left">No</div>
								</th>
								<th class="p-2 whitespace-nowrap">
									<div class="font-semibold text-left">Kategori</div>
								</th>
								<th class="p-2 whitespace-nowrap">
									<div class="font-semibold text-center">Nama Product</div>
								</th>
								<th class="p-2 whitespace-nowrap">
									<div class="font-semibold text-center">Harga</div>
								</th>
								<th class="p-2 whitespace-nowrap">
									<div class="font-semibold text-center">Gambar</div>
								</th>
								<th class="p-2 whitespace-nowrap">
									<div class="font-semibold text-center">Status</div>
								</th>
								<th class="p-2 whitespace-nowrap">
									<div class="font-semibold text-center">Aksi</div>
								</th>
							</tr>
						</thead>
						<tbody class="text-sm divide-y divide-gray-100">
							<?php
							$no = 1;
							$produk = mysqli_query($conn, "SELECT * FROM tb_product LEFT JOIN tb_category USING (category_id) ORDER BY product_id DESC");
							if (mysqli_num_rows($produk) > 0) {
								while ($row = mysqli_fetch_array($produk)) {
									?>
									<tr>
										<td class="p-2 whitespace-nowrap">
											<div class="flex items-center">
												<div class="font-medium text-gray-800">
													<?php echo $no++ ?>
												</div>
											</div>
										</td>
										<td class="p-2 whitespace-nowrap text-xl">
											<div class="text-left">
												<?php echo $row['category_name'] ?>
											</div>
										</td>
										<td class="p-2 whitespace-nowrap text-xl">
											<div class="text-left">
												<?php echo $row['product_name'] ?>
											</div>
										</td>
										<td class="p-2 whitespace-nowrap text-xl">
											<div class="text-left">
												<?php echo number_format($row['product_price']) ?>
											</div>
										</td>
										<td class="p-2 whitespace-nowrap text-xl">
											<div class="text-left">
												<a href="produk/<?php echo $row['product_image'] ?>" target="_blank"> <img
														src="produk/<?php echo $row['product_image'] ?>" width="50px"> </a>
											</div>
										</td>
										<td class="p-2 whitespace-nowrap text-xl">
											<div class="text-left">
												<?php echo ($row['product_status'] == 0) ? 'Tidak Aktif' : 'Aktif'; ?>
											</div>
										</td>
										<td class="p-2 whitespace-nowrap">
											<div class="flex items-center justify-center">
												<a class="p-2 bg-green-500 text-white rounded-xl"
													href="edit-produk.php?id=<?php echo $row['product_id'] ?>">Edit</a>
												<p class="text-xl mx-2">||</p>
												<a class="p-2 bg-red-500 text-white rounded-xl"
													href="proses-hapus.php?idp=<?php echo $row['product_id'] ?>"
													onclick="return confirm('Yakin ingin hapus ?')">Hapus</a>
											</div>
										</td>

									</tr>
								<?php }
							} else { ?>
								<tr>
									<td colspan="7">Tidak ada data</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


</body>

</html>
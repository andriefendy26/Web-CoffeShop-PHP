<?php
error_reporting(0);
include 'db.php';
$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
$a = mysqli_fetch_object($kontak);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--font link-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@1,500&display=swap" rel="stylesheet">
  <!--link style-->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <!--feater icon-->
  <script src="https://unpkg.com/feather-icons"></script>
  <!---->
  <title>Kedai kopi</title>
</head>

<body>

  <!--navbar start here -->
  <nav class="countainer">
    <div class="navbar">
      <div class="navbar-logo">
        <img src="gambar/logo.png" alt="logo" width="60px">
        <div class="text">
          <h1>The Kopitiam</h1>
          <p>---- BAKERY And COFFE----</p>
        </div>
      </div>
      <div class="navbar-nav">
        <a href="#HOME">HOME</a>
        <a href="#MENU">MENU</a>
        <a href="#GALERY">GALERY</a>
        <a href="#KONTAK">KONTAK</a>
      </div>
      <div class="navbar-extra">
        <a id="ham-menu"><i data-feather="menu"></i></a>
      </div>
      <div class="navbar-btn">
        <button class="daftar">
          <a href="login.php">Admin</a>
        </button>
      </div>
    </div>
  </nav>

  <!--HOME START-->
  <section id="HOME">
    <div class="container">
      <div id="slide">
        <div class="item" style="background-image: url(gambar/home1.jpg);">
          <div class="content">
            <div class="name">SPOT FOTO</div>
            <div class="des"> Spot-spot foto di kafe kami tidak hanya mencakup interior yang menginspirasi, tetapi juga
              taman terbuka yang penuh dengan bunga-bunga cantik dan meja-meja outdoor yang nyaman. Ini adalah tempat
              yang sempurna untuk mengabadikan momen-momen indah bersama orang-orang terkasih Anda</div>
            <a href="#GALERY"><button>Galery <i data-feather="arrow-right"></i></button></a>
          </div>
        </div>
        <div class="item" style="background-image: url(gambar/home2.jpg);">
          <div class="content">
            <div class="name">COFFE</div>
            <div class="des">Kopi adalah bahasa universal bagi pencinta rasa dan aroma yang tiada tanding. Temukan
              keajaiban kopi bersama kami.</div>
            <button>Beli Sekarang</button>
          </div>
        </div>
        <div class="item" style="background-image: url(gambar/galery5.jpg);">
          <div class="content">
            <div class="name">Bakery</div>
            <div class="des">Kami percaya bahwa setiap kesempatan khusus layak diiringi dengan sentuhan manis dari
              koleksi kue dan roti kami yang beragam</div>
            <button>See more</button>
          </div>
        </div>
        <div class="item" style="background-image: url(gambar/galery3.jpg);">
          <div class="content">
            <div class="name">KONTAK KAMI</div>
            <div class="des">Silahkan Hubungi Kontak Kami Di Bawah Ini</div>
            <a href="https://api.whatsapp.com/send/?phone=6282255187877&text&type=phone_number&app_absent=0"
              target="_blank"><button><i><img src="gambar/whatsapp.png" alt="wa" width="40px"></i>Whatsapp</button></a>
          </div>
        </div>
        <div class="item" style="background-image: url(gambar/galery1.jpg);">
          <div class="content">
            <div class="name">INSTAGRAM</div>
            <div class="des">koleksi foto dan informasi lebih detail bisa ke instagram di bawah</div>
            <a href="https://www.instagram.com/thekopitiambakeryandcoffee/?hl=en" target="_blank"><button><i
                  data-feather="instagram" style="padding-right: 2px;"></i>Instagram</button></a>
          </div>
        </div>
      </div>
      <div class="buttons">
        <button id="prev"><i data-feather="arrow-left"></i></button>
        <button id="next"><i data-feather="arrow-right"></i></button>
      </div>
    </div>
  </section>
  <!-- HOME END-->
  <div class="countainer-fav">
    <div class="content">
      <div class="kategori">
        <a href="#LOKASI">CARI LOKASI</a>
        <a href="#MENU">LIHAT MENU</a>
        <a href="#">PESAN ONLINE</a>
      </div>
      <div class="paragraph">
        <h1>Minuman bukan sekadar kebutuhan, tapi juga seni dalam
          gelas</h1>
        <p>Di Bawah Beberapa Minuman Favorite</p>
      </div>
      <div class="fav">
        <div class="card">
          <div class="gmbr">
            <img src="drink/Kopi-Susu.png" alt="kopsu">
          </div>
          <div class="text">
            <h1>KOPI SIGNATURE</h1>
          </div>
        </div>
        <div class="card">
          <div class="gmbr">
            <img src="drink/Chocolate.png" alt="kopsu">
          </div>
          <div class="text">
            <h1>CHOCOLATE</h1>
          </div>
        </div>
        <div class="card">
          <div class="gmbr">
            <img src="drink/kopsu.png" alt="kopsu">
          </div>
          <div class="text">
            <h1>KOPI SUSU</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
  <!--menu-->
  <!-- Swiper -->
  <div class="countainer-swip" id="MENU">
    <div class="judul">
      <h1>Our Menu</h1>
    </div>
    <div class="kategori">
      <div class="kategori-nav">
        <div class="btn" data-slide="6">Drink</div>
        <div class="btn" data-slide="5">Snack</div>
        <div class="btn" data-slide="4">Ricebowl</div>
        <div class="btn" data-slide="3">Mie</div>
        <div class="btn" data-slide="2">Burger</div>
        <div class="btn" data-slide="1">Croissant</div>
      </div>
    </div>
    <div class="swiper-container croissant" data-slide="1">
      <div class="swiper-wrapper">
        <?php
        $where = "AND product_name LIKE '%" . $_GET['search'] . "%' AND category_id = '5' ";

        $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 $where ORDER BY product_id DESC");
        if (mysqli_num_rows($produk) > 0) {
          while ($p = mysqli_fetch_array($produk)) {
            ?>
            <div class="swiper-slide">
              <a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
                <div class="card_img">
                  <img src="produk/<?php echo $p['product_image'] ?>">
                </div>
                <div class="card_content">
                  <span class="card_title" style="color : black;">
                    <h1>
                      <?php echo substr($p['product_name'], 0, 30) ?>
                    </h1>
                  </span>
                  <span class="card_harga" style="color : black;">Rp.
                    <?php echo number_format($p['product_price']) ?>
                  </span>
                  <button class="card_btn" role="button">Detail Product</button>
                </div>
              </a>
            </div>
          <?php }
        } else { ?>
          <p>Produk tidak ada</p>
        <?php } ?>
      </div>
      <div class="swiper-button-prev"><i data-feather="chevron-left" style="color: black;"></i></div>
      <div class="swiper-button-next"><i data-feather="chevron-right" style="color: black;"></i></div>
    </div>

    <div class="swiper-container bruger" data-slide="2">
      <div class="swiper-wrapper">
        <?php
        $where = "AND product_name LIKE '%" . $_GET['search'] . "%' AND category_id = '6' ";

        $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 $where ORDER BY product_id DESC");
        if (mysqli_num_rows($produk) > 0) {
          while ($p = mysqli_fetch_array($produk)) {
            ?>
            <div class="swiper-slide">
              <a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
                <div class="card_img">
                  <img src="produk/<?php echo $p['product_image'] ?>">
                </div>
                <div class="card_content">
                  <span class="card_title" style="color : black;">
                    <h1>
                      <?php echo substr($p['product_name'], 0, 30) ?>
                    </h1>
                  </span>
                  <span class="card_harga" style="color : black;">Rp.
                    <?php echo number_format($p['product_price']) ?>
                  </span>
                  <button class="card_btn" role="button">Detail Product</button>
                </div>
              </a>
            </div>
          <?php }
        } else { ?>
          <p>Produk tidak ada</p>
        <?php } ?>
      </div>
      <div class="swiper-button-prev"><i data-feather="chevron-left" style="color: black;"></i></div>
      <div class="swiper-button-next"><i data-feather="chevron-right" style="color: black;"></i></div>
    </div>

    <div class="swiper-container mie" data-slide="3">
      <div class="swiper-wrapper">
        <?php
        $where = "AND product_name LIKE '%" . $_GET['search'] . "%' AND category_id = '7' ";

        $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 $where ORDER BY product_id DESC");
        if (mysqli_num_rows($produk) > 0) {
          while ($p = mysqli_fetch_array($produk)) {
            ?>
            <div class="swiper-slide">
              <a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
                <div class="card_img">
                  <img src="produk/<?php echo $p['product_image'] ?>">
                </div>
                <div class="card_content">
                  <span class="card_title" style="color : black;">
                    <h1>
                      <?php echo substr($p['product_name'], 0, 30) ?>
                    </h1>
                  </span>
                  <span class="card_harga" style="color : black;">Rp.
                    <?php echo number_format($p['product_price']) ?>
                  </span>
                  <button class="card_btn" role="button">Detail Product</button>
                </div>
              </a>
            </div>
          <?php }
        } else { ?>
          <p>Produk tidak ada</p>
        <?php } ?>
      </div>
      <div class="swiper-button-prev"><i data-feather="chevron-left" style="color: black;"></i></div>
      <div class="swiper-button-next"><i data-feather="chevron-right" style="color: black;"></i></div>
    </div>

    <div class="swiper-container Richbowl" data-slide="4">
      <div class="swiper-wrapper">
        <?php
        $where = "AND product_name LIKE '%" . $_GET['search'] . "%' AND category_id = '8' ";

        $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 $where ORDER BY product_id DESC");
        if (mysqli_num_rows($produk) > 0) {
          while ($p = mysqli_fetch_array($produk)) {
            ?>
            <div class="swiper-slide">
              <a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
                <div class="card_img">
                  <img src="produk/<?php echo $p['product_image'] ?>">
                </div>
                <div class="card_content">
                  <span class="card_title" style="color : black;">
                    <h1>
                      <?php echo substr($p['product_name'], 0, 30) ?>
                    </h1>
                  </span>
                  <span class="card_harga" style="color : black;">Rp.
                    <?php echo number_format($p['product_price']) ?>
                  </span>
                  <button class="card_btn" role="button">Detail Product</button>
                </div>
              </a>
            </div>
          <?php }
        } else { ?>
          <p>Produk tidak ada</p>
        <?php } ?>
      </div>
      <div class="swiper-button-prev"><i data-feather="chevron-left" style="color: black;"></i></div>
      <div class="swiper-button-next"><i data-feather="chevron-right" style="color: black;"></i></div>
    </div>

    <div class="swiper-container Snack" data-slide="5">
      <div class="swiper-wrapper">
        <?php
        $where = "AND product_name LIKE '%" . $_GET['search'] . "%' AND category_id = '9' ";

        $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 $where ORDER BY product_id DESC");
        if (mysqli_num_rows($produk) > 0) {
          while ($p = mysqli_fetch_array($produk)) {
            ?>
            <div class="swiper-slide">
              <a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
                <div class="card_img">
                  <img src="produk/<?php echo $p['product_image'] ?>">
                </div>
                <div class="card_content">
                  <span class="card_title" style="color : black;">
                    <h1>
                      <?php echo substr($p['product_name'], 0, 30) ?>
                    </h1>
                  </span>
                  <span class="card_harga" style="color : black;">Rp.
                    <?php echo number_format($p['product_price']) ?>
                  </span>
                  <button class="card_btn" role="button">Detail Product</button>
                </div>
              </a>
            </div>
          <?php }
        } else { ?>
          <p>Produk tidak ada</p>
        <?php } ?>
      </div>
      <div class="swiper-button-prev"><i data-feather="chevron-left" style="color: black;"></i></div>
      <div class="swiper-button-next"><i data-feather="chevron-right" style="color: black;"></i></div>
    </div>

    <div class="swiper-container Drink" data-slide="6">
      <div class="swiper-wrapper">
        <?php
        $where = "AND product_name LIKE '%" . $_GET['search'] . "%' AND category_id = '10' ";

        $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 $where ORDER BY product_id DESC");
        if (mysqli_num_rows($produk) > 0) {
          while ($p = mysqli_fetch_array($produk)) {
            ?>
            <div class="swiper-slide">
              <a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
                <div class="card_img">
                  <img src="produk/<?php echo $p['product_image'] ?>">
                </div>
                <div class="card_content">
                  <span class="card_title" style="color : black;">
                    <h1>
                      <?php echo substr($p['product_name'], 0, 30) ?>
                    </h1>
                  </span>
                  <span class="card_harga" style="color : black;">Rp.
                    <?php echo number_format($p['product_price']) ?>
                  </span>
                  <button class="card_btn" role="button">Detail Product</button>
                </div>
              </a>
            </div>
          <?php }
        } else { ?>
          <p>Produk tidak ada</p>
        <?php } ?>
      </div>
      <div class="swiper-button-prev"><i data-feather="chevron-left" style="color: black;"></i></div>
      <div class="swiper-button-next"><i data-feather="chevron-right" style="color: black;"></i></div>
    </div>
  </div>
  <!--galerry-->
  <div id="GALERY" class="galery">
    <div class="galery-container">
      <div class="galery-head">
        <h1>OUR GALERY</h1>
      </div>
      <div class="galery-main">
        <div class="box">
          <img src="gambar/galery1.jpg">
        </div>
        <div class="box">
          <img src="gambar/galery2.jpg">
        </div>
        <div class="box">
          <img src="gambar/galery3.jpg">
        </div>
        <div class="box">
          <img src="gambar/galery4.jpg">
        </div>
        <div class="box">
          <img src="gambar/galery5.jpg">
        </div>
      </div>
    </div>
  </div>
  <!--quotes, kontak start-->
  <div class="countainer-quot" id="KONTAK">
    <div class="content">
      <div class="text">
        <h1>“Never trust anyone who doesn't drink coffee.”</h1>
        <h1>AJ Lee</h1>
      </div>
    </div>
  </div>
  <div class="countainer-resev galery">
    <div class="container-1">
      <form class="about-left" action="">
        <h1>Reservasi Online</h1>
        <p>Jika ingin booking hub <a href="#"><span>0822-5518-7877</span></a></p>
        <div class="input-wrapper">
          <input type="text" placeholder="Nama" id="input-nama" class="input-field iden">
          <input type="text" placeholder="No Telpon" id="input-telp" class="input-field iden input-telp">
        </div>
        <div class="input-wrapper select">
          <div class="icon-wrapper">
            <i class="icon" data-feather="user"></i>
            <select name="Person" id="input" class="input-field select">
              <option value="1-orang">1 orang</option>
              <option value="2-orang">2 orang</option>
              <option value="3-orang">3 orang</option>
              <option value="4-orang">4 orang</option>
              <option value="5-orang">5 orang</option>
            </select>
          </div>
          <div class="icon-wrapper">
            <i class="icon" data-feather="calendar"></i>
            <input type="date" id="calender" class="input-field select">
          </div>
          <div class="icon-wrapper">
            <i class="icon" data-feather="clock"></i>
            <select name="Person" id="input" class="input-field select input-waktu">
              <option value="09-00">09-00</option>
              <option value="10-00">10-00</option>
              <option value="11-00">11-00</option>
              <option value="12-00">12-00</option>
              <option value="13-00">13-00</option>
              <option value="14-00">14-00</option>
              <option value="15-00">15-00</option>
              <option value="16-00">16-00</option>
              <option value="17-00">17-00</option>
              <option value="18-00">18-00</option>
              <option value="19-00">19-00</option>
            </select>
          </div>
        </div>
        <textarea id="pesan" name="massage" placeholder="Massage" autocomplete="off"
          class="input-field massage input-massage"></textarea>
        <a id="submit">submit</a>
      </form>
      <form class="about-right" action="">
        <div class="bg">
          <h1>Kontak Kami</h1>

          <i data-feather="coffee" class="body-1"></i>

          <p class="kontak-label">Booking</p>
          <a href="" class="body-1"><span>+62822-5518-7877</span></a>

          <p class="kontak-label">Lokasi</p>
          <p class="body-1"> Karang Anyar, Kec. Tarakan Bar., Kota Tarakan, Kalimantan Utara</p>

          <p class="kontak-label">opening</p>
          <p class="body-1">08.00 - 22.00</p>
        </div>
      </form>
    </div>
    <div class="map" id="LOKASI">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4771.073524170199!2d117.58610524478412!3d3.321661484665988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3214757c48b23561%3A0x4b35bcbca2b45454!2sThe%20Kopitiam%20Tarakan!5e0!3m2!1sid!2sid!4v1695919251527!5m2!1sid!2sid"
        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  <!--quotes end-->
  <!--footer start-->
  <div class="footer">
    <div class="isi-1">
      <a href="#">
        <img src="gambar/LOGO.png" alt="logo" width="50px" style="margin-right: 1rem;">
        <div>
          <h1 style="font-style: italic;
          font-family: 'Arimo', sans-serif;
          font-family: 'Brygada 1918', serif;">The Kopitiam</h1>
          <p>---- BAKERY And COFFE----</p>
        </div>
      </a>
    </div>
    <div class="isi-2">
      <a href=""><img src="gambar/whatsapp.png" alt=""></a>
      <a href=""><img src="gambar/fb.png" alt=""></a>
      <a href=""><img src="gambar/ig.png" alt=""></a>
      <a href=""><img src="gambar/tt.png" alt=""></a>
      <a href=""><img src="gambar/twit.png" alt=""></a>
    </div>
    <div class="copyright">
      <p style="color : #8d8d8d"> Copyright &copy; 2023 Andri Efendy</p>
    </div>
  </div>
  <!--footer end-->
  <!--jquery-->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <!--scrip js-->
  <script src="script.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!--feater Icon-->

  <script>
    feather.replace();
  </script>
  <script>
    var swiper = new Swiper(".swiper-container", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: -30,
        depth: 200,
        modifier: 2,
        slideShadows: false,
      },

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      loop: true,

    });
  </script>

</body>

</html>
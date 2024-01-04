-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2023 pada 19.40
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_coffe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_telp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_address`) VALUES
(1, 'Andri Efendy', 'admin', '6a71fca035a31a10345ac10c2077cb31', '+6282255187877', 'andri.nnkn@gmail.com', 'Jl Kusuma Bangsa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`) VALUES
(5, 'Croissant'),
(6, 'Burger'),
(7, 'Mie'),
(8, 'RiceBowl'),
(9, 'Snack'),
(10, 'Drink');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `data_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_status`, `data_created`) VALUES
(23, 5, 'Signature Chix-Croissant', 45000, '<p>Croissant adalah sejenis roti berbentuk bulan sabit yang berasal dari Prancis. Roti ini memiliki tekstur yang lembut di dalam, namun luar biasa renyah di lapisan-lapisan luarnya. Croissant terkenal karena kelezatan dan keunikan bentuknya yang menarik.</p>\r\n\r\n<p>Bentuknya yang menyerupai bulan sabit memberikan sentuhan artistik dan elegan pada penampilan croissant. Lapisan-lapisan tipis yang dihasilkan dari proses pembuatan adonan yang dilipat dan dilaminasi dengan mentega memberikan tekstur yang khas dan cita rasa yang lezat.</p>\r\n\r\n<p>Croissant seringkali memiliki aroma harum mentega dan rasa yang lembut, membuatnya menjadi pilihan populer untuk sarapan atau camilan di seluruh dunia. Seiring waktu, croissant telah menjadi lebih dari sekadar roti, dengan variasi tambahan seperti croissant cokelat, croissant almond, atau bahkan croissant dengan isian berbagai macam selai atau keju.</p>\r\n\r\n<p>Croissant dapat dinikmati dalam keadaan segar atau dipanggang kembali untuk mendapatkan kelezatan yang lebih intens. Rasanya yang ringan dan kenyal membuatnya cocok untuk disantap bersama kopi atau teh, menciptakan pengalaman kuliner yang memuaskan.</p>\r\n', 'produk1702144556.png', 1, '2023-12-09 17:55:56'),
(24, 5, 'Double Bacon-Croissant', 45000, '<p>Croissant adalah sejenis roti berbentuk bulan sabit yang berasal dari Prancis. Roti ini memiliki tekstur yang lembut di dalam, namun luar biasa renyah di lapisan-lapisan luarnya. Croissant terkenal karena kelezatan dan keunikan bentuknya yang menarik.</p>\r\n\r\n<p>Bentuknya yang menyerupai bulan sabit memberikan sentuhan artistik dan elegan pada penampilan croissant. Lapisan-lapisan tipis yang dihasilkan dari proses pembuatan adonan yang dilipat dan dilaminasi dengan mentega memberikan tekstur yang khas dan cita rasa yang lezat.</p>\r\n\r\n<p>Croissant seringkali memiliki aroma harum mentega dan rasa yang lembut, membuatnya menjadi pilihan populer untuk sarapan atau camilan di seluruh dunia. Seiring waktu, croissant telah menjadi lebih dari sekadar roti, dengan variasi tambahan seperti croissant cokelat, croissant almond, atau bahkan croissant dengan isian berbagai macam selai atau keju.</p>\r\n\r\n<p>Croissant dapat dinikmati dalam keadaan segar atau dipanggang kembali untuk mendapatkan kelezatan yang lebih intens. Rasanya yang ringan dan kenyal membuatnya cocok untuk disantap bersama kopi atau teh, menciptakan pengalaman kuliner yang memuaskan.</p>\r\n', 'produk1702144944.png', 1, '2023-12-09 18:02:24'),
(25, 5, 'Meat Me Up-Croissant', 45000, '<p>Croissant adalah sejenis roti berbentuk bulan sabit yang berasal dari Prancis. Roti ini memiliki tekstur yang lembut di dalam, namun luar biasa renyah di lapisan-lapisan luarnya. Croissant terkenal karena kelezatan dan keunikan bentuknya yang menarik.</p>\r\n\r\n<p>Bentuknya yang menyerupai bulan sabit memberikan sentuhan artistik dan elegan pada penampilan croissant. Lapisan-lapisan tipis yang dihasilkan dari proses pembuatan adonan yang dilipat dan dilaminasi dengan mentega memberikan tekstur yang khas dan cita rasa yang lezat.</p>\r\n\r\n<p>Croissant seringkali memiliki aroma harum mentega dan rasa yang lembut, membuatnya menjadi pilihan populer untuk sarapan atau camilan di seluruh dunia. Seiring waktu, croissant telah menjadi lebih dari sekadar roti, dengan variasi tambahan seperti croissant cokelat, croissant almond, atau bahkan croissant dengan isian berbagai macam selai atau keju.</p>\r\n\r\n<p>Croissant dapat dinikmati dalam keadaan segar atau dipanggang kembali untuk mendapatkan kelezatan yang lebih intens. Rasanya yang ringan dan kenyal membuatnya cocok untuk disantap bersama kopi atau teh, menciptakan pengalaman kuliner yang memuaskan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'produk1702144977.png', 1, '2023-12-09 18:02:57'),
(26, 5, 'Super Complit-Croissant', 48000, '<p>Croissant adalah sejenis roti berbentuk bulan sabit yang berasal dari Prancis. Roti ini memiliki tekstur yang lembut di dalam, namun luar biasa renyah di lapisan-lapisan luarnya. Croissant terkenal karena kelezatan dan keunikan bentuknya yang menarik.</p>\r\n\r\n<p>Bentuknya yang menyerupai bulan sabit memberikan sentuhan artistik dan elegan pada penampilan croissant. Lapisan-lapisan tipis yang dihasilkan dari proses pembuatan adonan yang dilipat dan dilaminasi dengan mentega memberikan tekstur yang khas dan cita rasa yang lezat.</p>\r\n\r\n<p>Croissant seringkali memiliki aroma harum mentega dan rasa yang lembut, membuatnya menjadi pilihan populer untuk sarapan atau camilan di seluruh dunia. Seiring waktu, croissant telah menjadi lebih dari sekadar roti, dengan variasi tambahan seperti croissant cokelat, croissant almond, atau bahkan croissant dengan isian berbagai macam selai atau keju.</p>\r\n\r\n<p>Croissant dapat dinikmati dalam keadaan segar atau dipanggang kembali untuk mendapatkan kelezatan yang lebih intens. Rasanya yang ringan dan kenyal membuatnya cocok untuk disantap bersama kopi atau teh, menciptakan pengalaman kuliner yang memuaskan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'produk1702145015.png', 1, '2023-12-09 18:03:35'),
(27, 6, 'Signature Chix-Burger', 35000, '<p>Burger adalah hidangan yang menggoda selera, terdiri dari patty daging yang diolah dengan cermat untuk menciptakan cita rasa yang lezat. Patty ini, yang dapat terbuat dari berbagai jenis daging seperti sapi, ayam, atau bahkan bahan nabati, dipanggang atau digoreng hingga matang dan kemudian ditempatkan di dalam sepotong roti bundar yang renyah di luar dan lembut di dalamnya.</p>\r\n\r\n<p>Roti bundar, atau bun, menjadi pembungkus yang menyempurnakan komposisi burger. Jenis roti bisa bervariasi, mulai dari roti putih, roti gandum, hingga varian roti khusus dengan berbagai tambahan biji-bijian. Proses pemanggangan bun juga menjadi penting untuk mencapai tekstur yang diinginkan.</p>\r\n\r\n<p>Tidak hanya tentang daging dan roti, burger juga diperkaya dengan tambahan-tambahan yang membuatnya semakin menggugah selera. Saus tomat, mayones, mustard, atau saus barbekyu dapat memberikan sentuhan rasa yang beragam. Sayuran segar seperti selada, tomat, dan bawang, juga sering digunakan untuk menambahkan kelezatan dan krispi.</p>\r\n\r\n<p>Keju sering menjadi tambahan istimewa pada burger, memberikan rasa gurih yang melengkapi cita rasa daging. Varian-varian seperti cheeseburger atau bacon burger menjadi pilihan yang populer di kalangan pencinta burger.</p>\r\n\r\n<p>Tidak hanya sebagai hidangan biasa, burger juga menjadi medan kreativitas bagi para penggemar kuliner. Varian-variannya melibatkan berbagai elemen unik, dari tingkat kematangan daging hingga jenis roti yang digunakan. Burger sering disajikan dengan pendamping seperti kentang goreng, keripik, atau salad, menciptakan pengalaman makan yang memuaskan.</p>\r\n\r\n<p>Dengan popularitasnya yang merajalela, burger tidak hanya sekadar hidangan cepat saji; ia telah menjadi simbol cita rasa global yang dapat disesuaikan dengan selera lokal di berbagai penjuru dunia.</p>\r\n', 'produk1702145152.png', 1, '2023-12-09 18:05:52'),
(28, 6, 'Meat Me Up Burger', 35000, '<p>Burger adalah hidangan yang menggoda selera, terdiri dari patty daging yang diolah dengan cermat untuk menciptakan cita rasa yang lezat. Patty ini, yang dapat terbuat dari berbagai jenis daging seperti sapi, ayam, atau bahkan bahan nabati, dipanggang atau digoreng hingga matang dan kemudian ditempatkan di dalam sepotong roti bundar yang renyah di luar dan lembut di dalamnya.</p>\r\n\r\n<p>Roti bundar, atau bun, menjadi pembungkus yang menyempurnakan komposisi burger. Jenis roti bisa bervariasi, mulai dari roti putih, roti gandum, hingga varian roti khusus dengan berbagai tambahan biji-bijian. Proses pemanggangan bun juga menjadi penting untuk mencapai tekstur yang diinginkan.</p>\r\n\r\n<p>Tidak hanya tentang daging dan roti, burger juga diperkaya dengan tambahan-tambahan yang membuatnya semakin menggugah selera. Saus tomat, mayones, mustard, atau saus barbekyu dapat memberikan sentuhan rasa yang beragam. Sayuran segar seperti selada, tomat, dan bawang, juga sering digunakan untuk menambahkan kelezatan dan krispi.</p>\r\n\r\n<p>Keju sering menjadi tambahan istimewa pada burger, memberikan rasa gurih yang melengkapi cita rasa daging. Varian-varian seperti cheeseburger atau bacon burger menjadi pilihan yang populer di kalangan pencinta burger.</p>\r\n\r\n<p>Tidak hanya sebagai hidangan biasa, burger juga menjadi medan kreativitas bagi para penggemar kuliner. Varian-variannya melibatkan berbagai elemen unik, dari tingkat kematangan daging hingga jenis roti yang digunakan. Burger sering disajikan dengan pendamping seperti kentang goreng, keripik, atau salad, menciptakan pengalaman makan yang memuaskan.</p>\r\n\r\n<p>Dengan popularitasnya yang merajalela, burger tidak hanya sekadar hidangan cepat saji; ia telah menjadi simbol cita rasa global yang dapat disesuaikan dengan selera lokal di berbagai penjuru dunia.</p>\r\n\r\n<p>Burger adalah hidangan yang menggoda selera, terdiri dari patty daging yang diolah dengan cermat untuk menciptakan cita rasa yang lezat. Patty ini, yang dapat terbuat dari berbagai jenis daging seperti sapi, ayam, atau bahkan bahan nabati, dipanggang atau digoreng hingga matang dan kemudian ditempatkan di dalam sepotong roti bundar yang renyah di luar dan lembut di dalamnya.</p>\r\n\r\n<p>Roti bundar, atau bun, menjadi pembungkus yang menyempurnakan komposisi burger. Jenis roti bisa bervariasi, mulai dari roti putih, roti gandum, hingga varian roti khusus dengan berbagai tambahan biji-bijian. Proses pemanggangan bun juga menjadi penting untuk mencapai tekstur yang diinginkan.</p>\r\n\r\n<p>Tidak hanya tentang daging dan roti, burger juga diperkaya dengan tambahan-tambahan yang membuatnya semakin menggugah selera. Saus tomat, mayones, mustard, atau saus barbekyu dapat memberikan sentuhan rasa yang beragam. Sayuran segar seperti selada, tomat, dan bawang, juga sering digunakan untuk menambahkan kelezatan dan krispi.</p>\r\n\r\n<p>Keju sering menjadi tambahan istimewa pada burger, memberikan rasa gurih yang melengkapi cita rasa daging. Varian-varian seperti cheeseburger atau bacon burger menjadi pilihan yang populer di kalangan pencinta burger.</p>\r\n\r\n<p>Tidak hanya sebagai hidangan biasa, burger juga menjadi medan kreativitas bagi para penggemar kuliner. Varian-variannya melibatkan berbagai elemen unik, dari tingkat kematangan daging hingga jenis roti yang digunakan. Burger sering disajikan dengan pendamping seperti kentang goreng, keripik, atau salad, menciptakan pengalaman makan yang memuaskan.</p>\r\n\r\n<p>Dengan popularitasnya yang merajalela, burger tidak hanya sekadar hidangan cepat saji; ia telah menjadi simbol cita rasa global yang dapat disesuaikan dengan selera lokal di berbagai penjuru dunia.</p>\r\n', 'produk1702145186.png', 1, '2023-12-09 18:06:26'),
(29, 6, 'Chixpy Burger', 38000, '<p>Burger adalah hidangan yang menggoda selera, terdiri dari patty daging yang diolah dengan cermat untuk menciptakan cita rasa yang lezat. Patty ini, yang dapat terbuat dari berbagai jenis daging seperti sapi, ayam, atau bahkan bahan nabati, dipanggang atau digoreng hingga matang dan kemudian ditempatkan di dalam sepotong roti bundar yang renyah di luar dan lembut di dalamnya.</p>\r\n\r\n<p>Roti bundar, atau bun, menjadi pembungkus yang menyempurnakan komposisi burger. Jenis roti bisa bervariasi, mulai dari roti putih, roti gandum, hingga varian roti khusus dengan berbagai tambahan biji-bijian. Proses pemanggangan bun juga menjadi penting untuk mencapai tekstur yang diinginkan.</p>\r\n\r\n<p>Tidak hanya tentang daging dan roti, burger juga diperkaya dengan tambahan-tambahan yang membuatnya semakin menggugah selera. Saus tomat, mayones, mustard, atau saus barbekyu dapat memberikan sentuhan rasa yang beragam. Sayuran segar seperti selada, tomat, dan bawang, juga sering digunakan untuk menambahkan kelezatan dan krispi.</p>\r\n\r\n<p>Keju sering menjadi tambahan istimewa pada burger, memberikan rasa gurih yang melengkapi cita rasa daging. Varian-varian seperti cheeseburger atau bacon burger menjadi pilihan yang populer di kalangan pencinta burger.</p>\r\n\r\n<p>Tidak hanya sebagai hidangan biasa, burger juga menjadi medan kreativitas bagi para penggemar kuliner. Varian-variannya melibatkan berbagai elemen unik, dari tingkat kematangan daging hingga jenis roti yang digunakan. Burger sering disajikan dengan pendamping seperti kentang goreng, keripik, atau salad, menciptakan pengalaman makan yang memuaskan.</p>\r\n\r\n<p>Dengan popularitasnya yang merajalela, burger tidak hanya sekadar hidangan cepat saji; ia telah menjadi simbol cita rasa global yang dapat disesuaikan dengan selera lokal di berbagai penjuru dunia.</p>\r\n', 'produk1702145217.png', 1, '2023-12-09 18:06:57'),
(30, 7, 'Mie Setan', 25000, '<p>Mie, hidangan yang telah merambah ke berbagai budaya, adalah keajaiban kuliner yang disukai di seluruh dunia. Terbuat dari tepung terigu yang dicetak dan direbus, mie memiliki tekstur kenyal yang memikat. Variasi mie pun beragam, mulai dari mie instan yang praktis hingga mie tradisional yang diolah dengan berbagai cara. Mie bisa menjadi dasar untuk berbagai hidangan, dari ramen Jepang hingga bakmi Indonesia. Keunikan rasanya terletak pada kemampuannya menyerap cita rasa dari saus atau kuah yang menyertainya. Mie adalah bukti keberagaman kuliner global dan kesempurnaan dalam kesederhanaan, menyediakan kenikmatan yang tak terbantahkan bagi para pencinta makanan di seluruh dunia.</p>\r\n', 'produk1702145289.png', 1, '2023-12-09 18:08:09'),
(31, 7, 'Mie Ayam', 28000, '<p>Mie, hidangan yang telah merambah ke berbagai budaya, adalah keajaiban kuliner yang disukai di seluruh dunia. Terbuat dari tepung terigu yang dicetak dan direbus, mie memiliki tekstur kenyal yang memikat. Variasi mie pun beragam, mulai dari mie instan yang praktis hingga mie tradisional yang diolah dengan berbagai cara. Mie bisa menjadi dasar untuk berbagai hidangan, dari ramen Jepang hingga bakmi Indonesia. Keunikan rasanya terletak pada kemampuannya menyerap cita rasa dari saus atau kuah yang menyertainya. Mie adalah bukti keberagaman kuliner global dan kesempurnaan dalam kesederhanaan, menyediakan kenikmatan yang tak terbantahkan bagi para pencinta makanan di seluruh dunia.</p>\r\n', 'produk1702145311.png', 1, '2023-12-09 18:08:31'),
(32, 8, 'Nasi Ikan Tuna', 35000, '<p>Rice bowl adalah konsep makanan yang berasal dari Jepang. Rice bowl merupakan sebuah mangkuk yang berisi nasi dan di atasnya diberi berbagai macam lauk pauk. Konsep rice bowl kemudian mulai dikenal di Indonesia dan menjadi salah satu makanan yang sangat populer. Rice bowl yang ada di Indonesia biasanya terdiri dari nasi putih yang di atasnya diberi lauk pauk seperti ayam, ikan, atau daging sapi.</p>\r\n', 'produk1702145425.png', 1, '2023-12-09 18:10:25'),
(33, 8, 'Nasi Ayam Suwir', 35000, '<p>Rice bowl adalah konsep makanan yang berasal dari Jepang. Rice bowl merupakan sebuah mangkuk yang berisi nasi dan di atasnya diberi berbagai macam lauk pauk. Konsep rice bowl kemudian mulai dikenal di Indonesia dan menjadi salah satu makanan yang sangat populer. Rice bowl yang ada di Indonesia biasanya terdiri dari nasi putih yang di atasnya diberi lauk pauk seperti ayam, ikan, atau daging sapi.</p>\r\n', 'produk1702145450.png', 1, '2023-12-09 18:10:50'),
(34, 8, 'Nasi Ayam Geprek', 35000, '<p>Rice bowl adalah konsep makanan yang berasal dari Jepang. Rice bowl merupakan sebuah mangkuk yang berisi nasi dan di atasnya diberi berbagai macam lauk pauk. Konsep rice bowl kemudian mulai dikenal di Indonesia dan menjadi salah satu makanan yang sangat populer. Rice bowl yang ada di Indonesia biasanya terdiri dari nasi putih yang di atasnya diberi lauk pauk seperti ayam, ikan, atau daging sapi.</p>\r\n', 'produk1702145473.png', 1, '2023-12-09 18:11:13'),
(35, 9, 'Bakso dan Sosis Bakar', 35000, '<p>&nbsp;</p>\r\n\r\n<p>Snack seperti bakso dan sosis memberikan pengalaman rasa yang menggugah selera dengan keunikan dan variasi yang ditawarkannya. Bakso, bola daging yang terbuat dari campuran daging sapi atau ayam yang kenyal, seringkali dihidangkan dalam kuah kaldu yang kaya rasa. Rasanya yang gurih dan hangat membuatnya menjadi pilihan yang cocok untuk dinikmati sebagai camilan atau hidangan ringan. Sementara itu, sosis merupakan taburan rasa dengan tekstur yang lebih padat. Dibuat dari daging yang dicampur dengan bumbu khas, sosis bisa dipanggang, direbus, atau digoreng. Dengan berbagai varian seperti sosis sapi, ayam, atau bahkan sosis vegetarian, snack ini memberikan pilihan yang menyenangkan dan dapat disesuaikan sesuai selera individu. Keduanya merupakan favorit di kalangan pecinta makanan ringan, memberikan sensasi kenikmatan yang praktis dan lezat.</p>\r\n', 'produk1702145555.png', 1, '2023-12-09 18:12:35'),
(36, 9, 'Bakwan', 35000, '<p>&nbsp;</p>\r\n\r\n<p>Bakwan, sebuah camilan yang terkenal di Indonesia, adalah kudapan yang lezat dan beragam. Terbuat dari adonan berbasis tepung terigu yang dicampur dengan aneka bahan seperti tauge, wortel, daun bawang, dan daging cincang, bakwan memberikan sentuhan gurih dan renyah yang menyenangkan. Setelah adonan dicampur, bakwan kemudian digoreng hingga berwarna keemasan, menciptakan lapisan luar yang renyah dan inner yang lembut. Rasa gurih dan aroma harum yang dihasilkan dari proses penggorengan menjadikan bakwan pilihan camilan yang disukai oleh banyak orang. Bakwan sering disajikan dengan saus cabai atau saus kacang untuk menambahkan dimensi rasa yang lebih kaya. Kehadirannya yang fleksibel membuatnya cocok sebagai teman hangat di sore hari atau sebagai pilihan menu ketika berkumpul bersama keluarga dan teman.</p>\r\n', 'produk1702145592.png', 1, '2023-12-09 18:13:12'),
(37, 9, 'Cireng', 35000, '<p>Cireng, merupakan camilan khas Indonesia, adalah hidangan yang unik dan lezat. Terbuat dari campuran tepung tapioka, bawang putih, daun bawang, dan bumbu lainnya, cireng membentuk adonan yang kemudian dipotong dan digoreng hingga menjadi kudapan berbentuk silinder. Cireng memiliki tekstur luar yang renyah dan inner yang kenyal. Biasanya disajikan dengan taburan bumbu kacang yang gurih dan sedikit pedas, cireng memberikan perpaduan rasa yang memikat. Kecilnya ukuran cireng membuatnya cocok sebagai camilan ringan di berbagai acara, dan kemudahan dalam penyajiannya membuatnya menjadi favorit di kalangan pecinta kuliner Indonesia.</p>\r\n', 'produk1702145628.png', 1, '2023-12-09 18:13:48'),
(38, 10, 'Kopi Signature', 22000, '<p>Kopi, minuman yang telah menjadi bagian tak terpisahkan dari budaya global, adalah cairan ajaib yang menghidupkan dan menyemangati. Terbuat dari biji kopi yang dipanggang dan digiling, kopi memiliki aroma yang khas dan rasa yang mendalam. Dari espresso yang kuat hingga kopi susu yang lembut, variasi kopi mencerminkan kekayaan dan kompleksitasnya. Kebanyakan orang menikmati kopi sebagai sumber energi, menambahkan ritual kehidupan sehari-hari mereka. Dalam cangkir kopi, terdapat lebih dari sekadar minuman; ada cerita, percakapan, dan momen berharga yang tercipta. Dari warung pinggir jalan hingga kafe mewah, kopi merangkul berbagai lapisan masyarakat, menjadi teman setia bagi yang mencari kehangatan dan kenikmatan dalam setiap tegukan.</p>\r\n', 'produk1702145740.png', 1, '2023-12-09 18:15:40'),
(39, 10, 'Lychee Yakult', 22000, '<p>Kopi, minuman yang telah menjadi bagian tak terpisahkan dari budaya global, adalah cairan ajaib yang menghidupkan dan menyemangati. Terbuat dari biji kopi yang dipanggang dan digiling, kopi memiliki aroma yang khas dan rasa yang mendalam. Dari espresso yang kuat hingga kopi susu yang lembut, variasi kopi mencerminkan kekayaan dan kompleksitasnya. Kebanyakan orang menikmati kopi sebagai sumber energi, menambahkan ritual kehidupan sehari-hari mereka. Dalam cangkir kopi, terdapat lebih dari sekadar minuman; ada cerita, percakapan, dan momen berharga yang tercipta. Dari warung pinggir jalan hingga kafe mewah, kopi merangkul berbagai lapisan masyarakat, menjadi teman setia bagi yang mencari kehangatan dan kenikmatan dalam setiap tegukan.</p>\r\n', 'produk1702145768.png', 1, '2023-12-09 18:16:08'),
(40, 10, 'Rasberry', 22000, '<p>Kopi, minuman yang telah menjadi bagian tak terpisahkan dari budaya global, adalah cairan ajaib yang menghidupkan dan menyemangati. Terbuat dari biji kopi yang dipanggang dan digiling, kopi memiliki aroma yang khas dan rasa yang mendalam. Dari espresso yang kuat hingga kopi susu yang lembut, variasi kopi mencerminkan kekayaan dan kompleksitasnya. Kebanyakan orang menikmati kopi sebagai sumber energi, menambahkan ritual kehidupan sehari-hari mereka. Dalam cangkir kopi, terdapat lebih dari sekadar minuman; ada cerita, percakapan, dan momen berharga yang tercipta. Dari warung pinggir jalan hingga kafe mewah, kopi merangkul berbagai lapisan masyarakat, menjadi teman setia bagi yang mencari kehangatan dan kenikmatan dalam setiap tegukan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'produk1702145791.png', 1, '2023-12-09 18:16:31'),
(41, 10, 'Americano', 22000, '<p>Kopi, minuman yang telah menjadi bagian tak terpisahkan dari budaya global, adalah cairan ajaib yang menghidupkan dan menyemangati. Terbuat dari biji kopi yang dipanggang dan digiling, kopi memiliki aroma yang khas dan rasa yang mendalam. Dari espresso yang kuat hingga kopi susu yang lembut, variasi kopi mencerminkan kekayaan dan kompleksitasnya. Kebanyakan orang menikmati kopi sebagai sumber energi, menambahkan ritual kehidupan sehari-hari mereka. Dalam cangkir kopi, terdapat lebih dari sekadar minuman; ada cerita, percakapan, dan momen berharga yang tercipta. Dari warung pinggir jalan hingga kafe mewah, kopi merangkul berbagai lapisan masyarakat, menjadi teman setia bagi yang mencari kehangatan dan kenikmatan dalam setiap tegukan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'produk1702145817.png', 1, '2023-12-09 18:16:57'),
(42, 10, 'Blue Mojito', 22000, '<p>Kopi, minuman yang telah menjadi bagian tak terpisahkan dari budaya global, adalah cairan ajaib yang menghidupkan dan menyemangati. Terbuat dari biji kopi yang dipanggang dan digiling, kopi memiliki aroma yang khas dan rasa yang mendalam. Dari espresso yang kuat hingga kopi susu yang lembut, variasi kopi mencerminkan kekayaan dan kompleksitasnya. Kebanyakan orang menikmati kopi sebagai sumber energi, menambahkan ritual kehidupan sehari-hari mereka. Dalam cangkir kopi, terdapat lebih dari sekadar minuman; ada cerita, percakapan, dan momen berharga yang tercipta. Dari warung pinggir jalan hingga kafe mewah, kopi merangkul berbagai lapisan masyarakat, menjadi teman setia bagi yang mencari kehangatan dan kenikmatan dalam setiap tegukan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'produk1702145845.png', 1, '2023-12-09 18:17:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

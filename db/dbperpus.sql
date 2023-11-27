-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2023 at 03:55 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbperpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int NOT NULL,
  `loker_buku` varchar(25) NOT NULL,
  `no_rak` int NOT NULL,
  `no_laci` int NOT NULL,
  `no_boks` int NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `nama_pengarang` varchar(100) NOT NULL,
  `tahun_terbit` date NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `thumbnail_buku` text NOT NULL,
  `deskripsi` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `loker_buku`, `no_rak`, `no_laci`, `no_boks`, `judul_buku`, `nama_pengarang`, `tahun_terbit`, `penerima`, `penerbit`, `status`, `keterangan`, `thumbnail_buku`, `deskripsi`) VALUES
(46, 'Buku Anak Anak', 1, 2, 3, 'The Psychology of Money: Timeless Lessons on Wealth, Greed, and Happiness', 'Morgan Housel', '2030-12-31', 'Arif', 'Macmillan Uk', 'Dipinjam', '20', 'psychology_of_money.jpg', 'Kesuksesan dalam mengelola uang tidak selalu tentang apa yang Anda ketahui. Ini tentang bagaimana Anda berperilaku. Dan perilaku sulit untuk diajarkan, bahkan kepada orang yang sangat pintar sekalipun. Seorang genius yang kehilangan kendali atas emosinya bisa mengalami bencana keuangan. Sebaliknya, orang biasa tanpa pendidikan finansial bisa kaya jika mereka punya sejumlah keahlian terkait perilaku yang tidak berhubungan dengan ukuran kecerdasan formal.\r\nUang, investasi, keuangan pribadi, dan keputusan bisnis biasanya diajarkan sebagai bidang berbasis matematika dengan data dan rumus memberi tahu kita apa yang harus dilakukan. Namun, di dunia nyata orang tidak membuat keputusan finansial di spreadsheet. Mereka membuatnya di meja makan, atau di ruang rapat, di mana sejarah pribadi, pandangan unik Anda tentang dunia, ego, kebanggaan, pemasaran, dan berbagai insentif bercampur. Dalam The Psychology of Money, penulis pemenang penghargaan, Morgan Housel membagikan 19 cerita pendek yang mengeksplorasi cara-cara aneh orang berpikir tentang uang dan mengajari Anda cara memahami salah satu topik terpenting dalam hidup dengan lebih baik. Morgan membuat cerita pendek tersebut dengan menggunakan sudut pandang perilaku manusia sehingga setelah selesai membaca buku ini, pembaca akan menemukan sudut pandang baru dalam menyikapi duit yang dimiliki. Nah, supaya kamu mengetahui cara-cara untuk mengelola keuangan dengan baik, yuk baca buku The Psychology of Money.'),
(58, 'Buku Anak Anak', 1, 12, 25, 'Jujutsu Kaisen 11', 'GEGE AKUTAMI', '2023-09-03', 'Arif', 'Elex Media Komputindo', 'Ada', '20', '6542fd2489407.png', 'Di antara jenis buku lainnya, komik memang disukai oleh semua kalangan mulai dari anak kecil hingga orang dewasa. Alasan komik lebih disukai oleh banyak orang karena disajikan dengan penuh dengan gambar dan cerita yang mengasyikan sehingga mampu menghilangkan rasa bosan di kala waktu senggang.\r\n\r\nKomik seringkali dijadikan sebagai koleksi dan diburu oleh penggemarnya karena serinya yang cukup terkenal dan kepopulerannya terus berlanjut sampai saat ini. Dalam memilih jenis komik, ada baiknya perhatikan terlebih dahulu ringkasan cerita komik di sampul bagian belakang sehingga sesuai dengan preferensi pribadi pembaca.\r\n\r\nJujutsu Kaisen adalah serial manga Jepang yang ditulis dan diilustrasikan oleh Gege Akutami. Ini telah diserialkan di majalah manga shōnen Shueisha Weekly Shonen Jump sejak Maret 2018, dengan bab-babnya dikumpulkan dan diterbitkan dalam 20 volume tankōbon per Agustus 2022. Ceritanya mengikuti siswa sekolah menengah Yuji Itadori saat ia bergabung dengan organisasi rahasia Penyihir Jujutsu untuk menghilangkan Kutukan yang kuat bernama Ryomen Sukuna, di mana Yuji menjadi inangnya. Jujutsu Kaisen adalah sekuel dari Sekolah Teknik Kutukan Metropolitan Tokyo Akutami, yang diserialkan di Jump GIGA Shueisha dari April hingga Juli 2017, kemudian dikumpulkan dalam volume tankōbon, dengan judul retroaktif sebagai Jujutsu Kaisen 0, pada Desember 2018.\r\n\r\nSinopsis Buku:\r\nPeron bawah tanah Stasiun Shibuya dipenuhi warga sipil dan manusia yang telah dimodifikasi. Dalam situasi mengerikan tanpa jalan keluar, Gojo masih memegang kendali atas para Jurei. Akan tetapi, kuasa untuk menyegel Gojo ada di tangan musuh...!! Sementara itu, ketika Itadori bergegas menuju peron bawah tanah, muncul sekutu yang tak terduga!?'),
(59, 'Buku Anak Anak', 1, 12, 25, 'Atomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa', 'James Clear', '2019-09-15', 'Arif', 'Gramedia Pustaka Utama', 'Ada', 'Arif', '6542fde2c2c1e.png', 'Atomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa adalah buku kategori self improvement karya James Clear. Pada umumnya, perubahan-perubahan kecil seringkali terkesan tak bermakna karena tidak langsung membawa perubahan nyata pada hidup suatu manusia. Jika diumpamakan sekeping koin tidak bisa menjadikan kaya, suatu perubahan positif seperti meditasi selama satu menit atau membaca buku satu halaman setiap hari mustahil menghasilkan perbedaan yang bisa terdeteksi. Namun hal tersebut tidak sejalan dengan pemikiran James Clear, ia merupakan seorang pakar dunia yang terkenal dengan \'habits\' atau kebiasaan. Ia tahu bahwa tiap perbaikan kecil bagaikan menambahkan pasir ke sisi positif timbangan dan akan menghasilkan perubahan nyata yang berasal dari efek gabungan ratusan bahkan ribuan keputusan kecil. Ia menamakan perubahan kecil yang membawa pengaruh yang luar biasa dengan nama atomic habits.\r\n\r\nDalam buku ini James Clear, seorang penulis sekaligus pembicara yang sangat terkenal akan topik \'habit\' memaparkan bahwa pada hakikatnya sebuah perubahan kecil (Atomic Habit) sering dianggap remeh, sebenarnya akan memberikan hasil yang sangat menjanjikan dalam hidup. Yang dipandang penting dalam perubahan perilaku bukan satu persen perbaikan tunggal, melainkan ribuan perbaikan atau sekumpulan atomic habits yang saling bertumpuk dan menjadi unit dasar dalam suatu sistem yang penting.\r\n\r\nJames Clear menjelaskan bahwa terdapat tiga tingkat perubahan yaitu perubahan hasil, perubahan proses, dan perubahan identitas. Cara paling efektif dalam mengubah kebiasaan adalah bukan berfokus pada apa yang ingin dicapai, melainkan tipe orang seperti apa yang diinginkan. Identitas seseorang muncul dari kebiasaan yang dilakukan setiap harinya. Alasan utama kebiasaan penting karena kebiasaan dapat mengubah keyakinan tentang diri sendiri.\r\n\r\nClear juga memperkenalkan empat Kaidah Perubahan Perilaku untuk membantu mengubah perilaku manusia yaitu menjadikannya terlihat, menjadikannya menarik, menjadikannya mudah, menjadikannya memuaskan. Keempat kaidah ini tidak hanya mengajari kita cara menciptakan kebiasaan-kebiasaan baru, melainkan menyingkapi sejumlah wawasan menarik tentang perilaku manusia.'),
(62, 'Buku Anak Anak', 1, 12, 28, '10 dosa besar Soeharto ', 'Drs. Wimanjaya K. Liotohe', '2030-12-31', 'Arif', 'Jakarta : Upaya Warga Negara', 'Ada', '20', '654303e4aff02.png', 'Anjay mabar'),
(64, 'Buku Anak Anak', 1, 12, 23, 'The Visual MBA', 'Jason Barron', '2022-12-25', 'Arif', 'Renebook', 'Ada', '20', '654306383bddc.png', 'Kalau impianmu tak bisa membuatmu takut, mungkin karena impianmu tak cukup besar.\"\r\n- Muhammad Ali\r\nKetika membuka sekilas lembaran demi lembaran Buku “The Visual MBA”, mata ini menemukan hal yang berbeda dari buku bisnis pada umumnya\r\nKenapa?\r\nKarena buku ini disajikan dengan penjelasan yang mudah dipahami dan yang penting banyak visualisasi yang menarik dan mudah dipahami, membuat diri ini tertarik untuk terus membuka lembaran demi lembaran. Buku yang berjumlah sekitar 216 halaman ini bisa diselesaikan sekitar 3 hari, sebuah pencapaian luar biasa buat diri ini yang jarang banget baca buku bertema bisnis yang biasanya didominasi dengan teks.\r\nDari cover bukunya tertulis jika buku ini menggambarkan tentang hal apa yang akan dipelajari selama 2 tahun di perkuliahan MBA (Master of Business Administration). Dimulai dari halaman pertama hingga akhir saya benar-benar seperti sedang mengikuti perkuliahan tentang bagaimana proses membangun bisnis. Bagi seorang Ibuprenuer yang memang belum memiliki ilmu bisnis sebelumnya seperti saya ini, buku ini sangat membantu untuk mendapatkan gambaran besar sebuah perjalanan panjang dalam membangun bisnis. Adanya gambaran besar ini akan memudahkan Ibupreneur untuk bersiap menjalani prosesnya kelak.\r\nDari buku ini saya memahami, membangun bisnis hakekatnya diawali bukan dari seberapa besar modal rupiah yang akan dikeluarkan, tapi diawali sejauh mana kita MENGENAL DIRI SENDIRI. Seberapa paham kekuatan dan kelemahan yang dimiliki. Seberapa paham sumber daya apa yang dimiliki.\r\nHal ini akan memudahkan nantinya dalam menentukan “siapa yang akan kita layani” alias target market. Pilihlah target market yang sekiranya kita bisa bantu memecahkan masalah yang mereka hadapi. Pilihlah masalah yang sekiranya SOLUSI tersebut berpeluang MENGHASILKAN PROFIT dan KITA MEMILIKI KAPASITAS untuk menjadi BAGIAN dari SOLUSI yang dibutuhkan. Jangan sampai memiilih masalah yang solusinya memiliki peluang kecil untuk menghasilkan profit dan juga tidak punya kapasitas atau kemampuan dalam menyelesaikan masalah yang mereka alami.\r\nMungkin bisa saja untuk merekrut tim untuk membantu, bagi mereka yang sudah memiliki modal yang cukup besar hal ini bukanlah masalah berarti. Namun tak berlaku untuk yang benar-benar merintis dari awal, yang biasanya semuanya dikerjakan sendiri. Mengenal Diri pun merupakan modal utama dalam membangun BRANDING. Baik itu branding personal maupun bisnis. Karena branding bisnis hakekatnya juga sangat dipengaruhi oleh branding sang pemilik bisnis.\r\nKemudian hal menarik lainnya dari di buku ini yaitu tentang Manajemen Energi. Di buku ini ditekankan untuk tidak fokus pada manajemen waktu, tapi tekankan pada manajemen energi. Seseorang yang memiliki manajemen energi yang baik, akan menjalani “seabrek” aktivitas dengan minim stres. Mengapa? Karena sebelum menentukan apa yang akan dilakukannya, seseorang itu sudah mengetahui apa yang ia kejar dari energi yang ia “keluarkan”. Jadi sederhananya, seseorang yang memiliki kemampuan manajemen energi yang baik akan secara sadar memutuskan hal apa yang perlu dia lakukan setiap harinya, bukan hanya sekedar menjalani rutinitas atau ikut-ikutan orang lain. Maka masuk akal jika seseorang yang memiliki kemampuan manajemen energi yang baik cenderung memiliki manajemen waktu yang baik pula .\r\nHal lain yang cukup membuat diri ini merasa tertohok adalah ketika membahas laporan keuangan. Jujur, pas baca bagian ini merasa kesindir banget karena pencatatan keuangan bisnis masih acak-acakan . Adapun laporan-laporan keuangan merupakan instrumen yang penting untuk melihat kondisi dari bisnis yang sedang dijalankan, apakah sehat atau sebaliknya. Laporan keuangan inilah nantinya yang akan membantu dalam pengambilan keputusan selanjutnya.\r\nJika sudah mengenal diri, sudah memiliki ide bisnis (solusi dari masalah target market) dan juga memahami penyusunan laporan maka akan lebih mudah bagi Ibu Preneur dalam menjalani proses selanjutnya seperti penyusunan perencanaan bisnis, penyusunan strategi marketing, membangun tim, mengembangkan tim, perencanaan investasi, negosiasi dengan investor.\r\nDan dalam buku ini juga ditekankan untuk menjalankan bisnis dengan tetap mematuhi etika bisnis dan mengutamakan kebermanfaatan yang luas, agar bisnis Ibupreneur memiliki peluang untuk menjadi bisnis yang berkelanjutan, mendunia dan impactful (berdampak)\r\nBuku ini benar-benar dan menjawab semua pertanyaan yang biasanya terlintas di pikiran oleh seseorang yang sedang membangun bisnis, maka jika sudah selesai membaca buku ini bersiap ya Bu Ibu, karena setelah membacanya buku ini seperti memiliki kekuatan yang kuat untuk segera menerapkannya dalam proses membangun bisnis yang sedang dijalani\r\nSemangat ya Ibu Preneur\r\n\r\nyuk budayakan membaca buku dan tinggalkan sejenak digital'),
(65, 'Buku Anak Anak', 1, 12, 23, 'Pantaskah OJK Dibubarkan?', 'Dr. Hadi Utomo', '2022-12-16', 'Arif', 'Elex Media Komputindo', 'Ada', '20', '654307b26d918.png', 'OJK (Otoritas Jasa Keuangan) adalah lembaga independen yang dibentuk negara untuk kebutuhannya sebagai lembaga ekstrastruktural di luar lembaga yudikatif, legislatif dan eksekutif. Dengan kata lain, OJK adalah lembaga yang berada di luar lembaga definitif yang telah ada. Independensi OJK tercermin dari kepemimpinan yang tak dapat diberhentikan kecuali alasan di UU No. 21/2011. Namun, karena tuntutan zaman yang kian rumit, organisasi yang birokratis dan sentralistis belum mampu diandalkan, dan respon atas belum stabilnya sistem pengawasan sektor jasa keuangan serta banyaknya permasalahan lintas sektoral di sektor jasa keuangan, yang meliputi tindakan moral hazard, maka lahirlah OJK yang mempunyai fungsi campuran yang bersifat independen. Lantas kenapa OJK mesti bubar? Apakah karena kewenangan OJK dalam mengatur dan mengawasi sektor keuangan terlalu luas? Apakah karena ingin menutupi kegagalan BI sebagai Bank Sentral dan gagalnya Departemen Keuangan serta Bapepam-LK sebagai lembaga yang mengawasi pasar modal? Atau alasan lain? Pada buku ini, yang menjadi titik penting adalah menyoroti kewenangan OJK. Buku ini lebih fokus lagi pada bahasan kewenangan penyidik dalam melakukan penyidikan. Sedangkan pegawai OJK itu, status pegawainya adalah bukan Pegawai Negeri Sipil. Lalu, apakah personil Polri yang ditugaskan di OJK sebagai penugasan di luar struktur Polri dapat melakukan penyidikan? Dibentuknya POJK 22/2015 merupakan pelaksanaan kewenangan OJK untuk penyidikan terhadap tindakan pidana di jasa keuangan. Padahal tak satu pun di UU No. 21/2011 bahwa perihal penyidikan akan diatur di Peraturan OJK. Landasan hukumnya kurang tepat karena tugas OJK masih memberi pengakuan penyidik POLRI dan PPNS (Penyidik Pejabat Pegawai Negeri Sipil) yang tidak didasarkan atas UU No. 21/2011 yang memerintahkan OJK membuat peraturan terkait dengan kewenangan melakukan penyidikan pidana di jasa keuangan. Tindakan sewenang-wenang dari penyidik OJK dapat terjadi karena tidak sesuai dengan KUHAP, Pasal 49 ayat (3), Undang-Undang OJK, sama sekali tidak mengkaitkan KUHAP. Bahkan Pasal 49 ayat (3) huruf i mengatakan bahwa PPNS OJK berwenang meminta bantuan aparat penegak hukum lainnya. Artinya, jika tidak dibutuhkan (saat ini malah tidak pernah minta bantuan, mereka menempatkan Polri di situ) maka PPNS OJK dapat melakukan penyidikan tanpa berkoordinasi ataupun meminta bantuan penegak hukum lainnya. Lebih jauh lagi, apakah di dunia ini ada lembaga sekelas OJK yang telah nyata-nyata berhasil? Kewenangan penyidikan yang diberikan kepada lembaga superbody yang hampir tak tersentuh seperti OJK bisa dipakai secara sewenang-wenang. Apalagi tidak semua pelanggaran terhadap UU dalam praktiknya di pasar modal atau di bank pembiayaan pada umumnya harus dilanjutkan ke tahap penyidikan karena justru menghambat perdagangan efek dan mempengaruhi trust terhadap masyarakat luas. Misalnya beberapa bank begitu terdengar sedang diselidiki, bisa-bisa banyak bank berguguran (collapse) karena kepercayaan bank tersebut cepat tergerus luntur lantaran masyarakat menarik dananya dalam sekejap. Kewenangan OJK dalam melakukan penyidikan adalah kewenangan delegasi yang berasal dari adanya UU No. 21/2011 Pasal 1 angka 1, Pasal 49, Pasal 68. Kebebasan yang dimiliki oleh OJK dalam kewenangan penyidikan melekat dalam sifat independensinya dan pada akhirnya menjadikan OJK memiliki kewenangan tanpa batas dalam penyidikan tindak pidana di bidang sektor jasa keuangan. Di mana dalam hal ini sangat memungkinkan akan terjadinya benturan terhadap lembaga independen lain yang juga memiliki tingkat independensi yang sama dengan OJK dengan kewenangan penyidikan pada sektor yang sama pula. Merujuk kepada penerapan lembaga pengawas Otoritas Jasa Keuangan di negara-negara lain, maka pemerintah dapat berkaca pada penerapan JFSA di Jepang dan BaFin di Jerman yang memberikan batasan atau lingkup serta ruang dalam hal kebebasan kewenangan yang dimiliki. Serta mengambil pelajaran dari penerapan FSA di Inggris dan APRA di Australia yang mengalami kegagalan dalam hal penyelenggaraan kewenangan pengawasan jasa keuangan yang bersifat semi independen.');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `judul_buku` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `peminjam` varchar(50) NOT NULL,
  `tgl_pinjam` varchar(25) NOT NULL,
  `jatah_lama_pinjam` int NOT NULL,
  `tgl_kembali` varchar(20) DEFAULT NULL,
  `lama_pinjam` int DEFAULT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`judul_buku`, `peminjam`, `tgl_pinjam`, `jatah_lama_pinjam`, `tgl_kembali`, `lama_pinjam`, `keterangan`, `id`) VALUES
('The Psychology of Money: Timeless Lessons on Wealth, Greed, and Happiness', 'Dani Martin', '2023-11-02', 7, NULL, NULL, 'suka', 16),
('Jujutsu Kaisen 11', 'Pradisya Eka Firmansyah', '2023-10-01', 7, '2023-10-31', 30, 'suka', 17),
('10 dosa besar Soeharto ', 'Putera Nurul Alam', '2023-10-26', 7, '2023-11-02', 6, 'suka', 18);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'afifsirait@gmail.com', 'Muhammad Afifurrahman', 1, 'Staff Perpustakaan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('/img/logosmktelkom.png')}}" rel="icon">
    <title>Perpustakaanku</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
</head>

<body>
    <nav class="navbar">
        <h1>Perpustakaanku</h1>
        <div class="nav-menu">
            <a type="button" class="button" href="login" >Masuk</a>
        </div>
    </nav>
    <section class="hero-container" style="margin-top: 120px">
        <div>
            <div>
                <h1>Perpustakaanku</h1>
                <p>Literasi dan pengetahuan akan menghilangkan kegelapan.</p>
            </div>
        </div>
        <img src="{{asset('img/e-book.png')}}" alt="hero">
    </section>
    <section class="description-container">
        <div>
            <div>
                <h2> Tentang Perpustakaanku</h2>
                <p>Perpustakaanku adalah perpustakaan digital, perpustakaan digital adalah sebuah layanan yang menyediakan akses elektronik untuk membaca, mencari, mengunduh, dan meminjam buku digital atau konten lainnya seperti jurnal, artikel, dan makalah. Perpustakaan digital biasanya dilengkapi dengan sistem manajemen dan penyimpanan yang dapat mengelola konten digital secara efisien dan memudahkan aksesibilitas pengguna.</p>
            </div>
        </div>
        <img src="{{asset('img/aboutperpus.png')}}" style="width: 250px" alt="desc">
    </section>
    <h1 style="margin-left: 120px"> BUKU TERPOPULER  </h1> 
    <section class="content-container">
        <div class="card">
            <img src="{{asset('img/buku/dilan.jpeg')}}" alt="card1">
            <div class="card-body">
                <h3>Dilan 1990</h3>
                <p>Novel “Dilan : Dia Adalah Dilanku Tahun 1990” bercerita tentang kisah cinta dua remaja Bandung pada tahun 90an. Berawal dari seorang siswa bernama Dilan yang jatuh cinta dengan siswi pindahan dari SMA di Jakarta bernama Milea. Dilan memiliki beragam cara untuk mendekati dan mencuri perhatian Milea.</p>
            </div>
            <div class="card-footer">
            <a type="button" class="button" href="login" style= "margin-top: 21px">Pinjam Buku</a>
            </div>
        </div>
        <div class="card">
            <img src="{{asset('img/buku/ayah.jpeg')}}" alt="ayah">
            <div class="card-body">
                <h3>Ayah</h3>
                <p>Novel Ayah menceritakan tentang persahabatan antara tiga orang kawan, yakni Sabari, Ukun, dan Tamat. Persahabatan antar ketiganya telah cukup lama, dimulai sejak duduk di bangku sekolah dasar. Namun, ada satu hal yang membedakan di antara mereka, yakni cara mendekati wanita</p>
            </div>
            <div class="card-footer">
            <a type="button" class="button" href="login" style= "margin-top: 42px" >Pinjam Buku</a>
            </div>
        </div>
        <div class="card">
            <img src="{{asset('img/buku/marmutmerahjambu.jpg')}}" alt="card3">
            <div class="card-body">
                <h3>Marmut Merah Jambu</h3>
                <p>Marmut Merah Jambu adalah buku ke lima dari Raditya Dika yang telah resmi diterbitkan pada juni 2010. Sebagian besar dari 13 judul yang ada pada buku ini adalah kisah percintaan yang bertepuk sebelah tangan. Hampir semua cerita yang ada di dalam nya adalah pengalaman Radit atau pun dari orang terdekat Radit. Kisah cinta yang bermula dari SD sampai kuliah.</p>
            </div>
            <div class="card-footer">
            <a type="button" class="button" href="login" >Pinjam Buku</a>
            </div>
        </div>
    </section>
    <section class="what-is-container">
        <div>
            <div>
                <h1>Ayo mulai meminjam lalu baca bukumu!</h1>
            </div>
        </div>
        <img src="{{asset('img/poster.jpg')}}" alt="what-is">
    </section>
   
    <footer>
        <p><b>Arifder</b> 2020 copyright all rights reserved</p>
    </footer>

</body>

</html>
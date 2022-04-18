<html>
    <head>
    <meta charset="utf-8">
    <title>
        web prog II  Merancang template sederhana dengan codeigniter</title>
        <link rel="stylesheet" typee=”text/css” href=”<?php echo 
base_url() ?>assets/css/stylebuku.css”>
</head>
<body>
    <div id=”wrapper”>
        <header>
            <hgroup>
                <h1>RentalBuku.net</h1>
                <h3>Membuat Template Sederhana dengan 
CodeIgniter</h3>
        </hgroup>
        <nav>
                 <ul>
                     <li><a href=”<?php echo site_url('web')?>”>Home</a></li>
                     <li><a href=”<?php echo site_url('web/about')?>”>About</a></li>

                </ul>
        </nav>
        <div class=”clear”></div>
    </header>
    <section>
        <h1><?php echo $judul?></h1>
        <p align= "justify">
        >Pada pengertian codeigniter di atas 
tadi di jelaskan bahwa codeigniter menggunakan metode MVC. Apa itu
MVC? Kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih 
jauh dalam belajar codeigniter.
        </p>
        <p>
        MVC adalah teknik atau konsep yang memisahkan 
komponen utama menjadi tiga komponen yaitu model, view dan 
controller.
        </p>
        <ol type="a">
         <li>Model</li>
        <p align= "justify">
        >Model adalah kelas yang merepresentasikan atau 
memodelkan tipe data yang akan digunakan oleh aplikasi. Model juga 
dapat didefinisakn sebagai bagian penanganan yang berhubungan dengan 
pengolahan atau manipulasi database. Seperti misalnya mengambil data 
dari database, menginput dan pengolahan database lainnya. Semua 
intruksi atau fungsi yang berhubung dengan pengolahan database di 
letakkan di dalam model. Sebagai contoh, jika ingin membuat aplikasi 
untuk menghitung luas dan keliling lingkaran, maka dapat memodelkan 
objek lingkaran sebagai kelas model.
        </p>
        <li>View</li>
        <p align= "justify">
        View merupakan bagian yang menangani halaman user 
interface atau halaman yang muncul pada user(pada browser). Tampilan 
dari user interface di kumpulkan pada view untuk memisahkannya 
dengan controller dan model sehingga memudahkan web designer dalam 
melakukan pengembangan tampilan halaman website.

        </p>
        <li>Controller</li>
        <p align= "justify">
        Controller merupakan kumpulan intruksi aksi yang 
menghubungkan model dan view, jadi user tidak akan berhubungan 
dengan model secara langsung, intinya data yang tersimpan di
database (model) di ambil oleh controller dan kemudian controller 
pula yang menampilkan nya ke view. Jadi controller lah yang mengolah 
intruksi.
        </p>

        </ol>
    </section>
    <footer>
    <a href="”http://www.RentalBuku.com">Rentalbuku</a>
    </footer>
    </div>     
    </body>
    </html>
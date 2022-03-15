@extends('layouts.app')

@section('content')
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777" />
            </svg>

            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Pengertian Masa Nifas</h1>
                    <p>Masa nifas merupakan masa sesudah plasenta lahir, dan berakhir ketika alat-alat kandungan kembali seperti keadaan sebelum hamil. Masa nifas berlangsung sepanjang kira-kira 6 minggu. </p>
                    {{-- <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> --}}
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777" />
            </svg>

            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    {{-- <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> --}}
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777" />
            </svg>

            <div class="container">
                <div class="carousel-caption text-end">
                    <h1>One more for good measure.</h1>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    {{-- <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p> --}}
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<!-- Marketing messaging and featurettes
  ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                    dy=".3em">140x140</text>
            </svg>

            <h2>Pengertian Masa Nifas</h2>
            <p>Masa nifas merupakan masa sesudah plasenta lahir, dan berakhir ketika alat-alat kandungan kembali seperti keadaan sebelum hamil. Masa nifas berlangsung sepanjang kira-kira 6 minggu. Periode masa nifas ( puerperium) merupakan periode waktu sepanjang 6-8 minggu sehabis persalianan. Selama beberapa hari setelah persalinan hal yang bias terjadi pada masa nifas adalah ibu biasa mengalami pendarahan ataupun peradangan yang dapat menyebabkan kematian</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                    dy=".3em">140x140</text>
            </svg>

            <h2>Tahap Pemulihan Masa Nifas</h2>
            <p>Masa nifas seperti penjelsan diatas merupakan rangkaian masa pemulihan setelah persalinan yang dilalui oleh seorang wanita. Pengamatan pasca kehamilan harus dilakukan dengan hati-hati terhadap perubahan fisiologis yang dialami ibu dan harus melihat indikasi keadaan obsestif pada setiap tahap.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                    dy=".3em">140x140</text>
            </svg>

            <h2>Kebijakan Program Nasional Nifas</h2>
            <p>Selama ibu berada pada masa nifas, pemerintahan melakukan kebijakan yaitu minimal melakukan empat kali kunjungan yang dilakukan oleh tenaga medis upaya mengurangi terjadinya komplikasi pada masa nifas, serta menurunkan angka kematian ibu.</p>
        </div><!-- /.col-lg-4 -->

    </div><!-- /.row -->

     <div class="row">
        <div class="col-lg-6">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                    dy=".3em">140x140</text>
            </svg>

            <h2>Perawatan Masa Nifas</h2>
            <p>Perawatan masa nifas merupakan perawatan diri yang dilakukan oleh tenaga kesehatan terhadap ibu nifas maupun aktivitas perawatan yang dilakukan oleh ibu nifas itu sendiri untuk memelihara kesehatan organ-organ produksi. selama masa nifas, yakni dimulai dari akhir persalinan dan berakhir hingga kembalinya organ-organ reproduksi seperti keadaan sebelum hamil</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-6">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                    dy=".3em">140x140</text>
            </svg>

            <h2>Tanda Bahaya Pada Nifas</h2>
            <p>Tanda bahaya masa nifas adalah keadaan abnormal yang mengindikasikan adanya bahaya/komplikasi yang akan terjadi pada ibu nifas, dimana jika tidak ditangani dan dilaporkan akan sangat berbahaya bagi kesehatan ibu nifas. </p>
        </div><!-- /.col-lg-4 -->
       

    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2>Tahap Pemulihan Masa Nifas</h2>
            <p class="lead">Masa nifas seperti penjelsan diatas merupakan rangkaian masa pemulihan setelah persalinan yang dilalui oleh seorang wanita. Pengamatan pasca kehamilan harus dilakukan dengan hati-hati terhadap perubahan fisiologis yang dialami ibu dan harus melihat indikasi keadaan obsestif pada setiap tahap.</p>
            <p class="h5">
            1.	Puerperium dini<br> </p>
            <p class="lead">
            Puerperium dini merupakan kepulihan, dimana ibu di perbolehkan berdiri dan 
            berjalan, serta menjalankan aktivitsa layaknya wanita normal lainya. Dalam 
            agama islam dianggap sudah bersih dan boleh berkerja setelah 40 hari<br>
            </p>
            <p class="h5">
            2.	Puerperium intermediate <br> </p>
            <p class="lead">
            Puerperium intermediet merupakan masa kepulihan meyeluruh alat-alat 
            genitalia yang lamanya sekitar 6-8 minggu.<br>
            </p>
            <p class="h5">
            3.	Puerperium remote<br> </p>
            <p class="lead">
            Bagi ibu yang memiliki komplikasi selama kehamilan, sangat penting pada 
            tahap ini untuk memulihkan diri dan menjadi sehat dalam kondisi luar biasa. 
            Lamanya masa nifas yng jauh bagi setiap ibu adalah unik, bergantung pada
            beratnya keselitan yang dialami ibu. Kesehatan yang luar biasa dapat berlangsung 
            cukup lama, berbuln-bulan atau bahkan bertahun.
            </p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
            </svg>

        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette">Kebijakan Program Nasional Nifas
            </h2>
            <p class="lead">Selama ibu berada pada masa nifas, pemerintahan melakukan kebijakan yaitu minimal melakukan empat kali kunjungan yang dilakukan oleh tenaga medis upaya mengurangi terjadinya komplikasi pada masa nifas, serta menurunkan angka kematian ibu.(Hasibuan, 2021). Kebijakan program nasional pada masa nifas dan menyusui sebagai berikut:</p>
            <p class="lead">1.	Menilai kondisi kesehatan ibu dan bayi<br>
            2.  Melakukan pencegahan terhadap kemungkinan-mungkinan adanya gangguan kesehatan ibu nifas dan bayinya.<br>
            3.	 Mendeteksi adanya komplikasi atau masalah yang terjadi pada masa nifas. <br>
            4.	 Menangani komplikasi atau masalah yang timbul dan mengganggu kesehatan ibu nifas maupun bayinya.
</p>
        </div>
        <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
            </svg>

        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2>Perawatan Masa Nifas</h2>
            <p class="lead">Perawatan masa nifas merupakan perawatan diri yang dilakukan oleh tenaga kesehatan terhadap ibu nifas maupun aktivitas perawatan yang dilakukan oleh ibu nifas itu sendiri untuk memelihara kesehatan organ-organ produksi. selama masa nifas, yakni dimulai dari akhir persalinan dan berakhir hingga kembalinya organ-organ reproduksi seperti keadaan sebelum hamil. Kognitif dapat diukur dari pengetahuan, afektif dapat diukur dari sikap atau tanggapan dan psikimotor dapat diukur memalui tindakan (praktik)yang dilakukan.</p>
            <p class="h4">
              1.	Perawatan Perineum </p>
            <p class="lead">
            Perawatan perineum adalah upaya dalam memberikan pemenuhan kebutuhan rasa nyaman dengan cara menyehatkan daerah antara kedua paha yang dibatasi antara lubang dubur dan bagian kelamin luar pada wanita setelah melahirkan agar terhindar dari infeksi bakteri.<br>
            <p class="h5">
            a. Kebersihan Organ Reproduksi<br></p>
            <p class="lead">
            Setelah melahirkan, perineum biasanya menjadi sedikit bengkak/memar bias terjadi karena ada laserasi atau episiotomy.
            <p class="h5">
            b. Membersihkan Vagina </p>
            <p class="lead">
            Pada dasarnya kebersihan vaginapada saat nifas terdapat beberapa alasan:

            1.	Terdapat darah kotor yang keluar dari vagina<br>
            2.	Vagina berada dekat saluran buang air kecil dan buang air besar yang tiap hari di lakukan.<br>
            3.	Adanya luka di daerah perineum yang bila tertekan kotoran dapat terinfeksi. <br>
            4.	Vagina merupakan organ terbuka yang mudah dimasuki kumat untuk kemudian menjalar ke rahim. <br>
            <p class="h5">
            c. Menjaga kebersihan vagina <br> </p>
            <p class="lead">
            Langkah-langkah menjaga kebersihan vagina yang benar:<br>
            •	Setelah setiap buang air kecil dan besar, basuhlah lubang vagina dengan 
            air sampai bersih.<br>
            •	Air yang digunakan tidak perlu direbus asalkan bersih. Cuci dari depan kebelakang sampai tidak ada kotoran yang tersisa di sekitar vagina, dari urin dan feses yang mengandung bakteri dan bakteri yang dapat menyebabkan infeksi luka jahitan.<br>
            •	Vagina bias dibersihkan dengan sabun atau disinfektan karena bias berfungsi untuk menghilangkan kuman, yang terpenting jangan takut memegan daerah tersebut dan lakukan dengan hati-hati.<br>
            •	Jika ibu benar-benar tidak berani menyentuh jahitanya, uasahkan tetap bersih bisa dilakukan dengan duduk dan berendam di air disinfektan selama 10 menit. Jalankan setelah melakukan BAB atau BAK.<br><br>

            </p>
            <p class="h4">
              2.	Latihan/ Senam Nifas </p>
            <p class="lead">Salah satu cara untuk mempercepat proses yang sangat penting karena itu memerlukanperawatan yang khusus, bantuan dan pengawasan demi pulihnya kesehatan.salah satu cara untuk mempercepat involusi uterus yaitu denganmelakukan senam nifas yang bertujuan merangsang otot-otot rahim agar berfungsi secara optimal sehingga diharapkan tidak terjadi perdarahan post partum dan mengambilkan uterus pada posisi seperti semula.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
            </svg>

        </div>
    </div>

    <!-- /END THE FEATURETTES -->
    @endsection
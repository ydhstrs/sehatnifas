@extends('layouts.app')

@section('content')

<div class="container py-5 center">
    <center>
        <img src="{{ asset('storage/images/welcome_image.svg') }}" alt="Welcome image" class="img-fluid center"
            style="height: 400px" />
        <div class="container py-4">
            <h1>Sehat Nifas</h1>
            <p>Masa nifas merupakan masa sesudah plasenta lahir, dan berakhir ketika alat-alat kandungan kembali seperti
                keadaan sebelum hamil. Masa nifas berlangsung sepanjang kira-kira 6 minggu. </p>

        </div>

        <hr class="featurette-divider">
    </center>
</div>
<!-- Marketing messaging and featurettes
  ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-6">
            <img class="bd-placeholder-img rounded-circle" width="140" height="140" preserveAspectRatio="xMidYMid slice" slice" focusable="false" src="{{ asset('storage/images/pengertian.svg') }}" alt="Welcome image" class="img-fluid center"
             />

            <h2>Pengertian Masa Nifas</h2>
            <p>Masa nifas merupakan masa sesudah plasenta lahir, dan berakhir ketika alat-alat kandungan kembali seperti
                keadaan sebelum hamil. Masa nifas berlangsung sepanjang kira-kira 6 minggu. Periode masa nifas (
                puerperium) merupakan periode waktu sepanjang 6-8 minggu sehabis persalianan. Selama beberapa hari
                setelah persalinan hal yang bias terjadi pada masa nifas adalah ibu biasa mengalami pendarahan ataupun
                peradangan yang dapat menyebabkan kematian</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-6">
             <img class="bd-placeholder-img rounded-circle" width="140" height="140" preserveAspectRatio="xMidYMid slice" slice" focusable="false" src="{{ asset('storage/images/pemulihan.svg') }}" alt="Welcome image" class="img-fluid center"
             />

            <h2><a href="#tahap_pemulihan_masa_nifas"> Tahap Pemulihan Masa Nifas </a></h2> 
            <p>Masa nifas seperti penjelsan diatas merupakan rangkaian masa pemulihan setelah persalinan yang dilalui
                oleh seorang wanita. Pengamatan pasca kehamilan harus dilakukan dengan hati-hati terhadap perubahan
                fisiologis yang dialami ibu dan harus melihat indikasi keadaan obsestif pada setiap tahap.</p>
        </div><!-- /.col-lg-4 -->
        
    </div><!-- /.row -->

    <div class="row">
        <div class="col-lg-6">
            <img class="bd-placeholder-img rounded-circle" width="140" height="140" preserveAspectRatio="xMidYMid slice" slice" focusable="false" src="{{ asset('storage/images/nass.svg') }}" alt="Welcome image" class="img-fluid center"
             />

            <h2> <a href="#program"> Kebijakan Program Nasional Nifas </a></h2>
            <p>Selama ibu berada pada masa nifas, pemerintahan melakukan kebijakan yaitu minimal melakukan empat kali
                kunjungan yang dilakukan oleh tenaga medis upaya mengurangi terjadinya komplikasi pada masa nifas, serta
                menurunkan angka kematian ibu.</p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-6">
                 <img class="bd-placeholder-img rounded-circle" width="140" height="140" preserveAspectRatio="xMidYMid slice" slice" focusable="false" src="{{ asset('storage/images/workout.svg') }}" alt="Welcome image" class="img-fluid center"
             />
            <h2> <a href="#perawatan_masa_nifas">Perawatan Masa Nifas </a></h2>
            <p>Perawatan masa nifas merupakan perawatan diri yang dilakukan oleh tenaga kesehatan terhadap ibu nifas
                maupun aktivitas perawatan yang dilakukan oleh ibu nifas itu sendiri untuk memelihara kesehatan
                organ-organ produksi. selama masa nifas, yakni dimulai dari akhir persalinan dan berakhir hingga
                kembalinya organ-organ reproduksi seperti keadaan sebelum hamil</p>
        </div><!-- /.col-lg-4 -->



    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette" id="tahap_pemulihan_masa_nifas">
        <div class="col-md-7">
            <h2>Tahap Pemulihan Masa Nifas</h2>
            <p class="lead">Masa nifas seperti penjelsan diatas merupakan rangkaian masa pemulihan setelah persalinan
                yang dilalui oleh seorang wanita. Pengamatan pasca kehamilan harus dilakukan dengan hati-hati terhadap
                perubahan fisiologis yang dialami ibu dan harus melihat indikasi keadaan obsestif pada setiap tahap.</p>
            <p class="h5">
                1. Puerperium dini<br> </p>
            <p class="lead">
                Puerperium dini merupakan kepulihan, dimana ibu di perbolehkan berdiri dan
                berjalan, serta menjalankan aktivitsa layaknya wanita normal lainya. Dalam
                agama islam dianggap sudah bersih dan boleh berkerja setelah 40 hari<br>
            </p>
            <p class="h5">
                2. Puerperium intermediate <br> </p>
            <p class="lead">
                Puerperium intermediet merupakan masa kepulihan meyeluruh alat-alat
                genitalia yang lamanya sekitar 6-8 minggu.<br>
            </p>
            <p class="h5">
                3. Puerperium remote<br> </p>
            <p class="lead">
                Bagi ibu yang memiliki komplikasi selama kehamilan, sangat penting pada
                tahap ini untuk memulihkan diri dan menjadi sehat dalam kondisi luar biasa.
                Lamanya masa nifas yng jauh bagi setiap ibu adalah unik, bergantung pada
                beratnya keselitan yang dialami ibu. Kesehatan yang luar biasa dapat berlangsung
                cukup lama, berbuln-bulan atau bahkan bertahun. 
            </p>
        </div>
        <div class="col-md-5">
            
            <iframe width="500" height="500" preserveAspectRatio="xMidYMid slice" src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=IVsTPOqZ8NM&loop=1">
            </iframe>

        </div>
    </div>

    <hr class="featurette-divider">
    <div class="row featurette" id="program">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette">Kebijakan Program Nasional Nifas
            </h2>
            <p class="lead">Selama ibu berada pada masa nifas, pemerintahan melakukan kebijakan yaitu minimal melakukan
                empat kali kunjungan yang dilakukan oleh tenaga medis upaya mengurangi terjadinya komplikasi pada masa
                nifas, serta menurunkan angka kematian ibu.(Hasibuan, 2021). Kebijakan program nasional pada masa nifas
                dan menyusui sebagai berikut:</p>
            <p class="lead">1. Menilai kondisi kesehatan ibu dan bayi<br>
                2. Melakukan pencegahan terhadap kemungkinan-mungkinan adanya gangguan kesehatan ibu nifas dan
                bayinya.<br>
                3. Mendeteksi adanya komplikasi atau masalah yang terjadi pada masa nifas. <br>
                4. Menangani komplikasi atau masalah yang timbul dan mengganggu kesehatan ibu nifas maupun bayinya.
            </p>
        </div>
        <div class="col-md-5 order-md-1">
             <iframe width="450" height="450" preserveAspectRatio="xMidYMid slice" src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=-xDlohsipHo&loop=1">
            </iframe>

        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette" id="perawatan_masa_nifas">
        <div class="col-md-7">
            <h2>Perawatan Masa Nifas</h2>
            <p class="lead">Perawatan masa nifas merupakan perawatan diri yang dilakukan oleh tenaga kesehatan terhadap
                ibu nifas maupun aktivitas perawatan yang dilakukan oleh ibu nifas itu sendiri untuk memelihara
                kesehatan organ-organ produksi. selama masa nifas, yakni dimulai dari akhir persalinan dan berakhir
                hingga kembalinya organ-organ reproduksi seperti keadaan sebelum hamil. Kognitif dapat diukur dari
                pengetahuan, afektif dapat diukur dari sikap atau tanggapan dan psikimotor dapat diukur memalui tindakan
                (praktik)yang dilakukan.</p>
            <p class="h4">
                1. Perawatan Perineum </p>
            <p class="lead">
                Perawatan perineum adalah upaya dalam memberikan pemenuhan kebutuhan rasa nyaman dengan cara menyehatkan
                daerah antara kedua paha yang dibatasi antara lubang dubur dan bagian kelamin luar pada wanita setelah
                melahirkan agar terhindar dari infeksi bakteri.<br>
            <p class="h5">
                a. Kebersihan Organ Reproduksi<br></p>
            <p class="lead">
                Setelah melahirkan, perineum biasanya menjadi sedikit bengkak/memar bias terjadi karena ada laserasi
                atau episiotomy.
            <p class="h5">
                b. Membersihkan Vagina </p>
            <p class="lead">
                Pada dasarnya kebersihan vaginapada saat nifas terdapat beberapa alasan:

                1. Terdapat darah kotor yang keluar dari vagina<br>
                2. Vagina berada dekat saluran buang air kecil dan buang air besar yang tiap hari di lakukan.<br>
                3. Adanya luka di daerah perineum yang bila tertekan kotoran dapat terinfeksi. <br>
                4. Vagina merupakan organ terbuka yang mudah dimasuki kumat untuk kemudian menjalar ke rahim. <br>
            <p class="h5">
                c. Menjaga kebersihan vagina <br> </p>
            <p class="lead">
                Langkah-langkah menjaga kebersihan vagina yang benar:<br>
                • Setelah setiap buang air kecil dan besar, basuhlah lubang vagina dengan
                air sampai bersih.<br>
                • Air yang digunakan tidak perlu direbus asalkan bersih. Cuci dari depan kebelakang sampai tidak ada
                kotoran yang tersisa di sekitar vagina, dari urin dan feses yang mengandung bakteri dan bakteri yang
                dapat menyebabkan infeksi luka jahitan.<br>
                • Vagina bias dibersihkan dengan sabun atau disinfektan karena bias berfungsi untuk menghilangkan kuman,
                yang terpenting jangan takut memegan daerah tersebut dan lakukan dengan hati-hati.<br>
                • Jika ibu benar-benar tidak berani menyentuh jahitanya, uasahkan tetap bersih bisa dilakukan dengan
                duduk dan berendam di air disinfektan selama 10 menit. Jalankan setelah melakukan BAB atau BAK.<br><br>

            </p>
            <p class="h4">
                2. Latihan/ Senam Nifas </p>
            <p class="lead">Salah satu cara untuk mempercepat proses yang sangat penting karena itu memerlukanperawatan
                yang khusus, bantuan dan pengawasan demi pulihnya kesehatan.salah satu cara untuk mempercepat involusi
                uterus yaitu denganmelakukan senam nifas yang bertujuan merangsang otot-otot rahim agar berfungsi secara
                optimal sehingga diharapkan tidak terjadi perdarahan post partum dan mengambilkan uterus pada posisi
                seperti semula. Latihan atau exercise tidak hanya bermanfaat bagi ibu nifas untuk merangsang otot rahim, latihan peregangan otot juga dianjurkan pada remaja wanita yang mengalami dismenorhea.
            </p>
            <p class="lead">
                Abdominal stretching Exercisemerupakan suatu latihan peregangan otot terutama pada perut yang dilakukan selama 10 menit. Latihan ini dirangcang untuk meningkatkan kekuatan oyot, daya tahan dan fleksibilitas otot, sehingga diharapkan dapat menurunkan nyeri haid (disminore) pada wanita (mindarsih, 2020). Senam nifas jika dilakukan setiap hari bermanfaat untuk mengencangkan otot perut dan mengurangi keluhan sakit punggung ibu nifas.
            </p>
            <p class="h5">
                1. Tujuan Senam Nifas
            </p>
            <p class="lead">
                a.	 Meningkatkan sirkulasi darah, sehingga mencegah pembentukan bekuan darah ( thrombosis)<br>
                b.	 Mengencangkan dan meningkatkan tonus perut, hubungan intim, otot sekitar vagina dan otot dasar panggul serta otot kaki.<br>
                c.	 Membantu ibu sembuh dari ketergantungan sakit menjadi sehat.

            </p>
            <p class="h5">
                2. Kontrak indikasi senam nifas, ibu yang mengalami komplikasi nifas tidak di  perbolehkan melakukan senam. 
            </p>
            <p class="h5">
                3. Waktu senam nifas ini dilakukan saat ibu benar-benar pulih dan tidak ada koplikasi obstetric atau penyakit masa nifas ( seperti tekanan darah tinggi, pasca kejang , dan demam)
            </p>
            <p class="lead">
               Latihan senam nifas hari 1 <br>
                Sebaiknya SENAM NIFAS dikerjakan dalam 24 jam pertama apabila ibu bersalin normal dalam 6 jam pertama biasanya ibu yang kelelahan karena baru saja selesai melahirkan, maka senam nifas ini bertujuan untuk mengurangi rasa lelah yang dialami ibu tersebut, hal-hal yang harus dianjurkan sebagai berikut: <br>
                1.	Latihan pernafasan iga-iga dengan kedua punggung jari tangan berada pada tulang iga-iga agar ibu merasakan gerekan dari iga-iga tersebut berkembang lalu dengan cara keluar nafasdari mulut, kemudian tarik nafas panjang, tiup nafas, lakukan 3x keluar nafas 3z tarik nafas. <br>
                2. Latihan kaki yaitu kedua lengan berada disamping tubuh dan kedua kaki diluruskan kemudia buat gerakan plantar fleksi, dorso fleksi masing-masing 3x gerekan lalu dianjurkan dengan kedua telapak kaki berhadapan lalu dibuka masing-masing 3x gerak selanjutnya buatlah gerakan sircumdaksi keluar dan kedalam masing-masing 3x.<br>
                3. Latihan otot perut dan orus dilakukan ringan otot pantat , latihan otot perut dan otot pantat harus dilakukan ringan yaitu dengan setengah gerakan saja dimulai dengan gerakan kompeskan perut, masukan pantat, dan lepaska buatlah 3x gerakan.<br>


            </p>
            <p class="lead">
            Latihan SENAM NIFAS hari ke 2 <br>
            1. Latihan hari 1 diulang kemudian ditambah dengan latihan pernafasan perut yaitu kedua telapak tangan berada diperut lalu tarik nafas dalam lewat hidung, kembungkan perut, lalu tiup nafas dan kompeskan perut lakukan gerakan ini 3x.<br>
            2. Latihan otot dasar panggul posisi kedua lengan lurus disamping tubuh, kedua kali ditekuk, lalu buatlah gerakan kempeskan perut masukan pantat tahan sampai 3 hitungan lalu lepaskan, ulangi gerakan tadi 3-4x <br>
            3. Latihan otot panggul posisi tidur terlentang kedua lengan disamping tubuh kedua kaki ditekuk laku buatlah gerakan kompeskan perut, masukan pantat, angkat badan sedikit dan tahan sebentar lalu turunkan lakukan gerakan ini 3-4x setiap kali latihan <br>
            4. Latihan otot perut dengan angkat kepala posis tidur terlentang kedua kaki ditekuk, lalu angkat kepala dan badan sentuhkan tangan kanan pada lutut kiti turunkan kepala lalu angkat lagi kepala dan badan sentuhkan tangan kiri kelutut kanan, lakukan gerakan ini masing-masing 3-4x kali latihan.<br>
            5. Latihan mengecilkan rahim ibu tidur dengan posisi tengkurep dan perut diganjal bantal 2 buah dan punggung kaki diganjal dengan 1 bantal lalu kepala menoleh kekiriatau kekanan lakukan sehabis makan siang dan biarkan sampai ibu tertidur.<br>
            6. Latihan sikap baik posisi tidur terlentang kedua lengan disamping tubuh dan kaki lurus kedua terlapak kaki tegak, lakukan gerakan tarik belikat mendekati satu sama lain, kemudian kedua kaki dorong dan kepala tengang tahan sebentar lalu lepaskan, ulangi 3-4x gerakan setiap kali latihan.<br>
            </p>    
            <p></p>

            <p class="h4">
                3.	Perawatan Payudara
            </p>
            <p class="lead">
                Pembengkakan payudara adalah akibat bendungan yang terjadi karena penyempitan duktus lakitiferus atau kelenjar tidak dikosongkan secara sempurna sehingga panyudara terasa lebih penuh, panas, keras, dan nyeri, disertai dengan kenaikan suhu tubuh.Menurut ( nasution, dkk,.2018) perawatan payudara harus dilalukan segera setelah proses persalinan bayi (1-2 hari), dan ibu harus melakukannya secara teratur. Dengan memberikan rangsangan pada otot-otot payudara akan membantu merangsang hormone prolaktin untuk membantu produksi ASI. Untuk mempercepat proses pengeluaran ASI diperlukan proses perawatan panyudara pada ibu nifas. beberapa perawatan yang dilakukan sering termasuk pijak oksitosin, akupresur dan akupunkur. Namun proses perawatan payudara tentunya tidak terlepas dari perkembangan teknologi di bidang kesehatan sehingga akan muncul beberapa inovasi terbaru alam perkembangan perawatan payudara. sehingga setiap ibu nifas dapat melakukan perawatan payudara secara mandiri (Nasution,dkk.,2018).Perawatan payudara berkaitan dengan proses laktasi dan menyusui. Laktasi dimulai pada semua wanita dengan perubahan hormone saat ibu melahirkan. Keputusan ibu apakah memilih menyusui atau tidak sangat dipengaruhi oleh dukungan keluarga dan kebiasanya serta budaya masyarakat sekitarnya. Wanita yang menyusui berespon terhadap bayi yang disusuinya dan mentimul alveoli untuk memproduksi ASI. Pengkajian panyudara pada periode awal pasca iritasijaringan payudara, adanya kolostrum. Apakah payudara terisi air susu dan adanya sumbatan duktus, kongesti dan tanda-tanda mastitis potensial (Nasution, S.S.2018).
            </p>
            <p class="lead">
                Teknik menyusui yang benar adalah cara memberikan ASI kepada bayi dengan perletakan dan posisi ibu dan bayi dengan benar. Untuk mencapai keberhasilan menyusui diperlukan pengetahuan mengenai teknik-teknik menyususi yang benar. proses menyususi yang perlu dilakukan dan ditaati ibu menyusui pasca melahirkan, paling sedikit enam bulan. Ibu menyusui perlu manajemen diri yang kuat dalam sadar diri dan determinasi diri. Pengetahuan dan sikap ibu menyusui tentang manajemen laktasi sangat mempengaruhi ibu menyusui dalam pemberian ASI,dimana laktasi merupakan keseluruhan proses menyusui mulai dari ASI diproduksi sampai proses bayi menghisap dan menelan ASI(keni, dkk.,2020)
            </p>
            <p class="lead">
                Perawatan payudara adalah suatu tindakan untuk merawat payudara terutama pada masa nifas (masa menyusui) untuk melancarkan pengeluaran Asi. Perawatan payudara pasca persalianan adalah lanjutan perawatan payudara semasa hamil. Manfaatnya yaitu Melancarakan pengeluaran Asi, merangsang produksi Asi, mencegah bendunganpayudara dan mengurangi resiko luka pada saat menyusui.
            </p>
            <p class="h5">
                1. Cuci tangan sebelum mases. Lalu tuangkan minyak kedua belah telapak tangan secukupnya. Pengurutan dimulai dari ujung jari, caranya: <br>
                2. Sokong payudara kiri dengan tangan kiri lakukan gerakan kecil dengan 2 atau 3 jari tangan mulai dari pangkal payudara dan berakhir dengan gerakan spiral dengan daerah putting susu. <br>
                3. Selanjutnya dilakukan buatlah gerakan memutar sambil menekan dari pangkal payudara dan berakhir pada putting susu diseluruh dibagian payudara. Lakukan gerakan seperti ini pada payudara sebelah kanan <br>
                4. Gerakan selanjutnya letakan kedua telapak tangan diantara kedua payudara. Urutlah dari tengah ke atas sambil mengangkat kedua payudara dan lepaskan keduanya perlahan. Lakukan gerakan ini ±30 kali. <br>
                5. Cobalah posisi tangan paralel. Sanggah payudara dengan satu tangan sedangkan tangan lain mengurut payudara dari sisi kelingking dari arah pangkal payudara kea rah putting usus. Lakukan gerakan ini selama 30 kali. <br>

            </p>
            <p class="lead">
                Apabila payudara bengkak atau lancet maka lakukan perawatan payudara dapat dilakuakn dengan cara :
            </p>
            <p class="h5">
                1. Menjaga payudara tetap bersih dan kering, terutama puting susu <br>
                2. Menggunakan BH yang menyokong payudara <br>
                3. Mengistirahatkan payudara apabila lecet sangat berat selama 24 jam <br>
                4. Meminum paracetamol setiap 4-5 jam untuk menghilangkan nyeri <br>
                5. Apabila payudara bengkak akibat bendungan Asi, lakukan pengempresan payudara dengan menggunakan kain basah dan hangat selama 5 menit, mengurut payudara dari pangkal menuju putting mrnggunakan sisir untuk mengurut payudara dengan arah Z menuju putting, keluarkan susu sebagian dari bagian depan payudara sehingga putting susu menjadi lunak bayi di susuisetiap 2-3 jam dan apabila tidak dapat menghisap seluruh Asi sisanya dikeluarkan dengan tangan baru meletakkan kain dingin pada payudara setelah menyusi, payudara dikeringkan (mardiatun, 2013).<br>
            </p>
            <p></p>
            <p></p>

            <p class="h4">
                4.	Meningkatkan Kebutuhan Nutrisi
            </p>
            <p class="lead">
                Kebutuhan nutrisi seharusnya dimulai sejak mas kehamilan untuk menjaga kondisi kesehatan janin dan juga sang ibu. Nutrisi adekuat pada masa kehamilan diperlukan untuk dapat mengurangi resiko komplikasi pada ibu, membantu dalam pertumbuhan jaringan dan meningkatkan berat badan janin secaraoptimal sehingga bayi dapat lahir secara sehat. Kebutuhan nutrisi sangat penting selama proses pemulihan pasca melahirkan, kebutuhan nutrisi yang mencukupi dapar memenuhi asupan ASI dan juga mempercepat proses penyembuhan pada ibu (nadrah, 2020).
            </p>
             <p class="lead">
                Pada ibu nifas sangat memerlukan pemenuhan kebutuhan nutrisi dalam meningkatkan pemulihan kondisi yang baik setelah melahirkan. Makanan yang di komsumsi saat masa nifas adalah jenis makan yang mengandung empat sehat lima sempurna diantaranya ikan, telur, daging, susu, air, sayur, nasi dan buah-buahan.
            </p>
            <p class="lead">
               Kebutuhan gizi saat nifas mengalami peningkatan. Dimana asupan kalori per hari mengalami peningkatan mencapai 2700 kalori dan asupan cairan ditingkatkan mencapai 3000 ml ( susu 1000ml) per harinya. Peningkatan asupan zat gizi tersebut dibutuhkan untuk penyembuhan luka dan kebutuhan laktasi(rahmawati,2017).
            </p>
            <p class="h5">
                1. Mengkonsumsi tambahan 500 kalori/hari <br><br>
                2. Diet seimbang ( cukup protein, mineral dan vitamin) ada pun protein baik hewani seperti daging ,ikan, telur, hati, otak, usus, limfa, udang, kepiting maupun nabati seperti tahu, tempe, kacang-kacangan. Mineral seperti sumber mineral: ikan, daging banyak mengandung kalsium, fosfor, zat besi , seng dan yodium. Vitamin yang cukup yang bersumber dari hewani dan nabati. <br><br>
                3. Minum minimal 3 liter/hari dianjurkan ibu minum setiap kali menyusui. <br><br>
                4. Suplemen besi dimimum setidaknya selama 3 bulan pascasalin, terutama di daerah dengan prevalensi pentingnya ASI esklusif. <br><br>
                5. Suplemen vitamin A sebanyak 1 kapsul 200.000 IU diminum segera setelah persalinan dan 1 kapsul 200.000 IU diminum 24 jam kemudian.<br><br>
            </p>
            <p class="h4">
                5.	Eliminasi
            </p>
            <p class="lead">
                Pengisin kandung kemih sering terjadi dan pengosongan spontan terhambat retensi urin, istensi berlebihan, fungsi kandungan kemih terganggu, infeksi. Miski normal dalam 2-6 jam PP dan setiap 3-4 jam. Jika belum berkemih OK penekanan sfingter, spasme karena iritasi m. spincter ani, edema KK, hematoma traktus genetalis  ambulasi ke kandung kemih. Tidak BAK dalam 24 jam kateterisasi (resiko ISK >> bakteriuri 40%) BAB harus dilakukan 3-4 hari PP jika tidak  laksan atau parafin/suppositoria. Ambulasi dini dan diet dapat mencegah konstipasi. Agar BAB teratur: diet teratur, pemberian cairan yang banyak, latihan dan olahraga(sukma,2017).
            </p>
            <p class="h4">
                6. Istirahat
            </p>
            <p class="lead">
               Mobilisasi dini adalah mobilisasi segera setelah melahirkan dengan membimbing ibu untuk bangun dari tempat tidurnya. Anjurkan ibu untuk memulai mobilisasi dengan miring kanan/kiri, duduk kemudian berjalan . mobilisasi dini ini dilakukan secara perlahan namum meningkat secara berangsur-angsur mulai dari jalan-jalan ringan dari jam ke jam setelah proses persalinan sampai hitungan hari pasien dapat melakukannya secara sendiri tanpa bantuan pendamping. Ibu harus istirahat tidur telentang selama 8 jam pasca persalinan. kemungkinan boleh miring kekanan kekiri untuk mencegah terjadinya thrombosis dan trombo emboli. Pada hari kedua diperbolehkan duduk, hari ketiga berjalan-jalan dan hari keempat atau kelima sudah diperbolehkan pulang. Keuntungan dari mobilisasi dini adalah melancarkan pengeluaran lochea, mengurangi infeksi purperium, mempercepat involusi alat kandungan, melancarkan fungsi alat gastrointestinal dan alat perkemihan, meningkatkan kelancaran peredaran darah sehingga mempercepat fungsi ASI dan pengeluaran sisa metabolisme (Nasution, S.S, 2018).Pada ibu post partum membutuhkan istirahat dan tidur yang cukup berguna untuk memperlancar keluarnya ASI, mempercepat proses involusi uterus, serta memulihkan keadaan setelah hamil dan melahirkan agar dapat menjalani aktivitas sehari-hari. Kebutuhan istirahat ibu menyusui 8 jam perhari melalui istirahat siang dan malam (novitasari, dkk 2018).
            </p>
        </div>

            <div class="col-md-5">
            
                <iframe width="500" height="500" preserveAspectRatio="xMidYMid slice" src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=hyIvYTLxOFQ&loop=1">
                </iframe>

            </div>

   

    <!-- /END THE FEATURETTES -->
    @endsection
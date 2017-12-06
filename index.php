<?php 
    $login = "";
    $email = "";
    $token = "";
    if(isset($_GET['login'])){
        $login = $_GET['login'];
    }
    if(isset($_GET['email'])){
        $email = $_GET['email'];
    }
    if(isset($_GET['token'])){
        $token = rawurldecode($_GET['token']);
        $token = str_replace(" ", "+", $token);
    }
?>
<!-- <html lang="en" class="no-js"> -->
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kejar Si Merah | Poin Seru - Bank OCBC NISP</title>
    <meta name="description" content="Saatnya melaju di depan dan mencuri semua perhatian dengan menjadi yang pertama memiliki Mazda MX-5 RF. Tanpa diundi di Poin Seru OCBC NISP. Di sini kamu bisa dapat rahasia mudah untuk #KejarSiMerah. Plus update info di Facebook, Twitter, Youtube & Instagram dengan search hashtag #KejarSiMerah" />
    <meta name="keywords" content="Mazda MX-5 RF, poin, seru, poinseru, ocbc, ocbc nisp, merah, kejar, bank, tanpa diundi, menangkan, poin terbanyak" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="http://ndesaintheme.com/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/lightgallery.css" />
    <link rel="stylesheet" type="text/css" href="css/slicknav.css" />
    <link rel="stylesheet" type="text/css" href="css/linier.css" />
    <link rel="stylesheet" type="text/css" href="css/themify-icons.css" />
    <link rel="stylesheet" type="text/css" href="css/justifiedGallery.css" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/style-testi.css">
    <link rel="stylesheet" type="text/css" href="magnific-popup/magnific-popup.min.css">
    <!-- Resource style -->
    <script src="js/modernizr.js"></script>
    <script src="js/jquery.js"></script>
    <!-- Modernizr -->
    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
</head>
<!-- <i class="fa fa-plus" aria-hidden="true"></i> -->
<body class="demo-5">
    <div id="container" class="container-cont intro-effect-sidefixed">
        <!-- Top Navigation -->
        <div class="codrops-top clearfix">
            <span class="logo-rpm"><img alt="logo" src="img/logo.png"></span>
            <ul class="main-left-nav" id="menu">
                <li>
                	<a href="https://www.poinseru.com/" target="_blank">HOME</a>
                </li>
                <li>
                	<a href="https://www.poinseru.com/kejarsimerah" target="_blank">KEJARSIMERAH</a>
                </li>
                <li>
                	<a href="javascript:void(0);" class="parent">POIN SERU <i class="ti-nav-menus"></i></a>
                	<div class="child">
                		<a href="https://www.poinseru.com/page/tentang-poin-seru/" target="_blank">Tentang Poin Seru</a>
                		<a href="https://www.poinseru.com/page/cara-mendapatkan-bonus-poin/" target="_blank">Cara Mendapatkan Bonus Poin</a>
                		<a href="https://www.poinseru.com/page/terms-conditions/" target="_blank">Syarat dan Ketentuan</a>
                		<a href="https://www.poinseru.com/berita-seru/" target="_blank">Berita Seru</a>
                		<a href="https://www.poinseru.com/ajak-teman/" target="_blank">Ajak Teman</a>
                	</div>
                </li>
                <li>
                	<a href="javascript:void(0);" class="parent">AKTIVITAS SERU <i class="ti-nav-menus"></i></a>
                	<div class="child">
                		<a href="https://www.poinseru.com/page/hadiah-utama/" target="_blank">Hadiah Utama</a>
                		<a href="https://www.poinseru.com/lelang/" target="_blank">Lelang Poin</a>
                		<a href="https://www.poinseru.com/sureprize/" target="_blank">SurePrize</a>
                		<a href="https://www.poinseru.com/page/spin-win/" target="_blank">Spin & Win</a>
                	</div>
                </li>
                <li>
                	<a href="javascript:void(0);" class="parent">PRODUK SERU <i class="ti-nav-menus"></i></a>
                	<div class="child">
                		<a href="https://www.poinseru.com/page/tanda-360-plus/" target="_blank">Tanda 360 Plus</a>
                		<a href="https://www.poinseru.com/page/tanda-junior/" target="_blank">Tanda Junior</a>
                		<a href="https://www.poinseru.com/page/taka/" target="_blank">Taka</a>
                		<a href="https://www.poinseru.com/page/deposito-online/" target="_blank">Deposito Online</a>
                		<a href="https://www.poinseru.com/page/reksadana-online/" target="_blank">Reksa Dana Online</a>
                	</div>
                </li>
                <?php
                    if($login=="false"){
                ?>
                        <li>
                        	<a href="https://www.poinseru.com/user/login/" target="_blank">LOGIN</a>
                        </li>
                <?php
                    }
                ?>
                <!-- <li><a href="#home">Home</a></li>
                <li><a href="#kejar">#KejarSiMerah</a></li>
                <li><a href="#poinseru">#Poinseru</a></li>
                <li><a href="#price">#BerburuPoinseru</a></li>
                <li class="register"><a href="https://www.poinseru.com/user/register/">Register</a></li> -->
            </ul>
            <ul class="sub-nav">
            </ul>
        </div>
        <!-- End of Top Navigation -->
        <!-- Image slider -->
        <header id="home" class="header">
            <div class="bg-img fadein">
                <img src="img/Mazda-Slide-1.jpg" alt="Background Image" />
                <img src="img/Mazda-Slide-2.jpg" alt="Background Image" />
            </div>
        </header>
        <!-- End ofImage Slider -->
        <button class="trigger bounce" data-info="Scroll Down"><span>Trigger</span></button>
        <!-- Content Wrapper -->
        <div class="content">
            <div class="title">
                <h1><span>#KejarSiMerah</span> hanya dengan menabung dan transaksi seperti biasa. </h1>
                <br>
                <p class="subline">Saatnya melaju di depan dan mencuri semua perhatian dengan menjadi yang pertama memenangkan Mazda MX-5 RF secara gratis dan tanpa diundi. Cukup dengan menabung dan transaksi seperti biasa di Bank OCBC NISP.</p>
                <p class="subline">Di sini kamu bisa mendapatkan cara-cara untuk #KejarSiMerah. Dapatkan info lainnya di <a href="https://www.facebook.com/PoinSeru" target="_blank">Facebook</a>, <a href="https://twitter.com/PoinSeru" target="_blank">Twitter</a>, <a href="https://youtube.com/PoinSeru" target="_blank">Youtube</a> & <a href="https://www.instagram.com/poinseru" target="_blank">Instagram</a> dengan hashtag #KejarSiMerah.</p>
                <p><img class="car-image" alt="car image" src="img/main.png"></p>

                <!-- <div class="inline-popups">
                    <a href="#popup_02" data-effect="mfp-zoom-in" class="btn btn-custom btn-xl btn-popups" data-type="CaraSiPintar">Login</a>
                    <a href="#popup_03" data-effect="mfp-zoom-in" class="btn btn-custom btn-xl btn-popups" data-type="CaraSiPintar">Terima Kasih</a>
                </div> -->
            </div>
            <div class="container-fluid fluid-reset">
                <!-- Gallery Section -->
                <section id="kejar">
                <!-- Home Section -->
                    <div class="row">
                        <div class="somefact-title">
                            <h2><span>#KejarSiMerah</span></h2>
                            <h1>Mazda MX-5 RF; stylish, bold and provocative <br/>
                            sekaligus smart dengan fitur-fitur canggih.</h1>
                        </div>
                        <br>
                        <div class="text-center top-space">
                            <a href="javascript:void(0);" class="show-btn btn btn-custom no-margin btn-xl">Info Selengkapnya </a>
                        </div>
                        <br>
                        <br>                    
                    </div>
                </section>

                <div class="hide_content">
                    <section>
                        <div class="row">
                            <div class="col-md-12 wrap-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="media">
                                            <div class="media-body knob-circle">
                                                <img src="./img/kodo.jpg" style="width: 100%;">
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-body knob-circle">
                                                <h4 class="media-heading"><span>KODO Design</span></h4>
                                                <p>Dirancang tampil sederhana namun tetap mengisyaratkan nuansa elegan di setiap lekukannya. Dilengkapi retractable roof untuk pengalaman berkendara bebas dengan udara terbuka.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="media">
                                            <div class="media-body knob-circle">
                                                <img src="./img/skyactiv.jpg" style="width: 100%;">
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-body knob-circle">
                                                <h4 class="media-heading"><span>SkyActiv Technology</span></h4>
                                                <p>Teknologi SKYACTIV menjadikan bahan bakar irit, meningkatkan performa power steering dan suspensi elektrik, serta memberi distribusi berat yang ideal dan titik gravitasi rendah.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="media">
                                            <div class="media-body knob-circle">
                                                <img src="./img/mzd.jpg" style="width: 100%;">
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-body knob-circle">
                                                <h4 class="media-heading"><span>MZD-Connect</span></h4>
                                                <p>Mengusung teknologi MZD Connect yang menjadikannya terhubung dengan semua elemen digital, seperti online music, media sosial, semua pesan singkat dari smartphone, dan lainnya.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="media">
                                            <div class="media-body knob-circle">
                                                <img src="./img/safety.jpg" style="width: 100%;">
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-body knob-circle">
                                                <h4 class="media-heading"><span>Safety Technology</span></h4>
                                                <p class="">Diciptakan untuk memberi keamanan maksimal dalam berkendara dengan inovasi i-ACTIVSENSE yang mampu mendeteksi potensi bahaya sehingga mengurangi resiko terjadinya kecelakaan.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Home Section -->
                        <br>
                        <br>
                    </section>
                    <!-- <section id="gallery">
                        <div class="row">
                            <div class="col-md-12 wrap-content">
                                <div id="mygallery" class="lightbox">
                                    <a href="img/01.jpg">
                                        <img alt="Dashboard" src="img/01.jpg" />
                                    </a>
                                    <a href="img/03.jpg">
                                        <img alt="image 01" src="img/03.jpg" />
                                    </a>
                                    <a href="img/02.jpg">
                                        <img alt="image 01" src="img/02.jpg" />
                                    </a>
                                    <a href="img/04.jpg">
                                        <img alt="image 01" src="img/04.jpg" />
                                    </a>
                                    <a href="img/05.jpg">
                                        <img alt="image 01" src="img/05.jpg" />
                                    </a>
                                    <a href="img/06.jpg">
                                        <img alt="image 01" src="img/06.jpg" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section> -->
                    <br>
                    <br>
                    <hr>
                    <br>
                    <!-- End of Gallery Section -->
                </div>
                <br>
                <!-- Specification -->
                <section id="poinseru">
                    <div class="row">
                        <div class="somefact-title">
                            <h2><span>#PoinSeru</span></h2>
                            <h1>Selain Mazda MX-5 RF, ada banyak hadiah luar biasa <br/> yang bisa dimenangkan.</h1>
                        </div>
                        <br>
                        <div class="text-center top-space">
                            <a href="javascript:void(0);" class="show-btn-2 btn btn-custom no-margin btn-xl">Info Selengkapnya </a>
                        </div>
                        <br>
                        <div class="hide_content_2">
                            <div class="row">
                                <div class="col-md-12 wrap-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="media">
                                                <div class="media-body knob-circle">
                                                    <h4 class="media-heading"><span>Hadiah Utama</span></h4>
                                                    <p>Nasabah dengan Poin Seru tertinggi akan mendapat Hadiah Utama Mazda MX-5 RF tanpa diundi. Nasabah dengan Poin Seru tertinggi ke-2 dan ke-3 masing-masing akan mendapat 1 (satu) unit Vespa Piaggio.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="media">
                                                <div class="media-body knob-circle">
                                                    <h4 class="media-heading"><span>Lelang Poin</span></h4>
                                                    <p>Hanya dengan melelangkan Poin, kamu juga bisa mendapatkan hadiah seru lainnya mulai dari voucher belanja bernilai jutaan, gadget, hingga sepeda motor.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="media">
                                                <div class="media-body knob-circle">
                                                    <h4 class="media-heading"><span>SurePrize</span></h4>
                                                    <p>Dapatkan kesempatan memenangkan hadiah kejutan seperti gadget terkini atau voucher belanja bernilai jutaan rupiah dengan mengikuti kegiatan SurePrize.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="media">
                                                <div class="media-body knob-circle">
                                                    <h4 class="media-heading"><span>Spin & Win</span></h4>
                                                    <p>Dapatkan 1 token setiap mengumpulkan 5.000 Poin Seru (berlaku kelipatan) untuk ikutan Spin & Win dan mendapatkan bonus hingga 10.000 Poin Seru.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                    </div>
                </section>
                <!-- end of Specification-->
                <br>
                <section id="price">
                    <div class="row">
                        <div class="somefact-title">
                            <h2><span>#BerburuPoinSeru</span></h2>
                            <h1>1 Mazda MX-5 RF luar biasa,<br/>
                            4 cara mudah untuk mendapatkannya</h1>
                        </div>
                        <br>
                        <br>
                        <div class="pricing">
                            <div class="col-md-6 col-sm-12 col-xs-12 border-sep">
                                <br/>
                                <div class="media">
                                    <div class="media-body text-center">
                                        <img src="./img/sisuper.jpg" style="width: 150px; height: 150px; -webkit-border-radius: 50%; text-align: center;">
                                    </div>
                                </div>
                                <div class="pricing-table">
                                    <div class="pricing-title">#CaraSiSuper</div>
                                    <div class="somefact-title">
                                        <p class="no-margin">Bagi kamu yang punya banyak uang dan ingin #BerburuPoinSeru dalam jumlah banyak.</p>
                                    </div>
                                    <div class="pricing-list">
                                        <div class="pricing-header">
                                            <p class="pricing-rate">33.500&#42;</p>
                                            <p class="pay-rate"><span>Poin Seru / Bulan</span></p>
                                            <p class="pay-rate"><span>Lakukan aktivitas di bawah ini:</span></p>
                                            
                                        </div>
                                        <ul>
                                            <li><i class="ti-star"></i>Tingkatkan Saldo Rata-Rata/Bulan</li>
                                            <li><i class="ti-star"></i>Buka Deposito Online</li>
                                            <li><i class="ti-star"></i>Buka Reksadana Online</li>
                                            <!-- <li><i class="ti-star"></i>Buka Tanda Valas SGD</li> -->
                                            <li><i class="ti-star"></i>Buka Tanda 360/Plus (Hold)</li>
                                            <li><i class="ti-star"></i>Buka Obligasi Pasar Sekunder</li>
                                            <li><i class="ti-star"></i>Buka Reksadana</li>
                                            <li><i class="ti-star"></i>Buka TAKA</li>
                                            <li><i class="ti-star"></i>Buka Bancassurance</li>
                                            <li><i class="ti-star"></i>Ajak Teman</li>
                                        </ul>
                                        <!-- <div class="inline-popups"> -->
                                            <a class="btn btn-custom btn-xl btn-popups" data-type="Cara Si Super" data-grade="si_super" data-email="<?php echo $email; ?>" data-token="<?php echo $token; ?>">Saya Mau</a>
                                        </div>
                                        <div style="clear:both;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 ">
                                <br/>
                                <div class="media">
                                    <div class="media-body text-center">
                                        <img src="./img/sigesit.jpg" style="width: 150px; height: 150px; -webkit-border-radius: 50%; text-align: center;">
                                    </div>
                                </div>
                                <div class="pricing-table">
                                    <div class="pricing-title">#CaraSiGesit</div>
                                    <div class="somefact-title">
                                        <p class="no-margin">Ini cara tepat buat kamu yang gerak cepat untuk #BerburuPoinSeru sebanyak-banyaknya.</p>
                                    </div>
                                    <div class="pricing-list">
                                        <div class="pricing-header">
                                            <p class="pricing-rate">26.000&#42;</p>
                                            <p class="pay-rate"><span>Poin Seru / Bulan</span></p>
                                            <p class="pay-rate"><span>Lakukan aktivitas di bawah ini:</span></p>
                                        </div>
                                        <ul>
                                            <li><i class="ti-star"></i>Tingkatkan Saldo Rata-Rata/Bulan</li>
                                            <li><i class="ti-star"></i>Buka Deposito Online</li>
                                            <li><i class="ti-star"></i>Buka Reksadana Online</li>
                                            <li><i class="ti-star"></i>Buka Tanda 360/Plus (Hold)</li>
                                            <li><i class="ti-star"></i>Buka Obligasi Pasar Sekunder</li>
                                            <li><i class="ti-star"></i>Buka Reksadana</li>
                                            <li><i class="ti-star"></i>Transaksi Belanja via Kartu Debit</li>
                                            <li><i class="ti-star"></i>Buka TAKA</li>
                                            <li><i class="ti-star"></i><span>Ajak Teman</span></li>
                                        </ul>
                                        <div class="inline-popups">
                                            <a href="#popup" data-effect="mfp-zoom-in" class="btn btn-custom btn-xl btn-popups" data-type="Cara Si Gesit" data-grade="si_gesit" data-email="<?php echo $email; ?>" data-token="<?php echo $token; ?>">Saya Mau</a>
                                        </div>
                                        <div style="clear:both;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 border-sep border-sep-top">
                            <br/>
                            <div class="media">
                                <div class="media-body text-center">
                                    <img src="./img/sipintar.jpg" style="width: 150px; height: 150px; -webkit-border-radius: 50%; text-align: center;">
                                </div>
                            </div>
                            <div class="pricing-table">
                                <div class="pricing-title">#CaraSiPintar</div>
                                <div class="somefact-title">
                                    <p class="no-margin">Ini cara tepat buat kamu yang tech savvy dan ingin ikutan #BerburuPoinSeru.</p>
                                </div>
                                <div class="pricing-list">
                                    <div class="pricing-header">
                                        <p class="pricing-rate">15.500&#42;</p>
                                        <p class="pay-rate"><span>Poin Seru / Bulan</span></p>
                                        <p class="pay-rate"><span>Lakukan aktivitas di bawah ini:</span></p>
                                    </div>
                                    <ul>
                                        <li><i class="ti-star"></i>Tingkatkan Saldo Rata-Rata/Bulan</li>
                                        <li><i class="ti-star"></i>Pembayaran Tagihan</li>
                                        <li><i class="ti-star"></i>Pembelian Pulsa/Data/Token Listrik</li>
                                        <li><i class="ti-star"></i>Transaksi Belanja via Kartu Debit</li>
                                        <!-- <li><i class="ti-star"></i>Buka TaKa</li> -->
                                        <li><i class="ti-star"></i>Buka Reksadana Online</li>
                                        <li><i class="ti-star"></i><span>Ajak Teman</span></li>
                                    </ul>
                                    <div class="inline-popups">
                                        <a href="#popup" data-effect="mfp-zoom-in" class="btn btn-custom btn-xl btn-popups" data-type="Cara Si Pintar" data-grade="si_pintar" data-email="<?php echo $email; ?>" data-token="<?php echo $token; ?>">Saya Mau</a>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12  border-sep-top">
                            <br/>
                            <div class="media">
                                <div class="media-body text-center">
                                    <img src="./img/siasyik.jpg" style="width: 150px; height: 150px; -webkit-border-radius: 50%; text-align: center;">
                                </div>
                            </div>
                            <div class="pricing-table">
                                <div class="pricing-title">#CaraSiAsyik</div>
                                <div class="somefact-title">
                                    <p class="no-margin">Ini cara tepat buat kamu yang gaul dan punya banyak teman untuk diajak ikutan #BerburuPoinSeru.</p>
                                </div>
                                <div class="pricing-list">
                                    <div class="pricing-header">
                                        <p class="pricing-rate">10.000&#42;</p>
                                        <p class="pay-rate"><span>Poin Seru / Bulan</span></p>
                                        <p class="pay-rate"><span>Lakukan aktivitas di bawah ini:</span></p>
                                    </div>
                                    <ul>
                                        <li><i class="ti-star"></i>Tingkatkan Saldo Rata-Rata/Bulan</li>
                                        <li><i class="ti-star"></i>Transaksi Belanja via Kartu Debit</li>
                                        <li><i class="ti-star"></i><span>Ajak Teman</span></li>
                                    </ul>
                                    <div class="inline-popups">
                                        <a href="#popup" data-effect="mfp-zoom-in" class="btn btn-custom btn-xl btn-popups" data-type="Cara Si Asyik" data-grade="si_asyik" data-email="<?php echo $email; ?>" data-token="<?php echo $token; ?>">Saya Mau</a>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 border-sep-top">
                            <p class="text-center" style="font-size: 12px; padding: 0px 15px;"><i>&#42;Jumlah Poin Seru di atas adalah ilustrasi jumlah maksimum yang bisa didapatkan apabila melakukan semua kegiatan yang disarankan, <br/>dengan mengajak satu orang teman untuk membuka tabungan di Bank OCBC NISP.</i></p>
                        </div>
                    </div>
                </section>
                <!-- end of Pricing Plan -->
            </div>
            <br>
            <br>
            <!-- Offer Section -->
            <section id="over-wrap">
                <div class="container-fluid">
                    <h2 class="over-title text-center">Jangan mau ketinggalan! Klik tombol di bawah <br/>dan awali momen seru kamu untuk <span>#KejarSiMerah</span>.</h2>
                    <?php
                        if($login=="false"){
                    ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <br>
                                    <div class="text-center top-space">
                                        <a href="https://www.poinseru.com/user/register/" class="btn btn-custom no-margin btn-xl" target="_blank">Daftar Poin Seru</a>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    ?>
                </div>
            </section>
            <!-- End of Offer Section -->
            <!--  F.A.Q -->
            <!--<section id="faq">
                <div class="container-fluid">
                    <div class="somefact-title">
                        <h2><span>Frequently Asked Questions</span></h2>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cd-testimonials-wrapper cd-container">
                                <ul class="cd-testimonials">
                                    <li>
                                        <h3>Put labore et dolore magna aliqua ?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </li>
                                    <li>
                                        <h3>Put labore et dolore magna aliqua ?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ea, perferendis error repudiandae numquam dolor fuga temporibus. Unde omnis, consequuntur.</p>
                                    </li>
                                    <li>
                                        <h3>Put labore et dolore magna aliqua ?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam totam nulla est, illo molestiae maxime officiis, quae ad, ipsum vitae deserunt molestias eius alias.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>-->
            <!--  end of F.A.Q  -->
            <!-- Map -->
            <!--<div id="map-wrap">
                <div class="wrap-mapping">
                    <div id="test1" class="gmap3"></div>
                </div>
            </div>-->
            <!-- End of Map -->
            <!-- Footer -->
            <footer>
                <div class="footer-text">
                    <div class="container-fluid">
                        <div class="text-center top-space btn-to-top">
                            <a href="javascript:void(0);" class="back-to-top"></a>
                            <span class="btt">Back to Top</span>
                        </div>
                        <div class="row">
                            <div class="col-md-3"><span class="copyright">&nbsp;</span> </div>
                            <div class="col-md-3"><span class="copyright"> Copyright © KejarSiMerah. BANK OCBC NISP 2017</span> </div>
                            <div class="col-md-6" style="position:relative">
                                <ul class="list-inline social-buttons">
                                    <li><a href="https://www.facebook.com/PoinSeru/" target="_blank"><i class="fa ti-facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com/poinseru/" target="_blank"><i class="ti-instagram"></i></a></li>
                                    <li><a href="https://twitter.com/PoinSeru" target="_blank"><i class="fa ti-twitter"></i></a></li>
                                    <li><a href=""><i class="fa ti-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>

    <div id="popup" class="white-popup mfp-with-anim mfp-hide">
        <form id="form-validated" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="the-box">
                <div class="row">
                    <div class="col-md-12 control-label" for="email">
                        <div class="input-group">
                            <p class="disclaimer">Anda telah memilih <span class="type-cara">XXXX</span> untuk mengumpulkan Poin Seru. Kami akan mengirimkan rinciannya melalui e-mail. Klik tombol “Setuju” untuk menerima e-mail rincian tersebut.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-custom no-margin btn-xl" id="btn_save" name="simpan" value="Setuju">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div id="popup_02" class="white-popup mfp-with-anim mfp-hide">
        <form id="form-validated" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="the-box">
                <div class="row">
                    <div class="col-md-12 control-label" for="email">
                        <div class="input-group">
                            <p class="disclaimer">Silahkan Log In ke akun Poin Seru Anda terlebih dahulu.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 control-label" for="email">
                        <div class="input-group pull-right">Email</div>
                    </div>
                    <div class="col-md-7">
                        <div class="input-group">
                            <div class="form-line">
                                <input type="text" name="email" class="form-control"/>
                                <input type="hidden" id="type" name="type"/>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-5 control-label" for="name">
                        <div class="input-group pull-right">Password</div>
                    </div>
                    <div class="col-md-7">
                        <div class="input-group">
                            <div class="form-line">
                                <input type="password" name="name" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-custom no-margin btn-xl" id="btn_save" name="simpan" value="Login">
                    </div>
                    <div class="col-md-6">
                        <a href="#" class="btn btn-custom no-margin btn-xl" target="_blank">Lupa Password</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div id="popup_03" class="white-popup mfp-with-anim mfp-hide">
        <form id="form-validated" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="the-box">
                <div class="row">
                    <div class="col-md-12 control-label" for="email">
                        <div class="input-group">
                            <p class="disclaimer">Terima kasih. Kami telah mengirimkan e-mail rincian <span class="type-cara">XXXX</span> untuk mengumpulkan Poin Seru. Silahkan cek E-Mail Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- /container -->
    <!-- Resource jQuery -->
    <!-- <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script> -->
    <!-- <script type="text/javascript" src="js/gmap3.js"></script> -->
    <script src="js/jquery.justifiedGallery.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/lightgallery.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/app.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.btn-popups').click(function () {
                var type  = $(this).attr("data-type"); // data "cara_si_pintar"
                var email = $(this).attr("data-email"); // data "email"
                var token = $(this).attr("data-token"); // data "token"
                var grade = $(this).attr("data-grade"); // data "Cara Si Pintar"

                $(".type-cara").html(type);

                var postedApi = new Object();
                postedApi.email = email;
                postedApi.token = token;
                postedApi.grade = grade;

                alert(token);

                // $.ajax({                    
                //     url: "http://poinseru-staging2.azurewebsites.net/kejarsimerah/apply",
                //     type: "POST",
                //     dataType: 'json',
                //     contentType: 'application/json; charset=utf-8',
                //     // data: {email:email,grade:grade,token:token},
                //     data: JSON.stringify(postedApi),
                //     success: function (data) {
                //         alert(data);
                //     },
                //     error: function (xhRequest, ErrorText, thrownError) {
                //         alert(token);
                //     }
                // });
            });
        });
    </script>
</body>
</html>
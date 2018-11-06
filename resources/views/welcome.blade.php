<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nge-Mount</title>
  </head>
  <body>
    <!-- navbar fixed -->
    <nav>

    </nav>

  </body>
=======
<html lang="en">

<!-- Mirrored from universal.sv.ugm.ac.id/v18/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Nov 2018 07:58:02 GMT -->
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="">
	<meta name="keywords" content="gunung, mendaki, cari barengan, semeru, merapi, bromo">
	<meta name="author" content="ngemount tim">
	<meta name="robots" content="index,follow">
  <meta name="language" content="en">

  <title>Nge-Mount</title>
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ url('/') }}/img/icon/2.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->

	<link href="{{ url('/') }}/css/slider.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/main.css">
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/custom.css">
<!--===============================================================================================-->
</head>
<body>

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo ml-md-5">
						<a href="#home">
							<img src="{{ url('/') }}/img/icon/1.png" alt="IMG-LOGO" data-logofixed="{{ url('/') }}/img/icon/1.png" style="width:200px">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="#about">ABOUT</a>
								</li>

								<li>
									<a href="#features">FEATURES</a>
								</li>

								<li>
									<a href="#news">NEWS</a>
								</li>

								<!-- <li>
									<a href="{{ route('login') }}">LOGIN</a>
								</li> -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="/uploads/{{ Auth::user()->avatar }}" alt="..." style="width:30px;height:30px;border-radius:50%;margin-right: 7px;">
                            {{ Auth::user()->username }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('profile.page', Auth::user()->id) }}">
                              Profile
                          </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="hidden social flex-w flex-l-m p-r-20">

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">

			<li class="t-center m-b-15">
				<a href="#about" class="txt20">ABOUT</a>
			</li>

			<li class="t-center m-b-15">
				<a href="#features" class="txt20">FEATURES</a>
			</li>

			<li class="t-center m-b-15">
				<a href="#news" class="txt20">NEWS</a>
			</li>



			<li class="t-center m-b-15">
				<a href="{{ route('login') }}" class="txt20">LOGIN</a>
			</li>
		</ul>

		<!-- - -->

	</aside>

	<!-- Slide1 -->
<div class="container-fluid">
	<section class="section-slide" id="home">

		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(img/merapi/1.jpg);">
					<!-- ellipse -->
					<div class="ellipse-container">
						<div class="ellipse ellipse__outer--thin">
							<div class="ellipse ellipse__orbit"></div>
						</div>

						<div class="ellipse ellipse__outer--thick"></div>
					</div>
					<!-- end -->
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 justify-content-end p-r-15 p-b-80">

					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(img/merapi/2.jpg);">
					<div class="ellipse-container">

						<div class="ellipse ellipse__outer--thin">
							<div class="ellipse ellipse__orbit"></div>
						</div>

						<div class="ellipse ellipse__outer--thick"></div>
					</div>
					<div class="wrap-content-slide1 sizefull flex-col-c-m justify-content-end p-l-15 p-r-15 p-b-80">

					</div>
				</div>

				<div class="item-slick1 item3-slick1" style="background-image: url(img/bromo/3.jpg);">
					<div class="ellipse-container">


						<div class="ellipse ellipse__outer--thin">
							<div class="ellipse ellipse__orbit"></div>
						</div>

						<div class="ellipse ellipse__outer--thick"></div>
					</div>
					<div class="wrap-content-slide1 sizefull flex-col-c-m justify-content-end p-l-15 p-r-15 p-b-80">


					</div>
				</div>

        <div class="item-slick1 item4-slick1" style="background-image: url(img/bromo/4.jpg);">
					<div class="ellipse-container">


						<div class="ellipse ellipse__outer--thin">
							<div class="ellipse ellipse__orbit"></div>
						</div>

						<div class="ellipse ellipse__outer--thick"></div>
					</div>
          <div class="wrap-content-slide1 sizefull flex-col-c-m justify-content-end p-l-15 p-r-15 p-b-80">


          </div>
        </div>

        <div class="item-slick1 item5-slick1" style="background-image: url(img/bromo/5.jpg);">
					<div class="ellipse-container">

						<div class="ellipse ellipse__outer--thin">
							<div class="ellipse ellipse__orbit"></div>
						</div>

						<div class="ellipse ellipse__outer--thick"></div>
					</div>
          <div class="wrap-content-slide1 sizefull flex-col-c-m justify-content-end p-l-15 p-r-15 p-b-80">


          </div>
        </div>

			</div>


			<div class="wrap-slick1-dots"></div>


	</section>
		<section class="section-welcome bg1-pattern p-t-20 p-b-20">

	</section>






	<!-- ABOUT -->
	<section class="section-video parallax100" id="about" style="background-image: url(img/bromo/p.jpg);">
		<div class="content-video t-center p-t-225 p-b-250">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
			<!-- <span class="tit2 txt-wh p-l-15 p-r-15 m-b-20 txt-3em">
				ABOUT
			</span>

			<h3 class="tit4 txt-w-75 m-auto t-center p-l-15 p-r-15 p-t-3 mb-3 txt-2em">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nisl ante, porttitor a elit et, tincidunt vestibulum dui. Vestibulum non tempus felis. Sed porttitor sapien ac mollis interdum. Nulla rhoncus libero in diam placerat aliquam. Praesent sit amet massa imperdiet risus consectetur viverra vel sed tortor. Aenean nec ex ornare, facilisis tortor non, rutrum odio. Nunc lorem risus, pharetra id elit sed, consectetur bibendum orci. Cras libero sapien, interdum in tellus in, aliquet dignissim odio.
			</h3> -->

			<!-- <div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="modal" data-target="#modal-video-01">
				<div class="flex-c-m sizefull bo-cir bgwhite txt-blue hov1 trans-0-4">
					<i class="fa fa-play fs-18 m-l-2" aria-hidden="true"></i>
				</div>
			</div> -->
		</div>
	</section>

	<!-- FEATURES -->
	<section class="section-ourmenu bg2-pattern p-t-115 p-b-120" id="features">
		<div class="container wrap-prestasi">
			<div>
	    <h1 class="judul-menu">FEATURES</h1>
	    <div class="garis">
	        <img src="{{ url('/') }}/img/line.png" width="100px" height="auto">
	     </div>
	    <h2 class="sub-menu" style="font-size: 20px">Fitur Lengkap dan Menarik Bagi Para Pendaki</h2>
	    <br><br><br>
		</div>


	<div class="row">

	    <div class="col-md-1">
	        <img src="{{ url('/') }}/img/people.svg" alt="ikon people" width="100px" height="auto" class="people"></img>
	    </div>

	    <div class="col-md-3">
	        <h3 class="sub-list">CARI BARENGAN</h3>

	        <li class="list_menu"><span class="li-menu">MEMBUAT JADWAL PENDAKIAN BARU</span></li>
	        <li class="list_menu"><span class="li-menu">BERGABUNG DENGAN PENDAKI LAIN</span></li>
	        <li class="list_menu"><span class="li-menu">MEMILIH LOKASI PENDAKIAN</span></li>
	        <li class="list_menu"><span class="li-menu">KONTAK PRIBADI</span></li>

	    </div>

	    <div class="col-md-1">
	        <img src="{{ url('/') }}/img/wechat.svg" alt="ikon people" width="100px" height="auto" class="wechat" color="white">
	    </div>

	    <div class="col-md-3">
	        <h3 class="sub-list ">CHAT GROUP</h3>
	        <li class="list_menu"><span class="li-menu">MEMBUAT CHAT GRUP BARU</span></li>
	        <li class="list_menu"><span class="li-menu">BERGABUNG CHAT GRUP</span></li>
	        <li class="list_menu"><span class="li-menu">SCHEDULE VIEW</span></li>
	        <li class="list_menu"><span class="li-menu">MULTITASK VIEW</span></li>
	    </div>

	    <div class="col-md-1">
	        <img src="{{ url('/') }}/img/newspaper.svg" alt="ikon people" width="100px" height="auto" class="newspaper">
	    </div>

	    <div class="col-md-3">
	        <h3 class="sub-list">NGE-MOUNT NEWS</h3>
	        <li class="list_menu"><span class="li-menu">INFORMASI GUNUNG DI INDONESIA</span></li>
	        <li class="list_menu"><span class="li-menu">DOKUMENTASI PARA PENDAKI</span></li>
	        <li class="list_menu"><span class="li-menu">BASCAMP INFO</span></li>
	        <li class="list_menu"><span class="li-menu">TIPS DAN TRICK PENDAKIAN</span></li>
	    </div>
	 </div>

			<!-- <div class="title-section-ourmenu t-center m-b-22">
				<span class="tit2 t-center txt-3em">
					FEATURES
				</span>

				<h3 class="txt-sub2 t-center m-t-2 txt-15em txt-w-75 m-auto">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nisl ante, porttitor a elit et, tincidunt vestibulum dui. Vestibulum non tempus felis. Sed porttitor sapien ac mollis interdum. Nulla rhoncus libero in diam placerat aliquam. Praesent sit amet massa imperdiet risus consectetur viverra vel sed tortor. Aenean nec ex ornare, facilisis tortor non, rutrum odio. Nunc lorem risus, pharetra id elit sed, consectetur bibendum orci. Cras libero sapien, interdum in tellus in, aliquet dignissim odio.
				</h3>
			</div> -->


		</div>
	</section>
	<br><br>

	<!-- NEWS -->
	<section class="section-ourmenu bg2-pattern p-t-115 p-b-120" id="news">
		<div class="row">
			<div class="col-md-12">
					<div>
							<h1 class="judul-menu">NEWS</h1>
							<div class="garis">
							<img src="{{ url('/') }}/img/line.png" width="100px" height="auto">
							</div>
							<h2 class="sub-menu" style="font-size: 20px">Gunung Favorit Untuk Para Pendaki Di Indonesia</h2>
							 <br><br><br>
					</div>

					<div class="slider slider_four_in_line">
					<div class="img-with-text">
							<div>
									<div class="gambar">
									<img src="{{ url('/') }}/img/sumbing.png" width="370px" height="335px">
									</div>

									 <div class="top-center">
											<img src="{{ url('/') }}/img/logo.svg" width="500px">
									</div>

									<div style="color:white"class="bottom-left">
											<p>Gunung Sumbing</p>
									</div>

									<div class="text-block">
											<h4 style="color: #D1B071">3.371</h4>
											<p style="color:white">Gunung ini merupakan gunung yang sangat tinggi. Gunung ini terletak di pulau jawa.</p>
									</div>
							</div>
					</div>

					<div class="img-with-text">
							<div>
									<div class="gambar">
									<img src="{{ url('/') }}/img/merapi.png" width="370px" height="335px">
									</div>

									 <div class="top-center">
											<img src="{{ url('/') }}/img/logo.svg" width="500px">
									</div>

									<div class="bottom-left" style="color:white">
											<p>Gunung Merapi</p>
									</div>

									<div class="text-block" >
											<h4 style="color: #D1B071">3.371</h4>
											<p style="color:white">Gunung ini merupakan gunung yang sangat tinggi. Gunung ini terletak di pulau jawa.</p>
									</div>
							</div>
					</div>

					<div class="img-with-text">
							<div>
									<div class="gambar">
									<img src="{{ url('/') }}/img/slamet.png" width="370px" height="335px">
									</div>

									 <div class="top-center">
											<img src="{{ url('/') }}/img/logo.svg" width="500px">
									</div>

									<div class="bottom-left"style="color:white">
											<p>Gunung Slamet</p>
									</div>

									<div class="text-block" >
											<h4 style="color: #D1B071">3.371</h4>
											<p style="color:white">Gunung ini merupakan gunung yang sangat tinggi. Gunung ini terletak di pulau jawa.</p>
									</div>
							</div>
					</div>

					<div class="img-with-text">
							<div>
									<div class="gambar">
									<img src="{{ url('/') }}/img/sumeru.png" width="370px" height="335px">
									</div>

									 <div class="top-center">
											<img src="{{ url('/') }}/img/logo.svg" width="500px">
									</div>

									<div class="bottom-left"style="color:white">
											<p>Gunung Sumeru</p>
									</div>

									<div class="text-block" >
											<h4 style="color: #D1B071">3.371</h4>
											<p style="color:white">Gunung ini merupakan gunung yang sangat tinggi. Gunung ini terletak di pulau jawa.</p>
									</div>
							</div>
					</div>

					<div class="next_button"></div>
					<div class="prev_button"></div>
			</div>

			</div>

			<!-- <span class="tit2 t-center txt-3em">
				NEWS
			</span>

			<h3 class="txt-sub2 t-center m-t-2 txt-15em txt-w-75 m-auto">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nisl ante, porttitor a elit et, tincidunt vestibulum dui. Vestibulum non tempus felis. Sed porttitor sapien ac mollis interdum. Nulla rhoncus libero in diam placerat aliquam. Praesent sit amet massa imperdiet risus consectetur viverra vel sed tortor. Aenean nec ex ornare, facilisis tortor non, rutrum odio. Nunc lorem risus, pharetra id elit sed, consectetur bibendum orci. Cras libero sapien, interdum in tellus in, aliquet dignissim odio.
			</h3> -->
		</div>


	</section>

	<section class="section-video parallax100" id="about" style="background-image: url(img/bromo/p.jpg);">
		<div class="content-video t-center p-t-225 p-b-250">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
			<!-- <span class="tit2 txt-wh p-l-15 p-r-15 m-b-20 txt-3em">
				ABOUT
			</span>

			<h3 class="tit4 txt-w-75 m-auto t-center p-l-15 p-r-15 p-t-3 mb-3 txt-2em">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nisl ante, porttitor a elit et, tincidunt vestibulum dui. Vestibulum non tempus felis. Sed porttitor sapien ac mollis interdum. Nulla rhoncus libero in diam placerat aliquam. Praesent sit amet massa imperdiet risus consectetur viverra vel sed tortor. Aenean nec ex ornare, facilisis tortor non, rutrum odio. Nunc lorem risus, pharetra id elit sed, consectetur bibendum orci. Cras libero sapien, interdum in tellus in, aliquet dignissim odio.
			</h3> -->

			<!-- <div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="modal" data-target="#modal-video-01">
				<div class="flex-c-m sizefull bo-cir bgwhite txt-blue hov1 trans-0-4">
					<i class="fa fa-play fs-18 m-l-2" aria-hidden="true"></i>
				</div>
			</div> -->
		</div>
	</section>

	<!-- Review -->
	<!-- <section class="section-review p-t-50" id="sambutan-isi"> -->

		<!-- - -->
		<!-- <div class="wrap-slick3">
			<div class="slick3">
				<div class="item-slick3 item1-slick3">
					<div class="wrap-content-slide3 p-b-50 p-t-50">
						<div class="container">
							<div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
								<img src="images/sambutan-1.jpg" alt="IGM-AVATAR">
							</div>

							<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
								<p class="t-center txt12 size15 m-l-r-auto smaller">
									“
									Salam sejahtera untuk kita semua, selamat datang di Departemen Teknik Elektro dan Informatika Sekolah Vokasi Universitas Gadjah Mada atau disingkat dengan departemen TEDI,
									departemen terbesar di lingkungan Sekolah Vokasi dengan 4 program studi diploma 3 dan 1 program studi diploma 4/ sarjana terapan yang didalamnya terdapat prodi sebagai berikut ,
									prodi D3 Teknologi Listrik atau dulu dikenal dengan Teknik Elektro , prodi D3 Komputer dan Sistem Informasi, D3 Teknologi Intrumentasi atau yang dulu dikenal dengan Elektronika dan Instrumentasi, D3 Metrologi dan Instrumentasi dan program sarjana terapan/ D4 Teknologi Rekayasa Internet atau dulu dikenal dengan Teknologi Jaringan.
									<br>Departemen TEDI memiiki visi menjadi departemen yang unggul, inovatif, bermatabat, mampu menghasilkan sumber daya manusia profesional, berkontribusi aktif pada dunia industri serta mengabdi kepada kepentingan rakyat dan bangsa.
									Kami gembira dan bangga menerima mahasiswa-mahasiswa baru 2018 yang telah dengan mantap tergabung menjadi keluarga besar mahasiswa Departemen Teknik Elektro dan Informatika Sekolah Vokasi Universitas Gadjah Mada.
									Dengan giat belajar, menggali potensi diri dan dengan tempaan oleh Departemen TEDI kelak nanti Anda akan menjadi manusia yang unggul inovatif dan profesional.
									<br>Dampak revolusi teknologi ke depan sangatlah sulit untuk diprediksi. Sangat mungkin sekali pada 5 tahun ke depan muncul jenis pekerjaan yang baru yang berbasis teknologi yang belum ada saat ini.
									Era ini adalah era revoluusi industri 4 dimana teknologi akan melekat dan mengubah kehidupan manusia baik secara fisik , individu maupun manusia sebagai makhluk sosial.
									Revolusi ini dimonitori oleh teknologi antara lain di bidang robotik, otomasi, internet of change, dan internet sebagai tulang punggung.
									Departemen TEDI memiliki program studi yang relevan dan inline dengan revolusi industri 4 tersebut maka kami akan terus berusaha mengembangkan kualitas pendidikan secara profesional yang lebih menekankan pada hardskill maupun softskill yang selaras dengan revolusi industri tersebut untuk mendampingi para mahasiswa siap menghadapi dunia kerja masa depan.
									<br>Oleh karena itu, program pembelajaran sukses mahasiswa baru Universal 2018 akan membekali Anda semua para mahasiswa baru mengenal tentang Departemen TEDI Sekolah Vokasi Universitas Gadjah Mada agar siap sebagai insan mahasiswa yang sukses belajar bersosialisasi, beraktivitas, berkreasi, berinovasi, dan bermasyarakat di lingkungan UGM pada umumnya dan departemen TEDI pada khususnya.
									Semoga PPSMB Universal 2018 dengan tema Colorphonic benar-benar dapat menjadi prisma warna yang bisa memancarkan warna-warni keberagaman mahasiswa baru Departemen Teknik Elektro dan Informatika Sekolah Vokasi Universitas Gadjah Mada.
									Sekian dan semoga berjalan lancar dan sukses. Terimakasih, wassalamuallaikum Wr. Wb.
									 ”
								</p>

								<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
									Nur Rohman Rosyid, S.T., M.T., D.Eng.
								</div>
								<div class="more-review txt-bold txt4 t-center animated visible-false" data-appear="fadeInUp">
									"Kepala Departemen TEDI"
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick3 item2-slick3">
					<div class="wrap-content-slide3 p-b-50 p-t-50">
						<div class="container">
							<div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
								<img src="images/sambutan-2.jpg" alt="IGM-AVATAR">
							</div>

							<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
								<p class="t-center txt12 smaller size15 m-l-r-auto">
									“
									Kami dari program diploma tiga  metrologi dan instrumentasi ingin menyampaikan bahwa kenapa metrologi itu ada.
									Kita tahu bahwa  metrologi ini merupakan ilmu pengetahuan yang  berkaitan dengan ukur mengukur secara luas.
									Sehingga kepastian dalam pengukuran menjadi suatu yang penting dalam kehidupan. Kita tahu dari mulai lahir sampai meninggal kita tidak bisa terlepas dari metrologi apalagi di dunia perdagangan dan industri .
									<br>Oleh karena itu kita di sekolah vokasi lahir program diploma tiga metrologi dan instrumentasi.
									Yang nantinya bertujuan untuk menyiapkan tenaga trampil dan terdidik sebagai penera teknisi kalibrasi teknisi instrumentasi yang dibekali dengan berbagai pengetahuan yang membentuk kegiatan tersebut.
									Apalagi saat ini muncul undang undang nomor 23 tahun 2014 tentang pemerintah daerah dimana kewenangan metrologi yang tadinya ada di provinsi di alih tugaskan di kabupaten/kota.
									Kita tahu bahwa di Indonesia ada 500-an kabupaten kota. Sehingga peluang kerja untuk lulusan D3  metrologi dan instrumentasi sebagai tenaga penera sangat terbuka luas.
									Kemudian di industri, beberapa industri besar sudah merumuskan  standar kompetensi kerja untuk lulusan metrologi  nantinya bisa berperan di bidang teknisi kalibrasi teknisi instrumentasi,.
									<br>Sehingga untuk mahasiswa program diploma 3 metrologi dan instrumentasi.
									Saya kira anda tidak salah memilih dengan masuk di prodi D3 metrologi instrumentasi kesempatan kerja terbuka sangat luas.
                                    Selain itu dengan peraturan menakerta terkait tentang standar kompetensi kerja nasional indonesia yang itu diacu oleh berbagai industri sudah dirumuskan bahwa bidang teknisi instrumentasi dan kalibrasi untuk level  D3 ini terakomodir disana sehingga peluang kerja dibuka sangat lebar.
                                    Selain itu undang undang tentang metrologi ini memungkinkan bahwa membuka wirausaha di bidang metrologi instrumentasi karena nantinya kalibrasi instrumentasi dimungkinkan dilakukan semua swasta.
                                    <br>Sehingga saya mengucapkan selamat datang D3 metrologi dan instrumentasi kepada seluruh mahasiswa baru 2018. Selamat bergabung gamada di prodi metrologi dan instrumentasi.
                                    Harapan dan cita cita anda dapa tercapai dan terpenuhi di program D3 metrologi instrumentasi. Sekian dari saya .
                                    Wassalamualaikum.wr.wb

									 ”
								</p>

								<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
									Hidayat Nur Isnianto, S.T., M.Eng.
								</div>
								<div class="more-review txt-bold txt4 t-center animated visible-false" data-appear="fadeInUp">
									"Ketua Program Studi D3 Metrologi dan Instrumentasi"
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick3 item3-slick3">
					<div class="wrap-content-slide3 p-b-50 p-t-50">
						<div class="container">
							<div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
								<img src="images/sambutan-3.jpg" alt="IGM-AVATAR">
							</div>

							<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
								<p class="t-center txt12 smaller size15 m-l-r-auto">
									“
									Assalamualaikum Wr Wb, Selamat pagi semuanya.
                                    <br>Perkenalkan nama saya M. Fakhrurrifqi saat ini saya menjabat sebagai kaprodi program studi komsi, komputer dan sistem informasi salah satu prodi di departemen teknik elektro dan informatika.
                                    Saya coba perkenalkan dulu apa itu komsi. Komsi itu adalah prodi yang unggul, terkemuka, dan pastinya berbeda. Komsi itu akan menyiapkan mahasiswa, menggembleng mahasiswa sehingga akan sangat berprestasi, kemudian sangat siap kerja  dan kemudian sangat mempunyai kenangan yang sangat-sangat indah.
                                    <br>Di komsi sangat dekat dengan industri sehingga kalian bisa jadi sebelum lulus kalian sudah akan diterima bekerja di suatu software house, instansi, ataupun dimana.
                                    Jadi jangan cemaskan masa depan kalian masa depan kalian yang akan datang menjemput kalian.
                                    <br>Selamat datang para mahasiswa baru komsi di tahun 2018 ini.
                                    Di komsi nanti kita akan belajar menempuh kurang lebih 110 sks. Dibagi menjadi 3 tahun, dari 3 tahun ada 6 semester. Di 6 semester ini kalian akan merasakan nikmatnya atmosfer di komsi.
                                    Di setiap semester kalian ada mata kuliah proyek, apa itu? Mata kuliah yang kalian akan tau seperti apa hidup di industri. Jadi bisa dibayangkan seperti apa nanti kalian akan siap bekerja.
                                    <br>Wah susah? Tidak. Sangat menyenangkan. Kita coba lihat di komsi ada 3 lab utama di samping lab-lab yang lain yang memang untuk praktikum. Kita ada lab multimedia, nanti yg senang multimedia, film, desain-desain silahkan bisa masuk ke sana.
                                    Seperti apa itu, gambarannya adalah akhir taun ini kita akan mengirimkan film di XXI, nanti kita bisa lihat bareng-bareng, judulnya film tengkorak.
                                    Siapa yang membuat? mahasiswa komsi, dosen komsi, di sana ada pak wikan yang saat ini menjadi dekan sv, di dalam juga ada pak panut, dan lain sebagainya.
                                    Jadi ketika kita masuk ke sana, kita terpaksa mengenal orang-orang penting. Dan itu biasa di komsi. Tahun ini kita sudah kerja sama dengan hanung bramantyo, siapa yang tidak kenal beliau.
                                    Itu di lab multimedia. Lalu kita ada lab SI, Lab Sistem informasi. Bagi yg senang koding, yang memang nanti seneng komputer, ngetik-ngetik program.
                                    <br>Tahun ini kita kerja sama dengan icon+ dan masih banyak lagi ada gama tekno dan sebagainya, banyak sekali. Kita bikinkan banyak software untuk orang-orang di luar sana, di masyarakat, ada sekolah, pkd, psikologi dan lain sebagainya.
                                    Endingnya apa? Kita dapat pengalaman, bertemu orang-orang, ada juga yang memberikan fee, tetapi Target kita adalah dapat pengalaman.
                                    Dari lab sana kita ada 4 mahasiswa yang diterima sebelum lulus kemudian banyak teman-teman atau kakak-kakak yang sekarang statusnya masih mahasiswa tapi sudah bekerja.
                                    Dan itu menjadi hal yang biasa. Hidupilah hidup kalian dengan keringat kalian sendiri. Walaupun orang tua memberi, tapi buktikan bahwa kalian bisa survive.
                                    Kemudian ada lab teknopreneur, kita sudah MoU juga dengan bank BCA  dan akan menyusul dengan bank-bank yang lain. Seperti apa itu? Kalau kita akan menjual produk, kita bisa menjual dengan lebih efektif.
                                    Semua hal yang update kita akan berusaha kasih ke teman-teman dan kita akan support teman-teman untuk hal-hal yang teman-teman bisa lakukan lebih dari itu.
                                    Harapan kami teman-teman bisa lebih maju dari pada dosennya dan iklimnya akan sangat mendukung untuk itu.
                                    <br>Akhir kata selamat bergabung selamat membuat perubahan selamat membuat indonesia menjadi lebih jaya, lebih maju, dengan mengawali dengan bersama-sama kita bekerja atau belajar di komsi.
                                    Terimakasih, kurang lebihnya mohon maaf.
                                    <br>Wassalamualaikum Wr Wb

									 ”
								</p>

								<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
									M. Fakhrurrifqi, S.Kom., M.Cs.
								</div>
								<div class="more-review txt-bold txt4 t-center animated visible-false" data-appear="fadeInUp">
									"Ketua Program Studi D3 Komputer dan Sistem Informasi"
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick3 item3-slick3">
					<div class="wrap-content-slide3 p-b-50 p-t-50">
						<div class="container">
							<div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
								<img src="images/sambutan-4.jpg" alt="IGM-AVATAR">
							</div>

							<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
								<p class="t-center smaller txt12 size15 m-l-r-auto">
									“
									Pertama-tama marilah saya panjatkan puji syukur ke hadirat Allah SWT yang telah melimpahkan rahmat dan karunia-Nya sehingga pada hari ini kita dapat berkumpul di Kampus Universitas Gadjah Mada (UGM) untuk menyambut kedatangan para mahasiswa baru Angkatan 2018.

                     Kepada para mahasiswa baru, kami ingin menyampaikan selamat atas keberhasilan anda untuk melampaui persaingan yang ketat dalam meraih tempat untuk belajar di kampus ini. Saudara adalah mahasiswa terpilih dari sekian banyak calon yang ingin kuliah di UGM.
                     <br>
                     Dan saya ucapkan juga terima kasih kepada orang tua saudara dan saudara sendiri yang telah memilih Program Studi Diploma Elektronika dan Instrumentasi (ELINS) sebagai tempat untuk melanjutkan pendidikan. Kami berharap anda dapat segera menyesuaikan diri dan mampu berkarya secara baik dengan suasana akademik yang ada di kampus ini.
                     <br>
                     Program Studi Diploma Elektronika dan Instrumentasi (ELINS) merupakan salah satu program studi yang bernaung dibawah Departemen Teknik Elektro dan Informatika (DTEDI) Sekolah Vokasi UGM bertujuan untuk mendidik dan mempersiapkan mahasiswa untuk menjadi tenaga Ahli Madya yang mampu mengikuti dan menyerap perkembangan ilmu atau sains mutakhir dan teknologi maju serta membantu mengembangkan dan meneliti, melaksanakan alih ilmu, sains dan teknologi dan menerapkannya untuk kepentingan pembangunan nasional dalam bidang Elektronika dan Instrumentasi.
                     <br>
                     Sebagaimana diketahui juga bahwa UGM merupakan salah satu perguruan tinggi terbaik di Indonesia. Jadi kita wajib untuk menjaga dan melakukan upaya untuk mengembangkan kampus kita tercinta ini agar selalu unggul di berbagai ajang kompetisi baik tingkat nasional maupun global.

                     Karena itu, selama menjadi mahasiswa di kampus ini, membagi waktu menjadi faktor penting bagi seluruh mahasiswa untuk melakukan proses pembelajaran. Melalui kegiatan ekstrakurikuler yang terstruktur dan terencana dengan baik, Lembaga Kemahasiswaan, bekerjasama dengan unit-unit kegiatan mahasiswa dan organisasi kemahasiswaan lainnya akan melaksanakan kegiatan yang bertujuan untuk meningkatkan kedewasaan dan kemandirian mahasiswa. Dengan demikian, para mahasiswa diminta secara aktif untuk memanfaatkan dan mengikuti dengan baik kegiatan tersebut
                     <br>
                     Akhirnya perkenankan saya menyampaikan terima kasih yang setulus-tulusnya kepada seluruh panitia PPSMB yag telah menyiapkan semua ini.

                     Selamat berkarya dan mari BELAJAR DI PROGRAM STUDI ELEKTRONIKA DAN INSTRUMENTASI DTEDI SV UGM.
									 ”
								</p>

								<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
									Budi Sumanto, S.Si., M.Eng.
								</div>
								<div class="more-review txt-bold txt4 t-center animated visible-false" data-appear="fadeInUp">
									"Ketua Program Studi D3 Teknologi Instrumentasi"
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick3 item3-slick3">
					<div class="wrap-content-slide3 p-b-50 p-t-50">
						<div class="container">
							<div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
								<img src="images/sambutan-5.jpg" alt="IGM-AVATAR">
							</div>

							<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
								<p class="t-center smaller txt12 size15 m-l-r-auto">
									“
									Assalamualaikum Wr Wb.
                                    <br>Semangat pagi salam sejahtera .
                                    Terimakasih pada rekan-rekan semua, adek-adek yang saya cintai, selamat datang di kampus tercinta Universitas Gadjah Mada, terutama pada program studi Diploma 3 Teknologi Listrik Departemen Teknik Elektro dan Informatika.
                                    Selamat datang mahasiswa baru angkatan 2018, adek-adek adalah calon-calon pemimpin bangsa yang telah menyisihkan banyak persaingan sehingga lolos dan masuk di UGM.
                                    <br>Tantangan kedepan adalah bagaimana kita mengasah adek-adek sekalian untuk menjadi sukses dalam hardskill maupun softskill. Beberapa karya dari kakak tingkat kalian angkatan 2015, 2016 dan 2017 kemaren yang memenangkan beberapa lomba diberbagai kompetisi.
                                    Sehingga harapan kami kedepan, adek-adek juga sukses dalam pembelajaran dan juga sukses dalam prestasi. Kita tunggu kesuksesan adek-adek sekalian.
                                    Sekali lagi semangat di program diploma Teknologi Listrik.

									 ”
								</p>

								<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
									Ma’un Budiyanto, S.T., M.T.
								</div>
								<div class="more-review txt-bold txt4 t-center animated visible-false" data-appear="fadeInUp">
									"Ketua Program Studi D3 Teknologi Listrik"
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick3 item3-slick3">
					<div class="wrap-content-slide3 p-b-50 p-t-50">
						<div class="container">
							<div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
								<img src="images/sambutan-6.jpg" alt="IGM-AVATAR">
							</div>

							<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
								<p class="t-center txt12 size15 m-l-r-auto smaller">
									“
									Assalamualaikum Wr Wb
                                    <br>Perkenalkan nama saya Muhammada Roffiq saat ini ditugasi sebagai kepala program studi Diploma 4 Teknologi Rekayasa Internet.
                                    Selamat datang kepada adek adek mahasiswwa baru angkatan 2018 selamat bergabung dengan Diploma 4 Teknologi Rekayasa Internet.
                                    Perlu kami sampaikan bahwa program diploma 4 ini akan mempelajari tentang teknologi jaringan yang saat ini dibutuhkan dalam segala bidang kehidupan yang nantinya akan terkoding.
                                    Sehingga kami mengharapkan semua adek-adek mahasiswa baru khususnya tetap semangat dalam meniti, menyiapkan bekal untuk kehidapan pada masa yang akan datang karena bekal tersebut akan menentukan bagaimana anda berikan warna kepada Negara Kesatuan Republik Indonesia ini.
                                    Khusus untuk mahasiswa program Diploma 4 Teknologi Rekayasa Internet perlu kami sampaikan bahwa semangat daya juang dan inovasi serta kesabaran adek-adek didalm nantinya melaksanakan, menyelesaikan segala aspek didalam kuliah dan praktikum menjadi modal utama anda di dalam menggapai masa depan yang anda cita-citakan.
                                    Selamat bergabung dengan program Diploma 4 Teknologi Rekayasa Internet sukses untuk masa depan dan kejayaan Negara Kesatuan Republik Indonesia. Terimakasih.
                                    <br>Wassalamualaikum Wr Wb

									 ”
								</p>

								<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
									M.Arrofiq, S.T., M.T., Ph.D.
								</div>
								<div class="more-review txt-bold txt4 t-center animated visible-false" data-appear="fadeInUp">
									"Ketua Program Studi D4 Teknologi Rekayasa Internet"
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="wrap-slick3-dots m-t-30"></div>
		</div>
	</section> -->


	<!-- <section class="section-intro" id="lagu">
		<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(images/music1.jpg);">
			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				Lagu
			</h3>
		</div>


	</section> -->


	<!-- Blog -->
	<!-- <section class="section-blog bg-white p-t-70 p-b-70">
		<div class="container">

			<div class="row">
				<div class="col-md-6 p-t-30"> -->
					<!-- Block1 -->
					<!-- <div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/274497239&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
						</div>

						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 t-center color0-hov trans-0-4 m-b-13">
								HIMNE GADJAH MADA
							</h4></a>

							<p class="m-b-20 t-center">
								<br>
                           <i>Karya: Suthasoma</i><br>
                           <br>
                           Bakti kami mahasiswa Gadjah Mada semua<br>
                           Kuberjanji memenuhi panggilan bangsaku<br>
                           Di dalam Pancasilamu jiwa seluruh nusaku<br>
                           Kujunjung kebudayaanmu kejayaan Indonesia<br>
                           <br>
                           Bagi kami almamater kuberjanji setia<br>
                           Kupenuhi dharma bakti 'tuk Ibu Pertiwi<br>
                           Di dalam persatuanmu jiwa seluruh bangsaku<br>
                           Kujunjung kebudayaanmu kejayaan Nusantara<br>
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-6 p-t-30"> -->
					<!-- Block1 -->
					<!-- <div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/335087573&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 t-center color0-hov trans-0-4 m-b-13">
								BERSATU DALAM KEBERAGAMAN
							</h4></a>

							<p class="m-b-20 t-center">

								<br>
                           <i>Karya: Noviana Widyaningrum, Aprilianty Siagian</i><br>
                           <br>
                           Tebaran bintang di angkasa<br>
                           Ekspresikan ribuan impian kita<br>
                           Semarak sambutan berjuta Harapan<br>
                           Bergabung menjadi satu dalam jiwa<br>
                           <br>
                           Yo yo yo ayo.. Bulatkan tekadmu<br>
                           Kita satu.. Universal satu..<br>
                           Wujudkan persatuan dalam keberagaman<br>
                           Berkolaborasi tuk jadi Kebanggaan<br>
                           Kita satu Hati.. Kita satu jiwa<br>
                           Yo yo yo ayo.. Bersama membangun TEDI berjaya<br>
                           Mari awali setiap langkah ini<br>
                           Dalam harmoni dan harapan pasti<br>
                           Yo yo yo ayo.. Bulatkan tekadmu<br>
                           Kita satu.. Universal satu...<br>
													 <br>
                           Yo yo yo ayo.. melangkah bersama<br>
                           Yo yo yo ayo.. menggalang persatuan<br>
                           Yo yo yo ayo.. dalam keberagamaaaan..<br>
                           Kita.. Satu... Universal satu<br>
                           Kita satuu.. Universal satu..<br>
                           Satuuu.. Universaaal..<br>

							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->


	<!-- Footer -->
	<footer class="bg1" id="login">
		<div class="container p-t-40 p-b-70">
			<div class="row">
				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Hubungi Kami
					</h4>

					<ul class="m-b-70">
						<li class="txt14 m-b-14">
							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
							Gedung SV UGM, Sekip Unit 1, Catur Tunggal, Depok, Caturtunggal, Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							(0274) 6491302, 56111
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
							tedi.sv@ugm.ac.id
						</li>
					</ul>

					<!-- - -->
					<h4 class="txt13 m-b-32">
						Media
					</h4>

					<ul class="widget-social">
                     <li><a href="#" target="_blank">
                        <i class="fa fa-twitter"></i>
                     </a></li>
                     <li><a href="#" target="_blank">
                        <i class="fa fa-facebook"></i>
                     </a></li>
                     <li><a href="#" target="_blank">
                        <i class="fa fa-instagram"></i>
                     </a></li>
                     <li><a href="#" target="_blank">
                        <i class="fa fa-youtube-play"></i>
                     </a></li>
                  </ul>
				</div>

				<div class="col-sm-6 col-md-8 p-t-50">
					<!-- - -->
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.1351060693983!2d110.37205631420998!3d-7.775495479291955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a584a07884a9b%3A0x19d239cc22b6546a!2sDepartemen+Teknik+Elektro+dan+Informatika+Sekolah+Vokasi+UGM!5e0!3m2!1sen!2sid!4v1532199860310" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>


			</div>
		</div>

		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22 justify-content-end">

					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; 2018 All rights reserved  | Template is made by <a href="https://colorlib.com/" target="_blank">Colorlib</a> & Adjusted with <i class="fa fa-heart txt-red"></i> by Nge-Mount Developers
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>


</div>





<!--===============================================================================================-->
	<script type="text/javascript" src="{{ url('/') }}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ url('/') }}/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ url('/') }}/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="{{ url('/') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ url('/') }}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ url('/') }}/vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="{{ url('/') }}/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ url('/') }}/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="{{ url('/') }}/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ url('/') }}/vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ url('/') }}/vendor/nicescroll/jquery.nicescroll.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ url('/') }}/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ url('/') }}/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ url('/') }}/js/main.js"></script>
	<script src="{{ url('/') }}/https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="{{ url('/') }}/js/slider.js"></script>

	<script>
			$(document).ready(function() {
/*            $('.slider_one_big_picture').EasySlides({
							'autoplay': true,
							'stepbystep': false,
							'show': 5,
							'loop': false
					})
					$('.slider_one_big_2').EasySlides({
							'autoplay': false,
							'stepbystep': true,
							'show': 5,
							'loop': false
					})
					$('.slider_circle_10').EasySlides({
							'autoplay': false,
							'show': 13
					})*/
					$('.slider_four_in_line').EasySlides({
							'autoplay': true,
							'show': 9
					})
/*            $('.slider_clock').EasySlides({
							'autoplay': true,
							'stepbystep': false,
							'show': 15
					})*/
			});

	</script>

<!-- Adjusted by JUM -->

</body>

>>>>>>> dc4a1c5a54563895caa8b38deee01863bfa98c50
</html>

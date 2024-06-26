<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>About</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{  asset('template/assets/css/all.min.css')}}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{  asset('template/assets/bootstrap/css/bootstrap.min.css')}}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{  asset('template/assets/css/owl.carousel.css')}}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{  asset('template/assets/css/magnific-popup.css')}}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{  asset('template/assets/css/animate.css')}}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{  asset('template/assets/css/meanmenu.min.css')}}">
	<!-- main style -->
	<link rel="stylesheet" href="{{  asset('template/assets/css/main.css')}}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{  asset('template/assets/css/responsive.css')}}">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


	<style> 

	.logo-text {
        font-size: 16px; /* Ukuran teks */
		font-family: Roboto; /* Jenis font */
        color: #c7c3c3; /* Warna teks */
        margin-right: 10px; /* Jarak antara teks "SisQA" dengan teks "Sistem Question" */
    }

	.long-text {
        flex: 10; /* Memungkinkan teks panjang untuk menyesuaikan ruang tersedia */
        white-space: nowrap; /* Mencegah teks panjang untuk pindah ke baris baru */
        overflow: hidden; /* Menyembunyikan bagian dari teks yang melebihi ruang tersedia */
        text-overflow: ellipsis; /* Menambah titik-titik jika teks lebih panjang dari ruang yang tersedia */
        margin-left: 10px; /* Jarak antara teks dan elemen sebelumnya */
    }

	</style>
</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="{{  asset('template/assets/img/qw.png')}}" alt="" style="" width="auto;" height="60px;">  
								<span class="logo-text">S i s Q A</span>
								
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="{{ url('/') }}">Home</a></li>
       								 <li><a href="{{ route('about') }}">About</a></li>
								<li><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="about">About</a></li>
										<li><a href="news">News</a></li>
										<li><a href="qa">QA</a></li>
									</ul>
								</li>
								<li><a href="news">News</a>
									<ul class="sub-menu">
										<li><a href="news">First News</a></li>
										<li><a href="news2">Second News</a></li>
										<li><a href="news3">Third News</a></li>
									</ul>
								</li>
								
								<li>
									<div class="header-icons">
										
										<a class="mobile-hide search-bar-icon" href="qa"><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Sistem QA Dokumen Wikipedia</p>
						<h1>About Us</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- featured section -->
	<div class="feature-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="featured-text">
						<h2 class="pb-3">Why <span class="orange-text">SisQA?</span></h2>
						<div class="row">
							<div class="col-lg-6 col-md-6 mb-4 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-info-circle"></i>
									</div>
									<div class="content">
										<h3>Informasi Secara Presisi</h3>
										<p>Dapat memperoleh informasi atau jawaban secara presisi. Fitur-fitur pencarian
											yang canggih dan sumber informasi yang terpercaya memastikan bahwa pengguna dapat menemukan
											informasi yang akurat dan terverifikasi dengan cepat.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-arrow-circle-down"></i>
									</div>
									<div class="content">
										<h3>Mudah Digunakan</h3>
										<p>Website ini dirancang dengan antarmuka yang sederhana dan intuitif, sehingga
											mudah digunakan oleh siapa pun, baik pengguna baru maupun berpengalaman. Fitur-fitur navigasi
											yang jelas dan struktur yang terorganisir dengan baik memungkinkan pengguna untuk dengan cepat
											menemukan informasi yang mereka butuhkan tanpa mengalami kesulitan.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fab fa-wikipedia-w"></i>
									</div>
									<div class="content">
										<h3>Skala dan Ruang Lingkup Luas</h3>
										<p>Wikipedia mencakup berbagai topik dan subjek dari berbagai bidang pengetahuan. Sistem QA memanfaatkan kekayaan data ini untuk memberikan jawaban yang komprehensif dan mendalam terhadap pertanyaan dari pengguna.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-bolt"></i>
									</div>
									<div class="content">
										<h3>Akses Cepat dan Efisien ke Informasi</h3>
										<p>Pengguna dapat dengan mudah mencari dan mendapatkan jawaban atas pertanyaan mereka tanpa perlu mencari secara manual di Wikipedia. Ini menghemat waktu dan tenaga pengguna.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end featured section -->

	<!-- shop banner -->
	<section class="shop-banner">
    	<div class="container">
        	<h3>Pertanyaan?  <br> Temukan jawaban  <span class="orange-text"> disini!</span></h3>
            <div class="sale-percent"><span>Jelajahi <br> Pengetahuan Dengan</span>Wikipedia!</div>
            <a href="qa" class="cart-btn btn-lg">Cari Sekarang</a>
        </div>
    </section>
	<!-- end shop banner -->

	<!-- team section -->
	<div class="mt-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3>Seputar <span class="orange-text">SisQA</span></h3>
						<p>Situs web ini menghadirkan konteks yang didasarkan pada informasi yang diperoleh dari Wikipedia, memanfaatkan sumber daya luas dan beragam dari ensiklopedia daring ini untuk memberikan pemahaman yang mendalam dan luas terhadap berbagai topik.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-team-item">
						<div class="team-bg team-bg-1"></div>
						<h4>Apakah perlu mendaftar untuk menggunakan Sistem QA? <span>Pengguna dapat mengakses website ini tanpa harus melakukan registrasi.</span></h4>
					
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-team-item">
						<div class="team-bg team-bg-2"></div>
						<h4>Bagaimana cara kerja sistem QA dokumen Wikipedia? <span>Sistem akan merespon dengan menampilkan konteks/informasi yang bersumber dari Wikipedia berdasarkan topik yang dicari.</span></h4>
						
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-team-item">
						<div class="team-bg team-bg-3"></div>
						<h4>Bagaimana cara mendapatkan jawaban dari sistem? <span>Jawaban pada situs web ini akan ditampilkan setelah pengguna melakukan pencarian dengan memasukkan kata kunci yang relevan terlebih dahulu.</span></h4>
					
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end team section -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-80 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{  asset('template/assets/img/jimmy.jpg')}}" alt="">
							</div>
							<div class="client-meta">
								<h3>Jimmy Wales <span>Pendiri Situs Ensiklopedia</span></h3>
								<p class="testimonial-body">
									"Pendiri situs ensiklopedia paling terkenal di Internet, Wikipedia. Ia mendirikan Wikipedia sejak 11 tahun yang lalu tepatnya 15 Januari 2001. Wikipedia, ensiklopedia berbasis Internet ini beroperasi di bawah gaya manajemen sumber pengetahuan terbuka atau open source. "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{  asset('template/assets/img/wikimedia.png')}}" alt="">
							</div>
							<div class="client-meta">
								<h3>Wikimedia Foundation <span>Badan Hukum </span></h3>
								<p class="testimonial-body">
									" Badan hukum yang memiliki dan mengelola Wikipedia berpusat di California, Amerika Serikat, dan bertanggung jawab atas operasional serta pengembangan ensiklopedia daring tersebut. "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{  asset('template/assets/img/qw.png')}}" alt="">
							</div>
							<div class="client-meta">
								<h3>SisQA <span>Sistem Question Answering Dokumen Wikipedia</span></h3>
								<p class="testimonial-body">
									" Situs ini menggunakan informasi dari Wikipedia untuk memberikan pemahaman yang komprehensif tentang berbagai topik. "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->

	
	
	
<!-- copyright -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<p>Sistem QA Dokumen Wikipedia &copy; 2024   All Rights Reserved.<br>
					Sistem ini didukung oleh - <a href="https://huggingface.co/Rifky/Indobert-QA?context=jokow&text=jokow">Rifky Indobert</a>
				</p>
			</div>
			<div class="col-lg-6 text-right col-md-12">
				<div class="social-icons">
					<ul>
						<li><a href="qa"><i class="fas fa-search"></i></a></li>
						<li><a href="qa"><i class="fas fa-question"></i></a></li>
						<li><a href="qa"><i class="fas fa-info-circle"></i></a></li>
						<li><a href="qa"><i class="fab fa-wikipedia-w"></i></a></li>
						<li><a href="qa"><i class="fas fa-globe"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>


	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="{{  asset('template/assets/js/jquery-1.11.3.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{  asset('template/assets/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- count down -->
	<script src="{{  asset('template/assets/js/jquery.countdown.js')}}"></script>
	<!-- isotope -->
	<script src="{{  asset('template/assets/js/jquery.isotope-3.0.6.min.js')}}"></script>
	<!-- waypoints -->
	<script src="{{  asset('template/assets/js/waypoints.js')}}"></script>
	<!-- owl carousel -->
	<script src="{{  asset('template/assets/js/owl.carousel.min.js')}}"></script>
	<!-- magnific popup -->
	<script src="{{  asset('template/assets/js/jquery.magnific-popup.min.js')}}"></script>
	<!-- mean menu -->
	<script src="{{  asset('template/assets/js/jquery.meanmenu.min.js')}}"></script>
	<!-- sticker js -->
	<script src="{{  asset('template/assets/js/sticker.js')}}"></script>
	<!-- main js -->
	<script src="{{  asset('template/assets/js/main.js')}}"></script>

</body>
</html>
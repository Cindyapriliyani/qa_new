<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Question Answering</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('template/assets/img/qw.png')}}">
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
		.fixed-header {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			background-color: #fff; /* or any other background color */
			z-index: 1000;
			border-bottom: 1px solid #ddd;
			padding: 10px 0; /* Adjust the padding to make the header smaller */
		}

		.header .title-section h1 {
			font-size: 1.5rem; /* Adjust the font size to make the text smaller */
			margin: 0;
		}

		.site-logo img {
			width: 50px; /* Adjust the logo size */
			height: auto;
		}

		.content {
			margin-top: 70px; /* Adjust this value based on the height of your fixed header */
		}

		.btn-custom {
            background-color: #ff7300;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            display: flex;
            align-items: center;
        }

		.btn-custom:hover {
			background-color: #e06b00; /* Darker shade for hover */
		}

		.warning {
            border-color: red !important;
        }
		input {
            border: 2px solid black;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            outline: none; /* Menghilangkan outline default */
        }

        input:focus {
            border-color: black; /* Warna border ketika input difokuskan */
            box-shadow: 0 0 5px black; /* Memberikan bayangan hitam */
        }
		.loading-spinner {
            display: none;
        }

		 /* Dark mode button */
		 .dark-mode-button {
        width: 40px;
        height: 20px;
        background-color: #ddd;
        border-radius: 10px;
        position: relative;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .dark-mode-handle {
        width: 16px;
        height: 16px;
        background-color: #fff;
        border-radius: 50%;
        position: absolute;
        left: 2px; /* Starting position for light mode */
        top: 2px;
        transition: left 0.3s ease;
    }

    body.dark-mode .dark-mode-button {
        background-color: #555; /* Background color in dark mode */
    }

    body.dark-mode .dark-mode-handle {
        left: 22px; /* Position for dark mode */
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
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="">SISTEM QUESTION ANSWERING DOKUMEN WIKIPEDIA</a>
									
								
								<li>
									<div class="header-icons">
										
										<a class="mobile-hide search-bar-icon" href="#" id="darkModeToggle">
											<div id="darkModeButton" class="dark-mode-button">
												<div id="darkModeHandle" class="dark-mode-handle"></div>
											</div>
										</a>
										

									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<form class="form-subscribe" id="contactForm">
		<!-- Email address input-->
		<div class="container">
			<div class="row">
				<div class="col">
					<input class="form-control form-control-lg" id="topik" type="text"
						placeholder="Tulis kata kunci" style="margin-bottom: 20px; width: 102%;"
						autofocus />
						
						<div id="topikWarning" class="text-danger"></div>
						<div id="typoSuggestion" class="text-info" style="font-style: italic;"></div>


				</div>
				
				<div class="col-auto" style="margin-left: 10px;">
					<button type="submit" id="searchButton" class="btn-custom"
						style="background-color: #9793905e;">Cari
						<span id="searchSpinner" class="loading-spinner" style="display: none;"></span>
					</button>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h5 style="text-align: left;">Deskripsi</h5>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<textarea class="form-control form-control-lg" id="deskripsi" style="height: 300px; width: 100%;" readonly></textarea>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col">
					<input class="form-control form-control-lg" id="pertanyaan" type="text"
						placeholder="Pertanyaan"  style="margin-bottom: 20px; width: 102%;"
					disabled/>
			
				</div>
				<div class="col-auto" style="margin-left: 10px;">
					<button class="btn btn-primary btn-lg" id="answerButton" type="button"
					style="background-color: #9793905e;">Jawab
					<span id="answerSpinner" class="loading-spinner" style="display: none;"></span>
				</button>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col">
					<h5 style="text-align: left;">Jawaban</h5>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<textarea class="form-control form-control-lg" id="jawaban" style="height: 150px; width: 100%;" readonly></textarea>
				</div>
			</div>
		</div>
	</form>
	
			
	<!-- end cart -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="{{  asset('template/assets/img/company-logos/g.png')}}" alt="">
						</div>
						
						<div class="single-logo-item">
							<img src="{{  asset('template/assets/img/company-logos/i.png')}}" alt="">
						</div>
						<div class="single-logo-item">
							<img src="{{  asset('template/assets/img/company-logos/j.png')}}" alt="" style="width: auto;" height="120px;">
						</div>
						<div class="single-logo-item">
							<img src="{{  asset('template/assets/img/company-logos/k.png')}}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">Apa itu Sistem QA Dokumen Wikipedia?</h2>
						<p>Situs web ini menyediakan beragam informasi yang diambil dari sumber terpercaya, yaitu Wikipedia, memastikan bahwa pengguna dapat mengakses data dan pengetahuan yang lengkap serta terverifikasi dengan mudah dan cepat</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Bagaimana cara kerja sistem QA dokumen Wikipedia?</h2>
						<p>Sistem akan merespon dengan menampilkan konteks/informasi yang bersumber dari Wikipedia berdasarkan topik yang dicari.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Bagaimana cara mendapatkan jawaban dari sistem?</h2>
						<p>Jawaban pada situs web ini akan ditampilkan setelah pengguna melakukan pencarian dengan memasukkan kata kunci yang relevan terlebih dahulu. </p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Apakah sistem mendukung pencarian dalam berbagai bahasa?</h2>
						<p>Sistem ini hanya dapat memproses dan memberikan jawaban untuk kalimat-kalimat yang ditulis dalam bahasa Indonesia</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
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
	<script type="text/javascript">
		document.getElementById("searchButton").addEventListener("click", searchTopic);
		 document.getElementById("topik").addEventListener("keydown", (event) => {
		 if (event.key === "Enter") {
		 event.preventDefault();
		 searchTopic();
		 document.getElementById('topik').blur();
	 }
 });
 
		 document.getElementById("answerButton").addEventListener("click", getAnswer);
		 document.getElementById("pertanyaan").addEventListener("keydown", (event) => {
	 if (event.key === "Enter") {
		 event.preventDefault();
		 getAnswer();
		 document.getElementById('pertanyaan').blur();
	 }
 });
 
 function searchTopic() {
	 const topic = document.getElementById('topik').value;
	 const descriptionTextarea = document.getElementById('deskripsi');
	 const questionInput = document.getElementById('pertanyaan');
	 const answerButton = document.getElementById('answerButton');
	 const searchSpinner = document.getElementById('searchSpinner');
	 const typoSuggestion = document.getElementById('typoSuggestion');
 
	 if (!topic) {
		 document.getElementById('topik').placeholder = 'Mohon masukkan topik!';
		 document.getElementById('topik').classList.add('warning');
		 return;
	 } else {
		 document.getElementById('topik').placeholder = 'Tulis kata kunci';
		 document.getElementById('topik').classList.remove('warning');
	 }
 
	 descriptionTextarea.value = 'Loading...';
	 searchSpinner.style.display = 'inline-block';
	 typoSuggestion.innerHTML = '';
 
	 const url = `https://id.wikipedia.org/api/rest_v1/page/html/${topic}`;
 
	 fetch(url)
		 .then(response => {
			 if (!response.ok) {
				 // Memeriksa kemungkinan kesalahan ketik menggunakan Wikipedia API (atau lainnya)
				 return fetch(`https://id.wikipedia.org/w/api.php?action=query&list=search&srsearch=${topic}&format=json&origin=*`)
					 .then(response => response.json())
					 .then(data => {
						 if (data.query.search.length > 0) {
							 const suggestion = data.query.search[0].title;
							 typoSuggestion.innerHTML = `Apakah maksud anda <a href="#" onclick="correctSearch('${suggestion}')">${suggestion}</a><br>Awalnya Anda menelusuri <b>${topic}</b>`;
						 } else {
							 throw new Error('Topik Ini Tidak Terdapat di Wikipedia');
						 }
					 });
			 }
			 return response.text();
		 })
		 .then(htmlContent => {
			 const description = extractTextFromHtml(htmlContent);
			 descriptionTextarea.value = description;
 
			 questionInput.disabled = false;
			 answerButton.disabled = false;
		 })
		 .catch(error => {
			 descriptionTextarea.value = '' + error.message;
		 })
		 .finally(() => {
			 searchSpinner.style.display = 'none';
		 });
 
	 // Clear the question and answer fields when topic changes
	 document.getElementById('pertanyaan').value = '';
	 document.getElementById('jawaban').value = '';
	 questionInput.disabled = true;
	 answerButton.disabled = true;
 }
 
 function correctSearch(suggestion) {
	 document.getElementById('topik').value = suggestion;
	 searchTopic();
 }
 
 function getAnswer() {
	 const context = document.getElementById('deskripsi').value;
	 const question = document.getElementById('pertanyaan').value;
	 const answerTextarea = document.getElementById('jawaban');
	 const answerSpinner = document.getElementById('answerSpinner');
	 const pertanyaanWarning = document.getElementById('pertanyaanWarning');
 
	 if (!question) {
		 document.getElementById('pertanyaan').placeholder = 'Mohon masukkan pertanyaan!';
		 document.getElementById('pertanyaan').classList.add('warning');
		 return;
	 } else {
		 document.getElementById('pertanyaan').placeholder = 'Pertanyaan';
		 document.getElementById('pertanyaan').classList.remove('warning');
	 }
 
	 answerTextarea.value = 'Loading...';
	 answerSpinner.style.display = 'inline-block';
 
	 fetch('http://127.0.0.1:5000/process', {
		 method: 'POST',
		 headers: {
			 'Content-Type': 'application/json'
		 },
		 body: JSON.stringify({
			 context: context,
			 question: question
		 })
	 })
	 .then(response => {
		 if (!response.ok) {
			 throw new Error('Network response was not ok');
		 }
		 return response.json();
	 })
	 .then(result => {
		 answerTextarea.value = result.answer || 'No answer found';
	 })
	 .catch(error => {
		 answerTextarea.value = 'Error fetching data: ' + error.message;
	 })
	 .finally(() => {
		 answerSpinner.style.display = 'none';
	 });
 }
 
 function extractTextFromHtml(html) {
	 const parser = new DOMParser();
	 const doc = parser.parseFromString(html, 'text/html');
	 const paragraphs = doc.querySelectorAll('p');
	 let description = '';
	 paragraphs.forEach(paragraph => {
		 description += paragraph.textContent.trim() + '\n';
	 });
	 return description;
 }

   // Toggle dark mode
   document.addEventListener('DOMContentLoaded', function() {
        const darkModeToggle = document.getElementById('darkModeToggle');
        const body = document.body;

        darkModeToggle.addEventListener('click', function() {
            body.classList.toggle('dark-mode');
        });
    });

	document.addEventListener('DOMContentLoaded', function() {
    const inputTopic = document.getElementById('topik');
    const inputQuestion = document.getElementById('pertanyaan');
    const searchButton = document.getElementById('searchButton');
    const answerButton = document.getElementById('answerButton');

   // Fungsi untuk memeriksa input dan mengubah kelas tombol
   function checkInputAndToggleClass() {
        if (inputTopic.value.trim() === '') {
            searchButton.classList.add('input-empty');
        } else {
            searchButton.classList.remove('input-empty');
        }

        if (inputQuestion.value.trim() === '') {
            answerButton.classList.add('input-empty');
        } else {
            answerButton.classList.remove('input-empty');
        }
    }

  // Event listener untuk memantau input pada pertanyaan
  inputQuestion.addEventListener('input', function() {
        checkInputAndToggleClass();
    });

    // Memanggil fungsi untuk memastikan status tombol saat halaman dimuat
    checkInputAndToggleClass();
});
 
	 </script>

</body>
</html>
<!doctype html>
<html lang="en-US">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="Anton Surya Profil"/>

	<title>Anton Surya - {{$title}}</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=cyrillic" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/basic.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/layout.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/jarallax.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/swiper.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/brands.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/solid.css')}}" />

	<link rel="shortcut icon" href="{{asset('assets/images/favicons/favicon.png')}}">
	

</head>

<body class="home" oncontextmenu="return false">
	<div class="preloader">
		<div class="centrize full-width">
			<div class="vertical-center">
				<div class="spinner">
					<div class="double-bounce1"></div>
					<div class="double-bounce2"></div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="cursor-follower"></div>

		<header class="header">
			<div class="head-top">
				<!-- menu button -->
				<a href="#" class="menu-btn"><span></span></a>

				<!--Sisi Kiri-->
				<div class="logo hover-masks-logo">
					<a href="{{URL::to('/')}}/assets/pdf/AntonS_CV.pdf">
						<span class="mask-lnk">Anton <strong>Surya</strong></span>
						<span class="mask-lnk mask-lnk-hover">Unduh <strong>CV</strong></span>
					</a>
				</div>
				
				<!-- top menu -->						
				<div class="top-menu hover-masks">
					<div class="top-menu-nav">	
						<div class="menu-topmenu-container">
							<ul class="menu">
								<li class="menu-item menu-item-menu-item">
									<a href="{{route('Beranda')}}" class="nav-link scrollto {{ ($title === "Beranda") ? 'active' : '' }}">Beranda</a>
								</li>
								<li class="menu-item menu-item-menu-item">
									<a href="{{route('Resume')}}" class="nav-link scrollto {{ ($title === "Resume") ? 'active' : '' }}">Resume</a>
								</li>
								<li class="menu-item menu-item-menu-item">
									<a href="{{route('Galeri')}}" class="nav-link scrollto {{ ($title === "Galeri") ? 'active' : '' }}">Galeri</a>
								</li>
								<li class="menu-item menu-item-menu-item">
									<a href="{{route('Kontak')}}" class="nav-link scrollto {{ ($title === "Kontak") ? 'active' : '' }}">Kontak</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</header>
		
		
        <main id="main">

        @yield('main')
		<!-- Memuat Konten -->

        </main>
		
		<!-- Footer -->
		<footer class="footer">
			<div class="copy">
				<p><span class="fas fa-envelope"></span> gusti.anton@outlook.co.id</p>
				<p><span class="fas fa-phone-alt"></span> +62 85656349944</p>
			</div>
			<div class="soc-box">
				<div class="follow-label">Ikuti Saya</div>
				<div class="soc">
					<a target="_blank" href="https://www.instagram.com/anton_gusti">
						<span class="icon fab fa-instagram"></span>
					</a>
					<a target="_blank" href="https://www.linkedin.com/in/i-gusti-nyoman-anton-surya-diputra-92a24a125/">
						<span class="icon fab fa-linkedin"></span>
					</a>
				</div>
			</div>
			<div class="clear"></div>
		</footer>

		<div class="lines">
			<div class="content">
				<div class="line-col"></div>
				<div class="line-col"></div>
				<div class="line-col"></div>
				<div class="line-col"></div>
				<div class="line-col"></div>
			</div>
		</div>
		
	</div>

	<!-- Scripts for load JS :) -->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.validate.js')}}"></script>
	<script src="{{asset('assets/js/magnific-popup.js')}}"></script>
	<script src="{{asset('assets/js/simpleParallax.js')}}"></script>
	<script src="{{asset('assets/js/typed.js')}}"></script>
	<script src="{{asset('assets/js/jarallax.js')}}"></script>
	<script src="{{asset('assets/js/jarallax-video.js')}}"></script>
	<script src="{{asset('assets/js/jarallax-element.js')}}"></script>
	<script src="{{asset('assets/js/imagesloaded.pkgd.js')}}"></script>
	<script src="{{asset('assets/js/isotope.pkgd.js')}}"></script>
	<script src="{{asset('assets/js/swiper.js')}}"></script>
	<script src="{{asset('assets/js/grained.js')}}"></script>
	<script src="{{asset('assets/js/scripts.js')}}"></script>
	<script src="{{asset('assets/js/devtools.js')}}"></script>

	<script>
    document.onkeydown = function(e) {
            if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {
                alert('Ehehehe :)');
            }
            return false;
    };
    </script>

</script>

</script>



</body>
</html>
@extends('layout.main')

@section('main')

<div class="wrapper">

			<div class="section started section-title" id="section-started">

				<!-- bg -->
				<div class="video-bg">
					<div class="video-bg-mask"></div>
					<div class="video-bg-texture" id="grained_container"></div>
				</div>

				<div class="centrize full-width">
					<div class="vertical-center">
						<div class="started-content">
							<h1 class="h-title">Resume</h1>
							<div class="h-subtitles">
								<div class="h-subtitle typing-bread">
									<p class="breadcrumbs">
										<a href="{{route('Beranda')}}">Beranda</a> / Resume
									</p>
								</div>
								<span class="typed-bread"></span>
							</div>
						</div>
					</div>
				</div>
				<a href="#" class="mouse_btn" style="display: none;"><span class="icon fas fa-chevron-down"></span></a>

			</div>

			<div class="section about" id="section-about">
				<div class="content content-box">

					<div class="image">
						<img src="{{asset('assets/images/profil.jpg')}}" alt="Anton S" />
					</div>

					<div class="desc">
						<p>Saya seorang penjelajah (explorer). Saya suka dengan tempat baru yang dapat membuat fully imagined dan artistik. 
							Pada sisi lain, saya menekuni bidang pentest, keamanan jaringan, dan mobile apps.
						</p>
						<div class="info-list">
							<ul>
								<li><strong>Umur:</strong> 21</li>
								<li><strong>Kewarganegaraan:</strong> <img src="{{asset('assets/images/id.png')}}"> Indonesia</li>
								<li><strong>Alamat:</strong> Singaraja</li>
								<li><strong>Telepon:</strong> +62 85656349944</li>
								<li><strong>Surel:</strong> gusti.anton@outlook.co.id</li>
							</ul>
						</div>
						<div class="bts">
							<a href="#" class="btn hover-animated">
								<span class="circle"></span>
								<span class="lnk">Unduh CV</span>
							</a>
						</div>
					</div>

					<div class="clear"></div>
				</div>
			</div>

			<!-- Service -->
			<div class="section service" id="section-services">
				<div class="content">

					<div class="title">
						<div class="title_inner">Keahlian</div>
					</div>

					<div class="service-items">
						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-code"></span></div>
								<div class="name">Web Desainer</div>
								<div class="text">Pembuatan web dinamis dan responsif</div>
							</div>
						</div>
						
						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-video"></span></div>
								<div class="name">Video Writing</div>
								<div class="text"> Video script, creating, transcription, dan customer worksheet</div>
							</div>
						</div>

						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-headphones"></span></div>
								<div class="name">Broadcasting</div>
								<div class="text">Broadcasting radio berita dan hiburan</div>
							</div>
						</div>

						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-mobile"></span></div>
								<div class="name">Android Application</div>
								<div class="text">Android Development pendidikan, transaksi, interaksi, dll</div>
							</div>
						</div>
						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-laptop"></span></div>
								<div class="name">Network Analyst</div>
								<div class="text">Traffic load, Cisco, Mikrotik, Nethunter</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>

			<!-- Resume -->
			<div class="section resume" id="section-history">
				<div class="content">
					<div class="cols">

						<div class="col col-md">
							<div class="title">
								<div class="title_inner">Pengalaman</div>
							</div>
							
							<div class="resume-items">
								<div class="resume-item content-box">
									<div class="date">2019</div>
									<div class="name">Gmedia Singaraja</div>
									<div class="text">Apprenticeship</div>
								</div>

								<div class="resume-item content-box">
									<div class="date">2019-2020</div>
									<div class="name">Radio Swara Teknika.</div>
									<div class="text">Broadcaster</div>
								</div>

							</div>

						</div>
						
						<div class="col col-md">

							<div class="title">
								<div class="title_inner">Pendidikan</div>
							</div>
			
							<div class="resume-items">
								<div class="resume-item content-box">
									<div class="date">2016-2019</div>
									<div class="name">Teknik Komputer dan Jaringan</div>
									<div class="text">SMK N 3 Singaraja</div>
								</div>
								<div class="resume-item content-box active">
									<div class="date">2020-sekarang</div>
									<div class="name">Pendidikan Teknik Informatika</div>
									<div class="text">Universitas Pendidikan Ganesha</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>


			<!-- Pengetahuan -->
			<div class="section skills" id="section-skills-know">
				<div class="content">
					<div class="title">
						<div class="title_inner">Mengetahui</div>
					</div>

					<!-- Skills -->
					<div class="skills list content-box">
						<ul>
							<li> 
								<div class="name">Android Development</div>
							</li>
							<li> 
								<div class="name">Network Administration</div>
							</li>
							<li> 
								<div class="name">Graphics & Animations</div>
							</li>
							<li> 
								<div class="name">Advertising</div>
							</li>
						</ul>
					</div>

				</div>
			</div>

			<!-- Hobi -->
			<div class="section service" id="section-interests">
				<div class="content">
					<div class="title">
						<div class="title_inner">Hobi</div>
					</div>
					<div class="service-items">
						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-campground"></span></div>
								<div class="name">Exploring</div>
								<div class="text">Mengeksplore tempat baru</div>
							</div>
						</div>

						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-gamepad"></span></div>
								<div class="name">Game Open World</div>
								<div class="text">Minecraft & Roblox</div>
							</div>
						</div>

						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-headphones"></span></div>
								<div class="name">Music</div>
								<div class="text">Musik lover sesuai keadaan dan waktu</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>

@endsection
@extends('layout.main')

@section('main')

<div class="wrapper">
			<div class="section started section-title" id="section-started">

				<!-- bg -->
				<div class="video-bg jarallax" style="background-image: url({{asset('assets/images/maps.jpg')}});">
					<div class="video-bg-mask"></div>
					<div class="video-bg-texture" id="grained_container"></div>
				</div>

				<div class="centrize full-width">
					<div class="vertical-center">
						<div class="started-content">
							<h1 class="h-title">Kontak</h1>
							<div class="h-subtitles">
								<div class="h-subtitle typing-bread">
									<p class="breadcrumbs">
										<a href="{{route('Beranda')}}">Beranda</a> / Kontak
									</p>
								</div>
								<span class="typed-bread"></span>
							</div>
						</div>
					</div>
				</div>

				<a href="#" class="mouse_btn" style="display: none;"><span class="icon fas fa-chevron-down"></span></a>

			</div>

			<div class="section contacts" id="section-contacts-info">
				<div class="content">

					<div class="title">
						<div class="title_inner">Info</div>
					</div>

					<div class="service-items">

						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-phone-alt"></span></div>
								<div class="name">Telepon</div>
								<div class="text">+62 85656349944</div>
							</div>
						</div>
						
						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-envelope"></span></div>
								<div class="name">Surel</div>
								<div class="text"><a href="mailto:gusti.anton@outlook.co.id">gusti.anton@outlook.co.id</a></div>
							</div>
						</div>

						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-map-marker-alt"></span></div>
								<div class="name">Alamat</div>
								<div class="text">Singaraja, Bali</div>
							</div>
						</div>

						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-user-tie"></span></div>
								<div class="name">Mahasiswa</div>
								<div class="text">Universitas Pendidikan Ganesha</div>
							</div>
						</div>
					</div>

					<div class="clear"></div>
				</div>
			</div>

			<div class="section contacts" id="section-contacts">
				<div class="content">

					<div class="title">
						<div class="title_inner">Kirim Surel</div>
					</div>

					<!-- form -->
					<div class="contact_form content-box">
						<form id="cform" method="post">
							<div class="group-val">
   								<input type="text" name="name" placeholder="Name" />
							</div>
							<div class="group-val">
								<input type="email" name="email" placeholder="Email" />
							</div>
							<div class="group-val ct-gr">
								<textarea name="message" placeholder="Message"></textarea>
							</div>
							<div class="group-bts">
								<button type="submit" class="btn hover-animated">
									<span class="circle"></span>
									<span class="lnk">Kirim Pesan</span>
								</button>
							</div>
						</form>
						<div class="alert-success">
							<p>Pesan Telah Terikirim :)</p>
						</div>
					</div>

				</div>
				<div class="clear"></div>
			</div>
		</div>

@endsection
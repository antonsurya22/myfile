@extends('layout.main')

@section('main')

<div class="wrapper">	

			<div class="section started section-title" id="section-started">

				<div class="video-bg jarallax" style="background-image: url({{asset('assets/images/Journey.jpg')}});">
					<div class="video-bg-mask"></div>
					<div class="video-bg-texture" id="grained_container"></div>
				</div>

				<div class="centrize full-width">
					<div class="vertical-center">
						<div class="started-content">
							<h1 class="h-title">Galeri</h1>
							<div class="h-subtitles">
								<div class="h-subtitle typing-bread">
									<p class="breadcrumbs">
										<a href="{{route('Beranda')}}">Home</a> / <a href="works.html">Galeri</a>
									</p>
								</div>
								<span class="typed-bread"></span>
							</div>
						</div>
					</div>
				</div>

				<a href="#" class="mouse_btn" style="display: none;"><span class="icon fas fa-chevron-down"></span></a>

			</div>

			<div class="section blog">
				<div class="content content-box">
					<div class="single-post-text">

						<div class="portfolio-info portfolio-cols">
							<div class="description-col">

								<div class="title">
									<div class="title_inner">Deskripsi</div>
								</div>

								<div class="single-post-text">
									<p>
									  There are some people out there… And it doesn’t happen a lot. It’s rare. But they refuse to let you hate them. In fact, they care about you in spite of it. And the really special ones, they’re relentless at it. Doesn’t matter what you do to them. They take it and care about you anyway. They don’t abandon you, no matter how many reasons you give them. No matter how much you’re practically begging them to leave
									</p>

									<!-- Galeri -->
									<div class="gallery-item">
										<p>
											<a href="{{asset('assets/images/photos_1.jpg')}}">
												<img src="{{asset('assets/images/photos_1.jpg')}}" alt="Nature with Selfie" />
											</a>
										</p>
									</div>

								</div>

							</div>
							<div class="details-col">

								<div class="title">
									<div class="title_inner">Detail</div>
								</div>
								
								<ul class="details-list">
									<li><strong>Kategori:</strong> Nature</li>
									<li><strong>Tanggal:</strong> 9 Juni 2021</li>
									<li><strong>Model:</strong> -</li>
									<li><strong>Keterangan:</strong> ISO-40 | f/19 | SM-J400</li>
									<li><strong>Author:</strong> Anton S</li>
								</ul>

							</div>
						</div>

					</div>
					<div class="clear"></div>
				</div>
			</div>

		</div>

@endsection
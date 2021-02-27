<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sudiang adalah kelurahan yang berada di Biringkanaya, Makassar, Sulawesi Selatan, Indonesia. Sudiang memiliki 104 RT dan 22 RW.">
    <meta name="keywords" content="Kantor Kelurahan Sudiang">

    <title>Kantor Kelurahan Sudiang</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('css/style-starter.css')}}">

    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <!-- /web fonts -->  
</head>

<body>
<!-- top-header-strip -->
<header class="w3l-top-header-strip">
    <div class="hero-header-11">
	    <div class="hero-header-11-content">
			<div class="main-header">
				<div class="container-fluid">
					<div class="d-grid grid-columns-auto">
						<div class="right-grid align-left d-grid">
							<div class="quick-links">
								<ul>
									<li>
										<span class="fa fa-phone" aria-hidden="true"></span>
										<a href="tel:(0411) 554833">(0411) 554833</a>
									</li>
									<li>
										<span class="fa fa-envelope-o" aria-hidden="true"></span>
										<a href="mailto:example@mail.com">kelurahansudiang@gmail.com</a></li>
									<li class="mobile-none">
										<span class="fa fa-clock-o" aria-hidden="true"></span>
										<p>Senin-Jumat: 08:00 - 16:00/Sabtu-Minggu Tutup</p>
                                    </li>
                                    <li class="mobile-none">
                                        <span class="fa fa-map-marker mr-2" aria-hidden="true"></span>
                                        <p>Jl. Pendidikan, Sudiang, Kec. Biringkanaya, Kota Makassar, Sul-Sel</p>
                                    </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- //top-header-strip -->
<!-- header -->
<header class="w3l-header">
	<div class="hero-header-11">
		<div class="hero-header-11-content">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg navbar-light py-0 px-0"> 
					{{-- <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('images/logo-icon-sulsel.png')}}" alt="" />Kelurahan Sudiang</a> --}}
					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
						<span class="navbar-toggler-icon fa icon-close fa-times"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mx-auto">
							<li class="nav-item {{ Request::is('/') ? 'active' : '' }} @@home-active">
							    <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="dropdown nav-item {{ Request::is('profil/*') ? 'active' : '' }} @@profil-active">
                                <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item drop-item" href="{{ route('sambutan') }}">Sambutan</a>
                                    <a class="dropdown-item drop-item" href="{{ route('ringkasan') }}">Ringkasan</a>
                                    <a class="dropdown-item drop-item" href="{{ route('visimisi') }}">Visi & Misi</a>
                                </div>
                            </li>
							<li class="nav-item {{ Request::is('staff1') ? 'active' : '' }} @@staff1-active">
								<a class="nav-link" href="{{ route('staff1') }}">Staff</a>
                            </li>
                            <li class="dropdown nav-item {{ Request::is('syaratkepengurusan/*') ? 'active' : '' }} @@syarat-active">
                                <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Syarat Kepengurusan</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item drop-item" href="{{ route('sekretaris') }}">Sekretaris</a>
                                    <a class="dropdown-item drop-item" href="{{ route('kebersihan') }}">Kepala Seksi Kebersihan</a>
                                    <a class="dropdown-item drop-item" href="{{ route('pemerintahan') }}">Kepala Seksi Pemerintahan</a>
                                    <a class="dropdown-item drop-item" href="{{ route('perekonomian') }}">Kepala Seksi Perekonomian</a>
                                </div>
                            </li>
							<li class="nav-item {{ Request::is('kontak') ? 'active' : '' }} @@kontak-active">
								<a class="nav-link" href="{{ route('kontak') }}">Kontak</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>
<!-- //header -->
@yield('content')
<!-- footer -->
<footer class="w3l-footer-29-main" id="footer">
    <div class="footer-29 py-5">
        <div class="container pb-lg-3">
            <div class="row footer-top-29">
                @foreach ($about as $item)
                <div class="col-lg-3 col-md-6 footer-list-29 footer-1 mt-md-4"> 
                    <h6 class="footer-logo"><a class="footer-logo mb-md-3 mb-2" href="#url"><img src="{{ asset('images/logo-sulsel.png')}}" alt="" /></a></h6>
                </div>
                <div class="col-lg-6 col-md-6 footer-list-29 footer-1 mt-md-5">
                    <h6 class="footer-logo"><a class="footer-logo mb-md-3 mb-2" href="#url"><alt="" />{{$item->text1}}</a></h6>
            <p>{{$item->text2}}</p>
                </div>
                <div class="col-lg-3 col-md-6 footer-list-29 footer-4 mt-5">
                    <h6 class="footer-title-29">{{$item->text3}}</h6>
                    <ul>
                        <li><a>Kode Kemendagri: {{$item->text4}}</a></li>
                        <li><a>Kode Pos: {{$item->text5}}</a></li>
                        <li><a>Luas: {{$item->text6}}</a></li>
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div id="footers14-block" class="py-3">
        <div class="container">
            <div class="footers14-bottom text-center">
                <div class="social">
                    <a href="https://www.facebook.com/kelurahan.sudiang.39/" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                    <a href="kelurahansudiang@gmail.com" class="google"><span class="fa fa-envelope-o" aria-hidden="true"></span></a>
                    <a href="https://www.instagram.com/kelsudiang/" class="instagram"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                </div>
                <div class="copyright mt-1">
                    <p>Copyright &copy; 2020. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
        scrollFunction()
        };

        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->
</footer>
<!-- Footer -->

<!-- jQuery  -->
<script src="{{ asset('js/jquery-3.4.1.slim.min.js')}}"></script>

<!-- Template JavaScript -->
<script src="{{ asset('js/owl.carousel.js')}}"></script>

<!-- script for banner slider -->
<script>
    $(document).ready(function () {
        $('.owl-one').owlCarousel({
        loop: false,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
            0: {
            items: 1,
            nav: false
            },
            480: {
            items: 1,
            nav: false
            },
            667: {
            items: 1,
            nav: true
            },
            1000: {
            items: 1,
            nav: true
            }
        }
        })
    })
</script>
<!-- //script banner slider  -->

<!-- script for testimonials -->
<script>
    $(document).ready(function () {
        $('.owl-two').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
            0: {
            items: 1,
            nav: false
            },
            480: {
            items: 1,
            nav: false
            },
            667: {
            items: 1,
            nav: false
            },
            1000: {
            items: 1,
            nav: false
            }
        }
        })
    })
</script>
<!-- //testimonials owlcarousel -->

<!-- for blog carousel slider -->
<script>
    $(document).ready(function () {
        $('.owl-three').owlCarousel({
        loop: true,
        stagePadding: 30,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        nav: false,
        responsive: {
            0: {
            items: 1
            },
            600: {
            items: 2
            },
            1000: {
            items: 3
            }
        }
        })
    })
</script>
<!-- //for blog carousel slider -->

<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll which navbar is in active -->

<!-- stats number counter-->
<script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('js/jquery.countup.js')}}"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats number counter -->

<!-- Bootstrap JS -->
<script src="{{ asset('js/bootstrap.min.js')}}"></script>

</body>
</html>
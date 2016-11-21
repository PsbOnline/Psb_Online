@extends('app.app')

@section('header')
<link rel="stylesheet" href="{{ asset('css/asset/mdb-css/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/asset/mdb-css/css/mdb.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/asset/mdb-css/css/style.css') }}">
<meta name="description" content="Circle Hover Effects with CSS Transitions" />
<meta name="keywords" content="circle, border-radius, hover, css3, transition, image, thumbnail, effect, 3d" />
<meta name="author" content="Codrops" />
<link rel="stylesheet" type="text/css" href="https://maxcds.bottstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/css/asset/mdb-css/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/asset/mdb-css/css/mdb.min.css">
<link rel="stylesheet" type="text/css" href="/design.css">
<link rel="stylesheet" href="video-js.css">
<script src="video.js"></script>
<link href="http://vjs.zencdn.net/5.11.7/video-js.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/css/css/common.css" />
<link rel="stylesheet" type="text/css" href="/css/css/style5.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
<link rel="shortcut icon" href="/favicon.ico">
<link rel="stylesheet" type="text/css" href="/css/slickslide/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="/css/slickslide/slick/slick-theme.css"/> 
<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
@stop

@section('content')

 <navbar>
        <div class="clearfix">
            <span id="logo">
              <a href="#">
                <img src="/psb1.png">
              </a>
            </span>
        <nav class="collapse navbar-toggleable-xs" id="collapseEx2">
        <ul class="nav navbar-nav">
          <li class="nav-item">
			<section class="color-1">
				<nav class="cl-effect-1">
        				<a href="{{ url('home') }}" class="nav-link">Beranda</a>
          			</nav>
          		</section>
          </li>

          <li class="nav-item">
			<section class="color-1">
				<nav class="cl-effect-1">
        				<a href="{{ url('register') }}" class="nav-link">Panduan Pendaftaran</a>
          			</nav>
          		</section>
          </li>

          <li class="nav-item">
			<section class="color-1">
				<nav class="cl-effect-1">
        				<a href="#" class="nav-link">Tentang Sekolah</a>
          			</nav>
          		</section>
          </li>
          <li class="nav-item">
			<section class="color-1">
				<nav class="cl-effect-1">
        				<a href="#" class="nav-link">Diskusi</a>
          			</nav>
          		</section>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link btns btn-sm animated-button victoria-two">
            Login
            </a>
          </li>
        </ul>
        
        </nav>
        </div>

    </navbar>
     
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="card">
					<div class="card-header">
						<h4 class="text-xs-center">Pendaftaran</h4>
					</div>
					<form method="post">
						<div class="md-form">
							<input type="text" class="form-control" id="form1" required autofocus>
              <i class="fa fa-person"></i>
							<label for="form1">Nama lengkap</label>
						</div>
						<div class="md-form">
							<input type="text" class="form-control" id="form2" required autofocus>
							<label for="form2">Alamat rumah</label>
						</div>
						<div class="md-form">
							<input type="text" class="form-control" id="form3" required autofocus>
							<label for="form3">Asal sekolah</label>
						</div>
						<div class="md-form">
							<input type="text" class="form-control" id="form4" required autofocus>
							<label for="form4">Nama ayah</label>
						</div>
						<div class="md-form">
							<input type="text" class="form-control" id="form5" required autofocus>
							<label for="form5">Nama ibu</label>
						</div>

						<div class="md-form">
							<input type="text" class="form-control" id="form6" required autofocus>
							<label for="form6">Nomor telepon</label>
						</div>
						<div class="md-form">
						<center>
							<button class="btn btn-primary btn-lg">Daftar</button>
						</center>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

@section('footer')
<script src="{{ asset('css/asset/mdb-css/js/jquery-2.2.3.min.js') }}"></script>
<script src="{{ asset('css/asset/mdb-css/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('css/asset/mdb-css/js/tether.min.js') }}"></script>
<script src="{{ asset('css/asset/mdb-css/js/mdb.min.js') }}"></script>
<script type='text/javascript'>
    function init() {
        window.addEventListener('scroll', function(e){
          var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 50,
            navbar = document.querySelector("navbar");
          if ((distanceY) > (shrinkOn)) {
            $(navbar).addClass("smaller");
          } else {
            if ($(navbar).hasClass("smaller")) {
              $(navbar).removeClass("smaller");
            }
          }
      });
    }
    init();
</script>
@stop
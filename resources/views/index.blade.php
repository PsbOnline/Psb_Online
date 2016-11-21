@extends('app.app')

@section('header')

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
    
@endsection

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
            				<a href="#" class="nav-link">Beranda</a>
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
            <a href="#" class="btns btn-sm animated-button victoria-two nav-link" style=>Login</a>
          </li>
        </ul>
        
        </nav>
        </div>

    </navbar>
    <div class="kosong"></div>
          <video style="width: 100%;" id="video1" class="video-js vjs-default-skin" data-setup='{ "controls": false, "autoplay": true, "preload": "auto" }' autoplay="true">
                <source src= type='video/mp4'>
          </video>
          <div class="content">
              <ul class="ch-grid">
          <h1 class="Jurusan">Jurusan Kami</h1>
          <li>
            <div class="ch-item ch-img-1">        
              <div class="ch-info-wrap">
                <div class="ch-info">
                  <div class="ch-info-front ch-img-1"></div>
                  <div class="ch-info-back">
                    <b style="color: white; margin-top: 2px; font-size: 25px;">RPL</b>
                    <p>Web Developer, Software engineer, Desktop application, Etc <button type="button" class="btn btn-orange">Daftar</button></p>
                  </div>  
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="ch-item ch-img-2">
              <div class="ch-info-wrap">
                <div class="ch-info">
                  <div class="ch-info-front ch-img-2"></div>
                  <div class="ch-info-back2">
                    <b style="color: white; margin-top: 2px; font-size: 25px;">MM</b>
                    <p>Designer, Animation,Lorem ipsum dolor sit amet, consectetur,Etc <button type="button" class="btn btn-dark-green">Daftar</button></p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          
          <li>
            <div class="ch-item ch-img-3">
              <div class="ch-info-wrap">
                <div class="ch-info">
                  <div class="ch-info-front ch-img-3"></div>
                  <div class="ch-info-back3">
                  <b style="color: white; margin-top: 2px; font-size: 25px;">TKJ</b>
                    <p>Network, Engineer,Lorem ipsum dolor sit amet, consectetur,Etc <button type="button" class="btn btn-indigo">Daftar</button></p>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>

<div class="bisakan" style="height: 350px; background-color: lightgrey;">
  <h1>TEST SLIDE 1</h1>
  <div>TEST SLIDE 2</div>
  <div>TEST SLIDE 3</div>
</div>
<!-- sksk -->
          </div>     
  
@endsection

@section('footer')
<script type="text/javascript" src="/css/asset/mdb-css/js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/css/slickslide/slick/slick.min.js"></script>


<!-- Bootstrap tooltips -->
<script type="text/javascript" src="/css/asset/mdb-css/js/tether.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="/css/asset/mdb-css/js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="/css/asset/mdb-css/js/mdb.min.js"></script>

<script type="text/javascript">
$('.bisakan').slick({
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  autoplay:true,
  autoplaySpeed:1700
});
</script>
        
<script type='text/javascript'>
    function init() {
        window.addEventListener('scroll', function(e){
          var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 200,
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
@endsection
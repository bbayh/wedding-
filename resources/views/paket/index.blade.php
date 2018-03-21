<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Wedding Organizer</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Wedding Venue Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="{{asset('k/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="{{asset('k/css/style.css')}}" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="{{asset('k/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- gallery -->
<link rel="stylesheet" href="{{asset('k/css/lightbox.css')}}">
<!-- //gallery -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="{{asset('k/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('k/js/bootstrap.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
    <!-- banner -->
    <div class="banner jarallax">
        <div class="agileinfo-dot">
            <div class="header">
                <div class="container">
                    <div class="header-top-grids">
                        <div class="agileits-logo">
                            <h1><a href="/home">WO <span>Wedding Organizer</span></a></h1>
                        </div>
                        <div class="top-nav">
                            <nav class="navbar navbar-default">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                                     <nav>
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="/home">Home</a></li>
                                            <li><a href="{{ route('paket.index')}}">Paket</a></li>
                                            <li><a href="{{ route('galeri.index') }}">Galeri</a></li>
                                        
                                        </ul>
                                    </nav>
                                </div>
                                <!-- /.navbar-collapse -->
                            </nav>
                        </div>
                        <div class="agileinfo-social-grids">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="wthree-heading">
                <h2>Paket</h2>
              
                    </div>
                </article>
            </div>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!-- gallery -->
























































































































































































































































































































































































































































































































































































    
    <!-- //gallery -->      
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="agile-footer-grids">
                <div class="col-md-4 agile-footer-grid">
                    <h4>Contact</h4>
                    <div class="agile-footer-info">
                        <p>E-Mail : luxury.wo@gmail.com / info@luxury-wo.com</p>
                        <p>Telepon : 081910131819 / 081910114108 / 0816610800</p>
                    </div>
                </div>
           <div class="col-md-4 agile-footer-grid">
                    <h4>Recent Photo</h4>
                    <div class="agile-post-grids">
                        <div class="agile-post-grid">
                            <div class="col-md-5 agile-post-left">
                                <a href="k/images/p1.jpg">
                                    <img src="k/images/p1.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="agile-post-grid">
                            <div class="col-md-5 agile-post-left">
                                <a href="k/images/p2.jpg">
                                    <img src="k/images/p2.jpg" alt="">
                                </a>
                            </div>
                           
                        </div>
                    </div>
                </div>
    </footer>
    <!-- //footer -->
    <!-- copyright -->
    <div class="agileits-w3layouts">
        <div class="container">
            <p>© 2017 Wedding Organizer</a></p>
        </div>
    </div>
    <!-- //copyright -->
    <!-- jarallax -->
    <script src="k/js/jarallax.js"></script>
    <script src="k/js/SmoothScroll.min.js"></script>
    <script type="text/javascript">
        /* init Jarallax */
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })
    </script>
    <!-- //jarallax -->
    <script src="k/js/SmoothScroll.min.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>
<!-- //here ends scrolling icon -->
<script src="k/js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });
    });
</script>
</body> 
</html>
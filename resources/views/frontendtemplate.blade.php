<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="{{asset('rent4u/img/favicon.png')}}" type="{{asset('rent4u/image/png')}}" />
  <title>Lagoon Logistics</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('rent4u/css/bootstrap.css')}}" />
  <link rel="stylesheet" href="{{asset('rent4u/vendors/linericon/style.css')}}" />
  <link rel="stylesheet" href="{{asset('rent4u/css/font-awesome.min.cs')}}s" />
  <link rel="stylesheet" href="{{asset('rent4u/vendors/owl-carousel/owl.carousel.min.css')}}" />
  <link rel="stylesheet" href="{{asset('rent4u/vendors/nice-select/css/nice-select.css')}}" />
  <link rel="stylesheet" href="{{asset('rent4u/vendors/animate-css/animate.css')}}" />
  <link rel="stylesheet" href="{{asset('rent4u/vendors/jquery-ui/jquery-ui.css')}}" />
  <!-- main css -->
  <link rel="stylesheet" href="{{asset('rent4u/css/style.css')}}" />
  <link rel="stylesheet" href="{{asset('rent4u/css/responsive.css')}}" />
</head>

<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg w-100">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html">
            <img src="{{asset('rent4u/img/logo1.png')}}" alt="" style="width: 120px;"/>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <div class="row w-100">
              <div class="col-lg-12 pr-lg-0">
                <ul class="nav navbar-nav ml-auto justify-content-end">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="about.html">About</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="services.html">Services</a>
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">Pages</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="elements.html">Elements</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">Blog</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="blog-details.html">Blog Details</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  @yield('content')
  <footer class="footer-area section_gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>About Us</h6>
            <p><ul>
              <li>--Reduce the waste of time</li>
              <li>--To safe </li>
              <li>--To save </li>
              Above the factors are our purpose or our mission.

            </ul>

             

            </p>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 col-sm-6 social-widget">
          <div class="single-footer-widget">
            <h6>Follow Us</h6>
            <p>Let us be social</p>
            <div class="footer-social d-flex align-items-center">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-dribbble"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </div>
  </footer>
  <!--================ End footer Area =================-->

  <!--================ Optional JavaScript =================-->
  <!--================ jQuery first, then Popper.js, then Bootstrap JS =================-->
  <script src="{{asset('rent4u/js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('rent4u/js/popper.js')}}"></script>
  <script src="{{asset('rent4u/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('rent4u/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{asset('rent4u/vendors/isotope/isotope-min.js')}}"></script>
  <script src="{{asset('rent4u/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('rent4u/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="{{asset('rent4u/js/mail-script.js')}}"></script>
  <script src="{{asset('rent4u/js/custom.js')}}"></script>
</body>

</html>
@extends('frontendtemplate')

@section('content')

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active ">
     <img src="{{asset('img/ban.jpg')}}" class="img-fluid" style="height: 400px;width: 100%;">     
    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="row">

            <div class="col-lg-6 mb-2">
              <h3>Mission</h3>
              <p style="text-align: justify; color: black;">
                We will consistently deliver quality products, friendly services and great values by practising top notch customer service and make them confident that ‘Seasons’ is their best car rental choice.
              </p>
            </div>

            <div class="col-lg-6 mb-2">
              <h3>Our Values</h3>
              <p style="text-align: justify; color: black;">
                Our business is known for the importance we attach to customer satisfaction and ethical business behaviour. We work by these principles to adhere to them at all times.
              </p>
            </div>

            <div class="col-lg-6 mb-2">
              <h3>Vision</h3>
              <p style="text-align: justify; color: black;">
                We will be a growth-oriented car rental company by efficiently serving value-conscious customers for all of their car rental needs by always innovating. We want to be a leader in the car rental industry and all these elements will drive bottom-line success and show that Seasons Car Rental despite it is small in size.
              </p>
            </div>

            <div class="col-lg-6 mb-2">
              <h3>About</h3>
              <p style="text-align: justify; color: black;">
                Our business is known for the importance we attach to customer satisfaction and ethical business behaviour. We work by these principles to adhere to them at all times.Just type in the date of your rental pick up date and return date. And choose the car that you want to rent. Nyan Myint Thu Car Rental is an affordable, customer friendly dealership, best rate, warm service, safety car, experience driver, cheerful staff.
              </p>
            </div>

            <div class="col-lg-12">
              <img src="{{asset('img/about.jpg')}}" class="img-fluid" style="width: 1200px;height: 500px;">
            </div>

        </div>
      </div>

	<section class="feature-area mt-5">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-7">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="single-feature">
                <img src="{{asset('rent4u/img/feature/f1.png')}}" alt="">
                <h4>Shipment Tracking</h4>
                <p>
                  The French Revolutioncons tituted for the conscience of the dominant the French Revolutioncons.
                </p>
                <a href="{{asset('main')}}">Find your car</a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="single-feature">
                <img src="{{asset('rent4u/img/feature/f2.png')}}" alt="">
                <h4 class="mt-2">Have a Question?</h4>
                <p>
                  The French Revolutioncons tituted for the conscience of the dominant the French Revolutioncons.
                </p>
                <a href="{{asset('contacts')}}">Contact Us</a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="single-feature">
                <img src="{{asset('rent4u/img/feature/f3.png')}}" alt="">
                <h4>Get a Quote</h4>
                <p>
                  The French Revolutioncons tituted for the conscience of the dominant the French Revolutioncons.
                </p>
                <a href="{{asset('services')}}">Start a quote</a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="single-feature">
                <img src="{{asset('rent4u/img/feature/f4.png')}}" alt="">
                <h4>Shipping Calculator</h4>
                <p>
                  The French Revolutioncons tituted for the conscience of the dominant the French Revolutioncons.
                </p>
                <a href="{{asset('abouts')}}">Get Estimate</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-5 offset-md-0 col-md-12 text-left section-title-wrap">
          <h4>About Our Company</h4>
          <h2>
            We’re Carefully <br>
            Delivering your <br>
            happiness.
          </h2>

          <h4>If you are looking at blank cassettes on the web lorem ipsum dolor sit consectetur adipisicing elit,
            eiusmod tempor incididunt.</h4>
          <p style="text-align: justify;">
            If you are looking at blank cassettes on the web lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Eiusmod tempor
            incididunt ut labore et dolore magna aliqua consectetur adipisicing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua.
          </p>
          <a href="{{asset('contacts')}}" class="btn btn-outline-danger">Learn More About Us</a>
        </div>

      </div>
    </div>
  </section>

@endsection
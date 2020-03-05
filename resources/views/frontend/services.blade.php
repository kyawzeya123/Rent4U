@extends('frontendtemplate')

@section('content')
	<section class="home_banner_area banner-area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="banner_content d-flex flex-md-row flex-column" >
              <div class="banner-left text-md-left" style="border-radius: 100px;">
                <h1 style="font-size: 40px;">Our Services</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="service-area  ">
      <div class="container ">
        <div class="row justify-content-center section-title-wrap">
          <div class="col-lg-12 my-5">
            <h5>Our Offered Services</h5>
            <h2 class="text-white">
              We offer Various Services <br />
          
            </h2>
          </div>
        </div>
        <div class="row">
         @foreach($category as $row)
          <div class="single-service col-lg-4 col-md-6" style="border-radius: 20px;">
            <div class="thumb">
              <img class="f-img img-fluid mx-auto" src="{{asset($row->logo)}}" style="height: 200px;"  alt="" />
            </div>
            <div class="service-box">
              <div></div>
              <h3>
                {{$row->name}}
              </h3>
              <a href="{{route('fcars',$row->id)}}">Detail More..</a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
@endsection
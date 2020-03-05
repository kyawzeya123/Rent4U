@extends('frontendtemplate')

@section('content')
@php
$url=$_SERVER['REQUEST_URI'];
$urlarray=explode('/',$url);
$catid=$urlarray[2];

@endphp
	<div class="container-fluid">
    <div>
      <img src="{{asset('img/ferry_banner.png')}}" class="img-fluid" style="height: 200px;">
      <img src="{{asset('img/logo2.png')}}" class="img-fluid" style="height: 250px;">

      
    </div>
  </div>

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
         @foreach($car as $row)
          <div class="single-service col-lg-4 col-md-6" style="border-radius: 20px;">
            <div class="thumb">
              <img class="f-img img-fluid mx-auto" src="{{asset($row->logo)}}" style="height: 200px;" alt="" />
            </div>
            <div class="service-box" id="tbody">
              <div></div>
              <h3>
                {{$row->name}}
              </h3>
             
              <a href="/details/{{$row->id}}/{{$catid}}">Detail More</a>
    
            </div>
          </div>
          @endforeach
        </div>
        
        
      </div>
    </section>
    
    
@endsection



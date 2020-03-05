@extends('frontendtemplate')

@section('content')

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active ">
     <img src="{{asset('img/banner.jpg')}}" class="img-fluid" style="height: 200px;width: 100%;">
      
      
      
    </div>
  </div>
</div>
  <div class="container" >
    <div class="row">
    @foreach($car as $row)

      <div class="col-lg-3 ">
        <div class="card-container">      
          <div class="card">
            <div class="front">
                <div class="cover">
                  <img class="f-img img-fluid mx-auto" src="{{asset($row->logo)}}" style="height: 200px;"  >
                </div>
                <div class="content">
                        <h3 align="center">{{$row->brand_name}}</h3>
                        <div class="price">
                          
                        </div> 
                    </div>
                </div> <!-- end front panel -->
            <div class="back" align="center" style="margin-top: 100px; ">
                <p>
                  <label class="title">Name</label>
                  <span class="value">{{$row->brand_name}}</span>
                </p>
                <p>
                  <label class="title">Car Number</label>
                  <span class="value">{{$row->car_no}}</span>
                </p>
                <p>
                  <label class="title">Fee Per Hour</label>
                  <span class="value">{{$row->feeperhour}}</span>
                </p>
                 <p>
                  <label class="title">Fee Per Day</label>
                  <span class="value">{{$row->feeperday}}</span>
                </p>
                <p>
                  
                  <span class="value" style="float:right;margin-top:35px;"><a href="" class="btn btn-dark">Rent</a></span>
                </p>
                           
            </div> <!-- end back panel -->

        </div>

      </div>

    </div>  


        @endforeach
        

  

  </div>

        <!-- end card -->

    </div> <!-- end card-container -->
    <!-- {{ $car->links() }} -->


@endsection
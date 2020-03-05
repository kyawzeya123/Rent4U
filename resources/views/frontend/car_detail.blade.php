@extends('frontendtemplate')

@section('content')
	<div class="container-fluid">
    <div>
      <img src="{{asset('img/ferry_banner.png')}}" class="img-fluid" style="height: 200px;">
      <img src="{{asset('img/logo2.png')}}" class="img-fluid" style="height: 250px;">

      
    </div>
  </div>

  <section class="service-area  ">
      <div class="container ">
        <div class="row">
          <div class="row justify-content-center section-title-wrap">
            <div class="col-lg-6 my-5">
               <img class="f-img img-fluid mx-auto" src="{{asset($car->logo)}}" style="height: 400px;" alt="" />
            
              </h2>
            </div>
            <div class="col-lg-6 my-5"  >
                <div class="row my-3">
                  <div class="col-lg-3" style="font-size: 20px;">
                    Brand Name
                  </div>
                  <div class="col-lg-9 form-group">
                    <input type="text" class="form-control border-none" readonly="readonly" value="{{$car->brand_name}}" >
                  </div>  
                </div>

                 <div class="row my-3">
                  <div class="col-lg-3" style="font-size: 20px;">
                    Car No.
                  </div>
                  <div class="col-lg-9 form-group">
                    <input type="text" class="form-control border-none" readonly="readonly" value="{{$car->car_no}}" >
                  </div>  
                </div>
         <input type="hidden" class="driverrentdriver" value="" name="">
         <input type="hidden" class="driverrentcar" value="{{$car->id}}" name="">


                 <div class="row my-3">
                  <div class="col-lg-3" style="font-size: 20px;">
                    Fee Per Hour
                  </div>
                  <div class="col-lg-9 form-group">
                    <input type="text" class="form-control border-none" readonly="readonly" value="{{$car->feeperhour}}" >
                  </div>  
                </div>

                <div class="row my-3">
                  <div class="col-lg-3" style="font-size: 20px;">
                    Fee Per Day
                  </div>
                  <div class="col-lg-9 form-group">
                    <input type="text" class="form-control border-none" readonly="readonly" value="{{$car->feeperday}}" >
                  </div>  
                </div>

                <div class="row my-3">
                  <div class="col-lg-4 mx-auto form-group">
                    <a class="form-control btn btn-info rent text-dark " data-id="{{$car->id}}" style="font-weight: bold;" data-driver=""> Rent </a>
                  </div>  
                </div>
            </div>
          </div>      
        </div>

          <div class="col-lg-3 mx-auto my
          -4 mb-5" >
            <h1 class="bg-white" align="center" text-align="center" style="border-radius: 10px;">Choose Drivers</h1>
          </div>  
      </div>

        
        


      <div class="container my-4">    
      
        <div class="row">
          @foreach($driver as $row)
          <div class="col-lg-3" align="center" >
            <img class="img-fluid"  src="{{asset($row->avatar)}}" style="border-radius: 90px;" alt="" />
          <div class="card " style="border: none;border-radius: 10px;" >
            <div class="card-body" >
                <div class="row my-1" align="center" >
    
                  <div class="col-lg-12 form-group text-dark" style="font-size: 20px;">
                    {{$row->name}}
                  </div>
                  <div class="col-lg-12 form-group text-dark">
                    Experience -
                    {{$row->experience}}
                  </div>   
                  <div class="col-lg-12 form-group text-dark">
                   Check:&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="driver" style="size: 200px;" value="{{$row->id}}" class="drivercheck">
                  </div>    
                </div>
            </div>
          </div>
          </div>
           @endforeach
        </div>
       
        </div>
</section>
    
    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      
      <div class="modal-body " style="color: blue;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
          <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-left: 150px;">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">With Date</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">With Time</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="col-lg-6 mx-auto my-3">
                Choose Start Date<br>
              <input type="date" name="start_date" id="start_date" class="form-control srtdate" >
              </div>
              <div class="col-lg-6 mx-auto my-3">
                Choose End Date<br>
              <input type="date" name="end_date" id="end_date" class="form-control enddate" >
              </div>
             <button class="col-lg-4 mx-auto bg-succes form-control" style="background-color: green;color:black;" onclick="myFunction()" type="submit" id="booking">Booking</button>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
               <div class="col-lg-6 mx-auto my-3">
                Choose Start Time<br>
              <input type="time" name="start_date" id="start_date" class="form-control strtime" >
              </div>
              <div class="col-lg-6 mx-auto my-3">
                Choose End Time<br>
              <input type="time" name="start_date" id="start_date" class="form-control endtime" >
              </div>
              <a href="{{route('main')}}"><button class="col-lg-4 mx-auto bg-succes form-control" style="background-color: green;color:black;" id="myBtn" type="submit" id="booking" id="close"  >Booking</button></a>

            </div>
            
          </div>
    </div>
      
    </div>
  </div>
</div>
  
  <div class="container mt-3">
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal body -->
         <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" align="center">Rent4U</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body my-3">
          <h3 style="font-weight: bold;color: blue;">Thank You!</h3>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

    
@endsection

@section('script')
 <script type="text/javascript" >
     $(document).ready(function(){

      $("div").on('click','.rent', function() {
            var id = $(this).data('id');
            var driverid=$(".driverrentdriver").val();
            var carid=$(".driverrentcar").val();
           console.log(driverid,carid);
           $('#booking').attr("data-carid",carid);
           $('#booking').attr("data-driverid",driverid);

          
                $('#detailModal').modal('show');

          
        })


      $(".drivercheck").click(function(){
        var driver_id = $(this).val();
        $(".driverrentdriver").val(driver_id);
    
  });


  $("#detailModal").on('click','#booking',function(){
      var carid=$(this).data('carid');

      var driver_id=$(this).data('driverid');
      //alert(carid);

      var start_date= $(".srtdate").val();

      var end_date= $(".enddate").val();

      var start_time= $(".strtime").val();

      var end_time= $(".endtime").val();
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });

    $.post('/rent',{cid:carid,did:driver_id,strdate:start_date,enddate:end_date,strtime:start_time,endtime:end_time},function(res){
      if(res){
        alert("rent successfully");
         window.location = "/main"
      }

    })

    
  })


  }) 
    

     
 </script>
@endsection




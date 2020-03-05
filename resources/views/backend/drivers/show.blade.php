@extends('backendtemplate')

@section('content')
  
<div class="container">   
  <div class="row">
    <div class="col-12">

    <h2  class="text-dark" align="center">Driver Info</h2>

   <div class="card my-4">
      <div class="card-body" >
        <div class="row">
      <div class="col-lg-5">
        <img src="{{asset($driver->avatar)}}" class="img-fluid w-60" >
      </div>
       <div class="col-lg-7 my-3">
          <div class="row form-group">
            <div class="col-lg-3" style="font-size: 22px;font-weight: bold; ">Name</div>
            <div class="col-lg-9"><input type="text" value="<?=$driver->name ?>" class="form-control bg-transparent" style="border:none;" readonly="readonly"></div>
          </div>
          <div class="row form-group">
            <div class="col-lg-3" style="font-size: 22px;font-weight: bold; ">Age</div>
            <div class="col-lg-9"><input type="text" value="<?=$driver->age ?>" class="form-control bg-transparent" style="border:none;" readonly="readonly"></div>
          </div>
          <div class="row form-group">
            <div class="col-lg-3" style="font-size: 22px;font-weight: bold; ">Nrc</div>
            <div class="col-lg-9"><input type="text" value="<?=$driver->nrc ?>" class="form-control bg-transparent" style="border:none;" readonly="readonly"></div>
          </div>
          <div class="row form-group">
            <div class="col-lg-3" style="font-size: 22px;font-weight: bold; ">Experience</div>
            <div class="col-lg-9"><input type="text" value="<?=$driver->experience ?>" class="form-control bg-transparent" style="border:none;" readonly="readonly"></div>
          </div>          
      </div>
    </div>
      </div>
    </div>

    <div class="row col-2">
      <a href="{{route('drivers.index')}}" class="btn btn-primary btn-block"><i class="fas fa-backward pr-2"></i>  Back 
      </a>
    </div>

  </div>
 </div>
</div>
@endsection


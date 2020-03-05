@extends('backendtemplate')

@section('content')

<div class="container-fluid">

 	<div class="row">
   <div class="col-lg-12 mb-3">
      <a href="{{route('drivers.index')}}" class="btn btn-success" style="float: right;"><h4>Go back</h4>
      </a>
   </div>
  </div>

 	<form method="POST" action="{{route('drivers.store')}}" enctype="multipart/form-data">
 				@csrf
 				<!--comment  -->
      <div class="form-group row">
        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" name="name" placeholder="Enter Your Name">
              @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
              @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="avatar" class="col-sm-2 col-form-label">Avatar</label>
        <div class="col-sm-10">
          <input type="file"  id="avatar" name="avatar" >
              @error('avatar')
          <div class="alert alert-danger">{{ $message }}</div>
              @enderror
        </div> 
      </div>

      <div class="form-group row">
       <label for="email" class="col-sm-2 col-form-label">Email</label>
       <div class="col-sm-10">
         <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter Your Email">
              @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
              @enderror
       </div> 
      </div>


      <div class="form-group row">
       <label for="phone" class="col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-10">
       <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Enter Your Phone">
         @error('phone')
       <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
      </div>


      <div class="form-group row">
       <label for="age" class="col-sm-2 col-form-label">Age</label>
       <div class="col-sm-10">
       <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age" placeholder="Enter Your Age">
         @error('age')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      </div>

      <div class="form-group row">
       <label for="nrc" class="col-sm-2 col-form-label">NRC</label>
       <div class="col-sm-10">
        <input type="text" class="form-control @error('nrc') is-invalid @enderror" id="nrc" name="nrc" placeholder="Enter Your NRC">
         @error('nrc')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      </div>

      <div class="form-group row">
       <label for="address" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
        <textarea class="form-control @error('address') is-invalid @enderror" name="address" ></textarea>
         @error('address')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
      </div>

      <div class="form-group row">
       <label for="experience" class="col-sm-2 col-form-label">Experience</label>
        <div class="col-sm-10">
        <textarea class="form-control @error('experience') is-invalid @enderror" name="experience" ></textarea>
         @error('experience')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-2"></div>
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-save"></i> Save
            </button>
        </div>
      </div>

  </form>

</div>
@endsection


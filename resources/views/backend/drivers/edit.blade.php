@extends('backendtemplate')

@section('content')

 <div class="container-fluid">
 	<div class="row">

   <div class="col-lg-12">
      <a href="{{route('drivers.index')}}" class="btn btn-primary float-right"><h4>Go back</h4></a>
   </div>

 	<div class="col-lg-12">       

 			<form method="POST" action="{{route('drivers.update',$driver->id)}}" enctype="multipart/form-data">

 				@csrf
        @method('PUT')

 				<!--comment  -->

              <div class="form-group">

              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" name="name" value="{{$driver->name}}">

                @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
         
          </div>


            <div class="form-group">
             
              <div class="col-sm-10">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                  <a class="nav-link active" id="oldprofile-tab" data-toggle="tab" href="#oldprofile" role="tab" aria-controls="oldprofile" aria-selected="true" > Old Profile </a>
                </li>
              <li class="nav-item">
                  <a class="nav-link" id="newprofile-tab" data-toggle="tab" href="#newprofile" role="tab" aria-controls="newprofile" aria-selected="false"> New Profile</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="oldprofile" role="tabpanel" aria-labelledby="oldprofile-tab">
                  <img src="{{asset($driver->avatar)}}" class="img-fluid" style="width: 120px; height: 120px;">
                  <input type="hidden" name="oldlogo" value="{{$driver->avatar}}">
                </div>

                <div class="tab-pane fade" id="newprofile" role="tabpanel" aria-labelledby="newprofile-tab">
                  
                  <label for="avatar">Avatar</label><br>
             <input type="file"  id="avatar" name="avatar" class="@error('avatar') is-invalid @enderror">
               @error('avatar')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror

                </div>
            </div>
            </div>
        </div>




            <div class="form-group">
             <label for="email">Email</label>
             <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
              name="email" value="{{$driver->email}}">

                @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>


            <div class="form-group">
             <label for="phone">Phone</label>
             <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" 
             name="phone" value="{{$driver->phone}}">

               @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>


            <div class="form-group">
             <label for="age">Age</label>
             <input type="number" class="form-control @error('age') is-invalid @enderror" id="age"
             name="age" value="{{$driver->age}}">

               @error('age')
    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
             <label for="nrc">NRC</label>
              <input type="text" class="form-control @error('nrc') is-invalid @enderror" id="nrc"
             name="nrc" value="{{$driver->nrc}}">

               @error('nrc')
    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
             <label for="address">Address</label>
             <textarea class="form-control @error('nrc') is-invalid @enderror" name="address" >{{$driver->address}}</textarea>

               @error('address')
    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>



        <button type="submit" class="btn btn-primary">Save</button>
         </form>


 
 	    </div>
   </div>
 </div>

@endsection
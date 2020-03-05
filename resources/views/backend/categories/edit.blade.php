@extends('backendtemplate')

@section('content')


	<div class="container-fluid mt-3">
			<h2 class="text-center"> Category </h2>
	            <form action="{{route('categories.update',$category->id)}}" method="POST" enctype="multipart/form-data" class="mt-4">
	            	@csrf
	            	@method('PUT')
	            	<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label"> name</label>
				    	
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Your Name" name="name" value="{{$category->name}}">

				      		@error('name')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
				    	</div>
					</div>
	
					<div class="form-group row">
						<label for="logo" class="col-sm-2 col-form-label"> Logo </label>
				    	
				    	<div class="col-sm-10">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active" data-toggle="tab" data-target="#old">old</a>  
                                </li>
                               <li class="nav-item">
                                    <a href="#" class="nav-link" data-toggle="tab" data-target="#new">New</a>
                                </li>                                
                            </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade show active " id="old">
                                <img src="{{asset($category->logo)}}" class="img-fluid">
                            </div>
                            <div class="tab-pane fade" id="new">
                                <input type="file" name="logo" class="form-control-file @error('logo') is-invalid @enderror" id="logo">
                                <input type="hidden" name="oldlogo" value="{{$category->logo}}">
                            </div>
                        </div>

				    	</div>
					</div>

			    	<div class="form-group row">
						<div class="col-sm-2"></div>
					    <div class="col-sm-10">
					      <button type="submit" class="btn btn-primary">
					      	<i class="fa fa-save"></i> Update
					      </button>
					    </div>
					</div>

				</form>

	        </div>

@endsection
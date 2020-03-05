@extends('backendtemplate')

@section('content')

	<div class="container-fluid mt-3">
			<h2 class="text-center"> Cars </h2>
	            <form action="{{route('cars.store')}}" method="POST" enctype="multipart/form-data" class="mt-4">
	            	@csrf
	            	<div class="form-group row">
						<label for="brand_name" class="col-sm-2 col-form-label"> Brand_name</label>
				    	
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control @error('name') is-invalid @enderror" id="brand_name" placeholder="Enter Car Name" name="brand_name">

				      		@error('brand_name')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
				    	</div>
					</div>
	

					<div class="form-group row">
						<label for="logo" class="col-sm-2 col-form-label"> Logo </label>
				    	
				    	<div class="col-sm-10">
				      		<input type="file" name="logo" class="form-control-file @error('logo') is-invalid @enderror" id="logo">

				      		@error('logo')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
				    	</div>
					</div>

					

					<div class="form-group row">
						<label for="car_no" class="col-sm-2 col-form-label"> Car number </label>
				    	
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control @error('car_no') is-invalid @enderror" id="car_no" placeholder="Enter Car Number" name="car_no">

				      		@error('car_no')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
				    	</div>
					</div>

					<div class="form-group row">
						<label for="feeperhour" class="col-sm-2 col-form-label"> Feeperhour </label>
				    	
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control @error('feeperhour') is-invalid @enderror" id="feeperhour" placeholder="Enter Hour" name="feeperhour">

				      		@error('feeperhour')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
				    	</div>
					</div>

					<div class="form-group row">
						<label for="feeperday" class="col-sm-2 col-form-label"> Feeperday </label>
				    	
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control @error('feeperday') is-invalid @enderror" id="feeperday" placeholder="Enter Day" name="feeperday">

				      		@error('feeperday')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
				    	</div>
					</div>

					
					<div class="form-group row">
						<label for="category_id" class="col-sm-2 col-form-label">Choose Category </label>
				    	<div class="col-sm-10">
				    	<select  class="form-control" name="category_id">
				    		@foreach($categories as $row)
					    		<option value="{{$row->id}}">{{$row->name}}
					    		</option>
				    		@endforeach
				    	</select>
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
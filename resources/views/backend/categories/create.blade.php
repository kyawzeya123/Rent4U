@extends('backendtemplate')

@section('content')

	<div class="container-fluid mt-3">
			<h2 class="text-center"> Category </h2>
	            <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data" class="mt-4">
	            	@csrf
	            	<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label"> name</label>
				    	
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Your Name" name="name">

				      		@error('name')
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
						<label for="inputCate" class="col-sm-2 col-form-label">Choose Driver: </label>
				    	<div class="col-sm-10">
				    	<select name="driver[]" class="js-example-basic-multiple form-control " multiple="multiple" id="inputCate">
				    		@foreach($driver as $row)
					    		<option value="{{$row->id}}">{{$row->name}}</option>
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

@section('script')
  <script type="text/javascript">
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
  </script>
@endsection

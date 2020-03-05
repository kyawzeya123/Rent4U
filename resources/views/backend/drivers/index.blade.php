@extends('backendtemplate')

@section('content')


<div class="container-fluid">
	<div class="row">

      <div class="col-lg-12">

        <h1 align="center" class="font-weight-bold">Driver</h1>

    <div style="float: right;">
 			<a href="{{route('drivers.create')}}" class="btn btn-success float-right mb-3">Add New</a>
 		</div>

      </div>

		<div class="col-lg-12">

<!-- table -->
 	<div class="card shadow mb-4">

 		

 		<!-- <div class="card-header py-3" style="background-color:skyblue;">
 			<h4 class="m-0 font-weight-bold text-primary">
 				Driver List
 			</h4>
 		</div> -->

 		<div class="card-body">
 			<div class="table-responsive">
 				<table class="table table-bordered" id="dataTable"
 				 width="100" cellspacing="0">


 				 <thead style="color: black;text-align: center; background-color: skyblue;">
 				 	<tr>
 				 		<th>No</th>
 				 		<th>Name</th>
 				 		<th>Email</th>
 				 		<th>Phone</th>         
 				 		<th>Action</th>
 				 		
 				 	</tr>
 				 </thead>

 				 <tbody style="text-align: center;">

 				 	@php $i=1; @endphp

 				 	@foreach($driver as $row)


 				 	<tr>
 				 		<td>{{($i++)}}</td>
 				 		<td>{{($row->name)}}</td>
 				 		<td>{{($row->email)}}</td>
 				 		<td>{{($row->phone)}}</td>
 				 		<td>
 				 			<form method="POST" action="{{route('drivers.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')">
            @csrf
            @method('DELETE')
          <a href="{{route('drivers.show',$row->id)}}" class="btn btn-info">
            <i class="fas fa-info"></i>
          </a>
          <a href="{{route('drivers.edit',$row->id)}}" class="btn btn-warning">
            <i class="fas fa-edit"></i>
          </a>
          <button class="btn btn-danger">
            <i class="fas fa-trash"></i>
          </button>
          </form>
 				 		</td>
 				 	</tr>
 				 	@endforeach
 				 </tbody>
 					

 				</table>
 			</div>
 		</div>

 	</div>

  <!-- table-close -->

 </div>  <!-- columm -->
</div>  <!-- row -->
 </div><!-- container-fluid -->



@endsection



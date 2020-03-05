@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
	<div class="row">
		<div class="col-12">
	<h1 align="center" class="font-weight-bold">Category</h1>
	<div style="float: right;">
 			<a href="{{route('cars.create')}}" class="btn btn-success float-right mb-3">Add New</a>
 	</div>

	<table class="table text-left table-hover table-inverse text-center table-bordered mt-3">
		<thead style="color: black;text-align: center; background-color: skyblue;">
			<tr>
				<td>No</td>
				<td>Name</td>
				<td>Car_no</td>
				<td>Feeperhour</td>
				<td>Feeperday</td>
				<td>Status</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($cars as $row)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$row->brand_name}}</td>
				<td>{{$row->car_no}}</td>
				<td>{{$row->feeperhour}}</td>
				<td>{{$row->feeperday}}</td>
				<td>{{$row->status}}</td>
				<td>
					<form method="POST" action="{{route('cars.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')">
						@csrf
						@method('DELETE')
					<a href="{{route('cars.show',$row->id)}}" class="btn btn-info">
						<i class="fas fa-info"></i>
					</a>
					<a href="{{route('cars.edit',$row->id)}}" class="btn btn-warning">
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

@endsection
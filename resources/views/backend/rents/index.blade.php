@extends('backendtemplate')

@section('content')


  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
      <h1>Rent</h1>

      <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable"
         width="100" cellspacing="0">


         <thead style="color: black;text-align: center; background-color: skyblue;">
          <tr>
            <th>No</th>
            <th>Car Name</th>
            <th>Customer</th>
            <th>Driver id</th>         
            <th>Start time</th>
            <th>End time</th>
            <th>Start Date</th>
            <th>End Date</th>
            
          </tr>
         </thead>

         <tbody style="text-align: center;">

          @php $i=1; @endphp
          @foreach($allrent as $row)

          <tr>
            <td>{{$i++}}</td>
            <td>{{$row->$car_id->brand_name}}</td>
            <td>Linn Nanda Aung</td>
            <td>1.</td>
            <td>10am</td>
            <td>11am</td>
            <td>5.3.2020</td>
            <td>10.3.2020</td>
          </tr>

          @endforeach
         
         </tbody>
          

        </table>
      </div>
    </div>
  </div>
    </div>

  <div><!-- container-fluid -->



@endsection
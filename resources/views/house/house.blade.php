@extends('layouts.base')

@section('content')
<section id="main-content">
	<section class="wrapper">
  <a href="/addHouseform"><i class="fa fa fa-plus fa-2x"></i>Add New House</a>
		<div class="table-agile-info">
 <div class="panel panel-default">

    <div class="panel-heading">
    List of Houses
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Name</th>
            <th data-breakpoints="xs sm md" >Description</th>
            <th>Action</th>
          </tr>
        </thead>
        <table class="table table-sm">

    <tbody>
     
            @foreach($houses as $house)
                    <tr>
                    <td>{{$house->id}}</td>
                    <td>{{$house->name}}</td>
                    <td>{{$house->description}}</td>
                    <td>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                    </td>
            </tr>
                @endforeach

    
      </table>
    </div>
  </div>
</div>
</section>

@endsection
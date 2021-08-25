@extends('layouts.base')

@section('content')
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
    <button class="btn"><i class="fa fa-trash"></i></button>
 <div class="panel panel-default">
    <div class="panel-heading">
    List Of Lands
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
     
            @foreach($lands as $land)
                    <tr>
                    <td>{{$land->id}}</td>
                    <td>{{$land->name}}</td>
                    <td>{{$land->description}}</td>
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
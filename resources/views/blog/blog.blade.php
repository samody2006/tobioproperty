@extends('layouts.base')

@section('content')
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
      <div><i class="fa fa-plus fa-2x"  aria-hidden="true"></i>Add New</div><br>
 <div class="panel panel-default">
    <div class="panel-heading">
    Post
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
            <th>Article Title</th>
            <th data-breakpoints="xs sm md" >Content</th>
            <th>Action</th>
          </tr>
        </thead>
        <table class="table table-sm">

    <tbody>
     
            @foreach($articles as $article)
                    <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->title}}</td>
                    <td>{{$article->content}}</td>
                    <td>
                    <a href="#" ><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-trash fa-x3"></i></a>
                 
                    </td>
            </tr>
                @endforeach

    
      </table>
    </div>
  </div>
</div>
</section>

@endsection
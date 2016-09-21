@extends('layouts.master')

@section('head')
	
	@parent

	<title>User's Mail Info</title>

@stop
@section('content')
      <div class="container">
        <h2>User's Mail ID & Passwords</h2>
        <p>User's Mail ID & Passwords are gven below:</p>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>User ID</th>
              <th>Name</th>
              <th>Password</th>
            </tr>
          </thead>
          @foreach($mailpasses as $mailpass)
          <tbody>
            <tr>
              <td>{{ $mailpass->id }}</td>
              <td>{{ $mailpass->uid }}</td>
              <td>{{ $mailpass->name }}</td>
              <td>{{ $mailpass->pass }}</td>
       	  </tr>
          </tbody>
          @endforeach
        </table>
        <center>{{ $mailpasses->render() }}</center>
      </div>
@endsection
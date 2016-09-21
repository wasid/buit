@extends('layouts.master')

@section('head')
	
	@parent

	<title>Student's Details</title>

@stop
@section('content')
      <div class="container">
        <h2>Student's ID & Passwords</h2>
        <p>Student's ID & Passwords are gven below:</p>
    <form action="{{ route('showstudent') }}" method="post">
    <div class="form-group">
            <label for="labdata">Search ID:</label><br>
            <input type="text" name="studentid" placeholder = "Find With ID"/>
        </div>
      <input type="submit" value="submit" class="btn btn-primary">
      <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>
    </div>
@endsection
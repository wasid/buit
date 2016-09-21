@extends('layouts.master')

@section('head')
	
	@parent

	<title>Lab Details</title>

@stop
@section('content')
      <div class="container">
        <h2>Update Lab PC's Cofiguration</h2>
    <form action="{{ route('storelabdetails') }}" method="post">
    <div class="form-group">
            <label for="labdata">Store Lab info:</label><br>
            <input type="text" name="sl" placeholder = "" class="form-control"/>
            <input type="text" name="lab_name" placeholder = "Lab Name" class="form-control"/>
            <input type="text" name="pc_name" placeholder = "PC Name" class="form-control"/>
            <input type="text" name="pc_ip" placeholder = "PC IP" class="form-control"/>
            <input type="text" name="mac1" placeholder = "Mac" class="form-control"/>
            <input type="text" name="assetno" placeholder = "Asset No." class="form-control"/>
            <input type="text" name="pc_type" placeholder = "PC Type" class="form-control"/>
            <input type="text" name="processor" placeholder = "Processor" class="form-control"/>
            <input type="text" name="motherboard" placeholder = "Motherboard" class="form-control"/>
            <input type="text" name="ram" placeholder = "Ram" class="form-control"/>
            <input type="text" name="hdd" placeholder = "HDD" class="form-control"/>
            <input type="text" name="location" placeholder = "PC Location" class="form-control"/>
            <input type="text" name="department" placeholder = "Department" class="form-control"/>
            <input type="text" name="entrydate" placeholder = "Entry Date" class="form-control"/>
            <textarea rows="5" id="comment" name="comment" placeholder = "Comment"  class="form-control" ></textarea>
        </div>
      <input type="submit" value="submit" class="btn btn-primary">
      <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>  
      </div>
@endsection
@extends('layouts.master')

@section('head')
	
	@parent

	<title>Lab Details</title>

@stop
@section('content')
      <div class="container">
        <h2>Lab PC's Cofiguration</h2>
        <p>Lab PC's Cofiguration are gven below:</p>
    <form action="{{ route('showlabdetails') }}" method="post">
    <div class="form-group">
            <label for="labdata">Select Lab:</label><br>
            <select class="textWidth form-control" name="labdata" id="labdata" type="text">
                <option disabled selected> -- select an option -- </option>
                @foreach($users as $user)
                  <option value="{{$user}}">
                    {{$user}}
                  </option>
                @endforeach
            </select>
        </div>
      <input type="submit" value="submit" class="btn btn-primary">
      <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Serial</th>
              <th>Lab Name</th>
              <th>PC Name</th>
              <th>PC IP</th>
              <th>Mac</th>
              <th>Asset No.</th>
              <th>PC Type</th>
              <th>Processor</th>
              <th>Motherboard</th>
              <th>Ram</th>
              <th>HDD</th>
              <th>PC Location</th>
              <th>Department</th>
              <th>Entry Date</th>
              <th>Comment</th>
            </tr>
          </thead>
          @foreach($labdetails as $labdetail)

          <tbody>
            <tr>
              <td>{{ $labdetail->sl }}</td>
              <td>{{ $labdetail->lab_name }}</td>
              <td>{{ $labdetail->pc_name }}</td>
      	    	<td>{{ $labdetail->pc_ip }}</td>
      	    	<td>{{ $labdetail->mac1 }}</td>
      	    	<td>{{ $labdetail->assetno }}</td>
      	    	<td>{{ $labdetail->pc_type }}</td>
      	    	<td>{{ $labdetail->processor }}</td>
      	    	<td>{{ $labdetail->motherboard }}</td>
      	    	<td>{{ $labdetail->ram }}</td>
      	    	<td>{{ $labdetail->hdd }}</td>
      	    	<td>{{ $labdetail->location }}</td>
      	    	<td>{{ $labdetail->department }}</td>
      	    	<td>{{ $labdetail->entrydate }}</td>
      	    	<td>{{ $labdetail->comment }}</td>
      	    	
    	    	
       	  </tr>
          </tbody>
          @endforeach
        </table>
        <center>{!! $labdetails->links() !!}</center>
      </div>
@endsection
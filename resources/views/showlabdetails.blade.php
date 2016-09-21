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
            <label for="labdata">Select again:</label><br>
            <select class="textWidth form-control" name="labdata" id="labdata" type="text">
                <option disabled selected> -- select again -- </option>
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
              <th>Action</th>
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

          @foreach($labdetails as $index => $labdetail)

          <tbody>
            <tr>
              <td>{{ $index+1 }}</td>
              <td><a data-toggle="modal" data-backdrop="static" data-target="#update_data{{ $labdetail->id }}">Edit</a> | <a>Delete</a>
                
                  <div class="modal fade" id="update_data{{ $labdetail->id }}">
              				<div class="modal-dialog">
              					<div class="modal-content">
              						<div class="modal-header">
              							<button class="close" data-dismiss="modal">&times;</button>
              							<h4>Add New Person</h4>
              						</div>
              						<div class="modal-body">
              							<form onsubmit="return submit_form();" id="user_form">
              								<div class="form-group">
              									<label>Lab Name</label>
              									<input type="text" id="labname" class="form-control" value="{{ $labdetail->lab_name }}" required>
              								</div>
              								<div class="form-group">
              									<label>PC Name</label>
              									<input type="text" id="pcname" class="form-control" value="{{ $labdetail->pc_name }}" required>
              								</div>
              								<div class="form-group">
              									<label>PC IP</label>
              									<input type="text" id="pcip" class="form-control" value="{{ $labdetail->pc_ip }}" required>
              								</div>              								
              								<div class="form-group">
              									<label>PC MAC</label>
              									<input type="text" id="pcmac" class="form-control" value="{{ $labdetail->mac1 }}" required>
              								</div>              								
              								<div class="form-group">
              									<label>Asset No.</label>
              									<input type="text" id="pcasset" class="form-control" value="{{ $labdetail->assetno }}" required>
              								</div>              								
              								<div class="form-group">
              									<label>PC Type</label>
              									<input type="text" id="pctype" class="form-control" value="{{ $labdetail->pc_type }}" required>
              								</div>              								
              								<div class="form-group">
              									<label>Processor</label>
              									<input type="text" id="pcpros" class="form-control" value="{{ $labdetail->processor }}" required>
              								</div>              								
              								<div class="form-group">
              									<label>Motherboard</label>
              									<input type="text" id="pcmb" class="form-control" value="{{ $labdetail->motherboard }}" required>
              								</div>              								
              								<div class="form-group">
              									<label>Ram</label>
              									<input type="text" id="pcram" class="form-control" value="{{ $labdetail->ram }}" required>
              								</div>              								
              								<div class="form-group">
              									<label>Hard Disk</label>
              									<input type="text" id="pchdd" class="form-control" value="{{ $labdetail->hdd }}" required>
              								</div>              								
              								<div class="form-group">
              									<label>Location</label>
              									<input type="text" id="pcloc" class="form-control" value="{{ $labdetail->location }}" required>
              								</div>
              								<div class="form-group">
              									<label>Department</label>
              									<input type="text" id="pcdept" class="form-control" value="{{ $labdetail->department }}" required>
              								</div>              								
              								<div class="form-group">
              									<label>Entry Date</label>
              									<input type="text" id="pcdate" class="form-control" value="{{ $labdetail->entrydate }}" required>
              								</div>
              								<div class="form-group">
              									<label>Comment</label>
              									<textarea id="pccomnt" class="form-control">{{ $labdetail->comment }}</textarea>
              								</div>
              							
              								<div class="form-group">
              									<button class="btn btn-info btn-block btn-lg">Submit</button>
              								</div>
              							</form>
              						</div>
              						<div class="modal-footer">
              							<div class="text-right">
              								<button class="btn btn-danger" data-dismiss="modal">Close</button>
              							</div>
              						</div>
              					</div>
              				</div>
              			</div>                
                
              </td>
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
      </div>
@endsection
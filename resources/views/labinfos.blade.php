@extends('layouts.master')

@section('head')
	
	@parent

	<title>Lab Information</title>

@stop
@section('content')
      <div class="container">
        <h2>Lab PC's Information</h2>
        <p>Lab PC's Information are gven below:</p>

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Lab Name</th>
              <th>PC Total</th>
              <th>IP Range</th>
              <th>Printer</th>
              <th>Total ups</th>
              <th>software</th>
              <th>Date</th>
            </tr>
          </thead>
          @foreach($labinfos as $labinfo)

          <tbody>
            <tr>
              <td>{{ $labinfo->lab_name }}</td>
              <td>{{ $labinfo->total_pc }}</td>
              <td>{{ $labinfo->ip_range }}</td>
      	    	<td>{{ $labinfo->printer_model }}</td>
      	    	<td>{{ $labinfo->total_ups }}</td>
      	    	<td>{{ $labinfo->software }}</td>
      	    	<td>{{ $labinfo->update_date }}</td>

       	  </tr>
          </tbody>
          @endforeach
        </table>
        <center>{!! $labinfos->links() !!}</center>
      </div>
@endsection
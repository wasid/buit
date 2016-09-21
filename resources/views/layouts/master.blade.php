<!DOCTYPE html>
<html>
    <head>
        @section('head')
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        @show 
    </head>
    <body>
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
	 			</button>
	 			<a href="#" class="navbar-brand" >BRACU IT</a>
			</div>
			<div class="navbar-collapse collapse navbar-responsive-collapse">
				<ul class="nav navbar-nav">
					<li><a href="{{ route('welcome') }}">Browse</a></li>
					<li><a href="{{ route('labdetails') }}">Lab Details</a></li>
					<li><a href="{{ route('getstudent') }}">Student Info</a></li>
					<li><a href="{{ route('mailpass') }}">Users Mail</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					@if(!Auth::check())
						<li><a href="#">Register</a></li>
						<li><a href="{{ URL::route('getlogin') }}">Login</a></li>
					@else
						<li class="dropdown">
         				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, {{{ isset(Auth::user()->lab_name) ? Auth::user()->lab_name : Auth::user()->email }}}<span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Change password</a></li>
				            <li><a href="{{ route('getlogout') }}">LogOut</a></li>
				          </ul>
				        </li>
				      </ul>
					@endif
				</ul>
			</div>
		</div>
	</div>
	<div class="container">@yield('content')</div>
	@section('javascript')
		<script src="http://code.jquery.com/jquery-1.12.0.min.js" type="text/javascript"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        
	@show
    </body>
    <div class="navbar navbar-default">
		<div id="footer">
			<div class="container">
			<p class="navbar-text pull-left">Copyright © 2016&nbsp; system@bracuniversity.ac.bd &nbsp;</p>
			<p class="navbar-text pull-right">Developed by: <a href="https://www.linkedin.com/in/wasid-hossain-976788100" target="_blank">M. M. Wasid Hossain</a></p>
			</div>
		</div>
	</div>
</html>

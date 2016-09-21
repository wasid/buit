<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
    		<h1>Login</h1>
    		<form action="{{ route('postlogin') }}" method="post">
    			<div class="form-group">
    				<label for="lab_name">ID: </label>
    				<input id="lab_name" name="lab_name" type="text" class="form-control">
    			</div>
    			<div class="form-group">
    				<label for="password">Password: </label>
    				<input id="password" name="password" type="password" class="form-control">
    			</div>
    			<div class="checkbox">
    				<label for="remember">
    					<input type="checkbox" name="remember" id="remember">
    					Remember Me
    			</div>
    			<div class="form-grouup">
    				<input type="submit" value="Login" class="btn btn-primary">
    				<input type="hidden" name="_token" value="{{ Session::token() }}">
    			</div>
    		</form>
    	</div>
    </body>
</html>
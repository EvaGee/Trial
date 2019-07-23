<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title></title>
<link rel="stylesheet" href="{{asset('custom/css/bootstrap.min.css')}}">
</head>
<body>

<h1>Accommodation Complaints Handling System</h1>
<h2>Login Here</h2>
<div class="container">
<div class="row">
<div div class="col md-offset-3 md-offset-9">
	<form method="post" action="/api/retrieve" class="bg-info">
       @csrf
		<table class="table table-dark">
			<tr>
				<td>Username</td>
				<td class="form-group"><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
			 	<td class="form-group"><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td class="form-group"><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
	</div>
	</div>
	</div>
</body>
</html> 

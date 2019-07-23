<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title></title>
<link rel="stylesheet" href="{{asset('custom/css/bootstrap.min.css')}}">


<style type="text/css">
.jumbotron {
	color:"bg-success";
    padding: 0.5em 0.6em;
    h1 {
        font-size: 2em;
    }
    p {
        font-size: 1.2em;
        .btn {
            padding: 0.5em;
        }
    }
}
  </style>
</head>
<body background="/custom/Images/shop1.jpg">
<div class="container">
<div class="row">
<div div class="col md-offset-3 col md-3">
<div class="jumbotron">
<h1>My Online Shop</h1>
<h2>Register</h2>

	<form method="post" action="/register">
	@csrf
		<table class="table table-dark striped">
			<tr>
				<td>First Name</td>
				<td class="form-group"><input type="text" name="fname"></td>
			</tr>
			<tr>
				<td>Last Name</td>
			 	<td class="form-group"><input type="text" name="lname"></td>
			</tr>
            <tr>
				<td>Email</td>
			 	<td class="form-group"><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Phone Number</td>
			 	<td class="form-group"><input type="tel" name="phone"></td>
			</tr>

            <tr>
				<td>Password</td>
			 	<td class="form-group"><input type="password" name="password"></td>
			</tr>
				<td></td>
				<td class="form-group"><input type="submit" value="Register"></td>
			</tr>
		</table>
	</form>
	</div>
	</div>
	</div>
	</div>
</body>
</html> 

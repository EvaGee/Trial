<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title></title>
<link rel="stylesheet" href="{{asset('custom/css/bootstrap.min.css')}}">
<style type="text/css">
.jumbotron {
	color:"bg-danger"
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
<div class="jumbotron">
<div div class="col md-offset-3 col md-3">
	<h1>Online Shop</h1>
	<h2>Login Here</h2>
	<form method="post" action="/retrieves" >
       @csrf
		<table class="table table-dark">
			<tr>
				<td>Email</td>
				<td class="form-group"><input type="email" name="email"></td>
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
	</div>
</body>
</html> 

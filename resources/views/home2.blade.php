<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>RESULTS</title>
<link rel="stylesheet" href="{{asset('custom/css/bootstrap.min.css')}}">
</head>
<body>

<h1>Accommodation Complaints Handling System</h1>

     <div class="container">
     <div class="row">
     <div class="col md-offset-3 md-offset-9">
		<table class="table table-striped table-hover lead">
			
            @foreach($details as $detail)
       <tr>
       <td>{{$detail->username}}</td>
       <td>{{$detail->password}}</td>
       </tr>

            @endforeach

		</table>
            </div>
            </div>

</body>
</html> 

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>RESULTS</title>
<link rel="stylesheet" href="{{asset('custom/css/bootstrap.min.css')}}">
<style type="text/css">

.jumbotron {
	color:"bg-danger";
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
 
    img{
	width:250px;
	height:250px;
	-webkit-transition:width 2s,height 2s -webkit-transform 2s;
	transition:width 2s,height 2s,transform 2s;
	opacity:1;
	filter:alpha(opacity=60);
}

img:hover 
{	width:300px;
	height:300px;
	opacity=1;
	filter:alpha(opacity=100);
}
    </style>

</head>
<body background="/custom/Images/shop1.jpg">

<div class="jumbotron">
<h1>Welcome</h1>
<form method="post" action="https://payments.ipayafrica.com/v3/ke">
	@csrf
    
		@foreach($fields as $field => $value)
				<input type="hidden" name="{{$field}}" value="{{$value}}">
                 @endforeach
                 <div class="row">
	<div class="col-sm-4">
<img class="img-rounded"src="/custom/Images/maize.jpg"title="Jogoo @150"height="500px"width="500px">
    <input type="submit" value="Pay">
    <input type="hidden"    name="hsh"  value="{{$generated_hash}}">
    <input type="hidden" name="ttl" value="150">
               
                </div>
	</form>
	<div class="col-sm-4">
<img class="img-circle"src="/custom/Images/corn.jpg"title="Corn"height="500px"width="500px">
	</div>
	<div class="col-sm-4">
<img class="img-rounded"src="/custom/Images/soko.jpg"title="Soko"height="500px"width="500px">
	</div>
</div>
    
    </div>
</body>
</html>
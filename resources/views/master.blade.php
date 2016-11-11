<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD</title>

	<link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
<div class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="#">CRUD</a>
	</div>

	<div class="collapse navbar-collapse" id="navbar">
	<ul class="nav navbar-nav">
		<li class="active" ><a href="/blog">:)</a></li>
	</ul>
	<form class="navbar-form navbar-left" roles="search">
	<div class="form-group">
	<input type="text" class="form-control" placeholder="Search" >
	</div>
	<button type="submit" class="btn btn-default" >Submit</button>		
	</form>
	<ul class="nav navbar-nav navbar-right">
	<li><a href="#"></a></li>
	</ul>
	</div>
</div>
</nav>
	<div class="container">
	<div class="row">
	<div class="col-md-1-12">
		@yield('content')
	</div>
	</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" ></script>
	<script src="{{asset('/js/bootstrap.min.js')}}"></script>
</body>
</html>

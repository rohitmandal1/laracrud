<!DOCTYPE html>
<html>
<head>
	<title>To do List</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	@include('inc.navbar')
<div class="container">
	@include('inc.messages')
	@yield('content')
</div>
<footer id="footer" class="text-center">
	<p>Copyright &copy; 2019</p>
</footer>
</body>
</html>
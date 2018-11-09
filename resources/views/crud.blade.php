<!DOCTYPE html>
<html>
<head>
	<title>Crud Operations with Laravel+Vuejs</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div id="app">
		<Myheader></Myheader>
			<div class="container">
				<router-view></router-view>
			</div>
		<MyFooter></MyFooter>		
	</div>

	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<title>title @yield('title')</title>
		<link rel="stylesheet" type="text/css" href="blade.css">
    </head>
	<body>
		<div class="wrapper">
            <div id="header">
				@section('header')
			        хедер
				@show
			</div>
            <div id="aside">
				@section('aside')
			        сайдбар
                @show
			</div>
			<div id="container">
            <div id="main">
				@section('main')
			        контент
                @show
			</div>
            <div id="footer">
				@section('footer')
			        футер
                @show
	        </div>
        </div>
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Keywords" content="">
  <meta name="description" content=""/>
	<!--link rel="icon" href="{{url('images/fav_logo.png')}}" type="image/png">
	<link rel="shortcut icon" href="{{url('images/fav_logo.png')}}" type="image/png"-->

	@yield('meta')

	<title>CSEA</title>
	{!! Html::style('css/bootstrap.css') !!}
	{!! Html::style('css/mdb.css') !!}
	{!! Html::style('css/backendstyles.css') !!}
	{!! Html::script('js/jquery.min.js') !!}
	{!! Html::script('js/bootstrap.min.js') !!}
	{!! Html::script('js/mdb.min.js') !!}

<body>


		@yield('content')





		@yield('script')

		<script>

		</script>

</body>
</html>

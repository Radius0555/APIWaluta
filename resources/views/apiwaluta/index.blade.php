<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <title>API</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/export-data.js"></script>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
	</head>
    <body>
	<div class="columns">
		<api-waluta></api-waluta>
	</div>
	</body>
</html>
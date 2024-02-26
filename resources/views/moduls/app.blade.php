<?
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield ('title-block')</title>
	<link rel="stylesheet" href="@yield  ('style-way')style/style.css">
    <link rel="stylesheet" href="@yield  ('style-way')style/style_2.css">
    <link rel="stylesheet" href="@yield  ('style-way')style/style_moduls.css">
    <link rel="stylesheet" href="@yield  ('style-way')style/basket.css">
    <link rel="stylesheet" href="@yield  ('style-way')style/media_query.css">
	<link rel="shortcut icon" href="@yield  ('style-way')images/favicon.ico" type="image/x-icon">
    <meta name="facebook-domain-verification" content="bjl0kfnw1qbzvxvh4dvithn29nu1xg" />
</head>
<body>
    @include ('moduls.inc.head')
    	<main>
		    <div class="container">
	            @yield ('content')
            </div>
        </main>
    @include ('moduls.inc.footer')
</body>
<script src="{{ asset("scripts/besket.js") }}"></script>
<script src="{{ asset("scripts/function.js") }}"></script

</html>

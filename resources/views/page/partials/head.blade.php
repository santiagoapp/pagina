<!DOCTYPE html>
<html lang="en">
<head>

	<title>{!! setting('site.title') !!}</title>
<!-- 
Hydro Template 
http://www.templatemo.com/tm-509-hydro
--> 
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="{!! setting('site.description') !!}">
<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="The Name or Title Here">
<meta itemprop="description" content="{!! setting('site.description') !!}">
<meta itemprop="image" content="http://www.example.com/image.jpg">
<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@publisher_handle">
<meta name="twitter:title" content="Page Title">
<meta name="twitter:description" content="{!! setting('site.description') !!}">
<meta name="twitter:creator" content="@author_handle">
<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image:src" content="http://www.example.com/image.jpg">
<!-- Open Graph data -->
<meta property="og:title" content="Title Here" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.example.com/" />
<meta property="og:image" content="http://example.com/image.jpg" />
<meta property="og:description" content="{!! setting('site.description') !!}" />
<meta property="og:site_name" content="{!! setting('site.title') !!}" />

<link rel="stylesheet" href="{{asset('vendor/hydro-master/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('vendor/hydro-master/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('vendor/hydro-master/css/font-awesome.min.css')}}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('vendor/hydro-master/css/templatemo-style.css')}}">
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id={!! setting('site.google_analytics_tracking_id') !!}"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', '{!! setting('site.google_analytics_tracking_id') !!}');
</script>
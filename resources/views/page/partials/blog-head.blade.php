<!DOCTYPE html>
<html lang="en">
<head>	
	<title>{!! $post->seo_title !!}</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="{!! $post->meta_description !!}">
	<meta name="robots" content="{!! $post->robots_index . ',' . $post->robots_follow !!}" />
	<!-- Schema.org markup for Google+ -->
	<meta itemprop="name" content="{!! $post->seo_title !!}">
	<meta itemprop="description" content="{!! $post->meta_description !!}">
	<meta itemprop="image" content="{!! Voyager::image($post->thumbnail('facebook')) !!}">
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="{!! $post->seo_title !!}">
	<meta name="twitter:description" content="{!! $post->meta_description !!}">
	<meta name="twitter:image:src" content="{!! Voyager::image($post->thumbnail('facebook')) !!}">
	<!-- Open Graph data -->
	<meta property="og:title" content="{!! $post->seo_title !!}" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="{!! url()->current() !!}" />
	<meta property="og:image" content="{!! Voyager::image($post->thumbnail('facebook')) !!}" />
	<meta property="og:description" content="{!! $post->meta_description !!}" />
	<meta property="og:site_name" content="{!! $post->url !!}" />
	<meta property="article:published_time" content="{!! $post->created_at !!}" />
	<meta property="article:modified_time" content="{!! $post->updated_at !!}" />
	<meta property="article:section" content="{!! $post->category->name !!}" />
	<meta property="article:tag" content="{!! $post->category->name !!}" />

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
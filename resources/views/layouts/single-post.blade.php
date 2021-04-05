<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SPI - Spiritual Practice Institute</title>
          <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Lato:400,300" rel="stylesheet" type="text/css">
	    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
    </head>
<body>
@extends('layouts.allposts-header')
<br><br><br><br><br>
<div class="container-fluid">
	<div class="row margin-vert-60">
		<div class="col-md-12">
			<h2>|| {{$blog->title}} ||</h2>
			<hr style="width: 100%;">
			<section class="py-5">
			<div class="container">
			<div class="row">
				<div class="col-md-3">
				@if($blog->image != "No image")
					<img style="border-radius: 20px;" src="{{asset($blog->image)}}" alt="about-me" class="margin-top-10">
				@else
					<img style="border-radius: 20px;" src="{{asset('img/om.jpg')}}" alt="about-me" class="margin-top-10">
				@endif
				</div>
				<div class="col-md-9 margin-bottom-10">
					<h3 class="padding-top-10 pull-left">Pandit Maheshwarnath Doobay <small style="color: #f59332;">- <b>published @ {{$blog->created_at}}</b></small></h3>
					
					<div class="clearfix"></div>
					<br>
					<p>{{$blog->article}}</p><br><br>
					@if($blog->links != "")
					<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="{{ Str::replaceArray('watch?v=', ['embed/'], $blog->links) }}" allowfullscreen></iframe>
					</div>
					@else
					<div>
					
					</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					@endif
				</div>
				
			</div>
			</section>
		</div>
	</div>
</div><br>
@extends('layouts.footer')
</body>
</html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SPI</title>
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
			<h2>|| All blog posts ||</h2>
			<hr style="width: 100%;">
			<section class="py-5">
			<div class="container">
				<div class="row">
				@foreach($posts as $post)
					<div class="col-md-4">
					@if($post->image != "No image")
						<img style="width:285px; height: 285px; border-radius: 5%;" src="{{asset($post->image)}}">
					@else
					   	<img style="width:285px; height: 285px; border-radius: 5%;" src="{{asset('img/om.jpg')}}">
					@endif
						<h3>|| {{$post->title}} ||</h3>
						<p>{{\Illuminate\Support\Str::limit($post->article, 40, $end='...') }}</p>
						<a href="{{ route('blogs.show', $post->id) }}" class="text-primary">Read more ></a>
					</div>
				@endforeach
				</div>
			</div>
			</section>
		</div>
	</div>
	{{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {!! $posts->links() !!}
        </div>
</div><br>
@extends('layouts.footer')
</body>
</html>
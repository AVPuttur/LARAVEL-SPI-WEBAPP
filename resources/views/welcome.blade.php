<!DOCTYPE html>
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
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
    @extends('layouts.header')

        <div id="home" class="container-fluid" style="background-color: #ffdbb0; padding-top:130px; padding-bottom:70px">
            <div class="row margin-top-30">
                <div class="col-md-12 text-center">
                    <h2 class="text-center">Welcome to <span style="color: #f59332;">Spiritual Practice Institute</span></h2>
                    <p class="text-center">A group of Devotees from Spiritual Practice Institute lead by Pandit Maheshwarnath Doobay.</p>
                </div>
                <img class="center" src="{{asset('img/guru1.jpg')}}" alt="First slide">
            </div> 
        </div>    

        <div id="about" class="container-fluid" style="background-color: #ffdbb0; padding-top:120px;padding-bottom:70px">
            <div class="row margin-vert-60">
                    <div class="col-md-12">
                        <h2>|| About Us ||</h2>
                        <hr  style="width: 100%;">
                        <div class="row">
                            <div class="col-md-3">
                                <img style="border-radius: 20px;" src="{{asset('img/pic.jpg')}}" alt="about-me" class="margin-top-10">
                                <ul class="list-inline about-me-icons">
                                    <li><a href="https://www.facebook.com/groups/pandit.maheshwarnath.doobay/"><i class="fab fa-3x fa-facebook"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCaLOsK_A2j8OsKFLQ3TzjkA"><i class="fab fa-3x fa-youtube"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-md-9 margin-bottom-10">
                                <h3 class="padding-top-10 pull-left">Pandit Maheshwarnath Doobay <small style="color: #f59332;">- <b>President & Lead Purohit</b></small></h3>
                                
                                <div class="clearfix"></div>
                                <br>
                                <p>Rituals help to overcome obstacles in life.</p>
                                <p>This group consists of the Spiritual Practice Aspirant/Divine Life Aspirant of the Voluntary Supporting Team of the PANDIT MAHESHWARNATH DOOBAY Spiritual Practice Institute.</p><br><br>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <h4 style="color: #f59332;">100 % RELIABILITY</h4>
                                <hr>
                                <p>Reliability is the precondition for trust</p>
                            </div>
                            <div class="col-md-4">
                                <h4 style="color: #f59332;">COMPREHENSIVENESS</h4>
                                <hr>
                                <p>With all Simplicity and Humility</p>
                            </div>
                            <div class="col-md-4">
                                <h4 style="color: #f59332;">ACCURACY & RELEVANCY</h4>
                                <hr>
                                <p>Leading to a proper planning, prosperity and success</p><br><br>
                            </div>
                            <div class="col-md-4">
                                <h4 style="color: #f59332;">SURRENDING TO THE ALMIGHTY</h4>
                                <hr>
                                <p>The Almighty,the Holy and Divine Mother and the Higher energy for ultimate harmony and peace</p>
                            </div>
                            <div class="col-md-4">
                                <h4 style="color: #f59332;">CONFIDENTIALITY</h4>
                                <hr>
                                <p>No breach of Privacy</p>
                            </div>
                            <div class="col-md-4">
                                <h4 style="color: #f59332;">PROPER GUIDANCE TO DIVINITY</h4>
                                <hr>
                                <p>Guidance to Divinity leading to Success, Material and Spiritual Progress</p>
                            </div>
                        </div>
                        <!-- End My Work -->
                    </div>
                </div>
        </div>

<div id="blog" class="container-fluid" style="background-color: #ffdbb0; padding-top:120px;padding-bottom:70px">
    <div class="row">
        <!-- Portfolio -->
        <!-- Portfolio Item -->
        <h2>|| Guruji's Blog ||</h2>
        <hr style="width: 100%;">
        @foreach($posts as $post)
        <div class="portfolio-item col-sm-4 animate fadeIn">
            <div class="image-hover">
                <a href="#">
                    <figure style="">
                        @if($post->image != "No image")
                            <img style="width: 100%; height: 300px;" src="{{asset($post->image)}}" alt="image3">
                        @else
                            <img style="width: 100%; height: 300px;" src="{{asset('img/om.jpg')}}" alt="image3">
					    @endif    
                        
                        <div class="overlay">
                            <a class="expand" href="#"></a>
                        </div>
                    </figure>
                    <h3 class="margin-top-20">|| {{$post->title}} ||</h3>
                    <p class="margin-top-10 margin-bottom-20">{{\Illuminate\Support\Str::limit($post->article, 40, $end='...') }}</p>
                    <div class="btn btn-default">
                        <a class="info" href="{{ route('blogs.show', $post->id) }}">Read more</a>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
        
    </div>
    <div class="text-center" style="text-align: center; font-weight: bold;">
        <p><a href="{{ url('/allposts') }}"><h3>View all posts</h3></a></p>
        </div>
    <hr id="contact" style="width: 100%;">
</div>
<div id="contact" class="container-fluid" style="background-color: #ffdbb0; padding-top:70px;padding-bottom:70px">
        <div class="row margin-vert-60">
        <!-- Main Column -->
        <div class="col-md-6">
            <!-- Main Content -->
            <div class="headline"><h2>|| Keep in touch with Guruji ||</h2></div>
            <hr  style="width: 100%;">
            <!-- Contact Form -->
            <form>
                <label>Name</label>
                <div class="row margin-bottom-20">
                    <div class="col-md-6 col-md-offset-0">
                        <input class="form-control" type="text">
                    </div>
                </div>
                
                <label>Email <span class="color-red">*</span></label>
                <div class="row margin-bottom-20">
                    <div class="col-md-6 col-md-offset-0">
                        <input class="form-control" type="text">
                    </div>
                </div>
                
                <label>Message</label>
                <div class="row margin-bottom-20">
                    <div class="col-md-8 col-md-offset-0">
                        <textarea rows="8" class="form-control"></textarea>
                    </div>
                </div>
                
                <p><button type="submit" class="btn btn-primary">Send Message</button></p>
            </form>
            <!-- End Contact Form -->
            <!-- End Main Content -->
        </div>
        <!-- End Main Column -->
        <!-- Side Column -->
        <div class="col-md-6">
            <!-- Recent Posts -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Contact Info</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled">
                        <li><i class="fas fa-phone-alt"></i> +230-5251-3850</li>
                        <li><i class="fas fa-envelope"></i> panditmaheshwarnathdoobay@gmail.com</li>
                        <li><i class="fas fa-globe"></i> http://spiritualpracticeinstitute.com</li>
                    </ul>
                    <p>You can find us at these two Mandir on the respective days:</p>
                    <p><b><span class="fas fa-map-marker-alt" style="color: #f59332;"> Ganga Shiv Mandir,</span> Allée Brillant, Castel, Mauritius</b></p>
                    <ul class="list-unstyled">
                        <li><strong class="color-primary">Monday: Shiv Abhishek</strong> 7pm to 8pm</li>
                        <li><strong class="color-primary">Tuesday: Chandi Homam</strong> 7pm to 8.30pm</li>
                        <li><strong class="color-primary">Saturday: Shiv Abhishek</strong> 7am to 8am</li>
                    </ul>
                    <p><b><span class="fas fa-map-marker-alt" style="color: #f59332;"> Nav Durga Mandir,</span> Royal Road, Crève Coeur, Mauritius</b></p>
                    <ul class="list-unstyled">
                        <li><strong class="color-primary">Sundays: Shiv Abhishek & Chandi Homam</strong> 7.30am to 9.30am</li>
                    </ul>
                </div>
            </div>
            <!-- End recent Posts -->		
        </div>
    </div><br>
    <h2 style="text-align: center;">~ Pandit Maheshwarnath Doobay ~</h2>
    <div class="container" style="text-align: center;">
        <div class="row">
            <p style="font-style: italic; font-size: 14px;" class="text-center"><span style="color: white; font-size: 30px;">&ldquo;</span>Hariom. Devotees having faith in Durga Maa may listen to,follow and if possible recite together this Shree Durga Saptashati Paatha while surrendering to the Higher Energy and Holy Divine Mother Shakti to intervene rapidly and to eradicate all virus negatively affecting the world at large.Thanks for your consideration...<span style="color: white; font-size: 30px;">&rdquo;</span></p>
            
        </div>
    </div>
   
</div>
@extends('layouts.footer')
</body>
</html>

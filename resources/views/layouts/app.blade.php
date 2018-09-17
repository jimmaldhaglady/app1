<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>BISWAS College The Best CA Coaching centre in Kerala</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="BISWAS COLLEGE" content="Best CA College in Kerala,Best CMA College in Kerala,Best CS College in Kerala,Best College for B. Com,Professional B. Com in Kerala,Best B. Com Classes in Kerala,Best B. Com Classes in Kottayam,Best B. Com Classes in Changanacherry,Best CA Coaching in Kerala,Best CMA Coaching in Kerala,Best CS Coaching in Kerala,CA Coaching in Kottayam,CMA Coaching in Kottayam">
    <meta name="author" content="BISWAS INSTITUTE OF MANAGEMENT STUDIES">
    <meta name="copyright" content="copyright BISWAS INSTITUTE OF MANAGEMENT STUDIES - 2015">
    <meta name="description" content="Best CA College in Kerala,Best CMA College in Kerala,Best CS College in Kerala,Best College for B. Com,Professional B. Com in Kerala,Best B. Com Classes in Kerala,Best B. Com Classes in Kottayam,Best B. Com Classes in Changanacherry,Best CA Coaching in Kerala,Best CMA Coaching in Kerala,Best CS Coaching in Kerala,CA Coaching in Kottayam,CMA Coaching in Kottayam">
    <meta name="keywords" content="Best CA College in Kerala,Best CMA College in Kerala,Best CS College in Kerala,Best College for B. Com,Professional B. Com in Kerala,Best B. Com Classes in Kerala,Best B. Com Classes in Kottayam,Best B. Com Classes in Changanacherry,Best CA Coaching in Kerala,Best CMA Coaching in Kerala,Best CS Coaching in Kerala,CA Coaching in Kottayam,CMA Coaching in Kottayam">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <title>{{ config('app.name', 'Biswas College') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">

    
    @yield('style')

    <header class="header" >
        <div class="container">
            <div class="brand-left col-lg-12">
                <a class="navbar-brand col-lg-3" href="/" style="float: left;">
                    <img src="{{ asset('images/logo.png') }}" alt="Biswas COLLEGE OF Professional Studies" title="Biswas COLLEG OF Professional Studies">
                </a>
                <div class="brand-text col-lg-12 ">
                    <span class="head col-lg-12">Biswas COLLEGE</span>
                    <span class="subhead col-lg-12">OF Professional Studies</span>
                    <span class="location col-lg-12">Changanacherry, Kerala</span></div>
             </div>
            <div class="header-right col-lg-5 paddtop">
                <div class="right-logo">
                    <img src="{{ asset('images/ICWAI_0.png') }}" alt="Academic Impact" title="Academic Impact"> 
                </div>

                <div class="right-text">
                    <p class="iso"> &nbsp;  &nbsp;  &nbsp;An Authorised Study Centre of </p>
                    <h3 style="color: #fff; margin-top: 0">ICMAI Kottayam Chapter</h3>
                </div>                
            </div>
        </div>
    </header>

    <nav class="navbar-default nav-main navbar-expand-md" role="navigation" style="background-color: #034079;">
        <div class="container">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Left Side Of Navbar -->
                
                <ul id="menu-main" class="nav navbar-nav ">
                    <li class="{{(\Request::route()->getName()=='home')?'active':''}}"><a title="Home" href="{{route('home')}}">Home</a></li>
                   
                    <li class="dropdown{{(\Request::route()->getName()=='about')?' active':''}}">
                        <a class="dropdown-toggle" title="About As" href="#" data-toggle="dropdown">About Us
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a title="About As" href="{{route('about')}}">About Us</a>
                            </li>
                            <li>
                                <a title="MD Message" href="{{route('md-message')}}">MD&#039;s Message</a>
                            </li>
                        </ul>
                    </li>
                  
                   <!-- <li class="{{(\Request::route()->getName()=='Courses')?'active':''}}" ><a title="Courses" href="{{route('Courses')}}">Courses</a></li>-->

                        
                    <li class="dropdown{{(\Request::route()->getName()=='Courses')?' active':''}}"><a title="Courses" href="#" class="dropdown-toggle" data-toggle="dropdown">Courses</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a title="CA+B.Com" href="{{route('ca')}}">CA+B.Com</a>
                            </li>
                            <li>
                                <a title="CMA+B.Com" href="{{route('cma')}}">CMA+B.Com</a>
                            </li>
                             <li>
                                <a title="CS+B.Com" href="{{route('cs')}}">CS+B.Com</a>
                            </li>
                            <li>
                                <a title="Professional B.Com" href="{{route('prfb')}}">Professional B.Com</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown{{(\Request::route()->getName()=='Courses')?' active':''}}"><a title="Academy" href="#" class="dropdown-toggle" data-toggle="dropdown">Academy</a>
                        <ul class="dropdown-menu">  
                            <li>
                                <a title="Faculty and Advisory Board" href="{{route('Faculty.index')}}">Faculty and Advisory Board</a>
                            </li>
                            <li>
                                <a title="Batches And Timings" href="{{route('batchs-timing.index')}}">Batches And Timings</a>
                            </li>
                            <li>
                                <a title="Demo Class" href="{{route('demoClass')}}">Demo Class</a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{(\Request::route()->getName()=='Apply_Online')?'active':''}}"><a title="Apply Online" href="{{route('Apply_Online.create')}}">Apply Online</a></li>
                
                    
                    <li class="{{(\Request::route()->getName()=='E-Brochure')?'active':''}}"><a title="E-Brochure" target="_blank" href="{{ asset('uploads/broucher/BCPS.pdf') }}">E-Brochure</a></li>
                   
                    <li class="{{(\Request::route()->getName()=='Facilities')?'active':''}}"><a title="Facilities" href="{{route('Facilities')}}">Facilities </a></li>

                     <li class="dropdown{{(\Request::route()->getName()=='Gallery')?' active':''}}"><a title="Gallery" href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a title="Photo Gallery" href="{{route('Gallery.index')}}"> Photo Gallery</a>
                            </li>
                            <li>
                                <a title="Video Gallery" href="{{route('video')}}">Video Gallery</a>
                            </li>
                        </ul>
                    </li>

                     <li class="{{(\Request::route()->getName()=='Contact')?'active':''}}"><a title="Facilities" href="{{route('contact')}}">Contact US</a></li>
                </ul>
         
            </div>
        </nav>
    <div>
    </div>

        <main>
            @yield('content')
        </main>
    </div>




       
    <footer class="footer">
        <div class="container paddtop">
            <div class="col-md-12 paddtop">
                <div class="col-md-5">
                    <a class="" href="/" style="float: left;">
                        <img class="col-md-12" src="{{ asset('images/footerLogo.png') }}" alt="Biswas COLLEG OF Professional Studies" title="Biswas COLLEG OF Professional Studies">
                    </a>
                </div>


                <div class="col-md-7 col-sm-12 paddtop   col-xs-12  col-lg-7  paddtop  col-12 paddtop  col-xl-12" >
                    <div class="col-sm-12  col-xs-12 col-lg-12  col-xl-12 clearfix"><br /></div>
                    <div class=" col-sm-12 paddtop   col-lg-12 paddtop  col-xl-12 paddtop col-12">
                    <!-- <div class="col-12  paddtop clearfix"> -->
                      
                        <a href="{{route('batchs-timing.index')}}" class="button02 col-md-3 col-sm-3 col-xs-6 col-lg-3   col-xl-12  col-4" style="margin-left: 20px">
                        <div  style="font-size:13px"> Batches and Timings </div>
                        </a>
                        <a href="{{route('Apply_Online.create')}}" class="button02 col-md-3 col-sm-10 col-xs-2 col-lg-2  col-xl-12 col-5" style="margin-left: 20px">
                        <div  style="font-size:13px"> Apply Online</div>
                        </a>
                       
                        
                        <a href="http://www.biswaseducation.com/" class="button02 col-md-3 col-sm-3 col-xs-6  col-lg-2 col-xl-12 col-3" style="margin-left: 20px">
                        <div  style="font-size:13px"> Biswas Education</div>
                        </a>
                   <!--  </div> -->
                   <!--  </div> -->
                </div>
                </div>






                <div class="col-md-12"><br /></div>
            </div>
        <div class="row footer-top col-md-12 ">
            <div class="col-md-12 col-sm-12">
                <ul id="menu-footer-menu" class="footer-menu">
                <li class="{{(\Request::route()->getName()=='home')?'active':''}}">
                    <a title="Home" href="{{route('home')}}">Home</a>|</li>
                <li class="{{(\Request::route()->getName()=='about')?' active':''}}">
                            <a title="About As" href="{{route('about')}}">About Us</a>|
                        </li>
                        <li>
                            <a title="MD Message" href="{{route('md-message')}}">MD&#039;s Message</a>|
                        </li>
                        <li>
                            <a title="CA+B.Com" href="{{route('ca')}}">CA+B.Com</a>|
                        </li>
                        <li>
                            <a title="CMA+B.Com" href="{{route('cma')}}">CMA+B.Com</a>|
                        </li>
                        <li>
                            <a title="CA+B.Com" href="{{route('cs')}}">CS+B.Com</a>|
                        </li>
                        <li>
                            <a title="Professional B.Com" href="{{route('prfb')}}">Professional B.Com</a>|
                        </li>
                        <li>
                            <a title="Demo Class" href="{{route('demoClass')}}">Demo Class</a>|
                        </li>
                        <li class="{{(\Request::route()->getName()=='Courses')?' active':''}}">
                            <a title="Faculty and Advisory Board" href="{{route('faculty')}}">Faculty and Advisory Board</a>|
                        </li>
                        <li class="{{(\Request::route()->getName()=='Apply_Online')?'active':''}}">
                            <a title="Apply Online" href="{{route('Apply_Online.create')}}">Apply Online</a>|
                        </li>
                        <li>
                            <a title="Batches And Timings" href="{{route('batchs-timing.index')}}">Batches And Timings</a>|
                        </li>
                        <li class="{{(\Request::route()->getName()=='Gallery')?'active':''}}">
                            <a title="Gallery" href="{{route('Gallery.index')}}">Gallery</a>|
                        </li>
                        <li class="{{(\Request::route()->getName()=='E-Brochure')?'active':''}}">
                            <a title="E-Brochure" href="{{ asset('uploads/broucher/BCPS.pdf') }}">E-Brochure</a>|
                        </li>
                        <li class="{{(\Request::route()->getName()=='Facilities')?'active':''}}">
                            <a title="Facilities" href="{{route('Facilities')}}">Facilities </a>|
                        </li>
                        <li class="{{(\Request::route()->getName()=='Contact')?'active':''}}">
                            <a title="Facilities" href="{{route('contact')}}">Contact US</a>
                        </li>
            </ul>
        </div>
        </div>
        </div>
    </footer>
    

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/toastr.js') }}"></script>

    @yield('script')
</body>
</html>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <title>{{ config('app.name', 'Biswas College') }}</title>
    <link href="{{url('css/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/sb-admin.css')}}" rel="stylesheet">
    <link href="{{url('css/plugins/morris.css')}}" rel="stylesheet">
    <link href="{{url('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    @yield('style')
      <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
               <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="" style="padding-left: 50px"><strong>Biswas College</strong></a>
                </div>
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin </a>
                    <ul class="dropdown-menu">
                        <li class="divider"></li>
                        <li>
                            <a href="{{route('login')}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul> 
                </li>
            </ul>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active"> <a href=""></i></a></li>
                       
                    <li class="{{(\Request::route()->getName()=='home')?'active':''}}"><a title="home" href="{{route('adminhome')}}"><i class="fa fa-home" aria-hidden="true"></i>
                    </i>&nbsp Home</a></li>

                    <li class="{{(\Request::route()->getName()=='Apply_Online')?'active':''}}"><a title="Apply Online" href="{{route('Apply_Online.index')}}"><i class="fa fa-fw fa-bar-chart-o"></i>&nbsp Application</a></li>

                    
                
                    <li class="{{(\Request::route()->getName()=='contact-us')?'active':''}}"><a title="Contacts" href="{{route('contact-us.index')}}"><i class="fa fa-fw fa-dashboard"></i>
                    &nbsp Contacts</a></li>





                    <li class="{{(\Request::route()->getName()=='courses')?'active':''}}"><a title="Courses" href="{{route('admincourses.index')}}"><i class="fa fa-book" aria-hidden="true"></i>&nbsp Courses</a></li>




                    <li class="{{(\Request::route()->getName()=='batchs-timing')?'active':''}}"><a title="Batches and Timing" href="{{route('batchs-timing.index')}}"><i class="fa fa-clock-o" aria-hidden="true"></i>
                    </i>&nbsp Batches and Timing</a></li>


                     <li class="{{(\Request::route()->getName()=='Faculty')?'active':''}}"><a title="Faculty" href="{{route('Faculty.index')}}"><i class="fa fa-users" aria-hidden="true"></i>
                    </i>&nbsp Faculty</a></li>




                     <li class="{{(\Request::route()->getName()=='Gallery')?'active':''}}"><a title="Gallery" href="{{route('Gallery.index')}}"><i class="fa fa-image" aria-hidden="true"></i>
                    </i>&nbsp Gallery</a></li>



         


                </ul>
            </div>
        </nav>
        </div>
        </div>
    </div>
        <main>
            @yield('content')
        </main>
    </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/toastr.js') }}"></script>
    @yield('script')
</body>
</html>


@extends('layouts.app')

@section('style')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" href="css/photogallery/styles.css" rel="stylesheet" media="all" />
<link href="css/photogallery/prettyPhoto.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
        <div class="about-row">
            <a href="#" >
          
                <div class="col-md-12" >
                    <h2></h2>
                    <ul class="home-gal-list">
                      

                         <li class="col-md-3">
                            <a title="Award Ceremony" href="{{route('inauguration')}}">

                                 <img src="{{ asset('images/gallery/awardinagurationbycfthomasmla.jpg') }}" class="img-rounded" alt="award inaguration by c f thomas mla"> Inauguration</a>

                            </li>

                         <li class="col-md-3"><a title="Award Ceremony" href="{{route('award')}}"><img src="{{ asset('images/award/catoppersalltime.jpg')}}" class="img-rounded" alt="catoppersalltime">Award Ceremony</a></li>


                        <li class="col-md-3"><a title="Onam Celebration" href="{{route('onam14')}}"><img src="{{ asset('images/onam14/onambhadradeepam.jpg') }}" class="img-rounded" alt="onambhadradeepam">Onam Celebration-2014</a></li>
                         <li class="col-md-3"><a title="Xmas Celebration" href="{{route('xmas')}}"><img src="{{ asset('images/xmas/xmascelebration6.jpg') }}">Xmas Celebration</a></li>

                        <li class="col-md-3"><a title="Onam Celebration" href="{{route('onam15')}}"><img src="{{ asset('images/onam15/onamcolash.jpg') }}" class="img-rounded" alt="onamcolash">Onam Celebration-2015</a></li>

                        <li class="col-md-3"><a title="Onam Celebration" href="{{route('onam')}}"><img src="{{ asset('images/onam/onamcolash.jpg') }}" class="img-rounded" alt="onamcolash">Onam Celebration-2017</a></li>

                       <li class="col-md-3"><a title="Tour Programs" href="{{route('tour')}}"><img src="{{ asset('images/tour/tourtripinooty.jpg') }}" class="img-rounded" alt="tour trip in ooty">Tour Programs</a></li> 

                         <li class="col-md-3"><a title="Award Ceremony" href="{{route('otherimage')}}"><img src="{{ asset('images/other/unofficialstaff.jpg') }}" class="img-rounded" alt="">Other Images</a></li>
                     </ul>
                </div>
            </a>
        </div>

@endsection

@section('script')
 <script type="text/javascript" src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js')}}"></script>
 <script src="{{ asset('js/photogallery/jquery.quicksand.js')}}" type="text/javascript"></script>
 <script src="{{ asset('js/photogallery/jquery.easing.js')}}" type="text/javascript"></script>

  <script src="{{ asset('js/photogallery/script.js')}}" type="text/javascript"></script>
 <script src="{{ asset('js/photogallery/jquery.prettyPhoto.js')}}" type="text/javascript"></script> 
@endsection
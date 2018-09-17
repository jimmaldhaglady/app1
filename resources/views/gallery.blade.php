

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
                    <div class="img-rounded">
                    <ul class="home-gal-list">
                        <li class="col-md-3">
                           <div class="thumbnail">
                         <a title="inaguration" href="{{route('inauguration')}}" class="btn btn-info" style="text-align: center;font-weight:bold;"><img 
                        src="{{ asset('images/gallery/awardinagurationbycfthomasmla.jpg') }}"class ="img-rounded" alt="award inaguration by c f thomas mla"> Inauguration</a>
                        </div>
                    </li>

                         <li class="col-md-3">
                            <div class="thumbnail">
                                <a title="Award Ceremony" href="{{route('award')}}" class="btn btn-info" style="text-align: center;font-weight:bold;"><img src="{{ asset('images/award/catoppersalltime.jpg')}}" class="img-rounded" alt="catoppersalltime" align="center">Award Ceremony</a>
                            </div></li>


                        <li class="col-md-3">
                             <div class="thumbnail">
                                <a title="Onam Celebration" href="{{route('onam14')}}" class="btn btn-info" style="text-align: center;font-weight:bold;"><img src="{{ asset('images/onam14/onambhadradeepam.jpg') }}" class="img-rounded" alt="onambhadradeepam">Onam Celebration-2014</a>
                            </div></li>
                         <li class="col-md-3">
                              <div class="thumbnail">
                                <a title="Xmas Celebration" href="{{route('xmas')}}" class="btn btn-info" style="text-align: center;font-weight:bold;"><img src="{{ asset('images/xmas/xmascelebration6.jpg') }}">Xmas Celebration</a>
                            </div></li>

                        <li class="col-md-3">
                              <div class="thumbnail">
                                <a title="Onam Celebration" href="{{route('onam15')}}" class="btn btn-info" style="text-align: center;font-weight:bold;"><img src="{{ asset('images/onam15/onamcolash.jpg') }}" class="img-rounded" alt="onamcolash">Onam Celebration-2015</a>
                            </div></li>

                        <li class="col-md-3">
                              <div class="thumbnail">
                                <a title="Onam Celebration" href="{{route('onam')}}" class="btn btn-info" style="text-align: center;font-weight:bold;"><img src="{{ asset('images/onam/onamcolash.jpg') }}" class="img-rounded" alt="onamcolash">Onam Celebration-2017</a>
                            </div></li>

                       <li class="col-md-3">
                         <div class="thumbnail">
                            <a title="Tour Programs" href="{{route('tour')}}" class="btn btn-info" style="text-align: center;font-weight:bold;"><img src="{{ asset('images/tour/tourtripinooty.jpg') }}" class="img-rounded" alt="tour trip in ooty">Tour Programs</a>
                        </div></li> 

                         <li class="col-md-3">
                              <div class="thumbnail">
                                <a title="Award Ceremony" href="{{route('otherimage')}}" class="btn btn-info" style="text-align: center;font-weight:bold;"><img src="{{ asset('images/other/unofficialstaff.jpg') }}" class="img-rounded" alt="">Other Images</a>
                            </div></li>
                     </ul>
                 </div>
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
@extends('layouts.app')
@section('content')
        <div class="about-row">
                <div class="col-md-12" >
                    <h2></h2>
                    <ul class="home-gal-list">
                       @foreach($xmasc as $xmas)
                        <li class="col-md-3">
                        <img src="images/gallery/{{$xmas->image}}" class = "thumbnail" >
                        </li>
                        @endforeach
                     </ul>
                </div>
              
        </div>
@endsection

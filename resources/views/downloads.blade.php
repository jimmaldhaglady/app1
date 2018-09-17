@extends('layouts.app')
@section('style')
  <!-- 
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css"> -->
@endsection
@section('content')




  <!-- Start of content block --> 
  
  <div class="editor-indent" style="margin-left: 20px; padding: 0 0 0 40px; margin-right: 50px">

<div class="contain">
      <div class="well">
            <h2 data-sr-id="3" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; "><i class="fa fa-lightbulb-o black" aria-hidden="true"></i> <span class="" style="color: rgb( 48, 193, 232 );">E-Broucher</span> </h2>
            <p>
             Check this Broucher to more about the Biswas College of Professional Studies
              </p>
            <a href="{{ asset('uploads/broucher/BCPS.pdf') }}"><button id="button" style="padding:2px;border:1px solid rgb( 48, 193, 232 );"><span class="" style="color: rgb( 48, 193, 232 );">Download Now</span></button></a>
      </div>

<!-- 
       <div class="well">
            <h2 data-sr-id="3" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; "><i class="fa fa-lightbulb-o black" aria-hidden="true"></i> <span class="" style="color: rgb( 48, 193, 232 );">Application Form</span> </h2>
            <p>
             Check this  Application Form to admission Procedure
              </p>
            <a href="{{ asset('uploads/broucher/applicationform.pdf') }}"><button id="button" style="padding:2px;border:1px solid rgb( 48, 193, 232 );"><span class="" style="color: rgb( 48, 193, 232 );">Download Now</span></button></a>
      </div>
 -->





           
                    
                  </div>
                </div>
              </div>
        </div> 

 </div>

@endsection

@section('script')

<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   
@endsection
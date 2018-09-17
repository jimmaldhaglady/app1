@extends('layouts.admin')

@section('style')
 <link href="{{ asset('css/bootstrap.min.css" rel="stylesheet')}}">
  <link href="{{ asset('css/sb-admin.css" rel="stylesheet')}}">
  <link href="{{ asset('css/plugins/morris.css" rel="stylesheet')}}">
 <link href="{{ url('font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css')}}">

@endsection

@section('content')

    <div id="wrapper">
        <div id="page-wrapper">
           <div class="container-fluid">
            {!!csrf_field()!!}
                 <div class="col-lg-12">
                   <h1 class="page-header" style="padding-left: 340px"><strong style="color: #00BFFF">Gallery </strong> <strong style="color: #00BFFF">     Details</strong></h1>
                         <div >
                         <h3 style="color: #00BFFF">Add New Gallery Category </h3>
                         </div>
                  </div>
              <div class="container">
              
    <!--.............................ADD NEW GALLERY...................................-->
               <form action="{{route('adgallery')}}" style="padding-bottom: 40px">
                {{csrf_field()}}
                   
               <div class="container" >
                  <div class="col-md-8">
                     <div class="col-md-12">
                    <div class="col-md-12">
                        <label class="col-md-3">Gallery Name:</label>
                        <input type="text" placeholder="Enter Gallery Name Here.."  class=" col-md-9 form-control" name="galleryname" required>
                     </div> 
                   <!--   <div class="col-md-12">
                        <label class="col-md-3" style="padding-top: 20px">Choose Image:</label>
                     </div>
                     <div class="btn btn-default image-preview-input" style="padding-left: 430px" >
                        <input type="file"  accept="image/png, image/jpeg, image/gif" name="image"> 
                    </div> -->
                     <div class="clearfix col-md-12"><br />
                        <button class="btn btn-success" type="submit"><i class="fa fa-save"></i>&nbspSave</button> 
                    <button class="btn btn-danger" type="reset"><i class="fa fa-trash" aria-hidden="true"></i>&nbspReset</button>
                     </div>
                    </div>
                 </div>
                </form>
             </div>
            </div>
@endsection

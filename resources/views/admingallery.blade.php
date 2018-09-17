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
                         <h3 style="color: #00BFFF">Update Gallery</h3>

            
                         </div>
                  </div>

              <div class="container">
               <form action="{{route('Gallery.store')}}" enctype='multipart/form-data' method="post"> 
           {!!csrf_field()!!}

                  <div class="col-md-8">
                     <a href="{{route('Gallery.create')}}" style="float:right" class="btn btn-sm btn-info "> <i class="fa fa-plus" aria-hidden="true"></i></a>
                     <div class="col-md-12">

                       <label class="col-md-3" style="padding-top: 20px">Select Gallery:</label>
                         <select id="gallery" style="min-height: 40px;" class="form-control col-md-5" name="gallery" required="">
                           <option selected> Select Gallery</option>
                           @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->galleryname}}
                            </option>
                            @endforeach
                        </select>
                            <div class="col-md-12">
                            <label class="col-md-3" style="padding-top: 20px">Choose Image:</label>
                            </div>
                        <div class="btn btn-default image-preview-input" style="padding-left: 430px" >
                        <input type="file"  accept="image/png, image/jpeg, image/gif" name="image"> 
                        </div>
                         <div class="clearfix col-md-12"><br />
                          <button class="btn btn-success" type="submit"><i class="fa fa-upload" aria-hidden="true"></i>&nbspUpdate</button>
                          <button class="btn btn-danger" type="reset"><i class="fa fa-trash" aria-hidden="true"></i>&nbspReset</button>
                         </div>
                     </div>
                  </div>
              </div>
            </div>
         </form>
   
             </div>
            </div>
@endsection

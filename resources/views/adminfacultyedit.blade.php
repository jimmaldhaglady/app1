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
                    <div class="col-lg-12">
                    <h1 class="page-header" style="padding-left: 340px"><strong style="color: #00BFFF">Faculty </strong> <strong style="color: #00BFFF">  Details</strong></h1>
                    <div class="panel panel-default">
                  </div>
             <div class="container" style="padding-bottom: 10%">
             <form action="{{route('Faculty.update',$faculties->id)}}" name="facultyform" enctype='multipart/form-data' method="POST"> 
           {!!csrf_field()!!}
           {{ method_field('PUT') }}
                  <div class="col-md-8">
                        <div class="col-md-12">
                        <label class="col-md-3">Sur Name:</label>
                        <input type="text"  placeholder="Enter Faculty Sur Name Here.." class=" col-md-9 form-control" value="{{$faculties->fcqualification}}" name="surname">
                     </div>
                  
                        <div class="col-md-12">
                        <label class="col-md-3">Name:</label>
                        <input type="text"  placeholder="Enter Faculty Name Here.." class=" col-md-9 form-control" value="{{$faculties->fcname}}" name="fcname" required>
                     </div>
                      <div class="col-md-12">
                        <label class="col-md-3">Classification:</label>
                        <input type="text" placeholder="Enter Faculty Classification Here.."  class=" col-md-9 form-control" value="{{$faculties->fcclassification}}" name="classification" >
                     </div>
                     <div class="col-md-12">
                        <label class="col-md-3">Designation:</label>
                        <input type="text" placeholder="Enter Faculty  Designation Here.."  class=" col-md-9 form-control" value="{{$faculties->fcdesignation}}" name="fcdesignation">
                     </div>
                     <div class="col-md-12">
                        <label class="col-md-3">Description:</label>
                        <textarea placeholder="Enter Faculty Description Here.." rows="3"  class=" col-md-9 form-control" name="fcdetails" required>{{$faculties->fcdetails}}</textarea>

                     </div>
                     <div class="col-md-12">
                        <label class="col-md-3" style="padding-top: 10px">Image:</label>
                     </div>
                     <img src="{{  asset('images/faculty/'.$faculties->image)}}" height="150px" width="150px">
                     <div class="btn btn-default image-preview-input" style="padding-left: 430px" >
                      <!-- <span class="image-preview-input-title">Browse</span>
                   <i class="fa fa-folder-open-o" aria-hidden="true"></i> -->
                      
                        <input type="file" size="10" id="image"  accept="image/png, image/jpeg, image/gif" name="image" value="{{$faculties->image}}"> 
                    </div>

                     <div class="col-md-12">
                        <label class="col-md-8">Image Order to display:</label>
                        <input type="number" min="1" step="1" placeholder="Use Numeric digits only."  class=" col-md-9 form-control" value="{{$faculties->fcimageorder}}" name="fcimageorder" required>

                        <div class="clearfix col-md-12"><br />
                      
                          <button class="btn btn-success" onclick="checkimgSRC();" type="submit"><i class="fa fa-upload" aria-hidden="true"></i></i>&nbspUpdate</button> 
                     </div>
                 </form>
                </div>
              </div>
           <div class="col-md-12"><br /><br /></div>
         </div>
      </div>
      
    
   </div>
 </div>
</div>

@endsection


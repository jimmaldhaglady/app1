 @extends('layouts.admin')
@section('style')
<link href="{{ asset('css/bootstrap.min.css" rel="stylesheet') }}">
<link href="{{ asset('css/sb-admin.css" rel="stylesheet') }}">
<link href="{{ asset('css/plugins/morris.css" rel="stylesheet') }}">
<link href="{{ asset('font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css') }}">
@endsection
@section('content')
<div id="wrapper">
   <div id="page-wrapper">
      <div class="container">
         <h1 class="page-header" style="padding-left: 340px"><strong style="color: #00BFFF">Batches and Timing</strong> <strong style="color: #00BFFF">Details</strong></h1>
         <h1 class="page-header">
            <h2 style="color: #00BFFF">Add Batches and Timing</h2>
         </h1>
         <div class="panel-body">
            <div class="container">
               <form action="{{route('batchs-timing.update',$batches->id)}}" method="POST">
                  {{csrf_field()}}
                   {{ method_field('PATCH') }}
                  <div class="col-md-8">
                     <div class="col-md-12">

                        <label class="col-md-3">Course:</label>
                        <select id="inputcourse" style="min-height: 40px;" class="col-md-9 form-control" name="course" required>
                           @foreach($course as $cours)
                           <option value="{{$cours->id}}"
                              @if($cours->id==$batches->course_id)
                               selected 
                              @endif
                              >{{$cours->coursename}}</option>
                           @endforeach
                        </select>

                     </div>
                     <div class="col-md-12">
                        <label class="col-md-3">Batches:</label>
                        <input type="text"  placeholder="Enter Batch Name Here.." class=" col-md-9 form-control" value="{{$batches->batchname}}" name="batchname" required>
                     </div>
                     <div class="col-md-12">
                        <label class="col-md-3">Batch Type:</label>
                        <input type="text"  placeholder="Enter Batch Type Here.." class=" col-md-9 form-control" value="{{$batches->batchtype}}" name="batchtype" required>
                     </div>
                     <div class="col-md-12">
                        <label class="col-md-3">Begin On:</label>
                        <input type="date" value="{{$batches->batchbegin}}" class=" col-md-9 form-control" name="batchbegin" required>
                     </div>
                     <div class="col-md-12">
                        <label class="col-md-3">Class Timing:</label>
                        <input type="text"  placeholder="Enter Class Time Here.." class=" col-md-9 form-control" value="{{$batches->batchtime}}" name="batchtime" >
                     </div>
                      <div class="col-md-12">
                        <label class="col-md-3">Batch Order:</label>
                        <input type="text"  placeholder="Enter Class batch Order.." class=" col-md-9 form-control" value="{{$batches->batchorder}}" name="batchorder" >
                     </div>
                     <div class="clearfix col-md-12"><br />
                        <button type="submit" class="btn btn-sm btn-success col-md-1 pull-right" style="margin:18px;"><i class="fa fa-plus" aria-hidden="true"></i>
                        ADD </button>  
                     </div>
                  </div>
            </form>

            </div>


   </div>
</div>
</div>
</div>
@endsection
@section('script')
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>
@if(Session::has('flash_message'))
<script type="text/javascript">
   toastr.<?php echo Session::get('alert-class');?>('<?php echo Session::get('flash_message');?>');
</script>
@endif



@endsection


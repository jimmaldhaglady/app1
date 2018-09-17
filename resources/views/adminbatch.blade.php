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
         <!-- <div class="row">
            <div class="col-lg-12">
              <h1 class="page-header">
                  Dashboard <small></small>
               </h1>
             <ol class="breadcrumb">
                  <li class="active">
                     <i class="fa fa-dashboard"></i> Batches and Timing
                  </li>
               </ol> 
            </div>
         </div> -->
         <!--  <div> -->
         <h1 class="page-header" style="padding-left: 340px"><strong style="color: #00BFFF">Batches and Timing</strong> <strong style="color: #00BFFF">Details</strong></h1>
         <h1 class="page-header">
            <h2 style="color: #00BFFF">Add Batches and Timing</h2>
         </h1>
         <div class="panel-body">
            <div class="container">
               <form action="{{route('batchs&timing.create')}}" method="">
                  <div class="col-md-8">
                     <div class="col-md-12">
                        <label class="col-md-3">Course:</label>
                        <select id="inputcourse" style="min-height: 40px;" class="col-md-9 form-control" name="course" required>
                           <option selected> Select Course</option>
                           <option > CA+B.Com</option>
                           <option >CMA+B.Com </option>
                           <option>CS+B.Com </option>
                           <option >Professional B.Com</option>
                        </select>
                     </div>
                     <div class="col-md-12">
                        <label class="col-md-3">Batchs:</label>
                        <input type="text"  placeholder="Enter Batch Name Here.." class=" col-md-9 form-control" name="batchname" required>
                     </div>
                     <div class="col-md-12">
                        <label class="col-md-3">Batch Type:</label>
                        <select id="inputcourse" style="min-height: 40px;" class="col-md-9 form-control" name="batchtype" required>
                           <option selected> Select Batchtype</option>
                           <option value="REGULAR">REGULAR</option>
                           <option value="CRASH COURSE">CRASH COURSE</option>
                        </select>
                     </div>
                     <div class="col-md-12">
                        <label class="col-md-3">Begin On:</label>
                        <input type="date"  class=" col-md-9 form-control" name="batchbegin" required>
                     </div>
                     <div class="col-md-12">
                        <label class="col-md-3">Class Timing:</label>
                        <input type="text"  placeholder="Enter Class Time Here.." class=" col-md-9 form-control" name="batchtime">
                     </div>
                      <div class="col-md-12">
                        <label class="col-md-3">Batch Order:</label>
                        <input type="text"  placeholder="Enter Class batch Order.." class=" col-md-9 form-control" name="batchorder" >
                     </div>
                     <div class="clearfix col-md-12"><br />
                        <button type="submit" class="btn btn-sm btn-success col-md-1 pull-right" style="margin:18px;"><i class="fa fa-plus" aria-hidden="true"></i>
                        ADD </button>  
                     </div>
                  </div>
            </form>

            </div>
<!-- ....................display the batch and timedata...........................-->  

            <div class="col-md-12"><br /><br /></div>
         </div>
      </div>
      <div class="panel-body">
         <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" style="height:100%">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Course</th>
                     <th>Batch Name</th>
                     <th>Batchtype</th>
                     <th>Batch begin</th>
                     <th>Batch time</th>
                      <th>Batch Order</th>
                     <th>Operation</th>
                  </tr>
               </thead>
               <tbody>

                  @foreach($info as $key=>$batches)

                  <tr>
                     <td>{{$batches->id}}</td>
                     <td>{{$batches->course->coursename}}</td>
                     <td>{{$batches->batchname}}</td>
                     <td>{{$batches->batchtype}}</td>
                     <td>{{$batches->batchbegin}}</td>
                     <td>{{$batches->batchtime}}</td>
                     <td>{{$batches->batchorder}}</td>
                    <!--  <td style="width: 30px">
                    <!<form action="{{ route('batchs&timing.destroy', $batches->id) }}" method="POST">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button>Delete User</button>
</form> -->
<!-- <button type="" class="btn btn-sm btn-success " style="margin:18px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
&nbspEDIT</button>  

  <a href="{{route('batchs&timing.destroy',$batches->id)}}">
<i class="fa fa-trash" aria-hidden="true"></i>&nbspDelete<BR/></a> -->

                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
       <!--   <h1 class="page-header">
            <h2 style="color: #00BFFF">Edit Batches and Timing</h2>
         </h1>
         <div class="panel-body">
            <div class="container">
               <form action="{{route('batchs&timing.create')}}" method="">
                  <div class="col-md-8">
                     <div class="col-md-12">

                     <div class="col-md-12">
                        <label class="col-md-3"> Enter Batch Name:</label>
                        <input type="text"  placeholder="Enter Batch Name Here.." class=" col-md-9 form-control" name="batchname" required>
                     </div>
                        <label class="col-md-3">Course:</label>
                        <select id="inputcourse" style="min-height: 40px;" class="col-md-9 form-control" name="course" required>
                           <option selected> Select Course</option>
                           <option > CA+B.Com</option>
                           <option >CMA+B.Com </option>
                           <option>CS+B.Com </option>
                           <option >Professional B.Com</option>
                        </select>
                     </div>
                     <div class="col-md-12">
                        <label class="col-md-3">Batchs:</label>
                        <input type="text"  placeholder="Enter Batch Name Here.." class=" col-md-9 form-control" name="batchname" required>
                     </div>
                     <div class="col-md-12">
                        <label class="col-md-3">Batch Type:</label>
                        <select id="inputcourse" style="min-height: 40px;" class="col-md-9 form-control" name="batchtype" required>
                           <option selected> Select Batchtype</option>
                           <option value="REGULAR">REGULAR</option>
                           <option value="CRASH COURSE">CRASH COURSE</option>
                        </select>
                     </div>
                     <div class="col-md-12">
                        <label class="col-md-3">Begin On:</label>
                        <input type="date"  class=" col-md-9 form-control" name="batchbegin" required>
                     </div>
                     <div class="col-md-12">
                        <label class="col-md-3">Class Timing:</label>
                        <input type="text"  placeholder="Enter Class Time Here.." class=" col-md-9 form-control" name="batchtime" >
                     </div>
                      <div class="col-md-12">
                        <label class="col-md-3">Batch Order:</label>
                        <input type="text"  placeholder="Enter Class batch Order.." class=" col-md-9 form-control" name="batchorder" >
                     </div>
                     <div class="clearfix col-md-12"><br />
                        <button type="submit" class="btn btn-sm btn-success col-md-1 pull-right" style="margin:18px;"><i class="fa fa-plus" aria-hidden="true"></i>
                        Edit </button>  
                     </div>
                  </div>
            </form>
            </div>
          <div class="col-md-12"><br /><br /></div>
         </div>
      </div>
 -->


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
@extends('layouts.admin')
@section('style')


<link href="{{ asset('css/bootstrap.min.css" rel="stylesheet') }}">
<link href="{{ asset('css/sb-admin.css" rel="stylesheet') }}">
<link href="{{ asset('css/plugins/morris.css" rel="stylesheet') }}">
<link href="{{ asset('font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


@endsection
@section('content')
<div id="wrapper">
   <div id="page-wrapper">
      <div class="container">
         <h1 class="page-header" style="padding-left: 340px"><strong style="color: #00BFFF">Batches and Timing </strong> <strong style="color: #00BFFF">Details</strong></h1>
         <h1 class="page-header">
            <h2 style="color: #00BFFF">Add Batches and Timing

             <a href="{{route('batchs-timing.create')}}" style="float:right" class="btn btn-sm btn-info "> <i class="fa fa-plus" aria-hidden="true"></i></a>

            </h2>
          </h1>

           
         
          <div class="container">
         <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" >
               <thead>
                  <tr>
                     <th>SI</th>
                     <th>Course</th>
                     <th>Batch Name</th>
                     <th>Batchtype</th>
                     <th>Batch begin</th>
                     <th>time</th>
                      <th>Order</th>
                     <th style="width:  14.33%">Operation</th>
                  </tr>
               </thead>
               <tbody>
                 
                  @foreach($info as $key=>$batches)

                  <tr>
                     <td>{{$key+1}}</td>
                  
                     <td>{{$batches->Course->coursename}}</td>
                   
                     <td>{{$batches->batchname}}</td>
                     <td>{{$batches->batchtype}}</td>
                     <td>{{$batches->batchbegin}}</td>
                     <td>{{$batches->batchtime}}</td>
                     <td>{{$batches->batchorder}}</td>
                      <td style="width: 10%">


     
  <div class="btn-group">
      <button class="btn btn-info btn-sm"><span class="glyphicon glyphicon-file">Select</span></button>
      <button data-toggle="dropdown" class="btn btn-info dropdown-toggle"><span class="caret"></span></button>
      <ul class="dropdown-menu">
         <li><a href="{{route('batchs-timing.edit',$batches->id)}}"><span class="glyphicon glyphicon-pencil"></span> Edit</a></li>
        <li class="divider"></li>
         <li><form action="{{ route('batchs-timing.destroy', $batches->id) }}" method="post">
                   {{ method_field('DELETE') }}
    {{ csrf_field() }}

   <button type='submit' class="{{ $class or 'btn btn-danger' }}" class="glyphicon glyphicon-trash" value="delete"><span class="glyphicon glyphicon-trash"></span>delete</button>
</form></li>
      </ul>
   </div>
                  @endforeach
               </tbody>
            </table>
         </div>


            </div>  
      
   </div>
</div>
</div>
</div>
@endsection
@section('script')
<script src="{{ asset('js/angular.min.js')}}"></script>
<script src="{{ asset('js/jquery.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/plugins/morris/raphael.min.js')}}"></script>
<script src="{{ asset('js/plugins/morris/morris.min.js')}}"></script>
<script src="{{ asset('js/plugins/morris/morris-data.js')}}"></script>
@if(Session::has('flash_message'))
<script type="text/javascript">
   toastr.<?php echo Session::get('alert-class');?>('<?php echo Session::get('flash_message');?>');
</script>
@endif 

@endsection



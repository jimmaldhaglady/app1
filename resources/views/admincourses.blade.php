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
            <!--  <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small></small>
                        </h1>
                         <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Courses
                            </li>
                         </ol>
                    </div> -->
                </div>
                 <div>
                 <h1 class="page-header" style="padding-left: 340px"><strong style="color: #00BFFF">Courses</strong> <strong style="color: #00BFFF">Details</strong></h1>
                        <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped" style="height:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Course Name</th>
                                                
                                                 <th>Course Order</th>
                                                <!-- <th>Operation</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                         @foreach($info as $key=>$courses)
                                        <tr>
                                                <td style="width: 2%">{{$key+1}}</td>
                                                <td style="width: 20%">{{$courses->coursename}}</td>
                                               
                                                 <td style="width: 20%">{{$courses->courseorder}}</td>
                                                 </tr>
                                                   @endforeach
                                        </tbody>
                                        </table>
                                </div>
                               
                            </div>
            <div class="col-md-12"><br /><br /></div>
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
    @endsection
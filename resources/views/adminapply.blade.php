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
                               <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                &nbspApplication
                            </li>
                        </ol>
                    </div>
                </div> -->
                <div class="col-lg-12">
                <h1 class="page-header" style="padding-left: 340px"><strong style="color: #00BFFF">Students Applied </strong> <strong style="color: #00BFFF">Details</strong></h1>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>Students Applied</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped" style="height:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Course</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Address</th>
                                                <th>City</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                                <th>Operation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($info as $key=>$apply)
                                               <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$apply->courses}}</td>
                                                <td>{{$apply->fname}}</td>
                                                <td>{{$apply->lname}}</td>
                                                <td>{{$apply->address}}</td>
                                                <td>{{$apply->city}}</td>
                                                <td>{{$apply->phnumber}}</td>
                                                <td>{{$apply->email}}</td>
                                                <td style="padding-left: 40px">
                    <a href="{{route('Apply_Online.show',$apply->id)}}
"><i class="fa fa-eye" aria-hidden="true">View</i></a>
           
                   
                                            </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="row">
                </div>
             </div>
         </div>
    </div>
   
@endsection

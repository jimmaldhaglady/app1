@extends('layouts.admin')
@section('style')

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
 <link href="{{url('css/css/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{url('css/sb-admin.css')}}" rel="stylesheet"> 
  <!--<link href="{{url('css/plugins/morris.css')}}" rel="stylesheet">
 <link href="{{url('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"> -->
  
@endsection
@section('content')
<div id="wrapper">
        <div id="page-wrapper">
           <div class="container-fluid">
        <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                               <i class="fa fa-phone-square" aria-hidden="true"></i>
&nbspContact
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <!-- <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>Contact</h3>
                            </div> -->
                            <div class="panel-body">

    <div class="card" >
    <div class="card-body">
  

    <table>
        <th style="font-size: 30px;border: 1px solid #18bae4; padding-left: 420px">Courses</th>
        
    </table>
<table>
          <tbody>
          <tr>
              <td>Name:</td>
              <td >{{$courses->coursesname}}</td>
          </tr>
              <tr> 
               <tr>
                    <td>Email Address:</td>
                    <td>{{$courses->coursesdetails}}</td> 
                </tr>
          </tbody>
</table>
    </div>
</div>

    
   
@endsection


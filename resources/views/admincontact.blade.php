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
        <!-- <div class="row">
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
                </div> -->
                           
                    <div class="col-lg-12">
                    <h1 class="page-header" style="padding-left: 340px"><strong style="color: #00BFFF">Contact </strong> <strong style="color: #00BFFF">Details</strong></h1>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>Contact</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr><td>#</td>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Course</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Operation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($info as $key=>$contact)
                                            <tr> 
                                                <td>{{$key+1}}</td>
                                                <td>{{$contact->name}}</td>
                                                <td>{{$contact->email }}</td>
                                                <td>{{$contact->phone}}</td>
                                                <td>{{$contact->courses}}</td>
                                                <td>{{$contact->subject }}</td>
                                                <td>{{$contact->message}}</td>
                                                <td style="width:100px">
                                                <a href="{{route('contact-us.show',$contact->id)}}
                                                "><i class="fa fa-eye" aria-hidden="true">View</i></a>
                            </div>
                        </div>
                    </div>
                     @endforeach
                     
                      <div class="row">
                        <tr><?php echo $info->links(); ?></tr>
                </div>
             </div>
         </div>
    </div>

@endsection

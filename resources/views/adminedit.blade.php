@extends('layouts.admin')
@section('style')
 <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/plugins/morris.css" rel="stylesheet">
 <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
           <div class="container" style="height: 700px">
        <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>&nbspDelete Applicant
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i></h3>
                            </div>

                           
                            <div class="panel-body">
                               <div class="col-sm-6 form-group">
                        <label>Enter the Applicant ID to Delete:</label>
                        <input type="text" placeholder="Enter Applicant ID.." class="form-control" name="lname" required>
<!-- 
                        <div class="col-md-5 col-md-offset-3" id="contactUs" style="padding-top: 10px">
                    <input type="submit" class="btn btn-danger" value="Send">

                </div>
 -->
                   <div style="padding-top: 10px">
                    <button type="submit" class="btn btn-danger">Delete</button>
                      <!-- <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a> -->
                     </div> 
                                 
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

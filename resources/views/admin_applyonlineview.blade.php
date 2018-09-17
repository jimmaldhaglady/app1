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
                               <i class="fa fa-graduation-cap" aria-hidden="true"></i>
&nbspApplied Students
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-12">       
    <div class="card" >
    <div class="card-body">
    <table>
        <th style="font-size: 30px;padding-left:400px ;border: 1px solid #18bae4;"><strong>Application Form</strong></th>
    </table>
    <table>
        <th style="font-size: 20px; border: 1px solid #18bae4;">Basic Profile</th>
    </table>
<table>
  <thead>
  </thead> 
          <tbody>
            <tr> 
             <td >Course:</td>  
                <td >
                @if(isset($apply_online->courses))
                  @if($apply_online->courses == 1)
                    {{'CA+Bcom'}}
                  @elseif($apply_online->courses == 2)
                   {{'CMA+B.Com'}}
                   @elseif($apply_online->courses == 3)
                   {{'CMA+B.Com'}}
                   @elseif($apply_online->courses == 4)
                   {{'Professional+B.Com'}}
                  @endif
                @endif
                </td>
            </tr>
             <tr>
                <td  style="width: 570px" > First Name:</td>
                   <td style="width: 750px" >{{$apply_online->  fname}}</td>
            </tr>
            <tr>
                <td style="width: 30px">Last Name:</td>
                   <td style="width: 50px">{{$apply_online->  lname}}</td> 
            </tr>
                <tr>
                    <td style="width: 30px">DOB:</td>
                    <td style="width: 50px">{{$apply_online-> dob}}</td> 
 
                </tr>
               <tr>
                <td style="width: 30px">Gender:</td>
                    <td style="width: 150px">
                @if(isset($apply_online->gender))
                  @if($apply_online->gender == 1)
                    {{'Male'}}
                  @elseif($apply_online->gender == 0)
                   {{'Female'}}
                   
                  @endif
                @endif
                 </td>
                    </tr>
                <tr>
                    <td>Address:</td>
                    <td>{{$apply_online->address}}</td> 
                </tr>
                 <tr>
                    <td>City:</td>
                    <td>{{$apply_online->city}}</td> 
                </tr>
                 <tr>
                    <td>State:</td>
                    <td style="width: 150px">
                @if(isset($apply_online->state))
                  @if($apply_online->state == 1)
                    {{'Kerala'}}
                  @elseif($apply_online->state == 2)
                   {{'Tamilnadu'}}
                   @elseif($apply_online->state == 3)
                   {{'Karnataka'}}
                   @elseif($apply_online->state == 4)
                   {{'Andrapradesh'}}
                   @elseif($apply_online->state == 5)
                   {{'other'}}
                  @endif
                  @endif
               </td> 
                </tr>
                  <tr>
                    <td>Pin:</td>
                    <td>{{$apply_online->pin}}</td> 
                  </tr>
                 <tr>
                    <td style="width: 30px">Blood Group:</td>
                    <td style="width: 50px">
                @if(isset($apply_online->blgroup))
                  @if($apply_online->blgroup == 1)
                    {{'A +ve'}}
                  @elseif($apply_online->blgroup == 2)
                   {{'A -ve'}}
                   @elseif($apply_online->blgroup == 3)
                   {{'AB +ve'}}
                   @elseif($apply_online->blgroup == 4)
                   {{'AB -ve'}}
                   @elseif($apply_online->blgroup == 5)
                   {{'B +ve'}}
                   @elseif($apply_online->blgroup == 6)
                   {{'B -ve'}}
                   @elseif($apply_online->blgroup == 7)
                   {{'O +ve'}}
                   @elseif($apply_online->blgroup == 8)
                   {{'O -ve'}}

                  @endif
                @endif
             </td> 
                </tr>
                 <tr>
                    <td style="width: 30px">Phone Number:</td>
                    <td style="width: 50px">{{$apply_online->phnumber}}</td> 
                </tr> 
                 <tr>
                    <td>Email Address:</td>
                    <td>{{$apply_online->email}}</td> 
                </tr>
                  <tr>
                    <td>School or College in which <br/>the Applicant is studying/ studied:</td> 
                    <td>{{$apply_online->applicant_studied}}</td>
                </tr></tbody></table>
                <table>
        <th style="font-size: 20px;">Education Qualification</th>
        
    </table>
<tbody>
<table>                <tr>
                  <td style="font-size: 18px;color:#09bdee">Examination: X</td>
                    <td></td>
                </tr>
                
              <tr>
                    <td  style="width:520px">Discipline:</td>
                   <td style="width: 630px">{{$apply_online->x_disc}}</td>
                </tr>
                <tr>
                    <td>Board / University:</td>
                    <td>{{$apply_online->x_board}}</td>
                </tr>
                <tr>
                    <td>Year of Passing:</td>
                   <td>{{$apply_online->x_year}}</td>
                </tr>
                <tr>
                    <td>% of mark:</td>
                    <td>{{$apply_online->x_percentage}}</td>
                </tr>

                <tr>
                  <td style="font-size: 18px;color:#09bdee">Examination: XII</td>
                    <td></td>
                </tr>
                <tr>
                    <td style="width:512px">Discipline:</td>
                    <td style="width:690px">{{$apply_online->xii_disc }}</td>
                </tr>
                <tr>
                    <td>Board / University:</td>
                   <td>{{$apply_online->xii_board}}</td>
                <tr>
                    <td>Year of Passing:</td>
                   <td>{{$apply_online->xii_year}}</td>
                </tr>
                <tr>
                    <td>% of mark:</td>
                    <td>{{$apply_online->xii_percentage}}</td>
                </tr>

                  <tr>
                  <td style="font-size: 18px;color:#09bdee">Examination: Other</td>
                    <td>{{$apply_online->other}}</td>
                <tr>
                    <td>Discipline:</td>
                   <td>{{$apply_online->other_disc }}</td>
                </tr>
                <tr>
                    <td>Board / University:</td>
                   <td>{{$apply_online->other_board}}</td>
                </tr>
                <tr>
                    <td>Year of Passing:</td>
                    <td>{{$apply_online->other_year}}</td>
                </tr>
                <tr>
                    <td>% of mark:</td>
                    <td>{{$apply_online->other_percentage}}</td>
                </tr>
            </thead>
           
            </tbody>
        </table>
    </div>
</div>
 </div>
@endsection

@section('script')
    @if(Session::has('flash_message'))
        <script type="text/javascript">
            toastr.<?php echo Session::get('alert-class');?>('<?php echo Session::get('flash_message');?>');
            
    function myFunction() {
    window.print();
     
}
   </script>
   
    @endif 
@endsection


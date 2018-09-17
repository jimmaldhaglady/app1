@extends('layouts.app')
@section('style')
 <!--  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content=""> -->
 <!--  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="css/4-col-portfolio.css" rel="stylesheet">  
@endsection

@section('content')
  <div class="container" style="padding: 30px" >
    <div class="panel panel-info" >
      <div class="panel-heading">
       <center><h1 class="my-4"><strong>Our Faculties</strong></h1></center></div>
      </div> 
        <div class="the first ads">
           <div class="image one">
             <div class="row">
                

  @foreach($info as $key=>$staff)

        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top col-md-14 img-thumbnail" src="images/faculty/{{$staff->image}}" alt="Noble C Tresa"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#" ><b>{{$staff->fcqualification}} {{$staff->fcname}} {{$staff->fcclassification}}</b></a>
              </h4>
               <p style="color: #007bff">({{$staff->fcdesignation}})</p>
              <p class="card-text">{{$staff->fcdetails}}</p>
            </div>
          </div>
        </div>


 @endforeach



        
      </div>
      <!-- /.row -->

      <!-- Pagination -->
     

    </div>

    </div>
    
</div>
<!-- /.container -->
@endsection

@section('script')
<!-- <script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
@endsection
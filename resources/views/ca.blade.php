@extends('layouts.app')
@section('style')
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@endsection
@section('content')
  <div class="container">
    <div class="middle-row"> 
      <div class="panel panel-primary">
        <div class="panel-heading"><center><p style="color:  #ffffff "><strong><h2>CA+B.C<span class="lowercase">om</span></h2></strong></p></center></div>
        <div class="panel-body">       
          <div class= "col-md-12">
          <div class="col-md-3" style="padding-right:0px">
            <img src="{{ asset('images/ca+b.com.png') }}" alt="ca+bcom" class="col-md-12" style="margin-bottom: 35px">
            <table class="table">
                <thead>
                  <tr>
                    <th class="paddbottom">Eligibility</th>
                    <th>Plus Two Passed </br>or Appeared</th>
                  </tr>
                  <tr>
                    <th>Duration  </th>
                    <th>3 Years</th>
                  </tr>
                <tr>
                  <th>B.Com:</th>
                  <th> M.G. University</th>
                </tr>
               
              </thead>
             </table>
            </div>
            <img src="{{ asset('images/course/CA + Bcom.jpg') }}" alt="" class="col-md-9">
          </div>
          <div class= "col-md-12">
         
            <br/>
          <div class=" col-md-12">
               <div class="col-md-12" style="padding:0px">
            <div class="card">
              <div class="card-header p-3 mb-2 bg-primary text-white"><h4><b><center>L<span class="lowercase">evels of </span>CA</center></b></h4></div>
              </div>
              <div class="card-block">
                <div class="col-md-12" style="padding: 0px;background: #F8F9FA">
                <div class="col-md-10 col-md-offset-1"> 
                  <div class="col-md-4 p-3 mb-2 bg-light text-dark">&nbsp; <span class="fa fa-star"></span> CA Foundation </div>
                  <div class="col-md-4 p-3 mb-2 bg-light text-dark text-center"><span class="fa fa-star"></span> CA Intermediate
                  </div>
                  <div class="col-md-4 p-3 mb-2 bg-light text-dark text-right"><span class="fa fa-star"></span> CA Final
                  </div>
                </div>
                </div>
                <div class="clearfix"></div>
                <div class="p-3 mb-2 text-dark" style="background:#18bae4;padding-top: 5px;">&nbsp; <span class="fa fa-star"></span> CA Course comprises of Information Technology Training,Orientation Programme & 3 Years’ Articleship</div>
              </div>
            </div>
            </div>
            </div>
          <div class="col-md-12" style="padding-top: 10px">
          <p > &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Chartered Accountancy is a coveted profession accepted almost all over the world. A Chartered Accountant is a highly demanded professional who bears vital role in any industry or business in which he is engaged. He can also start his own independent  professional practice, who provides compliance and review services, business advisory services, taxation services, audit services, etc.</br></p>


                       <p > &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Various Ministries of the Government of India have authorized the Chartered Accountant in Practice for certifying various returns and to issue compliance certificates. Chartered Accountant can work as faculty in colleges and universities. Biswas is the Best CA Coaching Centre in Kerala. It has been producing high results in all levels of CA from its inception. Classes for CA are handled by highly qualified professionals like CAs & CMAs.

                   
               The above mentioned Combo-course has two components; CA & B.Com. By studying B.Com along with CA, the Student is highly benefited. A brilliant student can pass both CA & B.Com within the above mentioned time period. 
               </p>
               <b> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;The student has the option of studying CA alone in our sister concern, Biswas Institute of Management Studies.</b> <p>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;For more details visit <a href="http://www.biswaseducation.com/">www.biswaseducation.com</a></p>
               </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/jquery/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
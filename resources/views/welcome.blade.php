@extends('layouts.app')
@section('content')
    <!-- Banner -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <div class="banner">
        <ul class="banner-slider">
            <li>
                <img src="{{ asset('uploads/banner/Slide-1.jpg') }}" alt="">
            </li>
            <li>
                <img src="{{ asset('uploads/banner/Slide-6.jpg') }}" alt="">
            </li>
            <li>
                <img src="{{ asset('uploads/banner/Slide-2.jpg') }}" alt="">
            </li>
            <li>
                <img src="{{ asset('uploads/banner/Slide-5.jpg') }}" alt="">
            </li>
            <li>
                <img src="{{ asset('uploads/banner/Slide-3.jpg') }}" alt="">
            </li> 
            <li>
                <img src="{{ asset('uploads/banner/Slide-4.jpg') }}" alt="">
            </li>  
            <li>
                <img src="{{ asset('uploads/banner/Slide-7.jpg') }}" alt="">
            </li>              
        </ul>

    </div>
    <div class="container home-container">
        <div class="flash-news-row  text-white"> 
            <marquee scrollamount="4" onmouseover="this.stop();" onmouseout="this.start();  ">
            Admission procedure for the academic Year 2018-19 started.| Applications are invited for CA+B.Com, CMA+B.Com, CS+B.Com and Professional B.Com.
            </marquee>
        </div>
         <div class="mission-row">
            <div class="row">
                <div class="col-md-5 mission">

                    <h2>About Biswas</h2>
                    <p text align="justify">&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;Biswas Institute of Management Studies is the Best CA Coaching Centre in Kerala. It shows its excellence in CMA Coaching also. Among the CS Coaching Centres in Kottayam, it ranks the Top. Students study CA, CMA & CS in Biswas from all over Kerala.<br />
                &nbsp;&nbsp; &nbsp; &nbsp; More than 15 Chartered Accountants associate with us. They help the students in building a good career and confidence in them. Chartered Accountants who work as faculties have proved themselves to be excellent teachers. They provide face to face live classes.</p>
                    <a href="{{url('about')}}" class="read-more">Read More</a>
                </div>
                <div class="col-md-7 img">
                <div class="col-sm-12">
                
                    <a href="#"><img src="{{ asset('images/about.jpg') }}" alt=""></a>
                </div></div>
            </div>
        </div>  
         <div class="middle-row">
            <div class="row">
                <div class="col-md-8 admin" text align="justify">
                <a href="#">
                        <h2 align="center">MD&#039;s Message</h2></a>
                        <p>
                        <div class="col-md-5">
                    <img src="{{ asset('images/md_message.jpg') }}" alt="MD&#039;s Message" class="img-responsive">
                </div>Dear Students,<br />
    &nbsp;&nbsp;&nbsp;&nbsp; Biswas started its Management Studies’ Wing for the coaching of Professional Courses like CA, CMA & CS in 2008. From the very 1st year onwards it has been showing its uniqueness by producing magnificient results. It has now become the best CA Coaching Centre in Kerala. In CMA too, there is no better choice.  Biswas College of Professional Studies is a new venture of Biswas Group of Institutions. 

     </p>
                        <a href="{{route('md-message')}}" class="read-more">read more ...</a>
                </div>
                  <div class="col-md-4">
                    <a href="#"><h2>News and Events</h2></a>
                    <ul class="news-evends-slider">
                        <li>
                            <span><img src="{{asset('images/reults.jpg')}}" /></span>
                            <p><b>Our Latest Results </b></p>
                            <a href="{{route('results')}}">Read More</a>
                        </li>
                        <li>
                            <span><img src="{{ asset('images/admision_opend.jpeg')}}" /></span>
                            <p><b>Admission for the academic Year 2018-19</b></p>
                            <a href="{{route('batchs-timing.index')}}">Apply</a>
                        </li>
                        <li>
                            <span><img src="{{ asset('images/about.jpg') }}" alt=""></span>
                            <p><b>Our new campus at Thengana. Opening shortly.</b></p>
                            <a href="{{asset('images/bis.jpg')}}">Apply</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row btm-row">
                <div class="col-md-5 side-btns">
                    <div class="widget-area">
                        <ul id="menu-side-buttons-1" class="menu">
                            <li class=""><a target='_blank' href="{{url('Apply_Online')}}">Apply Online</a></li>
                            <li class=""><a target='_blank' href="{{route('downloads')}}">Downloads</a></li>
                            <li class=""><a target='_blank' href="https://mail.google.com/mail/u/0/#inbox?compose=new">Mail to Biswas</a></li>
                            <li class=""><a target='_blank' target="_blank" href="{{route('results')}}">Results</a></li>
                            <li class=""><a target='_blank' target="_blank" href="{{ url('faculty')}}">Faculties</a></li>
                        </ul>
                    </div>
                </div>
                  <div class="col-md-7">
                    <a href="{{route('demoClass')}}"><img class="col-md-12" src="{{ asset('images/Biswas Institute management studies demo classes.jpg') }}"></a>
                </div>

                

                <div class="row">
                    <center class="col-md-12"><a href="courses"><br/><h2>&nbsp;<strong> Courses</strong></h2></a></center>
                     <div class="col-md-3 panel panel-default">
                       <div class="panel-body">
                       <div class="col-md-12">
                        <img class="img-responsive" src="{{asset('images/ca+b.com.png') }}">
                        </div>
                                <div class="col-md-12">
                               <br />
                                </div>
                                <div class="clearfix"></div>
                                  <p class="p-3 mb-2 bg-primary text-white"><b>Eligibility : Plus Two Passed or Appeared</b></p>
                                  <p class="p-3 mb-2 bg-success text-white"><b>Duration    : 3 Years</b></p>
                                 <p class="p-3 mb-2 bg-info text-white"><b>B.Com       : M.G. University</b></p>
                            <a title="CA+B.Com" href="{{route('ca')}}">Get  More Details</a>
                    </div>
                     </div>


            <div class="col-md-3 panel panel-info">
                <div class="panel-body">
                <div class="col-md-12">
                    <img class="img-responsive" src="{{asset('images/cma+b.com.png') }}">
                    </div>
                    <div class="col-md-12">
                        <br />
                    </div>
                    <div class="clearfix"></div>
                    <p class="p-3 mb-2 bg-primary text-white"><b>Eligibility : Plus Two Passed or Studying</b></p>
                    <p class="p-3 mb-2 bg-success text-white"><b>Duration    : 3 Years</b></p>
                    <p class="p-3 mb-2 bg-info text-white"><b>B.Com       : M.G. University</b></p>
                    <a title="CA+B.Com" href="{{route('cma')}}">Get  More Details</a>
                </div>
            </div>

            <div class="col-md-3 panel panel-default">
                <div class="panel-body">
                <div class="col-md-12">
                    <img class="img-responsive" src="{{asset('images/cs+B.Come.png') }}">
                    </div>
                    <div class="col-md-12">
                        <br />
                    </div>
                    <div class="clearfix"></div>
                    <p class="p-3 mb-2 bg-primary text-white"><b>Eligibility : Plus Two Passed or Studying</b></p>
                    <p class="p-3 mb-2 bg-success text-white"><b>Duration    : 3 Years</b></p>
                    <p class="p-3 mb-2 bg-info text-white"><b>B.Com       : M.G. University</b></p>
                    <a title="CA+B.Com" href="{{route('cs')}}">Get  More Details</a>
                </div>
            </div>

            <div class="col-md-3 panel panel-default">
                <div class="panel-body">
                <div class="col-md-12">
                    <img class="img-responsive" src="{{asset('images/Professional B.png') }}">
                    </div>
                    <div class="col-md-12">
                        <br />
                    </div>
                    <div class="clearfix"></div>
                    <p class="p-3 mb-2 bg-primary text-white"><b>Eligibility : Plus Two Passed or Appeared</b>
                    </p>
                    <p class="p-3 mb-2 bg-success text-white"><b>Duration    : 3 Years</b></p>
                    <p class="p-3 mb-2 bg-info text-white"><b>B.Com       : M.G. University</b></p>
                     <a title="CA+B.Com" href="{{route('prfb')}}">Get  More Details</a>
                </div>
            </div>
        </div>
       </div>
        </div>
        <div class="about-row" style="background-color:#034079">
       
            <a href="{{ route('Gallery.index') }}" >
                <div class="col-md-12 col-xs-12" >
                    <h2>Photo Gallery</h2>
                    <ul class="home-gal-list ">
                        <li class="col-md-3 col-sm-3 col-xs-3"><img src="{{ asset('uploads/gallery/Gallery 1.jpg') }}" ></li>
                        <li class="col-md-3 col-sm-3 col-xs-3"><img src="{{ asset('uploads/gallery/Gallery 2.jpg') }}"></li>
                        <li class="col-md-3 col-sm-3 col-xs-3"><img src="{{ asset('uploads/gallery/Gallery 3.jpg') }}"></li>
                        <li class="col-md-3 col-sm-3 col-xs-3"><img src="{{ asset('uploads/gallery/Gallery 4.jpg') }}"></li>

                    </ul>
                </div>
            </a>

        </div>

        <!-- /.Achievements -->
    </div>
    <!-- Contact us -->
    <div class="conta" >
        <div class="container ">

            <h2>Contact Us</h2>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <p>Thengana, Perumpanachy P.O,</p>
                <p>Changanassery, Kottayam, Kerala</p>
                <p>info@biswaseducation.com</p>
                <p>Everyday: 9:00 am - 5:30 pm</p>
                <p>0481 - 2474511, 9447125370, 9947010614, 9947915836</p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12" style="padding-bottom: 30px;">
                <form action="{{route('contact-us.create')}}">
                    <div class="col-md-12 col-xs-12">
                        <label class="col-md-3">Name:</label>
                        <input type="text" class=" col-md-12 form-control" name="name" required>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <label class="col-md-3 col-xs-3">Email:</label>
                        <input type="email" class=" col-md-12 form-control" name="email" required>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <label class="col-md-3 col-xs-3">Phone:</label>
                        <input type="text" maxlength="13" minlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="col-md-12 form-control" name="phone" required>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <label class="col-md-3 col-xs-3">Course:</label>
                        <select id="inputcourse" style="min-height: 40px;" class="col-md-12 form-control" name="courses">
                                <option selected> Select Course</option>
                                <option value="1">CA+B.Com</option>
                                <option value="2">CMA+B.Com </option>
                                <option value="3">CS+B.Com </option>
                                <option value="4">Professional B.Com</option>
                            </select>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <label class="col-md-3 col-xs-3">Subject:</label>
                        <input type="text" class=" col-md-12 form-control" name="subject" required>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <label class="col-md-3 col-xs-12">Message:</label>
                        <textarea class=" col-md-12 form-control" name="message" required></textarea>
                         </div>

                    <div class="col-md-5  pull-right">
                     <input type="submit" class="btn btn-info pull-right col-md-8" value="Send">
                    </div>
                </form>
            </div>
        </div>

        
    </div>
    <!-- /.Contact us -->
@endsection

@section('script')
    <script src="{{ asset('js/jquery/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script type="text/javascript">
            toastr.<?php echo Session::get('alert-class');?>('<?php echo Session::get('flash_message');?>');
        </script>
@endsection
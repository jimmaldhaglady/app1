@extends('layouts.app')

@section('content')
    
    <!-- Contact us -->
    <div class="conta">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="col-md-6">
                <p>Thengana, Perumpanachy P.O,</p>
                <p>Changanassery, Kottayam, Kerala</p>
                <p>info@biswaseducation.com</p>
                <p>Everyday: 9:00 am - 5:30 pm</p>
                <p>0481 - 2474511, 9447125370, 9947010614, 9947915836</p>
            </div>
            <div class="col-md-6">
            <form action="{{route('contact-us.create')}}">
                <div class="col-md-12">
                    <label class="col-md-3">Name:</label>
                    <input type="text" class=" col-md-9 form-control" name="name" required>
                </div>
                <div class="col-md-12">
                    <label class="col-md-3">Email:</label>
                    <input type="email" class=" col-md-9 form-control" name="email" required>
                </div>
                <div class="col-md-12">
                    <label class="col-md-3">Phone:</label>
                    <input type="text"  maxlength="13" minlength="10"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  class="col-md-9 form-control" name="phone" required>
                </div>
                <div class="col-md-12">
                    <label class="col-md-3">Course:</label>
                    <select id="inputcourse" style="min-height: 40px;" class="col-md-9 form-control" name="courses">
                            <option selected> Select Course</option>
                            <option>CA+B.Com</option>
                            <option>CMA+B.Com </option>
                            <option>CS+B.Com </option>
                            <option>Professional B.Com</option>
                        </select>
                </div>
                <div class="col-md-12">
                    <label class="col-md-3">Subject:</label>
                    <input type="text" class=" col-md-9 form-control" name="subject" required>
                </div>
                <div class="col-md-12">
                    <label class="col-md-3">Message:</label>
                    <textarea class=" col-md-9 form-control" name="message" required></textarea>
                </div>
                <div class="col-md-5 col-md-offset-3" id="contactUs">
                    <input type="submit" class="btn btn-info" value="Send">

                </div>
     </div>
            <div class="col-md-12"><br /><br /></div>
        </div>
       
        </form>
    </div>
    <!-- /.Contact us -->
@section('script')
    @if(Session::has('flash_message'))
        <script type="text/javascript">
            toastr.<?php echo Session::get('alert-class');?>('<?php echo Session::get('flash_message');?>');
        </script>
    @endif 
@endsection

@endsection

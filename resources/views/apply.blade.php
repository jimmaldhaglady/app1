@extends('layouts.app')

@section('content')
    <div class="container">
    <form action="{{route('Apply_Online.store')}}" method="post">
      {{ csrf_field() }}
        <div class="col-lg-12 well">

            <h2 style="text-align: center; text-shadow: 2px 2px 4px #000;">Application For Registration</h2>
            <hr style="border-top:3px solid #000; " />
            <p align="justify"> Welcome, <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kindly use the form given below to register with us. After Submitting the form, the Print Out must reach us within 10 days of online registration to ensure the admission. For any clarification contact the course co-ordinator @ +91 9947010614 or 0481 - 2474511.</p>
        </div>
        <div style="border: 3px solid #ccc; border-radius: 4px; padding-top:15px;" class="col-md-12">
               
                    <div class="col-sm-12">
                    
                        <label for="inputcourse" class="col-md-4">COURSES APPLIED FOR:</label>
                        <select id="inputcourse" style="min-height: 40px;" class="form-control col-md-5" name="courses">
                            <option selected> Select Course</option>
                            <option value="1">CA+B.Com</option>
                            <option value="2">CMA+B.Com </option>
                            <option value="3">CS+B.Com </option>
                            <option value="4">Professional B.Com</option>
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>First Name</label>
                        <input type="text"   placeholder="Enter First Name Here.." class="form-control" name="fname" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Last Name</label>
                        <input type="text" placeholder="Enter Last Name Here.." class="form-control" name="lname" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Date of birth</label>
                        <input type="date" placeholder="date of birth" class="form-control" name="dob" required>
                    </div> 


                    <div class="col-sm-6 form-group">
                        <label>Gender</label>
                        <div class="radio">
                            <label>
                            <input type="radio" value="1" name="gender">Male</label>&nbsp; &nbsp; &nbsp; &nbsp;
                            <label>

                            <input type="radio" value="0" name="gender">Female</label>
                        </div>
                    </div> 

                    <div class="col-sm-6 form-group">
                        <label>Address</label>
                        <textarea placeholder="Enter Address Here.." rows="3" class="form-control" name="address" required></textarea>
                    </div>
                    <div class="col-sm-6 form-group" required>
                        <label>City</label>
                        <input type="text" placeholder="Enter City Name Here.." class="form-control" name="city" required>
                    </div>  
                    <div class="col-sm-6 form-group">
                        <label>State</label>
                        <select class="form-control col-md-12" style="min-height: 40px;" name="state">
                            <option value="1">Kerala</option>
                            <option value="2">Tamil Nadu</option>
                            <option value="3">Karnataka</option>
                            <option value="4">Andhra Pradesh</option>
                            <option value="5">Others</option>
                        </select>
                    </div>  
                    <div class="col-sm-6 form-group">
                        <label>Pin</label>
                        <input type="text"  maxlength=6 oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Pin Code Here.." class="form-control" name="pin" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="inputState">Blood group</label>
                        <select id="inputState" class="form-control  col-md-12" style="min-height: 40px;" name="blgroup">
                            <option selected> Select Blood group</option>
                            <option value="1">A +ve</option>
                            <option value="2">A -ve</option>
                            <option value="3">AB +ve</option>
                            <option value="4">AB -ve</option>
                            <option value="5">B +ve</option>
                            <option value="6">B -ve</option>
                            <option value="7">O +ve</option>
                            <option value="8">O -ve</option>
                        </select>
                    </div>                      
                    <div class="form-group col-md-6">
                        <label>Phone Number</label>
                        <input type="text" maxlength="10"   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Phone Number Here.." class="form-control" name="phnumber" required>

                    </div>  

                    <div class="form-group col-md-6">
                        <label>Email Address</label>
                        <input type="email" placeholder="Enter Email Address Here.." class="form-control" name="email" required>
                    </div>  
                    <div class="form-group col-md-6">
                        <label>School or College in which the Applicant is studying/ studied</label>
                        <input type="text" placeholder="Enter the School or College in which the Applicant is studying/ studied.." class="form-control" name="applicant_studied" required>
                    </div>
                    <div class="col-md-12">
                        <label>Educational Qualifications</label>
                        <table>
                            <tr>
                                <th>Examination</th>
                                <th>Discipline</th>
                                <th>Board / University</th>
                                <th>Year of Passing</th>
                                <th>% of mark</th>
                            </tr>
                            <tr>
                                <td>X</td>
                                <td><input type="text" class="form-control" name="x_disc" required></td>
                                <td><input type="text" class="form-control" name="x_board" required></td>
                                <td><input type="text" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" name="x_year" required></td>
                                <td><input type="text"  maxlength="3" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" name="x_percentage" required></td>
                            </tr>
                            <tr>
                                <td>XII</td>
                                <td><input type="text" class="form-control" name="xii_disc" required></td>
                                <td><input type="text" class="form-control" name="xii_board" required></td>
                                <td><input type="text" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" name="xii_year" required></td>
                                <td><input type="text" maxlength="3"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"class="form-control" name="xii_percentage" required></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" placeholder="other" class="form-control" name="other">
                                </td>
                                <td><input type="text" class="form-control" name="other_disc"></td>
                                <td><input type="text" class="form-control" name="other_board"></td>
                                <td><input type="text" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" name="other_year"></td>
                                <td><input type="text" maxlength="3"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" name="other_percentage"></td>
                            </tr>
                        </table>
                    </div>


                    <div class="clearfix col-md-12"><br /></div>
                    <button type="" class="btn btn-sm btn-info col-md-1 pull-right" style="margin:18px;">Submit</button>  

                    </div>
                </form> 
            </div>
                </div>
    </div>
    </div>

@endsection


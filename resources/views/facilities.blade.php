@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel-group">
            <div class="panel">
                <div class="panel-heading"><b style="color: #00cccc; text-transform: uppercase;">Class Rooms</b></div>
                <div class="panel-body">                    
                    <img src="{{ asset('/images/faci/classrooms.jpg')}}" class="col-md-3 sm-6 img-thumbnail" alt="classrooms">
                    <p class="col-md-9">
                        Biswas strives to offers its students a modern learning environment, with large class sizes to ensure that faculty and students can engage with one another without any distractions.
It allows students to connect new learning experiences to prior learning experiences. It also allows students to begin to look forward to learning that is on the horizon.Each classroom is equipped with Air conditioner, comfortable furniture and Smart Boards.
                    </p>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading"><b style="color: #00cccc; text-transform: uppercase;">Teaching Faculty</b></div>
                <div class="panel-body">
                    <p class="col-md-9">
                        The college has an excellent teaching faculty with highly qualified and well experienced professionals. All teachers are fully  dedicated and the students are given special attention in their studies.  The teaching method used by the faculties are modern and helps the students to learn the subject thoroughly and evaluate their students based on regular exams.
                    </p>
                    <img src="{{ asset('/images/faci/teachingstaff.jpg')}}" class="col-md-3 img-thumbnail" alt="teachingstaff">
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading"><b style="color: #00cccc; text-transform: uppercase;">LIBRARY</b></div>
                <div class="panel-body">
                    <img src="{{ asset('/images/faci/collegelibrary.jpg')}}" class="col-md-3 img-thumbnail" alt="Library">
                    <p class="col-md-9">
                        Access to information is a vital key in developing the individual potentiality.Biswas college has a pretty big library with a good collection of reference books and other standard books on all relevant subjects. The library is rich in resources in the subjects of Accounting, Taxation, Financial Management etc.  
                    </p>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading"><b style="color: #00cccc; text-transform: uppercase;">COMPUTER LABS</b></div>
                <div class="panel-body">
                    <p class="col-md-9">
                    The basic computer skills that every person regardless of age should know include common application programs such as Microsoft Word, Microsoft Excel, Power point and Notepad. They should know how to go online, check their email account, and send mail with an attachment and how to use simple email features. 

                 Biswas provides Computer facility to all students and staff for educational purpose.Students can access free video lectures online and refer to study material in multimedia format. </p>
                    <img src="{{ asset('/images/faci/computerlab.jpg')}}" class="col-md-3 img-thumbnail" alt="computerlab">
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading"><b style="color: #00cccc; text-transform: uppercase;">COLLEGE HOSTEL</b></div>
                <div class="panel-body">
                    <img src="{{ asset('/images/faci/collegehostal.jpg')}}" class="col-md-3 img-thumbnail" alt="hostal">
                    <p class="col-md-9">
                       Hostel facility is given to the boys and girls, who seek admission in the college from far away places. Providing a very secure and fun-filled environment that makes the student feel quite at home, hostels at Biswas Campus are the nucleus of the student bonding. Separate hostel facilities are provided for Boys and Girls with high security and good discipline. There's no such thing as automated food delivery. It takes the best, the brightest and the most caring people to deliver Canteen's delicious food and superior service.
                    </p>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading"><b style="color: #00cccc; text-transform: uppercase;">TRANSPORT FACILITY</b></div>
                <div class="panel-body">
                    <p class="col-md-9">
                       Although the campus is well connected by local public transport, Biswas has its own vehicle which provides transport facility from nearby cities to the campus from specific pickup points pre-defined as per the convenience of students.
                   </p>
                   <img src="{{ asset('/images/faci/collegetranspotation.jpg')}}" class="col-md-3 img-thumbnail" alt="collegetranspotation">
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading"><b style="color: #00cccc; text-transform: uppercase;">Cafeteria</b></div>
                <div class="panel-body">
                    <img src="{{ asset('/images/faci/cafeteria.jpg')}}" class="col-md-3 img-thumbnail" alt="Cafeteria">
                    <p class="col-md-9">
                        Quality food is available at reasonable price in the college canteen for both staff and students. There are separate sections for staff and students. The canteen functions on all working days. The cafeteria provides instant access to snacks and soft drinks in the college campus.
                    </p>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading"><b style="color: #00cccc; text-transform: uppercase;">Counseling SERVICE</b></div>
                <div class="panel-body">
                    <p class="col-md-9">
                        The College provides counseling related to academic choices during the admissions process to enable students to decide upon their course of study. Teachers are always available within College and students can approach them with their academic problems. The College helps students with their psychological and emotional problems.
                    </p>
                    <img src="{{ asset('/images/faci/counselling.jpg')}}" class="col-md-3 img-thumbnail" alt="counseling">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
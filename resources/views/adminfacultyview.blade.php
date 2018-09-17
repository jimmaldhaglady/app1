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
                    <div class="col-lg-12">
                    <h1 class="page-header" style="padding-left: 340px"><strong style="color: #00BFFF">Faculty </strong> <strong style="color: #00BFFF">  Details</strong></h1>           
              </div>
      </div>
      <div class="panel-body">
         <div class="table-responsive">
           <a href="{{route('Faculty.create')}}" style="float:right" class="btn btn-sm btn-info "> <i class="fa fa-plus" aria-hidden="true"></i></a>

            <table class="table table-bordered table-hover table-striped" style="height:100%">
               <thead>
                  <tr>
                     <th>SI</th>
                     <th>Sur Name</th>
                     <th>Name</th>
                     <th>Classification</th>
                     <th>Designation</th>
                     <th>Description</th>
                     <th>Image</th>
                     <th>Order</th>
                     <th>Operation</th>
                  </tr>
               </thead>
               <tbody>
                 @foreach($info as $key=>$faculties)
                  <tr>
                     <td>{{$key+1}}</td>
                     <td>{{$faculties->fcqualification}}</td>
                     <td>{{$faculties->fcname}}</td>
                     <td>{{$faculties->fcclassification}}</td>
                     <td>{{$faculties->fcdesignation}}</td>
                     <td>{{$faculties->fcdetails}}</td>
                     <td> <img src="images/faculty/{{$faculties->image}}" height="50px" width="50px">  </td>
                      <td>{{$faculties->fcimageorder}}</td>
                     <td style="width: 40px">

                  <a href="{{route('Faculty.edit',$faculties->id)}}"><i class="fa   fa-pencil-square-o" aria-hidden="true"></i>&nbspEdit</a><br/>

                  <form action="{{ route('Faculty.destroy', $faculties->id) }}" method="post">
                   {{ method_field('DELETE') }}
    {{ csrf_field() }}

   <button type='submit' class="{{ $class or 'btn btn-danger' }}" class="glyphicon glyphicon-trash" value="delete"><span class="glyphicon glyphicon-trash"></span>delete</button>
</form>
</td>
                  </tr>
                @endforeach
                <tr><?php echo $info->links(); ?></tr>
               </tbody>
            </table>
         </div>
       </div>
     <div class="row">
    </div>
   </div>
 </div>
</div>

@endsection

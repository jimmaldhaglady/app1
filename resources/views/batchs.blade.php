@extends('layouts.app')

@section('content')
    <div class="container" style="padding: 30px">
        <div class="panel-group">
            @foreach($bathes as $batch)
            <div class="panel panel-primary">
                <div class="panel-heading"><center><h3><strong>{{$batch->coursename}}<span class="lowercase"></span></strong></h3></center></div>
                <div class="panel-body">

                    
                   @foreach($batch->batch as $bat)
                  
                     <div class="col-sm-6 form-group">
                        <h5 class="alert mb-2 bg-info text-white">{{$bat->batchname}} ({{$bat->batchtype}})</h5>
                        <p class="col-sm-10 col-sm-offset-1">Begins on {{$bat->batchbegin}}</p>
                        <p class="col-sm-10 col-sm-offset-1">Class Timings: {{$bat->batchtime}} </p>
                    </div>
                   
                   <div></div>
                    @endforeach
                   
                </div>
            </div>
            @endforeach 
        </div>
    </div>
@endsection

@section('script')
@endsection
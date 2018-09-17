<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Batch;
use App\Course;


class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()) {
            $batches['info'] = Batch::with('Course')->get();
            return view('viewCourses_batches',$batches);
        }
        else{
            $webData['bathes']=Course::with('Batch')->get();
            return view('batchs',$webData);
        }
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        if(Auth::check()) {
            $webData['course']=Course::with('Batch')->get();
            return view('Admin\addBatch',$webData);
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    { 
       
        $batches= new Batch;
        $batches->course_id =$request->course; 
        $batches->batchname =$request->batchname;
        $batches->batchtype =$request->batchtype;
        $batches->batchbegin =$request->batchbegin;
        $batches->batchtime =$request->batchtime;
        $batches->batchorder =$request->batchorder;
        $batches->save();
        \Session::flash('flash_message', 'Data added successfully!');
        \Session::flash('alert-class', 'success');
        return redirect()->back(); 
        return view('adminbatch');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        echo "hello show";
        exit;
        if(Auth::check()) {
            $batchs = Batch::find($id);
            return view('adminbatch',compact('batch'));
        }
        else{
            $batches =  Batch::find($value[0]);
            if($batches->batchname==$value[1])
            return view('batch',compact('batch'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
       /*if(Auth::check()) {
            $batches['info'] = Batch::get($id);
            return view('adminbatchedit',$batches);
        }
        else{
            return view('batch',compact('batchs&timing'));
        }*/
      

        if(Auth::check()) {
        $batches=Batch::find($id);
        $course=Course::all();

        return view('adminbatchedit',compact('batches','course'));
       // ->with ('batch',$batches);
        }else
        {
            return view('batch',compact('batchs-timing'));
        }
}
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::check()) {
        $batches= Batch::find($id);
        $batches->course_id=$request['course'];
        $batches->batchname=$request['batchname'];
        $batches->batchtype=$request['batchtype'];
        $batches->batchbegin=$request['batchbegin'];
        $batches->batchtime=$request['batchtime'];
        $batches->batchorder =$request['batchorder'];

        $batches->save();
        return redirect()->back();
        //return redirect('viewCourses_batches',compact('batches-timing'));
       // return redirect()->route('batches-timing.index');
    }
    else{
            return view('batchs',compact('batchs-timing'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $del=Batch::find($id);
       $del->delete();
       return redirect()->route('batchs-timing.index')->with('success','Batch deleted successfully'); 
       
    
    }

}

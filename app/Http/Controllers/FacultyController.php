<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Faculty;


class FacultyController extends Controller
    {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Auth::check()) {
 
            $faculties['info'] = Faculty::paginate(5);
            return view('adminfacultyview',$faculties);
        }
        else
        {

          $faculties['info'] = Faculty::orderBy('fcimageorder', 'asc')->get();
        return view('faculty',$faculties);  
            
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
            $faculties['info'] = Faculty::get();
            return view('adminfaculty',$faculties);
        }
        /*$faculties= new Faculty;
        $faculties->fcname =$request->fcname;
        $faculties->fcdesignation =$request->fcdesignation;
        $faculties->fcdetails=$request->fcdetails;


        if( $request->hasFile('image')) {
            echo "i";
            exit;
        
            $image = $request->file('image');
            $path = public_path(). 'images/faculty/';

            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move($path, $filename);

            $faculties->image = $path;
        }
       
        \Session::flash('flash_message', 'Data added successfully!');
        \Session::flash('alert-class', 'success');
        return redirect()->back();*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faculties= new Faculty;
        $faculties->fcqualification=$request->surname;
        $faculties->fcname =$request->fcname;
        $faculties->fcclassification=$request->classification;
        $faculties->fcdesignation =$request->fcdesignation;
        $faculties->fcdetails=$request->fcdetails;
        $faculties->fcimageorder=$request->fcimageorder;
            $image = $request->file('image');
            $filename=$image->getClientOriginalname();
            $image->move('images/faculty',$image->getClientOriginalName());
            $faculties->image = $filename;

            $faculties->save();
        \Session::flash('flash_message', 'Data added successfully!');
        \Session::flash('alert-class', 'success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
        {
        if(Auth::check())
            {

            $faculties = Faculty::find($id);
            return view('adminfaculty',compact('Faculty'));
            }
            else
            {
            $faculties = Faculty::find($value[0]);
            if($faculties->fcname==$value[1])
            return view('faculty',compact('Faculty'));
            }
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {    
        $faculties= Faculty::find($id);
        return view('adminfacultyedit',compact('faculties'));
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
        $faculties= Faculty::find($id);
        $faculties->fcqualification=$request['surname'];
        $faculties->fcname=$request['fcname'];
        $faculties->fcclassification=$request['classification'];
        $faculties->fcdesignation=$request['fcdesignation'];
        $faculties->fcdetails=$request['fcdetails'];
        $faculties->fcimageorder=$request['fcimageorder'];
        
            $image =$request->file('image');
            if($image!==null)
            {
            
            $filename=$image->getClientOriginalname();
            $image->move('images/faculty',$image->getClientOriginalName());
            $faculties->image = $filename;
        }
        

        $faculties->save();
        return redirect()->back();
        //return redirect('viewCourses_batches',compact('batches-timing'));
       // return redirect()->route('batches-timing.index');
    }
    else{
            return view('batchs',compact('batchs-timing'));
        }



        //      $this->validate($request, [
        //     'fcname' => 'required',
        //     'fcdesignation' => 'required',
        //     'fcdetails' => 'required',
        //     'image' => 'required',
        // ]);
        
        // Faculty::find($id)->update($request->all());
        // return redirect()->route('Faculty.index')
        //                 ->with('success','Faculty updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $del=Faculty::find($id);
         $del->delete($id);
          return redirect()->route('Faculty.index')->with('success','Batch deleted successfully'); 
            
    }
}








        
        
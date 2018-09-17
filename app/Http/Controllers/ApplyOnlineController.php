<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\ApplyOnline;

class ApplyOnlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        if(Auth::check()) {
            $applyOnline['info']=ApplyOnline::get();
            return view('adminapply',$applyOnline);
        }
    }

    /**
     * Show the form for creating a new resource.
     
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apply');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $apply_online = new ApplyOnline;
        $apply_online->courses = $request->courses;
        $apply_online->fname = $request->fname;
        $apply_online->lname=$request->lname;
        $apply_online->dob=$request->dob;
        $apply_online->gender=$request->gender;
        $apply_online->address=$request->address;
        $apply_online->city=$request->city;
        $apply_online->state=$request->state;
        $apply_online->pin=$request->pin;
        $apply_online->blgroup=$request->blgroup;
        $apply_online->phnumber=$request->phnumber;
        $apply_online->email=$request->email;
        $apply_online->applicant_studied= $request->applicant_studied;
        $apply_online->x_disc=$request->x_disc;
        $apply_online->x_board=$request->x_board;
        $apply_online->x_year=$request->x_year;
        $apply_online->x_percentage=$request->x_percentage;
        $apply_online->xii_disc=$request->xii_disc;
        $apply_online->xii_board=$request->xii_board;
        $apply_online->xii_year=$request->xii_year;
        $apply_online->xii_percentage=$request->xii_percentage;
        $apply_online->other=$request->other;
        $apply_online->other_disc =$request->other_disc;
        $apply_online->other_board=$request->other_board;
        $apply_online->other_year=$request->other_year;
        $apply_online->other_percentage=$request->other_percentage;
        $apply_online->save();
        \Session::flash('flash_message', 'Registration successfully completed');
        \Session::flash('alert-class', 'success');
        return redirect()->route('Apply_Online.show',$apply_online->id.'$'.$apply_online->fname);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response

     */


    public function show($id){

   
        if(Auth::check()) {
            $apply_online = ApplyOnline::find($id);
            return view('admin_applyonlineview',compact('apply_online'));
        }
        else{
            $value=explode('$', $id);
            $apply_online = ApplyOnline::find($value[0]);
            if($apply_online->fname==$value[1])
            return view('formview',compact('apply_online'));
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function view($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
       
    }
}
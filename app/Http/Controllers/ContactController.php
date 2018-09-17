<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts['info'] = Contact::paginate(10);
        return view('admincontact',$contacts);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $contact= new Contact;
        $contact->name =$request->name; 
        $contact->email =$request->email;
        $contact->phone =$request->phone;
        $contact->courses =$request->courses;
        $contact->subject =$request->subject;
        $contact->message =$request->message;
        $contact->save();
        \Session::flash('flash_message', 'Data added successfully!');
        \Session::flash('alert-class', 'success');
        return redirect()->back();

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::check()) {
             $contacts = Contact::find($id);
             return view('admin_contactview',compact('contacts'));
         }
             else{
            $value=explode('$', $id);
            $contacts = Contact::find($value[0]);
            if($apply_online->fname==$value[1])
            return view('formview',compact('contacts'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
    }
}

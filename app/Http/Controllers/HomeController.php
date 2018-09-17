<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\ApplyOnline;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        return view('home');
    }
    /*public function adminapply()
    {
        $apply_online = ApplyOnline::get();
         return view('adminapply',compact('apply_online'));
    }

    public function admincontact()
    {
        return view('admincontact');
    }

     public function admincourses()
    {
        return view('admincourses');
    }

    public function adminbatch()
    {
        return view('adminbatch');
    }
   public function adminbatchedit()
    {
        return view('adminbatchedit');
    }

    public function admingallery()
    {
        return view('admingallery');
    }
    
    public function adminfaculty()
    {
        return view('adminfaculty');
    }

      public function adminfacultyedit()
    {
        return view('adminfacultyedit');
    }*/

     
}

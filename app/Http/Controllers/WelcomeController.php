<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Gallery;
use App\GalleryCategories;



class WelcomeController extends Controller{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
    public function about()
    {
    	return view('about');
    }
    public function courses()
    {
    	return view('courses');
    }
    public function mdMessage(){
        return view('md-message');
    }
    public function applyOnline()
    {
    	return view('apply');
    }
    public function gallery()
    {
    	return view('gallery');
    }
    public function facilities()
    {
    	return view('facilities');
    }
    public function faculty(){
        return view('faculty');
    }
    public function demoClass(){
        return view('demoClass');
    }
    public function contact()
    {
    	return view('contact');
    }
    public function ca()
    {
        return view('ca');
    }
     public function cma()
    {
        return view('cma');
    }
    public function cs()
    {
        return view('cs');
    }
    public function prfb()
    {
        return view('prfb');
    }
    public function results()
    {
        return view('results');
    }
    public function downloads()
    {
        return view('downloads');
    }
    public function onam()
    {
        return view('onam');
    }
    public function xmas()
    {
         $xmasc = Gallery::where('catid', '=', 4)->get();
        return view('xmas',compact('xmasc'));
        
    }
    public function tour()
    {
        $tours = Gallery::where('catid', '=', 5)->get();
        return view('tour',compact('tours'));
       
    }
     public function award()
    {
        $awards = Gallery::where('catid', '=', 2)->get();
        return view('award',compact('awards')); 
        
    }
    public function onam15()
    {
        return view('onam15');
    }
    public function onam14()
    {   
        $onams = Gallery::where('catid', '=', 3)->get();
        return view('onam14',compact('onams')); 
    }
     public function video()
    {
        return view('video');
    }
    public function inauguration()
    {
            $inagurations = Gallery::where('catid', '=', 1)->get();
            return view('inauguration',compact('inagurations'));   
       
    }
    public function otherimage()
    {
         $otherimages = Gallery::where('catid', '=', 6)->get();
        return view('otherimage',compact('otherimages')); 
        
    }

    public function formview()
    {
        return view('formview');
    }

      public function newgallerycategory(Request $request)
    {
         $gallerycat= new GalleryCategories();

        $gallerycat->galleryname = $request['galleryname'];
        $gallerycat->save();
        return redirect()->back(); 
    }
    

}

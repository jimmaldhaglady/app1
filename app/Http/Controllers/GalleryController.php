<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Gallery;
use App\GalleryCategories;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check())
            {
            $galleries = Gallery::get();
            $categories=GalleryCategories::get();
            return view('admingallery', compact('galleries','categories'));

            }
            else
            {
            $galleries = Gallery::get();
            return view('gallery', compact('galleries'));
            }
      //return view('admingallery');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallerycategories');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $galleries= new Gallery;
        
       
        $galleries->catid =$request->gallery;
      
       
        $image = $request->file('image');

         if($image!==null)
            {
            
          $filename=$image->getClientOriginalname();
          $image->move('images/gallery',$image->getClientOriginalName());
          $galleries->image = $filename;
             }
        
        
        $galleries->save();

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

         $galleries = Gallery::find($value[0]);
         if($galleries->galleryname==$value[1])
         return view('gallery',compact('Gallery'));
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
      // Gallery::find($id)->delete($id);
         //return view('Gallery.index');

    }
}

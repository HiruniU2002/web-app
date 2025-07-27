<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
   
    public function Index(){

        $sliders = Slider::all();

        return view('admin.home.slider',compact('sliders'));
        
    }

    public function storeslider(Request $request){
        $validatedData = $request->validate([
        'heading' => 'required|string',
        'bottom_heading'=> 'required|string|max:255',
        'image_upload' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096',// max 3mb
        'more_info_link' => 'nullable|url',
        ]);

        if($request->hasFile('image_upload')){
            $imagePath = $request->file('image_upload')->store('slides','public');
        }

        Slider::create([
            'heading' => $validatedData['heading'],
            'bottom_heading'=> $validatedData['bottom_heading'],
            'image_link' => $imagePath,
            'more_info_link' => $validatedData['more_info_link'],
        ]);

        return redirect()->back()->with('success','Slide added successfully!');

    }

    public function updateslider(Request $request){
        $validatedData = $request->validate([
        'heading' => 'required|string',
        'bottom_heading' => 'required|string|max:255',
        'more_info_link' => 'nullable|url',
        
        ]);

        if($request->hasFile('image_upload')){
            $imagePath = $request->file('image_upload')->store('slides','public');
        }

        $update = Slider::find($request->slider_id);
        $update->heading = $validatedData['heading'];
        $update->bottom_heading = $validatedData['bottom_heading'];

        if($request->hasFile('image_upload')){
            $imagePath = $request->file('image_upload')->store('slides', 'public');
            $update->image_link = $imagePath;
        }

        $update->more_info_link = $validatedData['more_info_link'];

        $update->save();

        return redirect()->back()->with('success','Slide updated successfully!');

    }


    public function deleteslider($id){
        $delete = Slider::find($id);
        
            $delete->delete();

        return redirect()->back()->with('success','Slide deleted successfully!');

    }

    
}
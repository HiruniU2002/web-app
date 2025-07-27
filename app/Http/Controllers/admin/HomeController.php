<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSetting;

class HomeController extends Controller
{
    public function Index  () {
        $HomeSettings = HomeSetting::all();
        return view('admin.Home.HomeSetting',compact('HomeSettings'));
    }

    public function storehomesetting(Request $request){
        $validatedData = $request->validate([
        'heading' => 'required|string',
        'sub_heading'=> 'required|string|max:255',
        'image_upload' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096',
        'top_heading' => 'required|string|max:255',
        'bottom_heading'=>'required|string|max:255'
        ]);
    

     if($request->hasFile('image_upload')){
            $imagePath = $request->file('image_upload')->store('HomeSetting','public');
        }

        HomeSetting::create([
            'heading' => $validatedData['heading'],
            'sub_heading'=> $validatedData['sub_heading'],
            'image_link' => $imagePath,
            'top_heading'=> $validatedData['top_heading'],
            'bottom_heading'=> $validatedData['bottom_heading'],
        ]);

        return redirect()->back()->with('success','Slide added successfully!');

    }

    
    public function updatehomesetting(Request $request){
        $validatedData = $request->validate([
            'HomeSetting_id' => 'required|exists:home_settings,id',//id
        'heading' => 'required|string',
        'sub_heading' => 'required|string|max:255',
        'top_heading' => 'required|string|max:255',
        'bottom_heading' => 'required|string|max:255',
        
        
        ]);

        if($request->hasFile('image_upload')){
            $imagePath = $request->file('image_upload')->store('HomeSetting','public');
        }

        $update = HomeSetting::find($request->HomeSetting_id);
        $update->heading = $validatedData['heading'];
        $update->sub_heading = $validatedData['sub_heading'];
        $update->top_heading = $validatedData['top_heading'];
        $update->bottom_heading = $validatedData['bottom_heading'];

        if($request->hasFile('image_upload')){
            $imagePath = $request->file('image_upload')->store('HomeSetting', 'public');
            $update->image_link = $imagePath;
        }

        $update->save();

        return redirect()->back()->with('success','Slide updated successfully!');

    }


    public function deletehomesetting($id){
        $delete = HomeSetting::find($id);
        
            $delete->delete();

        return redirect()->back()->with('success','Slide deleted successfully!');

    }

}

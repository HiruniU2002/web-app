<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSetting;
use App\Models\Contact;

use App\Models\cakes;

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

    public function cakeIndex()
    {
        $cakes = Cake::all();
        return view('admin.cakes', compact('cakes'));
    }

    public function cakeCreate()
    {
        $cakeTypes = Cake::getCakeTypes();
        $cakeFlavours = Cake::getCakeFlavours();
        $cakeSizes = Cake::getCakeSizes();
        
        return view('admin.cakes.create', compact('cakeTypes', 'cakeFlavours', 'cakeSizes'));
    }

    public function cakeStore(Request $request)
    {
        $validatedData = $request->validate([
            'cake_name' => 'required|string|max:255',
            'cake_type' => 'required|string',
            'cake_flavour' => 'required|string',
            'cake_price' => 'required|numeric',
            'cake_description' => 'required|string',
            'cake_size' => 'required|string',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096'
        ]);

        $imagePath = $request->file('image_path')->store('cakes', 'public');

        Cake::create([
            'cake_name' => $validatedData['cake_name'],
            'cake_type' => $validatedData['cake_type'],
            'cake_flavour' => $validatedData['cake_flavour'],
            'cake_price' => $validatedData['cake_price'],
            'cake_description' => $validatedData['cake_description'],
            'cake_size' => $validatedData['cake_size'],
            'image_path' => $imagePath
        ]);

        return redirect()->route('admin.cakes')->with('success', 'Cake added successfully!');
    }

    public function cakeEdit($id)
    {
        $cake = Cake::findOrFail($id);
        $cakeTypes = Cake::getCakeTypes();
        $cakeFlavours = Cake::getCakeFlavours();
        $cakeSizes = Cake::getCakeSizes();
        
        return view('admin.cakes.edit', compact('cake', 'cakeTypes', 'cakeFlavours', 'cakeSizes'));
    }

    public function cakeUpdate(Request $request, $id)
    {
        $validatedData = $request->validate([
            'cake_name' => 'required|string|max:255',
            'cake_type' => 'required|string',
            'cake_flavour' => 'required|string',
            'cake_price' => 'required|numeric',
            'cake_description' => 'required|string',
            'cake_size' => 'required|string',
            'image_path' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:4096'
        ]);

        $cake = Cake::findOrFail($id);
        $cake->cake_name = $validatedData['cake_name'];
        $cake->cake_type = $validatedData['cake_type'];
        $cake->cake_flavour = $validatedData['cake_flavour'];
        $cake->cake_price = $validatedData['cake_price'];
        $cake->cake_description = $validatedData['cake_description'];
        $cake->cake_size = $validatedData['cake_size'];

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('cakes', 'public');
            $cake->image_path = $imagePath;
        }

        $cake->save();

        return redirect()->route('admin.cakes')->with('success', 'Cake updated successfully!');
    }

    public function cakeDestroy($id)
    {
        $cake = Cake::findOrFail($id);
        $cake->delete();

        return redirect()->route('admin.cakes')->with('success', 'Cake deleted successfully!');
    }




}

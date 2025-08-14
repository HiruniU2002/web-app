<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cake;
use Illuminate\Support\Facades\Storage;

class CakeController extends Controller
{
    public function index()
    {
        $cakes = Cake::all();
        return view('admin.cakes', compact('cakes'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cake_name' => 'required|string|max:255',
            'cake_type' => 'required|string',
            'cake_flavour' => 'required|string',
            'cake_price' => 'required|numeric|min:0',
            'cake_description' => 'required|string',
            'cake_size' => 'required|string',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
        ]);

        $cake = new Cake();
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

        return redirect()->back()->with('success', 'Cake added successfully!');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'cake_name' => 'required|string|max:255',
            'cake_type' => 'required|string',
            'cake_flavour' => 'required|string',
            'cake_price' => 'required|numeric|min:0',
            'cake_description' => 'required|string',
            'cake_size' => 'required|string',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
        ]);

        $cake = Cake::findOrFail($id);
        $cake->cake_name = $validatedData['cake_name'];
        $cake->cake_type = $validatedData['cake_type'];
        $cake->cake_flavour = $validatedData['cake_flavour'];
        $cake->cake_price = $validatedData['cake_price'];
        $cake->cake_description = $validatedData['cake_description'];
        $cake->cake_size = $validatedData['cake_size'];

        if ($request->hasFile('image_path')) {
            // Delete old image if exists
            if ($cake->image_path) {
                Storage::disk('public')->delete($cake->image_path);
            }
            
            $imagePath = $request->file('image_path')->store('cakes', 'public');
            $cake->image_path = $imagePath;
        }

        $cake->save();

        return redirect()->back()->with('success', 'Cake updated successfully!');
    }

    public function destroy($id)
    {
        $cake = Cake::findOrFail($id);
        
        // Delete image if exists
        if ($cake->image_path) {
            Storage::disk('public')->delete($cake->image_path);
        }
        
        $cake->delete();

        return redirect()->back()->with('success', 'Cake deleted successfully!');
    }

    // app/Http/Controllers/admin/CakeController.php

public function filter(Request $request)
{
    $query = Cake::query();
    
    // Cake Type Filter
    if ($request->has('cake_types')) {
        $query->whereIn('cake_type', $request->cake_types);
    }
    
    // Flavor Filter
    if ($request->has('flavors')) {
        $query->whereIn('cake_flavour', $request->flavors);
    }
    
    // Price Range Filter
    if ($request->has('price_ranges')) {
        $priceConditions = [];
        
        foreach ($request->price_ranges as $range) {
            $prices = explode('-', $range);
            
            if (count($prices) === 2) {
                if ($prices[1] === '+') {
                    $priceConditions[] = ['cake_price', '>=', $prices[0]];
                } else {
                    $priceConditions[] = [
                        ['cake_price', '>=', $prices[0]],
                        ['cake_price', '<=', $prices[1]]
                    ];
                }
            }
        }
        
        $query->where(function($q) use ($priceConditions) {
            foreach ($priceConditions as $condition) {
                if (is_array($condition[0])) {
                    $q->orWhere(function($subQ) use ($condition) {
                        $subQ->where($condition[0]);
                    });
                } else {
                    $q->orWhere($condition);
                }
            }
        });
    }
    
    // Size Filter
    if ($request->has('sizes')) {
        $query->whereIn('cake_size', $request->sizes);
    }
    
    // Search Filter
    if ($request->has('search')) {
        $query->where('cake_name', 'like', '%' . $request->search . '%');
    }
    
    // Sorting
    if ($request->has('sort')) {
        $sort = explode('-', $request->sort);
        $query->orderBy($sort[0], $sort[1]);
    }
    
    $cakes = $query->paginate(12);
    
    if ($request->ajax()) {
        return view('frontend.Home.cake', compact('cakes'))->render();
    }
    
    return view('frontend.layouts.master', compact('cakes'));
}
 





    
}
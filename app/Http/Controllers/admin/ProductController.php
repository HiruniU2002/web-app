<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
}// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use App\Models\Cake; // Assuming your cake model is named Cake
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Get 4 products from each category for the homepage
        $weddingCakes = Cake::where('cake_type', 'Wedding Cakes')->take(4)->get();
        $birthdayCakes = Cake::where('cake_type', 'Birthday Cakes')->take(4)->get();
        $cupcakes = Cake::where('cake_type', 'Cup Cakes')->take(4)->get();
        $brownies = Cake::where('cake_type', 'Brownies')->take(4)->get();
        
        return view('admin.cakes', compact(
            'weddingCakes',
            'birthdayCakes',
            'cupcakes',
            'brownies'
        ));
    }

    public function allProducts()
    {
        // Get all products paginated
        $products = Cake::paginate(12);
        return view('frontend.products.all', compact('products'));
    }
}

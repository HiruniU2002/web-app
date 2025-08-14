<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    
    public function index()
    {
        $items = Cart::instance('cart')->content();
        return view('frontend.cart',compact('items'));
    }



public function increase_item_quantity($rowId)
{
    $product = Cart::instance('cart')->get($rowId);
    $qty = $product->qty + 1;
    Cart::instance('cart')->update($rowId,$qty);
    return redirect()->back();
}
public function reduce_item_quantity($rowId){
    $product = Cart::instance('cart')->get($rowId);
    $qty = $product->qty - 1;
    Cart::instance('cart')->update($rowId,$qty);
    return redirect()->back();
}

public function addToCart(Request $request)
{
    // Validate the request data
    $validated = $request->validate([
        'id' => 'required|integer|exists:cakes,id',
        'name' => 'required|string|max:255',
        'quantity' => 'required|integer|min:1|max:10',
        'category' => 'required|string|max:255',
        'size' => 'required|string|max:255',
        'flavour' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'image' => 'required|string|max:255' // Validate image path/URL
    ]);

    try {
        // Check if item already exists in cart
        $existingItem = Cart::instance('cart')->search(function ($cartItem) use ($validated) {
            return $cartItem->id == $validated['id'] 
                && $cartItem->options->size == $validated['size']
                && $cartItem->options->flavour == $validated['flavour'];
        });

        if ($existingItem->isNotEmpty()) {
            return redirect()->back()
                ->with('warning', 'This item is already in your cart');
        }

        // Add to cart with all necessary data
        Cart::instance('cart')->add([
            'id' => $validated['id'],
            'name' => $validated['name'],
            'qty' => $validated['quantity'],
            'price' => $validated['price'],
            'options' => [
                'size' => $validated['size'],
                'flavour' => $validated['flavour'],
                'category' => $validated['category'],
                'image' => $validated['image']
            ]
        ])->associate('App\Models\Cake');

        return redirect()->back()
            ->with('success', 'Item added to cart successfully!')
            ->with('cart-notification', true);

    } catch (\Exception $e) {
        \Log::error('Cart Add Error: '.$e->getMessage(), [
            'request' => $request->all(),
            'user_id' => auth()->id() ?? 'guest'
        ]);

        return redirect()->back()
            ->with('error', 'Could not add item to cart. Please try again.')
            ->withInput();
    }
}
public function removeItem($rowId)
{
    try {
        // Check if item exists in cart before attempting removal
        $cartItem = Cart::instance('cart')->get($rowId);
        
        if (!$cartItem) {
            return redirect()->back()->with('error', 'Item not found in cart!');
        }

        Cart::instance('cart')->remove($rowId);
        
        return redirect()->back()->with('success', 'Item removed from cart successfully!');
        
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error removing item: ' . $e->getMessage());
    }
}

public function empty_cart()
{
    Cart::instance('cart')->destroy();
    return redirect()->back();
}

public function checkout()
{
        $items = Cart::instance('cart')->content();
        return view('frontend.checkout',compact('items'));
}















}

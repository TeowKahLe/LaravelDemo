<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // Display all items in the cart
    public function index()
    {
        $cartItems = Cart::all(); // Fetch all cart items from the database
        return view('cart.index', compact('cartItems'));
    }

    // Add an item to the cart
    public function add(Request $request)
    {
        // Create a new cart item
        Cart::create([
            'name' => $request->name,
            'price' => $request->price
        ]);

        return redirect()->route('cart.index'); // Redirect back to the cart view
    }

    // Remove an item from the cart
    public function remove($id)
    {
        // Find and delete the cart item by ID
        Cart::find($id)->delete();
        return redirect()->route('cart.index');
    }
}
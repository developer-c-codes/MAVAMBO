<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{   

    // show add project form
    public function add() {
        return view('products.addproduct');
    }

    public function store(Request $request) {
        $validated = $request->validate([
              'p_name' => 'required|string|max:255',
              'category'  => 'required|string|max:255', 
              'price' => 'required|integer|min:0', 
              'stock' => 'required|integer|min:0', 
              'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
              'description' => 'nullable|string|max:455'
        ]);

        // handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public'); // saved in storage/app/public/products
            $validated['image'] = $imagePath;
        }

        Products::create($validated);

        return redirect()->route('dashboard');
    }

    public function destroy($id) 
    {
           $product = Products::findOrFail($id);

           if ($product->image && file_exists(storage_path('app/public/products/'  . $product->image))) {
               unlink(storage_path('app/public/products'  .$product->image));
           }

           $product->delete();

           return redirect()->back()->with('success', 'Product deleted successfully!');
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    
    public function update(Request $request, $id) {
        $product = Products::findOrFail($id);
        $validated = $request->validate([
              'p_name' => 'required|string|max:255',
              'category'  => 'required|string|max:255', 
              'price' => 'required|integer|min:0', 
              'stock' => 'required|integer|min:0', 
              'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
              'description' => 'nullable|string|max:455'
        ]);

        // handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public'); // saved in storage/app/public/products
            $validated['image'] = $imagePath;
        }

        Products::create($validated);

        return redirect()->route('dashboard');
    }
}

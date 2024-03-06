<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        if (session()->has('search_query')) {

            $query = session()->get('search_query');
            $products = Product::where('name', 'like', '%' . $query . '%')->get();

            session()->forget('search_query');
        } else {
            $products = Product::all();
        }

        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Produk  berhasil diubah!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Produk  berhasil dihapus!');
    }

    public function search(Request $request)
    { {
            $query = $request->input('query');
            $products = Product::where('name', 'like', '%' . $query . '%')->get();

            return view('products.index', compact('products'));
        }
    }
}

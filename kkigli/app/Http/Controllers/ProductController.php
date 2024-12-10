<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('dashboard', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tempat_tinggal' => 'required',
            'layanan' => 'required',
            'masa_berlaku' => 'required',
        ]);

        Product::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'nama' => 'required',
            'tempat_tinggal' => 'required',
            'layanan' => 'required',
            'masa_berlaku' => 'required',
        ]);

        $product->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('dashboard')->with('success', 'Produk berhasil dihapus!');
    }
}

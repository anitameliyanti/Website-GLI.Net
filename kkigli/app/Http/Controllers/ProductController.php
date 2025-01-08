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

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'tempat_tinggal' => 'required|string|max:255',
            'layanan' => 'required|string|max:255',
            'masa_berlaku' => 'required|date',
            'masa_habis' => 'required|date'
        ]);
    
        // Menyimpan data produk yang sudah tervalidasi
        Product::create($validatedData);
        return redirect()->route('home')->with('success', 'Pelanggan berhasil ditambahkan!');
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
            'masa_habis' => 'required|date'
        ]);

        $product->update($request->all());
        return redirect()->route('home')->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('dashboard')->with('success', 'Produk berhasil dihapus!');
    }
}

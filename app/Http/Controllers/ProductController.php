<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 1. Menampilkan daftar produk (Admin)
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // 2. Menampilkan form tambah produk
    public function create()
    {
        return view('products.create');
    }

    // 3. Menyimpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required',
            'foto_produk' => 'required',
        ], [
            'nama_produk.required' => 'Nama produk tidak boleh kosong!',
            'deskripsi_produk.required' => 'Deskripsi produk tidak boleh kosong!',
            'foto_produk.required' => 'Foto produk tidak boleh kosong!',
        ]);

        Product::create([
            'nama_produk' => $request->nama_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'foto_produk' => $request->foto_produk,
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    // 4. Menampilkan form edit produk
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    // 5. Update produk
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required',
            'foto_produk' => 'required',
        ], [
            'nama_produk.required' => 'Nama produk tidak boleh kosong!',
            'deskripsi_produk.required' => 'Deskripsi produk tidak boleh kosong!',
            'foto_produk.required' => 'Foto produk tidak boleh kosong!',
        ]);

        $product = Product::findOrFail($id);

        $product->update([
            'nama_produk' => $request->nama_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'foto_produk' => $request->foto_produk,
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil diupdate!');
    }

    // 6. Menghapus produk
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus!');
    }

    // 7. Halaman katalog produk untuk user (/produk)
    public function katalog()
    {
        $products = Product::all();
        return view('produk', compact('products'));
    }
}
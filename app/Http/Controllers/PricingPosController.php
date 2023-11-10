<?php

namespace App\Http\Controllers;

use App\Models\PricingPos;
use Illuminate\Http\Request;

class PricingPosController extends Controller
{
    public function index()
    {
        $posts = PricingPos::get();
        return view('pages.diko_pos.pricing.list', compact('posts'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pricingpos' => 'required',
            'harga_pricingpos' => 'required',
            'deskripsi_pricingpos' => 'required|array',
        ]);
        
        $post = PricingPos::create([
            'nama_pricingpos' => $request->input('nama_pricingpos'),
            'harga_pricingpos' => $request->input('harga_pricingpos'),
        ]);
        
        foreach ($request->deskripsi_pricingpos as $deskripsi) {
            $post->deskripsi()->create([
                'deskripsi' => $deskripsi,
            ]);
        }
        
        return redirect('/pos/pricing/list')->with('success', 'Pricing POS has been added.');
    }    

    public function show($id)
    {
        $post = PricingPos::all();
        return view('pages.diko_pos.pricing.list', compact('post'));
    }

    public function preview($id)
    {
        $post = PricingPos::find($id);
        return view('pages.diko_pos.pricing.preview', compact('post'));
    }

    public function previewalldata()
    {
        $post = PricingPos::all();
        return view('pages.diko_pos.pricing.previewalldata', compact('post'));
    }

    public function edit($id) //kayany gak digunakan
    {
        $post = PricingPos::find($id);
        return view('pages.diko_pos.pricing.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'edit_nama_pricingpos' => 'required',
            'edit_harga_pricingpos' => 'required',
            'edit_deskripsi_pricingpos' => 'required|array',
        ]);
    
        // Temukan data post berdasarkan ID
        $post = PricingPos::find($id);
    
        // Perbarui data post berdasarkan data yang dikirimkan
        $post->nama_pricingpos = $request->input('edit_nama_pricingpos');
        $post->harga_pricingpos = $request->input('edit_harga_pricingpos');
        
        // Hapus deskripsi lama
        $post->deskripsi()->delete();
        
        // Tambahkan deskripsi baru
        foreach ($request->edit_deskripsi_pricingpos as $deskripsi) {
            $post->deskripsi()->create([
                'deskripsi' => $deskripsi,
            ]);
        }
    
        $post->save();
    
        return redirect('/pos/pricing/list')->with('success', 'Pricing POS has been edited.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = PricingPos::find($id);
        $post->delete();

        return redirect('/pos/pricing/list')->with('success', 'Pricing POS has been deleted.');
    }

}

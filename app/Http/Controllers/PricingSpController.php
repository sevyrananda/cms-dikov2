<?php

namespace App\Http\Controllers;

use App\Models\PricingSp;
use Illuminate\Http\Request;

class PricingSpController extends Controller
{
    public function index()
    {
        $posts = PricingSp::get();
        return view('pages.diko_sp.pricing.list', compact('posts'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama_pricingsp' => 'required',
            'harga_pricingsp' => 'required',
            'deskripsi_pricingsp' => 'required',
        ]);

        $post = new PricingSp();
        $post->nama_pricingsp = $request->input('nama_pricingsp');
        $post->harga_pricingsp = $request->input('harga_pricingsp');
        $post->deskripsi_pricingsp = $request->input('deskripsi_pricingsp');

        $post->save();

        return redirect('/sp/pricing/list')->with('success', 'Pricing SP has been added.');
    }

    public function show($id)
    {
        $post = PricingSp::all();
        return view('pages.diko_sp.pricing.list', compact('post'));
    }

    public function preview($id) //blm dikasih isi page
    {
        $post = PricingSp::find($id);
        return view('pages.diko_sp.pricing.preview', compact('post'));
    }

    public function previewalldata()
    {
        $post = PricingSp::all();
        return view('pages.diko_sp.pricing.previewalldata', compact('post'));
    }

    public function edit($id) //kayany gak digunakan
    {
        $post = PricingSp::find($id);
        return view('pages.diko_sp.pricing.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'edit_nama_pricingsp' => 'required',
            'edit_harga_pricingsp' => 'required',
            'edit_deskripsi_pricingsp' => 'required',
        ]);

        // Temukan data post berdasarkan ID
        $post = PricingSp::find($id);

        // Perbarui data post berdasarkan data yang dikirimkan
        $post->nama_pricingsp = $request->input('edit_nama_pricingsp');
        $post->harga_pricingsp = $request->input('edit_harga_pricingsp');
        $post->deskripsi_pricingsp = $request->input('edit_deskripsi_pricingsp');
        

        $post->save();

        return redirect('/sp/pricing/list')->with('success', 'Pricing SP has been edited.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = PricingSp::find($id);
        $post->delete();

        return redirect('/sp/pricing/list')->with('success', 'Pricing SP has been deleted.');
    }

}

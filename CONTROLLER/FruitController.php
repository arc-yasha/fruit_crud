<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FruitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fruits = Fruit::all();
        return view('home', compact('fruits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'harga' => 'required',
            'berat' => 'required',
        ];
        $request->hasFile('foto') && $rules['foto'] = 'mimes:jpg,jpeg,png';
        $data = $request->validate($rules);
        if ($request->hasFile('foto')) {
            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = uniqid() . '.' . $foto_ekstensi;
            $foto_file->move(public_path('foto'), $foto_nama);
            $data['foto'] = $foto_nama;
        }
        Fruit::create($data);
        return redirect()->route('fruit.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fruit = Fruit::find($id);
        return view('edit', ['fruit' => $fruit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'nama' => 'required',
            'harga' => 'required',
            'berat' => 'required',
        ];
        $request->hasFile('foto') && $rules['foto'] = 'mimes:jpg,jpeg,png';
        $data = $request->validate($rules);
        if ($request->hasFile('foto')) {
            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = uniqid() . '.' . $foto_ekstensi;
            $foto_file->move(public_path('foto'), $foto_nama);

            $buah = Fruit::where('id', $id)->first();
            File::delete(public_path('foto') . '/' . $buah->foto);
            $data['foto'] = $foto_nama;
        }
        Fruit::where('id', $id)
            ->update($data);
        return redirect()->route('fruit.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buah = Fruit::where('id', $id)->first();
        File::delete(public_path('foto') . '/' . $buah->foto);
        Fruit::destroy($id);
        return redirect()->route('fruit.index');
    }
}

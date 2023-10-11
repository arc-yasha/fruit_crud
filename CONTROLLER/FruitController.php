<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

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
        Fruit::create(
            [
                'nama' => $request->nama,
                'harga' => $request->harga,
                'berat' => $request->berat
            ]
        );

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
        Fruit::where('id', $id)
            ->update(
                [
                    'nama' => $request->nama,
                    'harga' => $request->harga,
                    'berat' => $request->berat
                ]
            );
        return redirect()->route('fruit.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Fruit::destroy($id);
        return redirect()->route('fruit.index');
    }
}

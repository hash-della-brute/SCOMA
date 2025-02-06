<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('material.index', [
            'materials' => DB::table('materials')->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('material.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $material = $request->validate([
            'name' => 'required',
            'description' => 'string|nullable',
            'quantity' => 'integer|nullable',
            'serial_number' => 'string|nullable',
            'asset_number' => 'string|nullable',
        ]);

        Material::class::create($material);

        return redirect()->route('material.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Material::destroy($id);

        return redirect()->route('material.index');
    }
}

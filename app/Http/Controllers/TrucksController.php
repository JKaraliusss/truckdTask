<?php

namespace App\Http\Controllers;

use App\Models\Trucks;
use Illuminate\Http\Request;

class TrucksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('trucks.trucks', ['trucks' => Trucks::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trucks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trucks = new Trucks();
        $trucks->unit_number = $request->unit_number;
        $trucks->year = $request->year;
        $trucks->notes = $request->notes;

        $trucks->save();

        return redirect()->intended('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trucks $trucks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trucks $trucks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trucks $trucks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trucks $trucks)
    {
        //
    }
}

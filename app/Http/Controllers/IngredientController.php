<?php

namespace App\Http\Controllers;

use App\Models\Ingradient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredients = Ingradient::all();
        // dd($recipes);
        return view('Ingredients.index',['ingredients'=>$ingredients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingradient  $ingradient
     * @return \Illuminate\Http\Response
     */
    public function show(Ingradient $ingradient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ingradient  $ingradient
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingradient $ingradient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ingradient  $ingradient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingradient $ingradient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingradient  $ingradient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingradient $ingradient)
    {
        //
    }
}

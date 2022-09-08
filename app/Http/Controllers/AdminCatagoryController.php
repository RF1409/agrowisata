<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;

class AdminCatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.catagories.index', [
            'catagories' =>Catagory::all()
        ]) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.catagories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:catagories'
        ]);

        Catagory::create($validateData);
        

        return redirect('/dashboard/catagories')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function show(catagory $catagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function edit(catagory $catagory)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, catagory $catagory)
    {
       //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function destroy(catagory $catagory)
    {
        Catagory::destroy($catagory->id);

        return redirect('/dashboard/catagories')->with('success', 'Category Barhasi di Hapus!');
    }
}

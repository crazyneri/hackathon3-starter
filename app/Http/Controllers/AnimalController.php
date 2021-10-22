<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::orderBy('name', 'asc')->get();
        
        return view('animals\index', compact('animals'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $animal = Animal::findOrFail($id);
       
        return view('/animals/show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $animal = Animal::findOrFail($id);
       
        return view('/animals/update', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $animal = Animal::findOrFail($id);
        $animal->name = $request->input('name');
        $animal->owner->first_name = $request->input('first_name');
        $animal->owner->surname = $request->input('surname');
        
        $animal->age = $request->input('age');
        $animal->species = $request->input('species');
        $animal->breed = $request->input('breed');
        $animal->weight = $request->input('weight');
        
        return view('/animals/show', compact('animal'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        // get the request info from the post (input name="search")
        $animal_search = $request->input('search');
     //   dd($animal_search);
        // take the request info and compare with the DB
        $animals = Animal::where('name', 'like', '%' . $animal_search . '%')->orWhere('species', 'like', '%' . $animal_search . '%')->orWhere('breed', 'like', '%' . $animal_search . '%')->get();
        // get the animals that meet the criteria and send them to the same page as index because it will display the search result
        return view('animals\index', compact('animals'));
    }
}

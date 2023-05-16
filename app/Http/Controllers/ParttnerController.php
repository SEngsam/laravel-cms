<?php

namespace App\Http\Controllers;

use App\Models\Parttner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class ParttnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parttners =Parttner::all();
        return view('pages.backend.parttner.parttner_list',compact('parttners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=>"required",
            'logo'=>'required|max:1000|mimes:png,jpg,jpej',

        ]);

        if($request->logo){
            $fileName = time().'.'.$request->logo->extension();
            $request->logo->move(public_path('uploads/parrtner/logo'), $fileName);
        }

        Parttner::create([
            'name' =>$request->name,
            'logo'=> $fileName,
        ]);

        return Redirect::back();

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
        //
    }
}

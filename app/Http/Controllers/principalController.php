<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Principal;

class principalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $principals = Principal::all();
        return view('showprincipal', compact('principals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('addprincipal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Check if a principal already exists in the database
        $existingPrincipalCount = Principal::count();
    
        if ($existingPrincipalCount > 0) {
            echo "A principal already exists. No more principals can be stored...";
        } else {
            // Create and save a new principal
            $principal = new Principal;
            $principal->name = $request->input('name');
            $principal->middlename = $request->input('middlename');
            $principal->lastname = $request->input('lastname');
            $principal->position = $request->input('position');
            $principal->rank = $request->input('rank');
            $principal->save();
    
            echo "Successfully Added!";
        }
    }
    
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $principal = Principal::find($id);
        return view('showprincipal', compact('principal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $principal = Principal::find($id);
        return view('showprincipal', compact('principal'));
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
    $principal = Principal::find($id);
    $principal->name = $request->input('name');
    $principal->middlename = $request->input('middlename');
    $principal->lastname = $request->input('lastname');
    $principal->position = $request->input('position');
    $principal->rank = $request->input('rank');
    $principal->save();

    return redirect()->route('principals.index')->with('success', 'Principal information updated successfully');
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
}

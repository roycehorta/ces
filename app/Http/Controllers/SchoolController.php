<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schools;
use App\Models\Principal;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $principals = Principal::all();
        $schools = Schools::all();
        return view('schools', compact('principals', 'schools'));
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('addschool');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $school = new Schools;
        $school->school_id = $request->input('school_id');
        $school->school_name = $request->input('school_name');
        $school->cluster = $request->input('cluster');
        $school->address = $request->input('address');
        $school->contact_number = $request->input('contact_number');
        $school->email = $request->input('email');
        $school->division_name = $request->input('division_name');
        $school->save();
        echo "Successfully Added!";
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
        $school = Schools::find($id);
        return view('showschool')->with('school', $school);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $school = Schools::findOrFail($id);
        return view('editschool')->with('schools', $school);
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
        $school = Schools::findOrFail($id);
        $school->school_id = $request->input('school_id');
        $school->school_name = $request->input('school_name');
        $school->cluster = $request->input('cluster');
        $school->address = $request->input('address');
        $school->contact_number = $request->input('contact_number');
        $school->email = $request->input('email');
        $school->division_name = $request->input('division_name');
        $school->save();
        return redirect('/schools')->with('success', 'School information updated successfully');
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
        $school = Schools::find($id);
        $school->delete();
        echo "Successfully Deleted!";
    }
}

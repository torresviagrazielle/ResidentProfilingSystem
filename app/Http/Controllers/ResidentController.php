<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $residents = \App\Models\Resident::get();
        return view('residents.index', compact('residents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('residents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'street' => 'required',
            'barangay' => 'required',
            'city' => 'required',
            'citizenship' => 'required',
            'religion' => 'required',
            'sex' => 'required',
            'birth_date' => 'required',
            'birth_place' => 'required',
            'age' => 'required',
            'civil_status' => 'required',
            'residence_period' => 'required',
            'contact_num' => 'required'
        ]);

        //
        $resident = new Resident();
        $resident->lastname = $request->lastname;
        $resident->firstname = $request->firstname;
        $resident->middlename = $request->middlename;
        $resident->extname = $request->extname;
        $resident->house_num = $request->house_num;
        $resident->street = $request->street;
        $resident->barangay = $request->barangay;
        $resident->city = $request->city;
        $resident->citizenship = $request->citizenship;
        $resident->religion = $request->religion;
        $resident->sex = $request->sex;
        $resident->birth_date = $request->birth_date;
        $resident->birth_place = $request->birth_place;
        $resident->age = $request->age;
        $resident->civil_status = $request->civil_status;
        $resident->occupation = $request->occupation;
        $resident->tin_num = $request->tin_num;
        $resident->residence_period = $request->residence_period;
        $resident->contact_num = $request->contact_num;
        $resident->voters_id = $request->voters_id;
        $resident->precint_num = $request->precint_num;
        $resident->save();

        if ($resident->save()){
            return redirect('/residents')->with('status','Sucessfully save');
        }

        return redirect('/residents');
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
        $resident = \App\Models\Resident::find($id);
        return view('residents.show', compact('resident'));
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
        $resident = \App\Models\Resident::find($id);
        return view('residents.edit', compact('resident'));
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
        $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'street' => 'required',
            'barangay' => 'required',
            'city' => 'required',
            'citizenship' => 'required',
            'religion' => 'required',
            'sex' => 'required',
            'birth_date' => 'required',
            'birth_place' => 'required',
            'age' => 'required',
            'civil_status' => 'required',
            'residence_period' => 'required',
            'contact_num' => 'required'
        ]);

        //
        $resident = \App\Models\Resident::find($id);
        $resident->lastname = $request->lastname;
        $resident->firstname = $request->firstname;
        $resident->middlename = $request->middlename;
        $resident->extname = $request->extname;
        $resident->house_num = $request->house_num;
        $resident->street = $request->street;
        $resident->barangay = $request->barangay;
        $resident->city = $request->city;
        $resident->citizenship = $request->citizenship;
        $resident->religion = $request->religion;
        $resident->sex = $request->sex;
        $resident->birth_date = $request->birth_date;
        $resident->birth_place = $request->birth_place;
        $resident->age = $request->age;
        $resident->civil_status = $request->civil_status;
        $resident->occupation = $request->occupation;
        $resident->tin_num = $request->tin_num;
        $resident->residence_period = $request->residence_period;
        $resident->contact_num = $request->contact_num;
        $resident->voters_id = $request->voters_id;
        $resident->precint_num = $request->precint_num;
        $resident->save();

        return redirect('/residents');
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
        $resident = \App\Models\Resident::find($id);
        $resident->delete();

        return redirect('/residents');
    }
}

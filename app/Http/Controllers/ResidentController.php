<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use App\Models\Transaction;
use App\Models\Document;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
    
        //$user = User::find(Auth::id()); 
        $user = Auth::user();
        $residents = $user->resident()->orderBy('created_at','desc')->get();
        $count = $user->resident()->where('id','!=','')->count();
        return view('residents.index', compact('residents', 'count'));
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

        if($request->hasFile('img')){

            $filenameWithExt = $request->file('img')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
            $extension = $request->file('img')->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'.'.$extension;

            $path = $request->file('img')->storeAs('public/img', $filenameToStore);
        } else{
            $filenameToStore = '';
        }

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
        $resident->img = $filenameToStore;
        $resident->user_id = auth()->user()->id;
        $resident->save();

        if ($resident->save()){
            return redirect('/residents')->with('status','Sucessfully save');
        }

    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Resident $resident)
    {
        //
        $resident = Resident::find($resident->id);
        return view('residents.show', compact('resident'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Resident $resident)
    {
        //
        //$resident = \App\Models\Resident::find($id);
        //return view('residents.edit', compact('resident'));

        $resident = Resident::find($resident->id);
        $resident->user_id = auth()->user()->id;
        //$resident = \App\Models\Resident::find($id);
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

        /*if($request->hasFile('img')){

            $filenameWithExt = $request->file('img')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
            $extension = $request->file('img')->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'.'.$extension;

            $path = $request->file('img')->storeAs('public/img', $filenameToStore);
        } else{
               
            $filenameToStore = '';
        }*/

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
        //$resident->img = $filenameToStore;
        $resident->user_id = auth()->user()->id;

        $resident->save();

        return redirect('/residents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resident $resident)
    {
        //
        //$resident = \App\Models\Resident::find($id);
        $resident->delete();

        return redirect('/residents');
    }

    public function deleteBlank()
    {
        $delete = Resident::where('lastname','=','')->delete();

        return redirect('/residents');
    }

    public function archive()
    {
        $residents = Resident::onlyTrashed()->get();

        return view('residents.archive',compact('residents'));
    }

    public function restore($id)
    {
        $resident = Resident::withTrashed()->find($id)->restore();
        
        return redirect('/residents');
    }


    public function search(Request $request, Resident $resident){

        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $residents = Resident::query()
            ->where('lastname', 'LIKE', "%{$search}%")
            ->orWhere('firstname', 'LIKE', "%{$search}%")
            ->orWhere('middlename', 'LIKE', "%{$search}%")
            ->orWhere('extname', 'LIKE', "%{$search}%")
            ->orWhere('house_num', 'LIKE', "%{$search}%")
            ->orWhere('street', 'LIKE', "%{$search}%")
            ->orWhere('barangay', 'LIKE', "%{$search}%")
            ->orWhere('city', 'LIKE', "%{$search}%")
            ->orWhere('citizenship', 'LIKE', "%{$search}%")
            ->orWhere('religion', 'LIKE', "%{$search}%")
            ->orWhere('sex', 'LIKE', "%{$search}%")
            ->orWhere('birth_date', 'LIKE', "%{$search}%")
            ->orWhere('birth_place', 'LIKE', "%{$search}%")
            ->orWhere('age', 'LIKE', "%{$search}%")
            ->orWhere('civil_status', 'LIKE', "%{$search}%")
            ->orWhere('tin_num', 'LIKE', "%{$search}%")
            ->orWhere('voters_id', 'LIKE', "%{$search}%")
            ->orWhere('precint_num', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('residents.search', compact('residents'));
    }

    public function exportCsv(Request $request) {
        $fileName = 'ResidentsList.csv';
        $residents = Resident::all();

            $headers = array(
                "Content-type"        => "text/csv",
                "Content-Disposition" => "attachment; filename=$fileName",
                "Pragma"              => "no-cache",
                "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
                "Expires"             => "0"
            );

            $columns = array('ID', 'Last Name', 'First Name', 'Middle Name', 'Ext Name', 'House No', 'Street', 'Barangay', 'City', 'Citizenship', 'Religion', 'Sex', 'Birth Date', 'Birth Place', 'Age', 'Civil Status', 'Occupation', 'TIN No', 'Residence Period', 'Contact No', 'Voters ID', 'Precint No');

            $callback = function() use($residents, $columns) {
                $file = fopen('php://output', 'w');
                fputcsv($file, $columns);

                foreach ($residents as $resident) {
                    $row['ID']  = $resident->id;
                    $row['Last Name']    = $resident->lastname;
                    $row['First Name']    = $resident->firstname;
                    $row['Middle Name']  = $resident->middlename;
                    $row['Ext Name']  = $resident->extname;
                    $row['House No']  = $resident->house_num;
                    $row['Street']  = $resident->street;
                    $row['Barangay']  = $resident->barangay;
                    $row['City']   = $resident->city;
                    $row['Citizenship']  = $resident->citizenship;
                    $row['Religion']  = $resident->religion;
                    $row['Sex']  = $resident->sex;
                    $row['Birth Date']  = $resident->birth_date;
                    $row['Birth Place']  = $resident->birth_place;
                    $row['Age']  = $resident->age;
                    $row['Civil Status']  = $resident->civil_status;
                    $row['Occupation']  = $resident->occupation;
                    $row['TIN No']  = $resident->tin_num;
                    $row['Residence Period']  = $resident->residence_period;
                    $row['Contact No']  = $resident->contact_num;
                    $row['Voters ID']  = $resident->voters_id;
                    $row['Precint No']  = $resident->precint_num;


                    fputcsv($file, array($row['ID'], $row['Last Name'], $row['First Name'], $row['Middle Name'], $row['Ext Name'], $row['House No'], $row['Street'], $row['Barangay'], $row['City'], $row['Citizenship'], $row['Religion'], $row['Sex'], $row['Birth Date'], $row['Birth Place'], $row['Age'],  $row['Civil Status'], $row['Occupation'], $row['TIN No'], $row['Residence Period'], $row['Contact No'], $row['Voters ID'], $row['Precint No']));
                }

                fclose($file);
            };

        return response()->stream($callback, 200, $headers);
    }



}

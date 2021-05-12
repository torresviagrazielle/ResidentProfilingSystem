<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Document;
use App\Models\Resident;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;



class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $transactions = \App\Models\Transaction::get();
        return view('transactions.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('transactions.create');

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
        $request->validate([
            'purpose' => 'required',
            'place_issued' => 'required'
        ]);

        $transaction = new Transaction();
        $transaction->purpose = $request->purpose;
        $transaction->place_issued = $request->place_issued;

        if ($transaction->save()){
            return redirect('/transactions')->with('status','Sucessfully save');
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
        //
        $transaction = \App\Models\Transaction::find($id);
        return view('transactions.show', compact('transaction'));

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
        $transaction = \App\Models\Transaction::find($id);
        return view('transactions.edit', compact('transaction'));
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
        $request->validate([
            'purpose' => 'required',
            'place_issued' => 'required'
        ]);

        $transaction = new Transaction();
        $transaction->purpose = $request->purpose;
        $transaction->place_issued = $request->place_issued;
        $transaction->save();

        return redirect('/transactions');
        
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
        $transactions = \App\Models\Transaction::find($id);
        $transactions->delete();

        return redirect('/transactions');

    }
}

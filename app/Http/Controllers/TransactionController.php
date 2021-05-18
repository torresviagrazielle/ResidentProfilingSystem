<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Document;
use App\Models\Resident;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


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
        //$transactions = \App\Models\Transaction::get();
        $documents = Document::get();
        $user = Auth::user();
        $transactions = $user->transaction()->orderBy('created_at','desc')->get();
        
        $count = $user->transaction()->where('id','!=','')->count();
        return view('transactions.index', compact('transactions', 'count', 'documents'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $documents = Document::all();
        return view('transactions.create', compact('documents'));
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
            'resident_id' => 'required',
            'document_id' => 'required',
            'purpose' => 'required',
            'place_issued' => 'required'
        ]);

        $transaction = new Transaction();
        $transaction->resident_id = $request->resident_id;
        $transaction->document_id = $request->document_id;
        $transaction->purpose = $request->purpose;
        $transaction->place_issued = $request->place_issued;
        $transaction->user_id = auth()->user()->id;


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
    public function show(Transaction $transaction)
    {
        //
        //$transaction = \App\Models\Transaction::find($id);
        $transaction = Transaction::find($transaction->id);
        //$documents = $transaction->documents;
        return view('transactions.show', compact('transaction'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
        //$transaction = \App\Models\Transaction::find($id);
        $documents = Document::all();
        $transaction = Transaction::find($transaction->id);
        $transaction->user_id = auth()->user()->id;
        return view('transactions.edit', compact('transaction', 'documents'));
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
            'resident_id' => 'required',
            'document_id' => 'required',
            'purpose' => 'required',
            'place_issued' => 'required'
        ]);

        $transaction = new Transaction();
        $transaction->resident_id = $request->resident_id;
        $transaction->document_id = $request->document_id;
        $transaction->purpose = $request->purpose;
        $transaction->place_issued = $request->place_issued;
        $transaction->user_id = auth()->user()->id;
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

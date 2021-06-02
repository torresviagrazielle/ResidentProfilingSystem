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

use PDF;



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
        $documents = Document::get();
        //$documents = Document::with('transactions')->get();
        $user = Auth::user();
        $transactions = $user->transaction()->orderBy('created_at','desc')->take(5)->get();
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
        $documents = Document::orderBy('document_type','asc')->get();
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
        $transaction->document_id =  $request->document_id;
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
        $transaction = Transaction::findOrFail($transaction->id);
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

    public function destroy(Transaction $transaction)
    {
        //
        $transaction->delete();

        return redirect('/transactions');
    }

    public function deleteBlank()
    {
        $delete = Transaction::where('purpose','=','')->delete();

        return redirect('/transactions');
    }

    public function archive()
    {
        $transactions = Transaction::onlyTrashed()->get();

        return view('transactions.archive',compact('transactions'));
    }

    public function restore($id)
    {
        $transaction = Transaction::withTrashed()->find($id)->restore();
        
        return redirect('/transactions');
    }
    
    //SEARCH FUNCTION
    public function searchtransac(Request $request, Transaction $transaction){

        // Get the search value from the request
        $searchtransac = $request->input('searchtransac');
    
        // Search in the title and body columns from the posts table
        $transactions = Transaction::query()
            ->where('resident_id', 'LIKE', "%{$searchtransac}%")
            ->orWhere('document_id', 'LIKE', "%{$searchtransac}%")
            ->orWhere('purpose', 'LIKE', "%{$searchtransac}%")
            ->orWhere('place_issued', 'LIKE', "%{$searchtransac}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('transactions.search', compact('transactions'));
    }

    //PRINT FUNCTION
    public function printPDF()
    {
        $trasanction = Transaction::all();
        $document = Document::all();
        $resident = Resident::all();
        
        // This  $data array will be passed to our PDF blade
        $data = [
        'title' => 'Document Issuance',
        'heading' => 'Barangay Sample',
        'content' => 'SAMPLE CONTENT'];
          
        $pdf = PDF::loadView('pdf_view', $data);  
        return $pdf->download('document.pdf');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function printTransaction(Transaction $transaction) {
        $transactions = Transaction::all();
        $residents = Resident::all();
        //$documents = $transaction->documents;
        return view('transactions.indigent',compact('transactions', 'residents'));

        

    }
}

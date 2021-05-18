<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Transaction;
use App\Models\Resident;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$documents = \App\Models\Document::get();
        //return view('documents.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view('documents.create');
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
            'document_type' => 'required'
        ]);

        $input = $request->all();
        $input['document_type'] = Auth::id();

        Document::create($input);
        return back();

        /*$request->validate([
            'document_type' => 'required',
        ]);

        $document = new Document();
        $document->document_type = $request->document_type;
        $document->save();

        if ($document->save()){
            return redirect('/documents')->with('status','Sucessfully save');
        }*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
        //$document = \App\Models\Document::find($id);
        //return view('documents.show', compact('document'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
        //$document = \App\Models\Document::find($id);
        //return view('documents.show', compact('document'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
        /*$request->validate([
            'document_type' => 'required',
        ]);

        $document = \App\Models\Document::find($id);
        $document->document_type = $request->document_type;
        $document->save();

        return redirect('/documents'); */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //
        /*$document = \App\Models\Document::find($id);
        $document->delete();

        return redirect('/documents');*/
        
    }
}

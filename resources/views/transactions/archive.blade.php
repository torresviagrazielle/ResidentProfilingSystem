@extends('layouts.app')

@section('content')

<div class="container">
    <!--HEADER-->
    <div class="form-inline">
        <a class="btn button btn-light mb-3" style="font-size: 20px; font-weight:bold;" href="/transactions">
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/></svg>  
        </a>
        <div class="form-group mb-2">
            <h3 style="padding-left: 30px; font-weight:bold; color:#272a2d;">Document Issuance Archive</h3>    
        </div>
    </div> <hr style="margin-top:-5px;"> 

    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(session('message'))
              <div class="alert alert-success">
                    {{ session('message') }}
              </div>
            @endif
            <div class="card">       
                <div class="card-body">
                    <!--TABLE-->
                    <table class="table">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> Name of Resident </th>
                                <th> Type of Document </th>
                                <th> Purpose </th>
                                <th> Action </th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                            <tr>
                                <td> {{ $transaction->id }} </td>
                                <td> {{ $transaction->resident_id }}</td>
                                <td> {{ $transaction->document_id }}</td>
                                <td> {{ $transaction->purpose }}</td>
                                <td> 
                                <a href="/transactions/{{$transaction->id}}/restore" class="btn btn-success"> Restore </a>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
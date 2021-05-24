@extends('layouts.app')

@section('content')

<div class="container">
    <!--SIDENAV CONTENT-->
    <div class="row justify-content-center">
        <a class="btn button btn-light" href="/dashboard">Dashboard</a>
        <a class="btn button btn-light" href="/residents">Resident Profiling</a>
        <a class="btn button btn-light" href="/transactions">Document Issuance</a>
        <div class="dropdown">
            <button class="btn btn-light dropdown-toggle active" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Archive
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item btn button btn-light " href="/residents-archive">Resident Archive</a>
                <a class="dropdown-item btn button btn-light active" href="/transactions-archive">Document Issuance Archive</a>
            </div>
        </div>
    </div>
    <hr>
    <!--HEADER
    <h3 style="padding-left: 30px; font-weight:bold; color:#272a2d;">Document Issuance Archive</h3>    
    <hr>-->

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
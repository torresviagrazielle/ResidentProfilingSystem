@extends('layouts.app') <!--NAVBAR UI located at resources>views>layouts>app.blade.php-->

@section('content')
<div class="container">
    <!--SIDENAV CONTENT-->
    <div class="row justify-content-center">
        <a class="btn button btn-light" href="/dashboard">Dashboard</a>
        <a class="btn button btn-light" href="/residents">Resident Profiling</a>
        <a class="btn button btn-light active" href="/transactions">Document Issuance</a>
        <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Archive
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item btn button btn-light" href="/residents-archive">Resident Archive</a>
                <a class="dropdown-item btn button btn-light" href="/transactions-archive">Document Issuance Archive</a>
            </div>
        </div>
    </div>
    <hr>
    <!--HEADER
    <h3 style="padding-left: 30px; font-weight:bold; color:#272a2d;">Document Issuance</h3>    
    <hr>-->
    <div class="row justify-content-center">
        <div class="col-md-12">
        <!--ADD BUTTON AND SEARCH BAR IN LINE-->
            <div class="row">
                <div class="col">
                    <a class="btn button btn-primary" href="/transactions/create">+ New Request</a>
                </div>
                <div class="col">
                    <form class="form-inline" action="{{ route('searchtransac')}}" method="GET" style="float:right;">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="searchTransaction" class="sr-only">Search</label>
                            <input type="test" class="form-control" id="searchTransaction" placeholder="Search" name="searchtransac">
                        </div>
                        <button type="submit" class="btn btn-secondary mb-2">Search</button>
                    </form>            
                </div>
            </div>            
            <br>

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
                        @if($transactions->isNotEmpty())
                            @foreach ($transactions as $transaction)
                            <tr>
                                <td> {{ $transaction->id }} </td>
                                <td> {{ $transaction->resident_id }}</td>
                                <td> {{ $transaction->document_id }}</td>
                                <td> {{ $transaction->purpose }}</td>
                                <td> <a href="/transactions/{{$transaction->id}}" class="btn button btn-primary"> View </a> 
                                     <a href="/transactions/{{$transaction->id}}/edit" class="btn button btn-info"> Edit </a> </td>
                                <td> 
                                    <form method="POST" action=" {{ route('transactions.destroy', $transaction->id)}}">
                                        @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn button btn-danger" style="margin-left:-105px;">Archive</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        @else 
                            <div>
                                <p style="text-align: center; font-weight: bold; font-size:18px; color: red;">No transaction/s found</p>
                            </div>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


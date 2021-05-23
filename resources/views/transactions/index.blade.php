@extends('layouts.app')

@section('content')
<div class="container">
    <!--HEADER-->
    <h3 style="padding-left: 30px; font-weight:bold; color:#272a2d;">Document Issuance</h3>    
    <hr>
    <div class="row justify-content-center">
        <a class="btn button btn-light" href="/dashboard">Dashboard</a>
        <a class="btn button btn-light" href="/residents">Resident Profiling</a>
        <a class="btn button btn-light active" href="/transactions">Document Issuance</a>
        <a class="btn button btn-light" href="/residents-archive">Resident Archive</a>
        <a class="btn button btn-light" href="/transactions-archive">Document Issuance Archive</a>
    </div>
    <hr>
    <br>

    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- create a new post for transaction --}}
            <a class="btn button btn-primary" href="/transactions/create">Create New</a>
            <br><br>
            <form action="{{ route('search') }}" method="GET">
                    <input class="form-control col-md-3" placeholder="Search" type="text" name="search"/>
                    <button class="btn button btn-primary" type="submit">Search</button>
            </form> <br>
            <div class="card">
                <div class="card-body">
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
                                <td> <a href="/transactions/{{$transaction->id}}" class="btn button btn-info"> View </a> 
                                     <a href="/transactions/{{$transaction->id}}/edit" class="btn button btn-warning"> Edit </a> </td>
                                <td> 
                                    <form method="POST" action=" {{ route('transactions.destroy', $transaction->id)}}">
                                        @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn button btn-danger" style="margin-left: -105px;">Archive</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>

                        Total # of Document Request  {{ $count }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

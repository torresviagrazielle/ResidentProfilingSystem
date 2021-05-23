@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn button btn-primary" href="/residents">Resident Profiling</a>
    <a class="btn button btn-primary" href="/transactions">Document Issuance</a>
    <a class="btn button btn-primary" href="/residents-archive">Resident Archive</a>
    <a class="btn button btn-primary" href="/transactions-archive">Document Issuance Archive</a>  <br>

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
                                <td> <a href="/transactions/{{$transaction->id}}" class="btn btn-info"> View </a> 
                                     <a href="/transactions/{{$transaction->id}}/edit" class="btn btn-warning"> Edit </a> </td>
                                <td> 
                                    <form method="POST" action=" {{ route('transactions.destroy', $transaction->id)}}">
                                        @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger" style="margin-left: -105px;">Archive</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
\                </div>
            </div>
        </div>
    </div>
</div>
@endsection
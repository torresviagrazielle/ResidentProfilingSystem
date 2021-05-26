@extends('layouts.app') <!--NAVBAR UI located at resources>views>layouts>app.blade.php-->

@section('content')
<div class="container">
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
                                            <button type="submit" class="btn button btn-danger" style="margin-left: -105px;">Archive</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!--TOTAL COUNT OF DOCUMENT REQUEST-->
                    <hr>
                    <div class="row">
                        <div class="col" style="margin-left:25px; font-weight:bold;">
                            Total # of Document Request  {{ $count }}
                        </div>
                        <div class="col">
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

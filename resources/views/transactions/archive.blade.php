@extends('layouts.app')

@section('content')

<div class="container">


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
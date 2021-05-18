@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <a class="btn button btn-info" href="/transactions">Back</a> <br><br>
            
            <div class="card">       
                <div class="card-body">
                    Resident Name : {{ $transaction->resident_id }} <br>
                    Type of Document : {{ $transaction->document_id }} <br>
                    Purpose : {{ $transaction->purpose }} <br>
                    Place Issued : {{ $transaction->place_issued }} <br>
                    Created At : {{ $transaction->created_at }}
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
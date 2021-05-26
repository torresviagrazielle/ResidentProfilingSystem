@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">            
            <div class="card">       
                <div class="card-body">
                    Resident Name : {{ $transaction->resident_id }} <br>
                    Type of Document : {{ $transaction->document_id }} <br>
                    Purpose : {{ $transaction->purpose }} <br>
                    Place Issued : {{ $transaction->place_issued }} <br>
                    Created At : {{ $transaction->created_at }}
                    <a class="btn btn-success" onclick="window.print()" style="float:right; margin-right: 20px;">Print Document</a>

                </div>
            </div>
        </div>
    </div>

</div>
    
@endsection
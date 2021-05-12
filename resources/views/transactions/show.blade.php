@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <a class="btn button btn-info" href="/transactions">Back</a> <br><br>
            
            <div class="card">       
                <div class="card-body">
                    Purpose : {{ $transaction->purpose }} <br>
                    Place Issued : {{ $transaction->place_issued }} <br>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
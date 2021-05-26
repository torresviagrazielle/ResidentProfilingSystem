@extends('layouts.app')

@section('content')

<div class="container">
    <!--HEADER-->
    <div class="form-inline">
        <a class="btn button btn-light mb-3" style="font-size: 20px; font-weight:bold;" href="/transactions">
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/></svg>  
        </a>
        <div class="form-group mb-2">
            <h3 style="padding-left: 30px; font-weight:bold; color:#272a2d;">View Document Request</h3>    
        </div>
    </div> <hr style="margin-top:-5px;">  

    <div class="row justify-content-center">
        <div class="col-md-8">            
            <div class="card">       
                <div class="card-body">
                    Resident Name : {{ $transaction->resident_id }} <br>
                    Type of Document : {{ $transaction->document_id }} <br>
                    Purpose : {{ $transaction->purpose }} <br>
                    Place Issued : {{ $transaction->place_issued }} <br>
                    Created At : {{ $transaction->created_at }}
                    <a class="btn btn-success" href="/transaction/print" style="float:right; margin-right: 20px;">Print Document</a>

                </div>
            </div>
        </div>
    </div>

</div>
    
@endsection
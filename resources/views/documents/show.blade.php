@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <a class="btn button btn-info" href="/documents">Back</a> <br><br>
            
            <div class="card">       
                <div class="card-body">
                    Type of Document : {{ $document->document_type }} <br>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
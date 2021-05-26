@extends('layouts.app')

@section('content')
<style>
    .card {
        font-size: 20px; 
        font-weight: 200;
        text-align: center;
    }
</style>
<div class="container">

    
    <div class="row">
        <div class="col-md-3">
            <div class="card bg-secondary text-light">
                <div class="card-header">{{ __('Total Population') }}</div>

                <div class="card-body bg-light text-dark">
                 {{ $count }}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-secondary text-light">
                <div class="card-header">{{ __('Registered Voter') }}</div>

                <div class="card-body bg-light text-dark">
                 {{ $voter }}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-secondary text-light">
                <div class="card-header">{{ __('Total Female') }}</div>

                <div class="card-body bg-light text-dark">
                 {{ $female }}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-secondary text-light">
                <div class="card-header">{{ __('Total Male') }}</div>

                <div class="card-body bg-light text-dark">
                 {{ $male }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

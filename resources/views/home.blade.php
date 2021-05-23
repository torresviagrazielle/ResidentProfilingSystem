@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{ __('Total Population') }}</div>

                <div class="card-body">
                 {{ $count }}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{ __('Registered Voter') }}</div>

                <div class="card-body">
                 {{ $voter }}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{ __('Total Female') }}</div>

                <div class="card-body">
                 {{ $female }}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{ __('Total Male') }}</div>

                <div class="card-body">
                 {{ $male }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn button btn-primary" href="/dashboard">Dashboard</a>
    <a class="btn button btn-primary" href="/residents">Resident Profiling</a>
    <a class="btn button btn-primary" href="/transactions">Document Issuance</a>
    <a class="btn button btn-primary" href="/residents-archive">Resident Archive</a>
    <a class="btn button btn-primary" href="/transactions-archive">Document Issuance Archive</a>  <br>
    
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

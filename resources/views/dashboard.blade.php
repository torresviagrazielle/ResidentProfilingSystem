@extends('layouts.app')

@section('content')
<div class="container">
    <!--HEADER-->
    <h3 style="padding-left: 30px; font-weight:bold; color:#272a2d;">Dashboard</h3>    
    <hr>
    <div class="row justify-content-center">
        <a class="btn button btn-light active" href="/dashboard">Dashboard</a>
        <a class="btn button btn-light " href="/residents">Resident Profiling</a>
        <a class="btn button btn-light" href="/transactions">Document Issuance</a>
        <a class="btn button btn-light" href="/residents-archive">Resident Archive</a>
        <a class="btn button btn-light" href="/transactions-archive">Document Issuance Archive</a>
    </div>
    <hr>
    <br>
    
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

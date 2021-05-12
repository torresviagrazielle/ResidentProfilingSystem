@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn button btn-info" href="/documents">Back</a> <br><br>
            <div class="card">       
                <div class="card-header">New Type of Document</div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>                                        
                                    @endforeach
                                </ul>
                            </div>                        
                        @endif

                        <form method="POST" action="/documents" enctype="multipart/form-data">
                            @csrf

                            <!--Type of Document-->
                            <div class="form-group row">
                                <label for="document_type" class="col-md-4 col-form-label text-md-right">{{ __('Type of Document') }}</label>

                                <div class="col-md-6">
                                    <input id="document_type" type="text" class="form-control @error('document_type') is-invalid @enderror" name="document_type" value="{{ old('document_type') }}" autofocus>        
                                </div>

                                @error('document_type')
                                    <span class="invalid-feedback" role="alert"> 
                                        {{ $message }}
                                    </span>                                
                                @enderror
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>
@endsection
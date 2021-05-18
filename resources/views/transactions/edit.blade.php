@extends('layouts.app')


@section('content')
 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="btn button btn-info" href="/transactions">Back</a> <br><br>
                  <div class="card">       
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

                        <form method="POST" action=" {{ route('transactions.update', $transaction->id)}} " enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf

                             <!--Resident Name-->
                            <div class="form-group row">
                                <label for="resident_id" class="col-md-4 col-form-label text-md-right">{{ __('Resident Name') }}</label>

                                <div class="col-md-6">
                                    <input id="resident_id" type="text" class="form-control @error('resident_id') is-invalid @enderror" name="resident_id" value="{{ $transaction->resident_id }}" autofocus>        
                                </div>

                                @error('resident_id')
                                    <span class="invalid-feedback" role="alert"> 
                                        {{ $message }}
                                    </span>                                
                                @enderror
                            </div>

                            <!--Type of Document-->
                            <div class="form-group row">
                                <label for="document_id" class="col-md-4 col-form-label text-md-right">{{ __('Type of Document') }}</label>

                                <div class="col-md-6">
                                    <select id="document_id" type="text" class="form-control @error('document_id') is-invalid @enderror" name="document_id" value="{{ $transaction->document_id }}" autofocus>   
                                        @foreach($documents as $row)
                                            <option value="{{ $row->id }}">{{ $row->document_type }}</option>
                                        @endforeach
                                    </select>     
                                </div>

                                @error('document_id')
                                    <span class="invalid-feedback" role="alert"> 
                                        {{ $message }}
                                    </span>                                
                                @enderror

                            </div>
    
                            <!--Purpose-->
                            <div class="form-group row">
                                <label for="purpose" class="col-md-4 col-form-label text-md-right">{{ __('Purpose') }}</label>

                                <div class="col-md-6">
                                    <input id="purpose" type="text" class="form-control @error('purpose') is-invalid @enderror" name="purpose" value="{{ $transaction->purpose }}" autofocus>        
                                </div>

                                @error('purpose')
                                    <span class="invalid-feedback" role="alert"> 
                                        {{ $message }}
                                    </span>                                
                                @enderror
                            </div>

                            <!--Place Issued-->
                            <div class="form-group row">
                                <label for="place_issued" class="col-md-4 col-form-label text-md-right">{{ __('Place Issued') }}</label>

                                <div class="col-md-6">
                                    <input id="place_issued" type="text" class="form-control @error('place_issued') is-invalid @enderror" name="place_issued" value="{{ $transaction->place_issued }}" autofocus>        
                                </div>

                                @error('place_issued')
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
        
@endsection
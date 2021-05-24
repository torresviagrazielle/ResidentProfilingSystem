@extends('layouts.app')

@section('content')
<style>
    span {
        color: red;
    }

    .card-header {
        color: white;
        background-color: gray;
    }
</style>
<div class="container">
    <!--HEADER-->
    <div class="form-inline">
        <a class="btn button btn-light mb-3" style="font-size: 20px; font-weight:bold;" href="/residents">
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/></svg>  
        </a>
        <div class="form-group mb-2">
            <h3 style="padding-left: 30px; font-weight:bold; color:#272a2d;">Filing New Resident Record</h3>    
        </div>
    </div> <hr style="margin-top:-5px;">  

    <div class="row justify-content-center">
        <div class="col-md-3 justify-content-center">
            <div class="card">       
                <div class="card-body"> 
                    <!-- Resident Image-->
                    <div class="form-group row">
                        <svg style="margin-left:50px;" xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
                            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
                        </svg>
                        <label for="img" class="col-md-7 col-form-label text-md-right">{{ __('Photo Upload') }}</label>
                        <input style="padding-left:25px;" type="file" class="form-control-file" name="img" value="{{ old('img') }}"  autocomplete="img">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">       
                <div class="card-header">Personal Information</div>
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

                    <form method="POST" action="/residents" enctype="multipart/form-data">
                        @csrf

                        <!--Lastname-->
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}<span>*</span></label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" autofocus>        
                            </div>

                            @error('lastname')
                                <span class="invalid-feedback" role="alert"> 
                                    {{ $message }}
                                </span>                                
                            @enderror
                        </div>

                        <!--Firstname-->
                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}<span>*</span></label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" autofocus>        
                            </div>

                            @error('firstname')
                                <span class="invalid-feedback" role="alert"> 
                                    {{ $message }}
                                </span>                                
                            @enderror
                        </div>

                        <!--Middlename-->
                        <div class="form-group row">
                            <label for="middlename" class="col-md-4 col-form-label text-md-right">{{ __('Middlename') }}</label>

                            <div class="col-md-6">
                                <input id="middlename" type="text" class="form-control" name="middlename" value="{{ old('middlename') }}" autofocus>        
                            </div>
                        </div>

                        <!--Extname-->
                        <div class="form-group row">
                            <label for="extname" class="col-md-4 col-form-label text-md-right">{{ __('Extname') }}</label>

                            <div class="col-md-6">
                                <input id="extname" type="text" class="form-control" name="extname" value="{{ old('extname') }}" autofocus>        
                            </div>
                        </div>

                         <!--House Number-->
                         <div class="form-group row">
                            <label for="house_num" class="col-md-4 col-form-label text-md-right">{{ __('House No.') }}</label>

                            <div class="col-md-6">
                                <input id="house_num" type="text" class="form-control" name="house_num" value="{{ old('house_num') }}" autofocus>        
                            </div>
                        </div>

                        <!--Street-->
                        <div class="form-group row">
                            <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Street') }}<span>*</span></label>

                            <div class="col-md-6">
                                <input id="street" type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="{{ old('street') }}" autofocus>        
                            </div>

                            @error('street')
                                <span class="invalid-feedback" role="alert"> 
                                    {{ $message }}
                                </span>                                
                            @enderror
                        </div>

                        <!--Barangay-->
                        <div class="form-group row">
                            <label for="barangay" class="col-md-4 col-form-label text-md-right">{{ __('Barangay') }}<span>*</span></label>

                            <div class="col-md-6">
                                <input id="barangay" type="text" class="form-control form-control @error('barangay') is-invalid @enderror" name="barangay" value="{{ old('barangay') }}" autofocus>        
                            </div>

                            @error('barangay')
                                <span class="invalid-feedback" role="alert"> 
                                    {{ $message }}
                                </span>                                
                            @enderror
                        </div>

                        <!--City-->
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}<span>*</span></label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" autofocus>        
                            </div>

                            @error('city')
                                <span class="invalid-feedback" role="alert"> 
                                    {{ $message }}
                                </span>                                
                            @enderror
                        </div>

                        <!--Citizenship-->
                        <div class="form-group row">
                            <label for="citizenship" class="col-md-4 col-form-label text-md-right">{{ __('Citizenship') }}<span>*</span></label>

                            <div class="col-md-6">
                                <input id="citizenship" type="text" class="form-control @error('citizenship') is-invalid @enderror" name="citizenship" value="{{ old('citizenship') }}" autofocus>        
                            </div>

                            @error('citizenship')
                                <span class="invalid-feedback" role="alert"> 
                                    {{ $message }}
                                </span>                                
                            @enderror
                        </div>

                        <!--Religion-->
                        <div class="form-group row">
                            <label for="religion" class="col-md-4 col-form-label text-md-right">{{ __('Religion') }}<span>*</span></label>

                            <div class="col-md-6">
                                <input id="religion" type="text" class="form-control @error('religion') is-invalid @enderror" name="religion" value="{{ old('religion') }}" autofocus>        
                            </div>

                            @error('religion')
                                <span class="invalid-feedback" role="alert"> 
                                    {{ $message }}
                                </span>                                
                            @enderror
                        </div>

                        <!--Sex-->
                        <div class="form-group row">
                            <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Sex') }}<span>*</span></label>

                            <div class="col-md-6">
                                <input id="sex" type="text" class="form-control @error('sex') is-invalid @enderror" name="sex" value="{{ old('sex') }}" autofocus>        
                            </div>

                            @error('sex')
                                <span class="invalid-feedback" role="alert"> 
                                    {{ $message }}
                                </span>                                
                            @enderror
                        </div>

                        <!--Date of Birth-->
                        <div class="form-group row">
                            <label for="birth_date" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}<span>*</span></label>

                            <div class="col-md-6">
                                <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') }}" autofocus>        
                            </div>

                            @error('birth_date')
                                <span class="invalid-feedback" role="alert"> 
                                    {{ $message }}
                                </span>                                
                            @enderror
                        </div>

                         <!--Birth Place-->
                         <div class="form-group row">
                            <label for="birth_place" class="col-md-4 col-form-label text-md-right">{{ __('Birth Place') }}<span>*</span></label>

                            <div class="col-md-6">
                                <input id="birth_place" type="text" class="form-control @error('birth_place') is-invalid @enderror" name="birth_place" value="{{ old('birth_place') }}" autofocus>        
                            </div>

                            @error('birth_place')
                                <span class="invalid-feedback" role="alert"> 
                                    {{ $message }}
                                </span>                                
                            @enderror
                        </div>

                        <!--Age-->
                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}<span>*</span></label>

                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" autofocus>        
                            </div>

                            @error('age')
                                <span class="invalid-feedback" role="alert"> 
                                    {{ $message }}
                                </span>                                
                            @enderror
                        </div>

                        <!--Civil Status-->
                        <div class="form-group row">
                            <label for="civil_status" class="col-md-4 col-form-label text-md-right">{{ __('Civil Status') }}<span>*</span></label>

                            <div class="col-md-6">
                                <input id="civil_status" type="text" class="form-control @error('civil_status') is-invalid @enderror" name="civil_status" value="{{ old('civil_status') }}" autofocus>        
                            </div>

                            @error('civil_status')
                                <span class="invalid-feedback" role="alert"> 
                                    {{ $message }}
                                </span>                                
                            @enderror
                        </div>

                        <!--Profession/Occupation-->
                        <div class="form-group row">
                            <label for="occupation" class="col-md-4 col-form-label text-md-right">{{ __('Profession/Occupation') }}</label>

                            <div class="col-md-6">
                                <input id="occupation" type="text" class="form-control" name="occupation" value="{{ old('occupation') }}" autofocus>        
                            </div>
                        </div>

                        <!--TIN No.-->
                        <div class="form-group row">
                            <label for="tin_num" class="col-md-4 col-form-label text-md-right">{{ __('TIN No.') }}</label>

                            <div class="col-md-6">
                                <input id="tin_num" type="text" class="form-control" name="tin_num" value="{{ old('tin_num') }}" autofocus>        
                            </div>
                        </div>

                        <!--Period of Residence-->
                        <div class="form-group row">
                            <label for="residence_period" class="col-md-4 col-form-label text-md-right">{{ __('Period of Residence') }}<span>*</span></label>

                            <div class="col-md-6">
                                <input id="residence_period" type="text" class="form-control @error('residence_period') is-invalid @enderror" name="residence_period" value="{{ old('residence_period') }}" autofocus>        
                            </div>

                            @error('residence_period')
                                <span class="invalid-feedback" role="alert"> 
                                    {{ $message }}
                                </span>                                
                            @enderror
                        </div>

                        <!--Contact Number-->
                        <div class="form-group row">
                            <label for="contact_num" class="col-md-4 col-form-label text-md-right">{{ __('Contact No.') }}<span>*</span></label>

                            <div class="col-md-6">
                                <input id="contact_num" type="text" class="form-control @error('contact_num') is-invalid @enderror" name="contact_num" value="{{ old('contact_num') }}" autofocus>        
                            </div>

                            @error('contact_num')
                                <span class="invalid-feedback" role="alert"> 
                                    {{ $message }}
                                </span>                                
                            @enderror
                        </div>

                        <!--Voter's ID No.-->
                        <div class="form-group row">
                            <label for="voters_id" class="col-md-4 col-form-label text-md-right">{{ __('Voter`s ID No.') }}</label>

                            <div class="col-md-6">
                                <input id="voters_id" type="text" class="form-control" name="voters_id" value="{{ old('voters_id') }}" autofocus>        
                            </div>
                        </div>


                        <!--Precint Assignment No.-->
                        <div class="form-group row">
                            <label for="precint_num" class="col-md-4 col-form-label text-md-right">{{ __('Precint Assignment No.') }}</label>

                            <div class="col-md-6">
                                <input id="precint_num" type="text" class="form-control" name="precint_num" value="{{ old('precint_num') }}" autofocus>        
                            </div>
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
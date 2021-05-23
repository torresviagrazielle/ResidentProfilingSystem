@extends('layouts.app')


@section('content')
 
    <div class="container">
        <a class="btn button btn-light" style="font-size: 20px; font-weight:bold;" href="/residents"><</a>
        <h3 style="padding-left: 30px; font-weight:bold; color:#272a2d;">Edit Resident Record</h3>    
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-8">
                 <br><br>
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

                        <form method="POST" action=" {{ route('residents.update', $resident->id)}} " enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
 
                            <!--Lastname-->
                            <div class="form-group row">
                                <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>

                                <div class="col-md-6">
                                    <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ $resident->lastname }}" autofocus>        
                                </div>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert"> 
                                        {{ $message }}
                                    </span>                                
                                @enderror
                            </div>

                            <!--Firstname-->
                            <div class="form-group row">
                                <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>

                                <div class="col-md-6">
                                    <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ $resident->firstname }}" autofocus>        
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
                                    <input id="middlename" type="text" class="form-control" name="middlename" value="{{ $resident->middlename }}" autofocus>        
                                </div>
                            </div>

                            <!--Extname-->
                            <div class="form-group row">
                                <label for="extname" class="col-md-4 col-form-label text-md-right">{{ __('Extname') }}</label>

                                <div class="col-md-6">
                                    <input id="extname" type="text" class="form-control" name="extname" value="{{ $resident->extname }}" autofocus>        
                                </div>
                            </div>

                            <!--House Number-->
                            <div class="form-group row">
                                <label for="house_num" class="col-md-4 col-form-label text-md-right">{{ __('House No.') }}</label>

                                <div class="col-md-6">
                                    <input id="house_num" type="text" class="form-control" name="house_num" value="{{ $resident->house_num }}" autofocus>        
                                </div>
                            </div>

                            <!--Street-->
                            <div class="form-group row">
                                <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Street') }}</label>

                                <div class="col-md-6">
                                    <input id="street" type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="{{ $resident->street }}" autofocus>        
                                </div>

                                @error('street')
                                    <span class="invalid-feedback" role="alert"> 
                                        {{ $message }}
                                    </span>                                
                                @enderror
                            </div>

                            <!--Barangay-->
                            <div class="form-group row">
                                <label for="barangay" class="col-md-4 col-form-label text-md-right">{{ __('Barangay') }}</label>

                                <div class="col-md-6">
                                    <input id="barangay" type="text" class="form-control @error('barangay') is-invalid @enderror" name="barangay" value="{{ $resident->barangay }}" autofocus>        
                                </div>

                                @error('barangay')
                                    <span class="invalid-feedback" role="alert"> 
                                        {{ $message }}
                                    </span>                                
                                @enderror
                            </div>

                            <!--City-->
                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ $resident->city }}" autofocus>        
                                </div>

                                @error('city')
                                    <span class="invalid-feedback" role="alert"> 
                                        {{ $message }}
                                    </span>                                
                                @enderror
                            </div>

                            <!--Citizenship-->
                            <div class="form-group row">
                                <label for="citizenship" class="col-md-4 col-form-label text-md-right">{{ __('Citizenship') }}</label>

                                <div class="col-md-6">
                                    <input id="citizenship" type="text" class="form-control @error('citizenship') is-invalid @enderror" name="citizenship" value="{{ $resident->citizenship }}" autofocus>        
                                </div>

                                @error('citizenship')
                                    <span class="invalid-feedback" role="alert"> 
                                        {{ $message }}
                                    </span>                                
                                @enderror
                            </div>

                            <!--Religion-->
                            <div class="form-group row">
                                <label for="religion" class="col-md-4 col-form-label text-md-right">{{ __('Religion') }}</label>

                                <div class="col-md-6">
                                    <input id="religion" type="text" class="form-control @error('religion') is-invalid @enderror" name="religion" value="{{ $resident->religion }}" autofocus>        
                                </div>

                                @error('religion')
                                    <span class="invalid-feedback" role="alert"> 
                                        {{ $message }}
                                    </span>                                
                                @enderror
                            </div>

                            <!--Sex-->
                            <div class="form-group row">
                                <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Sex') }}</label>

                                <div class="col-md-6">
                                    <input id="sex" type="text" class="form-control @error('sex') is-invalid @enderror" name="sex" value="{{ $resident->sex }}" autofocus>        
                                </div>

                                @error('sex')
                                    <span class="invalid-feedback" role="alert"> 
                                        {{ $message }}
                                    </span>                                
                                @enderror
                            </div>

                            <!--Date of Birth-->
                            <div class="form-group row">
                                <label for="birth_date" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                                <div class="col-md-6">
                                    <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ $resident->birth_date }}" autofocus>        
                                </div>

                                @error('birth_date')
                                    <span class="invalid-feedback" role="alert"> 
                                        {{ $message }}
                                    </span>                                
                                @enderror
                            </div>

                            <!--Birth Place-->
                            <div class="form-group row">
                                <label for="birth_place" class="col-md-4 col-form-label text-md-right">{{ __('Birth Place') }}</label>

                                <div class="col-md-6">
                                    <input id="birth_place" type="text" class="form-control @error('birth_place') is-invalid @enderror" name="birth_place" value="{{ $resident->birth_place }}" autofocus>        
                                </div>

                                @error('birth_place')
                                    <span class="invalid-feedback" role="alert"> 
                                        {{ $message }}
                                    </span>                                
                                @enderror
                            </div>

                            <!--Age-->
                            <div class="form-group row">
                                <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                                <div class="col-md-6">
                                    <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ $resident->age }}" autofocus>        
                                </div>

                                @error('age')
                                    <span class="invalid-feedback" role="alert"> 
                                        {{ $message }}
                                    </span>                                
                                @enderror
                            </div>

                            <!--Civil Status-->
                            <div class="form-group row">
                                <label for="civil_status" class="col-md-4 col-form-label text-md-right">{{ __('Civil Status') }}</label>

                                <div class="col-md-6">
                                    <input id="civil_status" type="text" class="form-control @error('civil_status') is-invalid @enderror" name="civil_status" value="{{ $resident->civil_status }}" autofocus>        
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
                                    <input id="occupation" type="text" class="form-control" name="occupation" value="{{ $resident->occupation }}" autofocus>        
                                </div>
                            </div>

                            <!--TIN No.-->
                            <div class="form-group row">
                                <label for="tin_num" class="col-md-4 col-form-label text-md-right">{{ __('TIN No.') }}</label>

                                <div class="col-md-6">
                                    <input id="tin_num" type="text" class="form-control" name="tin_num" value="{{ $resident->tin_num }}" autofocus>        
                                </div>
                            </div>

                            <!--Period of Residence-->
                            <div class="form-group row">
                                <label for="residence_period" class="col-md-4 col-form-label text-md-right">{{ __('Period of Residence') }}</label>

                                <div class="col-md-6">
                                    <input id="residence_period" type="text" class="form-control @error('residence_period') is-invalid @enderror" name="residence_period" value="{{ $resident->residence_period }}" autofocus>        
                                </div>

                                @error('residence_period')
                                    <span class="invalid-feedback" role="alert"> 
                                        {{ $message }}
                                    </span>                                
                                @enderror
                            </div>

                            <!--Contact Number-->
                            <div class="form-group row">
                                <label for="contact_num" class="col-md-4 col-form-label text-md-right">{{ __('Contact No.') }}</label>

                                <div class="col-md-6">
                                    <input id="contact_num" type="text" class="form-control @error('contact_num') is-invalid @enderror" name="contact_num" value="{{ $resident->contact_num }}" autofocus>        
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
                                    <input id="voters_id" type="text" class="form-control" name="voters_id" value="{{ $resident->voters_id }}" autofocus>        
                                </div>
                            </div>

                            <!--Precint Assignment No.-->
                            <div class="form-group row">
                                <label for="precint_num" class="col-md-4 col-form-label text-md-right">{{ __('Precint Assignment No.') }}</label>

                                <div class="col-md-6">
                                    <input id="precint_num" type="text" class="form-control" name="precint_num" value="{{ $resident->precint_num }}" autofocus>        
                                </div>
                            </div>

                            <!-- Resident Image
                            <div class="form-group row">
                                <label for="img" class="col-md-4 col-form-label text-md-right">{{ __('Upload Image') }}</label>

                                <div class="col-md-6">
                                    <input type="file" class="form-control-file" name="img" value="{{ $resident->img }}"  autocomplete="img">
                                </div>
                            </div>-->

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
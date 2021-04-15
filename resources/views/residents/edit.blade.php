@extends('layouts.app')


@section('content')
 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="btn button btn-info" href="/residents">Back</a> <br><br>
                  <div class="card">       
                    <div class="card-body">
                        <form method="POST" action=" {{ route('residents.update', $resident->id)}} ">
                            @method('PATCH')
                            @csrf

                            <div class="form-group row">
                                <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>
    
                                <div class="col-md-6">
                                    <input id="lastname" type="text" class="form-control" name="lastname" value="{{ $resident->lastname }}" required  autofocus>        
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>
    
                                <div class="col-md-6">
                                    <input id="firstname" type="text" class="form-control" name="firstname" value="{{ $resident->firstname }}" required  autofocus>        
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="middlename" class="col-md-4 col-form-label text-md-right">{{ __('Middlename') }}</label>
    
                                <div class="col-md-6">
                                    <input id="middlename" type="text" class="form-control" name="lastname" value="{{ $resident->middlename }}" required  autofocus>        
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="extname" class="col-md-4 col-form-label text-md-right">{{ __('Extname') }}</label>
    
                                <div class="col-md-6">
                                    <input id="extname" type="text" class="form-control" name="extname" value="{{ $resident->extname }}" required  autofocus>        
                                </div>
                            </div>
                            <div class="form-group row">
                            <label for="house_num" class="col-md-4 col-form-label text-md-right">{{ __('House No') }}</label>

                            <div class="col-md-6">
                                <input id="house_num" type="text" class="form-control" name="house_num" value="{{ $resident->house_num }}" required  autofocus>        
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Street') }}</label>

                            <div class="col-md-6">
                                <input id="street" type="text" class="form-control" name="street" value="{{ $resident->street }}" required  autofocus>        
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="barangay" class="col-md-4 col-form-label text-md-right">{{ __('Barangay') }}</label>

                            <div class="col-md-6">
                                <input id="barangay" type="text" class="form-control" name="barangay" value="{{ $resident->barangay }}" required  autofocus>        
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value="{{ $resident->city }}" required  autofocus>        
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="citizenship" class="col-md-4 col-form-label text-md-right">{{ __('Citizenship') }}</label>

                            <div class="col-md-6">
                                <input id="citizenship" type="text" class="form-control" name="citizenship" value="{{ $resident->citizenship }}" required  autofocus>        
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="religion" class="col-md-4 col-form-label text-md-right">{{ __('Religion') }}</label>

                            <div class="col-md-6">
                                <input id="religion" type="text" class="form-control" name="religion" value="{{ $resident->religion }}" required  autofocus>        
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Sex') }}</label>

                            <div class="col-md-6">
                                <input id="sex" type="text" class="form-control" name="sex" value="{{ $resident->sex }}" required  autofocus>        
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthdate" class="col-md-4 col-form-label text-md-right">{{ __('Birthdate') }}</label>

                            <div class="col-md-6">
                                <input id="birthdate" type="text" class="form-control" name="birthdate" value="{{ $resident->birthdate }}" required  autofocus>        
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="birth_place" class="col-md-4 col-form-label text-md-right">{{ __('Birth Place') }}</label>

                            <div class="col-md-6">
                                <input id="birth_place" type="text" class="form-control" name="birth_place" value="{{ $resident->birth_place }}" required  autofocus>        
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control" name="age" value="{{ $resident->age }}" required  autofocus>        
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="civil_status" class="col-md-4 col-form-label text-md-right">{{ __('Civil Status') }}</label>

                            <div class="col-md-6">
                                <input id="civil_status" type="text" class="form-control" name="civil_status" value="{{ $resident->civil_status }}" required  autofocus>        
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="occupation" class="col-md-4 col-form-label text-md-right">{{ __('Occupation') }}</label>

                            <div class="col-md-6">
                                <input id="occupation" type="text" class="form-control" name="occupation" value="{{ $resident->occupation }}" required  autofocus>        
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
@extends('layouts.app')
@section('title', 'Settings')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Settings</h4>
            {{-- {{ $errors }} --}}
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Settings</li>
                    {{-- <li class="breadcrumb-item active">Orders</li> --}}
                </ol>
            </div>

        </div>
    </div>
</div>

<div class="w-100">

    <div class="card p-4 rounded cShadow">

        <form action="{{ route('settings.post') }}" method="POST">
            @csrf
            @method('POST')
            
            <div class="row mt-3 mb-3">
                <div class="col-3">
                    <div class="form-group">
                        <label for=""> First Name:</label>
                        <input type="text" name="firstname" value="{{ !is_null($first_name) ? $first_name : '' }}" class="form-control">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for=""> Last Name:</label>
                        <input type="text" name="lastname" value="{{ !is_null($last_name) ? $last_name : "" }}" class="form-control">
                    </div>
                </div>

            </div>

          
            <div class="row mt-3">

                <div class="col-3">
                    <div class="form-group">
                        <label for="">New Password:</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="">Confirm Password:</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password">
                    </div>

                </div>
                @if ($errors->has('password'))
                <span class="text-danger ml-2">{{ $errors->first('confirm_password') }}</span>
                @endif

            </div>
            <div class="row mt-2">
                <div class="col-3">
                    <div class="form-group">
                        <label for="">Global Percentage:</label>
                        <input type="number" name="global_percentage" value="{{ !is_null($setting) ? $setting->global_percentage : '' }}" class="form-control">
                    </div>

                </div>
               {{--  <div class="col-3">
                    <div class="form-group">
                        <label for="">Previous Password:</label>
                        <input type="text" name="previous_password" placeholder="type your previous password" autocomplete="current-password" class="form-control">

                    </div>

                </div> --}}
            </div>
            <div class="col-3 mt-3">
                <input type="submit" class="btn btn-primary btn-sm">
            </div>
        </form>
    </div>
</div>
</div>
@endsection

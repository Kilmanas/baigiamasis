@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">

            <form class="form-control" method="post" action="{{route('admin.user-update', $user->id)}}">
                @csrf
                <input type="hidden" name="user_id" value="{{$user->id}}">
                <div class="row mb-3">
                    <label for="name"
                           class="col-md-4 col-form-label text-md-end">{{ __('Vardas Pavardė') }}</label>

                    <div class="col-md-6">
                        <input id="name" name="name" type="text" class="form-control" value="{{$user->name}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email"
                           class="col-md-4 col-form-label text-md-end">{{ __('El. paštas') }}</label>

                    <div class="col-md-6">
                        <input id="email" name="email" type="text" class="form-control" value="{{$user->email}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="company"
                           class="col-md-4 col-form-label text-md-end">{{ __('Įmonė') }}</label>

                    <div class="col-md-6">
                        <input id="company" name="company" type="text" class="form-control" value="{{$user->company->name}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="company_address"
                           class="col-md-4 col-form-label text-md-end">{{ __('Įmonės adresas') }}</label>

                    <div class="col-md-6">
                        <input id="company_address" name="company_address" type="text" class="form-control" value="{{$user->company->address}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="company_phone"
                           class="col-md-4 col-form-label text-md-end">{{ __('Įmonės telefonas') }}</label>

                    <div class="col-md-6">
                        <input id="company_phone" name="company_phone" type="text" class="form-control" value="{{$user->company->phone}}">
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <input id="submit" type="submit" class="btn btn-primary" value="Redaguoti">
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
@endsection


@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">

                <form class="form-control" method="post" action="{{route('user.store')}}">
                    @csrf
                    <div class="row mb-3">
                        <label for="name"
                               class="col-md-4 col-form-label text-md-end">{{ __('Vardas Pavardė') }}</label>

                        <div class="col-md-6">
                            <input id="name" name="name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email"
                               class="col-md-4 col-form-label text-md-end">{{ __('El. paštas') }}</label>

                        <div class="col-md-6">
                            <input id="email" name="email" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password"
                               class="col-md-4 col-form-label text-md-end">{{ __('Laikinas slaptažodis') }}</label>

                        <div class="col-md-6">
                            <input id="password" name="password" type="password" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="repeat-password"
                               class="col-md-4 col-form-label text-md-end">{{ __('Pakartoti slaptažodį') }}</label>

                        <div class="col-md-6">
                            <input id="repeat-password" name="repeat-password" type="password" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <input id="submit" type="submit" class="btn btn-primary" value="Registruoti">
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection

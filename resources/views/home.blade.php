@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h4> Sveiki, {{$user->name}},</h4>
                    <div class="card-header">{{ __('Vartotojo skydelis') }}</div>
                    <div class="card-body">
                        <a class="btn btn-outline-secondary btn-md" href="{{route('tripsheet.create')}}">
                            Pridėti kelionės lapą</a>
                        <a class="btn btn-outline-secondary btn-md" href="{{route('tripsheet.index')}}">
                            Peržiūrėti kelionės lapus</a>
                        <a class="btn btn-outline-secondary btn-md" href="{{route('report.select')}}">
                            Atsisiųsti mėnesio ataskaitą</a>
                    </div>
                    @can('manage company')
                        <div class="card-header">{{ __('Įmonės administratoriaus skydelis') }}</div>

                        <div class="card-body">
                            <a class="btn btn-outline-secondary btn-md" href="{{route('user.create')}}">
                                Pridėti vartotoją</a>
                            <a class="btn btn-outline-secondary btn-md" href="{{route('user.list')}}">
                                Peržiūrėti vartotojus</a>
                            <a class="btn btn-outline-secondary btn-md" href="{{route('company.tripsheets')}}">
                                Peržiūrėti įmonės kelionės lapus</a>
                            <a class="btn btn-outline-secondary btn-md" href="{{route('stats.index')}}">
                                Peržiūrėti mėnesio statistiką</a>
                        </div>
                    @endcan
                    @can('admin')
                        <div class="card-header">{{ __('Administratoriaus skydelis') }}</div>

                        <div class="card-body">
                            <a class="btn btn-outline-secondary btn-md" href="{{route('admin.users')}}">
                                Peržiūrėti vartotojus</a>
                        </div>
                    @endcan
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table">
                {{$period}} statistika:
                <thead>
                <tr>
                    <th scope="col">Suvartota kuro</th>
                    <th scope="col">Suvartota benzino</th>
                    <th scope="col">Suvartota dyzelino</th>
                    <th scope="col">Gauta kuro</th>
                    <th scope="col">Nuvažiuotas atstumas</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$fuel_used}}</td>
                    <td>{{$petrol}}</td>
                    <td>{{$diesel}}</td>
                    <td>{{$fuel_received}}</td>
                    <td>{{$distance}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Pavadinimas</th>
                    <th scope="col">Periodas</th>
                    <th scope="col">Automobilis</th>
                    <th scope="col">Adresas</th>
                    <th scope="col">Išvykimo laikas</th>
                    <th scope="col">Parvykimo laikas</th>
                    <th scope="col">Kuro tipas</th>
                    <th scope="col">Kuro markė</th>
                    <th scope="col">Odometro parodymai</th>
                    <th scope="col">Atstumas</th>
                    <th scope="col">Kuro norma</th>
                    <th scope="col">Suvartota kuro</th>
                    <th scope="col">Gauta kuro</th>
                    <th scope="col">Likutis išvažiuojant</th>
                    <th scope="col">Likutis grįžus</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$tripsheet->name}}</td>
                    <td>{{$tripsheet->period}} {{$tripsheet->day}}</td>
                    <td>{{$tripsheet->carMake->name}} {{$tripsheet->carModel->name}}</td>
                    <td>{{$tripsheet->destination}}</td>
                    <td>{{$tripsheet->departure_time}}</td>
                    <td>{{$tripsheet->return_time}}</td>
                    <td>{{$tripsheet->fuelType->name}}</td>
                    <td>{{$tripsheet->fuelOption->name}}</td>
                    <td>{{$tripsheet->odometer_out}} - {{$tripsheet->odometer_in}}</td>
                    <td>{{$tripsheet->distance}}</td>
                    <td>{{$tripsheet->fuel_norm}}</td>
                    <td>{{$tripsheet->fuel_used}}</td>
                    <td>{{$tripsheet->fuel_received}}</td>
                    <td>{{$tripsheet->fuel_out}}</td>
                    <td>{{$tripsheet->fuel_in}}</td>
                    {{--                        <td><a href="{{route('user.edit', $tripsheet->id)}}">Redaguoti</a>--}}
                    {{--                            <a href="{{route('user.deactivate', $tripsheet->id)}}">Ištrinti</a>--}}
                    {{--                        </td>--}}
                </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection

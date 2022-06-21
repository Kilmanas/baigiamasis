@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col"> @sortablelink('name','Pavadinimas')</th>
                    <th scope="col"> @sortablelink('user.name', 'Vairuotojas')</th>
                    <th scope="col"> @sortablelink('period','Periodas')</th>
                    <th scope="col">Automobilio markė</th>
                    <th scope="col">Automobilio modelis</th>
                    <th scope="col"> @sortablelink('fuel_used','Suvartota kuro')</th>
                </tr>
                </thead>
                @foreach($tripsheets as $tripsheet)
                    <tbody>
                    <tr>
                        <td>{{$tripsheet->name}}</td>
                        <td>{{$tripsheet->user->name}}</td>
                        <td>{{$tripsheet->period}} {{$tripsheet->day}}</td>
                        <td>{{$tripsheet->carMake->name}}</td>
                        <td>{{$tripsheet->carModel->name}}</td>
                        <td>{{$tripsheet->fuel_used}}</td>
                        <td><a href="{{route('export.tripsheet', $tripsheet->id)}}">Atsisiųsti (.xls)</a>
                            <a href="{{route('tripsheet.show', $tripsheet->id)}}">Daugiau</a>
                            <a href="{{route('tripsheet.edit', $tripsheet->id)}}">Redaguoti</a>
                            <a href="{{route('tripsheet.destroy', $tripsheet->id)}}">Ištrinti</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>
    {!! $tripsheets->links() !!}
@endsection

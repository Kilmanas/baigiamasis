@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <a href="{{ route('tripsheet.create') }}">
                <button type="button" class="btn btn-secondary">Pridėti naują</button>
            </a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col"> @sortablelink('name', 'Pavadinimas')</th>
                    <th scope="col"> @sortablelink ('period', 'Periodas')</th>
                    <th scope="col">Automobilis</th>
                    <th scope="col">Valstybinis Nr.</th>
                </tr>
                </thead>
                @foreach($tripsheets as $tripsheet)
                    <tbody>
                    <tr>
                        <td>{{$tripsheet->name}}</td>
                        <td>{{$tripsheet->period}} {{$tripsheet->day}}</td>
                        <td>{{$tripsheet->carMake->name}} {{$tripsheet->carModel->name}}</td>
                        <td>{{$tripsheet->plate_no}}</td>
                        <td><a class="btn btn-outline-secondary btn-sm" href="{{route('tripsheet.show', $tripsheet->id)}}">Daugiau</a>
                            <a class="btn btn-outline-secondary btn-sm" href="{{route('tripsheet.edit', $tripsheet->id)}}">Redaguoti</a>
                            <a class="btn btn-outline-secondary btn-sm" href="{{route('export.tripsheet', $tripsheet->id)}}">Atsisiųsti (.xls)</a>
                            <form method="POST" action="{{route('tripsheet.destroy', $tripsheet->id)}}">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button class="btn btn-outline-secondary btn-sm">Ištrinti</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>
    {!! $tripsheets->links() !!}
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Vardas</th>
                    <th scope="col">El. paštas</th>
                    <th scope="col">Veiksmas</th>
                </tr>
                </thead>
                @foreach($users as $user)
                    <tbody>
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><a href="{{route('user.edit', $user->id)}}">Redaguoti</a>
                            <a href="{{route('user.deactivate', $user->id)}}">Ištrinti</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">@sortablelink('name', 'Vardas')</th>
                    <th scope="col">@sortablelink('email', 'El. paštas')</th>
                    <th scope="col">@sortablelink ('company.name', 'Įmonė')</th>
                    <th scope="col">@sortablelink('active', 'Statusas')</th>
                    <th scope="col">Veiksmas</th>
                </tr>
                </thead>
                @foreach($users as $user)
                    <tbody>
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->company->name}}</td>
                        @if($user->active == 1)
                            <td>Aktyvus</td>
                        @else
                            <td>Nektyvus</td>
                        @endif
                        <td><a href="{{route('admin.user-edit', $user->id)}}">Redaguoti</a>
                            @if($user->active == 1)
                            <a href="{{route('admin.deactivate', $user->id)}}">Deaktyvuoti</a>
                            @else
                            <a href="{{route('admin.activate', $user->id)}}">Aktyvuoti</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>
@endsection

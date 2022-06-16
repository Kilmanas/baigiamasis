@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content">
            <div class="col-3">
                Atsisiųsti mėnesio ataskaitą
                <form method="get" action="{{route('export.report')}}">

                    <select id="period" name="period" class="form-control">
                        <option>Periodas</option>
                        {{$option = ''}}
                        @foreach($periods as $period)
                            @if(substr($period->period, 0, 7) != $option)
                                <option
                                    value="{{substr($period->period, 0, 7)}}">{{substr($period->period, 0, 7)}}</option>
                                {{$option = substr($period->period, 0, 7)}}
                            @endif
                        @endforeach
                        <input type="submit" class="btn btn-primary" value="Atsisiųsti (.xlsx)">
                    </select>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">

                <form class="form-control" method="post" action="{{route('tripsheet.update', $tripsheet->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="name"
                               class="col-md-4 col-form-label text-md-end">{{ __('Pavadinimas') }}</label>
                        <div class="col-md-6">
                            <input id="name" name="name" type="text" class="form-control" value="{{$tripsheet->name}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="period_from"
                               class="col-md-4 col-form-label text-md-end">{{ __('Periodas nuo') }}</label>

                        <div class="col-md-6">
                            <input id="period_from" name="period_from" type="date" class="form-control"
                                   value="{{$period_from}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="day"
                               class="col-md-4 col-form-label text-md-end">{{ __('Periodas iki') }}</label>

                        <div class="col-md-6">
                            <input id="period_to" name="period_to" type="date" class="form-control"
                                   value="{{$period_to}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="car_make_id"
                               class="col-md-4 col-form-label text-md-end">{{ __('Automobilio markė') }}</label>

                        <div class="col-md-6">
                            <select id="car_make_id" name="car_make_id" class="form-control">
                                <option>Markė</option>
                                @foreach($car_makes as $make)
                                    @if ($make->id == $tripsheet->car_make_id)
                                        <option selected="{{$make->id}}" value="{{$make->id}}">{{$make->name}}</option>
                                    @else
                                        <option value="{{$make->id}}">{{$make->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="car_model_id"
                               class="col-md-4 col-form-label text-md-end">{{ __('Automobilio modelis') }}</label>

                        <div class="col-md-6">
                            <select id="car_model_id" name="car_model_id" class="form-control">
                                <option>Modelis</option>
                                @foreach($car_models as $model)
                                    @if ($model->id == $tripsheet->car_model_id)
                                        <option selected="{{$model->id}}"
                                                value="{{$model->id}}">{{$model->name}}</option>
                                    @else
                                        <option value="{{$model->id}}">{{$model->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="plate_no"
                               class="col-md-4 col-form-label text-md-end">{{ __('Valstybinis numeris') }}</label>

                        <div class="col-md-6">
                            <input id="plate_no" name="plate_no" type="text" value="{{$tripsheet->plate_no}}"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="destination"
                               class="col-md-4 col-form-label text-md-end">{{ __('Adresas') }}</label>

                        <div class="col-md-6">
                            <input id="destination" name="destination" type="text" class="form-control"
                                   value="{{$tripsheet->destination}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="departure_time"
                               class="col-md-4 col-form-label text-md-end">{{ __('Išvykimo laikas') }}</label>

                        <div class="col-md-6">
                            <input id="departure_time" name="departure_time" type="time" class="form-control"
                                   value="{{$tripsheet->departure_time}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="return_time"
                               class="col-md-4 col-form-label text-md-end">{{ __('Parvykimo laikas') }}</label>

                        <div class="col-md-6">
                            <input id="return_time" name="return_time" type="time" class="form-control"
                                   value="{{$tripsheet->return_time}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="odometer_out"
                               class="col-md-4 col-form-label text-md-end">{{ __('Odometro rodmenys išvykstant') }}</label>

                        <div class="col-md-6">
                            <input id="odometer_out" name="odometer_out" type="number" class="form-control"
                                   value="{{$tripsheet->odometer_out}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="odometer_in"
                               class="col-md-4 col-form-label text-md-end">{{ __('Odometro rodmenys parvykus') }}</label>

                        <div class="col-md-6">
                            <input id="odometer_in" name="odometer_in" type="number" class="form-control"
                                   value="{{$tripsheet->odometer_in}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fuel_type"
                               class="col-md-4 col-form-label text-md-end">{{ __('Degalų tipas') }}</label>

                        <div class="col-md-6">
                            <select id="fuel_type" name="fuel_type_id" class="form-control">
                                <option>Tipas</option>
                                @foreach($fuels as $fuel)
                                    @if ($fuel->id == $tripsheet->fuel_type_id)
                                        <option selected="{{$fuel->id}}" value="{{$fuel->id}}">{{$fuel->name}}</option>
                                    @else
                                        <option value="{{$fuel->id}}">{{$fuel->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fuel_options"
                               class="col-md-4 col-form-label text-md-end">{{ __('Degalų markė') }}</label>

                        <div class="col-md-6">
                            <select id="fuel_option" name="fuel_option_id" class="form-control">
                                <option>Markė</option>
                                @foreach($fuel_options as $option)
                                    @if ($option->id == $tripsheet->fuel_option_id)
                                        <option selected="{{$option->id}}"
                                                value="{{$option->id}}">{{$option->name}}</option>
                                    @else
                                        <option value="{{$option->id}}">{{$option->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fuel_norm"
                               class="col-md-4 col-form-label text-md-end">{{ __('Degalų norma') }}</label>

                        <div class="col-md-6">
                            <input id="fuel_norm" name="fuel_norm" type="number" step="0.01" class="form-control"
                                   value="{{$tripsheet->fuel_norm}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fuel_out"
                               class="col-md-4 col-form-label text-md-end">{{ __('Degalų likutis išvažiuojant') }}</label>

                        <div class="col-md-6">
                            <input id="fuel_out" name="fuel_out" type="number" step="0.01" class="form-control"
                                   value="{{$tripsheet->fuel_out}}">
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="row mb-3">
                            <label for="fuel_received"
                                   class="col-md-4 col-form-label text-md-end">{{ __('Gauta degalų') }}</label>

                            <div class="col-md-6">
                                <input id="fuel_received" name="fuel_received" type="number" step="0.01"
                                       class="form-control" value="{{$tripsheet->fuel_received}}">
                            </div>
                        </div>
                        <div class="col-md-6 offset-md-4">
                            <input id="submit" type="submit" class="btn btn-primary" value="Pateikti">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
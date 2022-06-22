<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoretripsheetsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:5',
            'car_make_id' => 'required|integer',
            'car_model_id' => 'required|integer',
            'plate_no' => 'required|max:6',
            'destination' => 'required|string|max:255',
            'odometer_out' => 'required|integer',
            'odometer_in' => 'required|integer',
            'fuel_type_id' => 'required|integer',
            'fuel_option_id' => 'required|integer',
            'fuel_norm' => 'required|max:6',
            'fuel_out' => 'required|max:6',
            'fuel_received' => 'required|max:6',
        ];
    }
}

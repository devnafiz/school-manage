<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
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
            'vehicle_no'=>'required',
            'vehicle_model'=>'required',
            'manufacture_year'=>'required', 
            'driver_name'=>'required',
            'driver_licence'=>'required|max:300',
            'driver_contact'=>'required',
            'note'=>'required',
            
        ];
    }
}

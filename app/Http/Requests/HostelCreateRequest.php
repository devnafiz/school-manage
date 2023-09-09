<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HostelCreateRequest extends FormRequest
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
            'hostel_name'=>'required',
            'type'=>'required',
            'intake'=>'required', 
            'description'=>'nullable',
            'address'=>'required|max:300',
            
            
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class CreateHomeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
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
            'country'  =>  'required',
            'area'  =>  'required',
            'infec'  =>  'required',
            'heal'  =>  'required',
            'curing'  =>  'required',
            'infection'  =>  'required',
            'death'  =>  'required',
            'date'  =>  'required',
        ];
    }
}
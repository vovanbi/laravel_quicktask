<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestTask extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' =>'required|string|unique:tasks,name,'.$this->id,
        ];
    }
    public function messages()
    {
        return [
            'name.required'=> trans('auth.required'),
            'name.unique'=> trans('auth.unique'),
        ];
    }
}

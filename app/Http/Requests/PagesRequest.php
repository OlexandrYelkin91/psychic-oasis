<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagesRequest extends FormRequest
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
            'text_input' => 'required',
            'way_input' => 'required'
        ];
    }
    public function messages () {
       return [
            'text_input.required' => 'Текст посилання не може бути пустим!',
            'way_input.required'  => 'Поточна назва не може бути пустою!'
       ];
    }
}

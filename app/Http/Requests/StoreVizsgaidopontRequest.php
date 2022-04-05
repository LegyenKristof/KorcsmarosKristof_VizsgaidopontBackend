<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVizsgaidopontRequest extends FormRequest
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
            'targy' => 'required|string',
            'tipus' => 'required|string|in:erettsegi,szakmai',
            'kezdes' => 'required|date_format:Y-m-d H:i:s'
        ];
    }
}

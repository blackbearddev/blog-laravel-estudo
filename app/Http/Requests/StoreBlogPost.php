<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
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
             'title' => 'required|max:2',
             'body'=> 'required|max:3'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Titulo é Requirido porra',
            'body.required' => 'O corpo tabem caraio'
        ];
    }

}

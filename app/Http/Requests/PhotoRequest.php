<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoRequest extends FormRequest
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
            'image'         => 'required|image',
            'title'         => 'required|between:4,15',
            'description'   => 'required|between:5,30',
            'author'        => 'required|between:4,15',
        ];
    }

    public function messages()
    {
        return [
            'image.required'            => 'A imagem é obrigatoria',
            'image.image'               => 'O arquivo selecionado não é uma imagem.',
            'title.required'            => 'O titulo é obrigatorio',
            'title.between'             => 'O titulo deve conter entre :min e :max',
            'description.required'      => 'O descrição é obrigatorio',
            'description.between'       => 'O descrição deve conter entre :min e :max',
            'author.required'           => 'O autor é obrigatorio',
            'author.between'            => 'O autor deve conter entre :min e :max',
        ];
    }
}

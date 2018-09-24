<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|between:8,15',
            'photo_profile' => 'required|image'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome é obrigatorio.',
            'email.required' => 'O e-mail é obrigatorio.',
            'email.unique' => 'O e-mail informado já esta cadastrado.',
            'password.required' => 'A senha é obrigatoria.',
            'password.between' => 'A senha deve conter entre :min e :max caracteries',
            'photo_profile.required' => 'A foto é obrigatoria',
            'photo_profile.image' => 'O arquivo enviado não é uma imagem',
        ];
    }
}

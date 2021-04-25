<?php

namespace App\Http\Requests;

use App\Rules\RightCpf;
use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
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
            'nome'  =>  ['required','string'],
            'email' =>  ['present','email'],
            'cpf'   =>  ["required","unique:alunos,cpf,{$this->id}","digits:11","numeric",new RightCpf],
        ];
    }
}

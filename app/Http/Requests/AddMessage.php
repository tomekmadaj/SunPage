<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddMessage extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => [
                'required',
                'max:50',
            ],
            'last_name' => [
                'required',
                'max:50'
            ],
            'email' => [
                'required',
                'max:50'
            ],
            'phone' => [
                'numeric',
                'digits_between:9,13',
                'nullable'
            ],
            'message' => [
                'required'
            ]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Imię jest wymagane',
            'name.max' => 'Maksymalna ilość znaków to :max',
            'last_name.required' => 'Nazwisko jest wymagane',
            'last_name.max' => 'Maksymalna ilość znaków to :max',
            'email.required' => 'Email jest wymagany',
            'email.max' => 'Maksymalna ilość znaków to :max',
            'phone.numeric' => 'Numer telefonu musi być liczbą',
            'phone.digits_between' => 'Minimalna ilość znaków to :min, a makymalna to: :max',
            'message.required' => 'Wiadomość jest wymagana'
        ];
    }
}

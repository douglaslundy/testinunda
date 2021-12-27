<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ToWodValidation;

class ClientPostRequest extends FormRequest
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
            'firstName'=> 'required|min:5|max:160',
	        'lastName' => ['required', 'min:5', 'max:160'],
            'coments' => [new ToWodValidation],
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;
use App\Traits\Response;

class SignInRequest extends FormRequest
{
    use Response;
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
            'username' => 'required|string',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => trans('messages.common.param_missing'). ' :attribute '
        ];
    }
    
    protected function failedValidation(Validator $validator) 
    {

        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException($this->errorValidateRequest($errors));
    }
}

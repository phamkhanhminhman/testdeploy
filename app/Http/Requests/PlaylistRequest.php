<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;
use App\Traits\Response;

class PlaylistRequest extends FormRequest
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
            'playlist_id' => 'required|string',
            'title' => 'required|string',
            'link' => 'required|string',
            'total_video' => 'required|integer',
            'year' => 'required|integer',
            'account_id' => 'required|string',
            'creation_time' => 'required|date'

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
            'required' => ':attribute is required'
        ];
    }
    
    protected function failedValidation(Validator $validator) 
    {

        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException($this->errorValidateRequest($errors));
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * The username request.
 */
class UsernameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool Returns true if authorization is granted and false if not.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array Returns the request validation rules.
     */
    public function rules()
    {
        return config('autopulse.username_validation_logic');
    }
}

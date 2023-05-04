<?php

namespace App\Http\Requests\Admin\Pages\Users;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditUserRequest extends FormRequest
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
        $userId = request()->user_id;
        $validationValue = ['value' => ['required', 'string', 'max:255']];
        if (request()->field_name == 'name') {
            $validationValue = ['value' => ['required', 'string', 'max:255']];
        } elseif (request()->field_name == 'email') {
            $validationValue = ['value' => ['required', 'string', 'max:255', Rule::unique('users', 'email')->ignore($userId)]];
        } elseif (request()->field_name == 'is_admin'){
            $validationValue = ['value' => ['boolean']];
        }

        $validation = [
            'field_name' => ['required', 'string'],
            'user_id' =>  ['required', 'exists:users,id'],
        ];

        return array_merge($validation, $validationValue);
    }
}

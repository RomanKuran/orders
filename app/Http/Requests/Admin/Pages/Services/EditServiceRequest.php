<?php

namespace App\Http\Requests\Admin\Pages\Services;

use Illuminate\Foundation\Http\FormRequest;

class EditServiceRequest extends FormRequest
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
        $validationValue = ['value' => ['required', 'string', 'max:255']];
        if (request()->field_name == 'name') {
            $validationValue = ['value' => ['required', 'string', 'max:255']];
        } elseif (request()->field_name == 'price') {
            $validationValue = ['value' => ['required', 'numeric']];
        }

        $validation = [
            'field_name' => ['required', 'string'],
            'service_id' =>  ['required', 'exists:services,id'],
        ];

        return array_merge($validation, $validationValue);
    }
}

<?php

namespace App\Http\Requests\Admin\Pages\Orders;

use App\Models\Order;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditOrderRequest extends FormRequest
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
        $statuses = Order::$statuses;
        $validationValue = ['value' => ['required', 'string', 'max:255']];
        if (request()->field_name == 'status') {
            $validationValue = ['value' => ['required', Rule::in($statuses)]];
        }

        $validation = [
            'field_name' => ['required', 'string'],
            'order_id' =>  ['required', 'exists:orders,id'],
        ];

        return array_merge($validation, $validationValue);
    }
}

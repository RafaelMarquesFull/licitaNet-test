<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules():array
    {
        $rules = [
            'name' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'description' => 'string|max:10000', 
            'code_brand' => 'required|numeric',
            'code_category' => 'required|numeric',
        ];
     

        if ($this->request->has('code_city')) {
            $rules += ['code_city' => 'exists:cities,code_city'];
        }
        if ($this->request->has('user_id')) {
            $rules += ['user_id' => 'exists:users,id'];
        }
        if ($this->request->has('code_brand')) {
            $rules += ['code_brand' => 'exists:brands,code_brand'];
        }
        if ($this->request->has('code_category')) {
            $rules += ['code_category' => 'exists:categories,code_category'];
        }

        return $rules;
    }

    /**
     * Determine if the request is expected to be in JSON format.
     *
     * @return bool
     */
    public function expectsJson(): bool
    {
        return false;
    }
}

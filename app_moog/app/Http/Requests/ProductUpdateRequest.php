<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
    public function rules(): array
    {
        $rules =[
            'name' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'slug' => 'required|string|max:500', 
            'description' => 'string|max:10000', 
            'code_brand' => 'required|numeric',
            'code_category' => 'required|numeric',
            'images' => 'string',
        ];

        if ($this->get('code_city')) {
            $rules += ['code_city' => 'exists:cities,code_city'];
        }
        if ($this->get('user_id')) {
            $rules += ['user_id' => 'exists:users,id'];
        }
        if ($this->get('code_brand')) {
            $rules += ['code_brand' => 'exists:brands,code_brand'];
        }
        if ($this->get('code_category')) {
            $rules += ['code_category' => 'exists:categories,code_category'];
        }
        return $rules;
    }
}

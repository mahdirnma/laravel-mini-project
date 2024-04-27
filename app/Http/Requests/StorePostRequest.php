<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
        return [
            "title"=>"required|min:3",
            "body"=>"required",
            "category_id"=>"required|integer"
        ];
    }
    public function messages(): array
    {
        return [
            "title.required"=>"title is not valid",
            "title.min"=>"minimom character is 3",
            "body.required"=>"body is not valid"
        ];
    }

}

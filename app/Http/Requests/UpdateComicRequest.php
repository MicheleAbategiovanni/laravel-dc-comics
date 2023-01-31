<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "required|min:10|max:255",
            "description" => "required|string",
            "price" => "required|float",
            "thumb" => "required|url|string",
            "series" => "required|string",
            "sale_date" => "required|date|string",
            "type" => "required|string",
        ];
    }
}

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
        return true;
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
            "price" => "required|decimal:2",
            "thumb" => "required|string|url",
            "series" => "required|string",
            "sale_date" => "required|date|string",
            "type" => "required|string",
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "Il titolo è obbligatorio",
            "title.min" =>  "Il titolo deve avere almeno :min caratteri",
            "title.max" =>  "Il titolo deve avere massimo :max caratteri",
            "content.required" => "Ti pare che posso salvare un post senza contenuto?",
        ];
    }
}

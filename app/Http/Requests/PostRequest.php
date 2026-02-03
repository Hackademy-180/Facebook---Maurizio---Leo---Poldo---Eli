<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            "title"=>"required|max:20",
            "description"=>"required|max:100",
            "img"=>"required|image"
        ];
    }
    public function messages():array
    {
        return[
            "title.required"=>"questo campo è obbligatorio",
            "title.max"=>"massimo 10 caratteri per il titolo",
            "description.required"=>"questo campo è obbligatorio",
            "description.max"=>"massimo 100 caratteri per la descrizione del post"
        ];
    }
}

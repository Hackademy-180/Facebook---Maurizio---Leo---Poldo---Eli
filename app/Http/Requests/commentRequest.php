<?php

namespace App\Http\Requests;

use App\Http\Requests\commentRequest;
use Illuminate\Foundation\Http\FormRequest;

class commentRequest extends FormRequest
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
           
            "description"=>"required|max:100",
            
        ];
    }
    public function message():array
    {
        return[
           
            "description"=>"massimo 100 caratteri per il commento"
        ];
    }
}

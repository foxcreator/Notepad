<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function messeges()
    {
        return [
          'title:min' => 'Title should be more 3 symbols',
          'title:max' => 'Title should be max 15 symbols',
          'description' => 'Desctiption should be more 10 symbols'
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:3', 'max:15'],
            'description' => ['required', 'string', 'min: 10', 'max:255'],
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KomplainRequest extends FormRequest
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
            'tgl_masuk' => ['required'],
            'jam_masuk' => ['required'],
            'unit' => ['required'],
            'jenis' => ['required'],
            'isi' => ['required']
           
            ];
    }

    public function messages()
    {
        return [
            'required' => 'isian :attribute harus di isi'
        ];
    }
}

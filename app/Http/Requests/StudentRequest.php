<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'mobile' => 'required|unique:students,mobile',
            'address' => 'required',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TutorStoreRequest extends FormRequest
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
            'school_id'=>'required|exists:grades,school_id',
            'grade_name'=>'required|exists:grades,name',
            'names'=>'required',
            'last_names'=>'required',
            'code'=>'required|numeric|unique:people',
            'email'=>'required|email|unique:people',
            'phone'=>'required|numeric|unique:people',
        ];
    }
}

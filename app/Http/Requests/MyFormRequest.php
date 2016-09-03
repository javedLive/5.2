<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MyFormRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
            'course_code' => 'required|unique:posts|max:255',
        'course_title' => 'required',
        'course_credit' => 'required | min:1'

        ];
    }
}

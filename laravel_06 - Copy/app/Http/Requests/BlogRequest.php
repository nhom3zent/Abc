<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:6',
            'description' => 'required',
        ];
    }
    public function messages(){
        return[
            'title.min' =>'Tiêu đề ít nhất phải có 6 ký tự.',
            'title.required' =>'Tiêu đề không được bỏ trống.',
            'description.required' =>'Tóm tắt không được bỏ trống.',
        ];
    }
}

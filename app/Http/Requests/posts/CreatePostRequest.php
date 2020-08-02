<?php

namespace App\Http\Requests\posts;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'title'=>'required|unique:p_o_s_t_s',
            'description'=> 'required',
            'image'=>'required|image',
            'content' =>'required'
        ];
    }
}

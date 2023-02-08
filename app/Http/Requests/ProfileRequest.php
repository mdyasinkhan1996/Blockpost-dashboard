<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name'=> 'required | min:5',
            'designation'=> 'required | min:5',
            'phone'=> 'required | min:8 | max:15',
            'mail'=> 'required | min:5 | max:25',
            'facebook'=> 'required | min:5',
            'twitter'=> 'required | min:5',
            'linkedin'=> 'required | min:5',
            'address'=> 'required | min:5',
            'aboutMyself'=> 'required | min:50 | max:200',
            'aboutSite'=> 'required | min:50 | max:200',
            'image'=> 'required | mimes:jpeg,jpg,png,gif',
        ];
    }
}

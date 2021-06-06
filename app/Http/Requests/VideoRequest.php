<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
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
        $rules = [
            'name' => 'required',
            
            'status' => 'required|in:1,2'

        ];

        if($this->status==2){
            $rules = array_merge($rules,[
             'desc' => 'required',
             'url' => 'required',
            ]);
            
        }

        return $rules;
    }
}

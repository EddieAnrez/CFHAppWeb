<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IncentiveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->user_id==auth()->user()->id){
            return true;

        }else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $incentive = $this->route()->parameter('incentive');
        $rules = [
            'name'=>'required',
            'slug'=>'required|unique:incentives',
            'desc'=>'required',
            'link'=>'required',
            'user_id'=>'required',
            'file'=>'image'
        ];

        if($incentive){
            $rules['slug'] = 'required|unique:incentives,slug,'.$incentive->id;
        }

        
        return $rules;
    
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LocationRequest extends FormRequest
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
        $location = $this->route()->parameter('location');

        $rules = [ 
            'name' => 'required',
            'slug' => 'required|unique:locations',
            'status' => 'required|in:1,2',
            'file' => 'image'

        ];

        if ($location) {
            $rules['slug'] = 'required|unique:locations,slug,' . $location->id;
        }

        if ($this->status == 2) {
            $rules = array_merge($rules, [
                'adress' => 'required',
                'body' => 'required',
                'features' => 'required',
                'contact' => 'required',
                'latlocation' => 'required',
                'lonlocation' => 'required',
                'category_id' => 'required',
                'area_id' => 'required'
            ]);
        }

        return $rules;
    }
}

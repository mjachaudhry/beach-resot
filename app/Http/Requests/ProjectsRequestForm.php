<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectsRequestForm extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required|max:120',
            'type' => 'required',
            'service' => 'required',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'The Project Name Is Required!',
            'name.max' => 'The Project Name Can Maximum 120 Charecters!',
            'type.required' => 'The Project Type Is required!',
            'service.required' => 'Please Select Atleast One Service',
        ];
    }

}

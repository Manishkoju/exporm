<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class CompanyStoreRequest extends FormRequest
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
            //
            'name' => [
                'required',
                 Rule::unique('companies', 'name'),
            ],
            'address1' => [
                'required'
            ],
            'address2' => [
                'required'
            ],
            'telephone' => [
                'required'
            ],
              'status' => [
                'nullable'
            ],
        ];
    }
}

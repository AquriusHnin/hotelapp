<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RoomTypesRequest extends Request
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
                'name' => 'required',
                'features'=>'required',
                'bed_no'=>'required|numeric',
                'count'=>'required|numeric',
                'price'=>'required|regex:/^\d*(\.\d{2})?$/',
                'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                
        ];
    }
}

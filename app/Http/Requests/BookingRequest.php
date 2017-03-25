<?php 
namespace App\Http\Requests;

use App\Http\Requests\Request;

/**
* 
*/
class BookingRequest extends Request
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
	
    public function rules()
    {
        return [
            'customer_name' => 'required',
            'email' => 'required|unique:users',
            'roomtype_id' => 'required'
        ];
    }

    public function messages(){
        return[
        "email.unique"=>"Email has been taken by someone!Please Type Something Else"
        ];
    }



}
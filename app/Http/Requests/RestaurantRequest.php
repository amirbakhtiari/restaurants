<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RestaurantRequest extends Request
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
            'name'          => 'required',
            'restaurantEnName' => 'required',
//            'family'        => 'required',
//            'mobile'        => 'required',
            'address'       => 'required',
            //'nationalCode'  => 'required',
            'landlinePhone' => 'required',
            'restaurantName'=> 'required',
            'security_code' => 'required',
            'username'      => 'required',
            'password'      => 'required',
            'rePassword'    => 'required',
        ];
    }
}

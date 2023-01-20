<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ApartRequest extends FormRequest
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
            'owner_name' => 'required',
            'owner_email' => 'required|email|',
            'owner_phone' => 'required',
            'owner_address' => 'required',
            'owner_country' => 'required',
            'address_apart' => 'required',
            'number_home' => 'required',
            'number_flat' => 'required',
            'price_apart' => 'required',
            'total_area' => 'required',
            'living_space' => 'required',
            'room_apart' => 'required',
            'type_of_home' => 'required',
            'floor_apart' => 'required',
            'image' => 'required'
        ];
    }
    // public function messages(){
    //     return[
    //         'name.required'=>'Поле имя является обязательным',
    //         'email.email'=>'Поле email является обязательным',
    //         'subject.required'=>'Поле тема является обязательным',
    //         'message.required'=>'Поле сообщение является обязательным'
    //     ];
    // }
}
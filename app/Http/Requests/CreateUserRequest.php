<?php namespace AH\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Request;

class CreateUserRequest extends FormRequest
    {

    public function authorize()
        {

        return TRUE;

        }

    // ------------------------------------------------------------

    public function rules( Request $request )
        {

        $request->session()->flash( 'message', 'error|' . trans( 'webpage-text.invalid-form' ) );

        return
            [

            'username'      =>      'required',
            'email'         =>      'required|email',
            'password'      =>      'required|confirmed'

            ];

        }

    }

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Gate::allows('users_create');
    }

    public function rules(): array
    {
        return [
            'name'=>'required|string',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|confirmed'
        ];
    }
}

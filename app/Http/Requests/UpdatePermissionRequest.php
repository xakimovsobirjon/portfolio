<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdatePermissionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    public function authorize(): bool
    {
        return Gate::allows('permissions_edit');
    }

    public function rules(): array
    {
        return [
            'name' => 'string|required',
        ];
    }
}



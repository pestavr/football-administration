<?php

namespace App\Http\Requests\Backend\Access\User;

use App\Http\Requests\Request;
use Illuminate\Validation\Rule;

/**
 * Class StoreUserRequest.
 */
class StoreUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->hasPermission('manage-users');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name'     => 'required|max:191',
            'last_name'  => 'required|max:191',
            'mobile'    => ['required', 'max:12', Rule::unique('users')],
            'email'    => ['required', 'email', 'max:191', Rule::unique('users')],
            'password' => 'required|min:6|confirmed',
        ];
    }
}

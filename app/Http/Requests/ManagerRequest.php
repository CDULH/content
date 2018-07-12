<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManagerRequest extends FormRequest
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
            'username'	=> 'required|alpha_dash',
            'nickname'	=> 'required|alpha_dash',
            'phone'	=> 'required|digits:11',
            'password'	=> 'alpha_dash|confirmed',
        ];
    }
	
	public function messages ()
	{
		return [
			'username.required'	=> '账号：必须传入',
			'username.alpha_dash'	=> '账号：验证字段值是否仅包含字母、数字、破折号（ - ）以及下划线（ _ ）',
			'nickname.required'	=> '昵称：必须传入',
			'nickname.alpha_dash'	=> '昵称：验证字段值是否仅包含字母、数字、破折号（ - ）以及下划线（ _ ）',
			'phone.required'	=> '昵称：必须传入',
			'phone.digits'	=> '昵称：必须为11位手机号',
			'password.alpha_dash'	=> '密码：验证字段值是否仅包含字母、数字、破折号（ - ）以及下划线（ _ ）',
			'password.confirmed'	=> '密码：确认密码不一致',
		];
	}
	
	
}

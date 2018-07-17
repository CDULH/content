<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize ()
	{
		return true;
	}
	
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules ()
	{
		return [
			'title' => 'required|alpha',
			'path' => 'required|alpha',
			'sort' => 'required|digits_between:1,5',
			'channel' => 'required|digits_between:1,2',
		];
	}
}

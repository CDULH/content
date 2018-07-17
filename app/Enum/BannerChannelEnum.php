<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/11
 * Time: 10:38
 */

namespace App\Enum;


class BannerChannelEnum
{
	const INDEX = 1;
	
	public static function getBannerChannelArr ()
	{
		return [
			self::INDEX => '首页',
		];
	}
}
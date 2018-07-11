<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/11
 * Time: 10:38
 */

namespace App\Enum;


class ContentStatusEnum
{
	const OTHER     = 1;
	const ORDINARY  = 2;
	const RECOMMEND = 3;
	
	public static function getContentStatusArr ()
	{
		return [ [ 'id' => self::OTHER, 'status' => '其他' ], [ 'id' => self::ORDINARY, 'status' => '普通' ], [ 'id' => self::RECOMMEND, 'status' => '推荐' ], ];
	}
}
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/11
 * Time: 10:38
 */

namespace App\Enum;


class NavEnum
{
	public static function getNavArr ()
	{
		return [
			/*'010000'=>['项目', 'Index', true, [
				'010100'  => ['项目列表', 'Index/index', true, [
						'010101'  => ['项目列表', 'Index/index', true],
					],
				],
			], 'si si-badge'],*/
			
			
			'020000' => [
				'内容管理', 'Content', true, [
					'020100' => [
						'文章列表', 'admin/content', true, [
							'020101' => [ '文章列表', 'admin/content', true ],
							'020102' => [ '编辑页面', 'admin/content/modify', true ],
							'020103' => [ '编辑提交', 'admin/content/modifyPost', true ],
							'020104' => [ '删除', 'admin/content/remove', true ],
						]
					],
				], 'si si-grid'
			],
			
			/*'030000'=>['商品管理', 'machine', true, [
				'030100'  => ['物理矿机', 'Miner/index', true, [
					'030101'  => ['物理矿机列表', 'Miner/index', true],
					'030102'  => ['物理矿机添加', 'Miner/add', true],
					'030202'  => ['物理矿机删除', 'Miner/add', true],
				]],
				
				'030200'  => ['矿机类型', 'GoodsCategory/index', true, [
					'030201'  => ['矿机类型', 'GoodsCategory/index', true],
					'030202'  => ['类型编辑', 'GoodsCategory/modify', true],
					'030203'  => ['类型删除', 'GoodsCategory/remove', true],
				]],
				
				'030300'  => ['共享矿机', 'Machine/index', true, [
					'030301'  => ['共享矿机列表', 'Machine/index', true],
					'030302'  => ['共享矿机添加', 'Machine/add', true],
					'030303'  => ['共享矿机删除', 'Machine/remove', true],
					'030304'  => ['矿机库存', 'Machine/stock', true],
					'030305'  => ['客服赠送矿机算力', 'Machine/help_buy', true],
				]],
			
			], 'si si-basket'],*/
			
			/*'040000'=>['资金管理', 'Orders', true, [
				'040100'  => ['订单列表', 'Orders/index', true, [
					'040101'  => ['订单列表', 'Orders/index', true],
					'040102'  => ['订单详情', 'Orders/order_items', true],
					'040103'  => ['订单导出', 'Orders/download', true],
					'040104'  => ['支付完成', 'Orders/orderPayed', true],
				]],
				
				'040200'  => ['近七天到期', 'Orders/nearly_expire', true, [
					'040201'  => ['近七天到期', 'Orders/nearly_expire', true],
					'040202'  => ['近到期导出', 'Orders/nearly_download', true],
				]],
				
				'050300'  => ['提币列表', 'Transactions/index', true, [
					'050301'  => ['提币列表', 'Transactions/index', true],
				]],
				
				'040400'  => ['优惠券', 'Coupon/index', true, [
					'040401'  => ['优惠券列表', 'Coupon/index', true],
					'040402'  => ['编辑优惠券', 'Coupon/modify', true],
					'040403'  => ['删除优惠券', 'Coupon/remove', true],
				]],
				
				'040500'  => ['近十日挖矿收益', 'Orders/ten_day_profit', true, [
					'040501'  => ['近十日挖矿收益', 'Orders/ten_day_profit', true],
					'040502'  => ['录入昨日挖矿收益', 'Orders/add_yesterday_profit', true],
				]],
				
				'040600'  => ['退款列表', 'Orders/return_order', true, [
					'040601'  => ['退款列表', 'Orders/return_order', true],
					'040602'  => ['退款列表导出', 'Orders/return_order_download', true],
					'040603'  => ['允许退款', 'Orders/returnApproved', true],
					'040604'  => ['退款完成', 'Orders/returnComplete', true],
					'040605'  => ['驳回退款', 'Orders/refuseReturn', true],
				]],
			
			
			], 'fa fa-bitcoin'],*/
			
			'050000' => [
				'权限管理', 'Manager', true, [
					'050100' => [
						'管理员列表', 'admin/manager', true, [
							'050101' => [ '管理员列表', 'admin/manager', true ],
							'050102' => [ '管理员添加', 'admin/manager/add', false ],
							'050103' => [ '管理员修改', 'admin/manager/modify', false ],
							'050104' => [ '管理员是否启用', 'admin/manager/setEnable', false ],
							'050105' => [ '管理员删除', 'admin/manager/remove', false ],
						]
					],
					
					'050200' => [
						'管理员角色列表', 'admin/managerRole', true, [
							'050201' => [ '管理员角色列表', 'admin/managerRole', true ],
							'050202' => [ '管理员角色编辑页面', 'admin/managerRole/modify', false ],
							'050203' => [ '管理员角色编辑提交', 'admin/managerRole/modifyPost', false ],
							'050204' => [ '管理员角色权限修改', 'admin/managerRole/permission', false ],
							'050205' => [ '管理员角色删除', 'admin/managerRole/remove', false ],
						]
					],
				
				], 'si si-user'
			],
			
			/*'060000' => ['客服咨询', 'Consultation', true, [
				'060100' => ['咨询列表', 'Consultation/index', true, [
					'060101' => ['咨询列表', 'Consultation/index', true],
				]],
			
			], 'fa fa-fax'],*/
			
			'070000' => [
				'系统设置', 'Config', true, [
					'070100' => [
						'基础设置', 'admin/config', true, [
							'070101' => [ '基础设置', 'admin/config', true ],
						]
					],
					
					'070200' => [
						'BANNER设置', 'admin/banner', true, [
							'070201' => [ 'banner列表', 'admin/banner', true ],
						]
					],
				
				], 'fa fa-cogs'
			],
			
			/*'080000' => ['热门资讯', 'Notice', true, [
				'080100' => ['资讯列表', 'Notice/index', true, [
					'080101' => ['资讯列表', 'Notice/index', true],
					'080102' => ['资讯编辑', 'Notice/modify', true],
					'080103' => ['资讯删除', 'Notice/remove', true],
				]],
			
			], 'fa fa-globe'],*/
		];
	}
}
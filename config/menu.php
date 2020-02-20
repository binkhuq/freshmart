
<?php 
return [
	[
		'name' => 'Quản lý danh mục',
		'icon' => 'fa-th-list',
		'route' => 'category.index',
		'items' => [
			[
				'name' => 'Danh sách',
				'icon' => 'fa-bars',
				'route' => 'category.index'
			],
			[
				'name' => 'Thêm mới',
				'icon' => 'fa-plus-circle',
				'route' => 'category.create'
			]
		]
	],[
		'name' => 'Quản lý sản phẩm',
		'icon' => 'fa-product-hunt',
		'route' => 'product.index',
		'items' => [
			[
				'name' => 'Danh sách',
				'icon' => 'fa-bars',
				'route' => 'product.index'
			],
			[
				'name' => 'Thêm mới',
				'icon' => 'fa-plus-circle',
				'route' => 'product.create'
			]
		]
	],[
		'name' => 'Quản lý tài khoản',
		'icon' => 'fa-user',
		'route' => 'user.index',
		'items' => [
			[
				'name' => 'Danh sách',
				'icon' => 'fa-bars',
				'route' => 'user.index'
			],
			[
				'name' => 'Thêm mới',
				'icon' => 'fa-plus-circle',
				'route' => 'user.create'
			]
		]
	],
	[
		'name' => 'Quản lý Banner',
		'icon' => 'fa-image',
		'route' => 'banner.index',
		'items' => [
			[
				'name' => 'Danh sách',
				'icon' => 'fa-bars',
				'route' => 'banner.index'
			],
			[
				'name' => 'Thêm mới',
				'icon' => 'fa-plus-circle',
				'route' => 'banner.create'
			]
		]
	],
	
	[
		'name' => 'Quản lý chi tiết đơn hàng ',
		'icon' => 'fa-shopping-basket',
		'route' => 'order_detail.index',
		'items' => [
			[
				'name' => 'Danh sách',
				'icon' => 'fa-bars',
				'route' => 'order_detail.index'
			]
		]
	],
	[
		'name' => 'Quản lý góp ý ',
		'icon' => 'fa fa-comment',
		'route' => 'comment.index',
		'items' => [
			[
				'name' => 'Danh sách',
				'icon' => 'fa-bars',
				'route' => 'comment.index'
			]
		]
	],

	[
		'name' => 'File Manager',
		'icon' => 'fa-image',
		'route' => 'admin.file'
	]
];
?>
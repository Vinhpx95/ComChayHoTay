<?php namespace Comchayhotay\Shop;

use Backend;
use System\Classes\PluginBase;

/**
 * Shop Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Shop',
            'description' => 'No description provided yet...',
            'author'      => 'comchayhotay',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Comchayhotay\Shop\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'comchayhotay.shop.some_permission' => [
                'tab' => 'Shop',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'shop' => [
                'label'       => 'Cửa hàng',
                'url'         => Backend::url('comchayhotay/shop/orders'),
                'icon'        => 'icon-shopping-basket',
                'permissions' => ['comchayhotay.shop.*'],
                'order'       => 500,
                'sideMenu' => [
                    'orders' => [
                        'label'       => 'Hóa đơn',
                        'icon'        => 'icon-file-text-o',
                        'url'         => Backend::url('comchayhotay/shop/orders'),
                        'permissions' => ['comchayhotay.shop.*'],
                    ],
                    'events' => [
                        'label'       => 'Sự kiện',
                        'icon'        => 'icon-gift',
                        'url'         => Backend::url('comchayhotay/shop/events'),
                        'permissions' => ['comchayhotay.shop.*'],
                    ],
                    'banners' => [
                        'label'       => 'Banner',
                        'icon'        => 'icon-map-o',
                        'url'         => Backend::url('comchayhotay/shop/banners'),
                        'permissions' => ['comchayhotay.shop.*'],
                    ],
                    'products' => [
                        'label'       => 'Sản phẩm',
                        'icon'        => 'icon-key',
                        'url'         => Backend::url('comchayhotay/shop/products'),
                        'permissions' => ['comchayhotay.shop.*'],
                    ],
                    'categories' => [
                        'label'       => 'Danh mục',
                        'icon'        => 'icon-list',
                        'url'         => Backend::url('comchayhotay/shop/categories'),
                        'permissions' => ['comchayhotay.shop.*'],
                    ],
                    'customer_infos' => [
                        'label'       => 'Thông tin khách hàng',
                        'icon'        => 'icon-copy',
                        'url'         => Backend::url('comchayhotay/shop/customer_infos'),
                        'permissions' => ['comchayhotay.shop.*'],
                    ],
                    'restaurant_info' => [
                        'label'       => 'Thông tin nhà hàng',
                        'icon'        => 'icon-info-circle',
                        'url'         => Backend::url('comchayhotay/shop/restaurant_info'),
                        'permissions' => ['comchayhotay.shop.*'],
                    ],
                ]
            ],
        ];
    }
}

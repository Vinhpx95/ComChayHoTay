<?php namespace Comchayhotay\Shop\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Customer Infos Back-end Controller
 */
class CustomerInfos extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Comchayhotay.Shop', 'shop', 'customerinfos');
    }
}

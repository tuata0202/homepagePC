<?php
/**
 * Created by PhpStorm.
 * User: sf_trungtt
 * Date: 6/20/18
 * Time: 9:53 AM
 */

namespace App\Consts;

class Acl
{

    const HOME_CONTROLLER    = 'homes';
    const USER_CONTROLLER    = 'users';
    const ACCOUNT_CONTROLLER    = 'accounts';
    const SERVERS_CONTROLLER    = 'servers';
    const PACKAGES_CONTROLLER    = 'packages';

    const HOMES    = 'Thống kê chung';
    const USERS    = 'TK hệ thống';
    const ACCOUNTS    = 'TK Người dùng';
    const SERVERS    = 'Thông tin Server';
    const PACKAGES    = 'Gói dịch vụ';



    const ACL_MENU = [
        self::SERVERS_CONTROLLER => [
            'name' => self::SERVERS,
            'icon' => '<i class="fa fa-database" aria-hidden="true"></i>',
            'actions' => [
                'index' => 'Danh sách',
                'add'   => 'Thêm mới',
            ]
        ],
        self::PACKAGES_CONTROLLER => [
            'name' => self::PACKAGES,
            'icon' => '<i class="fa fa-soundcloud" aria-hidden="true"></i>',
            'actions' => [
                'index' => 'Danh sách',
                'add'   => 'Thêm mới',
            ]
        ]
    ];

    const ACL_ARRAY = [
        self::SERVERS_CONTROLLER => self::SERVERS,
        self::PACKAGES_CONTROLLER => self::PACKAGES,
    ];
}

?>
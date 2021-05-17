<?php
namespace App\Traits;
/**
 * Created by PhpStorm.
 * User: haidv
 * Date: 13/09/2018
 * Time: 03:38 CH
 */
trait ServerTrait
{
    function checkMaxUser($server_id)
    {
        $server = $this->Servers->get($server_id);
        $currentUser = $this->Accounts->find('all')->where(['server_id' => $server_id, 'deleted is null'])->count();
        if ($currentUser >= $server->max_user) {
            return false;
        }
        return true;
    }

}
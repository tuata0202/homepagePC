<?php
namespace App\Traits;
/**
 * Created by PhpStorm.
 * User: haidv
 * Date: 13/09/2018
 * Time: 03:38 CH
 */
trait CodeTrait
{
    function newCode($owner = 'EVACA', $length = 10)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $owner . '-' . $randomString;
    }

}
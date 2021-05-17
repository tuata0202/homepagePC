<?php

namespace App\Utility;

use App\Consts\Acl;
use App\Consts\FileType;
use App\Model\Entity\Account;
use Cake\Core\Configure;
use Cake\ORM\TableRegistry;
use App\Model\Entity\AccountFood;

class Util
{
    public static $default_characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    public static function handleStringNull($string)
    {
        return strval($string);
    }

    public static function handleNumberNull($number, $type)
    {
        switch ($type) {
            case 'int':
                return intval($number);
                break;
            case 'double':
                return doubleval($number);
                break;
            case 'float':
                return floatval($number);
                break;
            default:
                return 0;
        }
    }

    /*
     * Generator random password
     */
    public static function generatePassword($length = 5)
    {
        $characters = self::$default_characters;
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }

    /*
     *  upload image
     */
    static function uploadImage($infoFile, $folder = 'images', $old_img = null)
    {
        $filename = null;
        if ($infoFile['size'] != 0 || $infoFile['error'] != 0) {
            if (in_array($infoFile['type'], FileType::ALL)) {
                $filename = basename($infoFile['name']);
                $uploadFolder = WWW_ROOT . 'uploads' . DS . $folder;
                if (!file_exists($uploadFolder)) {
                    mkdir($uploadFolder, 0777, true);
                }

                $filename = time() . rand(0, 100000) . '.' . pathinfo($filename, PATHINFO_EXTENSION);
                $uploadPath = $uploadFolder . DS . $filename;
                try {
                    move_uploaded_file($infoFile['tmp_name'], $uploadPath);
                } catch (\Exception $ex) {
                    return $ex;
                }
                if (!empty($old_img)) {
                    $old_avatar = explode('uploads', $old_img);
                    if (file_exists(WWW_ROOT . 'uploads' . $old_avatar[1])) {
                        unlink(WWW_ROOT . 'uploads' . $old_avatar[1]);
                    }
                }
            }
            return $filename ? Configure::read('App.fullBaseUrl') . '/uploads/' . $folder . '/' . $filename : null;
        }else{
            return null;
        }


    }

    public static function getPermissionName($listAcl)
    {
        if (!empty($listAcl)) {
            $aclName = '';
            $listAcl = explode('-', $listAcl);
            foreach ($listAcl as $acl) {
                $aclName .= Acl::ACL_ARRAY[$acl] . '<br>';
            }

            return $aclName;
        }

        return '';

    }


    public static function formatPrice($price)
    {
        return number_format($price);
    }

}

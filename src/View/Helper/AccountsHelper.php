<?php

namespace App\View\Helper;

use App\Model\Entity\Account;
use Cake\View\Helper;

class AccountsHelper extends Helper
{

    public function Status($status)
    {
        $elmHtml = '';
        if ($status == Account::ACTIVE) {
            $elmHtml .= '<span class="label bg-primary">' . Account::ALL_STATUS[Account::ACTIVE] . '</span>';
        }

        if ($status == Account::BLOCKED) {
            $elmHtml .= '<span class="label bg-red">' . Account::ALL_STATUS[Account::BLOCKED] . '</span>';
        }

        if ($status == Account::DEMO) {
            $elmHtml .= '<span class="label bg-info">' . Account::ALL_STATUS[Account::DEMO] . '</span>';
        }
        return $elmHtml;
    }
}
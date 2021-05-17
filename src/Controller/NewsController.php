<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * News Controller
 *
 */

use Cake\I18n\I18n;

class NewsController extends AppController
{
    public function index($id)
    {
        $expIds = explode(':', $id);
        $dir = $expIds[0];
        $view = $expIds[1];
        $lang = I18n::getLocale();

        if ($lang == 'vi_VN' || $lang == 'en_US') {
            $view = $lang . '/' . $view;
        }
        $newsList = $this->_getList();
        $this->set('newsList', $newsList);
        $this->set('pageId', $id);
        $this->set('lang', $lang);
        $this->render('/' . ucfirst($dir) . '/' . $view);
    }
}
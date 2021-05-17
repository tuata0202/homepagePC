<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\I18n;

/**
 * Contents Controller
 *
 */
class ContentsController extends AppController
{
    public function index($id){
        $expIds = explode(':', $id);
        $dir = $expIds[0]; 
        $view = $expIds[1]; 
       
        $lang = I18n::getLocale();
        if ($lang == 'vi_VN' || $lang == 'en_US') {
            $view = $lang .'/'.$view;
        }
        
        $url = $this->request->getRequestTarget();
        $newsList = $this->_getList();
        $this->set('url',$url);
        $this->set('newsList', $newsList);
        $this->set('pageId', $id);
        $this->set('lang',$lang);
        $this->render('/'.ucfirst($dir).'/'.$view);
    } 
}

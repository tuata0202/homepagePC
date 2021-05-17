<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\I18n\I18n;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        $lang = $this->request->getParam('language');
        I18n::setLocale($lang);

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        
        $this->set([
            'jsVers' => $this->_getJsVersion(),
            'cssVers'=> $this->_getCssVersion(),
            'activeMenu' => strtolower($this->request->getParam('controller')),
        ]);

        $this->loadComponent('Recaptcha.Recaptcha', [
            'enable' => true,   
            'sitekey' => '6LeVCccZAAAAAPjlHYXE0B95T8Jjsmg630yotnkY',
            'secret' => '6LeVCccZAAAAAIlirkla1Btv5FYh-Hd1bSfnaOuJ',
            'type' => 'image',  
            'theme' => 'light',
            'lang' => I18n::getLocale(),  
            'size' => 'normal'  
        ]);
        
    }
	
	protected function _getJsVersion() {
		$val = Configure::read('mediaVers.js');
		
		if ($val == 'YmdHis') {
			$val = date('YmdHis');
		}
        
		return $val;
	}
	
	protected function _getCssVersion() {
		$val = Configure::read('mediaVers.css');
        
		if ($val == 'YmdHis') {
			$val = date('YmdHis');
		}
        
		return $val;
	}
    
    protected function _getList() {
        $news = [
            [
                'title' => 'Year end party 2019',
                'image' => 'year-end2019.png',
                'post_date' => '2019/01/07',
            ],
            [
                'title' => 'Picnic 2019/12/28',
                'image' => 'picnic_20191228.png',
                'body' => '',
                'post_date' => '2019/01/05',
            ],
        ];
        
        return $news;
    }
}

<?php
namespace App\Controller;

Use \Cake\Controller\Controller;
use Cake\Core\Configure;
use Cake\Http\Exception\NotFoundException;
use Cake\Event\Event;

/**
 * ApiApp Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class ApiAppController extends Controller
{
    protected $_apiConfig;

    public function initialize() {
	    parent::initialize();
	    $this->loadModel("Accounts");
        $this->_apiConfig = Configure::read('API');
    }

	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
	}

	public function index()
	{
		throw new NotFoundException();
	}

	/**
	 * Function: Response data structure with JSON format
	 * @param array $json
	 * @return \Cake\Http\Response|null|static
	 */
	protected function responseData($json = [])
	{
		$jsonData = $json + $this->_apiConfig['template_response'];
		$jsonData['error_message'] = isset($this->_apiConfig['error_code'][$jsonData['error_code']]) ? $this->_apiConfig['error_code'][$jsonData['error_code']] : '';
		if (isset($json["ext_msg"])) {
			$jsonData['error_message'] = $jsonData['error_message'] . ' ' . $json["ext_msg"];
		}
		$this->response =
			$this->response
				->withType('application/json')
				->withHeader('Access-Control-Allow-Origin', '*')
				->withHeader('Access-Control-Allow-Methods', '*')
				->withHeader('Access-Control-Allow-Headers', 'Content-Type, Authorization, X-Requested-With')
				->withHeader('Access-Control-Max-Age', '172800')
				->withStringBody(json_encode($jsonData));
		return $this->response;
	}
}

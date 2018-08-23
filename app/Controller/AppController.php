<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	var $uses = array('Registration','Service','Ourservice');
public $components = array(
    'DebugKit.Toolbar',
		'Session',
        'Auth' => array(
		    'loginAction' => array('admin' => true,'controller' => 'users','action' => 'login'),
            'loginRedirect' => array('controller' => 'Registrations', 'action' => 'filelist', 'admin'=>false),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login', 'admin'=>false),
			'authError' => 'You must be logged in to view this page.',
			'loginError' => 'Invalid Username or Password entered, please try again.',
			 'flash' => array(
				'element' => 'alert',
				'key' => 'auth',
				'params' => array(
					'plugin' => 'BoostCake',
					'class' => 'alert-error'
				)
			)
 
        ));
 
// only allow the login controllers only
public function beforeFilter() {
	//$this->layout='admin';
    $this->Auth->allow('login','add','frontindex','frontdownload','frontourservices','frontaboutus','frontcontactus','downloadfiles');
	
	//fetch data from download 
		 $dataRegistration1=$this->Registration->find('all',array('conditions'=>array('Registration.is_deleted'=>1),'limit'=>3));
		//pr($dataRegistration1); die;
		 $this->set(compact('dataRegistration1'));
		 //fetch data from service 
		 $dataService1=$this->Service->find('all',array('conditions'=>array('Service.is_deleted'=>1),'limit'=>3));
		 //pr($dataService1); die;
		 $this->set(compact('dataService1'));

}
 
public function isAuthorized($user) {
    // Here is where we should verify the role and give access based on role
     
    return true;
}
}

<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
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

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */

/**
 * Displays a view
 *
 * @return \Cake\Network\Response|null
 * @throws ForbiddenException When a directory traversal attempt.
 * @throws NotFoundException When the view file could not be found
 *   or MissingViewException in debug mode.
 */
 var $uses = array('Download','Service','About','Ourservice','State','Dsceregistration','Country');
 
		public function frontindex() {
			 
					 
		}
   		public function frontdownload(){
 		 $dataDownload1=$this->Download->find('all',array('conditions'=>array('Download.is_deleted'=>1)));
		 //$dataDownload2=$this->Download->('SELECT * FROM downloads');
		 foreach($dataDownload1 as $dataDownload2)
		 {
		 $dataDownload3[]=$dataDownload2['Download']['category']; 
		 }
		 $dataDownload3=array_unique($dataDownload3);
		 $this->set(compact('dataDownload3'));
		 $this->set(compact('dataDownload1'));
		 //fetch data from service 
		 $dataService1=$this->Service->find('all',array('conditions'=>array('Service.is_deleted'=>1),'limit' => 7));
		 //pr($dataService1); die;
		 $this->set(compact('dataService1'));
 
 		}
   		public function frontourservices(){
		 	$this->paginate = array('limit' => 3,
		    	'order' => array('Ourservice.created' => 'desc' ));
				$dataService1 = $this->paginate('Ourservice');
				// pr($dataService1);die;
				$this->set(compact('dataService1'));
		 }
   		public function frontaboutus(){
		 	  $this->paginate = array('limit' => 1,
		    	'order' => array('About.created' => 'desc' ));
				$aboutpage = $this->paginate('About');
				// pr($aboutpage);die;
				$this->set(compact('aboutpage'));

		 }
 		public function frontcontactus(){
		 
		 }
		public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		if (in_array('..', $path, true) || in_array('.', $path, true)) {
			throw new ForbiddenException();
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}
	}
	public function individual(){
		$category = $this->State->find('list',array('fields'=> array('State.id','State.name')));
 	    		$this->set(compact('category'));
 	   $country = $this->Country->find('list',array('fields'=> array('Country.id','Country.name')));
 	    		$this->set(compact('country'));
 	    		if ($this->request->is('post')) {
			$this->Dsceregistration->create();
			unset($this->request->data['log']);
			// unset($this->request->data['Dsceregistration']['confirm_password']);
 	    		$this->request->data['Dsceregistration']['firstname']=htmlspecialchars($this->request->data['Dsceregistration']['firstname']);
			$this->request->data['Dsceregistration']['lastname']=htmlspecialchars($this->request->data['Dsceregistration']['lastname']);
			$this->request->data['Dsceregistration']['pannumber']=htmlspecialchars($this->request->data['Dsceregistration']['pannumber']);
			$this->request->data['Dsceregistration']['aadharnumber']=htmlspecialchars($this->request->data['Dsceregistration']['aadharnumber']);
			$this->request->data['Dsceregistration']['telephone']=htmlspecialchars($this->request->data['Dsceregistration']['telephone']);
			$this->request->data['Dsceregistration']['state']=htmlspecialchars($this->request->data['Dsceregistration']['state']);
			$this->request->data['Dsceregistration']['country']=htmlspecialchars($this->request->data['Dsceregistration']['country']);
			$this->request->data['Dsceregistration']['postalcode']=htmlspecialchars($this->request->data['Dsceregistration']['postalcode']);
			$this->request->data['Dsceregistration']['addresslinefirst']=htmlspecialchars($this->request->data['Dsceregistration']['addresslinefirst']);
			$this->request->data['Dsceregistration']['addresslinesceond']=htmlspecialchars($this->request->data['Dsceregistration']['addresslinesceond']);
			$this->request->data['Dsceregistration']['locality']=htmlspecialchars($this->request->data['Dsceregistration']['locality']);
			$this->request->data['Dsceregistration']['city']=htmlspecialchars($this->request->data['Dsceregistration']['city']);
			$this->request->data['Dsceregistration']['gstnumber']=htmlspecialchars($this->request->data['Dsceregistration']['gstnumber']);
			 $this->request->data['Dsceregistration']['password']=htmlspecialchars($this->request->data['Dsceregistration']['password']);
			  $this->request->data['Dsceregistration']['confpassword']=htmlspecialchars($this->request->data['Dsceregistration']['confpassword']);
			 $this->request->data['Dsceregistration']['registrationno']=htmlspecialchars($this->request->data['Dsceregistration']['registrationno']);
			$this->request->data['Dsceregistration']['email']=htmlspecialchars($this->request->data['Dsceregistration']['email']);
			$this->request->data['Dsceregistration']['comment']=htmlspecialchars($this->request->data['Dsceregistration']['comment']);
			if($this->request->data['Dsceregistration']['registerfor'] == 'checked'){
				$this->request->data['Dsceregistration']['registerfor']='Yes';
			}
			$this->request->data['Dsceregistration']['registrationnumber']=htmlspecialchars($this->request->data['Dsceregistration']['registrationnumber']);
			
			$this->request->data['Dsceregistration']['role']=htmlspecialchars($this->request->data['Dsceregistration']['role']);
			$error='';
			$error=false;
			$checking=false;
	    if( !isset($_FILES['data']['name']['Dsceregistration']['pan']) || $_FILES['data']['name']['Dsceregistration']['pan'] == ''){
					$error = true;
					$this->request->data['Dsceregistration']['pan']='';
					$this->Session->setFlash('PDF File Required !');	
				}
		if( !$error ){	
				$filename = $_FILES['data']['name']['Dsceregistration']['pan'];
				$ext = explode('.',$filename);
				$ext=$ext[1];
				if( in_array( strtolower($ext), array('pdf','jpg','jpeg','gif','bmp','png'))){
					$new_name = time().'.'.$ext;				
					$upload_dir = WWW_ROOT.'/document/';					
					if( move_uploaded_file( $_FILES['data']['tmp_name']['Dsceregistration']['pan'],$upload_dir.$new_name ) ){
					  $this->request->data['Dsceregistration']['pan']=$new_name;
					}
				}else{
					$this->Session->setFlash('Upload pdf file only ');	
					//$this->redirect(array('action' => 'frontindex'));
					}
			}
sleep(2);
			$error1='';
			$error1=false;
			if( !isset($_FILES['data']['name']['Dsceregistration']['addhar']) || $_FILES['data']['name']['Dsceregistration']['addhar'] == '' )
			{
				$error1 = true;
				$this->request->data['Dsceregistration']['addhar']='';
				$this->Session->setFlash('File Required !');	
			
			}
			if( !$error1 ){				
				// Upload file
				$filename1 = $_FILES['data']['name']['Dsceregistration']['addhar'];
				$ext1 = explode('.',$filename1) ;
				$ext1=$ext1[1];
					
				if( in_array( strtolower($ext1), array( 'pdf','jpg','jpeg','gif','bmp','png') ) )
				{
					$new_name1 = time().'.'.$ext1;				
					$upload_dir1 = WWW_ROOT.'/document/';					
					
					if( move_uploaded_file( $_FILES['data']['tmp_name']['Dsceregistration']['addhar'], $upload_dir1.$new_name1 )){
					  $this->request->data['Dsceregistration']['addhar']=$new_name1;
					}
				}else{
					$this->Session->setFlash('Upload pdf files only ');	
					//$this->redirect(array('action' => 'frontindex'));
				}
			}
sleep(2);
			$error2='';
			$error2=false;
			if( !isset($_FILES['data']['name']['Dsceregistration']['image']) || $_FILES['data']['name']['Dsceregistration']['image'] == ''){
				$error2 = true;
				$this->request->data['Dsceregistration']['image']='';
				$this->Session->setFlash('File Required !');	
			
			}
			if( !$error2 ){				
				// Upload file
				$filename2 = $_FILES['data']['name']['Dsceregistration']['image'];
				$ext2 = explode('.',$filename2) ;
				$ext2=$ext2[1];
					
				if( in_array( strtolower($ext2), array( 'pdf','jpg', 'jpeg', 'png', 'gif', 'bmp' ))){
					$new_name2 = time().'.'.$ext2;				
					$upload_dir2 = WWW_ROOT.'/document/';					
					
					if( move_uploaded_file( $_FILES['data']['tmp_name']['Dsceregistration']['image'], $upload_dir2.$new_name2 ) )
					{
					  $this->request->data['Dsceregistration']['image']=$new_name2;
					}
				}else{
					$this->Session->setFlash('Upload jpg, jpeg, gif, bmp & png files only ');	
					}
			}
			//pr($this->request->data['Dsceregistration']);die;
			if ($this->Dsceregistration->save($this->request->data['Dsceregistration'])) {
				$this->Session->setFlash(__('The new Registration has been Successfully'));
				$this->redirect(array('controller'=>'pages','action' => 'frontindex', 'admin' => false));
			} else {
				$this->Session->setFlash(__('The Registration could not be saved. Please, try again.'));

			}
		}


	}
	public function classdesorg(){
		$category = $this->State->find('list',array('fields'=> array('State.id','State.name')));
 	    		$this->set(compact('category'));
 	   $country = $this->Country->find('list',array('fields'=> array('Country.id','Country.name')));
 	    		$this->set(compact('country'));
 	    		if ($this->request->is('post')) {
			$this->Dsceregistration->create();
			unset($this->request->data['log']);
			unset($this->request->data['Dsceregistration']['confirm_password']);
 	    		$this->request->data['Dsceregistration']['firstname']=htmlspecialchars($this->request->data['Dsceregistration']['firstname']);
			$this->request->data['Dsceregistration']['lastname']=htmlspecialchars($this->request->data['Dsceregistration']['lastname']);
			$this->request->data['Dsceregistration']['pannumber']=htmlspecialchars($this->request->data['Dsceregistration']['pannumber']);
			$this->request->data['Dsceregistration']['aadharnumber']=htmlspecialchars($this->request->data['Dsceregistration']['aadharnumber']);
			$this->request->data['Dsceregistration']['telephone']=htmlspecialchars($this->request->data['Dsceregistration']['telephone']);
			$this->request->data['Dsceregistration']['state']=htmlspecialchars($this->request->data['Dsceregistration']['state']);
			$this->request->data['Dsceregistration']['country']=htmlspecialchars($this->request->data['Dsceregistration']['country']);
			$this->request->data['Dsceregistration']['postalcode']=htmlspecialchars($this->request->data['Dsceregistration']['postalcode']);
			$this->request->data['Dsceregistration']['orgunitname']=htmlspecialchars($this->request->data['Dsceregistration']['orgunitname']);
			$this->request->data['Dsceregistration']['orgname']=htmlspecialchars($this->request->data['Dsceregistration']['orgname']);
			$this->request->data['Dsceregistration']['addresslinefirst']=htmlspecialchars($this->request->data['Dsceregistration']['addresslinefirst']);
			$this->request->data['Dsceregistration']['addresslinesceond']=htmlspecialchars($this->request->data['Dsceregistration']['addresslinesceond']);
			$this->request->data['Dsceregistration']['locality']=htmlspecialchars($this->request->data['Dsceregistration']['locality']);
			$this->request->data['Dsceregistration']['city']=htmlspecialchars($this->request->data['Dsceregistration']['city']);
			$this->request->data['Dsceregistration']['gstnumber']=htmlspecialchars($this->request->data['Dsceregistration']['gstnumber']);
			 $this->request->data['Dsceregistration']['password']=htmlspecialchars($this->request->data['Dsceregistration']['password']);
			  $this->request->data['Dsceregistration']['confpassword']=htmlspecialchars($this->request->data['Dsceregistration']['confpassword']);
			 if($this->request->data['Dsceregistration']['governmentemployee']=='checked'){
			 	$this->request->data['Dsceregistration']['governmentemployee']='Yes';
			 }
			
			$this->request->data['Dsceregistration']['registrationno']=htmlspecialchars($this->request->data['Dsceregistration']['registrationno']);
			$this->request->data['Dsceregistration']['email']=htmlspecialchars($this->request->data['Dsceregistration']['email']);
			$this->request->data['Dsceregistration']['comment']=htmlspecialchars($this->request->data['Dsceregistration']['comment']);
			if($this->request->data['Dsceregistration']['registerfor'] == 'checked'){
				$this->request->data['Dsceregistration']['registerfor']='Yes';
			}
			$this->request->data['Dsceregistration']['registrationnumber']=htmlspecialchars($this->request->data['Dsceregistration']['registrationnumber']);
			
			$this->request->data['Dsceregistration']['role']=htmlspecialchars($this->request->data['Dsceregistration']['role']);
		

//$tr=$this->Dsceregistration->save($this->request->data['Dsceregistration']);
			
				$error='';
			$error=false;
			$checking=false;
	    if( !isset($_FILES['data']['name']['Dsceregistration']['pan']) || $_FILES['data']['name']['Dsceregistration']['pan'] == ''){
					$error = true;
					$this->request->data['Dsceregistration']['pan']='';
					$this->Session->setFlash('PDF File Required !');	
				}
		if( !$error ){	
				$filename = $_FILES['data']['name']['Dsceregistration']['pan'];
				$ext = explode('.',$filename);
				$ext=$ext[1];
				if( in_array( strtolower($ext), array('pdf','jpg','jpeg','gif','bmp','png'))){
					$new_name = time().'.'.$ext;				
					$upload_dir = WWW_ROOT.'/document/';					
					if( move_uploaded_file( $_FILES['data']['tmp_name']['Dsceregistration']['pan'],$upload_dir.$new_name ) ){
					  $this->request->data['Dsceregistration']['pan']=$new_name;
					}
				}else{
					$this->Session->setFlash('Upload pdf file only ');	
					//$this->redirect(array('action' => 'frontindex'));
					}
			}
			sleep(2);
			$error='';
			$error=false;
			if( !isset($_FILES['data']['name']['Dsceregistration']['addhar']) || $_FILES['data']['name']['Dsceregistration']['addhar'] == '' )
			{
				$error = true;
				$this->request->data['Dsceregistration']['addhar']='';
				$this->Session->setFlash('File Required !');	
			
			}
			if( !$error ){				
				// Upload file
				$filename = $_FILES['data']['name']['Dsceregistration']['addhar'];
				$ext = explode('.',$filename) ;
				$ext=$ext[1];
					
				if( in_array( strtolower($ext), array( 'pdf','jpg','jpeg','gif','bmp','png') ) )
				{
					$new_name = time().'.'.$ext;				
					$upload_dir = WWW_ROOT.'/document/';					
					
					if( move_uploaded_file( $_FILES['data']['tmp_name']['Dsceregistration']['addhar'], $upload_dir.$new_name )){
					  $this->request->data['Dsceregistration']['addhar']=$new_name;
					}
				}else{
					$this->Session->setFlash('Upload pdf files only ');	
					//$this->redirect(array('action' => 'frontindex'));
				}
			}
			sleep(2);
			$error='';
			$error=false;
			if( !isset($_FILES['data']['name']['Dsceregistration']['image']) || $_FILES['data']['name']['Dsceregistration']['image'] == ''){
				$error = true;
				$this->request->data['Dsceregistration']['image']='';
				$this->Session->setFlash('File Required !');	
			
			}
			if( !$error ){				
				// Upload file
				$filename = $_FILES['data']['name']['Dsceregistration']['image'];
				$ext = explode('.',$filename) ;
				$ext=$ext[1];
					
				if( in_array( strtolower($ext), array( 'pdf','jpg', 'jpeg', 'png', 'gif', 'bmp' ))){
					$new_name = time().'.'.$ext;				
					$upload_dir = WWW_ROOT.'/document/';					
					
					if( move_uploaded_file( $_FILES['data']['tmp_name']['Dsceregistration']['image'], $upload_dir.$new_name ) )
					{
					  $this->request->data['Dsceregistration']['image']=$new_name;
					}
				}else{
					$this->Session->setFlash('Upload jpg, jpeg, gif, bmp & png files only ');	
					}
			}
			sleep(2);
			$error='';
			$error=false;
			if( !isset($_FILES['data']['name']['Dsceregistration']['gst']) || $_FILES['data']['name']['Dsceregistration']['gst'] == '' )
			{
				$error = true;
				$this->request->data['Dsceregistration']['gst']='';
				$this->Session->setFlash('File Required !');	
			
			}
			if( !$error ){				
				// Upload file
				$filename = $_FILES['data']['name']['Dsceregistration']['gst'];
				$ext = explode('.',$filename) ;
				$ext=$ext[1];
					
				if( in_array( strtolower($ext), array( 'pdf','jpg','jpeg','gif','bmp','png')))
				{
					$new_name = time().'.'.$ext;				
					$upload_dir = WWW_ROOT.'/document/';					
					
					if( move_uploaded_file( $_FILES['data']['tmp_name']['Dsceregistration']['gst'], $upload_dir.$new_name )){
					  $this->request->data['Dsceregistration']['gst']=$new_name;
					}
				}else{
					$this->Session->setFlash('Upload jpg, jpeg, gif, bmp & png files only ');	
					//$this->redirect(array('action' => 'frontindex'));
				}
			}
			sleep(2);
			$error='';
			$error=false;
			if( !isset($_FILES['data']['name']['Dsceregistration']['bankiamge']) || $_FILES['data']['name']['Dsceregistration']['bankiamge'] == '' )
			{
				$error = true;
				$this->request->data['Dsceregistration']['bankiamge']='';
				$this->Session->setFlash('File Required !');	
			
			}

			if( !$error ){				
				// Upload file
				$filename = $_FILES['data']['name']['Dsceregistration']['bankiamge'];
				$ext = explode('.',$filename) ;
				$ext=$ext[1];
					
				if( in_array( strtolower($ext), array( 'pdf','jpg','jpeg','gif','bmp','png')))
				{
					$new_name = time().'.'.$ext;				
					$upload_dir = WWW_ROOT.'/document/';					
					
					if( move_uploaded_file( $_FILES['data']['tmp_name']['Dsceregistration']['bankiamge'], $upload_dir.$new_name )){
					  $this->request->data['Dsceregistration']['bankiamge']=$new_name;
					}
				}else{
					$this->Session->setFlash('Upload jpg, jpeg, gif, bmp & png files only ');	
					//$this->redirect(array('action' => 'frontindex'));
				}
			}
//pr($this->request->data);
		
//pr($this->request->data);die;
		if ($this->Dsceregistration->save($this->request->data['Dsceregistration'])) {
				$this->Session->setFlash(__('The new Registration has been Successfully'));
				$this->redirect(array('controller'=>'pages','action' => 'frontindex', 'admin' => false));
			} else {
				$this->Session->setFlash(__('The Registration could not be saved. Please, try again.'));

			}


		}

	}
	public function classapplication(){
		$category = $this->State->find('list',array('fields'=> array('State.id','State.name')));
 	    		$this->set(compact('category'));
 	   $country = $this->Country->find('list',array('fields'=> array('Country.id','Country.name')));
 	    		$this->set(compact('country'));
 	    		if ($this->request->is('post')) {
			$this->Dsceregistration->create();
			unset($this->request->data['log']);
			// unset($this->request->data['Dsceregistration']['confirm_password']);
 	    		$this->request->data['Dsceregistration']['firstname']=htmlspecialchars($this->request->data['Dsceregistration']['firstname']);
			$this->request->data['Dsceregistration']['lastname']=htmlspecialchars($this->request->data['Dsceregistration']['lastname']);
			$this->request->data['Dsceregistration']['pannumber']=htmlspecialchars($this->request->data['Dsceregistration']['pannumber']);
			$this->request->data['Dsceregistration']['aadharnumber']=htmlspecialchars($this->request->data['Dsceregistration']['aadharnumber']);
			$this->request->data['Dsceregistration']['telephone']=htmlspecialchars($this->request->data['Dsceregistration']['telephone']);
			$this->request->data['Dsceregistration']['state']=htmlspecialchars($this->request->data['Dsceregistration']['state']);
			$this->request->data['Dsceregistration']['country']=htmlspecialchars($this->request->data['Dsceregistration']['country']);
			$this->request->data['Dsceregistration']['postalcode']=htmlspecialchars($this->request->data['Dsceregistration']['postalcode']);
			$this->request->data['Dsceregistration']['addresslinefirst']=htmlspecialchars($this->request->data['Dsceregistration']['addresslinefirst']);
			$this->request->data['Dsceregistration']['addresslinesceond']=htmlspecialchars($this->request->data['Dsceregistration']['addresslinesceond']);
			$this->request->data['Dsceregistration']['locality']=htmlspecialchars($this->request->data['Dsceregistration']['locality']);
			$this->request->data['Dsceregistration']['city']=htmlspecialchars($this->request->data['Dsceregistration']['city']);
			$this->request->data['Dsceregistration']['gstnumber']=htmlspecialchars($this->request->data['Dsceregistration']['gstnumber']);
			 $this->request->data['Dsceregistration']['password']=htmlspecialchars($this->request->data['Dsceregistration']['password']);
			 $this->request->data['Dsceregistration']['confpassword']=htmlspecialchars($this->request->data['Dsceregistration']['confpassword']);
			 $this->request->data['Dsceregistration']['registrationno']=htmlspecialchars($this->request->data['Dsceregistration']['registrationno']);
			$this->request->data['Dsceregistration']['email']=htmlspecialchars($this->request->data['Dsceregistration']['email']);
			$this->request->data['Dsceregistration']['comment']=htmlspecialchars($this->request->data['Dsceregistration']['comment']);
			if($this->request->data['Dsceregistration']['registerfor'] == 'checked'){
				$this->request->data['Dsceregistration']['registerfor']='Yes';
			}
			$this->request->data['Dsceregistration']['registrationnumber']=htmlspecialchars($this->request->data['Dsceregistration']['registrationnumber']);
			
			$this->request->data['Dsceregistration']['role']=htmlspecialchars($this->request->data['Dsceregistration']['role']);
					$error='';
			$error=false;
			$checking=false;
	    if( !isset($_FILES['data']['name']['Dsceregistration']['pan']) || $_FILES['data']['name']['Dsceregistration']['pan'] == ''){
					$error = true;
					$this->request->data['Dsceregistration']['pan']='';
					$this->Session->setFlash('PDF File Required !');	
				}
		if( !$error ){	
				$filename = $_FILES['data']['name']['Dsceregistration']['pan'];
				$ext = explode('.',$filename);
				$ext=$ext[1];
				if( in_array( strtolower($ext), array('pdf','jpg','jpeg','gif','bmp','png'))){
					$new_name = time().'.'.$ext;				
					$upload_dir = WWW_ROOT.'/document/';					
					if( move_uploaded_file( $_FILES['data']['tmp_name']['Dsceregistration']['pan'],$upload_dir.$new_name ) ){
					  $this->request->data['Dsceregistration']['pan']=$new_name;
					}
				}else{
					$this->Session->setFlash('Upload pdf file only ');	
					//$this->redirect(array('action' => 'frontindex'));
					}
			}
			sleep(2);
			$error='';
			$error=false;
			if( !isset($_FILES['data']['name']['Dsceregistration']['addhar']) || $_FILES['data']['name']['Dsceregistration']['addhar'] == '' )
			{
				$error = true;
				$this->request->data['Dsceregistration']['addhar']='';
				$this->Session->setFlash('File Required !');	
			
			}
			if( !$error ){				
				// Upload file
				$filename = $_FILES['data']['name']['Dsceregistration']['addhar'];
				$ext = explode('.',$filename) ;
				$ext=$ext[1];
					
				if( in_array( strtolower($ext), array( 'pdf','jpg','jpeg','gif','bmp','png') ) )
				{
					$new_name = time().'.'.$ext;				
					$upload_dir = WWW_ROOT.'/document/';					
					
					if( move_uploaded_file( $_FILES['data']['tmp_name']['Dsceregistration']['addhar'], $upload_dir.$new_name )){
					  $this->request->data['Dsceregistration']['addhar']=$new_name;
					}
				}else{
					$this->Session->setFlash('Upload pdf files only ');	
					//$this->redirect(array('action' => 'frontindex'));
				}
			}
				sleep(2);
			$error='';
			$error=false;
			if( !isset($_FILES['data']['name']['Dsceregistration']['image']) || $_FILES['data']['name']['Dsceregistration']['image'] == ''){
				$error = true;
				$this->request->data['Dsceregistration']['image']='';
				$this->Session->setFlash('File Required !');	
			
			}
			if( !$error ){				
				// Upload file
				$filename = $_FILES['data']['name']['Dsceregistration']['image'];
				$ext = explode('.',$filename) ;
				$ext=$ext[1];
					
				if( in_array( strtolower($ext), array( 'pdf','jpg', 'jpeg', 'png', 'gif', 'bmp' ))){
					$new_name = time().'.'.$ext;				
					$upload_dir = WWW_ROOT.'/document/';					
					
					if( move_uploaded_file( $_FILES['data']['tmp_name']['Dsceregistration']['image'], $upload_dir.$new_name ) )
					{
					  $this->request->data['Dsceregistration']['image']=$new_name;
					}
				}else{
					$this->Session->setFlash('Upload jpg, jpeg, gif, bmp & png files only ');	
					}
			}
			if ($this->Dsceregistration->save($this->request->data['Dsceregistration'])) {
				$this->Session->setFlash(__('The new Registration has been Successfully'));
				$this->redirect(array('controller'=>'pages','action' => 'frontindex', 'admin' => false));
			} else {
				$this->Session->setFlash(__('The Registration could not be saved. Please, try again.'));

			}
		}
			


	}
	public function classthreeorg(){
		$category = $this->State->find('list',array('fields'=> array('State.id','State.name')));
 	    		$this->set(compact('category'));
 	   $country = $this->Country->find('list',array('fields'=> array('Country.id','Country.name')));
 	    		$this->set(compact('country'));
		 if ($this->request->is('post')) {
			$this->Dsceregistration->create();
			unset($this->request->data['log']);
			unset($this->request->data['Dsceregistration']['confirm_password']);
				//pr($this->request->data); die;
			$this->request->data['Dsceregistration']['firstname']=htmlspecialchars($this->request->data['Dsceregistration']['firstname']);
			$this->request->data['Dsceregistration']['lastname']=htmlspecialchars($this->request->data['Dsceregistration']['lastname']);
			$this->request->data['Dsceregistration']['pannumber']=htmlspecialchars($this->request->data['Dsceregistration']['pannumber']);
			$this->request->data['Dsceregistration']['aadharnumber']=htmlspecialchars($this->request->data['Dsceregistration']['aadharnumber']);
			$this->request->data['Dsceregistration']['telephone']=htmlspecialchars($this->request->data['Dsceregistration']['telephone']);
			$this->request->data['Dsceregistration']['state']=htmlspecialchars($this->request->data['Dsceregistration']['state']);
			$this->request->data['Dsceregistration']['country']=htmlspecialchars($this->request->data['Dsceregistration']['country']);
			$this->request->data['Dsceregistration']['postalcode']=htmlspecialchars($this->request->data['Dsceregistration']['postalcode']);
			$this->request->data['Dsceregistration']['orgunitname']=htmlspecialchars($this->request->data['Dsceregistration']['orgunitname']);
			$this->request->data['Dsceregistration']['orgname']=htmlspecialchars($this->request->data['Dsceregistration']['orgname']);
			$this->request->data['Dsceregistration']['addresslinefirst']=htmlspecialchars($this->request->data['Dsceregistration']['addresslinefirst']);
			$this->request->data['Dsceregistration']['addresslinesceond']=htmlspecialchars($this->request->data['Dsceregistration']['addresslinesceond']);
			$this->request->data['Dsceregistration']['locality']=htmlspecialchars($this->request->data['Dsceregistration']['locality']);
			$this->request->data['Dsceregistration']['city']=htmlspecialchars($this->request->data['Dsceregistration']['city']);
			$this->request->data['Dsceregistration']['gstnumber']=htmlspecialchars($this->request->data['Dsceregistration']['gstnumber']);
			 $this->request->data['Dsceregistration']['password']=htmlspecialchars($this->request->data['Dsceregistration']['password']);
			  $this->request->data['Dsceregistration']['confpassword']=htmlspecialchars($this->request->data['Dsceregistration']['confpassword']);
			 if($this->request->data['Dsceregistration']['governmentemployee']=='checked'){
			 	$this->request->data['Dsceregistration']['governmentemployee']='Yes';
			 }
			
			$this->request->data['Dsceregistration']['registrationno']=htmlspecialchars($this->request->data['Dsceregistration']['registrationno']);
			$this->request->data['Dsceregistration']['email']=htmlspecialchars($this->request->data['Dsceregistration']['email']);
			$this->request->data['Dsceregistration']['comment']=htmlspecialchars($this->request->data['Dsceregistration']['comment']);
			if($this->request->data['Dsceregistration']['registerfor'] == 'checked'){
				$this->request->data['Dsceregistration']['registerfor']='Yes';
			}
			$this->request->data['Dsceregistration']['registrationnumber']=htmlspecialchars($this->request->data['Dsceregistration']['registrationnumber']);
			
			$this->request->data['Dsceregistration']['role']=htmlspecialchars($this->request->data['Dsceregistration']['role']);
		

//$tr=$this->Dsceregistration->save($this->request->data['Dsceregistration']);
			
				$error='';
			$error=false;
			$checking=false;
	    if( !isset($_FILES['data']['name']['Dsceregistration']['pan']) || $_FILES['data']['name']['Dsceregistration']['pan'] == ''){
					$error = true;
					$this->request->data['Dsceregistration']['pan']='';
					$this->Session->setFlash('PDF File Required !');	
				}
		if( !$error ){	
				$filename = $_FILES['data']['name']['Dsceregistration']['pan'];
				$ext = explode('.',$filename);
				$ext=$ext[1];
				if( in_array( strtolower($ext), array('pdf','jpg','jpeg','gif','bmp','png'))){
					$new_name = time().'.'.$ext;				
					$upload_dir = WWW_ROOT.'/document/';					
					if( move_uploaded_file( $_FILES['data']['tmp_name']['Dsceregistration']['pan'],$upload_dir.$new_name ) ){
					  $this->request->data['Dsceregistration']['pan']=$new_name;
					}
				}else{
					$this->Session->setFlash('Upload pdf file only ');	
					//$this->redirect(array('action' => 'frontindex'));
					}
			}
				sleep(2);
			$error='';
			$error=false;
			if( !isset($_FILES['data']['name']['Dsceregistration']['addhar']) || $_FILES['data']['name']['Dsceregistration']['addhar'] == '' )
			{
				$error = true;
				$this->request->data['Dsceregistration']['addhar']='';
				$this->Session->setFlash('File Required !');	
			
			}
			if( !$error ){				
				// Upload file
				$filename = $_FILES['data']['name']['Dsceregistration']['addhar'];
				$ext = explode('.',$filename) ;
				$ext=$ext[1];
					
				if( in_array( strtolower($ext), array( 'pdf','jpg','jpeg','gif','bmp','png') ) )
				{
					$new_name = time().'.'.$ext;				
					$upload_dir = WWW_ROOT.'/document/';					
					
					if( move_uploaded_file( $_FILES['data']['tmp_name']['Dsceregistration']['addhar'], $upload_dir.$new_name )){
					  $this->request->data['Dsceregistration']['addhar']=$new_name;
					}
				}else{
					$this->Session->setFlash('Upload pdf files only ');	
					//$this->redirect(array('action' => 'frontindex'));
				}
			}
				sleep(2);
			$error='';
			$error=false;
			if( !isset($_FILES['data']['name']['Dsceregistration']['image']) || $_FILES['data']['name']['Dsceregistration']['image'] == ''){
				$error = true;
				$this->request->data['Dsceregistration']['image']='';
				$this->Session->setFlash('File Required !');	
			
			}
			if( !$error ){				
				// Upload file
				$filename = $_FILES['data']['name']['Dsceregistration']['image'];
				$ext = explode('.',$filename) ;
				$ext=$ext[1];
					
				if( in_array( strtolower($ext), array( 'pdf','jpg', 'jpeg', 'png', 'gif', 'bmp' ))){
					$new_name = time().'.'.$ext;				
					$upload_dir = WWW_ROOT.'/document/';					
					
					if( move_uploaded_file( $_FILES['data']['tmp_name']['Dsceregistration']['image'], $upload_dir.$new_name ) )
					{
					  $this->request->data['Dsceregistration']['image']=$new_name;
					}
				}else{
					$this->Session->setFlash('Upload jpg, jpeg, gif, bmp & png files only ');	
					}
			}
			sleep(2);
			$error='';
			$error=false;
			if( !isset($_FILES['data']['name']['Dsceregistration']['gst']) || $_FILES['data']['name']['Dsceregistration']['gst'] == '' )
			{
				$error = true;
				$this->request->data['Dsceregistration']['gst']='';
				$this->Session->setFlash('File Required !');	
			
			}
			if( !$error ){				
				// Upload file
				$filename = $_FILES['data']['name']['Dsceregistration']['gst'];
				$ext = explode('.',$filename) ;
				$ext=$ext[1];
					
				if( in_array( strtolower($ext), array( 'pdf','jpg','jpeg','gif','bmp','png')))
				{
					$new_name = time().'.'.$ext;				
					$upload_dir = WWW_ROOT.'/document/';					
					
					if( move_uploaded_file( $_FILES['data']['tmp_name']['Dsceregistration']['gst'], $upload_dir.$new_name )){
					  $this->request->data['Dsceregistration']['gst']=$new_name;
					}
				}else{
					$this->Session->setFlash('Upload jpg, jpeg, gif, bmp & png files only ');	
					//$this->redirect(array('action' => 'frontindex'));
				}
			}
				sleep(2);
			$error='';
			$error=false;
			if( !isset($_FILES['data']['name']['Dsceregistration']['bankiamge']) || $_FILES['data']['name']['Dsceregistration']['bankiamge'] == '' )
			{
				$error = true;
				$this->request->data['Dsceregistration']['bankiamge']='';
				$this->Session->setFlash('File Required !');	
			
			}

			if( !$error ){				
				// Upload file
				$filename = $_FILES['data']['name']['Dsceregistration']['bankiamge'];
				$ext = explode('.',$filename) ;
				$ext=$ext[1];
					
				if( in_array( strtolower($ext), array( 'pdf','jpg','jpeg','gif','bmp','png')))
				{
					$new_name = time().'.'.$ext;				
					$upload_dir = WWW_ROOT.'/document/';					
					
					if( move_uploaded_file( $_FILES['data']['tmp_name']['Dsceregistration']['bankiamge'], $upload_dir.$new_name )){
					  $this->request->data['Dsceregistration']['bankiamge']=$new_name;
					}
				}else{
					$this->Session->setFlash('Upload jpg, jpeg, gif, bmp & png files only ');	
					//$this->redirect(array('action' => 'frontindex'));
				}
			}
//pr($this->request->data);
		
//pr($this->request->data);die;
		if ($this->Dsceregistration->save($this->request->data['Dsceregistration'])) {
				$this->Session->setFlash(__('The new Registration has been Successfully'));
				$this->redirect(array('controller'=>'pages','action' => 'frontindex', 'admin' => false));
			} else {
				$this->Session->setFlash(__('The Registration could not be saved. Please, try again.'));

			}

        }




	}






}

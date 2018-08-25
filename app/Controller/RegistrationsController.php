<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');

class RegistrationsController extends AppController {

   public $components = array('Paginator','RequestHandler');
   var $uses = array('Registration','Occasion','Group','User');
   public $helpers = array('Tinymce','Html','Form');

    public function beforeFilter() {
	    $this->layout='admin';
        parent::beforeFilter();
       //$this->Auth->allow('login','add'); 
		//$this->Layout='admin';
   }
    public function filelist() {
		$this->layout="admin";
		$this->paginate = array(
            'limit' => 10,
			'order' => array('Registration.created' => 'desc' ),
			'conditions'=>array('Registration.is_deleted'=>1)
       );

		$files = $this->paginate('Registration');
		$this->set(compact('files'));
   }

   public function adduser(){
   	$this->layout="admin";
   	$group = $this->Group->find('list',array('fields'=> array('Group.id','Group.group_title')));
   	$this->set(compact('group'));
   	 if ($this->request->is('post')) {
		$this->Registration->create();
			$this->request->data['Registration']['name']=htmlspecialchars($this->request->data['Registration']['name']);
			$this->request->data['Registration']['email']=htmlspecialchars($this->request->data['Registration']['email']);
			$this->request->data['Registration']['address']=htmlspecialchars($this->request->data['Registration']['address']);
			$this->request->data['Registration']['group_id']=htmlspecialchars($this->request->data['Registration']['group_id']);
			$this->request->data['Registration']['dob']=date('Y-m-d',strtotime($this->request->data['Registration']['dob']));
			$this->request->data['Registration']['contact_number']=htmlspecialchars($this->request->data['Registration']['contact_number']);
			$this->request->data['Registration']['anniversary']=date('Y-m-d',strtotime($this->request->data['Registration']['anniversary']));
					if ($this->Registration->save($this->request->data['Registration'])) {
				$this->Session->setFlash(__('The user has been created'));
				$this->redirect(array('action' => 'filelist', 'admin' => false));
			} else {
				$this->Session->setFlash(__('The user could not be created. Please, try again.'));
			}	
        }

   }
    
   public function sendsms(){
   	$categories = $this->Registration->find('list',array('fields'=> array('Registration.id','Registration.contact_number')));
   	$this->set(compact('categories'));
   	
   $categories = $this->Registration->find('all', array(
  'conditions' => array('DATE(Registration.dob)' => date('Y-m-d'))
  ));
   $this->set(compact('categories'));
 //   	$mobile=8795202855;
 //   	$mobile=$data1['Customer']['contact_number'];
 // $msgtocustomer ="Dear%20Sir%2FMadam%0aKindly%20deposit%20fixed%20EMI%20of%20this%20month.%0aPlot%20no%2E%2D".$data1['Plot']['plotno']."%0aArea%2D".$data1['Plot']['size']."%0aAmount%20Rs.".number_format($data1['Plot_book']['price'],2)."%0aRegards%0aPallavi InfraBuild Pvt Ltd%0a+(91)%2D8799315112";
			
	// 	$authKey = "7c8f7aac3c921d0db54496697a11f841";
	// 				$mobileNumber = $mobile;
	// 				//Sender ID,While using route4 sender id should be 6 characters long.
	// 				$senderId = "PALAVI";
	// 				//Your message to send, Add URL encoding here.
	// 				$message = $msgtocustomer;
	// 				//Define route 
	// 				//pr($message); die;
	// 				$route = 1;
	// 				//Prepare you post parameters
	// 				$postData = array(
	// 					'authkey' => $authKey,
	// 					'mobiles' => $mobileNumber,
	// 					'message' => $message,
	// 					'sender' => $senderId,
	// 					'route' => $route
	// 				);
	// 				//API URL
	// 				$url = "http://pdsms.primeprogrammer.com/api/send_http.php";
	// 				// init the resource
	// 				$ch = curl_init();
	// 				curl_setopt_array($ch, array(
	// 					CURLOPT_URL => $url,
	// 					CURLOPT_RETURNTRANSFER => true,
	// 					CURLOPT_POST => true,
	// 					CURLOPT_POSTFIELDS => $postData
	// 					//,CURLOPT_FOLLOWLOCATION => true
	// 				));
	// 				//Ignore SSL certificate verification
	// 				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	// 				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	// 				//get response
	// 				$output = curl_exec($ch);
	// 				//Print error if any
	// 				if (curl_errno($ch)) {
	// 					echo 'error:' . curl_error($ch);
	// 				}
	// 				curl_close($ch);
   	// die;
   }
   public function birhtday(){

   	$TaskSuggestion = 
	$this->Registration->find('all', array(
   'conditions' => array(
      'Registration.group_id' => $this->Session->read('Auth.User.group_id'),
      'Registration.dob NOT' => null,
      'AND' => array(
           array('Registration.dob NOT' => null),
           array('Registration.dob + INTERVAL EXTRACT(YEAR FROM NOW()) - 
              EXTRACT(YEAR FROM Registration.dob) YEAR <=' => date('Y-m-d', 
                 strtotime('+1 week'))),
           array('Registration.dob + INTERVAL EXTRACT(YEAR FROM NOW()) -
              EXTRACT(YEAR FROM Registration.dob) YEAR >=' => date('Y-m-d')),
     		 )
    		),
  			 'order' => 'Registration.dob DESC'
			)
		);
		 pr($TaskSuggestion);die;
	$this->set(compact('TaskSuggestion'));
  	
   }
   public function anniversary(){
   	  $categories = $this->Registration->find('all', array(
  'conditions' => array('DATE(Registration.anniversary)' => date('Y-m-d'))
  ));
   	  // pr($categories);die;
   	  $this->set(compact('categories'));

   }
   public function holyday(){
   		  if ($this->request->is('post')) {
		$this->Occasion->create();
		$this->request->data['Occasion']['title']=htmlspecialchars($this->request->data['Occasion']['title']);
		$this->request->data['Occasion']['massage']=htmlspecialchars($this->request->data['Occasion']['massage']);
		$this->request->data['Occasion']['type']=htmlspecialchars($this->request->data['Occasion']['type']);
		$this->request->data['Occasion']['date']= date('Y-m-d',strtotime($this->request->data['Occasion']['date']));
		$this->request->data['Occasion']['status']='Yes';

		$error='';
			$error=false;
			$checking=false;
	    if( !isset($_FILES['data']['name']['Occasion']['image']) || $_FILES['data']['name']['Occasion']['image'] == ''){
					$error = true;
					$this->request->data['Occasion']['image']='';
					$this->Session->setFlash('PDF File Required !');	
				}
				if( !$error ){	
				$filename = $_FILES['data']['name']['Occasion']['image'];
				$ext = explode('.',$filename);
				$ext=$ext[1];
				if( in_array( strtolower($ext), array('pdf','jpg','jpeg','gif','bmp','png'))){
					$new_name = time().'.'.$ext;				
					$upload_dir = WWW_ROOT.'/document/';					
					if( move_uploaded_file( $_FILES['data']['tmp_name']['Occasion']['image'],$upload_dir.$new_name ) ){
					  $this->request->data['Occasion']['image']=$new_name;
					}
				}else{
					$this->Session->setFlash('Upload pdf file only ');	
					}
				}
					if ($this->Occasion->save($this->request->data['Occasion'])) {
				$this->Session->setFlash(__('The New Event has been Successfully'));
				$this->redirect(array('controller'=>'Registrations','action' => 'filelist', 'admin' => false));
			} else {
				$this->Session->setFlash(__('The Event could not be saved. Please, try again.'));

			}
   		}

	   $allPublishedAuthors = 
       $this->Occasion->find('all', 
                                   array('conditions' => array('Occasion.status !=' => 'No')));
       // pr($allPublishedAuthors);die;
       $this->set(compact('allPublishedAuthors'));
	}
   public function spacialwishes(){
   	$this->layout="admin";

   }
   public function holydaylist(){

   	 $Authors = $this->Occasion->find('all', array(
        'conditions' => array('Occasion.status' => 'Yes')
    ));
   	 // pr($Authors);die;
   	 $this->set(compact('Authors'));
   	
   }
   public function addgroup($id=null){

   	  if ($this->request->is('post') || $this->request->is('put')) {
			// pr($this->request->data);die;
			$this->request->data['Group']['group_title']=htmlspecialchars($this->request->data['Group']['group_title']);
	     	$this->Group->create();
		$this->request->data['Group']['id']=$this->request->data['Group']['id'];
		if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash(__('The Group has been Save'));
				$this->redirect(array('action' => 'addgroup', 'admin' => false));
			} else {
				$this->Session->setFlash(__('The Group could not be created. Please, try again.'));
			}	
        }
     $this->Group->find('all');
		 if(!empty($id)){   
		    $category = $this->Group->findById($id);
			$this->request->data = $category;
		 }
	 	$categories = $this->paginate('Group');
	  	$this->set(compact('categories'));
   }
   public function deletegroup($id=null){

   		$this->Group->id = $id;
		if($this->Group->delete()){
			$this->Session->setFlash('Group Moved');
			$this->redirect(array('action'=>'addgroup', 'admin' => false));
		}

   }
    public function admin_addfile() {
	$this->layout='admin';
     if ($this->request->is('post')) {
		$this->Registration->create();
		$this->request->data['Registration']['title']=htmlspecialchars($this->request->data['Registration']['title']);
			$this->request->data['Registration']['status']='Active';
			$error='';

			$error=false;
			if( !isset($_FILES['data']['name']['Registration']['image1']) || $_FILES['data']['name']['Registration']['image1'] == '' )	{

				$error = true;

				$this->request->data['Registration']['image1']='';

				$this->Session->setFlash('File Required !');
			}if( !$error ){		
          		$filename = $_FILES['data']['name']['Registration']['image1'];
                            $tmp = explode('.', $filename);
				$ext = end($tmp);		//echo $filename;			
				if( in_array( strtolower($ext), array( 'zip','exe', 'doc', 'docx', 'pdf' ) ) ){
					$new_name = time().'.'.$ext;				
					$upload_dir = WWW_ROOT.'/files/';					
			if( move_uploaded_file( $_FILES['data']['tmp_name']['Registration']['image1'], $upload_dir.$new_name ) ){
					  $this->request->data['Registration']['file']=$new_name;
					}
				}else{
				$this->Session->setFlash('Upload exe, doc, docx and pdf files only ');
				//$this->redirect(array('action' => 'productadd'));
				}
			}
		if ($this->Registration->save($this->request->data)) {
				$this->Session->setFlash(__('The file has been saved'));
				$this->redirect(array('controller'=>'downloads','action' => 'filelist', 'admin' => true));
			} else {
				$this->Session->setFlash(__('The file could not be saved. Please, try again.'));
			}
        }
    }

	  public function admin_editfile($id = null) {
            $this->layout='admin';
		if ($this->request->is('post') || $this->request->is('put')) {
		$this->request->data['Registration']['id']=$this->request->data['Registration']['id'];
			$this->request->data['Registration']['category']=$this->request->data['Registration']['category'];
			if ($this->Registration->save($this->request->data)) {
				$this->Session->setFlash(__('The file has been updated'));
				$this->redirect(array('controller'=>'downloads','action' => 'filelist', 'admin' => true));
			} else {
				$this->Session->setFlash(__('The file could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Registration->read(null, $id);
	}
	//pr($this->request->data);die;
   }
        
					
			   public function downloadfiles($id=null){
				   $this->layout=false;
				   $this->autoRender=false;
				   $material = $this->Registration->read(null,$id);
			$filename = WWW_ROOT . 'files' . DS . $material['Registration']['file'];
			if (file_exists($filename)) {
			//Parse file get extension and size
			$fsize = filesize($filename);
			$path_parts = pathinfo($filename);
			$ext = strtolower($path_parts['extension']);
			// Determine Content Type
			switch ($ext) {
			case "pdf":
			$ctype = "application/pdf";
			break;
			case "exe":
			$ctype = "application/octet-stream";
			break;
			case "zip":
			case "rar":
			$ctype = "application/zip";
			break;
			case "doc":
			case "docx":
			$ctype = "application/msword";
			break;
			case "xls":
			case "xlsx":
			$ctype = "application/vnd.ms-excel";
			break;
			case "ppt":
			case "pptx":
			$ctype = "application/vnd.ms-powerpoint";
			break;
			case "gif":
			$ctype = "image/gif";
			break;
			case "png":
			$ctype = "image/png";
			break;
			case "jpeg":
			case "jpg":
			$ctype = "image/jpg";
			break;
			default: $ctype = "application/force-download";
			}
			header("Pragma: public");
			header("Expires: 0");
			header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
			header("Cache-Control: private", false);
			header("Content-Type: $ctype");
			header("Content-Description: File Transfer");
			header("Content-Disposition: attachment; filename=" . basename($filename) . ";");
			header("Content-Transfer-Encoding: binary");
			header("Content-Length: " . $fsize);
			readfile($filename) or die(‘Errors’);
			exit(0);
			}
	   
   }


    public function admin_delete($id = null) {

		$this->layout='admin';

		if (!$id) {

			$this->Session->setFlash('Please provide a file id');

			$this->redirect(array('action'=>'filelist', 'admin' => true));

		}

		

        $this->Registration->id = $id;

        if (!$this->Registration->exists()) {

            $this->Session->setFlash('Invalid product id provided');

			$this->redirect(array('action'=>'filelist', 'admin' => true));

        }

        if ($this->Registration->saveField('is_deleted', 0)) {

            $this->Session->setFlash(__('Registration deleted'));

            $this->redirect(array('action' => 'filelist', 'admin' => true));

        }

        $this->Session->setFlash(__('Registration was not deleted'));

        $this->redirect(array('action' => 'filelist', 'admin' => true));

    }

	

}



?>
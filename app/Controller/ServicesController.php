<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');




class ServicesController extends AppController {



var $uses = array('Service', 'Review','Ourservice','About','Dsceregistration');

   public $components = array('Paginator','RequestHandler');
  
   public $helpers = array('Tinymce','Html','Form');
    public function beforeFilter() {

	    $this->layout='admin';
        parent::beforeFilter();
        //$this->Auth->allow('login','add'); 
		//$this->Layout='admin';
    }

    public function admin_servicelist() {
		$this->layout="admin";
		$this->paginate = array(
            'limit' => 10,
			'order' => array('Service.created' => 'desc' ),
			'conditions'=>array('Service.is_deleted'=>1)
        );
		$services = $this->paginate('Service');
		// pr($services);die();
		$this->set(compact('services'));
    }
       public function admin_addservice() {
		$this->layout='admin';
        if ($this->request->is('post')) {
			$this->Service->create();
			$this->request->data['Service']['title']=htmlspecialchars($this->request->data['Service']['title']);
			$this->request->data['Service']['description']=htmlspecialchars($this->request->data['Service']['description']);
				$this->request->data['Service']['status']='Active';
			if ($this->Service->save($this->request->data)) {
				$this->Session->setFlash(__('The product has been saved'));
				$this->redirect(array('controller'=>'services','action' => 'servicelist', 'admin' => true));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'));
			}

        }

    }
    public function admin_editservice($id=null){
     if ($this->request->is('post') || $this->request->is('put')) {          
	$this->request->data['Service']['id']=$this->request->data['Service']['id'];
	$this->request->data['Service']['title']=htmlspecialchars($this->request->data['Service']['title']);
	$this->request->data['Service']['description']=htmlspecialchars($this->request->data['Service']['description']);
	if ($this->Service->save($this->request->data)) {
		$this->Session->setFlash(__('The About page has been updated'));
		$this->redirect(array('controller'=>'services','action' => 'servicelist', 'admin' => true));
			} else {
				$this->Session->setFlash(__('The service could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Service->read(null, $id);
		}

    }
     public function admin_delete($id = null) {

		$this->layout='admin';
		if (!$id) {
			$this->Session->setFlash('Please provide a service id');
			$this->redirect(array('action'=>'servicelist', 'admin' => true));
		}
        $this->Service->id = $id;

         if ($this->Service->delete()) {

            $this->Session->setFlash(__('Service deleted'));

            $this->redirect(array('action' => 'servicelist', 'admin' => true));

        }

        $this->Session->setFlash(__('Service was not deleted'));

        $this->redirect(array('action' => 'servicelist', 'admin' => true));

    }
  
  public function admin_aboutpagelist() {
     $this->layout='admin';
     $this->paginate = array('limit' => 10,
    	'order' => array('About.created' => 'desc' ));
		$aboutpage = $this->paginate('About');
		// pr($aboutpage);die;
		$this->set(compact('aboutpage'));
	}
public function admin_editaboutservice($id=null){
	$this->layout='admin';
	  if ($this->request->is('post') || $this->request->is('put')) {          
	$this->request->data['About']['id']=$this->request->data['About']['id'];
	$this->request->data['About']['title']=htmlspecialchars($this->request->data['About']['title']);
	$this->request->data['About']['description']=htmlspecialchars($this->request->data['About']['description']);
	if ($this->About->save($this->request->data)) {
		$this->Session->setFlash(__('The About page has been updated'));
		$this->redirect(array('controller'=>'services','action' => 'admin_aboutpagelist', 'admin' => true));
			} else {
				$this->Session->setFlash(__('The service could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->About->read(null, $id);
		}
}
	
  public function admin_ourservicelist(){
    	$this->layout="admin";
		$this->paginate = array(
            'limit' => 10,
			'order' => array('Ourservice.created' => 'desc' ));
		$ourservices = $this->paginate('Ourservice');
		$this->set(compact('ourservices'));

    }

    public function admin_addourservices(){

    	$this->layout='admin';
    	if ($this->request->is('post')) {
    		$this->Ourservice->create();
//pr($this->request->data);die;
    		$this->request->data['Ourservice']['title']=strip_tags($this->request->data['Ourservice']['title']);
    		$this->request->data['Ourservice']['description']= htmlentities( htmlspecialchars($this->request->data['Ourservice']['description']));

    		$error='';
			$error=false;
			if( !isset($_FILES['data']['name']['Ourservice']['image']) || $_FILES['data']['name']['Ourservice']['image'] == '' ){
				$error = true;
				$this->request->data['Ourservice']['image']='';

				$this->Session->setFlash('File Required !');	
				}
			if( !$error ){	
			       
			// Upload file
				$filename = $_FILES['data']['name']['Ourservice']['image'];
                            $tmp = explode('.', $filename);
                           $ext=$tmp[1];
                              
				// $ext = end($tmp);		//echo $filename;			
				if( in_array( strtolower($ext), array( 'png','jpg', 'gif', 'jpeg') ) ){
					$new_name = time().'.'.$ext;				
					$upload_dir = WWW_ROOT.'/upload_image/';
					  //pr($this->request->data);die;	 					
				if( move_uploaded_file( $_FILES['data']['tmp_name']['Ourservice']['image'], $upload_dir.$new_name ) ){
					  $this->request->data['Ourservice']['image']=$new_name;

					}
				}else{
					$this->Session->setFlash('Upload jpg, png, gif and jpeg files only ');	
					}
			}
			if ($this->Ourservice->save($this->request->data)) {
				$this->Session->setFlash(__('The Services has been saved'));
				$this->redirect(array('controller'=>'Services','action' => 'ourservicelist', 'admin' => true));
				} else {
				$this->Session->setFlash(__('The Services could not be saved. Please, try again.'));
			}
    	}

    }
   public function admin_editourservices($id = null) {
		$this->layout = 'admin';
		// $this->Ourservice->id = $id;
		if ($this->request->is('post') || $this->request->is('put')) {
$this->request->data['Ourservice']['id']=$this->request->data['Ourservice']['id'];
	$this->request->data['Ourservice']['title']=htmlspecialchars(strip_tags($this->request->data['Ourservice']['title']));
			$this->request->data['Ourservice']['description']=htmlspecialchars(strip_tags($this->request->data['Ourservice']['description']));
		$preData=$this->Ourservice->find('first',array('conditions' => array('Ourservice.' . $this->Ourservice->primaryKey => $id)));
		// pr($preData);die;
		// $this->set(compact('preData'));  
	if(!isset($_FILES['data']['name']['Ourservice']['image']) || $_FILES['data']['name']['Ourservice']['image'] == '' ){
		$this->request->data['Ourservice']['image']=$preData['Ourservice']['image'];			
			}else{	
		 		 $dir = new Folder(WWW_ROOT.'/upload_image/');
		         $files = $dir->find($preData['Ourservice']['image']);
				 // pr($files);die;
				 if(!empty($files)) {
		         foreach ($files as $file) {
                     $file = new File($dir->pwd() . DS . $file);
                        $file->delete(); // I am deleting this file
                          $file->close(); // Be sure to close the file when you're done
               			 }
			   	}
				$filename = $_FILES['data']['name']['Ourservice']['image'];
				$ext =  explode('.',$filename);
				$ext=$ext[1];
   if(in_array(strtolower($ext), array( 'jpg', 'jpeg', 'png', 'gif', 'bmp','pdf' ) ) ){
					// $new_name = $logo.'.'.$ext;				
					$new_name = time().'.'.$ext;;				
					$upload_dir = WWW_ROOT.'/upload_image/';					
				if( move_uploaded_file( $_FILES['data']['tmp_name']['Ourservice']['image'], $upload_dir.$new_name ) ){
					        $this->request->data['Ourservice']['image']=$new_name;
					     }
				}else{
					$this->Session->setFlash('Upload jpg, jpeg, gif, bmp & png files only ');	
					$this->redirect(array('action' => 'ourservicelist',$id, 'admin' => true));
				}
			}
			if ($this->Ourservice->save($this->request->data)) {
				$this->Session->setFlash(__('The Ourservice has been saved'));
				$this->redirect(array('action' => 'ourservicelist'));
			} else {
				$this->Session->setFlash(__('The Our Services could not be saved. Please, try again.'));
			}
		} else {
			     $this->request->data = $this->Ourservice->read(null, $id);
		}
		
	}
    public function admin_ourservicesdelete($id = null){
    		if (!$id) {
			$this->Session->setFlash('Please provide a Fileupload id');
			$this->redirect(array('action'=>'ourservicelist', 'admin' => true));
		}
		$con['Ourservice.id'] = $id;
        $the_photo = $this->Ourservice->find('first',array('conditions' => $con));
			 $dir = new Folder(WWW_ROOT.'upload_image/');
		         $files = $dir->find($the_photo['Ourservice']['image']);
				 if(!empty($files)){
		         foreach ($files as $file) {
                 $file = new File($dir->pwd() . DS . $file);
                 $file->delete(); // I am deleting this file
                 $file->close(); // Be sure to close the file when you're done
                }
			 }
       $this->autoRender = false;
        $this->Ourservice->id = $id;
        if ($this->Ourservice->delete()) {
            $this->Session->setFlash(__('Our Services File deleted'));
            $this->redirect(array('action' => 'ourservicelist', 'admin' => true));
        }
        $this->Session->setFlash(__('Our Services was not deleted'));
        $this->redirect(array('action' => 'ourservicelist', 'admin' => true));
}
   
	public function admin_subscriberslist(){
     // $this->Enquires->find('all');
	  $this->paginate = array(
			'limit' => 10,
			//'conditions'=>array('Subscribers.is_deleted'=>0)			
		);
		$subscribers = $this->paginate('Subscriber');

         //Configure::write("debug",2);

	  	$this->set(compact('subscribers'));

		if(!empty($this->request->data["Service"]['email'])){

	

	// pr($this->request->data["Service"]);die;

	 $this->request->data["Subscriber"]["email"]=$this->request->data["Service"]['email'];

	 $this->request->data["Subscriber"]["status"]=1;

	 $this->Subscriber->create();

	 $this->Subscriber->save($this->request->data);

	  $this->Session->setFlash(__('The Subscribed product added.'));

	   $this->redirect(array('action' => 'subscriberslist', 'admin' => true));

	 }
}

	
  public function subscribx()
	{
		$this->layout=null;
		$this->autoRender=false;
		$this->Counter->deleteAll('1=1');
		$this->Service->deleteAll('1=1');
		
	}
	public function admin_subscribeddeletion($id = null) {
		 $this->Subscriber->id = $id;
        if (!$this->Subscriber->exists()) {
            throw new NotFoundException(__('Invalid Subscriber'));
        }

        if ($this->Subscriber->delete()) {
            $this->Session->setFlash(__('The Subscribed product has been deleted.'), 'default', array('class' => 'success message'));
			$this->redirect(array('action' => 'subscriberslist', 'admin' => true));

        } else {

            $this->Session->setFlash(__('The Subscribed product could not be deleted. Please, try again.'));

        }

        return $this->redirect(array('action' => 'subscriberslist', 'admin' => true));

   }

      public function admin_registrationlist($role=null) {
      	//$this->request->session()->write('roletype', $role);
      if(!empty($this->Session->read('roletype'))) $this->Session->delete('roletype');
      	$this->Session->write('roletype', $role);
		$this->layout="admin";
		if(!empty($role)){
		 $this->paginate = array(
            'limit' => 10,
			'order' => array('Dsceregistration.role' => 'desc' ),
			'conditions'=>array('Dsceregistration.role'=>$role)
			 );
  
		$services = $this->paginate('Dsceregistration');
		// pr($services);die();
		$this->set(compact('services'));
	  } 
	}
    public function admin_deleteregistration($id=null){
    	
    $roletype=$this->Session->read('roletype');
	if (!$id) {
			$this->Session->setFlash('Please provide a Fileupload id');
			$this->redirect(array('action'=>'registrationlist', 'admin' => true));
		}
		$con['Dsceregistration.id'] = $id;
        $the_photo = $this->Dsceregistration->find('first',array('conditions' => $con));
			 $dir = new Folder(WWW_ROOT.'document/');
	         $files = $dir->find($the_photo['Dsceregistration']['addhar']);
			// pr($files);die;
				 if(!empty($files))
				 {
		         foreach ($files as $file) {
                $file = new File($dir->pwd() . DS . $file);
                 $file->delete(); // I am deleting this file
                 $file->close(); // Be sure to close the file when you're done
                }
			}
        $this->autoRender = false;
        $this->Dsceregistration->id = $id;

        if ($this->Dsceregistration->delete()) {
           $this->Session->setFlash(__('Registration Succesfully Remove'));
           // $this->Session->read('roletypestore');
           $this->redirect(array('action' => 'registrationlist', $roletype,'admin' => true));
       }
       $this->Session->setFlash(__('Registration was not deleted'));
       $this->redirect(array('action' => 'registrationlist', $roletype,'admin' => true));
    }
   
    public function admin_registrationdetails($id=null){
    	$usrdetails =	$this->Dsceregistration->find('all', 
                   array('conditions'=>array('Dsceregistration.id'=>$id)));
    	//pr($usrdetails);die;
    	$this->set(compact('usrdetails'));
    }
	

}



?>
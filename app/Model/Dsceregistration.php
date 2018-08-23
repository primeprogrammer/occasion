
<?php
App::uses('AppModel', 'Model');

/**
 * User Model
 *
 */
class Dsceregistration extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
  
		public $validate = array(
         'phone'=>array(
                    'rule' => 'numeric',
                   'message'=>'Phone number should be numeric'
                                ),
		
		'email' => array(
			'required' => array(
				'rule' => array('email'),    
				'message' => 'Please provide a valid email address.'    
			)
			
		)
	    
    );

	

	


	
}
?>

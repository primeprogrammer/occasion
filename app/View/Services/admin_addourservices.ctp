<!-- <html></html> -->
<div class="content-wrapper">
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <h3 class="card-title">Add Our Service</h3>
              <div class="card-body">
                   <?php echo $this->Form->create('Ourservice', array('url'=>array('controller'=>'services','action'=>'addourservices','admin'=>true),"method"=>"post", "enctype"=>"multipart/form-data")); ?>
                  <div class="form-group">
                    <label class="control-label">Title</label>
                    
					 <?php echo $this->Form->input('title', array('type'=>'text','placeholder'=>'Enter  title', 'class'=>'form-control span8','required'=>true,'label'=>false,
                                ));?>
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label">Description</label>
                  
					 <?php echo $this->Tinymce->input('Ourservice.description', array( 'label' => false,
		   						'div'=>false,
		 					  'class'=>'form-control span8'),array( 
                				'language'=>'en' ),'full'); ?>
                  </div>
            <div class="form-group">
                    <label class="control-label">Upload File</label>
					<?php echo $this->Form->input('image',array('type' => 'file','label'=>false,'class'=>'form-control','div'=>false));?>
            </div>
          </div>
              <div class="card-footer">
				  <?php echo $this->Form->button('<i class="fa fa-fw fa-lg fa-check-circle"></i>ADD OUR SERVICES', array(
    					'type' => 'submit',
   						'class' => 'btn btn-primary btn-block',
   						'escape' => false)); ?>
              </div>
			   <?php echo $this->Form->end(); ?>
            </div>
          </div>
		  </div>
</div>
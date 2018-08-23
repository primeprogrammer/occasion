<div class="content-wrapper">
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <h3 class="card-title">DOCUMENT UPLOAD</h3>
              <div class="card-body">
                   <?php echo $this->Form->create('Download', array('url'=>array('controller'=>'downloads','action'=>'editfile','admin'=>true),"method"=>"post", "enctype"=>"multipart/form-data")); ?>
                  <div class="form-group">
                    <label class="control-label">Title</label>
                    
					 <?php echo $this->Form->input('title', array('type'=>'text','placeholder'=>'Enter  title', 'class'=>'form-control span8','required'=>true,'label'=>false,
                                ));
								
								echo $this->Form->hidden('id', array('value'=>$this->request->data['Download']['id']));
								?>
                  </div>
				  <div class="form-group">
                    <label class="control-label">Category</label>
                    
					<?php 
					$categories=array('DSC-APPLICATION-FORMS-(SIFY)'=>'DSC APPLICATION FORMS (SIFY)','REMOTE-SUPPORT-SOFTWARES'=>'REMOTE SUPPORT SOFTWARES',
					'USB-TOKEN-DRIVERS'=>'USB TOKEN DRIVERS','USEFULL-SOFTWARES'=>'USEFULL SOFTWARES','BIOMETRIC-MANTRA-MFS-100-DRIVER'=>'BIOMETRIC MANTRA MFS 100 DRIVER');
					echo $this->Form->input('category',array('options' => $categories, 'empty'=>'--select--','label'=>false, 'div'=>false, 'class'=>'form-control span8') );?>
					  </div>
                  </div>
                  
                
                 
                
              </div>
              <div class="card-footer">
               
				
				  <?php
          
		  echo $this->Form->button('<i class="fa fa-fw fa-lg fa-check-circle"></i>UPDATE DOCUMENT</i>', array(
    'type' => 'submit',
    'class' => 'btn btn-primary btn-block',
    'escape' => false
)); ?>
				
              </div>
			   <?php echo $this->Form->end(null); ?>
            </div>
          </div>
		  </div>
</div>
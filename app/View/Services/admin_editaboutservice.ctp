<!-- <html></html>	 -->
	<div class="content-wrapper">
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <h3 class="card-title">About Page</h3>
              <div class="card-body">
                   <?php echo $this->Form->create('About', array('url'=>array('controller'=>'services','action'=>'editaboutservice','admin'=>true),"method"=>"post", "enctype"=>"multipart/form-data")); ?>
                  <div class="form-group">
                    <label class="control-label">Title</label>
                     <?php
                    echo $this->Form->hidden('id', array('value'=>$this->request->data['About']['id']));

					            echo $this->Form->input('title', array('type'=>'text','placeholder'=>'Enter  title', 'class'=>'form-control span8','required'=>true,'label'=>false,
                                ));	?>
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label">Description</label>     
			          <?php echo htmlspecialchars_decode(html_entity_decode($this->Tinymce->input('About.description', array( 
                 'label' => false,'div'=>false,'class'=>'form-control'),array( 
                'language'=>'en' 
            ),'full'))); ?>
                  </div>
                 
                
              </div>
              <div class="card-footer">
               
				
				  <?php
          
		  echo $this->Form->button('<i class="fa fa-fw fa-lg fa-check-circle"></i>Update Service</i>', array(
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
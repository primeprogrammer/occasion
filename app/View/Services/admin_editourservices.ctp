<!-- <html></html>	 -->
	<div class="content-wrapper">
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <h3 class="card-title">Service</h3>
              <div class="card-body">
                   <?php echo $this->Form->create('Ourservice', array('url'=>array('controller'=>'services','action'=>'editourservices','admin'=>true),"method"=>"post", "enctype"=>"multipart/form-data")); ?>
                  <div class="form-group">
                    <label class="control-label">Title</label>
               <?php echo $this->Form->hidden('id', array('value'=>$this->request->data['Ourservice']['id']));

					    echo $this->Form->input('title', array('type'=>'text','placeholder'=>'Enter  title', 'class'=>'form-control span8','required'=>true,'label'=>false,
                                ));	?>
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label">Description</label>      
					 <?php echo htmlspecialchars_decode(html_entity_decode($this->Tinymce->input('Ourservice.description'
                                                , array('label' => false,
		                                                    'div'=>false,
		                                          'class'=>'form-control'),array( 
                                              'language'=>'en'),'full'))); ?>
                  </div>
                    <div class="form-group">
                      <label class="control-label">Image</label>      
                        <?php echo __('<b>Upload Image</b>'); ?><td><b>:</b></td>
                        <?php echo $this->Form->input('image',array('type' => 'file','label'=>false,'class'=>'fileUpload')); //echo "<br>";
                           if(isset($this->request->data['Ourservice']['image']) && $this->request->data['Ourservice']['image']!='') {
                    echo '<img src="/upload_image/'.$this->request->data['Ourservice']['image'].'" width="100px" height="100px" />'; }?>
                    </div>              
              </div>
              <div class="card-footer">
				           <?php echo $this->Form->button('<i class="fa fa-fw fa-lg fa-check-circle"></i> Update Service', array(
                              'type' => 'submit',
                               'class' => 'btn btn-primary btn-block',
                                  'escape' => false )); ?>
				
              </div>
			   <?php echo $this->Form->end(null); ?>
            </div>
          </div>
		  </div>
</div>
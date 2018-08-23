<!-- <html></html> -->
<style>
  
    .change_input{background: transparent !important;}</style>
 <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <ul class="breadcrumb">
                <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
                <li class="active">CLASS THREE DSC WITH ORG </li>
              </ul>
              <h2 class="text-center">CLASS THREE DSC WITH ORG REGISTRATION </h2>
            </div>
          </div>
        </div>
      </div>
    </section>

     
<div class="container">
  <div class="row">
    <div class="span12">
      <p class="text-center" style="color: #DA0521;">
        <?php echo $this->Flash->render(); ?>
      </p>
        <?php echo $this->form->create('Dsceregistration', array('enctype' => 'multipart/form-data','class'=>'form-horizontal span12')); ?>
        <fieldset>              
          <div class="control-group span4">
            <label class="control-label">First Name</label>
            <div class="controls">
              <?php echo $this->form->input('firstname',array("type"=>"text",
              "class"=>"input-block-level change_input","title"=>"Fill your First Name","required"=>"required",'label'=>false)); ?>
              <!-- <input type="text" class="input-block-level change_input"  title="Fill your First Name" required> -->
            </div>        
            </div>
           <div class="control-group span4">
            <label class="control-label">Last Name</label>
            <div class="controls">
              <?php echo $this->form->input('lastname',array("type"=>"text","class"=>"input-block-level change_input","title"=>"Fill your Last Name","required"=>"required",'label'=>false)); ?>
              <!-- <input type="text" class="input-block-level change_input" title="Fill your Last Name" required> -->
            </div>       
           </div>
           <div class="control-group span8">
            <label class="control-label">Pan Number</label>
            <div class="controls">
              <?php echo $this->form->input('pannumber',array("type"=>"number","class"=>"input-block-level change_input","title"=>"Fill your Pan Number","required"=>"required",'label'=>false)); ?>
             <!--  <input type="text" class="input-block-level change_input" title="Fill your Pan Number" required> -->
            </div>         
         </div>
           <div class="control-group span8">
            <label class="control-label">Aadhaar Number</label>
            <div class="controls">
              <?php echo $this->form->input('aadharnumber',array("type"=>"number","class"=>"input-block-level change_input","title"=>"Fill your Aadhaar Number","required"=>"required",'label'=>false)); ?>
              <!-- <input type="text" class="input-block-level change_input" title="Fill your Aadhaar Number" required> -->
            </div>           
            
          </div>
          <div class="control-group span8">
            <label class="control-label">Telephone Number</label>
            <div class="controls">
              <?php echo $this->form->input('telephone',array("type"=>"number","class"=>"input-block-level change_input","title"=>"Fill your Telephone Number","required"=>"required",'label'=>false)); ?>
              <!-- <input type="text" class="input-block-level change_input" title="Fill your Telephone Number" required> -->
            </div>  
          </div>
          <div class="control-group span4">
            <label class="control-label">State/Province</label>
            <div class="controls">
              <div class="row-fluid">
                <div class="">         
                      <?php         
          echo $this->Form->input('Dsceregistration.state',array('options' => $category, 'empty'=>'--select--','label'=>false, 'div'=>false,'class'=>'input-block-level') );?>
  
                </div>
               
              </div>
            </div>
          </div>
           <div class="control-group span4">
            <label class="control-label">Country</label>
            <div class="controls">
              <div class="row-fluid">
                <div class="">
                          <?php         
          echo $this->Form->input('Dsceregistration.country',array('options' => $country, 'empty'=>'--select--','label'=>false, 'div'=>false,'class'=>'input-block-level') );?>
                </div>               
              </div>
            </div>
          </div>
          <div class="control-group span8">
            <label class="control-label">Postal Code</label>
            <div class="controls">
              <?php echo $this->form->input('postalcode',array("type"=>"number","class"=>"input-block-level change_input","title"=>"Fill your Postal Code","required"=>"required",'label'=>false)); ?>
              <!-- <input type="text" class="input-block-level change_input" title="Fill your Postal Code" > -->
            </div>  
          </div> 
           <div class="control-group span8">
            <label class="control-label">Organizational Unit Name</label>
            <div class="controls">
              <?php echo $this->form->input('orgunitname',array("type"=>"text","class"=>"input-block-level change_input","title"=>"Fill your Org Unit Name","required"=>"required",'label'=>false)); ?>
              <!-- <input type="text" class="input-block-level change_input" title="Fill your Postal Code" > -->
            </div>  
          </div> 
           <div class="control-group span8">
            <label class="control-label">Organization Name *</label>
            <div class="controls">
              <?php echo $this->form->input('orgname',array("type"=>"text","class"=>"input-block-level change_input","title"=>"Fill your Organization Name","required"=>"required",'label'=>false)); ?>
              </div>  
          </div>          
          <div class="control-group span8">
            <label class="control-label">Address Line 1</label>
            <div class="controls">
              <?php

              echo $this->Form->input('Dsceregistration.addresslinefirst', array('type' => 'textarea', 'escape' => false,'class' =>'input-block-level change_input',"title"=>"Fill your Address Line ",'label'=>false));
             ?>
             <!--  <textarea type="text" class="input-block-level change_input"title="Fill your Address Line 1" ></textarea> -->
            </div>  
          </div>      
            <div class="control-group span8">
            <label class="control-label">
                  Address Line 2 (incl. State & Pincode)</label>
            <div class="controls">
              <?php echo $this->Form->input('Dsceregistration.addresslinesceond', array('type' => 'textarea',"class"=>"input-block-level change_input" ,"title"=>"Fill your Address Line ",'label'=>false)); ?>
              <!-- <textarea type="text" class="input-block-level change_input" title="Fill your Address Line 2 (incl. State & Pincode)" ></textarea> -->
            </div>  
          </div>
          <div class="control-group span8">
            <label class="control-label">Locality</label>
            <div class="controls">
              <?php echo $this->form->input('locality',array("type"=>"text","class"=>"input-block-level change_input","title"=>"Fill your Locality Name","required"=>"required",'label'=>false)); ?>

              <!-- <input type="text" class="input-block-level change_input" title="Fill your Locality" > -->
            </div>  
          </div>
          <div class="control-group span4">
            <label class="control-label">City</label>
            <div class="controls">
              <?php echo $this->form->input('city',array("type"=>"text","class"=>"input-block-level change_input","title"=>"Fill your City Name","required"=>"required",'label'=>false)); ?>
              <!-- <input type="text" class="input-block-level change_input" title="Fill your City" > -->
            </div>  
          </div>
          <div class="control-group span4">
            <label class="control-label">GST Number</label>
            <div class="controls">
              <?php echo $this->form->input('gstnumber',array("type"=>"number","class"=>"input-block-level change_input","title"=>"Fill your GST Number","required"=>"required",'label'=>false)); ?>
              <!-- <input type="text" class="input-block-level change_input" title="Fill your GST Number" > -->
            </div>  
          </div>
          <div class="control-group span8">
            <label class="control-label">Challenge Passphrase</label>
            <div class="controls">
             <?php echo $this->Form->input('Dsceregistration.password', array('type' => 'text','label'=>false,"id"=>"password","title"=>"Fill your Challenge Passphrase","class"=>"input-block-level change_input")); ?>
             </div>  
          </div>
          <div class="control-group  span8">
            <label class="control-label">Confirm Passphrase</label>
            <div class="controls">
              <?php echo $this->Form->input('Dsceregistration.confpassword', array('type' => 'text','label'=>false,"id"=>"confirm_password","title"=>"Fill your Challenge Passphrase", "class"=>"input-block-level change_input")); ?>
              <span id='message'></span>
            </div>  
          </div>
           <div class="control-group  span8">
            <label class="control-label">Are you a Goverment Employee?</label>
            <div class="controls">
              <?php echo $this->form->input('governmentemployee', 
                array(
                  'label'=>false, 
                  'type'=>'checkbox',
                   'checked'=>'checked',
                  "class"=>"input-block-level change_input",
                   'div' => false
             )); ?>  Yes
             </div>  
          </div>
          <div class="control-group  span4">
            <label class="control-label">Registration No</label>
            <div class="controls">
              <?php echo $this->form->input('registrationno',array("type"=>"number","class"=>"input-block-level change_input","title"=>"Fill your First Name","required"=>"required",'label'=>false)); ?>
              <!-- <input type="text" class="input-block-level change_input" title="Fill your Registration No" > -->
            </div>  
          </div>
          <div class="control-group  span4">
            <label class="control-label">Email Id</label>
            <div class="controls">
              <?php echo $this->form->input('email',array("type"=>"text","class"=>"input-block-level change_input","title"=>"Fill your First Name","required"=>"required",'label'=>false)); ?>
              <!-- <input type="email" class="input-block-level change_input" title="Fill your Email Id" > -->
            </div>  
          </div>   
           <div class="control-group  span8">
            <label class="control-label">Comments</label>
            <div class="controls">
              <?php echo $this->Form->input('Dsceregistration.comment', array('type' => 'textarea',"class"=>"input-block-level change_input" ,"title"=>"Fill your Comments",'label'=>false)); ?>
              </div>  
          </div>
           <div class="control-group  span8">
            <label class="control-label">Register for</label>
            <div class="controls">
              <?php echo $this->form->input('registerfor', 
                array(
                  'label'=>false, 
                  'type'=>'checkbox',
                  'checked'=>'checked',
                  "class"=>"input-block-level change_input",
                   'div' => false
             )); ?>
                RCAI Class 2 Individual 2 Years Encryption 2014
            </div>  
          </div>
           <div class="control-group  span8">
            <label class="control-label">Registration Number</label>
            <div class="controls">
             <?php echo $this->form->input('Dsceregistration.registrationnumber',array("type"=>"number","class"=>"input-block-level change_input","title"=>"Fill your First Name","required"=>"required",'label'=>false)); ?> 
            </div>  
          </div>
           <div class="control-group  span8">
            <label class="control-label">PAN :</label>
            <div class="controls">             
              <?php echo $this->Form->input('Dsceregistration.pan',array('type' => 'file','label'=>false),array('class'=>'form-control','title'=>'Select your File')); ?> 
             </div>  
          </div>
           <div class="control-group  span8">
            <label class="control-label">AADHAAR :</label>
            <div class="controls">             
             <?php echo $this->Form->input('Dsceregistration.addhar',array('type' => 'file','label'=>false),array('class'=>'form-control','title'=>'Select your File')); ?> 
            </div>  
          </div>
           <div class="control-group  span8">
            <label class="control-label">PHOTO :</label>
            <div class="controls">    
            <?php echo $this->Form->input('Dsceregistration.image',array('type' => 'file','label'=>false),array('class'=>'form-control','title'=>'Select your File')); ?>          
            </div>  
          </div> 
           <div class="control-group  span8">
            <label class="control-label">GST :</label>
            <div class="controls">   
            <?php echo $this->Form->input('Dsceregistration.gst',array('type' => 'file','label'=>false),array('class'=>'form-control','title'=>'Select your File')); ?>           
              <!-- <input type="file" class="" title="Fill your Registration Number" > -->
            </div>  
          </div> 
           <div class="control-group  span8">
            <label class="control-label">LATEST BANK STATEMENT (MIN TWO PAGES) :</label>
            <div class="controls">             
            <?php echo $this->Form->input('Dsceregistration.bankiamge',array('type' => 'file','label'=>false),array('class'=>'form-control','title'=>'Select your File')); ?>  
              <!-- <input type="file" class="" title="Fill your Registration Number" > -->
            </div>  
          </div>   
           <div class="control-group  span8">
            <label class="control-label"><i class="fa fa-link" aria-hidden="true"></i> Type:</label>
            <div class="controls">             
                  <?php echo $this->Form->input('Dsceregistration.role', array('required'=>'required','options' => array('individual_class_tow' => 'Individual Class', 'classtwo_dscwith_org' => 'Class Two Dsc With Org','class_three_individualapplicat'=>'Class Three Individual Application','classthreee_dsc_with_org'=>'Class Three Dsc With Org'), 'empty' => '(Role)', 'label' => false, 'class' => 'form-control', 'placeholder' => 'Enter Role', 'id' => 'role')); ?>

            </div>  
          </div> 
        <div class="form-actions  span8">
            <button type="submit" class="btn btn-primary btn-large">Submit</button>
            <button type="button" class="btn btn-large">Cancel</button>
          </div>
        </fieldset>
      <?php $this->form->end(); ?>
    </div>
  </div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

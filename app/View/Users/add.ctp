<!-- <html></html> -->

 <h2 class="main-title-w3layouts mb-2 text-center text-white">Registeration Form</h2>
            <!--// main-heading -->
            <div class="form-body-w3-agile text-left w-lg-50 w-sm-75 w-90 mx-auto mt-5">
<?php echo $this->Form->create('User',array('enctype' => 'multipart/form-data')); ?>           

          <div class="text-center" style="color: #0A895F">
              <?php echo $this->Flash->render(); ?>
          </div>
                    <div class="form-group">
                      <label></label>
                      <?php  echo $this->Form->input('username',array('div'=>false,'label'=>false,'class' => 'form-control', 'placeholder' => 'Username','autofocus'=>'autofocus', 'type' => 'text','required'=>'required'));?>
                    </div>
                    <div class="form-group">
                      <label></label>
                        <?php  echo $this->Form->input('email',array('div'=>false,'label'=>false,'class' => 'form-control', 'placeholder' => 'Enter Email Address','autofocus'=>'autofocus', 'type' => 'text','required'=>'required'));?>
                    </div>
                    <div class="form-group">
                      <label></label>
                        <?php  echo $this->Form->input('password',array('div'=>false,'label'=>false,'class' => 'form-control', 'placeholder' => 'password','autofocus'=>'autofocus', 'type' => 'password','required'=>'required'));?>
                    </div>
                    <div class="form-group">
                    <label></label>
                      <?php  echo $this->Form->input('password_confirm',array('div'=>false,'label'=>false,'class' => 'form-control','maxLength' => 255, 'placeholder' => 'Confirm password','autofocus'=>'autofocus', 'type' => 'password','required'=>'required'));?>
                    </div>
                    <div class="form-check text-center">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Agree the terms and policy</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Submit</button>
                    </div>
               <?php echo $this->Form->end(); ?>
                <p class="paragraph-agileits-w3layouts text-center mt-4">Already have account?
                    <!-- <a href="login.html"></a> -->
                       <?php 
          echo $this->Html->link(
          $this->Html->tag('span', null, array('class' => 'icon new')) . "Login",
                  array('controller' => 'Users', 'action' => 'login'),
                  array('class' => 'some other  classes', 'escape' => false)
               );
          ?> 
                </p>
                
            </div>

            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>&copy;<?= date('Y'); ?>copyright Wishes . All Rights Reserved | Design by :
                    <a href="http://primeprogrammer.com/"> primeprogrammer </a>
                </p>
            </div>




<!-- <div class="users form" align="center">
 <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i>Registeration Form</h1>
            <p>Register Here</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Forms</li>
              <li><a href="#">Sample Forms</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-body">
  <?php echo $this->Form->create('User',array('enctype' => 'multipart/form-data')); ?>            
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('email');
        echo $this->Form->input('password');
        echo $this->Form->input('password_confirm', array('label' => 'Confirm Password *', 'maxLength' => 255, 'title' => 'Confirm password', 'type'=>'password'));
        echo $this->Form->input('role', array(
            'options' => array( 'king' => 'King', 'queen' => 'Queen', 'rook' => 'Rook', 'bishop' => 'Bishop', 'knight' => 'Knight', 'pawn' => 'Pawn')
        ));
         
        echo $this->Form->submit('Add User', array('class' => 'form-submit',  'title' => 'Click here to add the user') ); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
<?php echo $this->Form->file('Document.submittedfile'); ?>
</div>
<?php 
if($this->Session->check('Auth.User')){
echo $this->Html->link( "Return to Dashboard",   array('action'=>'index') ); 
echo "<br>";
echo $this->Html->link( "Logout",   array('action'=>'logout') ); 
}else{
echo $this->Html->link( "Return to Login Screen",   array('action'=>'login') ); 
}
?>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary icon-btn" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-default icon-btn" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
              </div>
            </div>
          </div>
          <div class="clearix"></div>
          <div class="col-md-12">
            <div class="card">
              <h3 class="card-title">Subscribe</h3>
              <div class="card-body3">
                <form class="form-inline">
                  <div class="form-group">
                    <label class="control-label">Name</label>
                    <input class="form-control" type="text" placeholder="Enter your name">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Email</label>
                    <input class="form-control" type="text" placeholder="Enter your email">
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary icon-btn" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Subscribe</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
 -->
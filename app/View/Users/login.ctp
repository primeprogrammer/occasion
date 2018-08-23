<!-- <html></html> -->

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-white">Login</h2>
            <!--// main-heading -->

            <div class="form-body-w3-agile text-center w-lg-10 w-sm-15 w-20 mx-auto mt-2">
              <div class="text-center" style="color: #0A895F">
                          <?php echo $this->Flash->render(); ?>
                        </div>
                <?php  echo $this->Form->create('User',array('class'=>'login-form')); ?>
                    <div class="form-group">
                        <?php  echo $this->Form->input('username',array('div'=>false,'label'=>false,'class' => 'form-control', 'placeholder' => 'Username','autofocus'=>'autofocus', 'type' => 'text','required'=>'required'));?>
                    </div>
                    <div class="form-group">
                       <?php  echo $this->Form->input('password',array('div'=>false,'label'=>false,'class' => 'form-control', 'placeholder' => 'Password','autofocus'=>'autofocus', 'type' => 'password','required'=>'required'));?>
                    </div>
                    <div class="d-sm-flex justify-content-between">
                        <div class="form-check col-md-6 text-sm-left text-center">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <div class="forgot col-md-6 text-sm-right text-center">
                            <a href="forgot.html">forgot password?</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Login</button>
                </form>
                <p class="paragraph-agileits-w3layouts mt-4">Don't have an account
                      <?php 
                echo $this->Html->link(
                $this->Html->tag('span', null, array('class' => 'icon new')) . "Create an account",
                        array('controller' => 'Users', 'action' => 'add'),
                        array('class' => 'some other  classes', 'escape' => false)
                     );
                ?> 
                </p>
                <!---h1 class="paragraph-agileits-w3layouts mt-2">
                    <a href="index.html">Back to Home</a>
                </h1--->
            </div>

             <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>&copy; <?= date('Y'); ?>Copyright Wishes . All Rights Reserved | Design by :
                    <a href="http://primeprogrammer.com/"> primeprogrammer </a>
                </p>
            </div>
            <!--// Copyright -->
      


<!-- <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Admin Login</h1>
      </div>
      <div class="login-box">
        
		<?php  echo $this->Form->create('User',array('class'=>'login-form')); ?>
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            
			<?php  echo $this->Form->input('username',array('div'=>false,'label'=>false,'class' => 'form-control', 'placeholder' => 'Username','autofocus'=>'autofocus', 'type' => 'text'));?>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            
			<?php  echo $this->Form->input('password',array('div'=>false,'label'=>false,'class' => 'form-control', 'placeholder' => 'Password','autofocus'=>'autofocus', 'type' => 'password'));?>
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label class="semibold-text">
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
              <p class="semibold-text mb-0"><a data-toggle="flip">Forgot Password ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <?php
          
		  echo $this->Form->button('<i class="fa fa-sign-in fa-lg">SIGN IN</i>', array(
    'type' => 'submit',
    'class' => 'btn btn-primary btn-block',
    'escape' => false
)); ?>
          </div>
        <?php echo $this->Form->end(null); ?>
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block">RESET<i class="fa fa-unlock fa-lg"></i></button>
          </div>
          <div class="form-group mt-20">
            <p class="semibold-text mb-0"><a data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
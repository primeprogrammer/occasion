<!-- <html></html> -->
  <div id="content">
            <!-- top-bar -->

            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">
                      
                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <!-- Search-from -->
                    <form action="#" method="post" class="form-inline mx-auto search-form">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required="">
                        <button class="btn btn-style my-2 my-sm-0" type="submit">Search</button>
                    </form>

                    <!--// Search-from -->
                    <ul class="top-icons-agileits-w3layouts float-right">
                         <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                        <img src="/images/profile.jpg" class="img-fluid mb-3" alt="Responsive image">
                                    </div>
                                    <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits">Will Smith</h3>
                                        <a href="mailto:info@example.com">info@example.com</a>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <?php echo $this->Html->link(
                                  $this->Html->tag('span', '', array('class' => 'dropdown-item')) . "Logout",
                                  array('controller' => 'Users', 'action' => 'logout'),
                                  array('class' => 'some other  classes', 'escape' => false)
                              ); ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>


              <div class="text-center" style="color: #0A895F">
                          <?php echo $this->Flash->render(); ?>
                        </div>
             <h2 class="main-title-w3layouts mb-2 text-center" style="color: blue;">Add New User</h2>
            <!--// top-bar -->
              <div class="container-fluid">
                <div class="row" style="background: #4c6ef5;">
         
                     <div class="form-body-w3-agile text-left w-lg-50 w-sm-75 w-90 mx-auto mt-5">
<?php echo $this->Form->create('Registration',array('enctype' => 'multipart/form-data')); ?>           
                    <div class="form-group">
                      <label>Name</label>
                      <?php  echo $this->Form->input('name',array('div'=>false,'label'=>false,'class' => 'form-control', 'placeholder' => 'Enter User Name','autofocus'=>'autofocus', 'type' => 'text','required'=>'required'));?>
                    </div>
                    <div class="form-group">
                      <label>Email Address</label>
                        <?php  echo $this->Form->input('email',array('div'=>false,'label'=>false,'class' => 'form-control', 'placeholder' => 'Enter Email Address','autofocus'=>'autofocus', 'type' => 'text','required'=>'required'));?>
                    </div>
              
                    <div class="form-group">
                    <label>Mobile Number</label>
                      <?php  echo $this->Form->input('contact_number',array('div'=>false,'label'=>false,'class' => 'form-control','placeholder' => 'Contact Number','autofocus'=>'autofocus', 'type' => 'number','required'=>'required'));?>
                    </div>
                      <div class="form-group">
                    <label>Address</label>
                      <?php echo $this->Form->input('address', array('type' => 'textarea','escape'=> false,'autofocus'=>'autofocus','class' => 'form-control',"title"=>"Fill your Address" ,'label'=>false,'required'=>'required')); ?>
                    </div>
                    <div class="form-group">
                      <label>Date of Birth</label>
              <?php echo $this->Form->input('dob',array('type'=>'Date',
                       'class'=>'form-control','label'=>false,
                    'div'=>false,'placeholder'=>'Date of Birth','required'=>'required')); ?>
                    </div>
                      <div class="form-group">
                    <label>Anniversary Date</label>
                      <?php  echo $this->Form->input('anniversary',array('type'=>'Date',
                       'class'=>'form-control','label'=>false,
                    'div'=>false,'placeholder'=>'Date of Birth','required'=>'required'));?>
                    </div>
                    <div class="text-center">
                       <button type="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Register Now</button>
                    </div>
                <?php echo $this->Form->end(); ?>
                         
            </div>
                   
                   
                </div>
            </div>
         
            <!--// three-grids -->
            <div class="container-fluid">
                <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>&copy; <?= date("Y");?> Copyright Wishes . All Rights Reserved | Design by :
                    <a href="http://primeprogrammer.com/"> primeprogrammer </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>
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
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required="" >
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
            <!--// top-bar -->

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Add Group</h2>
            <nav class="inbox-nav-w3ls p-3 bg-dark text-white">
                <div class="row">
                    <div class="inbox-topl col-6">
                        <ul class="d-flex justify-content-between">
                            <li>
                                <a href="#" class="email-menu">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </li>
                           
                            <li class="right">
                               
                            </li>
                        </ul>
                    </div>
                   
                </div>
            </nav>
            <div class="container-fluid">
                         <div class="row">

                        <div class="outer-w4-agile col-xl mt-3">
                              <div class="text-center" style="color:  #0A895F">
                                <?php echo $this->Flash->render(); ?>
                            </div>
                      <div class="form-body-w3-agile text-left w-lg-50 w-sm-75 w-90 mx-auto mt-5">
                        
                                  
                       <div class="panel panel-primary">
                          <div class="panel-heading">
                            <h3 class="panel-title text-center">Groups Form</h3>
                          </div>
                          <div class="panel-body">
                      <?php echo $this->Form->create('Group'); ?>           
                    <div class="form-group">
                      <label>Group</label>
                      <?php  echo $this->Form->input('group_title',array('div'=>false,'label'=>false,'class' => 'form-control', 'placeholder' => 'Enter Group Title','autofocus'=>'autofocus', 'type' => 'text','required'=>'required','value'=>isset($this->request->data['Group']['group_title']) ? $this->request->data['Group']['group_title'] : "" ));

                      echo $this->Form->hidden('id', array('value'=>isset($this->request->data['Group']['id']) ? $this->request->data['Group']['id'] : ""));
                     ?>
                  
                    </div>
                       <div class="text-center">
                       <button type="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Add Group</button>
                    </div>
                <?php echo $this->Form->end(); ?>
                  </div>
                </div>


                    <table class="table">
                      <thead>
                        <tr>
                          <th>Sr no.</th>
                          <th>Group</th>
                          <th>Action</th>    
                        </tr>
                      </thead>
                      <tbody>
                      <?php $count=1; ?>
                            <?php foreach($categories as $category): ?> 
                        <tr>
                          <td><?php echo $count; ?>.</td>
                          <td><?php echo $category['Group']['group_title']; ?></td>
                          <td>
                            <?php echo $this->Html->link('<i class="fa fa-pencil-square-o" aria-hidden="true"></i> ',array('controller' => 'Registrations', 'action' => 'addgroup', $category['Group']['id']),array(
                                    'class'=>'btn btn-info','escape'=>false, 'confirm'=>'Are you sure, you want to edit?'));?>|| 
                                   
                    <?php echo $this->Html->link('<i class="fa fa-trash"></i>',array('controller' => 'Registrations', 'action' => 'deletegroup', $category['Group']['id']),array('class'=>'btn btn-warning','escape'=>false, 'confirm'=>'Are you sure, you want to delete?'));
                         
                          ?>
                          </td>
                        </tr>
                        <?php $count++;
                         endforeach; ?>
                            <?php unset($category); ?>
                            
                            <tr>
                                <td colspan="8" align="center" class="pagination pagination-lg">
                                    <ul class="pagination">
                                <?php
                                    echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                                    echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                                    echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                                ?>
                                    </ul>           
                                </td>
                            </tr>
                      </tbody>
                    </table>
                         
                    </div>
                </div>
                </div>
            </div>

            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>&copy;<?= date("Y"); ?>Copyright Wishes . All Rights Reserved | Design by :
                    <a href="http://primeprogrammer.com/"> primeprogrammer </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
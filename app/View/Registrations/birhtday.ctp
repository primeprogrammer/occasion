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
            		<?= $this->Flash->render(); ?>
            	</div>

            <h2 class="main-title-w3layouts mb-2 text-center">Recent Birthdays</h2>
            <!--// main-heading -->

            <!-- Inbox Page -->
            <!-- Inbox topnav -->
            <nav class="inbox-nav-w3ls p-3 bg-dark text-white">
                <div class="row">
                    <div class="inbox-topl col-6">
                        <ul class="d-flex justify-content-between">
                            <li>
                                <a href="#" class="email-menu">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </li>
                            <li>
                               
                            </li>
                           
                        </ul>
                    </div>
                    
                </div>
            </nav>
            <!-- Inbox topnav -->

            <!-- Inbox content -->
            <!--// Inbox content -->
            <div class="container-fluid">
                <div class="row">
                    <div class="index-lcontent col-xl-7">
                        <div class="container-fluid">
                            <div class="row">
                              <!-- right-strip -->

                                <div class="email-list col-9">
                                    <ul class="collection">
                              <?php  ?> 
                                        <li class="collection-item selected d-flex justify-content-between">
                                            <img src="/images/profile.jpg" alt="" class="img-fluid mr-3">
                                            <div class="mid-cn">
            <span class="email-title"><?php //echo $task['Registration']['name']; ?></span>
                                                <p class="paragraph-agileits-w3layouts">Turning 20 Years old.</p>
                                                  <form action="#" method="post" class="form-inline mx-auto search-form">
                        <input class="form-control mr-sm-2" type="search" placeholder="Write a birthday wish on his timeline.." aria-label="Search" title="Write a birthday wish on his timeline.." required="">
                        <button class="btn btn-style my-2 my-sm-0" type="submit">Send</button>
                    </form>
                   </div>
                                            
                        <a href="#" class="email-time">
                        <i class="mdi-editor-attach-file attach-file"></i>
                        <small class="text-secondary">20 Nov 2018</small></a>
                                           
                                        </li>
                                    <?php //endforeach; ?>

                                      
                                    </ul>
                                </div>
                                <!-- right-strip -->
                                
                            </div>
                        </div>
                    </div>
                      <div class="index-rcontent col-xl-5 mt-xl-0 mt-3">
                        <div class="outer-w3-agile">
                             <!-- Calender -->
                    <div class="outer-w4-agile col-xl mt-3">
                        <h4 class="tittle-w3-agileits mb-3">Multi range Calender</h4>
                        <div class="multi-select-calender"></div>
                        <div class="box"></div>
                    </div>
                    <!--// Calender -->
                        </div>
                    </div>
                </div>
            </div>
            <!--// Inbox Page -->
            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>&copy;<?= date("Y");?> copyright Wishes . All Rights Reserved | Design by :
                    <a href="http://primeprogrammer.com/"> primeprogrammer </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
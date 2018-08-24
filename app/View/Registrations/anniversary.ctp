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
            <!--// top-bar -->

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Upcoming Anniversary</h2>
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
                            	 <!-- Search-from -->
                       
                    <!--// Search-from -->
                            </li>
                           
                        </ul>
                    </div>
<!--                    <div class="inbox-topr col-6"> </div>-->
                </div>
            </nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="index-lcontent col-xl-7">
                        <div class="container-fluid">
                            <div class="row">
                              <!-- right-strip -->

                                <div class="outer-w3-agile mt-2 col-9">
                                     <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Day</th>
                                <th colspan="col">Date</th>
                                <th scope="col">Year of Anniversary</th>      
                                 <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php foreach($categories as $category): ?>
                 <tr>
                    <td><?php echo $category['Registration']['name']; ?></td>
                <td><?php 
               $data = $category['Registration']['anniversary'];
              $nameOfDay = date('D', strtotime($data));
              echo $nameOfDay;
               ?></td>
                  <td><?php  $data = $category['Registration']['anniversary'];
              $nameOfDay = date('d M y', strtotime($data));
              echo $nameOfDay; ?></td>
                    <td><?php 
                        $data = $category['Registration']['anniversary'];
                           $count = count(date('Y', strtotime($data)));
                                  echo $count .' Years'; ?></td>
                      <td>
                      <button class="btn btn-style my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#myModal">Wish</button></td>
                            </tr>
                            <?php endforeach; ?>
                          </tbody>
                    </table>
     <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
         <form action="#" method="post" class="form-inline mx-auto search-form">
           <input class="form-control mr-sm-2" type="search" placeholder="Write a Anniversary wish on his timeline.." aria-label="Search" required="">
           <button class="btn btn-style my-2 my-sm-0" type="submit">Send</button>
         </form>
        </div>
        <div class="modal-footer">
<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
        </div>
      </div>
      
    </div>
  </div>
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
                <p>&copy; <?= $this->Flash->render(); ?>copyright Wishes . All Rights Reserved | Design by :
                    <a href="http://primeprogrammer.com/"> primeprogrammer </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
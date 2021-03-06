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
            <h2 class="main-title-w3layouts mb-2 text-center">Holydays Months List</h2>
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
                    <div class="index-lcontent col-xl-4">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="email-list col-9">
                                  <h4 class="tittle-w3-agileits mb-3"></h4>
                                  <ul>
					     <li>					     
							 <h4 class="tittle-w3-agileits mb-3">
                <?php foreach($Authors as $Author): ?>

                <?php
                   $data = $Author['Occasion']['date'];
              $nameOfDay = date('F', strtotime($data));
                          echo $this->Html->link(
                  $this->Html->tag('span', '', array('class' => 'fa fa-arrow-circle-right')) . $nameOfDay,
                  array('controller' => 'Registrations', 'action' => 'holydaylist'),
                  array('class' => 'some other  classes', 'escape' => false)
              ); ?>
              <?php endforeach; ?> 
              </h4>						
							</li>
                           				
				</ul>
                              
                                </div>
                              
                            </div>
                        </div>
                    </div>
                      <div class="index-rcontent col-xl-8 mt-xl-0 mt-3">
                        <div class="outer-w3-agile">
                             <!-- Calender -->
                    <div class="outer-w4-agile col-xl mt-3">
                        <h4 class="tittle-w3-agileits mb-3"><?php 
               $data = $Author['Occasion']['date'];
              $nameOfDay = date('F', strtotime($data));
              echo $nameOfDay; ?></h4>
                        <ul class="event-list">
                          <?php foreach($Authors as $Author): ?>
					     <li>
					     	<time datetime="2014-07-20">
							<span class="day"><?php 
               $data = $Author['Occasion']['date'];
              $nameOfDay = date('d', strtotime($data));
              echo $nameOfDay; ?></span>
							<span class="month"><?php 
               $data = $Author['Occasion']['date'];
              $nameOfDay = date('M', strtotime($data));
              echo $nameOfDay; ?></span>
							<span class="year"><?php 
               $data = $Author['Occasion']['date'];
              $nameOfDay = date('Y', strtotime($data));
              echo $nameOfDay; ?></span>
							<span class="time">ALL DAY</span>
						</time>
						<img alt="Independence Day" src="/document/<?php echo $Author['Occasion']['image']; ?>" />
						<div class="info">
							<h2 class="title"><?php echo $Author['Occasion']['title']; ?></h2>
							<p class="desc"><?php echo $Author['Occasion']['massage']; ?></p>
							
						<ul>							
							<button class="btn btn-info my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#myModal">Wish</button>
							</ul>
						</div>
						
					</li>
            <?php endforeach; ?>
			</ul>
                    </div>
                    <!--// Calender -->
                        </div>
                    </div>
                </div>
            </div>
            <!--// Inbox Page -->
             <!----modal ---->
       <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
         <form action="#" method="post" class="mx-auto search-form">
         <h4 class="tittle-w3-agileits mb-3">Select a Friends</h4>
     <label class="container">
  <input type="radio" checked="checked" name="radio">
  <span class="checkmark"></span>One
</label>
<label class="container">
  <input type="radio" name="radio">
  <span class="checkmark"></span>Two
</label>
<label class="container">
  <input type="radio" name="radio">
  <span class="checkmark"></span>Three
</label>
<label class="container">
  <input type="radio" name="radio">
  <span class="checkmark"></span>Four
</label>
          
           <input class="form-control mr-sm-2" type="search" placeholder="Write a Holydays wish on his timeline.." aria-label="Search" required="">
           <br>
           <button class="btn btn-style my-2 my-sm-0" type="submit">Send</button>
         </form>
        </div>
        <div class="modal-footer">
<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
        </div>
      </div>
      
    </div>
  </div>
            <!--// end modal -->
            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>&copy;<?= date("Y"); ?>Copyright Wishes . All Rights Reserved | Design by :
                    <a href="http://primeprogrammer.com/"> primeprogrammer </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
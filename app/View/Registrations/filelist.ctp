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
             <h2 class="main-title-w3layouts mb-2 text-center" style="color: blue;">Upcoming Events</h2>
            <!--// top-bar -->
              <div class="text-center" style="color: #0A895F">
                          <?php echo $this->Flash->render(); ?>
                        </div>
              <div class="container-fluid">
                <div class="row">
                    <!-- Calender -->
                     
                    <div class="outer-w2-agile col-xl mt-3">
                        <h4 class="tittle-w3-agileits mb-4">Holydays</h4>
                           <div class="outer-w3-agile mt-3">
                    
                    <table class="table">
                        <thead>
                            <tr>
                                
                                <th scope="col">Day</th>
                                <th scope="col">Date</th>
                                <th scope="col">Haliday</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <td>Sunday</td>
                                <td>26/08/2018</td>
                                <td>Rakhsa Bandhan</td>
                              
                            </tr>
                            <tr>
                                
                                <td>Sunday</td>
                                <td>26/08/2018</td>
                                <td>Rakhsa Bandhan</td>
                               
                            </tr>
                            <tr>
                               
                                <td>Sunday</td>
                                <td>26/08/2018</td>
                                <td>Rakhsa Bandhan</td>                                                               
                            </tr>
                                <tr>
                                    <td colspan="3"><a href="holydays.html">See all</a></td>
                                </tr>
                        </tbody>
                    </table>
                </div>
                <!--// table1 -->
                        
                    </div>
                    <!--// Calender -->
                    <!-- Profile -->
                    <div class="outer-w2-agile col-xl mt-3 mx-xl-2 p-xl-0 px-md-4">
                        <h4 class="tittle-w3-agileits mb-4 main-title-w3layouts mb-2 text-center">Birthday </h4>
                        <div class="header">
                            <div class="text">
                                <img src="/images/profile.jpg" class="img-fluid rounded-circle" alt="Responsive image">
                                <h2>Matthew Scott</h2>
                                <a href="mailto:info@example.com">
                                    <p>@Lorem ipsum</p>
                                </a>
                            </div>
                        </div>
                        <div class="outer-w4-agile mt-4 outer-w3-agile-bg">
                           <h4 class="tittle-w3-agileits mb-4 text-white">Countdown Timer</h4>
                             <div class="simply-countdown-custom" id="simply-countdown-custom"></div>
                       </div>
                       
                    </div>
                    <!--// Profile -->
                   
                </div>
            </div>
         
            <!--// three-grids -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Calender -->
                    <div class="outer-w4-agile col-xl mt-3">
                        <h4 class="tittle-w3-agileits mb-4">Special Wishes</h4>
                         <table class="table">
                        <thead>
                            <tr>
                                
                                <th scope="col">Birthdays</th>
                                <th scope="col">Holydays</th>
                                <th scope="col">Anniversaries</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <td><a href="birthday.html"><b> Special Birthdays </b></a> </td>
                                <td><a href="anniversary.html"><b> Special Anniversary </b></a></td>
                                <td><a href="holydays.html"><b> Special Holydays </b></a></td>
                            </tr>
                        
                        <tr>
                               
                                <td colspan="3"><a href="special.html">See all</a></td>
                                
                            </tr>
                        </tbody>
                    </table>
                    </div>
                    <!--// Calender -->
                    <!-- Profile -->
                    <div class="outer-w4-agile col-xl mt-3 mx-xl-3 p-xl-0 px-md-5">
                        <h4 class="tittle-w3-agileits mb-4 main-title-w3layouts mb-2 text-center">Anniversary</h4>
                         <div class="outer-w3-agile mt-3">
                        <table class="table">
                        <thead>
                            <tr>
                                
                                <th scope="col">Day</th>
                                <th scope="col">Date</th>
                                <th scope="col">Years of Anniversary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <td>Saturday</td>
                                <td>26/08/2018</td>
                                <td>1 year</td>
                            </tr>
                            <tr>
                                
                                <td>Saturday</td>
                                <td>26/08/2018</td>
                                <td>2 years</td>
                            </tr>
                            <tr>
                               
                                <td>Saturday</td>
                                <td>26/08/2018</td>
                                <td>3 years</td>
                            </tr>
                            <tr>
                               
                                <td colspan="3"><a href="anniversary.html">See all</a></td>
                                
                            </tr>
                        </tbody>
                    </table>
                       
                    </div>
                    <!--// Profile -->
                   
                </div>
            </div>
               <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>&copy;<?= date("Y");?>copyright Wishes . All Rights Reserved | Design by :
                    <a href="http://primeprogrammer.com/"> primeprogrammer </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>
<!-- <html></html>    -->

   <header>
      <div class="top">
        <div class="container">
          <div class="row">
            <div class="span6">
              <p class="topcontact"><i class="icon-phone"></i> +91 9415994473</p>
            </div>
            <div class="span6">

              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-white"></i></a></li>    
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="index.html">
                <img src="/re_layout/img/logo.png" alt=""  width="100px" height="100"/>
              </a>
            </div>
          </div>
            <div class="span4">
            <div class="logo">
              <h2 class="text-center logo_center"><span style="color: #7ab80e;">SHAIL</span> SOFTECH</h2>
            </div>
             <div class="text-center" style="color: green;">
               <?php echo $this->Flash->render(); ?>
             </div>
          </div>
          
          <div class="span4">
           <div class="navbar navba-static-top navigation">
            <p class="bold"><i class="icon-phone"></i> SALE AND SUPPORT: <span class="text-warning"> +91 9415994473 </span></p>
         <p class="bold"><i class="icon-phone"></i> OFFICE: <span class="text-warning"> +91 9076880093 </span></p>
           </div>
          </div>
        </div>
      </div>
       <div class="container-fluid bg">
        <div class="row nomargin">         
          <div class="span12">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="active">
                      <?php echo $this->Html->link('Home',array('controller' => 'Pages', 'action' => 'frontindex')); ?>
                      <!-- <a href="index.html"><i class="icon-home"></i> HOME </a> -->
                     </li>
                    <li class="">
                      <!-- <a href="about.html">ABOUT US </a>                   -->
                        <?php echo $this->Html->link('About Us',array('controller' => 'Pages', 'action' => 'frontaboutus')); ?>
                    </li>
                    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">APPLY DSC <span class="caret"></span></a>    
                       <ul class="dropdown-menu" role="menu">               
                          
                
                  <li class="dropdown-submenu">
                    <a href="#">SIFY</a>
                    <ul class="dropdown-menu">
                        <li>
                    <?php echo $this->Html->link('INDIVIDUAL CLASS TWO', array('controller'=>'pages', 'action'=>'individual','admin'=>false), array('escape'=>false)); ?>
                          <!-- <a href="individual_two.html">INDIVIDUAL CLASS TWO </a> -->
                        </li>
                      <li>
                            <?php echo $this->Html->link('CLASS TWO DSC WITH ORG', array('controller'=>'pages', 'action'=>'classdesorg','admin'=>false), array('escape'=>false)); ?>
                        <!-- <a href="dsc.html">CLASS TWO DSC WITH ORG </a> -->
                      </li>
                      <li>
                          <?php echo $this->Html->link('CLASS THREE INDIVIDUAL APPLICATION', array('controller'=>'pages', 'action'=>'classapplication','admin'=>false), array('escape'=>false)); ?>
                        <!-- <a href="individual_three.html"></a> -->
                      </li>
                      <li>
                          <?php echo $this->Html->link('CLASS THREE DSC WITH ORG', array('controller'=>'pages', 'action'=>'classthreeorg','admin'=>false), array('escape'=>false)); ?>
                        <!-- <a href="dsc_org.html"></a> -->
                      </li>
                    </ul>
                  </li>                 
                       </ul>                     
                   </li>                   
                    <li class="">
                      <?php echo $this->Html->link('Download',array('controller' => 'Pages', 'action' => 'frontdownload')); ?>
                      <!-- <a href="download.html">DOWNLOAD </a>                       -->
                    </li>
                    <li class="">
                      <?php echo $this->Html->link('Our Services',array('controller' => 'Pages', 'action' => 'frontourservices')); ?>
                      <!-- <a href="services.html">OUR SERVICES </a> -->
                     </li>
                     <li>
                        <?php echo $this->Html->link('Contact Us',array('controller' => 'Pages', 'action' => 'frontcontactus')); ?>
                      <!-- <a href="contact.html">CONTACT US </a> -->
                    </li>
                     <li >
               <div class="pull-right move">
                            <div class="input-group col-md-12">
                          <input type="text" class="form-control" placeholder="SEARCH" />
                                <span class="input-group-btn">
                                    <button class="btn btn-success" type="button">
                                        <span class="icon icon-search"></span>
                                    </button>
                                </span> 
                            </div>
                        </div>
                    </li>
                 </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>

   
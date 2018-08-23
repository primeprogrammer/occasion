<!-- <html></html> -->
 <header id="header2">
  <div class="box1"></div>
  <h2 class="caption">Welcome To<br> IndiaSignature</h2>
<!--  <img src="http://www.pngall.com/wp-content/uploads/2016/05/Model-PNG-HD.png" class="" alt="">-->
<!--  <a class="btn btn-warning btn-rounded action" href="about.html"> More </a> -->
<?php
echo $this->Html->link(
    $this->Html->tag('More', '', array('class' => 'icon new')) . "More",
    array('controller' => 'pages', 'action' => 'frontaboutus'),
    array('class' => 'btn btn-default btn-rounded action', 'escape' => false)
);
  ?>
</header>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span4">
                <div class="box flyLeft">                 
                  <div class="text ">
                    <h4 class="text-center">TO <strong>DOWNLOAD</strong></h4>
                    <p class="text-center">
                     Quick support (Teamviewer) 
                     Quick support (Anydesk) 
                     Quick support (Ammyy Admin )
                    </p>
                    <div class="text-center">
                    <!-- <a class="btn btn-info  btn-rounded" href="download.html">More</a> -->
                            <?php
                        echo $this->Html->link(
                            $this->Html->tag('More', '', array('class' => 'icon new')) . "More",
                            array('controller' => 'pages', 'action' => 'frontdownload'),
                            array('class' => 'btn btn-info  btn-rounded', 'escape' => false)
                        );
                          ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="span4">
                <div class="box flyIn">
                  
                  <div class="text">
                    <h4 class="text-center">OUR <strong>SERVICES</strong></h4>
                    <p class="text-center">
                    Digital signature certificate (DSC) USB TOKENS E-Flling softwares
                    </p>
                    <div class="text-center">
                    <!-- <a class="btn btn-info  btn-rounded" href="services.html">More</a> -->
                      <?php
                        echo $this->Html->link(
                            $this->Html->tag('More', '', array('class' => 'icon new')) . "More",
                            array('controller' => 'pages', 'action' => 'frontourservices'),
                            array('class' => 'btn btn-info  btn-rounded', 'escape' => false)
                        );
                          ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="span4">
                <div class="box flyRight">
                 
                  <div class="text">
                    <h4 class="text-center">ABOUT <strong>US</strong></h4>
                    <p class="text-center">
                     SHAIL SOFTECH is a licensed Registering Authority for issuing...
                    </p>
                     <div class="text-center">
                    <!-- <a class="btn btn-info  btn-rounded" href="about.html">More</a> -->
                          <?php
                        echo $this->Html->link(
                            $this->Html->tag('More', '', array('class' => 'icon new')) . "More",
                            array('controller' => 'pages', 'action' => 'frontaboutus'),
                            array('class' => 'btn btn-info  btn-rounded', 'escape' => false)
                        );
                          ?>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="span12">
            <div class="solidline"></div>
          </div>
        </div>
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span12">
                <div class="aligncenter">
                  <h3>OUR <strong>MISSION</strong></h3>
                  <p class="text-center bottom-article bold the_text">Our mission is to enhancing the business growth of our customers with creative Design and Development to deliver market-defining high-quality solutions that create value and reliable competitive advantage for our clients around the world.</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="span2">
                <div class=" animated-fast flyIn">
                  <div class="pricing-heading">
                    <?php echo $this->Html->image('/images/page1-img1.png', array('alt' => 'Logo')); ?> 
                  </div>
                  <div class="pricing-terms">                
                   </div>            
                </div>
              </div>
               <div class="span4">
                <div class=" animated-fast flyIn">
                  <div class="pricing-heading">
                   <p  class="the_text1"> Our mission is to deliver optimal solutions withquality and services at reasonable prices. For us customer satisfaction is given top place. We are very friendly in our dealings to the customers and it helps us retain existing clients and expand customer circle. We always try to improve the quality of our products by exploring innovative ideas. 
             <a href="#" class="btn  btn-rounded btn-theme">More</a></p>  
                  </div>              
                </div>
              </div>
              <div class="span6">
                <div class=" animated-fast flyIn">
                  <div class="pricing-heading">
                    <img src="/re_layout/img/f0bb406d176a2a118c5f2174fd937ef5.jpg" alt="leftimg">
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr>
<!-- 
      <section id="featured">
 <div class="camera_wrap" id="camera-slide">
       
        <div data-src="/re_layout/img/24.jpg" >
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
            </div>
            </div>
          </div>
        </div>
     
        <div data-src="/re_layout/img/23.jpg">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
            </div>
            </div>
          </div>
        </div>

     
        <div data-src="/re_layout/img/22.jpg">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
             
            </div>
          </div>
        </div>

      </div>
    </section> -->
<!-- 
			    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span4">
                <div class="box flyLeft">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark  active icon-3x">1</i>
                  </div>
                  <div class="text">
                    <h4>To <strong>Download</strong></h4>
                    <p>
                     Quick support (Teamviewer) 
                     Quick support (Anydesk) 
                     Quick support (Ammyy Admin )
                    </p>
                    <a href="#">More</a>
                  </div>
                </div>
              </div>

              <div class="span4">
                <div class="box flyIn">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark  active icon-3x">2</i>
                  </div>
                  <div class="text">
                    <h4>Our <strong>Services</strong></h4>
                    <p>
                    Digital signature certificate (DSC) USB TOKENS E-Flling softwares
                    </p>
                    <a href="services.html">More</a>
                  </div>
                </div>
              </div>
              <div class="span4">
                <div class="box flyRight">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark  active icon-3x">3</i>
                  </div>
                  <div class="text">
                    <h4>About <strong>Us</strong></h4>
                    <p>
                     SHAIL SOFTECH is a licensed Registering Authority for issuing...
                    </p>
                    <a href="about.html">More</a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="span12">
            <div class="solidline">
             
            </div>
          </div>
        </div>
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span12">
                <div class="aligncenter">
                  <h3>Our <strong>Mission</strong></h3>
                  <p>Our mission is to enhancing the business growth of our customers with creative Design and Development to deliver market-defining high-quality solutions that create value and reliable competitive advantage for our clients around the world.</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="span3">
                <div class=" animated-fast flyIn">
                  <div class="pricing-heading">
              

                    <?php echo $this->Html->image('/images/page1-img1.png', array('alt' => 'Logo')); ?>               
                  </div>
                  <div class="pricing-terms">                
				</div>            
                </div>
              </div>
               <div class="span3">
                <div class=" animated-fast flyIn">
                  <div class="pricing-heading">
                   <p align="justify"> Our mission is to deliver optimal solutions withquality and services at reasonable prices. For us customer satisfaction is given top place. We are very friendly in our dealings to the customers and it helps us retain existing clients and expand customer circle. We always try to improve the quality of our products by exploring innovative ideas.  <a href="#" class="btn btn-small btn-theme">More</a></p>  
                  </div>              
                </div>
              </div>
              <div class="span4">
                <div class=" animated-fast flyIn">
                  <div class="pricing-heading">
                    <img src="/re_layout/img/f0bb406d176a2a118c5f2174fd937ef5.jpg" height="500px;">
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
     

	
<!-- <html></html> -->

   <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <ul class="breadcrumb">
                <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
                
                <li class="active">Services</li>
              </ul>
              <h2>OUR SERVCES</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container">
          <div class="row">
     <?php $countdata=count($dataService1); 
            $count=0;
            while($count <= $countdata-1)
            {
        echo '<div class="span4">';
          echo '<div class="service-box aligncenter flyLeft">
              <div class="icon">
                <i class="icon-circled  icon-4x"><img src="/upload_image/'.$dataService1[$count]['Ourservice']['image'].'" alt="" /></i>
              </div>

              <h5 class="text-center">'.$dataService1[$count]["Ourservice"]["title"].'</h5>
              <p class="text" >
               '.html_entity_decode($dataService1[$count]["Ourservice"]["description"]).'
              </p>
            </div></div>';
             $count++; } ?>
          

        </div>
      </div>
    </section>




 <!-- /about section -->
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
      
      </div>
    </section>

				
<!-- =======================================



    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <ul class="breadcrumb">
                <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
               	
                <li class="active">Services</li>
              </ul>
              <h2>Our Services</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container">
          <div class="row">

              <?php $countdata=count($dataService1); 
            $count=0;
            while($count <= $countdata-1)
            {
            echo '<div class="span4">';
              echo '<div class="service-box aligncenter flyLeft">
                <div class="icon">
                  <i class="icon-circled  icon-4x"><img src="/upload_image/'.$dataService1[$count]['Ourservice']['image'].'" alt="" /></i>
                </div>
                     <h6>'.$dataService1[$count]["Ourservice"]["title"].'</h6>
                    '.html_entity_decode($dataService1[$count]["Ourservice"]["description"]).'                
              </div>';
              $count++;
              if(!empty($dataService1[$count]["Ourservice"]))
              {
              echo '<div class="service-box aligncenter flyLeft">
                <div class="icon">
                  <i class="icon-circled  icon-4x">
                    <img src="/upload_image/'.$dataService1[$count]['Ourservice']['image'].'" alt="" />
                  </i>
                </div>
                    <h6>'.$dataService1[$count]["Ourservice"]["title"].'</h6>
                    '.html_entity_decode($dataService1[$count]["Ourservice"]["description"]).'
              </div>';
              }
            echo '</div>';
          $count++; } ?>
        </div>
      </div>
    </section>

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
                    <a href="#">More</a>
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
                    <a href="services.html">More</a>
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
      
      </div>
    </section>





 <!-- <html></html> -->


      <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <ul class="breadcrumb">
                <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>                
                <li class="active">Download</li>
              </ul>
              <h2>Download</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

   <div class="aboutus-section">
        <div class="container">
            <div class="row">
              <div class="span8">
               <div class=" animated-fast flyIn">
                  <div class="pricing-heading">
                  
          <div class="col-md-3">
             
              <?php  foreach ($dataDownload3 as $dataDownload4)
                {
                $check=0;
                foreach($dataDownload1 as $dataDownload)
                {
                if($check == 0)
                    { echo "<div class='bran'><h5>".$dataDownload4."</h5> </div>"; }
               if($dataDownload4 == $dataDownload['Download']['category'])
                          { ?> 
                               <ul class="list-group">
                <li class="list-group-item divanim">
                  <a href="#" class="btn btn-rounded btn-success"> 
                    <?php echo $dataDownload["Download"]["title"].'</a> '
                  .$this->Form->postLink("Click Here", array('controller'=>'downloads','action'=>'downloadfiles', $dataDownload["Download"]["id"], 'admin' => false), array('class'=>'btn btn-rounded btn-info')); ?>
                </li>
                      </ul>
              <?php
                     } 
                $check++;
                } 
              }
             ?>
        </div>
        </div>
       </div>
       </div>
                  
       <div class="span4">
                <div class=" animated-fast flyIn">
                  <div class="pricing-heading ">
                   <h2>Services</h2>
                    <ul class="list-group">
                      <?php 
                       foreach($dataService1 as $dataService): ?>
                  <li class="list-group-item divanim1">
                    <a href="#" class="btn btn-rounded btn-warning"> 
                        <?php echo $dataService['Service']['title']; ?>
                    </a>
                  </li>
                               <?php endforeach; ?>
           
                    </ul>
                      </div>
                   </div>
                  </div>


        </div>
            </div>
      </div>  
   
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





   <!-- <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <ul class="breadcrumb">
                <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>                
                <li class="active">Download</li>
              </ul>
              <h2>Download</h2>
            </div>
          </div>
        </div>
      </div>
   </section>

   <div class="aboutus-section">
        <div class="container">
            <div class="row">
              <div class="span8">
               <div class=" animated-fast flyIn">
                  <div class="pricing-heading">
                  
         <div class="col-md-3">
             
              <?php  foreach ($dataDownload3 as $dataDownload4)
                {
                $check=0;
                foreach($dataDownload1 as $dataDownload)
                {
                if($check == 0)
                    { echo "<div class='bran'><h5>".$dataDownload4."</h5> </div>"; }
               if($dataDownload4 == $dataDownload['Download']['category'])
                          { ?> 
                               <ul class="list-group">
                <li class="list-group-item divanim">
                  <a href="#" class="btn btn-rounded btn-success"> 
                    <?php echo $dataDownload["Download"]["title"].'</a> '
                  .$this->Form->postLink("Click Here", array('controller'=>'downloads','action'=>'downloadfiles', $dataDownload["Download"]["id"], 'admin' => false), array('class'=>'btn btn-rounded btn-info')); ?>
                </li>
                      </ul>
              <?php
                     } 
                $check++;
                } 
              }
             ?>
        </div>
       </div>
        </div>
                  </div>
                  
              <div class="span4">
                <div class=" animated-fast flyIn">
                  <div class="pricing-heading ">
                   <h2>Services</h2>
                    <ul class="list-group">
                      <?php 
                       foreach($dataService1 as $dataService): ?>
                  <li class="list-group-item divanim1">
                    <a href="#" class="btn btn-rounded btn-warning"> 
                        <?php echo $dataService['Service']['title']; ?>
                    </a>
                  </li>
                               <?php endforeach; ?>
           
                    </ul>
                      </div>
                   </div>
                  </div>
        </div>
            </div>
      </div>  

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
    </section> -->
<!-- <html></html>  -->

    
 <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <ul class="breadcrumb">
                <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>                
                <li class="active">About Us</li>
              </ul>
              <h2 class="aboutus-title">ABOUT US</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- about section -->   
  <div class="aboutus-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="aboutus">
                        
                        <p class="aboutus-text">SHAIL SOFTECH is a licensed Registering Authority for issuing digital signature certificates in India since 2011. We offers various solutions to Indian as well as Foreign consumers, with a large user base among Individuals, Corporates, Banks, Government Organizations and several small and medium businesses. In addition to Digital Certificate solutions, We offers variety of other services including online Procurement of New Name or correction in name of Company, Director Identification Number(DIN), Services of Printing of Memorandom and article of Association, Filing of Annual Return and balance Sheet, and e forms, Preparation of Income Tax return and uploading xml data on Income tax Site.</p>
                        
                    </div>
                    <div class="aboutus">
                      <h2 class="aboutus-title">
                          <?php // pr($aboutpage); die;?>
                          <?php echo $aboutpage[0]['About']['title']; ?>
                        </h2>
                        <p class="aboutus-text">
                          <?php echo html_entity_decode($aboutpage[0]['About']['description']); ?>
                        </p>                      
                    </div>
                    <!--       <div class="aboutus">
                        <h5 class="">What are the types of Digital Signature Certificates provided by SHAIL SOFTECH ?</h5>
                        <p class="aboutus-text">1. Class 2 <br>
                                               2. Class 3</p>                       
                    </div>
                    <div class="aboutus">
                        <h5 class="">Applications of DSC</h5>
                        
                          <ul>
                            <li>
                              1. MCA efiling 
                            </li>
                            <li>                
                  2. Income Tax 
                            </li>
                            <li>
                3. Foreign Trade            
                            </li>
                            <li>
                  4. e-tendering/e-procurement 
                            </li>
                            <li>
                  5. Employee Provident Fund
                            </li>
                          </ul>                         
                                              
                    </div>
                     <div class="aboutus">
                        <h5 class="">What is an eToken?</h5>
                        <p class="aboutus-text">USB e-Token can be password protected so that Digital Signature is never lost when computer is formatted or internet explorer changed. A virus cannot affect USB Token, and the digital certificate stored would always be secure. As per CCA's Office Order, with effective from 7th December, 2013, eMudhra will be issuing Class 2 and 3 Digital Signature Certificates (DSC) only on FIPS 140-2 level 2 certified crypto tokens. eMudhra recommends TrustKey tokens. Trust Key token which is the most accepted, secure and widely used token device in India for storing your Digital Signatures</p>                       
                    </div>
                    <div class="aboutus">
                        <h5 class="">Difference between Encryption and Signing</h5>
                        <p class="aboutus-text">Message encryption provides confidentiality. Allows users to encrypt document with the public key which can be decrypted only with the corresponding private key. To put it in simple terms when encrypting, you use their public key to write message and recipient uses their private key to read it. One of the most secure way protecting confidential documents.

            Message signing binds the identity of the message source to this message. It ensures data integrity, message authentication, and non-repudiation altogether. When signing, you use your private key to write message's signature, and they use your public key to check if it's really yours.</p>                       
                    </div>
                     <div class="aboutus">
                        <h5 class="">BIO-METRIC DEVICES</h5>
                        <p class="aboutus-text">Get paperless DSC within 15 minutes average time with the help of Bio-metric device. No need of any attestation or application form, etc. Just buy this device and generate DSC from your own PC without any hassel. Contact us to know more about this opportunity.</p>                       
                    </div>
                    <div class="aboutus">
                        <h5 class="aboutus-title">BIO-METRIC DEVICES</h5>
                        <p class="aboutus-text">Get paperless DSC within 15 minutes average time with the help of Bio-metric device. No need of any attestation or application form, etc. Just buy this device and generate DSC from your own PC without any hassel. Contact us to know more about this opportunity.</p>                       
                    </div>
                    <div class="aboutus">
                        <h5 class="aboutus-title">ONLINE SUPPORT</h5>
                        <p class="aboutus-text">We give prime importance to customer satisfaction and thus provide free online after sale support. We encourages outsourcing so that you can focus on your core competencies. Our team includes various experienced professionals to cater needs of every person.</p>                       
                    </div>
                    <div class="aboutus">
                        <h5 class="aboutus-title">PARTNER WITH US</h5>
                        <p class="aboutus-text">Want to issue DSC from your own PC? Want to make your presence in market? We are pleased to invite you to join us as a Partner for issuing DSC(s) to your esteemed clients and others at very nominal investment. So why wait just contact us and we will be happy to provide you all details.</p>                       
                    </div> -->
        </div>
            </div>
        </div>
    </div>
    <br>
    <!-- /about section -->
    <section id="content">
      <div class="container">
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










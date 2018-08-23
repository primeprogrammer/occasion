<!-- <html></html> -->
	<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1>Registration Details</h1>
           
          </div>
          <div class="text-center" style="color: red;">
            <?php echo $this->Flash->render(); ?>
          </div>
          <div><a class="ptn ptn-primary ptn-flat" href="#"><i class="fa fa-lg fa-plus"></i></a><a class="ptn ptn-info ptn-flat" href="#"><i class="fa fa-lg fa-refresh"></i></a><a class="ptn ptn-warning ptn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a></div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-pody">
             
                <div class="row">
                <div class="col-xs-4 item-photo">
                            <h5> Pan : 
                        <b>  
                             <?php 

                            if(!empty($usrdetails[0]['Dsceregistration']['pan'])){

                            echo'<img src="/document/'.$usrdetails[0]['Dsceregistration']['pan'].'"class="img-thumbnail img-responsive"/ >';
                        }else{
                        echo'<img src="/images/record .png" class="img-thumbnail img-responsive"/>';
                    }

                            ?> 

                        </b>
                     </h5>
                    <hr> 
                    <h5> Aadhaar : 
                        <b>     
                                  <?php 

                            if(!empty($usrdetails[0]['Dsceregistration']['addhar'])){

                            echo'<img src="/document/'.$usrdetails[0]['Dsceregistration']['addhar'].'"class="img-thumbnail img-responsive"/ >';
                        }else{
                        echo'<img src="/images/record .png" class="img-thumbnail img-responsive"/>';
                    }

                            ?> 
                         </b>
                     </h5>
                    <hr>
                     <h5> Photo : 
                        <b> <?php 

                            if(!empty($usrdetails[0]['Dsceregistration']['image'])){

                            echo'<img src="/document/'.$usrdetails[0]['Dsceregistration']['image'].'"class="img-thumbnail img-responsive"/ >';
                        }else{
                        echo'<img src="/images/record .png" class="img-thumbnail img-responsive"/>';
                    }

                            ?>    
                        </b>
                     </h5>
                    <hr>
                     <h5>GST : 
                        <b>  
                        <?php 

                            if(!empty($usrdetails[0]['Dsceregistration']['gst'])){

                            echo'<img src="/document/'.$usrdetails[0]['Dsceregistration']['gst'].'"class="img-thumbnail img-responsive"/ >';
                        }else{
                        echo'<img src="/images/record .png" class="img-thumbnail img-responsive"/>';
                    }
                            ?>  
                        </b>
                     </h5>
                    <hr>
                     <h5>LATEST BANK STATEMENT (MIN TWO PAGES) : 
                        <b>    
                               <?php 

                            if(!empty($usrdetails[0]['Dsceregistration']['bankiamge'])){

                            echo'<img src="/document/'.$usrdetails[0]['Dsceregistration']['bankiamge'].'"class="img-thumbnail img-responsive"/ >';
                        }else{
                        echo'<img src="/images/record .png" class="img-thumbnail img-responsive"/>';
                    }
                          ?> 
                          
                        </b>
                     </h5>
                   
 
                </div>
                  <div class="col-xs-8">
                    <h5>First Name : 

                       <b><?php echo strtoupper(strip_tags(html_entity_decode($usrdetails[0]['Dsceregistration']['firstname']))); ?></b>
                    </h5>
                    
                    <hr>
                     <h5>Last Name : 
                        <b>  <?php echo strtoupper(strip_tags(html_entity_decode($usrdetails[0]['Dsceregistration']['lastname']))); ?>
                        </b>
                     </h5>
                    <hr>
                     <h5>Pan Number : 
                        <b> <?php echo strip_tags(html_entity_decode($usrdetails[0]['Dsceregistration']['pannumber'])); ?>
                        </b>
                     </h5>
                    <hr>
                     <h5>Aadhar Number : 
                        <b>  <?php echo strip_tags(html_entity_decode($usrdetails[0]['Dsceregistration']['aadharnumber'])); ?>
                        </b>
                     </h5>
                    <hr>
                     <h5>Telephone Number : 
                        <b>  <?php echo strip_tags(html_entity_decode($usrdetails[0]['Dsceregistration']['telephone'])); ?>
                        </b>
                     </h5>
                    <hr>
                     <h5>State/Province : 
                        <b>  <?php echo strip_tags(html_entity_decode($usrdetails[0]['Dsceregistration']['state'])); ?>
                        </b>
                     </h5>
                    <hr>
                     <h5>Country Name : 
                        <b>  <?php echo strip_tags(html_entity_decode($usrdetails[0]['Dsceregistration']['country'])); ?>
                        </b>
                     </h5>
                    <hr>
                     <h5>Postal Code: 
                        <b>  <?php echo strip_tags(html_entity_decode($usrdetails[0]['Dsceregistration']['postalcode'])); ?>
                        </b>
                     </h5>
                    <hr>
                    <h5>Organizational Unit Name : 
                        <b>  <?php echo strtoupper(strip_tags(html_entity_decode($usrdetails[0]['Dsceregistration']['orgunitname']))); ?>
                        </b>
                     </h5>
                    <hr>
                    <h5>Organization Name: 
                        <b> <?php echo strtoupper(strip_tags(html_entity_decode($usrdetails[0]['Dsceregistration']['orgname']))); ?>
                        </b>
                     </h5>
                    <hr>
                    <!-- Precios -->
                   
        
                    <!-- Detalles especificos del producto -->
                    <div class="section">
                        <h5 class="title-attr">Address line 1 :</h5>
                    </div>
                    <div class="section">
                           <b><ul>
                                <li><?php echo strtoupper(strip_tags(html_entity_decode($usrdetails[0]['Dsceregistration']['addresslinefirst']))); ?> </li>
                           </ul></b> 
                    </div>   
                    <hr>  
                     <div class="section">
                        <h5 class="title-attr">Address line 2 :</h5>
                    </div>
                    <div class="section">
                           <b><ul>
                                <li><?php echo strtoupper(strip_tags(html_entity_decode($usrdetails[0]['Dsceregistration']['addresslinesceond']))); ?> </li>
                           </ul></b> 
                    </div> 
                    <hr>    
                     <h5> Locality: 
                        <b>  <?php echo strtoupper(strip_tags(html_entity_decode($usrdetails[0]['Dsceregistration']['locality']))); ?>
                        </b>
                     </h5>
                    <hr>     
                     <h5> City: 
                        <b>  <?php echo strtoupper(strip_tags(html_entity_decode($usrdetails[0]['Dsceregistration']['city']))); ?>
                        </b>
                     </h5>
                    <hr>  
                     <h5> GST Number: 
                        <b>  <?php echo strip_tags(html_entity_decode($usrdetails[0]['Dsceregistration']['gstnumber'])); ?>
                        </b>
                     </h5>
                    <hr>  
                     <h5> Challenge Passphrase: 
                        <b> <?php echo strtoupper(strip_tags(html_entity_decode($usrdetails[0]['Dsceregistration']['password']))); ?>
                        </b>
                     </h5>
                    <hr>  
                     <h5> Confirm Passphrase: 
                        <b> <?php echo strtoupper(strip_tags(html_entity_decode($usrdetails[0]['Dsceregistration']['confpassword']))); ?>
                        </b>
                     </h5>
                    <hr>
                     <h5> Registration No: 
                        <b> <?php echo strip_tags(html_entity_decode($usrdetails[0]['Dsceregistration']['registrationno'])); ?>>
                        </b>
                     </h5>
	                    <hr>
	                    <div class="section">
                        <h5 class="title-attr">Comment :</h5>
                    </div>
                    <div class="section">
                           <b><ul>
                                <li><?php echo strtoupper(strip_tags(html_entity_decode($usrdetails[0]['Dsceregistration']['comment']))); ?> </li>
                           </ul></b> 
                    </div> 
                    <hr>   
	                     <h5> Registration For: 
                        <b> <?php echo strip_tags(html_entity_decode($usrdetails[0]['Dsceregistration']['registerfor'])); ?>
                        </b>
                     </h5>
                    <hr>  
                     <h5> Registration Number: 
                        <b> <?php echo strip_tags(html_entity_decode($usrdetails[0]['Dsceregistration']['registrationnumber'])); ?>
                        </b>
                     </h5>
                     <hr>
                      <h5> Role /Type : 
                        <b>  <?php

                        	 $string = $usrdetails[0]['Dsceregistration']['role'];
              echo $string = strtoupper(str_replace("_"," ",$string));
                          ?>
                        </b>
                     </h5>
                  
                </div>                              
        
               
            </div>             
            </div>
          </div>
        </div>
      </div>
	  
	  <script type="text/javascript" src="/js/plugins/jquery.dataTaples.min.js"></script>
    <script type="text/javascript" src="/js/plugins/dataTaples.pootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTaple').DataTaple();
	
	
	</script>




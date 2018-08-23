<!-- <html></html> -->
	<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1>Registration List</h1>
           
          </div>
          <div class="text-center" style="color: red;">
            <?php echo $this->Flash->render(); 
                    //echo $roletypestore = $this->Session->read('roletype');
              ?>
          </div>
          <div><a class="btn btn-primary btn-flat" href="#"><i class="fa fa-lg fa-plus"></i></a><a class="btn btn-info btn-flat" href="#"><i class="fa fa-lg fa-refresh"></i></a><a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a></div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
					           <th>Sr.No </th>
                      <th>Aadhar no</th>
                      <th>Telephone no</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Pan number</th>
                      <th>Locality</th>
                      <th>Org Name</th>
                      <th>Gst Number</th>
                      <th>Registration Number</th>
                      <th>Comment</th>
                      <th>Type</th>
                      <th>Aadhar</th>
                      <th>Created</th>
                      <th colspan="4">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                   <?php 
				   $count=1;
				   foreach($services as $service): ?>                
        
            <td><?php echo $count; ?></td>
            <td><?php echo $service['Dsceregistration']['aadharnumber'];?></td>
            <td style="text-align: center;" class="limit">
            	<?php echo strip_tags(html_entity_decode($service['Dsceregistration']['telephone'])); ?></td>
            <td style="text-align: center;">
            	<?php echo $service['Dsceregistration']['firstname']; ?>
            </td>
            <td style="text-align: center;">
            	<?php echo $service['Dsceregistration']['lastname']; ?>
          	</td>
            <td style="text-align: center;">
              <?php echo $service['Dsceregistration']['email']; ?>
            </td>
            <td style="text-align: center;">
              <?php echo $service['Dsceregistration']['pannumber']; ?>
            </td>
            <td style="text-align: center;">
              <?php echo $service['Dsceregistration']['locality']; ?>
            </td>
            <td style="text-align: center;">
              <?php echo $service['Dsceregistration']['orgname']; ?>
            </td>
            <td style="text-align: center;">
              <?php echo $service['Dsceregistration']['gstnumber']; ?>
            </td>
            <td style="text-align: center;">
              <?php echo $service['Dsceregistration']['registrationnumber']; ?>
            </td>
            <td style="text-align: center;">
              <?php echo $service['Dsceregistration']['comment']; ?>
            </td>
            <td style="text-align: center;">
              <?php
               $string = $service['Dsceregistration']['role'];
              echo $string = strtoupper(str_replace("_"," ",$string));
                ?>
            </td>
            <td style="text-align: center;">
               <img src="/document/<?php echo $service['Dsceregistration']['addhar']; ?>" class="img-responsive img-thumbnail" style="height: 100px;width: 100px;"/>
            </td>
          <!--   <td style="text-align: center;">
               <img src="/document/<?php //echo $service['Dsceregistration']['pan']; ?>" class="img-responsive img-thumbnail" style="height: 100px;width: 100px;"/>
            </td> -->
            <td style="text-align: center;">
              <?php echo $service['Dsceregistration']['created']; ?>
            </td>
           <td style="width: 35%;">
           			<?php echo $this->Html->link('<i class="fa fa-info"></i>', array('controller' => 'Services', 'action' => 'registrationdetails', $service['Dsceregistration']['id'],'admin'=>true,),array('escape' => false,'class'=>'btn btn-info '));?>


                  <?php echo $this->Html->link('<i class="fa fa-trash-o" aria-hidden="true"></i>', array('controller' => 'Services', 'action' => 'deleteregistration',$service['Dsceregistration']['id'],'admin'=>true,),array('escape' => false,'class'=>'btn btn-danger '));?>
            </td>
        </tr>
        <?php
 $count++;		
		endforeach; ?>
        <?php unset($service); ?>
                    
                  </tbody>
                </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  
	  <script type="text/javascript" src="/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();
	
	$(document).ready(function {
    var $this = $(this);
var content = $('.limit:first').text();
    var limit = content.substring(0, 10);

    $('.limit').text(limit);    

    $('.more').click(function() { 

        var $this = $(this);
        var test = $this.siblings('span').text();
        var length = test.length;

        if(length == 10){

            $this.siblings('span').text(content);

        }
        else {

            $this.siblings('span').text(limit);
        }

    });
 });
	</script>

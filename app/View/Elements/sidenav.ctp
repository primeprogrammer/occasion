<!-- <html><html> -->
     <nav id="sidebar">
            <div class="sidebar-header">
                <h1>            
               <?php  echo $this->Html->link(
    $this->Html->tag('span', '', array('class' => 'icon new')) . "Wishes",
    array('controller' => 'Registrations', 'action' => 'filelist'),
    array('class' => 'some other  classes', 'escape' => false));  ?> 
                </h1>
                <span>W</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li class="active">
                 <!--    <a href="first.html">
                        <i class="fas fa-th-large"></i>
                        New Feed
                    </a> -->
                       <?php echo $this->Html->link(
    $this->Html->tag('span', '', array('class' => 'fa fa-th-large')) ."  Dashboard",
    array('controller' => 'Registrations', 'action' => 'filelist'),
    array('class' => 'some other  classes', 'escape' => false,'div'=>false));  ?> 
                </li>
                
                <li>
                      <?php echo $this->Html->link(
    $this->Html->tag('span', '', array('class' => 'fas fa-user-plus')) ."  Customer Registration",
    array('controller' => 'Registrations', 'action' => 'adduser'),
    array('class' => 'some other  classes', 'escape' => false,'div'=>false));  ?> 
                </li>
                  <li>
                            <?php echo $this->Html->link(
    $this->Html->tag('span', '', array('class' => 'fas fa-envelope')) ."  Send SMS",
    array('controller' => 'Registrations', 'action' => 'sendsms'),
    array('class' => 'some other  classes', 'escape' => false,'div'=>false));  ?> 
                </li>
               <li>
               <?php echo $this->Html->link(
    $this->Html->tag('span', '', array('class' => 'fas fa-birthday-cake')) ."   Birthday",
    array('controller' => 'Registrations', 'action' => 'birhtday'),
    array('class' => 'some other  classes', 'escape' => false,'div'=>false));  ?> 
                </li>
                <li>
                              <?php echo $this->Html->link(
    $this->Html->tag('span', '', array('class' => 'fas fa-gift')) ."   Anniversary",
    array('controller' => 'Registrations', 'action' => 'anniversary'),
    array('class' => 'some other  classes', 'escape' => false,'div'=>false));  ?> 
                </li>
             
                <li>
                      <?php echo $this->Html->link(
    $this->Html->tag('span', '', array('class' => 'far fa-calendar')) ."    Holyday",
    array('controller' => 'Registrations', 'action' => 'holyday'),
    array('class' => 'some other  classes', 'escape' => false,'div'=>false));  ?>
                   
                </li>
                <li>
                    <?php echo $this->Html->link(
    $this->Html->tag('span', '', array('class' => 'far fa-calendar-check')) ."    Special Wishes",
    array('controller' => 'Registrations', 'action' => 'spacialwishes'),
    array('class' => 'some other  classes', 'escape' => false,'div'=>false));  ?>
                </li>
              
                     <li>
                    <?php echo $this->Html->link(
    $this->Html->tag('span', '', array('class' => 'fa fa-object-group')) ."    Group ",
    array('controller' => 'Registrations', 'action' => 'addgroup'),
    array('class' => 'some other  classes', 'escape' => false,'div'=>false));  ?>
                </li>
            </ul>
        </nav>
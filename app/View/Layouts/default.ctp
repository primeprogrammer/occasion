<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>

<?php 
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');


//  if(!empty($this->params['action']))
// {
// 	if($this->params['action']=='frontindex')
// 	echo "id='page1'";
// 	if($this->params['action']=='frontdownload')
// 	echo "id='page2'";
// 	if($this->params['action']=='frontourservices')
// 	echo "id='page3'";
// 	if($this->params['action']=='frontaboutus')
// 	echo "id='page4'";
// 	if($this->params['action']=='frontcontactus')
// 	echo "id='page5'";
// }	
	
?> 

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
  <title>Wishes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

 <?php echo $this->html->css(array('/css/bootstrap.css','/css/style.css')); ?>

     <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
 
<?php echo $this->html->script(array('/js/jquery-2.2.3.min.js','/js/bootstrap.min.js')); ?>
  <!-- Theme skin -->
  <link href="/re_layout/color/default.css" rel="stylesheet" />



  </head>
<body   >
  <div class="bg-page py-5">
        <div class="container">
   	<?php 
      	  echo $this->fetch('content');
     
    ?>
  
  </div>
</div>
  <?php echo $this->element('sql_dump'); ?>

    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/7EEBE7D7-18EB-E144-8A86-3DF58FC63705/main.js" charset="UTF-8"></script><script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
</body>
</html>





















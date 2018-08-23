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
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php //echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<?php
		echo $this->Html->meta('icon');

		
		echo $this->Html->css('/css/bootstrap.css');
		echo $this->Html->css('/css/bar.css');
		echo $this->Html->css('/css/pignose.calender.css');
		echo $this->Html->css('/css/fontawesome-all.css');
		echo $this->Html->css('/css/simplyCountdown.css');
		echo $this->Html->css('/css/style.css');
		echo $this->Html->css('/css/style4.css');
        echo $this->Html->css('/css/event.css');
		
		
		
		echo $this->Html->script('/js/jquery-2.2.3.min.js', array('inline' => false));
		echo $this->Html->script('/js/modernizr.js', array('inline' => false));
		echo $this->Html->script('/js/moment.min.js', array('inline' => false));
		echo $this->Html->script('/js/pignose.calender.js', array('inline' => false));
		echo $this->Html->script('/js/script.js', array('inline' => false));
		echo $this->Html->script('/js/simplyCountdown.js', array('inline' => false));
		echo $this->Html->script('/js/bootstrap.min.js', array('inline' => false));
		

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	 <script>
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    
    <script>
		$(document).ready(function(){  
  $('login.html').load('login.html', function() {
      $(this).show();
    });
});
		</script>
    <script>
        //<![CDATA[
        $(function () {
            $('.calender').pignoseCalender({
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '.');
                }
            });

            $('.multi-select-calender').pignoseCalender({
                multiple: true,
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '~' +
                        (date[1] === null ? 'null' : date[1].format('YYYY-MM-DD')) +
                        '.');
                }
            });
        });
        //]]>
    </script>
    <script>
        var d = new Date();
        simplyCountdown('simply-countdown-custom', {
            year: d.getFullYear(),
            month: d.getMonth() + 2,
            day: 25
        });
    </script>
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
 	    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/7EEBE7D7-18EB-E144-8A86-3DF58FC63705/main.js" charset="UTF-8"></script><script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
</head>
  <body>
      <div class="se-pre-con"></div>
   		 <div class="wrapper">
	<?php 
if($this->Session->check('Auth.User')){
echo $this->element('sidenav');  } ?>

			

			<?php echo $this->fetch('content'); ?>
		
	        
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
 
</html>

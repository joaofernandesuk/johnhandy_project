<?php
/**
 *
 *
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

$cakeDescription = __d('cake_dev', 'John Handy');
$cakeVersion = __d('cake_dev', 'John Handy 2013/2014 ® - All Rights Reserved')
/*$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())*/
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		/*echo $this->Html->css('cake.generic');*/
		echo $this->Html->css(array('base', 'layout', 'skeleton', 'owl.carousel', 'owl.theme', 'owl.transitions','menu_component', 'flexslider'));

		echo $this->Html->script('jquery');
		echo $this->Html->script('intro');
		echo $this->Html->script('owl.carousel');
		echo $this->Html->script('owl.carousel.min');
		echo $this->Html->script('menu');

		echo $this->Html->script('gallery_carousel/jquery.flexslider.js');

		echo $this->Html->script('gallery_carousel.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
<?php echo $this->Html->image('john_handy_background_img_02.png', array('class' => 'shadow')); ?>
<div class="text_intro">Welcome to JOHN HANDY Web Page.<br \>Your Home, Our Priority!<br \>The Best Service with The Best Quality For Your House!<br \>Find Below Our Services.</div>
<div class="scroll_to_menu_div"><?php echo $this->Html->image('john_handy_arrow_intro.png', array('class' => 'scroll_to_menu')); ?></div>
	<div id="container">
		<div id="header">
			<div class="main clearfix">
				<nav id="menu" class="nav">					
					<ul>
						<li>
							<?php echo $this->Html->link('
							<span class="icon"> 
									<i aria-hidden="true" class="icon-home"></i>
								</span>
								<span>Home</span>',
							 '/#menu', array('escape' => false, 'class' => 'stay_in_menu')); 
						?> 
						</li>
						<li>
						<?php echo $this->Html->link('
							<span class="icon"> 
									<i aria-hidden="true" class="icon-services"></i>
								</span>
								<span>Services</span>',
							 '/services/#menu', array('escape' => false, 'class' => 'stay_in_menu')); 
						?> 
						</li>
						<li>
						<?php echo $this->Html->link('
							<span class="icon"> 
									<i aria-hidden="true" class="icon-portfolio"></i>
								</span>
								<span>Portfolio</span>',
							 '/portfolio/#menu', array('escape' => false, 'class' => 'stay_in_menu')); 
						?> 
						</li>
						<li>
							<?php echo $this->Html->link('
							<span class="icon"> 
									<i aria-hidden="true" class="icon-team"></i>
								</span>
								<span>About Us</span>',
							 '/aboutus/#menu', array('escape' => false, 'class' => 'stay_in_menu')); 
						?> 
						</li>
						<li>
							<?php echo $this->Html->link('
							<span class="icon"> 
									<i aria-hidden="true" class="icon-contact"></i>
								</span>
								<span>Contacts</span>',
							 '/contacts/#menu', array('escape' => false, 'class' => 'stay_in_menu')); 
						?> 
						</li>
						<li>
							<?php echo $this->Html->link('
							<span class="icon"> 
									<i aria-hidden="true" class="icon-blog"></i>
								</span>
								<span>Feedback</span>',
							 '/feedback/#menu', array('escape' => false, 'class' => 'stay_in_menu')); 
						?> 
						</li>
					</ul>
				</nav>
			</div>

		<script>
			//  The function to change the class
			var changeClass = function (r,className1,className2) {
				var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
				if( regex.test(r.className) ) {
					r.className = r.className.replace(regex,' '+className2+' ');
			    }
			    else{
					r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
			    }
			    return r.className;
			};	

			//  Creating our button in JS for smaller screens
			var menuElements = document.getElementById('menu');
			menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

			//  Toggle the class on click to show / hide the menu
			document.getElementById('menutoggle').onclick = function() {
				changeClass(this, 'navtoogle active', 'navtoogle');
			}

			// http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
			document.onclick = function(e) {
				var mobileButton = document.getElementById('menutoggle'),
					buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

				if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
					changeClass(mobileButton, 'navtoogle active', 'navtoogle');
				}
			}
		</script>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<div id="footer_first_section">
				<div class="footer_title">Site Map:</div>
				<div class="footer_text footer_text_first">Home</div>
				<div class="footer_text">Check Our Services</div>
				<div class="footer_text">Look Our Portfolio</div>
				<div class="footer_text">About Us</div>
				<div class="footer_text">Contacts Us</div>
				<div class="footer_text">Give Us Feedback</div>
			</div>
			<div id="footer_second_section">
				<div class="footer_title">Follow Us:</div>
				<?php
					echo $this->Html->link(
						$this->Html->image('facebook_logo.png', array('alt' => $cakeDescription, 'border' => '0')),
						'http://www.johnhandy.co.uk/',
						array('target' => '_blank', 'escape' => false, 'id' => 'logo_footer')
					);
					echo $this->Html->link(
						$this->Html->image('linkdin_logo.png', array('alt' => $cakeDescription, 'border' => '0')),
						'http://www.johnhandy.co.uk/',
						array('target' => '_blank', 'escape' => false, 'id' => 'logo_footer')
					);
				?>
			</div>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
</body>
</html>

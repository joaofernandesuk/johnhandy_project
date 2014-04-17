<div id="contacts">
	<div class="container">
    <legend><h1><?php echo __('Contacts'); ?></h1></legend>
    <h5><?php echo __("If you have any doubt or any issues that you wan't to solve it with us, just contact us. Give us a call to discuss whatever you wan't, or just send us an email. You can send trough our mail sender. Quick and easy :)"); ?></h5><p>


    	<div class="email_content">
	    	<?php echo $this->Html->image('mail_pic.png', array('class' => 'icons')); ?>
	    	<div class="icons_text">
				<h5><?php echo __("Send us a e-Mail:"); ?></h5>
				<h5><?php echo __("(john@johnhandy.co.uk)"); ?></h5>
			</div>
			<?php
				echo $this->Session->flash();

				echo $this->Form->create('Page');
				echo $this->Form->input('from_email');
				echo $this->Form->input('from_name');
				echo $this->Form->input('subject');
				echo $this->Form->input('message', array('rows' => '5'));

				echo $this->Form->end('Send e-Mail');
			?>
		</div>

		<div class="telefone_content">
			<?php echo $this->Html->image('phone_pic.png', array('class' => 'icons')); ?>
			<div class="icons_text">
				<h5><?php echo __("Phone Number:"); ?></h5>
				<h5><?php echo __("44 (0) 07957 986 205"); ?></h5>
			</div>
		</div>

		<div class="map_location">
			<?php echo $this->Html->image('visit_pic.png', array('class' => 'icons')); ?>
			<div class="icons_text">
				<h5><?php echo __("We are based in:"); ?></h5>
				<h5><?php echo __("South Oxhey, Watford"); ?></h5>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m8!1m3!1d9908.07156952869!2d-0.384143!3d51.6228814!3m2!1i1024!2i768!4f13.1!4m12!1i0!3e6!4m3!3m2!1d51.623680699999994!2d-0.3627282!4m5!1s0x48766b3109222ad7%3A0x2934fe3829df9941!2sSouth+Oxhey%2C+Watford%2C+Hertfordshire+WD19%2C+UK!3m2!1d51.622882!2d-0.38414299999999996!5e0!3m2!1sen!2s!4v1397761788726" width="100%" height="100%" frameborder="0" style="border:0">
			</iframe>
		</div>
	</div><!-- container -->
</div>
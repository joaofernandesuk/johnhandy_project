<div class="gallery">
<div class="container">

    <div class="actions">
        <h3><?php __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('Look Other Feedbacks', true), array('controller' => 'feedbacks', 'action' => 'customer_index')); ?></li>
        </ul>
    </div>

	<div class="cont">
		<legend><h1><?php echo __('Give Us Your Feedback'); ?></h1></legend>
		<h5><?php echo __("Here you can tell us your thoughts about our company and about your experience with us. Don't hesitate to express yourself. Your opinion counts, and it's very important to the proper functioning of our company. "); ?></h5><p>

		<?php
		echo $this->Form->create('Feedback', array('type' => 'file'));?>
		<fieldset>

		<?php 
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('title');
		echo $this->Form->input('body', array('rows' => '5'));

		/* echo $this->Form->input('captcha', array('label' => 'Calculate this: '.$captcha)); */
		echo $this->Html->image('captcha.jpg', array('style' => 'padding: 0.5%;'));
    	echo $this->Form->input('captcha');

		echo $this->Form->submit('Submit Feedback', array('class' => 'form-submit',  'title' => 'Click here to add the Feedback') ); 

		echo $this->Form->end(); ?>
	</div>

</div>
</div>
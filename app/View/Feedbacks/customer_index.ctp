<div class="feedback">
<div class="container">

	<div class="header_icon feedbacks_icon"></div>
    <legend><h1><?php echo __('Your Feedback'); ?></h1></legend>
	<h5><?php echo __("Here you can tell us your thoughts about our company and about your experience with us. Don't hesitate to express yourself. Your opinion counts, and it's very important to the proper functioning of our company. "); ?></h5><p>
    
    <div class="feedback_action">

    	<?php echo $this->Form->create('Feedback', array('type' => 'file'));?>

		

		<?php 
		echo $this->Form->input('name', array ('class' => 'feedback_input'));
		echo $this->Form->input('email', array ('class' => 'feedback_input'));
		echo $this->Form->input('title', array ('class' => 'feedback_input'));
		echo $this->Form->input('body', array('rows' => '10'));

		/* echo $this->Form->input('captcha', array('label' => 'Calculate this: '.$captcha)); */
		echo $this->Html->image('captcha.jpg', array('style' => 'padding: 0.5%;'));
    	echo $this->Form->input('Insert Text Above');

		echo $this->Form->submit('Submit Feedback', array('class' => 'form-submit',  'title' => 'Click here to add the Feedback') ); 

		echo $this->Form->end(); ?>
		
    </div>

	<div class="feedback_cont">

        <!-- Here is where we loop through our $posts array, printing out post info -->

        <?php foreach ($feedbacks as $feedback): ?>
        
        
        <div class="feedback_div">
            <div class="feedback_left">
            	<span style="font-size: 14px;"><?php echo $feedback['Feedback']['name']; ?></span>
            	<span><p><?php echo $feedback['Feedback']['title']; ?></span>
            	<p><?php echo $feedback['Feedback']['created']; ?>
            </div>
            <div class="feedback_right">
            	<span style="font-size: 70px; position: absolute; margin-left: -30px">``</span>
            	<span style="font-weight: bold;"><?php echo substr($feedback['Feedback']['body'],0,70); ?>...</span><p>
            	<span class="read_more"><?php echo $this->Html->link('Read More', array('controller' => 'feedbacks', 'action' => 'customer_view', $feedback['Feedback']['id'])); ?></span>
            </div>
        </div>

        <?php endforeach; ?>
        <?php unset($feedback); ?>

            <div class="paging" style="margin-left: 10%">
                <?php echo $this->Paginator->prev('<< ' . __('next', true), array(), null, array('class'=>'disabled'));?>
                <?php echo $this->Paginator->numbers();?>
                <?php echo $this->Paginator->next(__('previous', true) . ' >>', array(), null, array('class' => 'disabled'));?>
            </div>
    </div>

</div>
</div>
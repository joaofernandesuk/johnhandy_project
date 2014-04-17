u<div class="gallery">
<div class="container">

    <div class="actions">
        <h3><?php __('Actions'); ?></h3>
        <ul>
			<li><?php echo $this->Html->link(__('Back to Feedbacks', true), array('controller' => 'feedbacks', 'action' => 'customer_index')); ?></li>
        </ul>
    </div>

    <div class="cont">
		<h4><?php echo h($feedback['Feedback']['name']); ?></h4>
		<h4><?php echo h($feedback['Feedback']['email']); ?></h4>
		<h1><?php echo h($feedback['Feedback']['title']); ?></h1>

		<p><small>Created: <?php echo $feedback['Feedback']['created']; ?></small></br>

		<p><?php echo __('Feedback:');?></br>
		<?php echo h($feedback['Feedback']['body']); ?>
	</div>

</div>
</div>
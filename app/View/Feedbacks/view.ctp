u<div class="gallery">
<div class="container">

    <div class="actions">
        <h3><?php __('Actions'); ?></h3>
        <ul>
        	<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Feedback.id')), null, sprintf(__('Are you sure you want to delete this Feedback?'))); ?></li>
            <li><?php echo $this->Html->link(__('List Galleries', true), array('controller' => 'galleries', 'action' => 'index'));?></li>
            <li><?php echo $this->Html->link(__('New Gallery', true), array('controller' => 'galleries', 'action' => 'add')); ?></li>
            <li><?php echo $this->Html->link(__('List Photos', true), array('controller' => 'photos', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Photo', true), array('controller' => 'photos', 'action' => 'add')); ?> 
            <li><?php echo $this->Html->link(__('List Feedbacks', true), array('controller' => 'feedbacks', 'action' => 'index'));?></li>
            <li><?php echo $this->Html->link(__('New Feedback', true), array('controller' => 'feedbacks', 'action' => 'add')); ?></li>
            </li>
            <li>
                <?php 
                if($this->Session->check('Auth.User')){
                echo $this->Html->link( "Return to Dashboard",   array('controller' => 'users', 'action'=>'index') ); 
                echo "<br>";
                echo $this->Html->link( "Logout",   array('controller' => 'users', 'action'=>'logout') ); 
                }else{
                echo $this->Html->link( "Return to Login Screen",   array('controller' => 'users', 'action'=>'login') ); 
                }
                ?>
            </li>
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
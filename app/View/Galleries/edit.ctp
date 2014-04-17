<div class="gallery">
<div class="container">

	<div class="actions">
		<h3><?php __('Actions'); ?></h3>
		<ul>
		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Gallery.id')), null, sprintf(__('Are you sure you want to delete "%s"?', $this->Form->value('Gallery.title')))); ?></li>
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
		<h1>Edit Gallery</h1>
		<?php
		echo $this->Form->create('Gallery');
		echo $this->Form->input('title');
		echo $this->Form->input('body', array('rows' => '3'));
		echo $this->Form->input('id', array('type' => 'hidden'));
		echo $this->Form->end('Save Gallery');
		?>
	</div>

</div>
</div>
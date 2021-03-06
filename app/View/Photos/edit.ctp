<div class="gallery">
<div class="container">

	<div class="actions">
		<h3><?php __('Actions'); ?></h3>
		<ul>

			<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Photo.id')), null, sprintf(__('Are you sure you want to delete %s?', $this->Form->value('Photo.name')))); ?></li>
			<li><?php echo $this->Html->link(__('List Photos', true), array('controller' => 'photos', 'action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('New Photo', true), array('controller' => 'photos', 'action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List Galleries', true), array('controller' => 'galleries', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Gallery', true), array('controller' => 'galleries', 'action' => 'add')); ?> 
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
		<legend><h1><?php echo __('Edit %s', $this->Form->value('Photo.name')); ?></h1></legend>
		<?php echo $this->Form->create('Photo');?>
			<fieldset>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('gallery_id');
				echo $this->Form->input('name');
				echo $this->Form->input('img_file', array('type' => 'file'));
				/* echo $this->Form->input('img_file', array('type' => 'file')); */
				
				
				/* echo $this->Form->input('Photo.img_file.remove',  array('type' => 'checkbox', 'label' => 'Delete Photo')); */
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit', true));?>
	</div>

</div>
</div>
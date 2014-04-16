<div class="gallery">
<div class="container">

	<div class="actions">
		<h3><?php __('Actions'); ?></h3>
		<ul>

			<li><?php echo $this->Html->link(__('List Galleries', true), array('controller' => 'galleries', 'action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List Photos', true), array('controller' => 'photos', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Photo', true), array('controller' => 'photos', 'action' => 'add')); ?> 
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
		<legend><h1><?php echo __('Add Gallery'); ?></h1></legend>
		<?php
		echo $this->Form->create('Gallery', array('type' => 'file'));?>
		<fieldset>

		<?php 
		echo $this->Form->input('title');
		echo $this->Form->input('body', array('rows' => '3'));
		/* echo $this->Form->input('Photo.0.attachment', array('type' => 'file', 'label' => 'Photo'));
		echo $this->Form->input('Photo.0.gallery_id', array('type' => 'file', 'value' => 'Gallery')); */
		echo $this->Form->submit('Add Gallery', array('class' => 'form-submit',  'title' => 'Click here to add the Gallery') ); 

		?>

		</fieldset>
		<?php echo $this->Form->end(); ?>
	</div>

</div>
</div>
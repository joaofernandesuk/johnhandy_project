<div class="gallery">
<div class="container">

<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Galleries', true), array('controller' => 'galleries', 'action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Photos', true), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery', true), array('controller' => 'galleries', 'action' => 'add')); ?> </li>
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
	    <legend><h1><?php echo __('New Photo'); ?></h1></legend>
		<?php echo $this->Form->create('Photo', array('type' => 'file')); ?>
			<fieldset>
		 		<legend><?php __('Add Photo'); ?></legend>
			<?php
				echo $this->Form->input('Photo.gallery_id');
				echo $this->Form->input('Photo.name');
				echo $this->Form->input('Photo.img_file', array('type' => 'file'));
				/* echo $this->Form->input('Photo.img_dir', array('type' => 'hidden')); */
				echo $this->Form->submit('Add Photo', array('class' => 'form-submit',  'title' => 'Click here to add the Photo') ); 
			?>
			</fieldset>
		<?php echo $this->Form->end(); ?>
	</div>

</div>
</div>
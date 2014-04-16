<div class="users">
<div class="container">

	<div class="actions">
		<?php echo $this->Html->link( "New User",   array('action'=>'add') ); ?>
	</div>
	<div class="cont">
	<legend><h1><?php echo __('Admin Login'); ?></h1></legend>
		<?php echo $this->Session->flash('auth'); ?>
		<?php echo $this->Form->create('User'); ?>
		    <fieldset>
		        <?php echo $this->Form->input('username');
		        echo $this->Form->input('password');
		    ?>
		    </fieldset>
		<?php echo $this->Form->end(__('Login')); ?>
	</div>

</div>
</div>
<div class="users">
<div class="container">

	<div style="border: solid 5px #CCC; margin: 0 auto; width: 300px; padding: 20px; margin: 0 auto 20px;">
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
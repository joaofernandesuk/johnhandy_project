<div id="photos_content">
	<div class="container">
		<div class="photos form">
		<?php echo $this->Form->create('Photo'); ?>
			<fieldset>
				<legend><?php echo __('Add Photo'); ?></legend>
			<?php
				echo $this->Form->input('description');
				echo $this->Form->input('photo');
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>

				<li><?php echo $this->Html->link(__('List Photos'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Portfolio Categories'), array('controller' => 'portfolio_categories', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Portfolio Category'), array('controller' => 'portfolio_categories', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>
<div id="photos_content">
	<div class="container">
		<div class="photos form">
		<?php echo $this->Form->create('Photo'); ?>
			<fieldset>
				<legend><?php echo __('Edit Photo'); ?></legend>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('description');
				echo $this->Form->input('photo');
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>

				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Photo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Photo.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List Photos'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Portfolio Categories'), array('controller' => 'portfolio_categories', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Portfolio Category'), array('controller' => 'portfolio_categories', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>
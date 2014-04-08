<div id="portfolioCategories_content">
	<div class="container">
		<div class="portfolioCategories form">
		<?php echo $this->Form->create('PortfolioCategory'); ?>
			<fieldset>
				<legend><?php echo __('Add Portfolio Category'); ?></legend>
			<?php
				echo $this->Form->input('name');
				echo $this->Form->input('photo_id');
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>

				<li><?php echo $this->Html->link(__('List Portfolio Categories'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Photos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>
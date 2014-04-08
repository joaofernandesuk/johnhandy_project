<div id="portfolioCategories_content">
	<div class="container">
		<div class="portfolioCategories form">
		<?php echo $this->Form->create('PortfolioCategory'); ?>
			<fieldset>
				<legend><?php echo __('Edit Portfolio Category'); ?></legend>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('name');
				echo $this->Form->input('photo_id');
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>

				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PortfolioCategory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PortfolioCategory.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List Portfolio Categories'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Photos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
</div>
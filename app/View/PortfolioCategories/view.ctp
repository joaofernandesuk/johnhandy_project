<div id="portfolioCategories_content">
<div class="container">
<div class="portfolioCategories view">
<h2><?php echo __('Portfolio Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($portfolioCategory['PortfolioCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($portfolioCategory['PortfolioCategory']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($portfolioCategory['Photo']['id'], array('controller' => 'photos', 'action' => 'view', $portfolioCategory['Photo']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Portfolio Category'), array('action' => 'edit', $portfolioCategory['PortfolioCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Portfolio Category'), array('action' => 'delete', $portfolioCategory['PortfolioCategory']['id']), null, __('Are you sure you want to delete # %s?', $portfolioCategory['PortfolioCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Portfolio Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Portfolio Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>

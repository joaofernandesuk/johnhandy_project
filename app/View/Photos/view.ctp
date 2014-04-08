<div id="photos_content">
	<div class="container">
		<div class="photos view">
		<h2><?php echo __('Photo'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($photo['Photo']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Description'); ?></dt>
				<dd>
					<?php echo h($photo['Photo']['description']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Photo'); ?></dt>
				<dd>
					<?php echo h($photo['Photo']['photo']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Edit Photo'), array('action' => 'edit', $photo['Photo']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Photo'), array('action' => 'delete', $photo['Photo']['id']), null, __('Are you sure you want to delete # %s?', $photo['Photo']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Photos'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Photo'), array('action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Portfolio Categories'), array('controller' => 'portfolio_categories', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Portfolio Category'), array('controller' => 'portfolio_categories', 'action' => 'add')); ?> </li>
			</ul>
		</div>
		<div class="related">
			<h3><?php echo __('Related Portfolio Categories'); ?></h3>
			<?php if (!empty($photo['PortfolioCategory'])): ?>
			<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Name'); ?></th>
				<th><?php echo __('Photo Id'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($photo['PortfolioCategory'] as $portfolioCategory): ?>
				<tr>
					<td><?php echo $portfolioCategory['id']; ?></td>
					<td><?php echo $portfolioCategory['name']; ?></td>
					<td><?php echo $portfolioCategory['photo_id']; ?></td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('controller' => 'portfolio_categories', 'action' => 'view', $portfolioCategory['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('controller' => 'portfolio_categories', 'action' => 'edit', $portfolioCategory['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'portfolio_categories', 'action' => 'delete', $portfolioCategory['id']), null, __('Are you sure you want to delete # %s?', $portfolioCategory['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</table>
		<?php endif; ?>

			<div class="actions">
				<ul>
					<li><?php echo $this->Html->link(__('New Portfolio Category'), array('controller' => 'portfolio_categories', 'action' => 'add')); ?> </li>
				</ul>
			</div>
		</div>
	</div>
</div>
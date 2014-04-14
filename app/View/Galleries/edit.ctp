<div class="gallery">
<div class="container">

	<div class="actions">
		<h3><?php __('Actions'); ?></h3>
		<ul>

			<li><?php echo $this->Html->link(__('List Galleries', true), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('Add Gallery', true), array('controller' => 'galleries', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List Photos', true), array('controller' => 'photos', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Photo', true), array('controller' => 'photos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
	<div class="cont">
		<h1>Edit Gallery</h1>
		<?php
		echo $this->Form->create('Gallery');
		echo $this->Form->input('title');
		echo $this->Form->input('body', array('rows' => '3'));
		echo $this->Form->input('id', array('type' => 'hidden'));
		echo $this->Form->end('Save Gallery');
		?>
	</div>

</div>
</div>
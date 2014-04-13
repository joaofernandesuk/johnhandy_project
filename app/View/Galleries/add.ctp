<div class="gallery">
<div class="container">

<legend><h1><?php echo __('Add Gallery'); ?></h1></legend>
<?php
echo $this->Form->create('Gallery');?>
<fieldset>

<?php 
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
/*echo $this->Form->end('Save Gallery');*/
echo $this->Form->submit('Add Gallery', array('class' => 'form-submit',  'title' => 'Click here to add the Gallery') ); 
?>

</fieldset>
<?php echo $this->Form->end(); ?>

<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Galleries', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Images', true), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image', true), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>

</div>
</div>
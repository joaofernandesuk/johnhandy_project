<div class="gallery">
<div class="container">

<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Photo', true), array('controller' => 'photos', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Galleries', true), array('controller' => 'galleries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery', true), array('controller' => 'galleries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Feedbacks', true), array('controller' => 'feedbacks', 'action' => 'index'));?></li>
        <li><?php echo $this->Html->link(__('New Feedback', true), array('controller' => 'feedbacks', 'action' => 'add')); ?></li>
		<li>
                <?php 
                if($this->Session->check('Auth.User')){
                echo $this->Html->link( "Return to Dashboard", array('controller' => 'users', 'action'=>'index') ); 
                echo "<br>";
                echo $this->Html->link( "Logout", array('controller' => 'users', 'action'=>'logout') ); 
                }else{
                echo $this->Html->link( "Return to Login Screen", array('controller' => 'users', 'action'=>'login') ); 
                }
                ?>
            </li>
	</ul>
</div>

    <div class="cont">
		<legend><h1><?php echo __('Photos'); ?></h1></legend>
		<table cellpadding="0" cellspacing="0">
			<tr>
				<th><?php echo $this->Paginator->sort('id');?></th>
				<th><?php echo $this->Paginator->sort('name');?></th>
				<th><?php echo $this->Paginator->sort('img_file');?></th>
				<th><?php echo $this->Paginator->sort('gallery_id');?></th>
				<th><?php echo __('Actions'); ?></th>
			</tr>
			<?php
			
			$i = 0;
			foreach ($photos as $photo):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
				
				//****************************************** SHOW IMAGES FROM A SINGLE GALLERY *********************************************//
				if ($photo['Gallery']['id'] == 0) {
					$class = ' style="display: none;"';
				}
				
			?>
			<tr<?php echo $class;?>>
				<td>
					<?php echo $photo['Photo']['id']; ?>
				</td>
				<td>
					<?php echo $photo['Photo']['name']; ?>
				</td>
				<td>
					<div class="photo_view">
						<?php  echo $this->Html->image('photo' .  DS . 'img_file' . DS . $photo['Photo']['id'] . DS . 'thumb_' . $photo['Photo']['img_file'], array('alt' => 'Gallery Photo','url' => array('action' => 'view', $photo['Photo']['id'], 'escape' => false))); ?>
					</div>
				</td>
				<td>
					<?php echo $this->Html->link($photo['Gallery']['title'], array('controller' => 'galleries', 'action' => 'view', $photo['Gallery']['id'])); ?>
				</td>
				<td>
					<?php echo $this->Html->link(__('View', true), array('action' => 'view', $photo['Photo']['id'])); ?> |
					<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $photo['Photo']['id'])); ?> |
					<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $photo['Photo']['id']), null, sprintf(__('Are you sure you want to delete photo %s?', $photo['Photo']['img_file']))); ?>
				</td>
			</tr>
		<?php endforeach; ?>
			</table>
			<p><?php echo $this->Paginator->counter(array('separator' => ' of a total of ')); ?></p>

			<div class="paging">
				<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
			   | <?php echo $this->Paginator->numbers();?> |
				<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
			</div>
	</div>

</div>
</div>
<div class="gallery">
<div class="container">

	<div class="actions">
		<h3><?php __('Actions'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('List Photos', true), array('controller' => 'photos', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Photo', true), array('controller' => 'photos', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Galleries', true), array('controller' => 'galleries', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Gallery', true), array('controller' => 'galleries', 'action' => 'add')); ?> 
			</li>
			<li>
                <?php 
                if($this->Session->check('Auth.User')){
                echo $this->Html->link( "Return to Dashboard",   array('controller' => 'users', 'action'=>'index') ); 
                echo "<br>";
                echo $this->Html->link( "Logout",   array('controller' => 'users', 'action'=>'logout') ); 
                }else{
                echo $this->Html->link( "Return to Login Screen",   array('controller' => 'users', 'action'=>'login') ); 
                }
                ?>
            </li>
		</ul>
	</div>

	<div class="cont">
		<legend><h1><?php echo 'Photo ' . $photo['Photo']['name']; ?></h1></legend>
		<table>
			<tr>
				<td>
					<?php echo __('Id'); ?>
				</td>
				<td>
					<?php echo __('Name'); ?>
				</td>
				<td>
					<?php echo __('Gallery'); ?>
				</td>
				<td>
					<?php echo __('Img File'); ?>
				</td>
				<td>
					<?php echo __('Actions'); ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $photo['Photo']['id']; ?>
				</td>
				<td>
					<?php echo $photo['Photo']['name']; ?>
				</td>
				<td>
					<?php echo $this->Html->link($photo['Gallery']['title'], array('controller' => 'galleries', 'action' => 'view', $photo['Gallery']['id'])); ?>
				</td>
				<td>
					<?php echo $photo['Photo']['img_file']; ?>
				</td>
				<td>
					<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $photo['Photo']['id'])); ?> |
					<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $photo['Photo']['id']), null, sprintf(__('Are you sure you want to delete photo %s?', $photo['Photo']['name']))); ?>
				</td>
			</tr>
		</table>
			<?php  echo $this->Html->image('photo' .  DS . 'img_file' . DS . $photo['Photo']['id'] . DS . 'vga_' . $photo['Photo']['img_file'], array('alt' => 'Gallery Photo', 'class' => 'view_photo')); ?>
		</div>


</div>
</div>

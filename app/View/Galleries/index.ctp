<div class="gallery">
<div class="container">

    <div class="actions">
        <h3><?php __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('New Gallery', true), array('controller' => 'galleries', 'action' => 'add')); ?></li>
            <li><?php echo $this->Html->link(__('List Photos', true), array('controller' => 'photos', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Photo', true), array('controller' => 'photos', 'action' => 'add')); ?> 
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
    <legend><h1><?php echo __('Galleries'); ?></h1></legend>
    <table>
        <tr>
            <th><?php echo $this->Paginator->sort('id');?></th>
            <th><?php echo $this->Paginator->sort('title');?></th>
            <th><?php echo $this->Paginator->sort('created');?></th>
            <th><?php echo $this->Paginator->sort('modified');?></th>
            <th><?php echo __('Actions'); ?></th>
        </tr>

        <!-- Here is where we loop through our $posts array, printing out post info -->

        <?php foreach ($galleries as $gallery): ?>
        <tr>
            <td><?php echo $gallery['Gallery']['id']; ?></td>
            <td>
                <?php echo $this->Html->link($gallery['Gallery']['title'], array('controller' => 'galleries', 'action' => 'view', $gallery['Gallery']['id'])); ?>
            </td>
            <td><?php echo $gallery['Gallery']['created']; ?></td>
            <td><?php echo $gallery['Gallery']['modified']; ?></td>
            <td>
                <?php
                    echo $this->Form->postLink(
                        'Delete',
                        array('action' => 'delete', $gallery['Gallery']['id']),
                        array('confirm' => 'Are you sure?')
                    );
                ?>
                <?php
                    echo $this->Html->link(
                        '| Edit',
                        array('action' => 'edit', $gallery['Gallery']['id'])
                    );
                ?>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php unset($gallery); ?>
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
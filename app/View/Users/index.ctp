<div class="users">
<div class="container">

    <div class="actions">
        <h3><?php __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action'=>'add'),array('escape' => false)); ?></li>
            <li><?php echo $this->Html->link(__('List Galleries', true), array('controller' => 'galleries', 'action' => 'index'));?></li>
            <li><?php echo $this->Html->link(__('New Gallery', true), array('controller' => 'galleries', 'action' => 'add')); ?></li>
            <li><?php echo $this->Html->link(__('List Photos', true), array('controller' => 'photos', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Photo', true), array('controller' => 'photos', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Feedbacks', true), array('controller' => 'feedbacks', 'action' => 'index'));?></li>
            <li><?php echo $this->Html->link(__('New Feedback', true), array('controller' => 'feedbacks', 'action' => 'add')); ?></li>
            <li><?php echo $this->Html->link( "Logout",   array('controller' => 'users', 'action'=>'logout') ); ?></li>
        </ul>
    </div>

    <div class="cont">
        <h1><?php echo __('Users'); ?></h1>
        <table>
            <thead>
                <tr>
                    <th><?php echo $this->Form->checkbox('all', array('name' => 'CheckAll',  'id' => 'CheckAll')); ?></th>
                    <th><?php echo $this->Paginator->sort('username', 'Username');?>  </th>
                    <th><?php echo $this->Paginator->sort('email', 'E-Mail');?></th>
                    <th><?php echo $this->Paginator->sort('created', 'Created');?></th>
                    <th><?php echo $this->Paginator->sort('modified','Last Update');?></th>
                    <th><?php echo $this->Paginator->sort('role','Role');?></th>
                    <th><?php echo $this->Paginator->sort('status','Status');?></th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>                       
                <?php $count=0; ?>
                <?php foreach($users as $user): ?>                
                <?php $count ++;?>
                <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
                <?php endif; ?>
                    <td><?php echo $this->Form->checkbox('User.id.'.$user['User']['id']); ?></td>
                    <td><?php echo $this->Html->link( $user['User']['username']  ,   array('action'=>'edit', $user['User']['id']),array('escape' => false) );?></td>
                    <td style="text-align: center;"><?php echo $user['User']['email']; ?></td>
                    <td style="text-align: center;"><?php echo $this->Time->niceShort($user['User']['created']); ?></td>
                    <td style="text-align: center;"><?php echo $this->Time->niceShort($user['User']['modified']); ?></td>
                    <td style="text-align: center;"><?php echo $user['User']['role']; ?></td>
                    <td style="text-align: center;"><?php echo $user['User']['status']; ?></td>
                    <td >
                    <?php echo $this->Html->link(    "Edit",   array('action'=>'edit', $user['User']['id']) ); ?> | 
                    <?php
                        if( $user['User']['status'] != 0){ 
                            echo $this->Html->link(    "Delete", array('action'=>'delete', $user['User']['id']));}else{
                            echo $this->Html->link(    "Re-Activate", array('action'=>'activate', $user['User']['id']));
                            }
                    ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php unset($user); ?>
            </tbody>
        </table>
        <p><?php echo $this->Paginator->counter(array('separator' => ' of a total of ')); ?></p>
        <div class="paging">
            <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?> |
            <?php echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));?> |
            <?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
        </div>              
    </div>       
</div>
</div>
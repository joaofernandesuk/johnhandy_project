<div class="users">
<div class="container">

    <div class="actions">
        <h3><?php __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link( "New User",   array('action'=>'add'),array('escape' => false) ); ?></li>
            <li><?php echo $this->Html->link(__('List Galleries', true), array('controller' => 'galleries', 'action' => 'index'));?></li>
            <li><?php echo $this->Html->link(__('New Gallery', true), array('controller' => 'galleries', 'action' => 'add')); ?></li>
            <li><?php echo $this->Html->link(__('List Photos', true), array('controller' => 'photos', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Photo', true), array('controller' => 'photos', 'action' => 'add')); ?> </li>
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
    <legend><h1><?php echo __('Edit User'); ?></h1></legend>
        <?php echo $this->Form->create('User'); ?>
            <fieldset>
                <?php 
                echo $this->Form->hidden('id', array('value' => $this->data['User']['id']));
                echo $this->Form->input('username', array( 'readonly' => 'readonly', 'label' => 'Usernames cannot be changed!'));
                echo $this->Form->input('email');
                echo $this->Form->input('password_update', array( 'label' => 'New Password (leave empty if you do not want to change)', 'maxLength' => 255, 'type'=>'password','required' => 0));
                echo $this->Form->input('password_confirm_update', array('label' => 'Confirm New Password *', 'maxLength' => 255, 'title' => 'Confirm New password', 'type'=>'password','required' => 0));
                 
         
                echo $this->Form->input('role', array(
                    'options' => array( 'king' => 'King', 'queen' => 'Queen', 'bishop' => 'Bishop')
                ));
                echo $this->Form->submit('Edit User', array('class' => 'form-submit',  'title' => 'Click here to add the user') ); 
        ?>
            </fieldset>
        <?php echo $this->Form->end(); ?>
    </div>

</div>
</div>
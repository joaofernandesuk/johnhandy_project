<div class="users">
<div class="container">

    <div class="actions">
        <h3><?php __('Actions'); ?></h3>
        <ul>

            <li><?php echo $this->Html->link(__('List Galleries', true), array('controller' => 'galleries', 'action' => 'index'));?>
            </li>
            <li><?php echo $this->Html->link(__('New Gallery', true), array('controller' => 'galleries', 'action' => 'add')); ?>
            </li>
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
    <legend><h1><?php echo __('Add User'); ?></h1></legend>
        <?php echo $this->Form->create('User');?>
            <fieldset>
                <?php echo $this->Form->input('username');
                echo $this->Form->input('email');
                echo $this->Form->input('password');
                echo $this->Form->input('password_confirm', array('label' => 'Confirm Password *', 'maxLength' => 255, 'title' => 'Confirm password', 'type'=>'password'));
                echo $this->Form->input('role', array(
                    'options' => array( 'king' => 'King', 'queen' => 'Queen', 'bishop' => 'Bishop')
                ));
                 
                echo $this->Form->submit('Add User', array('class' => 'form-submit',  'title' => 'Click here to add the user') ); 
        ?>
            </fieldset>
        <?php echo $this->Form->end(); ?>
        </div>
    </div>

</div>
</div>
<div class="gallery">
<div class="container">

    <div class="actions">
        <h3><?php __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('Give Us Feedback', true), array('controller' => 'feedbacks', 'action' => 'customer_add')); ?></li>
        </ul>
    </div>

<div class="cont">
    <legend><h1><?php echo __('Feedback'); ?></h1></legend>
        <!-- Here is where we loop through our $posts array, printing out post info -->

        <?php foreach ($feedbacks as $feedback): ?>
        
        
        <div class="feedback_div">
            <div style="overflow:hidden; float: left; width: 40%; max-height:100px; margin-top: -5%; margin-left: -25px; position: relative; display: inline-block; text-align: right; font-weight: bold;">
            	<span style="font-size: 16px;"><?php echo $feedback['Feedback']['name']; ?></span>
            	<span><p><?php echo $feedback['Feedback']['title']; ?></span>
            	<p><?php echo $feedback['Feedback']['created']; ?>
            </div>
            <div style="width:50%; float:right; margin-right:5%; margin-top:-5%; overflow: hidden;"><span style="font-size: 70px; position: absolute; margin-left: -30px">``</span>
            	<span style="font-weight: bold;"><?php echo substr($feedback['Feedback']['body'],0,70); ?> ...</span><p>
            	>> <span style="text-decoration: underline;"><?php echo $this->Html->link('Read More', array('controller' => 'feedbacks', 'action' => 'customer_view', $feedback['Feedback']['id'])); ?></span>
            </div>
        </div>

        <?php endforeach; ?>
        <?php unset($feedback); ?>

            <div class="paging">
            <p style="color: #000"><?php echo $this->Paginator->counter(array('separator' => ' of a total of ')); ?></p>
                <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
               | <?php echo $this->Paginator->numbers();?> |
                <?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
            </div>
    </div>

</div>
</div>
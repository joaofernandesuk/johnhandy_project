<div class="gallery">
<div class="container">

    <div class="actions">
        <h3><?php __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('Add Gallery', true), array('controller' => 'galleries', 'action' => 'add')); ?></li>
            <li><?php echo $this->Html->link(__('List Photos', true), array('controller' => 'photos', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Photo', true), array('controller' => 'photos', 'action' => 'add')); ?> </li>
        </ul>
    </div>

    <div class="cont">
    <legend><h1><?php echo __('Galleries'); ?></h1></legend>
    <table>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Actions</th>
            <th>Created</th>
            <th>Modified</th>
        </tr>

        <!-- Here is where we loop through our $posts array, printing out post info -->

        <?php foreach ($galleries as $gallery): ?>
        <tr>
            <td><?php echo $gallery['Gallery']['id']; ?></td>
            <td>
                <?php echo $this->Html->link($gallery['Gallery']['title'], array('controller' => 'galleries', 'action' => 'view', $gallery['Gallery']['id'])); ?>
            </td>
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
            <td><?php echo $gallery['Gallery']['created']; ?></td>
            <td><?php echo $gallery['Gallery']['modified']; ?></td>
        </tr>
        <?php endforeach; ?>
        <?php unset($gallery); ?>
    </table>
    </div>
</div>
</div>
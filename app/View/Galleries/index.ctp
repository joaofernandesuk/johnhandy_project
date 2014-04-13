<h1>Galleries</h1>
<p><?php echo $this->Html->link("Add Gallery", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
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
            <?php
                echo $this->Html->link(
                    '| Add Photos',
                    array('action' => '../Images/add', $gallery['Gallery']['id'])
                );
            ?>
        </td>
        <td><?php echo $gallery['Gallery']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($gallery); ?>
</table>
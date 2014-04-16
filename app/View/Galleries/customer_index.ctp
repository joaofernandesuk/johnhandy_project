<div class="gallery">
<div class="container">

    <legend><h1><?php echo __('Portfolio'); ?></h1></legend>
    
    

            <?php foreach ($galleries as $gallery): ?>
            <?php 
            $first = true;
            foreach ($photos as $photo): 

                if ( $first )
                {

                 if ($photo['Photo']['gallery_id'] === $gallery['Gallery']['id']) {

                ?>
                <div class="coluna-wrap clearfix2">
                <div class="coluna">

                <div class="portfolio_title">
                <?php echo __($gallery['Gallery']['title']); ?>
                </div>

                <div class="captura_border">
                <div class="captura">
                <?php
                echo $this->Html->image('photo' .  DS . 'img_file' . DS . $photo['Photo']['id'] . DS . 'vga_' . $photo['Photo']['img_file'], array('alt' => 'Portfolio', 'class' => 'coluna', 'url' => array('controller' => 'galleries', 'action' => '../portfolio/gallery', $gallery['Gallery']['id'], 'escape' => false)));
                ?>
                </div>
                </div>
                </div>
                </div> 
                <?php
                $first = false;
                }

            }
            ?>
                

            <?php endforeach; ?>
            <?php endforeach; ?>
            <?php unset($gallery); ?>
       
</div>
</div>
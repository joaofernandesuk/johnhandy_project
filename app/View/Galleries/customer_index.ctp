<div class="gallery">
<div class="container">

<div class="header_icon portfolio_icon"></div>
    <legend><h1><?php echo __('Portfolio'); ?></h1></legend>
    <h5><?php echo __("Here you can have a look on our previous work ( that we will allways keep up-to-date ) and take a picture of what you think you need in your house, in your garage, or even in you office. If your needs doesn't match with what we have here, let us know what you're thinking, and who knows, maybe we could arrange that for you."); ?></h5><p>
    
    

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
                echo $this->Html->image('photo' .  DS . 'img_file' . DS . $photo['Photo']['id'] . DS . 'vga_' . $photo['Photo']['img_file'], array('alt' => 'Portfolio', 'class' => 'coluna', 'url' => array('controller' => 'galleries', 'action' => '../portfolio/gallery', $gallery['Gallery']['id'], '#' => 'menu', 'escape' => false)));
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
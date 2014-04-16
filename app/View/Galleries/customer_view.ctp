<div class="gallery">
<div class="container">
<div class="carousel_content">
	<h1><?php echo h($gallery['Gallery']['title']); ?></h1>

	<?php echo h($gallery['Gallery']['body']); ?>


<div id="slider" class="flexslider">
<ul class="slides">

	<?php foreach ($photos as $photo): 

//****************************************** SHOW IMAGES FROM A SINGLE GALLERY *********************************************//
	if ($photo['Photo']['gallery_id'] === $gallery['Gallery']['id']) {

	echo $this->Html->tag('li', $this->Html->image('photo' .  DS . 'img_file' . DS . $photo['Photo']['id'] . DS . 'vga_' . $photo['Photo']['img_file'], array('alt' => 'Gallery Photo')));
	}

	endforeach; ?>

</ul>
</div>

<div id="carousel" class="flexslider">
<ul class="slides">

	<?php foreach ($photos as $photo): 

//****************************************** SHOW IMAGES FROM A SINGLE GALLERY *********************************************//
	if ($photo['Photo']['gallery_id'] === $gallery['Gallery']['id']) {

	echo $this->Html->tag('li', $this->Html->image('photo' .  DS . 'img_file' . DS . $photo['Photo']['id'] . DS . 'thumb_' . $photo['Photo']['img_file'], array('alt' => 'Gallery Photo')));
	}

	endforeach; ?>

</ul>
</div>
</div>

</div>
</div>
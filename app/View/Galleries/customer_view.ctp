<div class="gallery">
<div class="container">

	<h1><?php echo h($gallery['Gallery']['title']); ?></h1>

	<h4><?php echo h($gallery['Gallery']['body']); ?></h4>

<div class="carousel_content">
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
</div>

<div class="carousel_content2">
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
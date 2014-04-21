<?php if($gallery['Gallery']['title'] === 'Removing and Hanging Wallpaper') { ?> 
<div class="gallery gallery_01">
<?php } ?>

<?php if($gallery['Gallery']['title'] === 'Based Laminate Flooring') { ?> 
<div class="gallery gallery_02">
<?php } ?>

<?php if($gallery['Gallery']['title'] === 'Fixation Tiles and Wares') { ?> 
<div class="gallery gallery_03">
<?php } ?>

<?php if($gallery['Gallery']['title'] === 'Assembly Kitchens') { ?> 
<div class="gallery gallery_04">
<?php } ?>

<?php if($gallery['Gallery']['title'] === 'Bespoke Wardrobes') { ?> 
<div class="gallery gallery_05">
<?php } ?>

<?php if($gallery['Gallery']['title'] === 'Assembly Doors and Baseboards') { ?> 
<div class="gallery gallery_06">
<?php } ?>

<?php if($gallery['Gallery']['title'] === 'Walls and Ceilings Paint') { ?> 
<div class="gallery gallery_07">
<?php } ?>

<?php if($gallery['Gallery']['title'] === 'Wood Furniture Repair') { ?> 
<div class="gallery gallery_08">
<?php } ?>

<?php if($gallery['Gallery']['title'] === 'Other Works') { ?> 
<div class="gallery gallery_09">
<?php } ?>

<h1 style="margin: 0 auto; text-align: center; background: rgba(255,255,255,0.5); margin-bottom: 20px; width: 100%"><?php echo h($gallery['Gallery']['title']); ?></h1>

<div class="container">

	<!-- <h4 style="text-align: center;"><?php echo h($gallery['Gallery']['body']); ?></h4> -->

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
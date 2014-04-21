<div id="services">
	<div class="container">

	<div class="header_icon services_icon"></div>
    <legend><h1><?php echo __('Our Services'); ?></h1></legend>
	<h5><?php echo __("Here you can tell us your thoughts about our company and about your experience with us. Don't hesitate to express yourself. Your opinion counts, and it's very important to the proper functioning of our company. "); ?></h5><p>

		<?php foreach ($galleries as $gallery): ?>

		<div class="one-third column">
			<h3><?php echo $gallery['Gallery']['title']; ?></h3>
			<p><?php echo h($gallery['Gallery']['body']); ?></p>
		</div>

		<?php endforeach; ?>
		
	</div><!-- container -->
</div>

<div id="post-<?php the_ID(); ?>" class="product-card-wrapper">
	<div class="product-card">
		<?php
			$background = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', false);
		?>
		<div class="product-img" style="background-image: url('<?php echo $background[0] ?>');">
		</div>

		<div class="product-section">
			<h3><?php the_title(); ?></h3>
			<div class="blurb">
				<?php the_content() ?>
			</div>
		</div>
	</div>
</div>

<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main mrs-marshalls-page" role="main">

			<!-- Hero Image -->
	    <?php if(get_field('hero_image')) { ?>
	      <?php $background = wp_get_attachment_image_src(get_field('hero_image'), 'full', false); ?>
		     <div class="hero mini-hero" style="background-image: url('<?php echo $background[0] ?>');">
	        <div class="hero-text-wrapper">
	          <div>
							<div class="hero-text">
								<div class="hero-header">
	              	<?php echo get_field('hero_header')?>
								</div>
								<?php if(get_field('hero_body')){ ?>
								<div class="hero-body">
		              <?php echo get_field('hero_body')?>
								</div>
								<?php
								}
								if(get_field('button_text')){ ?>
									<div class="hero-buttons">
										<a class="button" href="<?php echo get_field('button_link')?>"><?php echo get_field('button_text'); ?></a>
									</div>
								<?php
								}?>
	            </div>
	          </div>
	        </div>
	      </div>
	    <?php
				} else {
					$background =  get_template_directory_uri() . '/images/hero.png';
					?>
					 <div class="hero mini-hero" style="background-image: url('<?php echo $background ?>');">
						<div class="hero-text-wrapper">
							<div>
								<div class="hero-text">
									<?php
									while ( have_posts() ) : the_post();
										the_title();
									endwhile;
									?>
								</div>
							</div>
						</div>
					</div>
			<?php
			 }?>

        <?php
				while ( have_posts() ) : the_post(); ?>

        <div class="container-fluid">
        	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        		<div class="entry-content col-md-10 col-md-push-1">
        			<?php
        				the_content();

        				wp_link_pages( array(
        					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ukrops' ),
        					'after'  => '</div>',
        				) );
        			?>
        		</div><!-- .entry-content -->
        	</article><!-- #post-## -->
        </div>

        <?php
				endwhile; // End of the loop.
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

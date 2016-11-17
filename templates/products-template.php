<?php
/* Template Name: Products Template */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

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

			<div class="container-fluid">
				<?php
				while ( have_posts() ) : the_post();
        the_content();
        $pageID = get_the_ID();
				endwhile; // End of the loop.
				?>

  			<div class="product-list">
          <?php
           $args = array(
          	'sort_order' => 'asc',
          	'sort_column' => 'post_title',
          	'parent' => $pageID,
          	'post_type' => 'page',
          );
          $pages = get_pages($args);

          foreach ($pages as $page){
            $post = $page;
            setup_postdata( $post );

            get_template_part( '/templates/product-card', get_post_format());

            wp_reset_postdata();
          }
          ?>
        </div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

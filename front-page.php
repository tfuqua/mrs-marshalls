<?php
/**
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ukrops
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">


    <!-- Hero Image -->
    <?php if(get_field('hero_image')) { ?>
      <?php $background = wp_get_attachment_image_src(get_field('hero_image'), 'full', false); ?>
	     <div class="hero hero-1" style="background-image: url('<?php echo $background[0] ?>');">
        <div class="hero-text-wrapper">
          <div>
            <div class="hero-text">
              <div class="hero-header">
                <?php echo get_field('hero_heading')?>
              </div>
              <div class="hero-body">
                <?php echo get_field('hero_body')?>
              </div>
              <?php if(get_field('button_text')) { ?>
              <div>
                <a class="button" href="<?php echo get_field('button_link')?>"><?php echo get_field('button_text')?></a>
              </div>
              <?php } ?>
            </div>
          </div>

        </div>
      </div>
    <?php } ?>

    <!-- Featured Content -->
    <?php
      if( have_rows('featured_content') ) { ?>
        <div class="featured-content-wrapper">
          <div class="featured-items">
            <?php while ( have_rows('featured_content') ) : the_row(); ?>
              <div class="featured-item">
                <h3><?php echo the_sub_field('heading');?></h3>
                <div class="featured-section">
                  <div class="featured-body">
                    <div class="flex-div">
                    <div class="content">
                      <?php echo the_sub_field('body');?>
                    </div>
                    <div class="featured-img">
                      <?php echo wp_get_attachment_image(get_sub_field('image'), 'medium', false, array( 'class' => 'lazy-load'));?>
                    </div>
                    </div>
                  </div>
                  <div>
                    <a class="button" href="<?php echo the_sub_field('button_link'); ?>">
                      <?php echo the_sub_field('button_text');?>
                    </a>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      <?php } ?>

      <!-- Hero Image -->
      <?php if(get_field('hero_2_image')) { ?>
      <?php $background = wp_get_attachment_image_src(get_field('hero_2_image_bg'), 'full', false); ?>
      	<div class="hero hero-2" style="background-image: url('<?php echo $background[0] ?>');">
          <div class="container-fluid">
            <div class="hero-text">
              <div class="hero-header">
                <?php echo get_field('hero_2_heading')?>
              </div>
              <div class="hero-body">
                <?php echo get_field('hero_2_body')?>
              </div>
              <?php if(get_field('button_2_text')) { ?>
              <div class="hero-button">
                <a class="button" href="<?php echo get_field('button_2_link')?>"><?php echo get_field('button_2_text')?></a>
              </div>
              <?php } ?>
            </div>
            <div class="hero-img-wrapper">
              <?php echo wp_get_attachment_image(get_field('hero_2_image'), 'full', false, array( 'class' => '') ); ?>
            </div>
          </div>
        </div>
      <?php } ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();

<?php
/*
    Template Name: Home Page
 */

get_header();

$home_page_title        = get_field('home_page_title');
$home_page_paragraph    = get_field('home_page_paragraph');
$expertise_title        = get_field('expertise_title');
$areas_of_expertise     = get_field('areas_of_expertise');

?>
<section id="home">

	<div class="featured">
            <?php wd_slider(2); ?>        
        </div>
        
        <!-- CONTENT -->
        <div class="content container text-center">
            <h2><?php echo $home_page_title; ?></h2>
            <p><?php echo $home_page_paragraph; ?></p>
            <hr>
        </div><!-- content -->

        <!-- EXPERTISE -->
        <div class="expertise container text-center">
            <h2><?php echo $expertise_title; ?></h2>
            <p><?php echo $areas_of_expertise; ?></p>
        </div><!-- expertise -->

	<!-- FEATURE IMAGE CAROUSEL -->
        <div class="featured">
            <?php wd_slider(3); ?>        
        </div>

        <!-- Featured Clients -->
        <div class="featured-clients">
            <?php echo do_shortcode('[logoshowcase dots="false" arrows="false" speed="2000"]'); ?>
        </div>
        
    </section>

<?php get_footer(); ?>
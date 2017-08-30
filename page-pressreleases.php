<?php 
/*
    Template Name: Press Release Page
*/

get_header();
?>

<section id="press-release">
    <div class="container">
        <h1>Press Releases</h1>
        <hr>
        
        <?php $loop = new WP_Query( array( 'post_type' => 'press_release', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => -1 ) ); ?>
        
        <div class="row">
           
           <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
           
           <?php 
            $press_img     = get_field('press_img');
            $press_img_url = get_field('press_img_url');
            $press_url     = get_field('press_url');
            $press_date    = get_field('press_date');
            ?>
           
            <div class="col-sm-6 col-md-3">
                <a href="<?php echo $press_img_url; ?>">
                    <img src="<?php echo $press_img[url]; ?>" alt="<?php echo $press_img[alt]; ?>">
                </a>
                <a href="<?php echo $press_url; ?>">
                    <p><?php the_title(); ?></p>
                </a>
                <cite>&ndash; <?php echo $press_date; ?></cite>
            </div><!-- col -->
           
           <?php endwhile; ?>
        </div><!-- row -->
    </div><!-- container -->
</section>

<?php get_footer(); ?>
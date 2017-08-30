<?php 
/*
    Template Name: References Page
*/

get_header();
?>

<section id="references">
    <div class="container">
        <h1>References</h1>
        <hr>
        <?php $loop = new WP_Query( array( 
                                        'post_type' => 'reference', 
                                        'orderby' => 'post_id',     
                                        'order' => 'DESC',
                                        'posts_per_page' => -1
                                        ) ); ?>
    
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

            <?php 

                $reference_name     = get_field('reference_name');
                $reference_position = get_field('reference_position');
                $reference_date     = get_field('reference_date');
                $reference_img      = get_field('reference_image');
                $reference_url      = get_field('reference_url');
                $reference_linkedin = get_field('reference_linkedin');

            ?>

            <div class="row">

                <div class="col-sm-12">

                    <blockqoute>
                        <?php the_content(); ?>
                    </blockqoute>
                    <a href="<?php echo $reference_linkedin; ?>" class="reference-name">
                        <?php echo $reference_name; ?>
                    </a>
                    <p class="reference-position">
                        <?php echo $reference_position; ?>
                    </p>
                    <p class="reference-date">
                        <?php echo $reference_date; ?>
                    </p>
                    
                    <?php if( !empty($reference_img) ) : ?>
                       
                        <a href="<?php echo $reference_url; ?>">
                        <img src="<?php echo $reference_img[url]; ?>" alt="<?php echo $reference_img[alt]; ?>" class="pull-left">
                        </a>
                        
                    <?php endif; ?>

                </div><!-- col -->
            </div><!-- row -->
         <hr>
        <?php endwhile; ?>
    </div><!-- container -->
</section>

<?php get_footer(); ?>
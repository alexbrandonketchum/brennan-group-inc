<?php 
/*
    Template Name: Clients Page
*/

get_header();
?>

<section id="clients">
    <div class="container">
        <h1>Clients</h1>
        <hr>
        
        <?php $loop = new WP_Query( array( 'post_type' => 'client', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => -1 ) ); ?>
          
            <div class="row">
               
               <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
          
                <?php 

                    $client_img          = get_field('client_img');
                    $client_acquired     = get_field('client_acquired');
                    $client_url          = get_field('client_url');
                    $client_acquired_url = get_field('client_acquired_url');

                ?>
                
                    <div class="col-sm-6 col-md-4">
                        <a href="<?php echo $client_url ?>"><img src="<?php echo $client_img[url] ?>" alt="<?php echo $client_img[alt] ?>" class="<?php if( !empty($client_acquired) ) echo ' img-acquired'; ?>"></a>
                        
                        <?php if( !empty($client_acquired) ) : ?>
                        
                            <p>acquired by: &nbsp;<a href="<?php echo $client_acquired_url; ?>"><img src="<?php echo $client_acquired[url] ?>" alt="<?php echo $client_acquired[alt] ?>" class="acquired"></a></p>
                        
                        <?php endif; ?>
                    </div><!-- col -->
                
                <?php endwhile; ?>
                
            </div><!-- row -->
    </div>        
</section>

<?php get_footer(); ?>
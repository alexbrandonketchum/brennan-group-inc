<?php 
/*
    Template Name: Placements Page
*/

get_header();
?>

<section id="placements">
    <div class="container">
        <h1>Recent Placements</h1>
        <hr>
        
        <?php $loop = new WP_Query( array( 'post_type' => 'placement', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => -1 ) ); ?>
        
        <div class="row">
           
           <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        
            <?php 

            $placement_img         = get_field('placement_img');
            $placement_url         = get_field('placement_url');
            $placement_space       = get_field('placement_space');
            $placement_role        = get_field('placement_role');
            $placement_profile     = get_field('placement_profile');
	    $profile_during_search = get_field('profile_during_search');
            $placement_in_prog     = get_field('placement_in_prog');

            ?>
           
                <div class="col-md-6">
                    <ul>
                        <li>
                            <a href="<?php echo $placement_url; ?>" target="_blank">
                            <img src="<?php echo $placement_img[url]; ?>" alt="<?php echo $placement_img[alt]; ?>">
                            </a>
                        </li>
                        <?php if( $placement_in_prog == true ) : ?>
                            
                            <li>
                                <span>(In Progress)</span>
                            </li>
                            
                        <?php endif; ?>
                        <li>
                            <span>Space:</span> &nbsp;<?php echo $placement_space;?> 
                        </li>
                        <li>
                            <span>Role:</span> &nbsp;<?php echo $placement_role; ?>
                        </li>
			<?php if( !empty($profile_during_search) ) : ?>
			    <li>
				<span>Profile During Search:</span> &nbsp;<?php echo $profile_during_search;?>
			    </li>
			<?php endif; ?>
                        <li>
                            <span>Profile:</span> &nbsp;<?php echo $placement_profile; ?>
                        </li>
                    </ul>
                </div><!-- col -->
                
            <?php endwhile; ?>
        </div><!-- row -->
    </div>
</section>

<?php get_footer(); ?>
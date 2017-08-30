<?php 
/*
    Template Name: Contact Page
*/

get_header();
?>

<section id="contact">
    <div class="container">
        <h1>Contact</h1>
        <lead>Need to get in touch?</lead>
        <hr>
        <div class="row">
            <div class="col-md-4">
               
                <?php $loop = new WP_Query( array( 'post_type' => 'contact', 'orderby' => 'post_id' ) ); ?>
               
                <?php while ($loop -> have_posts() ) : $loop -> the_post(); ?>

                <?php 
                $contact_name       = get_field('contact_name');
                $contact_pos        = get_field('contact_pos');
                $contact_num_office = get_field('contact_number_office');
                $contact_num_cell   = get_field('contact_number_cell');
                $contact_city       = get_field('contact_city');
                $contact_email      = get_field('contact_email');
                $contact_linkedin   = get_field('contact_linkedin');
                ?>
                
                <div class="row">
                    <div class="col-md-12">
               
                        <ul>
                            <li><h4><?php echo $contact_name; ?></h4></li> 
                            <li><?php echo $contact_pos; ?></li>
                            
                            <?php if( !empty($contact_num_office) ) : ?>
                            <li>Office: <?php echo $contact_num_office; ?></li>
                            <?php endif; ?>
                            
                            <?php if( !empty($contact_num_cell) ) : ?>
                            <li>Cell: <?php echo $contact_num_cell; ?></li>
                            <?php endif; ?>
                            
                            <li><?php echo $contact_city; ?></li>
                            <li><?php echo $contact_email; ?></li>
                            <li><a href="<?php echo $contact_linkedin; ?>"><i class="fa fa-linkedin-square"></i> Linkedin</a></li>
                        </ul>
                
                    </div><!-- col -->            
                </div><!-- row -->
            <?php endwhile; ?>
            </div><!-- col -->
            
            <div class="col-md-8">
            	<?php echo do_shortcode('[contact-form-7 id="189" title="Primary Contact Form"]');  ?>
            </div>
            
        </div><!-- row -->
    </div><!-- container -->
</section><!-- contact -->

<?php get_footer(); ?>
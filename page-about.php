<?php 
/*
    Template Name: About Page
*/

get_header();

$founder_name   = get_field('founder_name');
$founder_title  = get_field('founder_title');
$founder_image  = get_field('founder_image');
$founder_bio    = get_field('founder_bio');

$linkedin_url   = get_field('linkedin_url');

$company_name   = get_field('company_name');
$company_bio    = get_field('company_bio');


?>

<section id="about">
    <div class="container">
        <h1>About</h1>
        <hr>
        <!-- ABOUT -->
        <div class="row about-kate">
            <div class="col-md-4">
                <img src="<?php echo $founder_image['url']; ?>" alt="<?php echo $founder_image['alt']; ?>" class="img-responsive img-rounded">
            </div>
            <div class="col-md-8">
                <h3><?php echo $founder_name; ?> <small><?php echo $founder_title; ?></small> <a href="https://www.linkedin.com/<?php echo $linkedin_url; ?>"><i class="fa fa-linkedin"></i></a></h3>
                <p><?php echo $founder_bio; ?></p> 
            </div>     
        </div><!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h3><?php echo $company_name; ?></h3>
                <p><?php echo $company_bio; ?></p>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- about -->

<?php get_footer(); ?>
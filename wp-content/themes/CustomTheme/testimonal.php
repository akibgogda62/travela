<?php 
/* Template Name: Testimonal */
get_header();
?>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Our Testimonial</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Testimonial</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

       <!-- Testimonial Start -->
<div class="container-fluid testimonial py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Testimonial</h5>
            <h1 class="mb-0">Our Clients Say!!!</h1>
        </div>
        <div class="testimonial-carousel owl-carousel">

            <?php
            $args = array(
                'post_type' => 'testimonal',
                'post_status' => 'publish',
                'posts_per_page' => -1,
            );

            $blog_query = new WP_Query($args);

            if ($blog_query->have_posts()) {
                while ($blog_query->have_posts()) {
                    $blog_query->the_post();
                    $location = get_post_meta(get_the_ID(), 'location', true);
            ?>
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5"><?php echo get_the_excerpt(); ?>
                            </p>
                        </div>
                        <div class="testimonial-img p-1">

                            <?php the_post_thumbnail('full', array('class' => 'img-fluid rounded-circle')); ?>
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0">John Abraham</h5>
                            <p class="mb-0"><?php echo $location; ?></p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>

            <?php
                }
                wp_reset_postdata(); // Restore global post data
            }
            ?>



        </div>
    </div>
</div>
<!-- Testimonial End -->

<?php get_footer();?>
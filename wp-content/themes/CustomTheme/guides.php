<?php
/* Template Name: Guides */
get_header();
?>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Our Travel Guides</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Guides</li>
            </ol>
    </div>
</div>
<!-- Header End -->

<!-- Travel Guide Start -->
<div class="container-fluid guide py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Travel Guide</h5>
            <h1 class="mb-0">Meet Our Guide</h1>
        </div>
        <div class="row g-4">


            <?php
            $args = array(
                'post_type' => 'guide',
                'post_status' => 'publish',
                'posts_per_page' => -1,
            );

            $blog_query = new WP_Query($args);

            if ($blog_query->have_posts()) {
                while ($blog_query->have_posts()) {
                    $blog_query->the_post();
                    $designation = get_post_meta(get_the_ID(), 'designation', true);
            ?>


                    <div class="col-md-6 col-lg-3">
                        <div class="guide-item">
                            <div class="guide-img">
                                <div class="guide-img-efects">
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 rounded-top'));
                                    ?>
                                </div>
                                <div class="guide-icon rounded-pill p-2">
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="guide-title text-center rounded-bottom p-4">
                                <div class="guide-title-inner">
                                    <h4 class="mt-3"><?php echo get_the_title(); ?></h4>
                                    <p class="mb-0"><?php echo $designation; ?></p>
                                </div>
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
<!-- Travel Guide End -->




<?php get_footer(); ?>
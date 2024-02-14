<?php
/* Template Name: Packages */
get_header();
?>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Travel Packages</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Packages</li>
            </ol>
    </div>
</div>
<!-- Header End -->


<!-- Packages Start -->
<div class="container-fluid packages py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Packages</h5>
            <h1 class="mb-0">Awesome Packages</h1>
        </div>
        <div class="packages-carousel owl-carousel">

            <?php
            $args = array(
                'post_type' => 'packages', // Replace 'explore' with your CPT name

            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $location = get_post_meta(get_the_ID(), '_location', true);
                    $price = get_post_meta(get_the_ID(), '_price', true);
                    $person = get_post_meta(get_the_ID(), '_person', true);
                    $duration = get_post_meta(get_the_ID(), '_duration', true);

            ?>

                    <div class="packages-item">
                        <div class="packages-img">
                            <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 rounded-top')); ?>
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i><?php echo $location; ?></small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i><?php echo $duration; ?></small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i><?php echo $person; ?></small>
                            </div>
                            <div class="packages-price py-2 px-4">$<?php echo $price; ?></div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0"><?php echo get_the_title(); ?></h5>
                                <small class="text-uppercase">Hotel Deals</small>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4"><?php echo get_the_excerpt(); ?></p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="<?php echo esc_url(add_query_arg('package_id', $id, add_query_arg('package_price', $price, home_url('/stripe')))); ?>" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php
                }
                wp_reset_postdata();
            }
            ?>

        </div>
    </div>
</div>
<!-- Packages End -->

<!-- Tour Booking Start -->
<div class="container-fluid booking py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h5 class="section-booking-title pe-3">Booking</h5>
                <h1 class="text-white mb-4">Online Booking</h1>
                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium? Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                </p>
                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium? Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                </p>
                <a href="#" class="btn btn-light text-primary rounded-pill py-3 px-5 mt-2">Read More</a>
            </div>
            <div class="col-lg-6">
                <h1 class="text-white mb-3">Book A Tour Deals</h1>
                <p class="text-white mb-4">Get <span class="text-warning">50% Off</span> On Your First Adventure Trip With Travela. Get More Deal Offers Here.</p>
                <form>
                    <?php echo do_shortcode('[contact-form-7 id="1215a7e" title="Untitled"]'); ?>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tour Booking End -->



<?php
get_footer();
?>
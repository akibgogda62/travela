<?php
/* Template Name: Services */
get_header();
?>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Our Services</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Services</li>
            </ol>
    </div>
</div>
<!-- Header End -->

<!-- Services Start -->

<?php


?>
<div class="container-fluid bg-light service py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Searvices</h5>
            <h1 class="mb-0">Our Services</h1>
        </div>
        <div class="row g-4">
            <?php
            $args = array(
                'post_type' => 'services',
                'posts_per_page' => -1,
            );
            $custom_query = new WP_Query($args);

            if ($custom_query->have_posts()) :
                foreach ($custom_query->posts as $index => $post) {
                    setup_postdata($post);
                    $services_icon = get_post_meta($post->ID, 'services_icon', true);
                    if ($index % 2 == 0) {
            ?>
                        <div class="col-lg-6">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                        <div class="service-content text-end">
                                            <h5 class="mb-4">
                                                <?php echo get_the_title(); ?></h5>
                                            <p class="mb-0"><?php echo get_the_excerpt(); ?></p>
                                        </div>
                                        <div class="service-icon p-4">
                                            <i class="fa <?php echo $services_icon; ?> fa-4x text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="col-lg-6">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                        <div class="service-icon p-4">
                                            <i class="fa <?php echo $services_icon; ?> fa-4x text-primary"></i>
                                        </div>
                                        <div class="service-content">
                                            <h5 class="mb-4"><?php echo get_the_title(); ?></h5>
                                            <p class="mb-0"><?php echo get_the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php
                    }
                }
            endif;
            wp_reset_postdata();
            ?>

            <div class="col-12">
                <div class="text-center">
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Service More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

<!-- Testimonial Start -->
<div class="container-fluid testimonial py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Testimonial</h5>
            <h1 class="mb-0">Our Clients Say!!!</h1>
        </div>
        <div class="testimonial-carousel owl-carousel">
            <div class="testimonial-item text-center rounded pb-4">
                <div class="testimonial-comment bg-light rounded p-4">
                    <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,
                    </p>
                </div>
                <div class="testimonial-img p-1">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testimonial-1.jpg" class="img-fluid rounded-circle" alt="Image">
                </div>
                <div style="margin-top: -35px;">
                    <h5 class="mb-0">John Abraham</h5>
                    <p class="mb-0">New York, USA</p>
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                </div>
            </div>
            <div class="testimonial-item text-center rounded pb-4">
                <div class="testimonial-comment bg-light rounded p-4">
                    <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,
                    </p>
                </div>
                <div class="testimonial-img p-1">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testimonial-2.jpg" class="img-fluid rounded-circle" alt="Image">
                </div>
                <div style="margin-top: -35px;">
                    <h5 class="mb-0">John Abraham</h5>
                    <p class="mb-0">New York, USA</p>
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                </div>
            </div>
            <div class="testimonial-item text-center rounded pb-4">
                <div class="testimonial-comment bg-light rounded p-4">
                    <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,
                    </p>
                </div>
                <div class="testimonial-img p-1">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testimonial-3.jpg" class="img-fluid rounded-circle" alt="Image">
                </div>
                <div style="margin-top: -35px;">
                    <h5 class="mb-0">John Abraham</h5>
                    <p class="mb-0">New York, USA</p>
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                </div>
            </div>
            <div class="testimonial-item text-center rounded pb-4">
                <div class="testimonial-comment bg-light rounded p-4">
                    <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,
                    </p>
                </div>
                <div class="testimonial-img p-1">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testimonial-4.jpg" class="img-fluid rounded-circle" alt="Image">
                </div>
                <div style="margin-top: -35px;">
                    <h5 class="mb-0">John Abraham</h5>
                    <p class="mb-0">New York, USA</p>
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<?php
get_footer();
?>
<?php
/* Template Name: Home Page */
get_header();
?>
<!-- Carousel Start -->

<div class="carousel-header">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/carousel-2.jpg" class="img-fluid" alt="Image">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Explore The World</h4>
                        <h1 class="display-2 text-capitalize text-white mb-4">Let's The World Together!</h1>
                        <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Discover Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/carousel-1.jpg" class="img-fluid" alt="Image">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Explore The World</h4>
                        <h1 class="display-2 text-capitalize text-white mb-4">Find Your Perfect Tour At Travel</h1>
                        <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Discover Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/carousel-3.jpg" class="img-fluid" alt="Image">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Explore The World</h4>
                        <h1 class="display-2 text-capitalize text-white mb-4">You Like To Go?</h1>
                        <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Discover Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->
</div>
<div class="container-fluid search-bar position-relative" style="top: -50%; transform: translateY(-50%);">
    <div class="container">
        <div class="position-relative rounded-pill w-100 mx-auto p-5" style="background: rgba(19, 53, 123, 0.8);">
            <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
            <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute me-2" style="top: 50%; right: 46px; transform: translateY(-50%);">Search</button>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->
<!-- About Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <div class="h-100" style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about-img.jpg" class="img-fluid w-100 h-100" alt="">
                </div>
            </div>
            <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about-img-1.png);">
                <h5 class="section-about-title pe-3">About Us</h5>
                <h1 class="mb-4">Welcome to <span class="text-primary">Travela</span></h1>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, dolorum, doloribus sunt dicta, officia voluptatibus libero necessitatibus natus impedit quam ullam assumenda? Id atque iste consectetur. Commodi odit ab saepe!</p>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos voluptatem suscipit neque enim, doloribus ipsum rem eos distinctio, dignissimos nisi saepe nulla? Libero numquam perferendis provident placeat molestiae quia?</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City Tours</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                    </div>
                </div>
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Services Start -->
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

<!-- Destination Start -->
<div class="container-fluid destination py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Destination</h5>
            <h1 class="mb-0">Popular Destination</h1>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                        <span class="text-dark" style="width: 150px;">All</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                        <span class="text-dark" style="width: 150px;">USA</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                        <span class="text-dark" style="width: 150px;">Canada</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                        <span class="text-dark" style="width: 150px;">Europe</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                        <span class="text-dark" style="width: 150px;">China</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-6">
                        <span class="text-dark" style="width: 150px;">Singapore</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">

                        <?php
                        $args = array(
                            'post_type' => 'destination',
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                $id = get_the_ID();
                        ?>

                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 rounded')); ?>
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3"><?php echo get_the_title(); ?></h4>
                                            <a href="<?php echo get_the_permalink(); ?>" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="<?php echo get_the_post_thumbnail_url($id); ?>" data-lightbox="destination-5"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
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
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-4">

                        <?php
                        $args = array(
                            'post_type' => 'destination',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'destination_category',
                                    'field' => 'slug',
                                    'terms' => 'USA',
                                ),
                            ),
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                $id = get_the_ID();
                        ?>

                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 rounded')); ?>
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3"><?php echo get_the_title(); ?></h4>
                                            <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="<?php echo get_the_post_thumbnail_url($id); ?>" data-lightbox="destination-5"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
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
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-4">

                        <?php
                        $args = array(
                            'post_type' => 'destination',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'destination_category',
                                    'field' => 'slug',
                                    'terms' => 'CANADA',
                                ),
                            ),
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                $id = get_the_ID();

                        ?>

                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 rounded')); ?>
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3"><?php echo get_the_title(); ?></h4>
                                            <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="<?php echo get_the_post_thumbnail_url($id); ?>" data-lightbox="destination-5"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
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
                <div id="tab-4" class="tab-pane fade show p-0">
                    <div class="row g-4">

                        <?php
                        $args = array(
                            'post_type' => 'destination',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'destination_category',
                                    'field' => 'slug',
                                    'terms' => 'EUROPE',
                                ),
                            ),
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                $id = get_the_ID();
                        ?>

                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 rounded')); ?>
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3"><?php echo get_the_title(); ?></h4>
                                            <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="<?php echo get_the_post_thumbnail_url($id); ?>" data-lightbox="destination-5"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
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
                <div id="tab-5" class="tab-pane fade show p-0">
                    <div class="row g-4">

                        <?php
                        $args = array(
                            'post_type' => 'destination',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'destination_category',
                                    'field' => 'slug',
                                    'terms' => 'CHINA',
                                ),
                            ),
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                $id = get_the_ID();
                        ?>

                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 rounded')); ?>
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3"><?php echo get_the_title(); ?></h4>
                                            <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="<?php echo get_the_post_thumbnail_url($id); ?>" data-lightbox="destination-5"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
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
                <div id="tab-6" class="tab-pane fade show p-0">
                    <div class="row g-4">

                        <?php
                        $args = array(
                            'post_type' => 'destination',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'destination_category',
                                    'field' => 'slug',
                                    'terms' => 'SINGAPORE',
                                ),
                            ),
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                $id = get_the_ID();
                        ?>

                                <div class="col-lg-6">
                                    <div class="destination-img">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 rounded')); ?>
                                        <div class="destination-overlay p-4">
                                            <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                            <h4 class="text-white mb-2 mt-3"><?php echo get_the_title(); ?></h4>
                                            <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="search-icon">
                                            <a href="<?php echo get_the_post_thumbnail_url($id); ?>" data-lightbox="destination-5"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
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
        </div>
    </div>
</div>
<!-- Destination End -->

<!-- Explore Tour Start -->
<div class="container-fluid ExploreTour py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Explore Tour</h5>
            <h1 class="mb-4">The World</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti eum cum repellat a laborum quasi.
            </p>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#NationalTab-1">
                        <span class="text-dark" style="width: 250px;">National Tour Category</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#InternationalTab-2">
                        <span class="text-dark" style="width: 250px;">International tour Category</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="NationalTab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <?php
                        $args = array(
                            'post_type' => 'explore', // Replace 'explore' with your CPT name
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'explore_category', // Replace 'explore_category' with your custom taxonomy name
                                    'field' => 'slug', // You can use 'term_id', 'slug', or 'name' here
                                    'terms' => 'national', // Replace 'your-category-slug' with the actual category slug
                                ),
                            ),
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                        ?>
                                <div class="col-md-6 col-lg-4">
                                    <div class="national-item">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 rounded'));
                                        ?>
                                        <div class="national-content">
                                            <div class="national-info">
                                                <h5 class="text-white text-uppercase mb-2"><?php echo get_the_title(); ?></h5>
                                                <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="national-plus-icon">
                                            <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
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
                <div id="InternationalTab-2" class="tab-pane fade show p-0">
                    <div class="InternationalTour-carousel owl-carousel">

                        <?php
                        $args = array(
                            'post_type' => 'explore', // Replace 'explore' with your CPT name
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'explore_category', // Replace 'explore_category' with your custom taxonomy name
                                    'field' => 'slug', // You can use 'term_id', 'slug', or 'name' here
                                    'terms' => 'international', // Replace 'your-category-slug' with the actual category slug
                                ),
                            ),
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                        ?>

                                <div class="international-item">
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 rounded')); ?>
                                    <div class="international-content">
                                        <div class="tour-offer bg-warning">45% Off</div>
                                        <div class="international-info">
                                            <h5 class="text-white text-uppercase mb-2"><?php echo get_the_title(); ?></h5>
                                            <a href="#" class="btn-hover text-white me-4"><i class="fas fa-map-marker-alt me-1"></i> 9 Cities</a>
                                            <a href="#" class="btn-hover text-white"><i class="fa fa-eye ms-2"></i> <span>133+ Tour Places</span></a>
                                        </div>
                                    </div>
                                    <div class="international-plus-icon">
                                        <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
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
        </div>
    </div>
</div>
<!-- Explore Tour Start -->

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
                    $id = get_the_ID();

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

<!-- Gallery Start -->
<div class="container-fluid gallery py-5 my-5">
    <div class="mx-auto text-center mb-5" style="max-width: 900px;">
        <h5 class="section-title px-3">Our Gallery</h5>
        <h1 class="mb-4">Tourism & Traveling Gallery.</h1>
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti eum cum repellat a laborum quasi.
        </p>
    </div>
    <div class="tab-class text-center">
        <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
            <li class="nav-item">
                <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#GalleryTab-1">
                    <span class="text-dark" style="width: 150px;">All</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#GalleryTab-2">
                    <span class="text-dark" style="width: 150px;">World tour</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#GalleryTab-3">
                    <span class="text-dark" style="width: 150px;">Ocean Tour</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#GalleryTab-4">
                    <span class="text-dark" style="width: 150px;">Summer Tour</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#GalleryTab-5">
                    <span class="text-dark" style="width: 150px;">Sport Tour</span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
                <div class="row g-2">

                    <?php
                    $args = array(
                        'post_type' => 'gallery',
                        'posts_per_page' => -1

                    );

                    $query = new WP_Query($args);

                    $no = 0;


                    if ($query->have_posts()) :
                        foreach ($query->posts as $index => $post) {

                            setup_postdata($post);
                            $id = get_the_ID();
                            if ($no == 5) {
                                $no = 0;
                            }
                            if ($no % 2 == 0) {

                    ?>


                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="gallery-item h-100">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 h-100 rounded')); ?>
                                        <div class="gallery-content">
                                            <div class="gallery-info">
                                                <h5 class="text-white text-uppercase mb-2"><?php echo get_the_title(); ?></h5>
                                                <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="gallery-plus-icon">
                                            <a href="<?php echo get_the_post_thumbnail_url($id); ?>" data-lightbox="gallery-2" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } else {

                            ?>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="gallery-item h-100">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 h-100 rounded')); ?>
                                        <div class="gallery-content">
                                            <div class="gallery-info">
                                                <h5 class="text-white text-uppercase mb-2"><?php echo get_the_title(); ?></h5>
                                                <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="gallery-plus-icon">
                                            <a href="<?php echo get_the_post_thumbnail_url($id); ?>" data-lightbox="gallery-2" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                        </div>
                                    </div>
                                </div>

                    <?php
                            }

                            $no++;
                        }

                    endif;

                    wp_reset_postdata();
                    ?>


                </div>
            </div>
            <div id="GalleryTab-2" class="tab-pane fade show p-0">
                <div class="row g-2">

                    <?php
                    $args = array(
                        'post_type' => 'gallery',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'gallery_category',
                                'field' => 'slug',
                                'terms' => 'World Tour',
                            ),
                        ),
                    );

                    $query = new WP_Query($args);

                    $no = 0;

                    if ($query->have_posts()) :
                        foreach ($query->posts as $index => $post) {

                            setup_postdata($post);
                            $id = get_the_ID();
                            if ($no == 5) {
                                $no = 0;
                            }
                            if ($no % 2 == 0) {

                    ?>


                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="gallery-item h-100">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 h-100 rounded')); ?>
                                        <div class="gallery-content">
                                            <div class="gallery-info">
                                                <h5 class="text-white text-uppercase mb-2"><?php echo get_the_title(); ?></h5>
                                                <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="gallery-plus-icon">
                                            <a href="<?php echo get_the_post_thumbnail_url($id); ?>" data-lightbox="gallery-2" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } else {

                            ?>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="gallery-item h-100">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 h-100 rounded')); ?>
                                        <div class="gallery-content">
                                            <div class="gallery-info">
                                                <h5 class="text-white text-uppercase mb-2"><?php echo get_the_title(); ?></h5>
                                                <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="gallery-plus-icon">
                                            <a href="<?php echo get_the_post_thumbnail_url($id); ?>" data-lightbox="gallery-2" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                        </div>
                                    </div>
                                </div>

                    <?php
                            }

                            $no++;
                        }
                    endif;
                    wp_reset_postdata();
                    ?>

                </div>
            </div>
            <div id="GalleryTab-3" class="tab-pane fade show p-0">
                <div class="row g-2">

                    <?php
                    $args = array(
                        'post_type' => 'gallery',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'gallery_category',
                                'field' => 'slug',
                                'terms' => 'Ocean Tour',
                            ),
                        ),
                    );

                    $query = new WP_Query($args);

                    $no = 0;

                    if ($query->have_posts()) :
                        foreach ($query->posts as $index => $post) {

                            setup_postdata($post);
                            $id = get_the_ID();
                            if ($no == 5) {
                                $no = 0;
                            }
                            if ($no % 2 == 0) {

                    ?>


                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="gallery-item h-100">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 h-100 rounded')); ?>
                                        <div class="gallery-content">
                                            <div class="gallery-info">
                                                <h5 class="text-white text-uppercase mb-2"><?php echo get_the_title(); ?></h5>
                                                <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="gallery-plus-icon">
                                            <a href="<?php echo get_the_post_thumbnail_url($id); ?>" data-lightbox="gallery-2" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } else {

                            ?>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="gallery-item h-100">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 h-100 rounded')); ?>
                                        <div class="gallery-content">
                                            <div class="gallery-info">
                                                <h5 class="text-white text-uppercase mb-2"><?php echo get_the_title(); ?></h5>
                                                <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="gallery-plus-icon">
                                            <a href="<?php echo get_the_post_thumbnail_url($id); ?>" data-lightbox="gallery-2" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                        </div>
                                    </div>
                                </div>

                    <?php
                            }

                            $no++;
                        }
                    endif;
                    wp_reset_postdata();
                    ?>

                </div>
            </div>
            <div id="GalleryTab-4" class="tab-pane fade show p-0">
                <div class="row g-2">

                    <?php
                    $args = array(
                        'post_type' => 'gallery',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'gallery_category',
                                'field' => 'slug',
                                'terms' => 'Summer Tour',
                            ),
                        ),
                    );

                    $query = new WP_Query($args);

                    $no = 0;

                    if ($query->have_posts()) :
                        foreach ($query->posts as $index => $post) {

                            setup_postdata($post);
                            $id = get_the_ID();
                            if ($no == 5) {
                                $no = 0;
                            }
                            if ($no % 2 == 0) {

                    ?>


                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="gallery-item h-100">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 h-100 rounded')); ?>
                                        <div class="gallery-content">
                                            <div class="gallery-info">
                                                <h5 class="text-white text-uppercase mb-2"><?php echo get_the_title(); ?></h5>
                                                <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="gallery-plus-icon">
                                            <a href="<?php echo get_the_post_thumbnail_url($id); ?>" data-lightbox="gallery-2" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } else {

                            ?>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="gallery-item h-100">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 h-100 rounded')); ?>
                                        <div class="gallery-content">
                                            <div class="gallery-info">
                                                <h5 class="text-white text-uppercase mb-2"><?php echo get_the_title(); ?></h5>
                                                <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="gallery-plus-icon">
                                            <a href="<?php echo get_the_post_thumbnail_url($id); ?>" data-lightbox="gallery-2" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                        </div>
                                    </div>
                                </div>

                    <?php
                            }

                            $no++;
                        }
                    endif;
                    wp_reset_postdata();
                    ?>

                </div>
            </div>
            <div id="GalleryTab-5" class="tab-pane fade show p-0">
                <div class="row g-2">

                    <?php
                    $args = array(
                        'post_type' => 'gallery',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'gallery_category',
                                'field' => 'slug',
                                'terms' => 'Sport Tour',
                            ),
                        ),
                    );

                    $query = new WP_Query($args);

                    $no = 0;

                    if ($query->have_posts()) :
                        foreach ($query->posts as $index => $post) {

                            setup_postdata($post);
                            $id = get_the_ID();
                            if ($no == 5) {
                                $no = 0;
                            }
                            if ($no % 2 == 0) {

                    ?>


                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                    <div class="gallery-item h-100">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 h-100 rounded')); ?>
                                        <div class="gallery-content">
                                            <div class="gallery-info">
                                                <h5 class="text-white text-uppercase mb-2"><?php echo get_the_title(); ?></h5>
                                                <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="gallery-plus-icon">
                                            <a href="<?php echo get_the_post_thumbnail_url($id); ?>" data-lightbox="gallery-2" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } else {

                            ?>
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="gallery-item h-100">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 h-100 rounded')); ?>
                                        <div class="gallery-content">
                                            <div class="gallery-info">
                                                <h5 class="text-white text-uppercase mb-2"><?php echo get_the_title(); ?></h5>
                                                <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="gallery-plus-icon">
                                            <a href="<?php echo get_the_post_thumbnail_url($id); ?>" data-lightbox="gallery-2" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                        </div>
                                    </div>
                                </div>

                    <?php
                            }

                            $no++;
                        }
                    endif;
                    wp_reset_postdata();
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery End -->

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

<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Our Blog</h5>
            <h1 class="mb-4">Popular Travel Blogs</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti deserunt tenetur sapiente atque. Magni non explicabo beatae sit, vel reiciendis consectetur numquam id similique sunt error obcaecati ducimus officia maiores.
            </p>
        </div>
        <div class="row g-4 justify-content-center">

            <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => -1, // Corrected typo here
            );

            $blog_query = new WP_Query($args);

            if ($blog_query->have_posts()) {
                while ($blog_query->have_posts()) {
                    $blog_query->the_post();
                    $author = get_post_meta(get_the_ID(), 'author_name', true);

            ?>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <div class="blog-img-inner">
                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 rounded-top'));
                                    ?>
                                    <div class="blog-icon">
                                        <a href="<?php the_permalink(); ?>" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                    </div>
                                </div>
                                <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i><?php echo get_the_date('d M Y'); ?></small>
                                    <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i class="fa fa-thumbs-up text-primary me-2"></i>1.7K</a>
                                    <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i class="fa fa-comments text-primary me-2"></i>1K</a>
                                </div>
                            </div>
                            <div class="blog-content border border-top-0 rounded-bottom p-4">
                                <p class="mb-3">Posted By: <?php echo $author; ?> </p>
                                <a href="<?php the_permalink(); ?>" class="h4"> <?php echo get_the_title(); ?></a>
                                <p class="my-3"> <?php echo get_the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
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
<!-- Blog End -->

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
<?php echo do_shortcode('[contact-form-7 id="ce670eb" title="Contact form 1"]'); ?>

<?php get_footer(); ?>
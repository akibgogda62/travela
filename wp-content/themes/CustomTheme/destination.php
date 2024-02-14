<?php
/* Template Name: Destination */
get_header();
?>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Travel Destination</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Destination</li>
            </ol>
    </div>
</div>
<!-- Header End -->

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
                                            <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a>
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




<?php get_footer(); ?>
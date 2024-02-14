<?php
/* Template Name: Tour */
get_header();
?>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Tour Category</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Category</li>
            </ol>
    </div>
</div>
<!-- Header End -->

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


<?php get_footer(); ?>
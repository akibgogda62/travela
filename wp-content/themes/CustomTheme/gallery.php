<?php
/* Template Name: Gallery */
get_header();
?>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Our Gallery</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Gallery</li>
            </ol>
    </div>
</div>
<!-- Header End -->

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



<?php get_footer(); ?>
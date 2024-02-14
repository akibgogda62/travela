<?php
/* Template Name: Blog */
get_header();
?>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Our Blog</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Blog</li>
            </ol>
    </div>
</div>
<!-- Header End -->

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



<?php
get_footer();
?>
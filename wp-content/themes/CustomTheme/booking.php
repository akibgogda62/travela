<?php
/* Template Name: Booking */
get_header();
?>


<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Online Booking</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Online Booking</li>
            </ol>
    </div>
</div>
<!-- Header End -->

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



<?php get_footer(); ?>
<?php
/* Template Name: Contact */
get_header();
?>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Contact Us</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Contact</li>
            </ol>
    </div>
</div>
<!-- Header End -->

<!-- Contact Start -->
<div class="container-fluid contact bg-light py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Contact Us</h5>
            <h1 class="mb-0">Contact For Any Query</h1>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-lg-4">
                <div class="bg-white rounded p-4">
                    <div class="text-center mb-4">
                        <i class="fa fa-map-marker-alt fa-3x text-primary"></i>
                        <h4 class="text-primary">
                            <Address></Address>
                        </h4>
                        <a href="https://maps.app.goo.gl/NdMfJpZvX39d1yvQA">
                            <p class="mb-0">Acquaint Softtech PVT. LTD. <br> Ahmedabad , Gujarat</p>
                        </a>

                    </div>
                    <div class="text-center mb-4">
                        <i class="fa fa-phone-alt fa-3x text-primary mb-3"></i>
                        <h4 class="text-primary">Mobile</h4>
                        <a href="tel:+012 345 67890">
                            <p class="mb-0">+012 345 67890</p>
                        </a>
                        <a href="tel:+012 345 67890">
                            <p class="mb-0">+012 345 67890</p>
                        </a>
                    </div>

                    <div class="text-center">
                        <i class="fa fa-envelope-open fa-3x text-primary mb-3"></i>
                        <h4 class="text-primary">Email</h4>
                        <a href="mailto:info@example.com">
                            <p class="mb-0">info@example.com</p>
                        </a>
                        <a href="mailto:info@example.com">
                            <p class="mb-0">info@example.com</p>
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <h3 class="mb-2">Send us a message</h3>
                <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                <form>
                    <?php echo do_shortcode('[contact-form-7 id="cd60d5a" title="contact"]'); ?>
                </form>
            </div>
            <div class="col-12">
                <div class="rounded">
                    <iframe class="rounded w-100" style="height: 450px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.663093356429!2d72.50884277509223!3d23.036139279164225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b48f9717941%3A0x2ca8d3114c27b566!2sAcquaint%20Softtech%20Private%20Limited!5e0!3m2!1sen!2sin!4v1707302700699!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->



<?php
get_footer();
?>
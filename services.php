<?php $page = 'services'; ?>
<?php
$services = [
    [
        'title' => 'KITCHENS',
        'image' => 'images/kitchen.jpg',
        'link' => 'services-details.php',
        "id" => 'kitchen-details',
        'description' => "The kitchen is the heart of the home. It's where meals are prepared, and families gather. This is why at Affinity Builders, we take extra care in making the kitchen of your dreams. Hence, with inspired ideas, we're sure to create a livable and lovable kitchen. ",
        'additional_info' => ' Large Traditional Kitchens, Contemporary and Modern Kitchens, Kitchen Wall Removal for an Open Living Concept, Small and Compact City Kitchens with Innovative Storage Solutions '


    ],
    [
        'title' => 'BATHROOM',
        'image' => 'images/bathroom.jpg',
        'link' => 'services-details.php',
        "id" => 'bathroom-details',
        'description' => 'Bathrooms transform into your personal oasis. We work to create your perfect bathroom using the best tubs, tile, fixtures, and lighting. Once we work with you to finalize your vision, installation and execution will proceed, your dream bathroom will become a reality.',
        'additional_info' => '  Traditional Guest Bathrooms. Custom Walk-in Showers, Basement Bathroom Additions, Contemporary and Modern Bathrooms, Tub-to-Shower Conversions '
    ],
    [
        'title' => 'EXTERIOR AND INTERIOR REMODELS',
        'image' => 'images/exterior_interior.jpg',
        'link' => 'services-details.php',
        "id" => 'remodels-details',
        'description' => 'Does your property need an entire overhaul of its Exterior, Interior or in some cases both? At Affinity Builders we work with you to add value to your property and to your way of life through a complete remodel.  ',
        'additional_info' => ' Window Installation, Exterior and Interior Door Installations, Structural Support and Framing, Flooring (Tile and Hardwood) , Expert Installation of Finish Materials   '

    ],

    // [
    //     'title' => 'REMIDIATION    ',
    //     'image' => 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
    //     'link' => 'basements-details.php',
    //     'id' => 'remidiation-detail',
    //     'description' => 'Do you have a small, old, or outdated property that you need to redesign? We work with you to make your property a modern, beautiful, and livable place.   ',
    //     'additional_info' => ' Remodeling to a New Standard, Redesigning to a New Look, Redesigning to a New Functionality, Redesigning to a New Design   '


    // ],
    // [
    //     'title' => 'DECKS     ',
    //     'image' => 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
    //     'link' => 'basements-details.php',
    //     'id' => 'decks-detail',
    //     'description' => 'Do you need a deck to protect your property from the elements? We work with you to make your property a beautiful, modern, and livable place.   ',
    //     'additional_info' => ' Deck Installation, Deck Replacement, Deck Removal, Deck Repair, Deck Design   '

    // ],
    // [
    //     'title' => 'BASEMENT REDESIGN     ',
    //     'image' => 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
    //     'link' => 'basements-details.php',
    //     'id' => 'basement-redesign-detail',
    //     'description' => 'Do you need a basement to protect your property from the elements? We work with you to make your property a beautiful, modern, and livable place.   ',
    //     'additional_info' => ' Basement Installation, Basement Replacement, Basement Removal, Basement Repair, Basement Design   '
    // ],
    // [
    //     'title' => 'BASEMENT REDESIGN     ',
    //     'image' => 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
    //     'link' => 'basements-details.php',
    //     'id' => 'basement-redesign-detail',
    //     'description' => 'Do you need a basement to protect your property from the elements? We work with you to make your property a beautiful, modern, and livable place.   ',
    //     'additional_info' => ' Basement Installation, Basement Replacement, Basement Removal, Basement Repair, Basement Design   '
    // ],
    // [
    //     'title' => 'BASEMENT REDESIGN     ',
    //     'image' => 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
    //     'link' => 'basements-details.php',
    //     'id' => 'basement-redesign-detail',
    //     'description' => 'Do you need a basement to protect your property from the elements? We work with you to make your property a beautiful, modern, and livable place.   ',
    //     'additional_info' => ' Basement Installation, Basement Replacement, Basement Removal, Basement Repair, Basement Design   '
    // ],
];


$addtional = [
    [
        'icon' => 'fa fa-',
        'title' => 'BASEMENT REMODEL',
        'link' => 'basement-remodel-details.php',
        'description' => 'A basement remodel is one of the most cost-effective ways to add living space and value to your property. We can make what was once an unused space a livable focal point of your home.',
    ],
    [
        'icon' => 'fa fa-',
        'title' => 'REMIDIATION',
        'link' => 'services-details.php',
        'description' => 'Stopping and eliminating environmental hazards through the process of remediation. Ensuring that your space remains safe, functional, and aesthetically pleasing.',
    ]
]




    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Services | Affinity Builders</title>
    <meta name="description" content="" />
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
</head>

<body>
    <?php include 'include/header.php'; ?>
    <div class="wrapper">
        <div class="contact-banner">
            <div class="containerFull w-100">
                <div class="banner-inner  ">
                    <h1 class="fontHeading  ">
                        Our Services

                    </h1>
                    <p class="mt-3 text-white">

                    </p>

                </div>
            </div>
        </div>
        <section class="" style="background:#f6f6f6">
            <div class="containerFull ">
                <h4 class="fontHeading heading fontWeight700 text_secondary">
                    Our Remodeling Services
                </h4>
                <p class="mt-4">
                    Affinity Builders Our services cover all aspects of the construction project including intense
                    preliminary planning in order to get the project on the right track. It is important to us to give
                    the client a clear vision of what the job is going to look like, how it is going to get done, and
                    when every aspect of the job will be completed. You can expect the highest level of quality and
                    expert guidance every step of the way because we are committed to ensuring each client’s building
                    experience is both enjoyable and exceptional.
                </p>
                <div class="row mt-4">
                    <?php foreach ($services as $service): ?>
                        <div class="col-lg-4">
                            <div>
                                <div class="services_item">
                                    <div class="imgStyles">
                                        <a href="<?php echo $service['link']; ?>">
                                            <picture>
                                                <source srcset="<?php echo $service['image']; ?>" type="image/webp">
                                                <img src="<?php echo $service['image']; ?>" alt="">
                                            </picture>
                                        </a>
                                    </div>
                                    <div class="text-center py-3 w-100 position-absolute bottom-0 z-2 heading_box">
                                        <h3 class="title fontHeading fontWeight600 text-center">
                                            <a class="text-white"
                                                href="<?php echo $service['link']; ?>"><?php echo $service['title']; ?></a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="row mt-5">

                    <div class="col-lg-6">
                        <h4 class=" fontHeading  heading text_secondary  fontWeight800">
                            Addtional Services
                        </h4>
                        <ul class="additional-item mt-4">
                            <li>
                                <a href="services-details.php" class="remodel-link">

                                    <h4 class="text_secondary">BASEMENT REMODEL</h4>
                                    <p class="mt-2">A basement remodel is one of the most cost-effective
                                        ways
                                        to
                                        add living space and value to your property. We can make what was once an unused
                                        space a
                                        livable focal point of your home.</p>
                                </a>

                            </li>
                            <li>
                                <a href="services-details.php" class="remodel-link">

                                    <h4 class="text_secondary">REMIDIATION</h4>
                                    <p class="mt-2">Stopping and eliminating environmental hazards
                                        through
                                        the
                                        process of remediation. Ensuring that your space remains safe, functional, and
                                        aesthetically pleasing.</p>
                                </a>

                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-6 mt-4">

                        <div id="add_ser_carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#add_ser_carousel" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#add_ser_carousel" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#add_ser_carousel" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/services-carousel.jpg" class="d-block w-100" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/services-carousel2.jpg" class="d-block w-100" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/remodle.avif" class="d-block w-100" alt="Third slide">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#add_ser_carousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#add_ser_carousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>


                    </div>


                </div>


            </div>
        </section>





        <section class="bg_secondary">
            <div class="containerFull">
                <div class="text-center text-white">

                    <h4 class="heading fontHeading fontWeight700">
                        Transform Your Space: Affordable &amp; Elegant Design Solutions

                    </h4>
                    <p class="mt-3 text-white">
                        Kitchen &amp; Bath Remodeling | Home Additions | Outdoor Living
                    </p>
                    <div class="d-flex mt-4 justify-content-center ">
                        <a class="btn fontWeight600 header-btn2" href="tel:267-645-9005"><i
                                class="fa-solid fa-phone me-1"></i>
                            267-645-9005</a>
                        <a href="#"
                            class=" ms-3 d-inline-block rounded-0  icon-link icon-link-hover simple_btn2 fontWeight600">
                            <i class="fa-regular fa-envelope me-2"></i>
                            Know More

                        </a>


                    </div>
                </div>




            </div>
        </section>

        <?php include 'include/footer.php'; ?>
    </div>
    <?php include 'include/footer-links.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script type="text/javascript">
        Fancybox.bind("[data-fancybox]", {});
    </script>
</body>

</html>
<?php $page = 'services'; ?>
<?php
$services = [
    [
        'title' => 'KITCHENS',
        'image' => 'https://images.pexels.com/photos/1599791/pexels-photo-1599791.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
        'link' => 'kitchens-details.php',
        "id" => 'kitchen-details',
        'description' => "The kitchen is the heart of the home. It's where meals are prepared, and families gather. This is why at Affinity Builders, we take extra care in making the kitchen of your dreams. Hence, with inspired ideas, we're sure to create a livable and lovable kitchen. ",
        'additional_info' => ' Large Traditional Kitchens, Contemporary and Modern Kitchens, Kitchen Wall Removal for an Open Living Concept, Small and Compact City Kitchens with Innovative Storage Solutions '


    ],
    [
        'title' => 'BATHROOM',
        'image' => 'https://images.pexels.com/photos/105934/pexels-photo-105934.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
        'link' => 'bathroom-details.php',
        "id" => 'bathroom-details',
        'description' => 'Bathrooms transform into your personal oasis. We work to create your perfect bathroom using the best tubs, tile, fixtures, and lighting. Once we work with you to finalize your vision, installation and execution will proceed, your dream bathroom will become a reality.',
        'additional_info' => '  Traditional Guest Bathrooms. Custom Walk-in Showers, Basement Bathroom Additions, Contemporary and Modern Bathrooms, Tub-to-Shower Conversions '
    ],
    [
        'title' => 'EXTERIOR AND INTERIOR REMODELS',
        'image' => 'https://images.pexels.com/photos/28836085/pexels-photo-28836085/free-photo-of-bright-empty-room-with-wooden-flooring-and-closet.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=700&amp;h=500&amp;dpr=1',
        'link' => 'remodels-details.php',
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
        'link' => 'remediation-details.php',
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
                        KITCHENS

                    </h1>
                    <p class="mt-3 text-white">

                    </p>

                </div>
            </div>
        </div>
        <section class="" style="background:#f6f6f6">
            <div class="containerFull">
                <h4 class="text_secondary fontWeight800  fontHeading heading">

                    Complete Kitchen Transformations
                </h4>
                <p class="mt-3">Affinity Builders is Montgomery County’s trusted expert in design-build kitchen
                    remodeling. Our
                    skilled kitchen design team will work with you to transform your kitchen into a space that fits your
                    needs perfectly. The journey to your dream kitchen starts with understanding how you use the space.
                    We collaborate closely with you to create a design that blends beauty and functionality seamlessly.
                    Whether it’s updating the style, increasing storage, building an addition, or removing walls, we’re
                    here to make it happen.</p>

                <p class="mt-3">We take pride in delivering top-notch craftsmanship, using only premium materials,
                    fixtures, and
                    appliances to create stunning kitchens throughout Montgomery County. With decades of experience, our
                    design-build team specializes in turning cramped, outdated kitchens into inviting, efficient spaces
                    ideal for cooking and entertaining.</p>

                <p class="mt-3">At Affinity Builders, our clients' needs come first. With personalized care and
                    attention to detail,
                    we’re committed to transforming the heart of your home into an inviting kitchen space for family and
                    friends. Contact us today to get started!</p>

                <div class="row mt-5">
                    <div class="col-lg-6">
                        <h4 class="heading fontHeading fontWeight800">Our Suggested Kitchen Solutions</h4>

                        <h4 class="sub_heading fontHeading fontWeight800 mt-4">1. Countertops</h4>
                        <p class="mt-2">Add counterspace, bar tops, and kitchen islands using strong materials designed
                            with
                            excellent durability. Quartz and granite are very popular options.</p>

                        <h4 class="sub_heading fontHeading fontWeight800 mt-3">2. Backsplashes</h4>
                        <p class="mt-2">Bring your kitchen together with an eye-catching backsplash. It serves a
                            practical purpose by
                            protecting walls from splatters, but also provides a stylish focal point for your kitchen.
                        </p>

                        <h4 class="sub_heading fontHeading fontWeight800 mt-3">3. Custom Cabinetry</h4>
                        <p class="mt-2">Gorgeous, sturdy, and accessible storage space is essential. We offer cabinets,
                            pantries,
                            shelving, and more, all designed to maximize both function and aesthetic appeal.</p>

                        <h4 class="sub_heading fontHeading fontWeight800 mt-3">4. Finishing Touches</h4>
                        <p class="mt-2">Customize your newly remodeled kitchen to every fine detail, including windows,
                            radiant heat
                            flooring, appliances, lighting, door hardware, sinks, and faucets. The possibilities are
                            endless!</p>

                    </div>
                    <div class="col-lg-6">
                        <div class="img_box_s_detail">
                            <img src="https://images.pexels.com/photos/2724749/pexels-photo-2724749.jpeg?auto=compress&cs=tinysrgb&w=12800&h=700&dpr=1"
                                alt="">

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
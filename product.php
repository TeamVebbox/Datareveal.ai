<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FL7-FHIR API ADAPTER | Datareveal</title>

    <!-- Boostrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/product.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>


<body>

    <!-- Navigation Section -->
    <section for="Nav-bar-menu">
        <?php
         include "navbar.php";
        ?>
    </section>

     <!-- Navigation Section For Mobile -->
     <section for="Nav-bar-menu" class="d-block d-sm-none">
        <?php
            include "mobile-navbar.php";
        ?>
    </section>

    <!-- Landing Contents -->
    <section for="Landing-contents">
        <div class="row" id="landing" style="padding: 0;margin: 0;">

            <div class="col-1"></div>
            <div class="col-lg-5 col-md-5 col-sm-12 my-auto p-4 pt-0" id="landing-contents">
                <h5 id="landing-contents-h5">Datareveal Extract - Product</h5>
                <h1 id="landing-contents-h3">Lorem ipsum dolor sit amet. Et fuga totam in dolor reprehenderit quo
                    repudiandae nobis ut voluptatum modi. Qui velit sapiente et minima maiores aut necessitatibus.</h1>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 ms-lg-5 ms-md-5 my-auto" id="landing-image">
                <img src="images/product-landing.png" class="img-fluid ms-lg-4 ms-md-4 ms-sm-0" alt="Datareveal-Vision"
                    height="100%" width=100%">
            </div>
        </div>
    </section>
    <!-- Product Features -->
    <section for="Product-features">
        <div class="row mt-lg-5 mt-md-4 mt-5" id="product-feature">
            <h2 class="text-center"><strong>Let AI Handle Your Document Intake</strong></h2>
            <p style="color: #202832; text-align: center; font-size: 17px;"><strong> people have better things to
                    do.</strong></p>

            <div class="col-lg-4 col-md-4 p-lg-5" style="text-align: center;" data-aos="fade-up" data-aos-duration="3000">
                <img src="images/extract-filer_ItsCheaper_icon.svg">
                <p id="pro-main"><strong>It's</strong>&nbsp;<span style="color:#007ce1;">Cheaper</span></p>
                <p id="pro-sub">Extract Filer eliminates hours of tedious manual labor, delivering <strong>immediate
                        cost savings</strong> and freeing your people up to <strong>focus on more important
                        things</strong></p>
            </div>

            <div class="col-lg-4 col-md-4 p-lg-5" style="text-align: center;" data-aos="fade-up" data-aos-duration="3000">
                <img src="images/extract-filer_ItsFaster_icon.svg">
                <p id="pro-main"><strong>It's</strong>&nbsp;<span style="color:#007ce1;">Faster</span></p>
                <p id="pro-sub">Our AI-Powered software completes the entire document intake process <strong> more than
                        5x faster</strong> than standard workflows, enabling you to be<strong>infinitely more
                        responsive.</strong></p>
            </div>

            <div class="col-lg-4 col-md-4 p-lg-5" style="text-align: center;" data-aos="fade-up" data-aos-duration="3000">
                <img src="images/extract-filer_futureproof_icon.svg">
                <p id="pro-main"><strong>It's</strong>&nbsp;<span style="color:#007ce1;">Future-Proof</span></p>
                <p id="pro-sub">Extract enables staff to <strong> process documents remotely </strong> through one
                    intuitive UI, and can file documents into virtually<strong> any software, storage, or RPA
                        system.</strong></p>
            </div>
        </div>
    </section>

    <!-- Contents Section -->
    <section for="Product-contents">
        <!-- 1 -->
        <div class="row p-lg-5">
            <div class="col-lg-7 col-sm-12 p-lg-5 p-5">
                <img src="images/extract-filer_CategorizedPDFs_icon.svg">
                <p id="pro-con"><strong>Sorts Large Files Into</strong> <span style="color:#007ce1;"><strong>Separately
                            Categorized PDFs</strong></span></p>
                <p id="pro-con-sub">Extract Filer leverages OCR, computer vision, and machine learning to identify and
                    sort incoming documents based on your internal document organization practices. It can automatically
                    pick up files straight from your email, fax, and scanners and split them into separately labeled PDF
                    documents ready to be routed directly into downstream systems.</p>
            </div>
            <div class="col-lg-5 col-sm-12 p-lg-5 p-md-5 p-5" data-aos="zoom-in" data-aos-duration="1000">
                <img src="images/product-1.webp" id="pro-img">
            </div>
        </div>

        <!-- 2 -->
        <div class="row">
            <div class="col-lg-5 col-sm-12 p-lg-5 p-md-5 my-auto d-none d-sm-block p-5" data-aos="zoom-in" data-aos-duration="1000">
                <img src="images/product-2.webp" id="pro-img">
            </div>
            <div class="col-lg-7 col-sm-12 p-lg-5 p-5">
                <img src="images/extract-filer_correctcasefile_icon.svg">
                <p id="pro-con"><strong>Automatically Searches Your Systems to</strong> <span
                        style="color:#007ce1;"><strong>Link Each Document to the Correct File</strong></span></p>
                <p id="pro-con-sub">Extract Filer reads each document and, just like a trained staff member, locates the
                    correct file in your system using names, dates, addresses and other identifiers found in the text.
                    It can learn and apply complex business rules, and can present conflicts and unknowns through its
                    web-based UI for easy intervention.</p>
            </div>
            <div class="col-lg-5 col-sm-12 p-lg-5 p-md-5 my-auto d-block d-sm-none p-5" data-aos="zoom-in" data-aos-duration="1000">
                <img src="images/product-2.webp" id="pro-img">
            </div>
        </div>

        <!-- 3 -->
        <div class="row">
            <div class="col-lg-7 col-sm-12 p-lg-5 p-5">
                <img src="images/extract-filer_Capturekeys_icon.svg">
                <p id="pro-con"><strong>Captures Key Information and</strong> <span
                        style="color:#007ce1;"><strong>Routes it into Your System</strong></span></p>
                <p id="pro-con-sub">Extract Filer can capture key information from documents and route it directly into
                    your systems or use it to automatically title each document to your rules and naming conventions for
                    seamless organization into your file management software.</p>
            </div>
            <div class="col-lg-5 col-sm-12 p-lg-5 p-md-5 p-5" data-aos="zoom-in" data-aos-duration="1000">
                <img src="images/product-3.webp" id="pro-img">
            </div>
        </div>

        <!-- 4 -->
        <div class="row">
            <div class="col-lg-5 col-sm-12 p-lg-5 p-md-5 my-auto d-none d-sm-block p-5" data-aos="zoom-in" data-aos-duration="1000">
                <img src="images/product-4.webp" id="pro-img">
            </div>
            <div class="col-lg-7 col-sm-12 p-lg-5 p-5">
                <img src="images/extract-filer_Integration_icon.svg">
                <p id="pro-con"><strong>Seamlessly Integrates With</strong> <span style="color:#007ce1;"><strong>Your
                            Existing Systems and Workflows</strong></span></p>
                <p id="pro-con-sub">Extract Filer handles the entire document and data entry process through one simple
                    user interface, eliminating the need to bounce between different applications. It can upload
                    documents straight from your Efax or scanner, process them on cloud or on prem, and push them
                    directly into virtually any downstream software, storage, or RPA system.</p>
            </div>
            <div class="col-lg-5 col-sm-12 p-lg-5 p-md-5 my-auto d-block d-sm-none" data-aos="zoom-in" data-aos-duration="1000">
                <img src="images/product-4.webp" id="pro-img">
            </div>
        </div>

        <!-- 5 -->
        <div class="row">
            <div class="col-lg-7 col-sm-12 p-lg-5 p-5">
                <img src="images/extract-filer_Transpharancy_icon.svg">
                <p id="pro-con"><strong>Provides Full Transparency and Control of</strong> <span
                        style="color:#007ce1;"><strong>Your Document Operations</strong></span></p>
                <p id="pro-con-sub">Extract Filer features robust document and staff analytics to help you understand
                    and predict your document volumes and optimize your staffing accordingly. It tracks all user
                    behavior in the system, providing transparency into exactly when your staff are working and how
                    productive they are being, even if they are working remotely. Its reporting features allow you to
                    audit all staff and AI-augmented data entry, giving you full control over your document operations.
                </p>
            </div>
            <div class="col-lg-5 col-sm-12 p-lg-5 p-md-5 p-5" data-aos="zoom-in" data-aos-duration="1000">
                <img src="images/product-5.webp" id="pro-img">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section for="Subpage-feature-contents">
        <?php
        include "feature.php";
        ?>
    </section>

    <!-- Subpage Carousel Section -->
    <section for="Carousel-content">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" style="height: 50%;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/1.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/2.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/3.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/4.webp" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Get In Touch Section -->
    <section for="Get-in-touch">
        <?php
        include "get-in-touch.php";
        ?>
    </section>


    <!-- Footer Section -->
    <section for="Footer">
        <?php
            include "footer.php";
        ?>
    </section>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
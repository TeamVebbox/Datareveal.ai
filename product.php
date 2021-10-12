<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product | Datareveal</title>

    <!-- Boostrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/product.css">
</head>


<body>

    <!-- Navigation Section -->
    <section for="Nav-bar-menu">
    <?php
         include "navbar.php";
        ?>
    </section>

    <!-- Landing Contents -->
    <section for="Landing-contents">
        <div class="row" id="landing" style="padding: 0;margin: 0;">
           
            <div class="col-1"></div>
            <div class="col-lg-5 col-md-5 col-sm-12 my-auto p-4" id="landing-contents">
                <h5 id="landing-contents-h5">Datareveal Extract - Vision</h5>
                <h3 id="landing-contents-h3">Lorem ipsum dolor sit amet. Et fuga totam in dolor reprehenderit quo
                    repudiandae nobis ut voluptatum modi. Qui velit sapiente et minima maiores aut necessitatibus.</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 ms-lg-5 my-auto" id="landing-image">
                <img src="images/lang_land_c.png" class="img-fluid mt-5 ms-4 ms-sm-0" alt="Datareveal-Vision"
                    height="100%" width=90%">
            </div>
        </div>
    </section>
    <!-- Product Features -->
    <section for="Product-features">
        <div class="row p-5 border bg-light" id="product-feature">
            <h2 class="text-center"><strong>Let AI Handle Your Document Intake</strong></h2>
            <p style="color: #202832; text-align: center; font-size: 17px;"><strong> people have better things to do.</strong></p>

            <div class="col-lg-4 col-md-4 p-5"  style="text-align: center;">
                <img src="images/extract-filer_ItsCheaper_icon.svg">
                <p id="pro-main"><strong>It's</strong>&nbsp;<span style="color:#007ce1;">Cheaper</span></p>
                <p id="pro-sub">Extract Filer eliminates hours of tedious manual labor, delivering <strong>immediate cost savings</strong> and freeing your people up to <strong>focus on more important things</strong></p>
            </div>

            <div class="col-lg-4 col-md-4 p-5"  style="text-align: center;">
                <img src="images/extract-filer_ItsFaster_icon.svg">
                <p id="pro-main"><strong>It's</strong>&nbsp;<span style="color:#007ce1;">Faster</span></p>
                <p id="pro-sub">Our AI-Powered software completes the entire document intake process <strong> more than 5x faster</strong> than standard workflows, enabling you to be<strong>infinitely more responsive.</strong></p>
            </div>

            <div class="col-lg-4 col-md-4 p-5"  style="text-align: center;">
                <img src="images/extract-filer_futureproof_icon.svg">
                <p id="pro-main"><strong>It's</strong>&nbsp;<span style="color:#007ce1;">Future-Proof</span></p>
                <p id="pro-sub">Extract enables staff to <strong> process documents remotely </strong> through one intuitive UI, and can file documents into virtually<strong> any software, storage, or RPA system.</strong></p>
            </div>
        </div>
    </section>

    <!-- Contents Section -->
    <section for="Product-contents">
        <!-- 1 -->
        <div class="row p-5">
            <div class="col-lg-7 col-sm-12 p-5">
                <img src="images/extract-filer_CategorizedPDFs_icon.svg">
                <p id="pro-con"><strong>Sorts Large Files Into</strong> <span style="color:#007ce1;"><strong>Separately Categorized PDFs</strong></span></p>
                <p id="pro-con-sub">Extract Filer leverages OCR, computer vision, and machine learning to identify and sort incoming documents based on your internal document organization practices. It can automatically pick up files straight from your email, fax, and scanners and split them into separately labeled PDF documents ready to be routed directly into downstream systems.</p>
            </div>
            <div class="col-lg-5 col-sm-12  p-5">
                <img src="images/pro-img1.png" id="pro-img">
            </div>
        </div>

        <!-- 2 -->
        <div class="row p-5">
            <div class="col-lg-5 col-sm-12 p-5 my-auto d-none d-sm-block">
                <img src="images/pro-img2.png" id="pro-img">
            </div>
            <div class="col-lg-7 col-sm-12 p-5">
                <img src="images/extract-filer_correctcasefile_icon.svg">
                <p id="pro-con"><strong>Automatically Searches Your Systems to</strong> <span style="color:#007ce1;"><strong>Link Each Document to the Correct File</strong></span></p>
                <p id="pro-con-sub">Extract Filer reads each document and, just like a trained staff member, locates the correct file in your system using names, dates, addresses and other identifiers found in the text. It can learn and apply complex business rules, and can present conflicts and unknowns through its web-based UI for easy intervention.</p>
            </div>
            <div class="col-lg-5 col-sm-12 p-5 my-auto d-block d-sm-none">
                <img src="images/pro-img2.png" id="pro-img">
            </div>
        </div>

        <!-- 3 -->
        <div class="row p-5">
            <div class="col-lg-7 col-sm-12 p-5">
                <img src="images/extract-filer_Capturekeys_icon.svg">
                <p id="pro-con"><strong>Captures Key Information and</strong> <span style="color:#007ce1;"><strong>Routes it into Your System</strong></span></p>
                <p id="pro-con-sub">Extract Filer can capture key information from documents and route it directly into your systems or use it to automatically title each document to your rules and naming conventions for seamless organization into your file management software.</p>
            </div>
            <div class="col-lg-5 col-sm-12 p-5">
                <img src="images/pro-img3.png" id="pro-img">
            </div>
        </div>

        <!-- 4 -->
        <div class="row p-5">
            <div class="col-lg-5 col-sm-12 p-5 my-auto d-none d-sm-block">
                <img src="images/pro-img4.png" id="pro-img">
            </div>
            <div class="col-lg-7 col-sm-12 p-5">
                <img src="images/extract-filer_Integration_icon.svg">
                <p id="pro-con"><strong>Seamlessly Integrates With</strong> <span style="color:#007ce1;"><strong>Your Existing Systems and Workflows</strong></span></p>
                <p id="pro-con-sub">Extract Filer handles the entire document and data entry process through one simple user interface, eliminating the need to bounce between different applications. It can upload documents straight from your Efax or scanner, process them on cloud or on prem, and push them directly into virtually any downstream software, storage, or RPA system.</p>
            </div>
            <div class="col-lg-5 col-sm-12 p-5 my-auto d-block d-sm-none">
                <img src="images/pro-img4.png" id="pro-img">
            </div>
        </div>

        <!-- 5 -->
        <div class="row p-5">
            <div class="col-lg-7 col-sm-12 p-5">
                <img src="images/extract-filer_Transpharancy_icon.svg">
                <p id="pro-con"><strong>Provides Full Transparency and Control of</strong> <span style="color:#007ce1;"><strong>Your Document Operations</strong></span></p>
                <p id="pro-con-sub">Extract Filer features robust document and staff analytics to help you understand and predict your document volumes and optimize your staffing accordingly. It tracks all user behavior in the system, providing transparency into exactly when your staff are working and how productive they are being, even if they are working remotely. Its reporting features allow you to audit all staff and AI-augmented data entry, giving you full control over your document operations.</p>         </div>
            <div class="col-lg-5 col-sm-12 p-5">
                <img src="images/pro-img5.png" id="pro-img">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section for="Subpage-feature-contents">
        <div class="container mb-5">
            <div class="row mt-3" id="subpage-features" style="margin: 0;padding: 0;">
                <div class="mb-3" id="subpage-feature-heading">
                    <h1 class="text-center" id="subpage-feature-heading-h1">Features</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 p-5 text-center" id="features">
                    <img src="images/vision-feature-1.svg" alt="feature-vision" class="mb-2">
                    <h3>Lorem ipsm!</h3>
                    <p>Lorem ipsum dolor sit amet. In odit architecto id explicabo tenetur aut
                        galisum omnis.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 p-5 text-center" id="features">
                    <img src="images/vision-feature-2.svg" alt="feature-vision" class="mb-2">
                    <h3>Lorem ipsm!</h3>
                    <p>Lorem ipsum dolor sit amet. In odit architecto id explicabo tenetur aut
                        galisum omnis.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 p-5 text-center" id="features">
                    <img src="images/vision-feature-3.svg" alt="feature-vision" class="mb-2">
                    <h3>Lorem ipsm!</h3>
                    <p>Lorem ipsum dolor sit amet. In odit architecto id explicabo tenetur aut
                        galisum omnis.</p>
                </div>
                <div class="ol-lg-6 col-md-6 col-sm-12 p-5 text-center" id="features">
                    <img src="images/vision-feature-4.svg" alt="feature-vision" class="mb-2">
                    <h3>Lorem ipsm!</h3>
                    <p>Lorem ipsum dolor sit amet. In odit architecto id explicabo tenetur aut
                        galisum omnis.</p>
                </div>
                <div class="ol-lg-12 col-md-12 col-sm-12 p-5 text-center" id="features">
                    <img src="images/vision-feature-5.svg" alt="feature-vision" class="mb-2">
                    <h3>Lorem ipsm!</h3>
                    <p>Lorem ipsum dolor sit amet. In odit architecto id explicabo tenetur aut
                        galisum omnis.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Subpage Carousel Section -->

    <section for="Carousel-content">
      <?php
      include "carousal.php";
      ?>
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

</body>
</html>
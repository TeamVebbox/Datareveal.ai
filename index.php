<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Datareveal</title>
    <link rel="stylesheet" href="./css/index.css">
    <!-- Boostrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <!-- Navigation Section -->
    <section for="Nav-bar-menu">
        <!-- <div class="row p-4 border bg-dark" id="nav-bar">
            <h2 class="text-center text-light">Navigation-bar</h2>
        </div> -->
        <?php
         include "navbar.php";
        ?>
    </section>

    <!-- Video Section -->
    <section for="Video-with-content">
        <div class="container-fluid">
        <div class="row" >
            <video autoplay muted loop id="myVideo">
                <source src="./images/video-bg.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
              </video>
              
              <div class="content" style="margin-top: -18%;">
                  <div class="ps-5">
                <h3>Data reaveal </h3>
                <h3>Make Automation Work.</h3>
                <h5>Your people have better things to do.</h5>
                <button id="myBtn">Pause</button>
            </div>
              </div>
        </div>
    </div>
    </section>

    <!-- Services Section -->
    <section for="Services">
        <div class="row mt-4 p-5 border bg-light" id="service">
            <div id="service-heading">
                <h2 class="text-center" id="service-heading-h2">Service-section</h2>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 p-5">
                <div id="service-one" class="text-center">
                   <img src="./images/eye-scanner_1.svg" alt="" srcset="" height="50px" width="50px" class="mt-5">
                   <h4 class="mt-3">Vision</h4>
                   <div class="mt-4 p-3">
                        <p>Image Processing, Video Analysis, and Intelligent OCR to <span>extract structured data</span> from   
                        unstructured <br> images, videos and documents.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 p-5">
                <div id="service-two" class="text-center">
                    <img src="./images/file_1.svg" alt="" height="50px" width="50px" class="mt-5">
                    <h4 class="mt-3">Language</h4>
                    <div class="mt-4  p-3">
                        <p>Content Classification, Text Extraction, and Language Analysis models to <span>automate document
                            processing</span> and streamline workflows.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 p-5">
                <div id="service-three" class="text-center">
               <img src="./images/lightbulb.svg" alt="" srcset="" height="50px" width="50px" class="mt-5">
                <h4 class="mt-3">learing</h4>
                <div class="mt-4  p-3">
                    <p>Machine Learning, Deep Learning and Graph-Based models to detect patterns, extract
                        actionable insights, and <span>optimize decision-making</span>.</p>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Carousel Section -->
    <section for="Carousel-content">
        <div class="row p-5 border bg-warning" id="carousel">
            <h2 class="text-center">Carousel-section</h2>
        </div>
    </section>

    <!-- Features Section -->
    <section for="Feature-contents">
        <?php 
        include "feature.php";
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
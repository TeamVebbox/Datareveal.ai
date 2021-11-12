<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vision | Datareveal</title>

    <!-- Boostrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font family and Icons-->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
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
            <div class="col-lg-4 col-md-4 col-sm-12 ms-lg-5 my-auto" id="landing-image">
                <img src="images/vision-landing.png" class="img-fluid mt-lg-5 ms-lg-5 ms-sm-0" alt="Datareveal-Vision"
                    height="100%" width=100%">
            </div>
            <div class="col-1"></div>
            <div class="col-lg-5 col-md-5 col-sm-12 my-auto p-4" id="landing-contents">
                <h1 id="landing-contents-h5">Datareveal Extract - Vision</h1>
                <h1 id="landing-contents-h3">Powerful software to read documents, interpret images, and analyze videos
                </h1>
            </div>
        </div>
    </section>

    <!-- Subpage Contents -->
    <section for="Vision-services">
        <div class="container">
            <div class="row p-3 mx-auto mt-2" id="vision-content" style="margin: 0;padding: 0;">
                <a href="#" id="vision-content-a">Datareveal</a>
                <h2 id="vision-content-h2">Extract Vision</h2>
                <p class="p-3" id="vision-content-p">Configurable machine learning, neural network, and deep learning
                    models to extract
                    structured data from images, videos and documents. Assemble with Language and Learning models to
                    deploy
                    customized end-to-end solutions.</p>
                <div class="col-lg-4 col-md-4 col-sm-12" id="vision-content-one" data-aos="fade-up"
                    data-aos-easing="linear" data-aos-duration="1000">
                    <div class="p-3 mb-2 text-center" id="service-card">
                        <img src="images/vision-serv-one.png" class="img-fluid" height="30%" width="30%" alt="vision">
                        <div class="card-body">
                            <!-- <h5 class="card-title">Card title</h5> -->
                            <p class="card-text">Image Classification, Analysis and Anomaly Detection</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mx-sm-auto" id="vision-content-two" data-aos="fade-up"
                    data-aos-easing="linear" data-aos-duration="1000">
                    <div class="p-3 mb-2 text-center" id="service-card">
                        <img src="images/vision-serv-two.png" class="img-fluid" height="30%" width="30%" alt="vision">
                        <div class="card-body">
                            <!-- <h5 class="card-title">Card title</h5> -->
                            <p class="card-text">Video Analytics, Search, and Object Tracking</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mx-sm-auto" id="vision-content-three" data-aos="fade-up"
                    data-aos-easing="linear" data-aos-duration="1000">
                    <div class="p-3 text-center" id="service-card">
                        <img src="images/vision-serv-three.png" class="img-fluid" height="40%" width="30%" alt="vision">
                        <div class="card-body">
                            <!-- <h5 class="card-title">Card title</h5> -->
                            <p class="card-text">Intelligent OCR, Document Classification, and Text Extraction
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Parellex Section -->
    <section for="Parellex">
        <div class="row p-4" id="parallax" style="margin: 0;padding: 0;">
            <h3 id="parallax-h3" class="text-center p-5">Enable software with human like vision to analyze images,
                videos, and documents across
                real world use cases.</h3>
        </div>
    </section>

    <!-- Contents Section -->
    <section for="Contents">
        <div class="container">
            <div class="row mt-5 mb-5" id="contents-one" style="margin: 0;padding: 0;">
                <div class="col-lg-5 col-md-5 col-sm-12 p-1" id="content-image" data-aos="fade-right"
                    data-aos-easing="linear" data-aos-duration="1700">
                    <img src="images/vision-content1.jpg" alt="vision-Datareavel" height="100%" width="100%">
                </div>
                <div class="col-1"></div>
                <div class="col-lg-5 col-md-5 col-sm-12 ps-lg-5 my-auto p-1 p-lg-0" id="content-subcontent">
                    <h2 id="content-subcontent-h2">Extract text from documents and media</h2>
                    <p id="content-subcontent-p">Extract can identify and capture business critical content from
                        hundreds of documents out of the box, including legal pleadings, medical records, common
                        insurance documents like ACORD forms, and IRS documents like 1040s and W-2s.

                        The Extract AI engine can be easily configured to identify and extract text from virtually any
                        document, including unstructured documents with inconsistent layouts.</p>
                </div>
            </div>
            <div class="row mt-5 mb-5" id="contents-two">
                <div class="col-lg-5 col-md-5 col-sm-12 ps-lg-5 my-auto d-none d-sm-block" id="content-subcontent">
                    <h2 id="content-subcontent-h2">Capture people, things, and events across video assets</h2>
                    <p id="content-subcontent-p">Extract Vision uses transfer learning to quickly identify new types of
                        objects with limited training data. Once configured, Extract can count and track multiple
                        disparate objects moving in multiple directions through a video frame--like products on a
                        factory floor, people walking through a shopping center, or cars on the road.

                        Datareavel AI has deployed these models to help municipalities increase urban mobility and
                        traffic safety by tracking the number, types, and direction of vehicles moving through busy
                        intersections.</p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 p-1 ms-lg-5" id="content-image" data-aos="fade-left"
                    data-aos-easing="linear" data-aos-duration="1700">
                    <img src="images/vision-content2.jpg" class="ms-lg-5" alt="vision-Datareavel" height="100%"
                        width="100%">
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 ps-lg-5 my-auto d-block d-sm-none p-4" id="content-subcontent">
                    <h2 id="content-subcontent-h2">Capture people, things, and events across video assets</h2>
                    <p id="content-subcontent-p">Extract Vision uses transfer learning to quickly identify new types of
                        objects with limited training data. Once configured, Extract can count and track multiple
                        disparate objects moving in multiple directions through a video frame--like products on a
                        factory floor, people walking through a shopping center, or cars on the road.

                        Datareavel AI has deployed these models to help municipalities increase urban mobility and
                        traffic safety by tracking the number, types, and direction of vehicles moving through busy
                        intersections.</p>
                </div>
            </div>
            <div class="row mt-5 mb-5" id="contents-one">
                <div class="col-lg-5 col-md-5 col-sm-12 p-1" id="content-image" data-aos="fade-right"
                    data-aos-easing="linear" data-aos-duration="1700">
                    <img src="images/vision-content3.jpg" alt="vision-Datareavel" height="100%" width="100%">
                </div>
                <div class="col-1"></div>
                <div class="col-lg-5 col-md-5 col-sm-12 ps-lg-5 my-auto p-4 p-lg-0" id="content-subcontent">
                    <h2 id="content-subcontent-h2">Identify people in real-time, with limited training data</h2>
                    <p id="content-subcontent-p">Datareavel Extract facial recognition leverages state-of-the-art models
                        to recognize people with limited training data. Extract can recognize faces in digital and
                        analog footage, regardless of angle of capture, and even in suboptimal conditions like when they
                        are wearing face masks.

                        Extract facial recognition can process archived images and video, or deployed in real time
                        across a wide range of use-cases like forensic analysis, e-discovery, medication adherence
                        monitoring, physical premises monitoring, and bio-metric access control.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Parellex Section -->
    <section for="Parellex">
        <div class="row p-4" id="parallax" style="margin: 0;padding: 0;">
            <div class="col-lg-5 col-md-5 col-sm-12 my-auto mx-auto p-4" id="landing-contents">
                <h3 id="landing-contents-h3">Datareavel Extract - Vision
                </h3>
                <h5 id="landing-contents-h5">Datareavel Extract Video Search combines Datareavel AI’s video analytics,
                    facial recognition, and object classification and tracking models to enable users to quickly scan
                    through large troves of video and image files and accurately identify the exact instances when
                    specific people, objects and events appear on screen.</h5>
            </div>
            <div class="col-1"></div>
            <div class="col-lg-4 col-md-4 col-sm-12 my-auto" id="landing-image">
                <img src="images/vision-parallax.png" class="img-fluid mt-lg-0 ms-lg-0 ms-sm-0 me-0"
                    alt="Datareveal-Vision" height="100%" width=100%">
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
    <section for="Subpage-carousel-content">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
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
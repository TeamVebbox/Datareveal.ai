<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GENOMICS DNA API  | Datareveal</title>

    <!-- Boostrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/product1.css">
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
            <div class="col-lg-5 col-md-5 col-sm-12 my-auto p-4" id="landing-contents">
                <h5 id="landing-contents-h5">Datareveal Extract - Products</h5>
                <h3 id="landing-contents-h3">Lorem ipsum dolor sit amet. Et fuga totam in dolor reprehenderit quo
                    repudiandae nobis ut voluptatum modi. Qui velit sapiente et minima maiores aut necessitatibus.</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 ms-lg-5 my-auto" id="landing-image">
                <img src="images/lang_land_c.webp" class="img-fluid mt-5 ms-4 ms-sm-0" alt="Datareveal-Vision"
                    height="100%" width=90%">
            </div>
        </div>
    </section>

    <!-- Product Features -->
    <section for="Product-features">
        <div class="row p-5 border bg-light">
            <h4 class="text-center"><strong>sifting through hours of video that don’t contain anything of interest. Extract Video Search automatically searches through video archives to find exactly what you’re looking for.</strong> </h4>
            <div class="col-lg-6 col-md-4 p-5">
               <img src="images/bulletpoint__squr-01.svg">
               <span id="pro-con-sub" style="margin-left: 15px;">Easy to use UI - Locate the exact points in video files where objects and people surface.</span>
            </div>

            <div class="col-lg-6 col-md-4 p-5">
                <img src="images/bulletpoint__squr-01.svg">
                <span id="pro-con-sub" style="margin-left: 15px;">Pre-trained and expandable — Recognize 80 object classes out of the box, train new classes with no coding required.</span>
            </div>

            <div class="col-lg-6 col-md-4 p-5">
                <img src="images/bulletpoint__squr-01.svg">
                <span id="pro-con-sub" style="margin-left: 15px;"> Advanced Facial Recognition – Identify individuals from multiple angles, even with face masks.</span>
            </div>

            <div class="col-lg-6 col-md-4 p-5">
                <img src="images/bulletpoint__squr-01.svg">
                <span id="pro-con-sub" style="margin-left: 15px;">Cloud, On Premise, and Edge Ready</span>
            </div>
        </div>
    </section>

    <!-- Contents Section -->
    <section for="Product-contents">
        <!-- 1 -->
        <div class="row p-5">
            <div class="col-lg-5 col-sm-12 p-5" >
                <img src="images/integillent-search.webp" id="pro-img">
            </div>
            <div class="col-lg-7 col-sm-12 p-5" style="margin-top: -5%;">
                <p id="pro-con"><strong>Intelligent Search</strong></p>
                <p id="pro-con-sub">Identify objects and people and the exact moment they appear or disappear in any video. Extract Video Search not only identifies the video file in which your item of interest appears but allows you to jump to the exact moment it surfaces and review the video footage yourself.</p>
            </div>
        </div>

        <!-- 2 -->
        <div class="row p-5" style="margin-top: -8%;">
            <div class="col-lg-5 col-sm-12 p-5 my-auto d-block d-sm-none">
                <img src="images/Bespoke Analytics.webp" id="pro-img">
            </div>
            <div class="col-lg-7 col-sm-12 p-5" style="margin-top: -5%;">
                <p id="pro-con"><strong>Bespoke Analytics</strong></p>
                <p id="pro-con-sub">Extract Video Search goes beyond pointing you to the exact moments in video where objects appear. It enables you to generate analytics for the metrics that matter to you. Automatically generate reports that identify how many times an object appeared in a specified set of videos or how long a person spent in a given area.</p>
            </div>
            <div class="col-lg-5 col-sm-12 p-5 my-auto d-none d-sm-block">
                <img src="images/Bespoke Analytics.webp" id="pro-img">
            </div>
        </div>

        <!-- 3 -->
        <div class="row p-5" style="margin-top: -8%;">
            <div class="col-lg-5 col-sm-12 p-5">
                <img src="images/self-training.webp" id="pro-img">
            </div>
            <div class="col-lg-7 col-sm-12 p-5" style="margin-top: -5%;">
                <p id="pro-con"><strong>Self-Training</strong></p>
                <p id="pro-con-sub">Many use cases for Extract Video Search require identifying objects that we can’t yet recognize out-of-the-box. With Extract Video Search, this isn’t a problem! You can easily train the system to identify new objects with just a few clicks – no coding required.</p>
            </div>
        </div>

        <!-- 4 -->
         <div class="row p-5" style="margin-top: -8%;">
            <div class="col-lg-5 col-sm-12 p-5 my-auto d-block d-sm-none">
                <img src="images/inteligent-alert.webp" id="pro-img">
            </div>
            <div class="col-lg-7 col-sm-12 p-5" style="margin-top: -5%;">
                <p id="pro-con"><strong>Integration & Alerts</strong></p>
                <p id="pro-con-sub">Delivered in the cloud or on prem, and with a robust API and suite of configurable connectors, Extract Video Search can integrate with virtually any video storage or downstream system. This enables us to search through your videos no matter where they live and trigger alerts as well as downstream workflows based on what is found in your videos.</p>
            </div>
            <div class="col-lg-5 col-sm-12 p-5 my-auto d-none d-sm-block">
                <img src="images/inteligent-alert.webp" id="pro-img">
            </div>
        </div>
      
    </section>

 <!-- Parellex Section -->
 <section for="Parellex">
    <div class="row p-4" id="parallax" style="margin: 0; padding: 0">
      <h3 id="parallax-h3">
        Lorem ipsum dolor sit amet. In odit architecto id explicabo tenetur
        aut galisum omnis aut eius praesentium rem architecto sint non dicta
        mollitia eum nisi veniam.Lorem ipsum dolor sit amet. In odit architecto id explicabo tenetur
        aut galisum omnis aut eius praesentium rem architecto sint non dicta
        mollitia eum nisi veniam.
      </h3>
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
</body>

</html>
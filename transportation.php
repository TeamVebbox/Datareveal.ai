<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transportation | Datareveal</title>

  <!-- Boostrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/about.css">
  <link rel="stylesheet" href="css/product.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
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
  <section for="About-landing-contents">
    <div class="row my-auto" id="about-landing" style="margin: 0;padding:0;">
      <div class="col-lg-12 col-md-12 col-sm-12 pt-lg-5 ps-lg-5 pt-md-0 pt-lg-0 pt-sm-0 pt-5"
        id="about-landing-contents">
        <h2 class="mt-lg-5 pt-lg-5 mx-lg-5 mb-lg-5 mb-3" id="about-land-h2">Datareveal</h2>
        <h3 class="mx-lg-5 mb-lg-5 mb-5" id="about-land-h3">Lorum Ipsm</h3>
        <p class="mx-lg-5" id="about-land-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
      </div>
    </div>
  </section>

  <!-- Contents Section -->
  <section for="Product-contents">
    <!-- 1 -->
    <div class="row p-lg-5">
        <div class="col-lg-7 col-sm-12 p-lg-5 p-5">
            <img src="images/extract-filer_CategorizedPDFs_icon.svg">
            <p id="pro-con"><strong>lorum</strong> <span style="color:#007ce1;"><strong>Ipsm</strong></span></p>
            <p id="pro-con-sub">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
        </div>
        <div class="col-lg-5 col-sm-12 p-lg-5 p-md-5 p-5" data-aos="zoom-in" data-aos-duration="1000">
            <img src="./images/transport1.png" id="pro-img">
        </div>
    </div>

    <!-- 2 -->
    <div class="row">
        <div class="col-lg-5 col-sm-12 p-lg-5 p-md-5 my-auto d-none d-sm-block p-5" data-aos="zoom-in" data-aos-duration="1000">
            <img src="images/transport2.jpg" id="pro-img">
        </div>
        <div class="col-lg-7 col-sm-12 p-lg-5 p-5">
            <img src="images/extract-filer_correctcasefile_icon.svg">
            <p id="pro-con"><strong>lorem</strong> <span
                    style="color:#007ce1;"><strong>ipsm</strong></span></p>
            <p id="pro-con-sub">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
        </div>
        <div class="col-lg-5 col-sm-12 p-lg-5 p-md-5 my-auto d-block d-sm-none p-5" data-aos="zoom-in" data-aos-duration="1000">
            <img src="images/transport2.jpg" id="pro-img">
        </div>
    </div>

    <!-- 3 -->
    <div class="row">
        <div class="col-lg-7 col-sm-12 p-lg-5 p-5">
            <img src="images/extract-filer_Capturekeys_icon.svg">
            <p id="pro-con"><strong>lorem</strong> <span
                    style="color:#007ce1;"><strong>ipsm</strong></span></p>
            <p id="pro-con-sub">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
        </div>
        <div class="col-lg-5 col-sm-12 p-lg-5 p-md-5 p-5" data-aos="zoom-in" data-aos-duration="1000">
            <img src="images/transport3.jpg" id="pro-img">
        </div>
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

    var div = document.getElementById("view-div");
    var btn = document.getElementById("view-btn");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function () {
      div.style.display = "block";
    }

    span.onclick = function () {
      div.style.display = "none";
    }
    window.onclick = function (event) {
      if (event.target == modal) {
        div.style.display = "none";
      }
    }
  </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Datareveal</title>

    <!-- Boostrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/about.css">
</head>

<body>

    <!-- Navigation Section -->
    <section for="Nav-bar-menu">
       <?php
        include "navbar.php";
       ?>
    </section>

    <!-- Landing Contents -->
    <section for="About-landing-contents">
            <div class="row my-auto" id="about-landing" style="margin: 0;padding:0;">
                <div class="col-lg-12 col-md-12 col-sm-12 pt-lg-5 ps-lg-5" id="about-landing-contents">
                    <h2 class="mt-lg-5 pt-lg-5 mx-5">Datareavel</h2>
                    <h3 class="mx-lg-5">ARCHITECTING INTELLIGENCE™</h3>
                    <p class="mx-lg-5">Datareavel AI is a California based technology company on a mission to build artificial intelligence for the real world. We leverage advances in computer vision, natural language processing, and machine learning to help organizations process, manage, and leverage their unstructured data to streamline manual tasks, make better data driven decisions, and drive business value.</p>
                </div>
            </div>
    </section>

    <!-- Team Sections -->
    <section for="Team-members">
        <div class="row pt-5" id="team" style="margin: 0;padding:0;">
            <div id="team-heading">
                <h2 class="text-center" id="team-heading-h2">Leadership</h2>
                <hr color="white" width="10%" size="10px" style="margin-left: 45%;">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-5"   id="team-member-one">
                <img src="./images/avatar2.png" height="150" width="150">
                <h3>Lorem Ispam</h3>
                <i>Lorem Ispam</i>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-5 col-6"   id="team-member-two">
                <img src="./images/avatar5.png" height="150" width="150">
                <h3>Lorem Ispam</h3>
                <i>Lorem Ispam</i>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-5 col-6"   id="team-member-three">
                <img src="./images/avatar2.png" height="150" width="150">
                <h3>Lorem Ispam</h3>
                <i>Lorem Ispam</i>

            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-5 col-6"   id="team-member-four">
                <img src="./images/avatar5.png" height="150" width="150">
                <h3>Lorem Ispam</h3>
                <i>Lorem Ispam</i>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-5 col-6"   id="team-member-five">
                <img src="./images/img_avatar.png" height="150" width="150">
                <h3>Lorem Ispam</h3>
                <i>Lorem Ispam</i>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-5 col-6"   id="team-member-six">
                <img src="./images/avatar2.png" height="150" width="150">
                <h3>Lorem Ispam</h3>
                <i>Lorem Ispam</i>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-5 col-6"   id="team-member-seven">
                <img src="./images/avatar5.png" height="150" width="150">
                <h3>Lorem Ispam</h3>
                <i>Lorem Ispam</i>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-5 col-6"   id="team-member-eight">
                <img src="./images/avatar2.png" height="150" width="150">
                <h3>Lorem Ispam</h3>
                <i>Lorem Ispam</i>
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

</body>

</html>
<!doctype html>
<html lang="en">
    <!-- Head -->
    <?php include("includes/head.php"); ?>

    <!-- Body -->
    <body class="bg-secondary">
        
        <!-- Navbar -->
        <?php $active_page="people"; ?>
        <?php include("includes/navbar.php"); ?>

        <!-- Retrive the $team variable -->
        <?php include("assets/people/team.php"); ?>

        <!-- Team -->
        <section class="page-section">
            <div class="container-md container-people">
                
                <!-- Team -->
                <div class="row g-5">

                    <!-- Ilaria -->
                    <div class="col-xl-3 col-sm-6">
                        <img src="<?php echo($team[0]['photo']); ?>" class="img-ila w-50" alt="">
                        <h4 class="pt-4">
                            <?php echo($team[0]['name']); ?>
                        </h4>
                        <div class="color-primary">
                            <?php echo($team[0]['position']); ?>
                            <a class="color-primary" href="mailto:<?php echo($team[0]['email']); ?>">
                                <i class="bi-envelope px-2"></i>
                            </a>
                        </div>
                        <div class="mt-4">
                            <?php echo($team[0]['shortbio']); ?>
                        </div>
                    </div>

                    <!-- Add all the images of the gallery with a for loop -->
                    <?php                        
                        // Cycle over the team members
                        $counter = count($team)-1;
                        for ($i = 1; $i <= $counter; ++$i) {
                    ?>
                    <div class="col-xl-3 col-sm-6">
                        <!-- Photo -->
                        <img src="<?php echo($team[$i]['photo']); ?>" class="img-people w-50" alt="">
                        <!-- Name -->
                        <h4 class="pt-4">
                            <?php echo($team[$i]['name']); ?>
                        </h4>
                        <!-- Position and email -->
                        <div class="color-secondary">
                            <?php echo($team[$i]['position']); ?> 
                            <a class="color-secondary" href="mailto:<?php echo($team[$i]['email']); ?>">
                                <i class="bi-envelope px-2"></i>
                            </a>
                        </div>
                        <!-- Shortbio -->
                        <div class="mt-4">
                            <?php echo($team[$i]['shortbio']); ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </section>

        <!-- Carousel of images of people -->
        <section class="container">
            <div class="carousel slide carousel-slide" id="peopleCarousel"
                data-bs-ride="carousel" data-bs-interval="15000" data-bs-pause="hover">
                <div class="carousel-inner">
                    <!-- Picture 1 -->
                    <div class="carousel-item active"><img src="assets/people/social/2022_06_13_group1.jpg" class="carousel-banner">
                        <div class="carousel-caption text-shadow-sm">
                            <h4 class="text-center">June 2022</h4>
                        </div>
                    </div>
                    <!-- Picture 2 -->
                    <div class="carousel-item"><img src="assets/people/social/group_2021_10.jpg" class="carousel-banner">
                        <div class="carousel-caption text-shadow-sm">
                            <h4 class="text-center">October 2021</h4>
                        </div>
                    </div>
                    <!-- Picture 3 -->
                    <div class="carousel-item"><img src="assets/people/social/group201904.jpg" class="carousel-banner">
                        <div class="carousel-caption text-shadow-sm">
                            <h4 class="text-center">April 2019</h4>
                        </div>
                    </div>
                </div>
                <!-- Buttons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#peopleCarousel" data-bs-slide="prev">
                    <span class="bi-caret-left color-secondary fs-2" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#peopleCarousel" data-bs-slide="next">
                    <span class="bi-caret-right color-secondary fs-2" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- Alumni -->
        <section class="page-section">
            <div class="container text-center">
                <h2 class="text-center">Alumni</h2>
                <?php include("assets/people/alumni.php"); ?>
            </div>
        </section>

        <!-- Footer -->
        <?php include("includes/footer.php"); ?>
    </body>
</html>
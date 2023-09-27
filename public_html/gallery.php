<!doctype html>
<html lang="en">
    <!-- Head -->
    <?php include("includes/head.php"); ?>

    <!-- Body -->
    <body class="bg-darker">
        
        <!-- Navbar -->
        <?php $active_page='gallery'; ?>
        <?php include("includes/navbar.php"); ?>

        <!-- Gallery 1 -->
        <section class="page-section">
            <div class="container-md">

                <!-- Title -->
                <div class="">
                    <h2>Gallery 1</h2>
                    <hr class="divider" />
                </div>

                <div class="row g-5 align-items-center">
                    <!-- Add all the images of the gallery with a for loop -->
                    <?php
                        // Load array of images in variable $images
                        include("assets/gallery/1.php");
                        
                        // Cycle over the gallery images
                        $counter = count($images)-1;
                        for ($i = 0; $i <= $counter; ++$i) {
                    ?>
                    <div class="col-lg-6">
                        <a href=<?php echo($images[$i]['img']); ?>>
                            <img src="<?php echo($images[$i]['img']); ?>" class="img-fluid img-gallery" alt="">
                        </a>
                        <div class="my-2"><?php echo($images[$i]['description']); ?> </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </section>

        <!-- Gallery 2 -->
        <section class="page-section">
            <div class="container-md">

                <!-- Title -->
                <div class="">
                    <h2>Gallery 2</h2>
                    <hr class="divider-secondary" />
                </div>

                <div class="row g-5 align-items-center">
                    <!-- Add all the images of the gallery with a for loop -->
                    <?php
                        // Load array of images in variable $images
                        include("assets/gallery/2.php");
                        
                        // Cycle over the gallery images
                        $counter = count($images)-1;
                        for ($i = 0; $i <= $counter; ++$i) {
                    ?>
                    <div class="col-lg-6">
                        <a href=<?php echo($images[$i]['img']); ?>>
                            <img src="<?php echo($images[$i]['img']); ?>" class="img-fluid img-gallery" alt="">
                        </a>
                        <div class="my-2"><?php echo($images[$i]['description']); ?> </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </section>

        <!-- Footer -->
        <?php include("includes/footer.php"); ?>
    </body>
</html>
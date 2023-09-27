<!doctype html>
<html lang="en">
    <!-- Head -->
    <?php include("includes/head.php"); ?>

    <!-- Body -->
    <body class="bg-white">
        
        <!-- Navbar -->
        <?php $active_page='tools'; ?>
        <?php include("includes/navbar.php"); ?>

        <!--------------------------------------------------------------------->
        <!-- ImSwitch -->
        <section class="page-section bg-secondary" id="imswitch">
            <div class="container container-research">
                <?php include("assets/tools/imswitch/text.html"); ?>
            </div>
        </section>

        <!-- Resolution Prediction -->
        <section class="page-section" id="resolution_prediction">
            <div class="container container-research">
                <?php include("assets/tools/resolution_prediction/text.html"); ?>
            </div>
        </section>

        <!--------------------------------------------------------------------->

        <!-- Footer -->
        <?php include("includes/footer.php"); ?>
    </body>
</html>
<!doctype html>
<html lang="en">
    <!-- Head -->
    <?php include("includes/head.php"); ?>

    <!-- Body -->
    <body class="bg-white">
        
        <!-- Navbar -->
        <?php $active_page='research'; ?>
        <?php include("includes/navbar.php"); ?>

        <!--------------------------------------------------------------------->
        <!-- Resolft -->
        <section class="page-section" id="resolft">
            <div class="container container-research">
                <?php include("assets/research/resolft/text.html"); ?>
            </div>
        </section>

        <!-- Sted -->
        <section class="page-section bg-secondary" id="sted">
            <div class="container container-research">
                <?php include("assets/research/sted/text.html"); ?>
            </div>
        </section>

        <!--------------------------------------------------------------------->
        <!-- Smart RESOLFT -->
        <section class="page-section" id="smart_resolft">
            <div class="container container-research">
                <?php include("assets/research/smart_resolft/text.html"); ?>
            </div>
        </section>

        <!-- Automated STED -->
        <section class="page-section bg-secondary" id="automated_sted">
            <div class="container container-research">
                <?php include("assets/research/automated_sted/text.html"); ?>
            </div>
        </section>

        <!-- Monalisa -->
        <section class="page-section" id="monalisa">
            <div class="container container-research">
                <?php include("assets/research/monalisa/text.html"); ?>
            </div>
        </section>

        <!-- 3DpRESOLFT -->
        <section class="page-section bg-secondary" id="resolft3d">
            <div class="container container-research">
                <?php include("assets/research/resolft3d/text.html"); ?>
            </div>
        </section>

        <!--------------------------------------------------------------------->
        <!-- Applications -->
        <!-- <section class="page-section" id="applications">
            <div class="container container-research">
                <?php include("assets/research/applications/text.html"); ?>
            </div>
        </section> -->

        <!-- Fundings -->
        <section class="page-section" id="fundings">
            <div class="container container-research">
                <?php include("assets/research/fundings/text.html"); ?>
            </div>
        </section>

        <!-- Footer -->
        <?php include("includes/footer.php"); ?>
    </body>
</html>
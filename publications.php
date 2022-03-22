<!doctype html>
<html lang="en">
    <!-- Head -->
    <?php include("includes/head.php"); ?>
    
    <!-- Body -->
    <body class="bg-secondary">
        
        <!-- Navbar -->
        <?php $active_page='publications'; ?>
        <?php include("includes/navbar.php"); ?>

        <!-- Selected publications showcase -->
        <section class="page-section pb-0">
            <div class="container-md container-research">
                <h2>Selected Publications</h2>
                <hr class="divider"></hr>
                
                <div class="row mt-5">
                    <!-- Cover-01 -->
                    <div class="col-4">
                        <a  href="https://doi.org/10.1016/j.nbd.2021.105361">
                            <span title="Neurobiology of Disease (2021)">
                                <img src="assets/publications/selected/covers-01.jpg" class="img-fluid shadow-lg rounded-3">
                            </span>
                        </a>
                    </div>
                    <!-- Cover-02 -->
                    <div class="col-4">
                        <a  href="https://doi.org/10.1038/s41587-020-00779-2">
                            <span title="Nature Biotechnology (2021)">
                                <img src="assets/publications/selected/covers-02.jpg" class="img-fluid shadow-lg rounded-3">
                            </span>
                        </a>                    
                    </div>
                    <!-- Cover-03 -->
                    <div class="col-4">
                        <a  href="https://doi.org/10.1088/1361-6463/ab4c13">
                            <span title="Journal of Physics D: Applied Physics (2020)">
                                <img src="assets/publications/selected/covers-03.jpg" class="img-fluid shadow-lg rounded-3">
                            </span>
                        </a>                    
                    </div>
                </div>
                
            </div>
        </section>

        <!-- Import the bibtex file -->
        <bibtex src="assets/publications/scopus.bib"></bibtex>

        <!-- Prepare temaplate of citations -->
        <div class="bibtex_template" style="display: none;">
            <div class="row gx-3 py-2 align-items-center">
                <!-- Citation text -->
                <div class="col">
                    <span class="author"></span>
                    <div style="margin-left: 1.5rem; margin-bottom:1rem;">
                        <span class="title bibtex-title"></span>
                        <span class="journal bibtex-journal"  onclick="pallino()"></span>
                        <a class="bibtexVar bibtex-doi-link"
                            href="https://doi.org/+doi+" extra="doi">
                            (view online)
                        </a>
                    </div>
                </div>

                <!-- Altmetric badge -->
                <!-- <span class="doi"></span>
                <div class="col-2 col-sm-auto">
                    <div class='altmetric-embed'
                        data-badge-type='donut'
                        data-doi="10.1038/s41587-020-00779-2">
                    </div>
                </div> -->

                <!-- Altimetric badge 2 -->
                <!-- <div class='altmetric-embed altmetric-doi- altmetric-badge-type-donut altmetric-badge-popover-left'></div> -->

                <!-- Dimensions badge -->
                <!-- <div class="col-2 col-md-auto">
                    <span class=" __dimensions_badge_embed__"
                        data-style="small_circle"
                        data-doi="10.1038/s41467-019-13897-6">
                    </span>
                </div> -->
            </div>
        </div>


        <!-- Ilaria Bibliography 2018->Now -->
        <section class="page-section" id="stat">
            <div class="container-md container-research">
                <?php
                // Starting year for the bibliography
                $starting_year = 2018;
                // Cycle over the years from the current one to 2006
                for ($year = date("Y"); $year >= $starting_year; $year = $year-1) {
                    echo("<h2 class='pt-4'>$year</h2>");            
                    echo("<div class='bibtex_display' year='".$year."'></div>");
                }
                ?>
            </div>
        </section>
    


        <!-- Footer -->
        <?php include("includes/footer.php"); ?>

        <!-- Additional js scripts for the publication page -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/pcooksey/bibtex-js@1.0.0/src/bibtex_js.min.js"></script>
        
        <!-- Citation badge from dimensions.ai and altmetric -->
        <!-- Currently not used -->
        <script async src="https://badge.dimensions.ai/badge.js" charset="utf-8"></script>
        <script type='text/javascript' src='https://d1bxh8uas1mnw7.cloudfront.net/assets/embed.js'></script>
        <!-- jquery -->
        <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            function pallino() {
                $(document).ready(function () {
                
                    alert('');
                });
                }
        </script> -->
    </body>
</html>
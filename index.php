<!doctype html>
<html lang="en">
    <!-- Head -->
    <?php include("includes/head.php"); ?>

    <!-- Body -->
    <body class="bg-darker">

        <!-- Welcome Carousel -->
        <?php include("includes/welcome.php"); ?>

        <!-- Navigation -->
        <?php $active_page='index'; ?>
        <?php include("includes/navbar.php"); ?>

        <!-- Statements -->
        <section class="page-section">
            <div class="container">
                <div class="row g-5 justify-content-center">

                    <!-- Research Interest -->
                    <div class="col-lg-4 col-sm-6">
                        <h2>Research Interest</h2>
                        <p>
                        <hr class="divider" />
                        Our aim is to develop and apply novel super resolution microscopy approaches 
                        to contribute to new discoveries and ideas within the basic life sciences.
                        Our long-term goal is to contribute to the understanding 
                        of fundamental biological processes relevant for health and disease.
                        </p>
                    </div>

                    <!-- Super Resolution -->
                    <div class="col-lg-4 col-sm-6">
                        <h2>Super Resolution</h2>
                        <p>
                        <hr class="divider" />
                        Fluorescence microscopes, and especially their confocal and two-photon variants, 
                        are unique in their ability to observe directly morphological changes 
                        and molecular reactions in living cells. 
                        However, they are limited in resolution by the diffraction barrier (about 200-300 nm). 
                        This limitation is overcome with great success by the field of super-resolution microscopy.
                        </p>
                    </div>

                    <!-- Applications in Biology -->
                    <div class="col-lg-4 col-sm-6">
                        <h2 >Applications</h2>
                        <p>
                        <hr class="divider" />
                        Utilizing both the low light intensities of RESOLFT combined with the high acquisition speeds of STED
                        we study neuronal protein organization and dynamics in brain tissues. 
                        We continuosly push the spatial and temporal resolution of novel microscopy techniques 
                        to enable more in depth studies of nanoscale structures and dynamics in biological samples.
                        </p>
                    </div>
                    
                </div>
            </div>
        </section>
        
        <!-- Setup Showcase -->
        <section class="page-section bg-jes-setup bg-dark py-0 m-0">
            <div class="container-md container-setup d-flex align-items-center">
                    <h2 class="text-shadow">We build <br> microscopes!</h2>
            </div>
        </section>
        
        <!-- Citation -->
        <section class="page-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <span class="display-6 fs-2">
                            "Progress in science depends on
                             new techniques, new discoveries, and new ideas,
                             probably in that order."
                        </span>
                        <p class="display-6 text-end fs-4">— Sydney Brenner</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Video from SSF on Youtube -->
        <div class="container-fluid container-video p-0">
            <div class="embed-responsive h-100">
                <iframe width="100%" height="100%" class="embed-responsive-item p-0"
                src="https://www.youtube.com/embed/vY6EwovfJ6U?rel=0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>

        <!-- Contacts -->
        <section class="page-section bg-more-dark" id="contacts">
                <div class="container-md pt-4">
                    <div class="row g-5 justify-content-center">

                        <!-- Get in touch -->
                        <div class="col-lg-4 col-sm-6">

                            <h2 class="">Let's Get In Touch!</h2>
                            <p>
                            <hr class="divider-secondary" />
                            Interested in what we are doing? <br>
                            Send us an email, follow us on Twitter,
                            or have a look at our Youtube channel and GitHub repositories.<br>
                            </p>
                            
                            <!-- Social Buttons -->
                            <div class='py-4 text-center'>
                                <a type="button" class="btn btn-social btn-secondary"
                                    href="mailto:ilaria.testa@scilifelab.se"
                                    data-bs-toggle="tooltip" title="ilaria.testa@scilifelab.se">
                                    <i class="bi-envelope text-dark"></i>
                                </a>
                                <a type="button" class="btn btn-social btn-twitter" 
                                    href="https://twitter.com/ilariatesta4?lang=en"
                                    data-bs-toggle="tooltip" title="twitter.com/ilariatesta4">
                                    <i class="bi-twitter"></i>
                                </a>
                                <a type="button" class="btn btn-social btn-youtube" 
                                    href="https://www.youtube.com/channel/UCmOCwxBP5PZPAmfD9q4tHSw"
                                    data-bs-toggle="tooltip" title="Ilaria Testa">
                                    <i class="bi-youtube"></i>
                                 </a>
                                <a type="button" class="btn btn-social btn-github"
                                    href="https://github.com/TestaLab"
                                    data-bs-toggle="tooltip" title="github.com/TestaLab">
                                    <i class="bi-github text-dark"></i>
                                </a>
                            </div>

                            <!-- Ilaria -->
                            <div class="row m-2">
                                <div class="col-2">
                                    <i class="bi-person-circle bi-big"></i>
                                </div>
                                <div class="col py-2">
                                    Ilaria Testa, PhD<br>
                                    Associate Professor<br>
                                    KTH Royal Institute of Technology<br>
                                    Dept. of Applied Physics
                                </div>
                            </div>
                            
                            <!-- Address -->
                            <div class="row m-2">
                                <div class="col-2">
                                    <i class="bi-geo-fill bi-big"></i>
                                </div>
                                <div class="col py-2">
                                    Science for Life Laboratory <br>
                                    Tomtebodavägen 23A <br>
                                    171 65 Solna <br>
                                    Sweden
                                </div>
                            </div>
                            
                        </div>

                        <!-- Open Positions -->
                        <div class="col-lg-4 col-sm-6">
                            <h2 class="">Open Positions</h2>
                            <p>
                            <hr class="divider-secondary" />
                            We are looking for self-motivated and curiosity-driven candidates
                            with an expertise in physics, chemistry or biology,
                            who are looking to make original contributions to the field of super-resolution microscopy.
                            The candidates will work on collaborative projects investigating 
                            the nanoscale organization and dynamics of proteins in living neurons
                            and brain tissue with our cutting edge microscopy technology.
                            We offer an outstanding scientific environment
                            and a vibrant working climate with individual freedom and various possibilities for professional development. 
                            The work will be funded by the European Union within the ERC project “MoNaLISA”.
                            </p>
                        </div>

                        <!-- Twitter Feed -->
                        <div class="col-lg-4  col-sm-6 text-center">
                            <a class="twitter-timeline" data-lang="en" data-width="400" data-height="600"
                                data-theme="dark" href="https://twitter.com/IlariaTesta4">
                                Tweets by IlariaTesta4
                            </a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
                        </div>

                    </div>
                </div>
        </section>

        <!-- About Scilifelab and kth -->
        <section class="page-section bg-darker" >
            <div class="container">
                <div class="row g-5 justify-content-center">
                    <div class="col-lg-4 col-sm-6" id="about-scilifelab">
                        <img src="img/logo/scilifelab/SciLifeLab_symbol_Green.png" class="logo-scilife my-3">
                        <h2 class="">About SciLifeLab</h2>
                        <p>
                        <hr class="divider-scilife">
                        <h4>Science for Life Laboratory</h4>
                        Our lab is located in the Science for Life Laboratory,
                        a national center for molecular biosciences with focus on health 
                        and environmental research. 
                        SciLifeLab has been created by the coordinated effort of four universities 
                        in Stockholm and Uppsala: Stockholm University, Karolinska Institutet, 
                        KTH Royal Institute of Technology and Uppsala University.
                        </p>
                        <div class="pt-4">
                            <a class="link-scilife" href="https://www.scilifelab.se/researchers/ilaria-testa">
                                Learn more at scilifelab.se
                            </a>
                            <p>
                            <a class="link-scilife" href="https://www.scilifelab.se/news/ilaria-testa-aims-to-observe-every-molecule/">
                                Read the article about the lab
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6" id="about-kth">
                        <img src="img/logo/kth/KTH_Logotyp_RGB_2013.png" class="logo-kth my-3">
                        <h2 class="">About KTH</h2>
                        <p>
                        <hr class="divider-kth">
                        <h4>Royal Institute of Technology</h4>
                        We are affiliated to KTH Royal Institute of Technology.
                        Since its founding in 1827, it
                        has grown to become one of Europe’s leading technical and engineering universities,
                        as well as a key centre of intellectual talent and innovation.
                        We are Sweden’s largest technical research and learning institution and home to students,
                        researchers and faculty from around the world dedicated to advancing knowledge.
                        </p>
                        <div class="pt-4">
                            <a class="link-kth" href="https://www.kth.se/profile/testa?l=en">
                                <h6>Learn more at kth.se</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php include("includes/footer.php"); ?>
    </body>
</html>
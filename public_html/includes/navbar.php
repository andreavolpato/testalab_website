<?php
    $active = array(
        "index"         => "", 
        "people"        => "",
        "gallery"       => "",
        "publications"  => "",
        "research"      => "",
        "tools"         => "",
    );
    $active[$active_page] = "active";
?>
<nav class="navbar sticky-top navbar-expand-md nav-masthead navbar-dark bg-dark-transparent">
    <div class="container-fluid justify-content-center">
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
            <div class="d-flex align-items-center mx-4">
                <i class="bi-list text-light text-muted" style="font-size: 2rem;"></i> <span class="nav-menu-label px-2">Menu</span>
            </div>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarResponsive">
            <ul class="navbar-nav flex-row flex-wrap justify-content-center">
                <!-- Index -->
                <li class="nav-item"><a class="nav-link <?php echo($active["index"]) ?>"         href="index.php#brand">    Home</a></li>
                <!-- Research -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo($active["research"]) ?>" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">Research</a>
                    <div class="dropdown-menu dropdown-menu-dark bg-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="research.php#resolft">RESOLFT</a>
                        <a class="dropdown-item" href="research.php#sted">STED</a>
                        <a> <hr class="dropdown-divider"> </a>
                        <a class="dropdown-item" href="research.php#smart_resolft">Smart RESOLFT</a>
                        <a class="dropdown-item" href="research.php#automated_sted">Automated STED</a>
                        <a class="dropdown-item" href="research.php#monalisa">MoNaLISA</a>
                        <a class="dropdown-item" href="research.php#resolft3d">3D-pRESOLFT</a>
                        <a> <hr class="dropdown-divider"> </a>
                        <a class="dropdown-item" href="research.php#applications">Applications</a>
                        <a class="dropdown-item" href="research.php#fundings">Fundings</a>
                    </div>
                </li>
                <!-- People -->
                <li class="nav-item"><a class="nav-link <?php echo($active["people"]) ?>"        href="people.php">         People</a></li>
                <!-- Publications -->
                <li class="nav-item"><a class="nav-link <?php echo($active["publications"]) ?>"  href="publications.php">   Publications</a></li>
                <!-- Tools -->
                <li class="nav-item"><a class="nav-link <?php echo($active["tools"]) ?>"         href="tools.php">          Tools</a></li>
                <!-- Gallery -->
                <!-- <li class="nav-item"><a class="nav-link <?php echo($active["gallery"]) ?>"       href="gallery.php">        Gallery</a></li> -->
                <!-- Contatcs -->
                <li class="nav-item"><a class="nav-link" href="index.php#contacts">                                         Contacts</a></li>
            </ul>
        </div>
    </div>
</nav>
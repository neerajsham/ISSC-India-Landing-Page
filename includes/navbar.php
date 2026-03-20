<?php
/* current page URL store */
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
?>

<!-- Header -->
<header class="header" id="header">
    <div class="header-container">
        <div class="logo-container">
            <img id="logo-white" onclick="window.location.href='https://isscindia.com/'" class="logo logo-click"
                src="assets/img/logo.png" alt="logo">
            <img id="logo-dark" onclick="window.location.href='https://isscindia.com/'" class="logo logo-click"
                style="display: none;" src="assets/img/logo-black.webp" alt="logo">
        </div>

        <!-- Navigation -->
        <nav>
            <button class="mobile-toggle" id="mobileToggle">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-menu" id="navMenu">
                <button class="close-menu" id="closeMenu">
                    <i class="fas fa-times"></i>
                </button>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo htmlspecialchars($_SESSION['current_page'], ENT_QUOTES, 'UTF-8'); ?>">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://isscindia.com/about-us.php" class="nav-link">About Us</a>   
                </li>
                <li class="nav-item">
                    <a href="#products" class="nav-link">
                        Products <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu-custom">
                        <div class="sub-dropdown">
                            <a href="#shears" class="dropdown-item-custom">
                                Shears <i class="fas fa-chevron-right"></i>
                            </a>
                            <div class="sub-dropdown-menu">
                                <a href="https://isscindia.com/container-continuous-shear.php"
                                    class="dropdown-item-custom">Container / Continuous Shear</a>
                                <a href="https://isscindia.com/gantry-shear.php" class="dropdown-item-custom">Gantry /
                                    Vertical Shear</a>
                                <a href="https://isscindia.com/hydraulic-box-shear-machine.php"
                                    class="dropdown-item-custom">Hydraulic Box Shear Machine</a>
                                <a href="https://isscindia.com/alligator-shear.php"
                                    class="dropdown-item-custom">Alligator Shear</a>
                            </div>
                        </div>

                        <div class="sub-dropdown">
                            <a href="#shredding" class="dropdown-item-custom">
                                Shredding Lines <i class="fas fa-chevron-right"></i>
                            </a>
                            <div class="sub-dropdown-menu">
                                <a href="https://isscindia.com/automatic-shredding-lines.php"
                                    class="dropdown-item-custom">Automatic Shredding Lines</a>
                                <a href="https://isscindia.com/automatic-elv-shredding-lines.php"
                                    class="dropdown-item-custom">Automatic ELV Shredding Lines</a>
                                <a href="https://isscindia.com/double-shaft-shredder.php"
                                    class="dropdown-item-custom">Double Shaft Shredder</a>
                                <a href="https://isscindia.com/hammer-mill-shredder.php"
                                    class="dropdown-item-custom">Hammer Mill Shredders</a>
                            </div>
                        </div>

                        <a href="https://isscindia.com/hydraulic-scrap-baler-machine.php"
                            class="dropdown-item-custom">Hydraulic Scrap Baler Machine</a>
                        <a href="Non-Ferrous Sorting Line" class="dropdown-item-custom">Non-Ferrous Sorting Line</a>
                        <a href="https://isscindia.com/pyrolysis-tire-wire-shredding-line.php"
                            class="dropdown-item-custom">Pyrolysis Tire Wire Shredding Line</a>
                        <a href="https://isscindia.com/lithium-battery-recycling-line.php"
                            class="dropdown-item-custom">Lithium Battery Recycling Line</a>
                        <a href="https://isscindia.com/tire-shredding-line.php" class="dropdown-item-custom">Tire
                            Shredding Line</a>
                        <a href="https://isscindia.com/scrap-handling.php" class="dropdown-item-custom">Scrap
                            Handling</a>
                        <a href="https://isscindia.com/copper-mould-tubes.php" class="dropdown-item-custom">Copper Mould
                            Tubes</a>
                    </div>
                </li>

                <!-- <li class="nav-item">
                    <a href="#products" class="nav-link">
                        Products <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu-custom">
                        <div class="sub-dropdown">
                            <a href="#shears" class="dropdown-item-custom">
                                Shears <i class="fas fa-chevron-right"></i>
                            </a>
                            <div class="sub-dropdown-menu">
                                <a href="https://isscindia.com/container-continuous-shear.php"
                                    class="dropdown-item-custom">Container / Continuous Shear</a>
                                <a href="https://isscindia.com/gantry-shear.php" class="dropdown-item-custom">Gantry /
                                    Vertical Shear</a>
                                <a href="https://isscindia.com/hydraulic-box-shear-machine.php"
                                    class="dropdown-item-custom">Hydraulic Box Shear Machine</a>
                                <a href="https://isscindia.com/alligator-shear.php"
                                    class="dropdown-item-custom">Alligator Shear</a>
                            </div>
                        </div>

                        <div class="sub-dropdown">
                            <a href="#shredding" class="dropdown-item-custom">
                                Shredding Lines <i class="fas fa-chevron-right"></i>
                            </a>
                            <div class="sub-dropdown-menu">
                                <a href="https://isscindia.com/automatic-shredding-lines.php"
                                    class="dropdown-item-custom">Automatic Shredding Lines</a>
                                <a href="https://isscindia.com/automatic-elv-shredding-lines.php"
                                    class="dropdown-item-custom">Automatic ELV Shredding Lines</a>
                                <a href="https://isscindia.com/double-shaft-shredder.php"
                                    class="dropdown-item-custom">Double Shaft Shredder</a>
                                <a href="https://isscindia.com/hammer-mill-shredder.php"
                                    class="dropdown-item-custom">Hammer Mill Shredders</a>
                            </div>
                        </div>

                        <a href="index.php"
                            class="dropdown-item-custom">Metal Shredding</a>
                        <a href="bundlemachines.php" class="dropdown-item-custom">Bundle Machines</a>
                         <a href="containershear.php" class="dropdown-item-custom">Container Shear</a>
                        <a href="doubleshaftshredder.php"
                            class="dropdown-item-custom">Double Shaft Shredder</a>
                        <a href="hammershredder.php"
                            class="dropdown-item-custom">Hammer Shredder</a>
                        <a href="nonferroussortingline.php" class="dropdown-item-custom">Non Ferrous Sorting Line</a>
                        <a href="pyrolysistyrewireshredder.php" class="dropdown-item-custom">Pyrolysis Tyre Wire Shredder</a>
                        <a href="scrapbaler.php" class="dropdown-item-custom">Scrap Baler</a>
                          <a href="scrapshreddingline.php" class="dropdown-item-custom">Scrap Shredding Line</a>
                            <a href="scrapshreddingmachine.php" class="dropdown-item-custom">Scrap Shredding Machine</a>
                              <a href="slagmill.php" class="dropdown-item-custom">Slag Mill</a>
                    </div>
                </li> -->

                <li class="nav-item">
                    <a href="https://isscindia.com/video-gallery.php" class="nav-link">Video Gallery</a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0)" onclick="document.getElementById('getIn-touch').scrollIntoView({behavior:'smooth'});" class="nav-link">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a href="assets/img/catloge.pdf" download="" class="download-btn">
                        Download Brochure <i class="fas fa-download"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!-- Hero Section -->
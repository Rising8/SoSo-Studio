<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="header-wrapper">
    <header class="py-3">
        <div class="container">
            <!-- Mobile Header Row -->
            <div class="d-flex d-md-none flex-column px-4" data-bs-theme="dark">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <div class="d-flex align-items-center">
                        <!-- Hamburger Icon -->
                        <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMobile" aria-controls="offcanvasMobile"  aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
                        </button>
                        <!-- Logo -->
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-2 d-flex align-items-center text-decoration-none">
                            <img class="header-studio-logo"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png"
                                alt="Logo">
                            <div class="logo-text text-start ps-2">
                                <span class="logo-soso">SO SO <br></span>
                                <span class="logo-studio">Studio</span>
                            </div>
                        </a>
                    </div>
                    <!-- Button -->
                    <div class="icon d-flex align-items-center">
                        <a class="chatbox px-4 py-2 fw-bold" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">
                            <i class="fa-solid fa-comments"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Desktop Header Row -->
            <div class="d-none d-md-flex align-items-center justify-content-between">
                <!-- Logo -->
                <div class="col-md-3">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="d-inline-flex align-items-start text-decoration-none">
                        <img class="header-studio-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="Logo">
                        <div class="logo-text text-center px-2">
                            <span class="logo-soso">SO SO <br></span>
                            <span class="logo-studio">Studio </span>
                        </div>
                    </a>
                </div>
                <!-- Navigation -->
                <nav class="navbar navbar-expand-md" data-bs-theme="dark">
                    <ul class="navbar-nav flex-row gap-3">
                        <li class="nav-item"><a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="nav-link">About</a></li>

                        <!-- Desktop dropdown -->
                        <li class="nav-item dropdown">
                            <a href="<?php echo esc_url( home_url( '/commission' ) ); ?>" class="nav-link dropdown-toggle">
                                Commissions
                            </a>
                            <ul class="dropdown-menu rounded-3" aria-labelledby="commissionDropdown">
                                <li><a class="dropdown-item rounded-3" href="<?php echo esc_url( home_url( '/commission' ) ); ?>">How It Works</a></li>
                                <li><a class="dropdown-item rounded-3" href="<?php echo esc_url( home_url( '/commission-form' ) ); ?>">Commission Request Form</a></li>
                                <li><a class="dropdown-item rounded-3" href="<?php echo esc_url( home_url( '/custom' ) ); ?>">Design Your Own Rug</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item"><a href="<?php echo esc_url( home_url( '/workshops' ) ); ?>" class="nav-link">Workshops</a></li>
                        <li class="nav-item"><a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>" class="nav-link">Gallery</a></li>
                        <li class="nav-item"><a href="<?php echo esc_url( home_url( '/rugcare' ) ); ?>" class="nav-link">Rugcare</a></li>
                        <li class="nav-item"><a href="<?php echo esc_url( home_url( '/faq' ) ); ?>" class="nav-link">FAQ</a></li>
                    </ul>
                </nav>
                <!-- Contact Button -->
                <div class="icon col-md-3 text-end d-flex justify-content-end align-items-center" style="cursor: pointer;">
                    <a class="header-contact-btn rounded-pill px-4 py-2 fw-bold" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">LET'S TALK</a>
                </div>
            </div>

            <!-- ================= MOBILE OFFCANVAS MENU ================= -->
            <div class="offcanvas offcanvas-start offcanvas-mobile" tabindex="-1" id="offcanvasMobile" aria-labelledby="offcanvasLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link nav-offcanvas <?php if (is_front_page()) echo 'active-nav'; ?>"> Home </a>
                            <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="nav-link nav-offcanvas <?php if (is_page('about')) echo 'active-nav'; ?>"> About </a>
                        </li>

                        <!-- Accordion submenu -->
                        <li class="nav-item">
                            <div class="d-flex align-items-center justify-content-between">
                                <a class="nav-link d-flex align-items-center justify-content-between nav-offcanvas" href="<?php echo esc_url(home_url('/commission')); ?>" data-bs-toggle="collapse" data-bs-target="#commissionsSubmenu" aria-expanded="false" aria-controls="commissionsSubmenu">
                                    Commissions <span class="ms-1">▼</span>
                                </a>
                            </div>

                            <div class="collapse" id="commissionsSubmenu">
                                <ul class="list-unstyled ps-3">
                                    <li><a class="nav-link nav-offcanvas <?php if (is_page('commission')) echo 'active-nav'; ?>" href="<?php echo esc_url(home_url('/commission')); ?>">How It Works</a></li>
                                    <li><a class="nav-link nav-offcanvas <?php if (is_page('commission-form')) echo 'active-nav'; ?>" href="<?php echo esc_url(home_url('/commission-form')); ?>">Commission Request</a></li>
                                    <li><a class="nav-link nav-offcanvas <?php if (is_page('custom')) echo 'active-nav'; ?>" href="<?php echo esc_url(home_url('/custom')); ?>">Design Your Rug</a></li>
                                </ul>
                            </div>
                        </li>

                        <a href="<?php echo esc_url( home_url( '/workshops' ) ); ?>" class="nav-link nav-offcanvas <?php if (is_page('workshops')) echo 'active-nav'; ?>"> Workshops </a>
                        <a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>" class="nav-link nav-offcanvas <?php if (is_page('gallery')) echo 'active-nav'; ?>"> Gallery </a>
                        <a href="<?php echo esc_url( home_url( '/rugcare' ) ); ?>" class="nav-link nav-offcanvas <?php if (is_page('rugcare')) echo 'active-nav'; ?>"> Rugcare </a>
                        <a href="<?php echo esc_url( home_url( '/faq' ) ); ?>" class="nav-link nav-offcanvas <?php if (is_page('faq')) echo 'active-nav'; ?>"> FAQ </a>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</div>
<?php wp_footer(); ?>
</body>
</html>
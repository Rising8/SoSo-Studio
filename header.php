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
                    <div class="d-flex d-md-none align-items-center justify-content-between p-2" data-bs-theme="dark">
                        <!-- Toggle Button (Left) -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
                        </button>          
                        <!-- Center Logo (Mobile Only) -->
                        <a href="/" class="mx-auto d-md-none">
                            <img class="header-studio-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="Logo">
                        </a>         
                        <!-- Icons (Right) -->
                        <div class="icon d-flex justify-content-center align-items-center" style="cursor: pointer;">
                            <i id="searchIconMobile" class="fa-solid fa-magnifying-glass fs-4 mx-2"></i>
                        </div>
                    </div>

                    <!-- Desktop Header Row -->
                    <div class="d-none d-md-flex align-items-center justify-content-between">
                        <!-- Logo (Desktop Only) -->
                        <div class="col-md-3">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="d-inline-flex link-body-emphasis text-decoration-none">
                                <img class="header-studio-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="Logo">
                            </a>
                        </div>          
                        <!-- Navigation Menu -->
                        <nav class="navbar navbar-expand-md" data-bs-theme="dark">
                            <ul class="navbar-nav flex-row gap-3">
                                <li class="nav-item"><a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="nav-link">About</a></li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" id="customDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Commissions
                                    </a>
                                    <ul class="dropdown-menu rounded-3" aria-labelledby="customDropdown">
                                        <li><a class="dropdown-item rounded-3" href="<?php echo esc_url( home_url( '/commission' ) ); ?>">Commission request form</a></li>
                                        <li><a class="dropdown-item rounded-3" href="<?php echo esc_url( home_url( '/custom' ) ); ?>">Create your own</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="<?php echo esc_url( home_url( '/workshop' ) ); ?>" class="nav-link">Workshops</a></li>
                                <li class="nav-item"><a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>" class="nav-link">Gallery</a></li>
                                <li class="nav-item"><a href="<?php echo esc_url( home_url( '/rugcare' ) ); ?>" class="nav-link">Rugcare</a></li>
                                <li class="nav-item"><a href="<?php echo esc_url( home_url( '/faq' ) ); ?>" class="nav-link">FAQ</a></li>
                            </ul>
                        </nav>
                        <!-- Icons (Right) -->
                        <div class="icon col-md-3 text-end d-flex justify-content-end align-items-center" style="cursor: pointer;">
                            <a class="header-contact-btn rounded-pill px-4 py-2 fw-bold" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">LET'S TALK</a>
                        </div>
                    </div>
            
                    <!-- Offcanvas Mobile Menu -->
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasLabel">Menu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="<?php echo home_url('/about'); ?>" class="nav-link">About</a></li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" id="customDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Commissions
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="customDropdown">
                                        <li><a class="dropdown-item" href="<?php echo esc_url( home_url( '/commission' ) ); ?>">Commission request form</a></li>
                                        <li><a class="dropdown-item" href="<?php echo esc_url( home_url( '/custom' ) ); ?>">Create your own</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="<?php echo esc_url( home_url( '/workshop' ) ); ?>" class="nav-link">Workshops</a></li>
                                <li class="nav-item"><a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>" class="nav-link">Gallery</a></li>
                                <li class="nav-item"><a href="<?php echo esc_url( home_url( '/faq' ) ); ?>" class="nav-link">FAQ</a></li>
                                <li class="nav-item"><a href="<?php echo esc_url( home_url( '/rugcare' ) ); ?>" class="nav-link">Rugcare</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        </div>    
        <?php wp_footer(); ?>

        <!-- Contact Form Modal -->
        <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="contact-form shadow-lg p-4 rounded bg-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" id="name" name="name" class="form-control" required placeholder="Your full name">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" id="email" name="email" class="form-control" required placeholder="you@example.com">
                            <div class="invalid-feedback">Please enter a valid email address.</div>
                        </div>

                        <div class="mb-3">
                            <label for="reason" class="form-label">Reason for Contact</label>
                            <select id="reason" name="reason" class="form-select">
                                <option>Commission Inquiry</option>
                                <option>Workshop Signup</option>
                                <option>General Question</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea id="message" name="message" rows="5" class="form-control" required placeholder="Share your thoughts..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>




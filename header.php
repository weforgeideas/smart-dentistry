<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- NAVIGATION -->
<nav class="site-nav" id="site-nav">
    <div class="container">
        <div class="nav-inner">

            <a href="<?php echo home_url('/'); ?>" class="nav-logo">
                <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 3C14 3 7 7.5 7 14.5C7 19.5 10.134 24.5 14 24.5C17.866 24.5 21 19.5 21 14.5C21 7.5 14 3 14 3Z" stroke="currentColor" stroke-width="1.5" fill="none"/>
                    <path d="M11 14.5C11 14.5 12.5 17 14 17C15.5 17 17 14.5 17 14.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                Smart Dentistry
            </a>

            <ul class="nav-links">
                <li><a href="#zubar">Zubař</a></li>
                <li><a href="#hygiena">Dentální hygiena</a></li>
                <li><a href="#beleni">Bělení zubů</a></li>
                <li><a href="#cenik">Ceník</a></li>
                <li><a href="#tym">Tým</a></li>
                <li><a href="#kontakt">Kontakt</a></li>
            </ul>

            <div class="nav-cta">
                <a href="tel:+420725345704" class="nav-phone">+420 725 345 704</a>
                <a href="#kontakt" class="btn btn--gold btn--sm">Objednat se</a>
                <div class="nav-hamburger" id="nav-hamburger" aria-label="Menu">
                    <span></span><span></span><span></span>
                </div>
            </div>

        </div>
    </div>
</nav>

<!-- MOBILE MENU -->
<div class="mobile-menu" id="mobile-menu">
    <button class="mobile-close" id="mobile-close">✕</button>
    <a href="#zubar" class="mobile-menu-link">Zubař</a>
    <a href="#hygiena" class="mobile-menu-link">Dentální hygiena</a>
    <a href="#beleni" class="mobile-menu-link">Bělení zubů</a>
    <a href="#cenik" class="mobile-menu-link">Ceník</a>
    <a href="#tym" class="mobile-menu-link">Tým</a>
    <a href="#kontakt" class="mobile-menu-link">Kontakt</a>
    <a href="tel:+420725345704" class="btn btn--gold btn--lg" style="margin-top:1rem; justify-content:center;">Zavolat: +420 725 345 704</a>
</div>

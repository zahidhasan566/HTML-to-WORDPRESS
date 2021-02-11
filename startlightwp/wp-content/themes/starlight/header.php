<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package startlight
 */

?>





<!DOCTYPE html> 

<html <?php language_attributes(); ?>>

    
<!-- Mirrored from leverage.codings.dev/demo-2 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Dec 2020 07:22:41 GMT -->
<head>

        <!-- ==============================================
        Basic Page Needs
        =============================================== -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->

        <title>Leverage - Your next level of website building</title>

        <meta name="description" content="Creative Agency, Portfolio, Corporate, Startup & Technology">
        <meta name="subject" content="Creative Agency, Portfolio, Corporate, Startup & Technology">
        <meta name="author" content="Codings">

        <!-- ==============================================
        Favicons
        =============================================== -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">

        <!-- ==============================================
        Vendor Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href=">

        <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="">

        <!-- ==============================================
        Theme Settings
        =============================================== -->
        <style>
            :root {
                --header-bg-color: #111111;
                --nav-item-color: #f5f5f5;
                --top-nav-item-color: #f5f5f5;
                --hero-bg-color: #000000;

                --section-1-bg-color: #f5f5f5;
                --section-2-bg-color: #eeeeee;
                --section-3-bg-color: #111111;
                --section-4-bg-color: #eeeeee;
                --section-5-bg-color: #111111;
                --section-6-bg-color: #f5f5f5;

                --footer-bg-color: #191919;
            }
        </style>
         <?php wp_head(); ?>
    </head>

    <body  <?php body_class(); ?>>
    <?php wp_body_open();?>

        <!-- Header -->
        <header id="header">

            <!-- Navbar -->
            <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
                <div class="container header">

                    <!-- Navbar Brand-->
                    <a class="navbar-brand" href="index.html">
                        Leverage<i class="leverage-2-0">2.0</i>
                        <!-- 
                            Custom Logo
                            <img src="assets/images/logo.svg" alt="Leverage">
                        -->
                    </a>

                    <!-- Nav holder -->
                    <div class="ml-auto"></div>

                    <!-- Navbar Items -->
                    <ul class="navbar-nav items">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link">Home <i class="icon-arrow-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">Multi-Page <i class="icon-arrow-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="#">Agency <i class="icon-arrow-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a href="demo-1.html" class="nav-link">Demo 1</a></li>
                                                <li class="nav-item"><a href="demo-2.html" class="nav-link">Demo 2</a></li>
                                                <li class="nav-item"><a href="demo-3.html" class="nav-link">Demo 3</a></li>
                                                <li class="nav-item"><a href="demo-4.html" class="nav-link">Demo 4</a></li>
                                                <li class="nav-item"><a href="demo-5.html" class="nav-link">Demo 5</a></li>
                                                <li class="nav-item"><a href="demo-6.html" class="nav-link">Demo 6</a></li>
                                                <li class="nav-item"><a href="demo-7.html" class="nav-link">Demo 7</a></li>
                                                <li class="nav-item"><a href="demo-8.html" class="nav-link">Demo 8</a></li>
                                                <li class="nav-item"><a href="demo-9.html" class="nav-link">Demo 9</a></li>
                                                <li class="nav-item"><a href="demo-10.html" class="nav-link">Demo 10</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="#">Portfolio <i class="icon-arrow-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a href="demo-11.html" class="nav-link">Demo 11</a></li>
                                                <li class="nav-item"><a href="demo-12.html" class="nav-link">Demo 12</a></li>
                                                <li class="nav-item"><a href="demo-13.html" class="nav-link">Demo 13</a></li>
                                                <li class="nav-item"><a href="demo-14.html" class="nav-link">Demo 14</a></li>
                                                <li class="nav-item"><a href="demo-15.html" class="nav-link">Demo 15</a></li>
                                                <li class="nav-item"><a href="demo-16.html" class="nav-link">Demo 16</a></li>
                                                <li class="nav-item"><a href="demo-17.html" class="nav-link">Demo 17</a></li>
                                                <li class="nav-item"><a href="demo-18.html" class="nav-link">Demo 18</a></li>
                                                <li class="nav-item"><a href="demo-19.html" class="nav-link">Demo 19</a></li>
                                                <li class="nav-item"><a href="demo-20.html" class="nav-link">Demo 20</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">One-Page <i class="icon-arrow-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="#">Agency <i class="icon-arrow-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a href="demo-1-one-page.html" class="nav-link">Demo 1</a></li>
                                                <li class="nav-item"><a href="demo-2-one-page.html" class="nav-link">Demo 2</a></li>
                                                <li class="nav-item"><a href="demo-3-one-page.html" class="nav-link">Demo 3</a></li>
                                                <li class="nav-item"><a href="demo-4-one-page.html" class="nav-link">Demo 4</a></li>
                                                <li class="nav-item"><a href="demo-5-one-page.html" class="nav-link">Demo 5</a></li>
                                                <li class="nav-item"><a href="demo-6-one-page.html" class="nav-link">Demo 6</a></li>
                                                <li class="nav-item"><a href="demo-7-one-page.html" class="nav-link">Demo 7</a></li>
                                                <li class="nav-item"><a href="demo-8-one-page.html" class="nav-link">Demo 8</a></li>
                                                <li class="nav-item"><a href="demo-9-one-page.html" class="nav-link">Demo 9</a></li>
                                                <li class="nav-item"><a href="demo-10-one-page.html" class="nav-link">Demo 10</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="#">Portfolio <i class="icon-arrow-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a href="demo-11-one-page.html" class="nav-link">Demo 11</a></li>
                                                <li class="nav-item"><a href="demo-12-one-page.html" class="nav-link">Demo 12</a></li>
                                                <li class="nav-item"><a href="demo-13-one-page.html" class="nav-link">Demo 13</a></li>
                                                <li class="nav-item"><a href="demo-14-one-page.html" class="nav-link">Demo 14</a></li>
                                                <li class="nav-item"><a href="demo-15-one-page.html" class="nav-link">Demo 15</a></li>
                                                <li class="nav-item"><a href="demo-16-one-page.html" class="nav-link">Demo 16</a></li>
                                                <li class="nav-item"><a href="demo-17-one-page.html" class="nav-link">Demo 17</a></li>
                                                <li class="nav-item"><a href="demo-18-one-page.html" class="nav-link">Demo 18</a></li>
                                                <li class="nav-item"><a href="demo-19-one-page.html" class="nav-link">Demo 19</a></li>
                                                <li class="nav-item"><a href="demo-20-one-page.html" class="nav-link">Demo 20</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link">Pages <i class="icon-arrow-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">About<i class="icon-arrow-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="page-about-1.html" class="nav-link">About 1</a></li>
                                        <li class="nav-item"><a href="page-about-2.html" class="nav-link">About 2</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="page-services-1.html" class="nav-link">Services</a></li>
                                <li class="nav-item"><a href="page-single-service-1.html" class="nav-link">Single Service</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">Portfolio<i class="icon-arrow-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="page-portfolio-1.html" class="nav-link">Portfolio 1</a></li>
                                        <li class="nav-item"><a href="page-portfolio-2.html" class="nav-link">Portfolio 2</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">Single Portfolio<i class="icon-arrow-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="page-single-portfolio-1.html" class="nav-link">Single Portfolio 1</a></li>
                                        <li class="nav-item"><a href="page-single-portfolio-2.html" class="nav-link">Single Portfolio 2</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="page-pricing-1.html" class="nav-link">Pricing</a></li>
                                <li class="nav-item"><a href="page-contact-1.html" class="nav-link">Contact</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link">Blog <i class="icon-arrow-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">Blog Posts<i class="icon-arrow-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="page-blog-1.html" class="nav-link">Blog Posts 1</a></li>
                                        <li class="nav-item"><a href="page-blog-2.html" class="nav-link">Blog Posts 2</a></li>
                                        <li class="nav-item"><a href="page-blog-3.html" class="nav-link">Blog Posts 3</a></li>
                                        <li class="nav-item"><a href="page-blog-4.html" class="nav-link">Blog Posts 4</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">Single Post<i class="icon-arrow-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="page-single-post-1.html" class="nav-link">Single Post 1</a></li>
                                        <li class="nav-item"><a href="page-single-post-2.html" class="nav-link">Single Post 2</a></li>
                                        <li class="nav-item"><a href="page-single-post-3.html" class="nav-link">Single Post 3</a></li>
                                        <li class="nav-item"><a href="page-single-post-4.html" class="nav-link">Single Post 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link">Extra <i class="icon-arrow-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="extra-preloader.html" class="nav-link">Preloader</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#">Navbar<i class="icon-arrow-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="extra-navbar-relative.html" class="nav-link">Relative</a></li>
                                        <li class="nav-item"><a href="extra-navbar-flexible.html" class="nav-link">Flexible</a></li>
                                        <li class="nav-item"><a href="extra-navbar-fixed.html" class="nav-link">Fixed</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Navbar Icons -->
                    <ul class="navbar-nav icons">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#search">
                                <i class="icon-magnifier"></i>
                            </a>
                        </li>
                        <li class="nav-item social">
                            <a href="#" class="nav-link"><i class="icon-social-twitter"></i></a>
                        </li>
                        <li class="nav-item social">
                            <a href="#" class="nav-link"><i class="icon-social-instagram"></i></a>
                        </li>
                    </ul>

                    <!-- Navbar Toggle -->
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="icon-menu m-0"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Navbar Action -->
                    <ul class="navbar-nav action">
                        <li class="nav-item ml-3">
                            <a href="buy-at-themeforest/index.html" target="_blank" class="btn ml-lg-auto primary-button"><i class="icon-rocket"></i>BUY NOW</a>
                            <!-- 
                                Suggestion: Replace the purchase button above with a contact button.
                                
                                <a href="#contact" class="smooth-anchor btn ml-lg-auto primary-button"><i class="icon-rocket"></i>CONTACT US</a>
                            -->
                        </li>
                    </ul>
                </div>
            </nav>

        </header>
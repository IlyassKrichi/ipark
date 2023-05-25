<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* template2.html.twig */
class __TwigTemplate_f8cca4546e27444bdd25ba2b65aa175f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t\t<title>Dashboard</title>
\t\t<meta content=\"\" name=\"description\">
\t\t<meta
\t\tcontent=\"\" name=\"keywords\">

\t\t<!-- Favicons -->
\t\t<link href=";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo " rel=\"icon\">
\t\t<link
\t\thref=";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        echo " rel=\"apple-touch-icon\">

\t\t<!-- Google Fonts -->
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\">

\t\t<!-- Vendor CSS Files -->
\t\t<link href=";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
\t\t<link href=";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo " rel=\"stylesheet\">
\t\t<link href=";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
\t\t<link href=";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
\t\t<link href=";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
\t\t<link
\t\thref=";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        echo " rel=\"stylesheet\">

\t\t<!-- Template Main CSS File -->
\t\t<link
\t\thref=";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo " rel=\"stylesheet\">

\t<!-- =======================================================
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Template Name: Logis
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Updated: Mar 10 2023 with Bootstrap v5.2.3
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Author: BootstrapMade.com
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * License: https://bootstrapmade.com/license/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  ======================================================== -->
\t</head>

\t<body>

\t\t<!-- ======= Header ======= -->
\t\t<header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
\t\t\t<div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">

\t\t\t\t<a href=\"index.html\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t<!-- Uncomment the line below if you also wish to use an image logo -->
\t\t\t\t\t<!-- <img src=\"assets/img/logo.png\" alt=\"\"> -->
\t\t\t\t\t\t<h1>
\t\t\t\t\tLogis
\t\t\t\t</h1>
\t\t\t\t</a><i class=\"mobile-nav-toggle mobile-nav-show bi bi-list\"> </i>
\t\t\t\t<i class=\"mobile-nav-toggle mobile-nav-hide d-none bi bi-x\"></i>
\t\t\t\t<nav id=\"navbar\" class=\"navbar\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.html\" class=\"active\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"about.html\">About</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"services.html\">Services</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"pricing.html\">Pricing</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<span>Drop Down</span>
\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down dropdown-indicator\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Drop Down 1</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span>Deep Drop Down</span>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down dropdown-indicator\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Deep Drop Down 1</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Deep Drop Down 2</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Deep Drop Down 3</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Deep Drop Down 4</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Deep Drop Down 5</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Drop Down 2</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Drop Down 3</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Drop Down 4</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"contact.html\">Contact</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"get-a-quote\" href=\"get-a-quote.html\">Get a Quote</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t\t<!-- .navbar -->

\t\t\t</div>
\t\t</header>
\t\t<!-- End Header -->
\t\t<!-- End Header -->

\t\t<main id=\"main\">

\t\t\t<section id=\"hero\" class=\"hero d-flex align-items-center\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row gy-4 d-flex justify-content-center\">
\t\t\t\t\t\t<div class=\"col-lg-7 col-md-8 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center\">
\t\t\t\t\t\t\t<h2 data-aos=\"fade-up\">Your Lightning Fast Delivery Partner</h2>
\t\t\t\t\t\t\t<p data-aos=\"fade-up\" data-aos-delay=\"100\">Facere distinctio molestiae nisi fugit tenetur repellat non praesentium nesciunt optio quis sit odio nemo quisquam. eius quos reiciendis eum vel eum voluptatem eum maiores eaque id optio ullam occaecati odio est possimus vel reprehenderit</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3 order-1 order-lg-1 hero-img\" data-aos=\"zoom-out\">
\t\t\t\t\t\t\t<img src=";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/hero-img.svg"), "html", null, true);
        echo " class=\"img-fluid mb-3 mb-lg-0\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-10 order-1 order-lg-1 d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t<form action=\"#\" class=\"form-search d-flex align-items-stretch mb-3 mt-3\" data-aos=\"fade-up\" data-aos-delay=\"200\">
\t\t\t\t\t\t\t\t<input type=\"date\" name=\"dateReservation\" class=\"form-control\" id=\"datepicker\">
\t\t\t\t\t\t\t\t<select id=\"Vehicule\" class=\"form-control\" id=\"Vehicule\" name=\"Vehicule\" required=\"required\">
\t\t\t\t\t\t\t\t\t<option value=\"\">--- Vehicule ---</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Voiture</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\">Moto</option>
\t\t\t\t\t\t\t\t\t<option value=\"3\">Vélo</option>
\t\t\t\t\t\t\t\t\t<option value=\"4\">Camion</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"adresse\" class=\"form-control\" id=\"adresse\" placeholder=\"Adresse\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t<div class=\"row gy-4\" data-aos=\"fade-up\" data-aos-delay=\"400\">

\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-3 col-6\">
\t\t\t\t\t\t\t\t\t<div class=\"stats-item text-center w-100 h-100\">
\t\t\t\t\t\t\t\t\t\t<span data-purecounter-start=\"0\" data-purecounter-end=\"232\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
\t\t\t\t\t\t\t\t\t\t<p>Clients</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Stats Item -->

\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-6\">
\t\t\t\t\t\t\t\t\t<div class=\"stats-item text-center w-100 h-100\">
\t\t\t\t\t\t\t\t\t\t<span data-purecounter-start=\"0\" data-purecounter-end=\"521\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
\t\t\t\t\t\t\t\t\t\t<p>Projects</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Stats Item -->

\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-6\">
\t\t\t\t\t\t\t\t\t<div class=\"stats-item text-center w-100 h-100\">
\t\t\t\t\t\t\t\t\t\t<span data-purecounter-start=\"0\" data-purecounter-end=\"1453\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
\t\t\t\t\t\t\t\t\t\t<p>Support</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Stats Item -->

\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-6\">
\t\t\t\t\t\t\t\t\t<div class=\"stats-item text-center w-100 h-100\">
\t\t\t\t\t\t\t\t\t\t<span data-purecounter-start=\"0\" data-purecounter-end=\"32\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
\t\t\t\t\t\t\t\t\t\t<p>Workers</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Stats Item -->

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- End Hero Section -->

\t\t\t<section class=\"sample-page\">
\t\t\t\t<div class=\"container\" data-aos=\"fade-up\">
\t\t\t\t\t";
        // line 191
        $this->displayBlock('body', $context, $blocks);
        // line 194
        echo "\t\t\t\t</div>
\t\t\t</section>

\t\t</main>
\t\t<!-- End #main -->

\t\t<!-- ======= Footer ======= -->
\t\t<footer id=\"footer\" class=\"footer\">

\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row gy-4\">
\t\t\t\t\t<div class=\"col-lg-5 col-md-12 footer-info\">
\t\t\t\t\t\t<a href=\"index.html\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t\t\t<span>Logis</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
\t\t\t\t\t\t<div class=\"social-links d-flex mt-4\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"twitter\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-twitter\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"facebook\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"instagram\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"linkedin\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-linkedin\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-2 col-6 footer-links\">
\t\t\t\t\t\t<h4>Useful Links</h4>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">About us</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Services</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Terms of service</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Privacy policy</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-2 col-6 footer-links\">
\t\t\t\t\t\t<h4>Our Services</h4>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">Web Design</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Web Development</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Product Management</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Marketing</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Graphic Design</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-md-12 footer-contact text-center text-md-start\">
\t\t\t\t\t\t<h4>Contact Us</h4>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tA108 Adam Street
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\tNew York, NY 535022<br>
\t\t\t\t\t\t\tUnited States
\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t<strong>Phone:</strong>
\t\t\t\t\t\t\t+1 5589 55488 55<br>
\t\t\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\t\t\tinfo@example.com<br>
\t\t\t\t\t\t</p>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"container mt-4\">
\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t&copy; Copyright
\t\t\t\t\t<strong>
\t\t\t\t\t\t<span>Logis</span>
\t\t\t\t\t</strong>. All Rights Reserved
\t\t\t\t</div>
\t\t\t\t<div class=\"credits\">
\t\t\t\t\t<!-- All the links in the footer should remain intact. -->
\t\t\t\t\t<!-- You can delete the links only if you purchased the pro version. -->
\t\t\t\t\t<!-- Licensing information: https://bootstrapmade.com/license/ -->
\t\t\t\t\t<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
\t\t\t\t\tDesigned by
\t\t\t\t\t\t<a href=\"https://bootstrapmade.com/\"> BootstrapMade</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t</footer>
\t\t<!-- End Footer -->
\t\t<!-- End Footer -->

\t\t<a href=\"#\" class=\"scroll-top d-flex align-items-center justify-content-center\">
\t\t\t<i class=\"bi bi-arrow-up-short\"></i>
\t\t</a>

\t\t<div id=\"preloader\"></div>

\t\t<!-- Vendor JS Files -->
\t\t<script src=";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "></script>
\t\t<script src=";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/purecounter/purecounter_vanilla.js"), "html", null, true);
        echo "></script>
\t\t<script src=";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "></script>
\t\t<script src=";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "></script>
\t\t<script src=";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        echo "></script>
\t\t<script src=";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "></script>
\t\t<script type=\"text/javascript\">
\t\t\tvar dateReservation = document.querySelector('[name=\"dateReservation\"]');
dateReservation.min = new Date().toISOString().split(\"T\")[0];
dateReservation.valueAsDate = new Date();
\t\t</script>

\t\t<!-- Template Main JS File -->
\t\t<script src=";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "></script>

\t</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 191
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 192
        echo "\t\t\t\t\t\tTemplate Body
\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "template2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 192,  418 => 191,  402 => 308,  391 => 300,  387 => 299,  383 => 298,  379 => 297,  375 => 296,  371 => 295,  268 => 194,  266 => 191,  204 => 132,  104 => 35,  97 => 31,  92 => 29,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  64 => 16,  59 => 14,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t\t<title>Dashboard</title>
\t\t<meta content=\"\" name=\"description\">
\t\t<meta
\t\tcontent=\"\" name=\"keywords\">

\t\t<!-- Favicons -->
\t\t<link href={{ asset('assets/img/favicon.png') }} rel=\"icon\">
\t\t<link
\t\thref={{ asset('assets/img/apple-touch-icon.png') }} rel=\"apple-touch-icon\">

\t\t<!-- Google Fonts -->
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\">

\t\t<!-- Vendor CSS Files -->
\t\t<link href={{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} rel=\"stylesheet\">
\t\t<link href={{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }} rel=\"stylesheet\">
\t\t<link href={{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} rel=\"stylesheet\">
\t\t<link href={{ asset('assets/vendor/glightbox/css/glightbox.min.css') }} rel=\"stylesheet\">
\t\t<link href={{ asset('assets/vendor/swiper/swiper-bundle.min.css') }} rel=\"stylesheet\">
\t\t<link
\t\thref={{ asset('assets/vendor/aos/aos.css') }} rel=\"stylesheet\">

\t\t<!-- Template Main CSS File -->
\t\t<link
\t\thref={{ asset('assets/css/main.css') }} rel=\"stylesheet\">

\t<!-- =======================================================
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Template Name: Logis
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Updated: Mar 10 2023 with Bootstrap v5.2.3
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * Author: BootstrapMade.com
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  * License: https://bootstrapmade.com/license/
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  ======================================================== -->
\t</head>

\t<body>

\t\t<!-- ======= Header ======= -->
\t\t<header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
\t\t\t<div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">

\t\t\t\t<a href=\"index.html\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t<!-- Uncomment the line below if you also wish to use an image logo -->
\t\t\t\t\t<!-- <img src=\"assets/img/logo.png\" alt=\"\"> -->
\t\t\t\t\t\t<h1>
\t\t\t\t\tLogis
\t\t\t\t</h1>
\t\t\t\t</a><i class=\"mobile-nav-toggle mobile-nav-show bi bi-list\"> </i>
\t\t\t\t<i class=\"mobile-nav-toggle mobile-nav-hide d-none bi bi-x\"></i>
\t\t\t\t<nav id=\"navbar\" class=\"navbar\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.html\" class=\"active\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"about.html\">About</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"services.html\">Services</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"pricing.html\">Pricing</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<span>Drop Down</span>
\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down dropdown-indicator\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Drop Down 1</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span>Deep Drop Down</span>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down dropdown-indicator\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Deep Drop Down 1</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Deep Drop Down 2</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Deep Drop Down 3</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Deep Drop Down 4</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Deep Drop Down 5</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Drop Down 2</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Drop Down 3</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Drop Down 4</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"contact.html\">Contact</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"get-a-quote\" href=\"get-a-quote.html\">Get a Quote</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t\t<!-- .navbar -->

\t\t\t</div>
\t\t</header>
\t\t<!-- End Header -->
\t\t<!-- End Header -->

\t\t<main id=\"main\">

\t\t\t<section id=\"hero\" class=\"hero d-flex align-items-center\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row gy-4 d-flex justify-content-center\">
\t\t\t\t\t\t<div class=\"col-lg-7 col-md-8 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center\">
\t\t\t\t\t\t\t<h2 data-aos=\"fade-up\">Your Lightning Fast Delivery Partner</h2>
\t\t\t\t\t\t\t<p data-aos=\"fade-up\" data-aos-delay=\"100\">Facere distinctio molestiae nisi fugit tenetur repellat non praesentium nesciunt optio quis sit odio nemo quisquam. eius quos reiciendis eum vel eum voluptatem eum maiores eaque id optio ullam occaecati odio est possimus vel reprehenderit</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3 order-1 order-lg-1 hero-img\" data-aos=\"zoom-out\">
\t\t\t\t\t\t\t<img src={{ asset('assets/img/hero-img.svg') }} class=\"img-fluid mb-3 mb-lg-0\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-10 order-1 order-lg-1 d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t<form action=\"#\" class=\"form-search d-flex align-items-stretch mb-3 mt-3\" data-aos=\"fade-up\" data-aos-delay=\"200\">
\t\t\t\t\t\t\t\t<input type=\"date\" name=\"dateReservation\" class=\"form-control\" id=\"datepicker\">
\t\t\t\t\t\t\t\t<select id=\"Vehicule\" class=\"form-control\" id=\"Vehicule\" name=\"Vehicule\" required=\"required\">
\t\t\t\t\t\t\t\t\t<option value=\"\">--- Vehicule ---</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Voiture</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\">Moto</option>
\t\t\t\t\t\t\t\t\t<option value=\"3\">Vélo</option>
\t\t\t\t\t\t\t\t\t<option value=\"4\">Camion</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"adresse\" class=\"form-control\" id=\"adresse\" placeholder=\"Adresse\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t<div class=\"row gy-4\" data-aos=\"fade-up\" data-aos-delay=\"400\">

\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-3 col-6\">
\t\t\t\t\t\t\t\t\t<div class=\"stats-item text-center w-100 h-100\">
\t\t\t\t\t\t\t\t\t\t<span data-purecounter-start=\"0\" data-purecounter-end=\"232\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
\t\t\t\t\t\t\t\t\t\t<p>Clients</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Stats Item -->

\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-6\">
\t\t\t\t\t\t\t\t\t<div class=\"stats-item text-center w-100 h-100\">
\t\t\t\t\t\t\t\t\t\t<span data-purecounter-start=\"0\" data-purecounter-end=\"521\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
\t\t\t\t\t\t\t\t\t\t<p>Projects</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Stats Item -->

\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-6\">
\t\t\t\t\t\t\t\t\t<div class=\"stats-item text-center w-100 h-100\">
\t\t\t\t\t\t\t\t\t\t<span data-purecounter-start=\"0\" data-purecounter-end=\"1453\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
\t\t\t\t\t\t\t\t\t\t<p>Support</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Stats Item -->

\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-6\">
\t\t\t\t\t\t\t\t\t<div class=\"stats-item text-center w-100 h-100\">
\t\t\t\t\t\t\t\t\t\t<span data-purecounter-start=\"0\" data-purecounter-end=\"32\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
\t\t\t\t\t\t\t\t\t\t<p>Workers</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Stats Item -->

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- End Hero Section -->

\t\t\t<section class=\"sample-page\">
\t\t\t\t<div class=\"container\" data-aos=\"fade-up\">
\t\t\t\t\t{% block body %}
\t\t\t\t\t\tTemplate Body
\t\t\t\t\t{% endblock %}
\t\t\t\t</div>
\t\t\t</section>

\t\t</main>
\t\t<!-- End #main -->

\t\t<!-- ======= Footer ======= -->
\t\t<footer id=\"footer\" class=\"footer\">

\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row gy-4\">
\t\t\t\t\t<div class=\"col-lg-5 col-md-12 footer-info\">
\t\t\t\t\t\t<a href=\"index.html\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t\t\t<span>Logis</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
\t\t\t\t\t\t<div class=\"social-links d-flex mt-4\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"twitter\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-twitter\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"facebook\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"instagram\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"linkedin\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-linkedin\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-2 col-6 footer-links\">
\t\t\t\t\t\t<h4>Useful Links</h4>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">About us</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Services</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Terms of service</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Privacy policy</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-2 col-6 footer-links\">
\t\t\t\t\t\t<h4>Our Services</h4>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">Web Design</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Web Development</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Product Management</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Marketing</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Graphic Design</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-md-12 footer-contact text-center text-md-start\">
\t\t\t\t\t\t<h4>Contact Us</h4>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tA108 Adam Street
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\tNew York, NY 535022<br>
\t\t\t\t\t\t\tUnited States
\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t<strong>Phone:</strong>
\t\t\t\t\t\t\t+1 5589 55488 55<br>
\t\t\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\t\t\tinfo@example.com<br>
\t\t\t\t\t\t</p>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"container mt-4\">
\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t&copy; Copyright
\t\t\t\t\t<strong>
\t\t\t\t\t\t<span>Logis</span>
\t\t\t\t\t</strong>. All Rights Reserved
\t\t\t\t</div>
\t\t\t\t<div class=\"credits\">
\t\t\t\t\t<!-- All the links in the footer should remain intact. -->
\t\t\t\t\t<!-- You can delete the links only if you purchased the pro version. -->
\t\t\t\t\t<!-- Licensing information: https://bootstrapmade.com/license/ -->
\t\t\t\t\t<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
\t\t\t\t\tDesigned by
\t\t\t\t\t\t<a href=\"https://bootstrapmade.com/\"> BootstrapMade</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t</footer>
\t\t<!-- End Footer -->
\t\t<!-- End Footer -->

\t\t<a href=\"#\" class=\"scroll-top d-flex align-items-center justify-content-center\">
\t\t\t<i class=\"bi bi-arrow-up-short\"></i>
\t\t</a>

\t\t<div id=\"preloader\"></div>

\t\t<!-- Vendor JS Files -->
\t\t<script src={{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>
\t\t<script src={{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}></script>
\t\t<script src={{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}></script>
\t\t<script src={{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}></script>
\t\t<script src={{ asset('assets/vendor/aos/aos.js') }}></script>
\t\t<script src={{ asset('assets/vendor/php-email-form/validate.js') }}></script>
\t\t<script type=\"text/javascript\">
\t\t\tvar dateReservation = document.querySelector('[name=\"dateReservation\"]');
dateReservation.min = new Date().toISOString().split(\"T\")[0];
dateReservation.valueAsDate = new Date();
\t\t</script>

\t\t<!-- Template Main JS File -->
\t\t<script src={{ asset('assets/js/main.js') }}></script>

\t</body>

</html>
", "template2.html.twig", "C:\\xampp\\htdocs\\ipark\\templates\\template2.html.twig");
    }
}

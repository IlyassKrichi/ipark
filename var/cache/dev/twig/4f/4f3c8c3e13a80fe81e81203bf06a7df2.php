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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
\t\t<link href=";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
\t\t<link
\t\thref=";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        echo " rel=\"stylesheet\">

\t\t<!-- Template Main CSS File -->
\t\t<link href=";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo " rel=\"stylesheet\">
\t\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBn5ha5UvXZ3Fo5bb22RV59PuEE38TAt88&libraries=places\"></script>
\t\t<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
\t</head>

\t<body>

\t\t<!-- ======= Header ======= -->
\t\t<header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
\t\t\t<div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">

\t\t\t\t<a href=";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new_step1");
        echo " class=\"logo d-flex align-items-center\">
\t\t\t\t\t<!-- Uncomment the line below if you also wish to use an image logo -->
\t\t\t\t\t<!-- <img src=\"assets/img/logo.png\" alt=\"\"> -->
\t\t\t\t\t\t<h1>
\t\t\t\t\tiPark
\t\t\t\t</h1>
\t\t\t\t</a><i class=\"mobile-nav-toggle mobile-nav-show bi bi-list\"> </i>
\t\t\t\t<i class=\"mobile-nav-toggle mobile-nav-hide d-none bi bi-x\"></i>
\t\t\t\t<nav id=\"navbar\" class=\"navbar\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new_step1");
        echo " class=\"active\">Home</a>
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
\t\t\t\t\t\t<a href=\"contact.html\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 70
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70)) {
            // line 71
            echo "\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<span>User</span>
\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down dropdown-indicator\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Profile</a></li>
\t\t\t\t\t\t\t\t<li><a href=";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo ">Register</a></li>
\t\t\t\t\t\t\t\t<li><a href=";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo ">Logout</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t";
        } else {
            // line 84
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary rounded-1\" style=\"margin-right: 10px; margin-left: 20px; padding-left: 15px; padding-right: 15px; padding-top: 7px; padding-bottom: 7px;\" data-toggle=\"modal\" data-target=\"#modalLoginForm\">Sign in</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary rounded-1\" style=\"padding-left: 15px; padding-right: 15px; padding-top: 7px; padding-bottom: 7px;\" onclick=\"window.location.href='";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "';\">Register</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 91
        echo "\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<!-- .navbar -->

\t\t</div>
\t</header>
\t<!-- End Header -->
\t<!-- End Header -->

\t<main id=\"main\">

\t\t";
        // line 102
        $this->displayBlock('body', $context, $blocks);
        // line 105
        echo "\t\t<!-- End Hero Section -->
\t\t";
        // line 106
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 106, $this->source); })())) {
            // line 107
            echo "\t\t\t\t<div class=\"modal fade\" id=\"modalerror\" tabindex=\"-1\" role=\"dialog\">
\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 109, $this->source); })()), "messageKey", [], "any", false, false, false, 109), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 109, $this->source); })()), "messageData", [], "any", false, false, false, 109), "security"), "html", null, true);
            echo "</div> 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t";
        }
        // line 113
        echo "\t\t<div class=\"modal fade\" id=\"modalLoginForm\" tabindex=\"-1\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t<h4 class=\"modal-title w-100 font-weight-bold\">Sign in</h4>
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body mx-3\">
\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t<label for=\"inputEmail\">Email</label>
\t\t\t\t\t\t\t<input type=\"email\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 124, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control my-1\" autocomplete=\"email\" style=\"padding-top: 12px; padding-bottom: 12px;\" required autofocus>
\t\t\t\t\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control my-1\" autocomplete=\"current-password\" style=\"padding-top: 12px; padding-bottom: 12px;\" required>

\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

\t\t\t\t\t\t\t<div class=\"form-check my-2\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" id=\"flexCheckDefault\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"flexCheckDefault\">
\t\t\t\t\t\t\t\t\tRemember me
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<a style=\"margin-left: 163px\" href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Forgot password?</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-footer d-flex justify-content-center\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-lg btn-primary\" type=\"submit\">
\t\t\t\t\t\t\t\t\tSign in
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</main>
\t\t<!-- End #main -->

\t\t<!-- ======= Footer ======= -->
\t\t<footer id=\"footer\" class=\"footer\">

\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row gy-4\">
\t\t\t\t\t<div class=\"col-lg-5 col-md-12 footer-info\">
\t\t\t\t\t\t<a href=\"index.html\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t\t\t<span>iPark</span>
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
\t\t\t\t\t\t\t<strong>Phone:</strong>
\t\t\t\t\t\t\t+1 5589 55488 55<br>
\t\t\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\t\t\tcontact.ipark.info@gmail.com<br>
\t\t\t\t\t\t</p>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"container mt-4\">
\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t&copy; 2023, Copyright
\t\t\t\t\t<strong>
\t\t\t\t\t\t<span>iPark</span>
\t\t\t\t\t</strong>. All Rights Reserved
\t\t\t\t</div>
\t\t\t\t<div class=\"credits\"><!-- All the links in the footer should remain intact. -->
\t\t\t\t\t<!-- You can delete the links only if you purchased the pro version. -->
\t\t\t\t\t<!-- Licensing information: https://bootstrapmade.com/license/ -->
\t\t\t\t\t<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
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
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "></script>
\t\t<script src=";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/purecounter/purecounter_vanilla.js"), "html", null, true);
        echo "></script>
\t\t<script src=";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "></script>
\t\t<script src=";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "></script>
\t\t<script src=";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        echo "></script>
\t\t<script src=";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "></script>
\t\t<script src=";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "></script>
\t\t<script src=";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/sss.js"), "html", null, true);
        echo "></script>
\t\t<script>
\t\t\t\$(document).ready(function(){
\t\t\t\$(\"#modalerror\").modal('show');
\t\t\t});
\t\t</script>
\t</body>
</body></html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 102
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 103
        echo "\t\t\tTemplate Body
\t\t";
        
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
        return array (  402 => 103,  392 => 102,  373 => 243,  369 => 242,  365 => 241,  361 => 240,  357 => 239,  353 => 238,  349 => 237,  345 => 236,  241 => 135,  231 => 128,  224 => 124,  211 => 113,  204 => 109,  200 => 107,  198 => 106,  195 => 105,  193 => 102,  180 => 91,  174 => 88,  168 => 84,  160 => 79,  156 => 78,  147 => 71,  145 => 70,  129 => 57,  115 => 46,  99 => 33,  93 => 30,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  64 => 16,  59 => 14,  44 => 1,);
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
\t\t<link href={{ asset('assets/vendor/glightbox/css/glightbox.min.css') }} rel=\"stylesheet\">
\t\t<link href={{ asset('assets/vendor/swiper/swiper-bundle.min.css') }} rel=\"stylesheet\">
\t\t<link
\t\thref={{ asset('assets/vendor/aos/aos.css') }} rel=\"stylesheet\">

\t\t<!-- Template Main CSS File -->
\t\t<link href={{ asset('assets/css/main.css') }} rel=\"stylesheet\">
\t\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBn5ha5UvXZ3Fo5bb22RV59PuEE38TAt88&libraries=places\"></script>
\t\t<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
\t</head>

\t<body>

\t\t<!-- ======= Header ======= -->
\t\t<header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
\t\t\t<div class=\"container-fluid container-xl d-flex align-items-center justify-content-between\">

\t\t\t\t<a href={{ path(\"app_reservation_new_step1\") }} class=\"logo d-flex align-items-center\">
\t\t\t\t\t<!-- Uncomment the line below if you also wish to use an image logo -->
\t\t\t\t\t<!-- <img src=\"assets/img/logo.png\" alt=\"\"> -->
\t\t\t\t\t\t<h1>
\t\t\t\t\tiPark
\t\t\t\t</h1>
\t\t\t\t</a><i class=\"mobile-nav-toggle mobile-nav-show bi bi-list\"> </i>
\t\t\t\t<i class=\"mobile-nav-toggle mobile-nav-hide d-none bi bi-x\"></i>
\t\t\t\t<nav id=\"navbar\" class=\"navbar\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href={{ path(\"app_reservation_new_step1\") }} class=\"active\">Home</a>
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
\t\t\t\t\t\t<a href=\"contact.html\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<span>User</span>
\t\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down dropdown-indicator\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Profile</a></li>
\t\t\t\t\t\t\t\t<li><a href={{ path('app_register') }}>Register</a></li>
\t\t\t\t\t\t\t\t<li><a href={{ path('app_logout') }}>Logout</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary rounded-1\" style=\"margin-right: 10px; margin-left: 20px; padding-left: 15px; padding-right: 15px; padding-top: 7px; padding-bottom: 7px;\" data-toggle=\"modal\" data-target=\"#modalLoginForm\">Sign in</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary rounded-1\" style=\"padding-left: 15px; padding-right: 15px; padding-top: 7px; padding-bottom: 7px;\" onclick=\"window.location.href='{{ path('app_register') }}';\">Register</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<!-- .navbar -->

\t\t</div>
\t</header>
\t<!-- End Header -->
\t<!-- End Header -->

\t<main id=\"main\">

\t\t{% block body %}
\t\t\tTemplate Body
\t\t{% endblock %}
\t\t<!-- End Hero Section -->
\t\t{% if error %}
\t\t\t\t<div class=\"modal fade\" id=\"modalerror\" tabindex=\"-1\" role=\"dialog\">
\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div> 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t{% endif %}
\t\t<div class=\"modal fade\" id=\"modalLoginForm\" tabindex=\"-1\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t<h4 class=\"modal-title w-100 font-weight-bold\">Sign in</h4>
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body mx-3\">
\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t<label for=\"inputEmail\">Email</label>
\t\t\t\t\t\t\t<input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control my-1\" autocomplete=\"email\" style=\"padding-top: 12px; padding-bottom: 12px;\" required autofocus>
\t\t\t\t\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control my-1\" autocomplete=\"current-password\" style=\"padding-top: 12px; padding-bottom: 12px;\" required>

\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

\t\t\t\t\t\t\t<div class=\"form-check my-2\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" id=\"flexCheckDefault\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"flexCheckDefault\">
\t\t\t\t\t\t\t\t\tRemember me
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<a style=\"margin-left: 163px\" href=\"{{ path('app_forgot_password_request') }}\">Forgot password?</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-footer d-flex justify-content-center\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-lg btn-primary\" type=\"submit\">
\t\t\t\t\t\t\t\t\tSign in
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</main>
\t\t<!-- End #main -->

\t\t<!-- ======= Footer ======= -->
\t\t<footer id=\"footer\" class=\"footer\">

\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row gy-4\">
\t\t\t\t\t<div class=\"col-lg-5 col-md-12 footer-info\">
\t\t\t\t\t\t<a href=\"index.html\" class=\"logo d-flex align-items-center\">
\t\t\t\t\t\t\t<span>iPark</span>
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
\t\t\t\t\t\t\t<strong>Phone:</strong>
\t\t\t\t\t\t\t+1 5589 55488 55<br>
\t\t\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\t\t\tcontact.ipark.info@gmail.com<br>
\t\t\t\t\t\t</p>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"container mt-4\">
\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t&copy; 2023, Copyright
\t\t\t\t\t<strong>
\t\t\t\t\t\t<span>iPark</span>
\t\t\t\t\t</strong>. All Rights Reserved
\t\t\t\t</div>
\t\t\t\t<div class=\"credits\"><!-- All the links in the footer should remain intact. -->
\t\t\t\t\t<!-- You can delete the links only if you purchased the pro version. -->
\t\t\t\t\t<!-- Licensing information: https://bootstrapmade.com/license/ -->
\t\t\t\t\t<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
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
\t\t<script src={{ asset('assets/js/main.js') }}></script>
\t\t<script src={{ asset('assets/js/sss.js') }}></script>
\t\t<script>
\t\t\t\$(document).ready(function(){
\t\t\t\$(\"#modalerror\").modal('show');
\t\t\t});
\t\t</script>
\t</body>
</body></html>
", "template2.html.twig", "D:\\Personal files\\Documents\\ENSIAS IDSIT\\Frameworks Web\\Workspace\\ipark\\templates\\template2.html.twig");
    }
}

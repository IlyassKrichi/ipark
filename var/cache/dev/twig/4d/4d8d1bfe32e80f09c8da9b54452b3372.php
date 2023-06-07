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

/* template3.html.twig */
class __TwigTemplate_accac2d1398ec2606a23e52802ad1ca5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template3.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template3.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
\t\t<title>
\t\t\t";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "\t\t</title>

\t\t<meta content=\"\" name=\"description\">
\t\t<meta
\t\tcontent=\"\" name=\"keywords\">

\t\t<!-- Favicons -->
\t\t<link href=";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon-32x32.png"), "html", null, true);
        echo " rel=\"icon\">
\t\t<link
\t\thref=";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        echo " rel=\"apple-touch-icon\">

\t\t<!-- Google Fonts -->
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\">

\t\t<!-- Vendor CSS Files -->
\t\t<link href=";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
\t\t<link href=";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo " rel=\"stylesheet\">
\t\t<link href=";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
\t\t<link href=";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo " rel=\"stylesheet\">
\t\t<link
\t\thref=";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        echo " rel=\"stylesheet\">

\t\t<!-- Template Main CSS File -->
\t\t<link href=";
        // line 37
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
\t\t\t\t\t\t<h1>
\t\t\t\t\tiPark
\t\t\t\t</h1>
\t\t\t</div>
\t\t</header>
\t\t<!-- End Header -->
\t\t<!-- End Header -->

\t\t<main id=\"main\">

\t\t\t";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "\t\t\t<!-- End Hero Section -->
\t\t</main>
\t\t<!-- End #main -->

\t\t<!-- ======= Footer ======= -->
\t\t<footer id=\"footer\" class=\"footer\">

\t\t\t
\t\t</footer>
\t\t<!-- End Footer -->
\t\t<!-- End Footer -->

\t\t<a href=\"#\" class=\"scroll-top d-flex align-items-center justify-content-center\">
\t\t\t<i class=\"bi bi-arrow-up-short\"></i>
\t\t</a>

\t\t<div id=\"preloader\"></div>

\t\t<!-- Vendor JS Files -->
\t\t<script src=";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "></script>
\t\t<script src=";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/purecounter/purecounter_vanilla.js"), "html", null, true);
        echo "></script>
\t\t<script src=";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "></script>
\t\t<script src=";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "></script>
\t\t<script src=";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        echo "></script>
\t\t<script src=";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "></script>
\t\t<script src=";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "></script>
\t\t<script src=";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/sss.js"), "html", null, true);
        echo "></script>
\t</body>
</html></body></html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "\t\t\t\tTitle
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 59
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "\t\t\t\tTemplate Body
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "template3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 60,  216 => 59,  205 => 9,  195 => 8,  181 => 88,  177 => 87,  173 => 86,  169 => 85,  165 => 84,  161 => 83,  157 => 82,  153 => 81,  132 => 62,  130 => 59,  105 => 37,  99 => 34,  94 => 32,  90 => 31,  86 => 30,  82 => 29,  70 => 20,  65 => 18,  56 => 11,  54 => 8,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
\t\t<title>
\t\t\t{% block title %}
\t\t\t\tTitle
\t\t\t{% endblock %}
\t\t</title>

\t\t<meta content=\"\" name=\"description\">
\t\t<meta
\t\tcontent=\"\" name=\"keywords\">

\t\t<!-- Favicons -->
\t\t<link href={{ asset('assets/img/favicon-32x32.png') }} rel=\"icon\">
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
\t\t\t\t\t\t<h1>
\t\t\t\t\tiPark
\t\t\t\t</h1>
\t\t\t</div>
\t\t</header>
\t\t<!-- End Header -->
\t\t<!-- End Header -->

\t\t<main id=\"main\">

\t\t\t{% block body %}
\t\t\t\tTemplate Body
\t\t\t{% endblock %}
\t\t\t<!-- End Hero Section -->
\t\t</main>
\t\t<!-- End #main -->

\t\t<!-- ======= Footer ======= -->
\t\t<footer id=\"footer\" class=\"footer\">

\t\t\t
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
\t</body>
</html></body></html>
", "template3.html.twig", "D:\\Personal files\\Documents\\ENSIAS IDSIT\\Frameworks Web\\Workspace\\ipark\\templates\\template3.html.twig");
    }
}

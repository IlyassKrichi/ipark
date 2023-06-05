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

/* template.html.twig */
class __TwigTemplate_afc7fb89c2c42e7f6e74d53babef90df extends Template
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
            'PageTitle' => [$this, 'block_PageTitle'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
\t\t<meta name=\"description\" content=\"\"/>
\t\t<meta name=\"author\" content=\"\"/>
\t\t<title>
\t\t\t";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "\t\t</title>
\t\t<link href=";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo " rel=\"icon\">
\t\t<link
\t\thref=";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        echo " rel=\"apple-touch-icon\">
\t\t<link href=";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo " rel=\"stylesheet\"/>
\t\t<script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
\t</head>
\t<body>
\t\t<nav
\t\t\tclass=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
\t\t\t<!-- Navbar Brand-->
\t\t\t<a class=\"navbar-brand ps-3\" href=";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo ">iPark - Admin</a>
\t\t\t<!-- Sidebar Toggle-->
\t\t\t<button class=\"btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0\" id=\"sidebarToggle\" href=\"#!\">
\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t</button>
\t\t\t<!-- Navbar Search-->
\t\t\t<form class=\"d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Search for...\" aria-label=\"Search for...\" aria-describedby=\"btnNavbarSearch\"/>
\t\t\t\t\t<button class=\"btn btn-primary\" id=\"btnNavbarSearch\" type=\"button\">
\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<!-- Navbar-->
\t\t\t<ul class=\"navbar-nav ms-auto ms-md-0 me-3 me-lg-4\">
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t<i class=\"fas fa-user fa-fw\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo ">Register</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo ">Login</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo ">Logout</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
\t\t<div id=\"layoutSidenav\">
\t\t\t<div id=\"layoutSidenav_nav\">
\t\t\t\t<nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
\t\t\t\t\t<div class=\"sb-sidenav-menu\">
\t\t\t\t\t\t<div class=\"nav\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo ">
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tDashboard - Admin
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"nav-link\" href=";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new_step1");
        echo ">
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tDashboard - User
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"nav-link\" href=";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
        echo ">
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tClients
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"nav-link\" href=";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        echo ">
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tReservations
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"nav-link\" href=";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parking_index");
        echo ">
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tParkings
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"nav-link\" href=";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paiement_index");
        echo ">
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tPayments
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"nav-link\" href=";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_place_index");
        echo ">
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tPlaces
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"nav-link\" href=";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entree_sortie_index");
        echo ">
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tCheck in - out
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapsePages\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#sidenavAccordion\">
\t\t\t\t\t\t\t\t<nav class=\"sb-sidenav-menu-nested nav accordion\" id=\"sidenavAccordionPages\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseAuth\" aria-expanded=\"false\" aria-controls=\"pagesCollapseAuth\">
\t\t\t\t\t\t\t\t\t\tAuthentication
\t\t\t\t\t\t\t\t\t\t<div class=\"sb-sidenav-collapse-arrow\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-down\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"pagesCollapseAuth\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordionPages\">
\t\t\t\t\t\t\t\t\t\t<nav class=\"sb-sidenav-menu-nested nav\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"login.html\">Login</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"register.html\">Register</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"password.html\">Forgot Password</a>
\t\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t\t<div id=\"layoutSidenav_content\">
\t\t\t\t<main>
\t\t\t\t\t<div class=\"container-fluid px-4\">
\t\t\t\t\t\t<h1 class=\"mt-4\">
\t\t\t\t\t\t\t";
        // line 133
        $this->displayBlock('PageTitle', $context, $blocks);
        // line 136
        echo "\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t";
        // line 139
        $this->displayBlock('body', $context, $blocks);
        // line 142
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"height: 100vh\"></div>
\t\t\t\t</main>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
\t\t<script src=";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "></script>
\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 11
        echo "\t\t\t\tTitle
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 133
    public function block_PageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitle"));

        // line 134
        echo "\t\t\t\t\t\t\t\tTemplate
\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 139
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 140
        echo "\t\t\t\t\t\t\t\t\tTemplate Body
\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 140,  301 => 139,  290 => 134,  280 => 133,  269 => 11,  259 => 10,  245 => 150,  235 => 142,  233 => 139,  228 => 136,  226 => 133,  195 => 105,  186 => 99,  177 => 93,  168 => 87,  159 => 81,  150 => 75,  141 => 69,  132 => 63,  118 => 52,  112 => 49,  106 => 46,  81 => 24,  71 => 17,  67 => 16,  62 => 14,  59 => 13,  57 => 10,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
\t\t<meta name=\"description\" content=\"\"/>
\t\t<meta name=\"author\" content=\"\"/>
\t\t<title>
\t\t\t{% block title %}
\t\t\t\tTitle
\t\t\t{% endblock %}
\t\t</title>
\t\t<link href={{ asset('assets/img/favicon.png') }} rel=\"icon\">
\t\t<link
\t\thref={{ asset('assets/img/apple-touch-icon.png') }} rel=\"apple-touch-icon\">
\t\t<link href={{ asset('assets/css/styles.css') }} rel=\"stylesheet\"/>
\t\t<script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
\t</head>
\t<body>
\t\t<nav
\t\t\tclass=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
\t\t\t<!-- Navbar Brand-->
\t\t\t<a class=\"navbar-brand ps-3\" href={{ path('app_admin') }}>iPark - Admin</a>
\t\t\t<!-- Sidebar Toggle-->
\t\t\t<button class=\"btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0\" id=\"sidebarToggle\" href=\"#!\">
\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t</button>
\t\t\t<!-- Navbar Search-->
\t\t\t<form class=\"d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Search for...\" aria-label=\"Search for...\" aria-describedby=\"btnNavbarSearch\"/>
\t\t\t\t\t<button class=\"btn btn-primary\" id=\"btnNavbarSearch\" type=\"button\">
\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<!-- Navbar-->
\t\t\t<ul class=\"navbar-nav ms-auto ms-md-0 me-3 me-lg-4\">
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t<i class=\"fas fa-user fa-fw\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href={{ path('app_register') }}>Register</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href={{ path('app_login') }}>Login</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href={{ path('app_logout') }}>Logout</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
\t\t<div id=\"layoutSidenav\">
\t\t\t<div id=\"layoutSidenav_nav\">
\t\t\t\t<nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
\t\t\t\t\t<div class=\"sb-sidenav-menu\">
\t\t\t\t\t\t<div class=\"nav\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href={{ path('app_admin') }}>
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tDashboard - Admin
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"nav-link\" href={{ path('app_reservation_new_step1') }}>
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tDashboard - User
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"nav-link\" href={{ path('app_client_index') }}>
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tClients
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"nav-link\" href={{ path('app_reservation_index') }}>
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tReservations
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"nav-link\" href={{ path('app_parking_index') }}>
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tParkings
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"nav-link\" href={{ path('app_paiement_index') }}>
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tPayments
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"nav-link\" href={{ path('app_place_index') }}>
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tPlaces
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"nav-link\" href={{ path('app_entree_sortie_index') }}>
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tCheck in - out
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapsePages\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#sidenavAccordion\">
\t\t\t\t\t\t\t\t<nav class=\"sb-sidenav-menu-nested nav accordion\" id=\"sidenavAccordionPages\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseAuth\" aria-expanded=\"false\" aria-controls=\"pagesCollapseAuth\">
\t\t\t\t\t\t\t\t\t\tAuthentication
\t\t\t\t\t\t\t\t\t\t<div class=\"sb-sidenav-collapse-arrow\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-down\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"pagesCollapseAuth\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordionPages\">
\t\t\t\t\t\t\t\t\t\t<nav class=\"sb-sidenav-menu-nested nav\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"login.html\">Login</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"register.html\">Register</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"password.html\">Forgot Password</a>
\t\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t\t<div id=\"layoutSidenav_content\">
\t\t\t\t<main>
\t\t\t\t\t<div class=\"container-fluid px-4\">
\t\t\t\t\t\t<h1 class=\"mt-4\">
\t\t\t\t\t\t\t{% block PageTitle %}
\t\t\t\t\t\t\t\tTemplate
\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t{% block body %}
\t\t\t\t\t\t\t\t\tTemplate Body
\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"height: 100vh\"></div>
\t\t\t\t</main>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
\t\t<script src={{ asset('assets/js/scripts.js') }}></script>
\t</body>
</html>
", "template.html.twig", "D:\\Personal files\\Documents\\ENSIAS IDSIT\\Frameworks Web\\Workspace\\ipark\\templates\\template.html.twig");
    }
}

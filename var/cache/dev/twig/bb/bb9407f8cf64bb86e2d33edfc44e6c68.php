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
\t\t";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "\t\t<link href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo " rel=\"stylesheet\"/>
\t\t<script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
\t</head>
\t<body>
\t\t<nav
\t\t\tclass=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
\t\t\t<!-- Navbar Brand-->
\t\t\t<a class=\"navbar-brand ps-3\" href=";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new_step1");
        echo ">iPark</a>
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
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo ">Register</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo ">Login</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=";
        // line 47
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
\t\t\t\t\t\t\t<div class=\"sb-sidenav-menu-heading\">Core</div>
\t\t\t\t\t\t\t<a class=\"nav-link\" href=";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new_step1");
        echo ">
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tDashboard
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"sb-sidenav-menu-heading\">Interface</div>
\t\t\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseLayouts\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-columns\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tLayouts
\t\t\t\t\t\t\t\t<div class=\"sb-sidenav-collapse-arrow\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-down\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapseLayouts\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordion\">
\t\t\t\t\t\t\t\t<nav class=\"sb-sidenav-menu-nested nav\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"layout-static.html\">Static Navigation</a>
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"layout-sidenav-light.html\">Light Sidenav</a>
\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsePages\" aria-expanded=\"false\" aria-controls=\"collapsePages\">
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-book-open\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tPages
\t\t\t\t\t\t\t\t<div class=\"sb-sidenav-collapse-arrow\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-down\"></i>
\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseError\" aria-expanded=\"false\" aria-controls=\"pagesCollapseError\">
\t\t\t\t\t\t\t\t\t\tError
\t\t\t\t\t\t\t\t\t\t<div class=\"sb-sidenav-collapse-arrow\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-down\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"pagesCollapseError\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordionPages\">
\t\t\t\t\t\t\t\t\t\t<nav class=\"sb-sidenav-menu-nested nav\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"401.html\">401 Page</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"404.html\">404 Page</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"500.html\">500 Page</a>
\t\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"sb-sidenav-menu-heading\">Addons</div>
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"charts.html\">
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-chart-area\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tCharts
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"tables.html\">
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-table\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tTables
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sb-sidenav-footer\">
\t\t\t\t\t\t<div class=\"small\">Logged in as:</div>
\t\t\t\t\t\tStart Bootstrap
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t\t<div id=\"layoutSidenav_content\">
\t\t\t\t<main>
\t\t\t\t\t<div class=\"container-fluid px-4\">
\t\t\t\t\t\t<h1 class=\"mt-4\">
\t\t\t\t\t\t\t";
        // line 145
        $this->displayBlock('PageTitle', $context, $blocks);
        // line 148
        echo "\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t";
        // line 151
        $this->displayBlock('body', $context, $blocks);
        // line 154
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"height: 100vh\"></div>
\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t<div class=\"card-body\">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</main>
\t\t\t\t<footer class=\"py-4 bg-light mt-auto\">
\t\t\t\t\t<div class=\"container-fluid px-4\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between small\">
\t\t\t\t\t\t\t<div class=\"text-muted\">Copyright &copy; Your Website 2023</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a href=\"#\">Privacy Policy</a>
\t\t\t\t\t\t\t\t&middot;
\t\t\t\t\t\t\t\t<a href=\"#\">Terms &amp; Conditions</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
\t\t<script src=";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "></script>
\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "\t\t\tStatic Navigation - SB Admin
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 145
    public function block_PageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitle"));

        // line 146
        echo "\t\t\t\t\t\t\t\tTemplate
\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 151
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 152
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
        return array (  310 => 152,  300 => 151,  289 => 146,  279 => 145,  268 => 10,  258 => 9,  244 => 177,  219 => 154,  217 => 151,  212 => 148,  210 => 145,  121 => 59,  106 => 47,  100 => 44,  94 => 41,  69 => 19,  58 => 12,  56 => 9,  46 => 1,);
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
\t\t{% block title %}
\t\t\tStatic Navigation - SB Admin
\t\t{% endblock %}
\t\t<link href={{ asset('assets/css/styles.css') }} rel=\"stylesheet\"/>
\t\t<script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
\t</head>
\t<body>
\t\t<nav
\t\t\tclass=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
\t\t\t<!-- Navbar Brand-->
\t\t\t<a class=\"navbar-brand ps-3\" href={{ path('app_reservation_new_step1') }}>iPark</a>
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
\t\t\t\t\t\t\t<div class=\"sb-sidenav-menu-heading\">Core</div>
\t\t\t\t\t\t\t<a class=\"nav-link\" href={{ path('app_reservation_new_step1') }}>
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tDashboard
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"sb-sidenav-menu-heading\">Interface</div>
\t\t\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseLayouts\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-columns\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tLayouts
\t\t\t\t\t\t\t\t<div class=\"sb-sidenav-collapse-arrow\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-down\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapseLayouts\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordion\">
\t\t\t\t\t\t\t\t<nav class=\"sb-sidenav-menu-nested nav\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"layout-static.html\">Static Navigation</a>
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"layout-sidenav-light.html\">Light Sidenav</a>
\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsePages\" aria-expanded=\"false\" aria-controls=\"collapsePages\">
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-book-open\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tPages
\t\t\t\t\t\t\t\t<div class=\"sb-sidenav-collapse-arrow\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-down\"></i>
\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseError\" aria-expanded=\"false\" aria-controls=\"pagesCollapseError\">
\t\t\t\t\t\t\t\t\t\tError
\t\t\t\t\t\t\t\t\t\t<div class=\"sb-sidenav-collapse-arrow\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-down\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"pagesCollapseError\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordionPages\">
\t\t\t\t\t\t\t\t\t\t<nav class=\"sb-sidenav-menu-nested nav\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"401.html\">401 Page</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"404.html\">404 Page</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"500.html\">500 Page</a>
\t\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"sb-sidenav-menu-heading\">Addons</div>
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"charts.html\">
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-chart-area\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tCharts
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"tables.html\">
\t\t\t\t\t\t\t\t<div class=\"sb-nav-link-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-table\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\tTables
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sb-sidenav-footer\">
\t\t\t\t\t\t<div class=\"small\">Logged in as:</div>
\t\t\t\t\t\tStart Bootstrap
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
\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t<div class=\"card-body\">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</main>
\t\t\t\t<footer class=\"py-4 bg-light mt-auto\">
\t\t\t\t\t<div class=\"container-fluid px-4\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between small\">
\t\t\t\t\t\t\t<div class=\"text-muted\">Copyright &copy; Your Website 2023</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a href=\"#\">Privacy Policy</a>
\t\t\t\t\t\t\t\t&middot;
\t\t\t\t\t\t\t\t<a href=\"#\">Terms &amp; Conditions</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t</div>
\t\t</div>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
\t\t<script src={{ asset('assets/js/scripts.js') }}></script>
\t</body>
</html>
", "template.html.twig", "D:\\Personal files\\Documents\\ENSIAS IDSIT\\Frameworks Web\\Workspace\\ipark\\templates\\template.html.twig");
    }
}

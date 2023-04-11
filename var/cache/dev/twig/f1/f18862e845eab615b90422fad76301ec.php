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

/* temp.html.twig */
class __TwigTemplate_11fcb0b31eadbdbe3ef442638aa01642 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'PageTitle' => [$this, 'block_PageTitle'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <title>
        ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "    </title>
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/@fortawesome/fontawesome-free/css/all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js\" crossorigin=\"anonymous\"></script>
</head>
<body>
<nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
    <!-- Navbar Brand-->
    <a class=\"navbar-brand ps-3\" href=\"index.html\">CvTech</a>
    <!-- Sidebar Toggle-->
    <button class=\"btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0\" id=\"sidebarToggle\" href=\"#!\"><i class=\"fas fa-bars\"></i></button>
    <!-- Navbar Search-->
    <form class=\"d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0\">
        <div class=\"input-group\">
            <input class=\"form-control\" type=\"text\" placeholder=\"Search for...\" aria-label=\"Search for...\" aria-describedby=\"btnNavbarSearch\" />
            <button class=\"btn btn-primary\" id=\"btnNavbarSearch\" type=\"button\"><i class=\"fas fa-search\"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class=\"navbar-nav ms-auto ms-md-0 me-3 me-lg-4\">
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fas fa-user fa-fw\"></i></a>
            <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                ";
        // line 39
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 40
            echo "                    <li><a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a></li>
                ";
        } else {
            // line 42
            echo "                    <li><a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Register</a></li>
                ";
        }
        // line 45
        echo "
            </ul>
        </li>
    </ul>
</nav>

<div id=\"layoutSidenav\">
    ";
        // line 52
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 53
            echo "        <div id=\"layoutSidenav_nav\">
            <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
                <div class=\"sb-sidenav-menu\">
                    <div class=\"nav\">
                        <div class=\"sb-sidenav-menu-heading\">Core</div>
                        <a class=\"nav-link\" href=\"#\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                            Dashboard
                        </a>
                        <div class=\"sb-sidenav-menu-heading\">Pages</div>
                        <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseLayouts\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-columns\"></i></div>
                            Users
                            <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                        </a>
                        <div class=\"collapse\" id=\"collapseLayouts\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordion\">
                            <nav class=\"sb-sidenav-menu-nested nav\">
                                <a class=\"nav-link\" href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("first");
            echo "\">First</a>
                                <a class=\"nav-link\" href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tab.users");
            echo "\">Users</a>
                            </nav>
                        </div>
                        <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsePages\" aria-expanded=\"false\" aria-controls=\"collapsePages\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-book-open\"></i></div>
                            Personnes
                            <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                        </a>
                        <div class=\"collapse\" id=\"collapsePages\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#sidenavAccordion\">
                            <nav class=\"sb-sidenav-menu-nested nav accordion\" id=\"sidenavAccordionPages\">
                                <a class=\"nav-link\" href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personne.list.alls");
            echo "\" >
                                    Liste des personnes
                                </a>
                                ";
            // line 85
            echo "                                ";
            // line 86
            echo "                                ";
            // line 87
            echo "                                ";
            // line 88
            echo "                                ";
            // line 89
            echo "                                ";
            // line 90
            echo "                                ";
            // line 91
            echo "                                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 92
                echo "                                    <a class=\"nav-link collapsed\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personne.edit");
                echo "\" >
                                        Ajouter une personne
                                    </a>
                                ";
            }
            // line 96
            echo "
                            </nav>
                        </div>
                        ";
            // line 100
            echo "                        ";
            // line 101
            echo "                        ";
            // line 102
            echo "                        ";
            // line 103
            echo "                        ";
            // line 104
            echo "                        ";
            // line 105
            echo "                        ";
            // line 106
            echo "                        ";
            // line 107
            echo "                        ";
            // line 108
            echo "                    </div>
                </div>
                <div class=\"sb-sidenav-footer\">
                    <div class=\"small\">Logged in as:</div>
                    ";
            // line 112
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112)) {
                // line 113
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113), "email", [], "any", false, false, false, 113), "html", null, true);
                echo "
                    ";
            } else {
                // line 115
                echo "                        Anonymous
                    ";
            }
            // line 117
            echo "                </div>
            </nav>
        </div>
    ";
        }
        // line 121
        echo "
    <div id=\"layoutSidenav_content\">
        <main>
            <div class=\"container-fluid px-4\">
                <h1 class=\"mt-4\">
                    ";
        // line 126
        $this->displayBlock('PageTitle', $context, $blocks);
        // line 129
        echo "                </h1>
                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                        ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "session", [], "any", false, false, false, 132), "flashBag", [], "any", false, false, false, 132), "get", [0 => "info"], "method", false, false, false, 132));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 133
            echo "                            <div class=\"alert alert-info\">
                                ";
            // line 134
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "session", [], "any", false, false, false, 137), "flashBag", [], "any", false, false, false, 137), "get", [0 => "success"], "method", false, false, false, 137));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 138
            echo "                            <div class=\"alert alert-success\">
                                ";
            // line 139
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 142, $this->source); })()), "session", [], "any", false, false, false, 142), "flashBag", [], "any", false, false, false, 142), "get", [0 => "error"], "method", false, false, false, 142));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 143
            echo "                            <div class=\"alert alert-danger\">
                                ";
            // line 144
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "                        ";
        $this->displayBlock('body', $context, $blocks);
        // line 150
        echo "                    </div>
                </div>
                <div style=\"height: 100vh\"></div>
                <div class=\"card mb-4\"><div class=\"card-body\">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
            </div>
        </main>
        <footer class=\"py-4 bg-light mt-auto\">
            <div class=\"container-fluid px-4\">
                <div class=\"d-flex align-items-center justify-content-between small\">
                    <div class=\"text-muted\">Copyright &copy; Your Website 2021</div>
                    <div>
                        <a href=\"#\">Privacy Policy</a>
                        &middot;
                        <a href=\"#\">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\"></script>
<link href=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/@fortawesome/fontawesome-free/js/all.js"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

";
        // line 177
        $this->displayBlock('javascripts', $context, $blocks);
        // line 179
        echo "</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 11
        echo "            Static Navigation - SB Admin
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 126
    public function block_PageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitle"));

        // line 127
        echo "                        Template
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 147
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 148
        echo "                            Template Body
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 177
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "temp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 177,  405 => 148,  398 => 147,  390 => 127,  383 => 126,  376 => 18,  369 => 17,  361 => 11,  354 => 10,  346 => 179,  344 => 177,  339 => 175,  335 => 174,  331 => 173,  327 => 172,  303 => 150,  300 => 147,  291 => 144,  288 => 143,  283 => 142,  274 => 139,  271 => 138,  266 => 137,  257 => 134,  254 => 133,  250 => 132,  245 => 129,  243 => 126,  236 => 121,  230 => 117,  226 => 115,  220 => 113,  218 => 112,  212 => 108,  210 => 107,  208 => 106,  206 => 105,  204 => 104,  202 => 103,  200 => 102,  198 => 101,  196 => 100,  191 => 96,  183 => 92,  180 => 91,  178 => 90,  176 => 89,  174 => 88,  172 => 87,  170 => 86,  168 => 85,  162 => 81,  149 => 71,  145 => 70,  126 => 53,  124 => 52,  115 => 45,  110 => 43,  105 => 42,  99 => 40,  97 => 39,  75 => 19,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  58 => 13,  56 => 10,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <title>
        {% block title %}
            Static Navigation - SB Admin
        {% endblock %}
    </title>
    <link href=\"{{ asset('assets/css/styles.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('node_modules/@fortawesome/fontawesome-free/css/all.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('node_modules/select2/dist/css/select2.min.css') }}\" rel=\"stylesheet\" />
    {% block stylesheets %}
    {% endblock %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js\" crossorigin=\"anonymous\"></script>
</head>
<body>
<nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
    <!-- Navbar Brand-->
    <a class=\"navbar-brand ps-3\" href=\"index.html\">CvTech</a>
    <!-- Sidebar Toggle-->
    <button class=\"btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0\" id=\"sidebarToggle\" href=\"#!\"><i class=\"fas fa-bars\"></i></button>
    <!-- Navbar Search-->
    <form class=\"d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0\">
        <div class=\"input-group\">
            <input class=\"form-control\" type=\"text\" placeholder=\"Search for...\" aria-label=\"Search for...\" aria-describedby=\"btnNavbarSearch\" />
            <button class=\"btn btn-primary\" id=\"btnNavbarSearch\" type=\"button\"><i class=\"fas fa-search\"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class=\"navbar-nav ms-auto ms-md-0 me-3 me-lg-4\">
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fas fa-user fa-fw\"></i></a>
            <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <li><a class=\"dropdown-item\" href=\"{{path('app_logout')}}\">Logout</a></li>
                {% else %}
                    <li><a class=\"dropdown-item\" href=\"{{path('app_login')}}\">Login</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{path('app_register')}}\">Register</a></li>
                {% endif %}

            </ul>
        </li>
    </ul>
</nav>

<div id=\"layoutSidenav\">
    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        <div id=\"layoutSidenav_nav\">
            <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
                <div class=\"sb-sidenav-menu\">
                    <div class=\"nav\">
                        <div class=\"sb-sidenav-menu-heading\">Core</div>
                        <a class=\"nav-link\" href=\"#\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                            Dashboard
                        </a>
                        <div class=\"sb-sidenav-menu-heading\">Pages</div>
                        <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseLayouts\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-columns\"></i></div>
                            Users
                            <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                        </a>
                        <div class=\"collapse\" id=\"collapseLayouts\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordion\">
                            <nav class=\"sb-sidenav-menu-nested nav\">
                                <a class=\"nav-link\" href=\"{{ path('first') }}\">First</a>
                                <a class=\"nav-link\" href=\"{{ path('tab.users') }}\">Users</a>
                            </nav>
                        </div>
                        <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsePages\" aria-expanded=\"false\" aria-controls=\"collapsePages\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-book-open\"></i></div>
                            Personnes
                            <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                        </a>
                        <div class=\"collapse\" id=\"collapsePages\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#sidenavAccordion\">
                            <nav class=\"sb-sidenav-menu-nested nav accordion\" id=\"sidenavAccordionPages\">
                                <a class=\"nav-link\" href=\"{{ path('personne.list.alls') }}\" >
                                    Liste des personnes
                                </a>
                                {#                            <div class=\"collapse\" id=\"pagesCollapseAuth\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordionPages\">#}
                                {#                                <nav class=\"sb-sidenav-menu-nested nav\">#}
                                {#                                    <a class=\"nav-link\" href=\"login.html\">Login</a>#}
                                {#                                    <a class=\"nav-link\" href=\"register.html\">Register</a>#}
                                {#                                    <a class=\"nav-link\" href=\"password.html\">Forgot Password</a>#}
                                {#                                </nav>#}
                                {#                            </div>#}
                                {% if is_granted('ROLE_ADMIN') %}
                                    <a class=\"nav-link collapsed\" href=\"{{path('personne.edit')}}\" >
                                        Ajouter une personne
                                    </a>
                                {% endif %}

                            </nav>
                        </div>
                        {#                    <div class=\"sb-sidenav-menu-heading\">Addons</div>#}
                        {#                    <a class=\"nav-link\" href=\"charts.html\">#}
                        {#                        <div class=\"sb-nav-link-icon\"><i class=\"fas fa-chart-area\"></i></div>#}
                        {#                        Charts#}
                        {#                    </a>#}
                        {#                    <a class=\"nav-link\" href=\"tables.html\">#}
                        {#                        <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>#}
                        {#                        Tables#}
                        {#                    </a>#}
                    </div>
                </div>
                <div class=\"sb-sidenav-footer\">
                    <div class=\"small\">Logged in as:</div>
                    {% if app.user %}
                        {{ app.user.email }}
                    {% else %}
                        Anonymous
                    {% endif %}
                </div>
            </nav>
        </div>
    {% endif %}

    <div id=\"layoutSidenav_content\">
        <main>
            <div class=\"container-fluid px-4\">
                <h1 class=\"mt-4\">
                    {% block PageTitle %}
                        Template
                    {% endblock %}
                </h1>
                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                        {% for message in app.session.flashBag.get('info') %}
                            <div class=\"alert alert-info\">
                                {{ message }}
                            </div>
                        {% endfor %}
                        {% for message in app.session.flashBag.get('success') %}
                            <div class=\"alert alert-success\">
                                {{ message }}
                            </div>
                        {% endfor %}
                        {% for message in app.session.flashBag.get('error') %}
                            <div class=\"alert alert-danger\">
                                {{ message }}
                            </div>
                        {% endfor %}
                        {% block body %}
                            Template Body
                        {% endblock %}
                    </div>
                </div>
                <div style=\"height: 100vh\"></div>
                <div class=\"card mb-4\"><div class=\"card-body\">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
            </div>
        </main>
        <footer class=\"py-4 bg-light mt-auto\">
            <div class=\"container-fluid px-4\">
                <div class=\"d-flex align-items-center justify-content-between small\">
                    <div class=\"text-muted\">Copyright &copy; Your Website 2021</div>
                    <div>
                        <a href=\"#\">Privacy Policy</a>
                        &middot;
                        <a href=\"#\">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
<script src=\"{{ asset('assets/js/scripts.js') }}\"></script>
<script src=\"{{ asset('node_modules/jquery/dist/jquery.min.js') }}\"></script>
<script src=\"{{ asset('node_modules/select2/dist/js/select2.min.js')}}\"></script>
<link href=\"{{ asset('node_modules/@fortawesome/fontawesome-free/js/all.js') }}\" rel=\"stylesheet\" />

{% block javascripts %}
{% endblock %}
</body>
</html>", "temp.html.twig", "D:\\Personal files\\Documents\\ENSIAS IDSIT\\Frameworks Web\\Workspace\\ipark\\templates\\temp.html.twig");
    }
}

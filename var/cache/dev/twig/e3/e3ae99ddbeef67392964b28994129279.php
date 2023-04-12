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
class __TwigTemplate_aa3c01de7ace911d00cb2b2f3c51f979 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "        <link href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo " rel=\"stylesheet\" />
        <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
    </head>
    <body>
        <nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
            <!-- Navbar Brand-->
            <a class=\"navbar-brand ps-3\" href=\"index.html\">iPark</a>
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
                        <li><a class=\"dropdown-item\" href=";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo ">Login</a></li>
                        <li><a class=\"dropdown-item\" href=";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo ">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id=\"layoutSidenav\">
            <div id=\"layoutSidenav_nav\">
                <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
                    <div class=\"sb-sidenav-menu\">
                        <div class=\"nav\">
                            <div class=\"sb-sidenav-menu-heading\">Core</div>
                            <a class=\"nav-link\" href=\"index.html\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                                Dashboard
                            </a>
                            <div class=\"sb-sidenav-menu-heading\">Interface</div>
                            <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseLayouts\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-columns\"></i></div>
                                Layouts
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"collapseLayouts\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"layout-static.html\">Static Navigation</a>
                                    <a class=\"nav-link\" href=\"layout-sidenav-light.html\">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsePages\" aria-expanded=\"false\" aria-controls=\"collapsePages\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-book-open\"></i></div>
                                Pages
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"collapsePages\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav accordion\" id=\"sidenavAccordionPages\">
                                    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseAuth\" aria-expanded=\"false\" aria-controls=\"pagesCollapseAuth\">
                                        Authentication
                                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                                    </a>
                                    <div class=\"collapse\" id=\"pagesCollapseAuth\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordionPages\">
                                        <nav class=\"sb-sidenav-menu-nested nav\">
                                            <a class=\"nav-link\" href=\"login.html\">Login</a>
                                            <a class=\"nav-link\" href=\"register.html\">Register</a>
                                            <a class=\"nav-link\" href=\"password.html\">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseError\" aria-expanded=\"false\" aria-controls=\"pagesCollapseError\">
                                        Error
                                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                                    </a>
                                    <div class=\"collapse\" id=\"pagesCollapseError\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordionPages\">
                                        <nav class=\"sb-sidenav-menu-nested nav\">
                                            <a class=\"nav-link\" href=\"401.html\">401 Page</a>
                                            <a class=\"nav-link\" href=\"404.html\">404 Page</a>
                                            <a class=\"nav-link\" href=\"500.html\">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class=\"sb-sidenav-menu-heading\">Addons</div>
                            <a class=\"nav-link\" href=\"charts.html\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-chart-area\"></i></div>
                                Charts
                            </a>
                            <a class=\"nav-link\" href=\"tables.html\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class=\"sb-sidenav-footer\">
                        <div class=\"small\">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id=\"layoutSidenav_content\">
                <main>
                    <div class=\"container-fluid px-4\">
                        <h1 class=\"mt-4\">
                            ";
        // line 113
        $this->displayBlock('PageTitle', $context, $blocks);
        // line 116
        echo "                        </h1>
                        <div class=\"card mb-4\">
                            <div class=\"card-body\">
                                ";
        // line 119
        $this->displayBlock('body', $context, $blocks);
        // line 122
        echo "                            </div>
                        </div>
                        <div style=\"height: 100vh\"></div>
                        <div class=\"card mb-4\"><div class=\"card-body\">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
                    </div>
                </main>
                <footer class=\"py-4 bg-light mt-auto\">
                    <div class=\"container-fluid px-4\">
                        <div class=\"d-flex align-items-center justify-content-between small\">
                            <div class=\"text-muted\">Copyright &copy; Your Website 2023</div>
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
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
        <script src=";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "></script>
    </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "            Static Navigation - SB Admin
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 113
    public function block_PageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitle"));

        // line 114
        echo "                                Template
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 119
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 120
        echo "                                    Template Body
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  246 => 120,  239 => 119,  231 => 114,  224 => 113,  216 => 10,  209 => 9,  198 => 143,  175 => 122,  173 => 119,  168 => 116,  166 => 113,  84 => 34,  80 => 33,  55 => 12,  53 => 9,  43 => 1,);
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
        {% block title %}
            Static Navigation - SB Admin
        {% endblock %}
        <link href={{ asset('assets/css/styles.css') }} rel=\"stylesheet\" />
        <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
    </head>
    <body>
        <nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
            <!-- Navbar Brand-->
            <a class=\"navbar-brand ps-3\" href=\"index.html\">iPark</a>
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
                        <li><a class=\"dropdown-item\" href={{ path('app_login') }}>Login</a></li>
                        <li><a class=\"dropdown-item\" href={{ path('app_logout') }}>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id=\"layoutSidenav\">
            <div id=\"layoutSidenav_nav\">
                <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
                    <div class=\"sb-sidenav-menu\">
                        <div class=\"nav\">
                            <div class=\"sb-sidenav-menu-heading\">Core</div>
                            <a class=\"nav-link\" href=\"index.html\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                                Dashboard
                            </a>
                            <div class=\"sb-sidenav-menu-heading\">Interface</div>
                            <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseLayouts\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-columns\"></i></div>
                                Layouts
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"collapseLayouts\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"layout-static.html\">Static Navigation</a>
                                    <a class=\"nav-link\" href=\"layout-sidenav-light.html\">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsePages\" aria-expanded=\"false\" aria-controls=\"collapsePages\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-book-open\"></i></div>
                                Pages
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"collapsePages\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav accordion\" id=\"sidenavAccordionPages\">
                                    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseAuth\" aria-expanded=\"false\" aria-controls=\"pagesCollapseAuth\">
                                        Authentication
                                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                                    </a>
                                    <div class=\"collapse\" id=\"pagesCollapseAuth\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordionPages\">
                                        <nav class=\"sb-sidenav-menu-nested nav\">
                                            <a class=\"nav-link\" href=\"login.html\">Login</a>
                                            <a class=\"nav-link\" href=\"register.html\">Register</a>
                                            <a class=\"nav-link\" href=\"password.html\">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseError\" aria-expanded=\"false\" aria-controls=\"pagesCollapseError\">
                                        Error
                                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                                    </a>
                                    <div class=\"collapse\" id=\"pagesCollapseError\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordionPages\">
                                        <nav class=\"sb-sidenav-menu-nested nav\">
                                            <a class=\"nav-link\" href=\"401.html\">401 Page</a>
                                            <a class=\"nav-link\" href=\"404.html\">404 Page</a>
                                            <a class=\"nav-link\" href=\"500.html\">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class=\"sb-sidenav-menu-heading\">Addons</div>
                            <a class=\"nav-link\" href=\"charts.html\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-chart-area\"></i></div>
                                Charts
                            </a>
                            <a class=\"nav-link\" href=\"tables.html\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class=\"sb-sidenav-footer\">
                        <div class=\"small\">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
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
                            <div class=\"text-muted\">Copyright &copy; Your Website 2023</div>
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
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
        <script src={{ asset('assets/js/scripts.js') }}></script>
    </body>
</html>
", "template.html.twig", "D:\\Personal files\\Documents\\ENSIAS IDSIT\\Frameworks Web\\Workspace\\ipark\\templates\\template.html.twig");
    }
}

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

/* reservation/step1.html.twig */
class __TwigTemplate_78eee2bfb5700435aacb246856fc9060 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/step1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/step1.html.twig"));

        $this->parent = $this->loadTemplate("template2.html.twig", "reservation/step1.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "iPark - Parking Services
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<section id=\"hero\" class=\"hero d-flex align-items-center\" style=\"min-height: 100vh;\">
\t\t";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
            // line 10
            echo "\t\t\t";
            $context["roles"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "getRoles", [], "method", false, false, false, 10);
            // line 11
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "isVerified", [], "any", false, false, false, 11) || twig_in_filter("ROLE_ADMIN", (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 11, $this->source); })())))) {
                // line 12
                echo "\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row gy-4 d-flex justify-content-center\">
\t\t\t\t\t\t<div class=\"col-lg-7 col-md-8 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center\" style=\"margin-left: 50px;\">
\t\t\t\t\t\t\t<h2 data-aos=\"fade-up\" style=\"margin-right:auto\">Welcome to iPark,
\t\t\t\t\t\t\t\t";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "prenom", [], "any", false, false, false, 16), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "nom", [], "any", false, false, false, 17), "html", null, true);
                echo "!</h2>
\t\t\t\t\t\t\t<p data-aos=\"fade-up\" data-aos-delay=\"100\" style=\"font-size: 20px\">We are happy you chose our service! Go ahead and make a reservation.</p>
\t\t\t\t\t\t\t<h1 data-aos=\"fade-up\" data-aos-delay=\"100\">&#128513;</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3 order-1 order-lg-1 hero-img\" data-aos=\"zoom-out\">
\t\t\t\t\t\t\t<img src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/parking-car.png"), "html", null, true);
                echo "\" class=\"img-fluid mb-3 mb-lg-0\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-10 order-1 order-lg-1 d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t";
                // line 25
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["class" => "form-search d-flex align-items-stretch mb-3 mt-3", "data-aos" => "fade-up", "data-aos-delay" => "200"]]);
                echo "
\t\t\t\t\t\t\t";
                // line 26
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "date_reservation", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "id" => "date_reservation"]]);
                echo "
\t\t\t\t\t\t\t";
                // line 27
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "type_vehicule", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-select", "id" => "type_vehicule", "required" => "required"]]);
                echo "
\t\t\t\t\t\t\t";
                // line 28
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "adresse", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "id" => "adresse", "placeholder" => "Address", "autocomplete" => "on"]]);
                echo "
\t\t\t\t\t\t\t";
                // line 29
                echo twig_include($this->env, $context, "reservation/_form.html.twig");
                echo "
\t\t\t\t\t\t\t";
                // line 30
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_end');
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            } else {
                // line 35
                echo "\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row gy-4 d-flex justify-content-center\">
\t\t\t\t\t\t<div class=\"col-lg-7 col-md-8 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center\" style=\"margin-left: 50px;\">
\t\t\t\t\t\t\t<h2 data-aos=\"fade-up\" style=\"margin-right:auto\">Your Swift Parking Partner</h2>
\t\t\t\t\t\t\t<p data-aos=\"fade-up\" data-aos-delay=\"100\" style=\"font-size: 20px\">Welcome to iPark. where finding a spot is a breeze! We're here to make your parking experience lightning fast and hassle-free.</p>
\t\t\t\t\t\t\t<span data-aos=\"fade-up\" data-aos-delay=\"200\" style=\"font-size: 20px; font-weight: bold; margin-top: 20px\">Please verify your email to continue. (check spam if not in inbox)</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3 order-1 order-lg-1 hero-img\" data-aos=\"zoom-out\">
\t\t\t\t\t\t\t<img src=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/parking-car.png"), "html", null, true);
                echo "\" class=\"img-fluid mb-3 mb-lg-0\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 48
            echo "\t\t";
        } else {
            // line 49
            echo "\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row gy-4 d-flex justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-7 col-md-8 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center\" style=\"margin-left: 50px;\">
\t\t\t\t\t\t<h2 data-aos=\"fade-up\" style=\"margin-right:auto\">Your Swift Parking Partner</h2>
\t\t\t\t\t\t<p data-aos=\"fade-up\" data-aos-delay=\"100\" style=\"font-size: 20px\">Welcome to iPark. where finding a spot is a breeze! We're here to make your parking experience lightning fast and hassle-free.</p>
\t\t\t\t\t\t<span data-aos=\"fade-up\" data-aos-delay=\"200\" style=\"font-size: 30px; font-weight: bold; margin-top: 20px\">Sign in or Register to make a reservation.</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 order-1 order-lg-1 hero-img\" data-aos=\"zoom-out\">
\t\t\t\t\t\t<img src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/parking-car.png"), "html", null, true);
            echo "\" class=\"img-fluid mb-3 mb-lg-0\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 62
        echo "\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reservation/step1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 62,  184 => 57,  174 => 49,  171 => 48,  163 => 43,  153 => 35,  145 => 30,  141 => 29,  137 => 28,  133 => 27,  129 => 26,  125 => 25,  119 => 22,  111 => 17,  107 => 16,  101 => 12,  98 => 11,  95 => 10,  93 => 9,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template2.html.twig' %}

{% block title %}iPark - Parking Services
{% endblock %}

{% block body %}

\t<section id=\"hero\" class=\"hero d-flex align-items-center\" style=\"min-height: 100vh;\">
\t\t{% if app.user %}
\t\t\t{% set roles = app.user.getRoles() %}
\t\t\t{% if app.user.isVerified or 'ROLE_ADMIN' in roles %}
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row gy-4 d-flex justify-content-center\">
\t\t\t\t\t\t<div class=\"col-lg-7 col-md-8 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center\" style=\"margin-left: 50px;\">
\t\t\t\t\t\t\t<h2 data-aos=\"fade-up\" style=\"margin-right:auto\">Welcome to iPark,
\t\t\t\t\t\t\t\t{{ app.user.prenom }}
\t\t\t\t\t\t\t\t{{ app.user.nom }}!</h2>
\t\t\t\t\t\t\t<p data-aos=\"fade-up\" data-aos-delay=\"100\" style=\"font-size: 20px\">We are happy you chose our service! Go ahead and make a reservation.</p>
\t\t\t\t\t\t\t<h1 data-aos=\"fade-up\" data-aos-delay=\"100\">&#128513;</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3 order-1 order-lg-1 hero-img\" data-aos=\"zoom-out\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/parking-car.png') }}\" class=\"img-fluid mb-3 mb-lg-0\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-10 order-1 order-lg-1 d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t{{ form_start(form, {'attr': {'class': 'form-search d-flex align-items-stretch mb-3 mt-3', 'data-aos': 'fade-up', 'data-aos-delay': '200'}}) }}
\t\t\t\t\t\t\t{{ form_widget(form.date_reservation, {'attr': {'class': 'form-control', 'id': 'date_reservation'}}) }}
\t\t\t\t\t\t\t{{ form_widget(form.type_vehicule, {'attr': {'class': 'form-select', 'id': 'type_vehicule', 'required': 'required'}}) }}
\t\t\t\t\t\t\t{{ form_widget(form.adresse, {'attr': {'class': 'form-control', 'id': 'adresse', 'placeholder': 'Address', 'autocomplete': 'on'}}) }}
\t\t\t\t\t\t\t{{ include('reservation/_form.html.twig') }}
\t\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row gy-4 d-flex justify-content-center\">
\t\t\t\t\t\t<div class=\"col-lg-7 col-md-8 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center\" style=\"margin-left: 50px;\">
\t\t\t\t\t\t\t<h2 data-aos=\"fade-up\" style=\"margin-right:auto\">Your Swift Parking Partner</h2>
\t\t\t\t\t\t\t<p data-aos=\"fade-up\" data-aos-delay=\"100\" style=\"font-size: 20px\">Welcome to iPark. where finding a spot is a breeze! We're here to make your parking experience lightning fast and hassle-free.</p>
\t\t\t\t\t\t\t<span data-aos=\"fade-up\" data-aos-delay=\"200\" style=\"font-size: 20px; font-weight: bold; margin-top: 20px\">Please verify your email to continue. (check spam if not in inbox)</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3 order-1 order-lg-1 hero-img\" data-aos=\"zoom-out\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/parking-car.png') }}\" class=\"img-fluid mb-3 mb-lg-0\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t{% else %}
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row gy-4 d-flex justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-7 col-md-8 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center\" style=\"margin-left: 50px;\">
\t\t\t\t\t\t<h2 data-aos=\"fade-up\" style=\"margin-right:auto\">Your Swift Parking Partner</h2>
\t\t\t\t\t\t<p data-aos=\"fade-up\" data-aos-delay=\"100\" style=\"font-size: 20px\">Welcome to iPark. where finding a spot is a breeze! We're here to make your parking experience lightning fast and hassle-free.</p>
\t\t\t\t\t\t<span data-aos=\"fade-up\" data-aos-delay=\"200\" style=\"font-size: 30px; font-weight: bold; margin-top: 20px\">Sign in or Register to make a reservation.</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 order-1 order-lg-1 hero-img\" data-aos=\"zoom-out\">
\t\t\t\t\t\t<img src=\"{{ asset('assets/img/parking-car.png') }}\" class=\"img-fluid mb-3 mb-lg-0\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t</section>
{% endblock %}
", "reservation/step1.html.twig", "D:\\Personal files\\Documents\\ENSIAS IDSIT\\Frameworks Web\\Workspace\\ipark\\templates\\reservation\\step1.html.twig");
    }
}

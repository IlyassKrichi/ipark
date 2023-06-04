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

        echo "Step1
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
\t<section id=\"hero\" class=\"hero d-flex align-items-center\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row gy-4 d-flex justify-content-center\">
\t\t\t\t<div class=\"col-lg-7 col-md-8 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center\">
\t\t\t\t\t<h2 data-aos=\"fade-up\" style=\"text-align:center\">Your Swift Parking Partner</h2>
\t\t\t\t\t<p data-aos=\"fade-up\" data-aos-delay=\"100\" style=\"text-align:center\">Welcome to iPark. where finding a spot is a breeze! We're here to make your parking experience lightning fast and hassle-free.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 order-1 order-lg-1 hero-img\" data-aos=\"zoom-out\">
\t\t\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/hero-img.svg"), "html", null, true);
        echo "\" class=\"img-fluid mb-3 mb-lg-0\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-10 order-1 order-lg-1 d-flex flex-column justify-content-center\">
\t\t\t\t\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["class" => "form-search d-flex align-items-stretch mb-3 mt-3", "data-aos" => "fade-up", "data-aos-delay" => "200"]]);
        echo "
\t\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "date_reservation", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control", "id" => "date_reservation"]]);
        echo "
\t\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "type_vehicule", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-select", "id" => "type_vehicule", "required" => "required"]]);
        echo "
\t\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "adresse", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control", "id" => "adresse", "placeholder" => "Address", "autocomplete" => "on"]]);
        echo "
\t\t\t\t\t";
        // line 23
        echo twig_include($this->env, $context, "reservation/_form.html.twig");
        echo "
\t\t\t\t\t";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_end');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
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
        return array (  126 => 24,  122 => 23,  118 => 22,  114 => 21,  110 => 20,  106 => 19,  100 => 16,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template2.html.twig' %}

{% block title %}Step1
{% endblock %}

{% block body %}

\t<section id=\"hero\" class=\"hero d-flex align-items-center\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row gy-4 d-flex justify-content-center\">
\t\t\t\t<div class=\"col-lg-7 col-md-8 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center\">
\t\t\t\t\t<h2 data-aos=\"fade-up\" style=\"text-align:center\">Your Swift Parking Partner</h2>
\t\t\t\t\t<p data-aos=\"fade-up\" data-aos-delay=\"100\" style=\"text-align:center\">Welcome to iPark. where finding a spot is a breeze! We're here to make your parking experience lightning fast and hassle-free.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 order-1 order-lg-1 hero-img\" data-aos=\"zoom-out\">
\t\t\t\t\t<img src=\"{{ asset('assets/img/hero-img.svg') }}\" class=\"img-fluid mb-3 mb-lg-0\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-10 order-1 order-lg-1 d-flex flex-column justify-content-center\">
\t\t\t\t\t{{ form_start(form, {'attr': {'class': 'form-search d-flex align-items-stretch mb-3 mt-3', 'data-aos': 'fade-up', 'data-aos-delay': '200'}}) }}
\t\t\t\t\t{{ form_widget(form.date_reservation, {'attr': {'class': 'form-control', 'id': 'date_reservation'}}) }}
\t\t\t\t\t{{ form_widget(form.type_vehicule, {'attr': {'class': 'form-select', 'id': 'type_vehicule', 'required': 'required'}}) }}
\t\t\t\t\t{{ form_widget(form.adresse, {'attr': {'class': 'form-control', 'id': 'adresse', 'placeholder': 'Address', 'autocomplete': 'on'}}) }}
\t\t\t\t\t{{ include('reservation/_form.html.twig') }}
\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "reservation/step1.html.twig", "D:\\Personal files\\Documents\\ENSIAS IDSIT\\Frameworks Web\\Workspace\\ipark\\templates\\reservation\\step1.html.twig");
    }
}

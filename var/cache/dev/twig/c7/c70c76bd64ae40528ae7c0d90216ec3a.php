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

/* reservation/step2.html.twig */
class __TwigTemplate_1ab21af76102f8c839873db4d8b8b3db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/step2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/step2.html.twig"));

        $this->parent = $this->loadTemplate("template2.html.twig", "reservation/step2.html.twig", 1);
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

        echo "Available Parkings
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
\t\t<div class=\"container\">
\t\t\t<h1 class=\"text-center color-black\">Available Parkings</h1>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 mx-auto\">
\t\t\t\t\t<div class=\"card rounded-3 border-3\">
\t\t\t\t\t\t";
        // line 14
        if ( !(isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "\t\t\t\t\t\t\t<h3 style=\"color: black; text-align: center; font-size: 35px\" class=\"my-4\">No Parkings found.</h3>
\t\t\t\t\t\t";
        } else {
            // line 17
            echo "\t\t\t\t\t\t\t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
            echo "
\t\t\t\t\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["parkings"]) || array_key_exists("parkings", $context) ? $context["parkings"] : (function () { throw new RuntimeError('Variable "parkings" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["parking"]) {
                // line 19
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["distances"]) || array_key_exists("distances", $context) ? $context["distances"] : (function () { throw new RuntimeError('Variable "distances" does not exist.', 19, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["parking"], "nom", [], "any", false, false, false, 19), [], "array", false, false, false, 19) <= 3)) {
                    // line 20
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"container py-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card shadow-0 border rounded-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-6 col-xl-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\" style=\"color: black;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "nom", [], "any", false, false, false, 25), "html", null, true);
                    echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-1 mb-0 text-muted small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Address:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "adresse", [], "any", false, false, false, 28), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2 text-muted small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Capacity:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 32
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "capacite", [], "any", false, false, false, 32), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 border-sm-start-none border-start\" style=\"margin-left: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-success\">Distance to Parking:</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 39
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["distances"]) || array_key_exists("distances", $context) ? $context["distances"] : (function () { throw new RuntimeError('Variable "distances" does not exist.', 39, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["parking"], "nom", [], "any", false, false, false, 39), [], "array", false, false, false, 39) < 1)) {
                        // line 40
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-success mt-1\">";
                        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["distances"]) || array_key_exists("distances", $context) ? $context["distances"] : (function () { throw new RuntimeError('Variable "distances" does not exist.', 40, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["parking"], "nom", [], "any", false, false, false, 40), [], "array", false, false, false, 40) * 100), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tm</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 43
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-success mt-1\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["distances"]) || array_key_exists("distances", $context) ? $context["distances"] : (function () { throw new RuntimeError('Variable "distances" does not exist.', 43, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["parking"], "nom", [], "any", false, false, false, 43), [], "array", false, false, false, 43), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tKm</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 46
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"parking_id\" value=\"";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 47), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "parking", [], "any", false, false, false, 47)), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 48), "html", null, true);
                    echo "\" aria-expanded=\"false\" aria-controls=\"collapse";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 48), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSelect
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapse";
                    // line 54
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 54), "html", null, true);
                    echo "\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-body rounded-0 border border-top-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color: black;\">Available Places:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select type=\"choice\" class=\"form-select mt-1\" id=\"place_id\" name=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "place", [], "any", false, false, false, 57)), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 58
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 58, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
                        // line 59
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 59) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["place"], "parking", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59))) {
                            // line 60
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["place"], "id", [], "any", false, false, false, 60), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["place"], "id", [], "any", false, false, false, 60), "html", null, true);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 62
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary mt-3\" type=\"submit\">Book</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 71
                echo "
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parking'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "\t\t\t\t\t\t\t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
            echo "
\t\t\t\t\t\t";
        }
        // line 75
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reservation/step2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 75,  230 => 73,  223 => 71,  213 => 63,  207 => 62,  199 => 60,  196 => 59,  192 => 58,  188 => 57,  182 => 54,  171 => 48,  165 => 47,  162 => 46,  155 => 43,  148 => 40,  146 => 39,  136 => 32,  129 => 28,  123 => 25,  116 => 20,  113 => 19,  109 => 18,  104 => 17,  100 => 15,  98 => 14,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template2.html.twig' %}

{% block title %}Available Parkings
{% endblock %}

{% block body %}

\t<section id=\"hero\" class=\"hero d-flex align-items-center\" style=\"min-height: 100vh;\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"text-center color-black\">Available Parkings</h1>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 mx-auto\">
\t\t\t\t\t<div class=\"card rounded-3 border-3\">
\t\t\t\t\t\t{% if not flag %}
\t\t\t\t\t\t\t<h3 style=\"color: black; text-align: center; font-size: 35px\" class=\"my-4\">No Parkings found.</h3>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t\t{% for parking in parkings %}
\t\t\t\t\t\t\t\t{% if distances[parking.nom] <= 3 %}
\t\t\t\t\t\t\t\t\t<div class=\"container py-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card shadow-0 border rounded-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-6 col-xl-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\" style=\"color: black;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ parking.nom }}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-1 mb-0 text-muted small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Address:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ parking.adresse }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2 text-muted small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Capacity:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ parking.capacite }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 border-sm-start-none border-start\" style=\"margin-left: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-success\">Distance to Parking:</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if distances[parking.nom] < 1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-success mt-1\">{{ distances[parking.nom] * 100 }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tm</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-success mt-1\">{{ distances[parking.nom] }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tKm</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"parking_id\" value=\"{{ parking.id }}\" name=\"{{ field_name(form.parking) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse{{ parking.id }}\" aria-expanded=\"false\" aria-controls=\"collapse{{ parking.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSelect
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapse{{ parking.id }}\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-body rounded-0 border border-top-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color: black;\">Available Places:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select type=\"choice\" class=\"form-select mt-1\" id=\"place_id\" name=\"{{ field_name(form.place) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for place in places %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if parking.id == place.parking.id %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ place.id }}\">{{ place.id }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary mt-3\" type=\"submit\">Book</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t{% endblock %}
", "reservation/step2.html.twig", "D:\\Personal files\\Documents\\ENSIAS IDSIT\\Frameworks Web\\Workspace\\ipark\\templates\\reservation\\step2.html.twig");
    }
}

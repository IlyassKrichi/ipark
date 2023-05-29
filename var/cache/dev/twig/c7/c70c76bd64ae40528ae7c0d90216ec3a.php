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

        echo "New Reservation
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
        echo "\t<section id=\"hero\" class=\"hero d-flex align-items-center\"></section>
\t<div class=\"container\">
\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parkings"]) || array_key_exists("parkings", $context) ? $context["parkings"] : (function () { throw new RuntimeError('Variable "parkings" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["parking"]) {
            // line 10
            echo "\t\t\t<div class=\"d-flex flex-column justify-content-center border rounded-4 p-3 bg-secondary\">
\t\t\t\t<p>
\t\t\t\t\tNom :
\t\t\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "nom", [], "any", false, false, false, 13), "html", null, true);
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tAdresse :
\t\t\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "adresse", [], "any", false, false, false, 17), "html", null, true);
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tCapacité :
\t\t\t\t\t";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "capacite", [], "any", false, false, false, 21), "html", null, true);
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tPlaces disponibles:
\t\t\t\t\t";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
                // line 26
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 26) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["place"], "parking", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26))) {
                    // line 27
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["place"], "id", [], "any", false, false, false, 27), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                }
                // line 29
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t\t\t</p>
\t\t\t\t<button class=\"btn btn-primary collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
\t\t\t\t\tRéserver
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse\" id=\"collapse";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\" style=\"\">
\t\t\t\t\t<div class=\"card card-body\">
\t\t\t\t\t\tHi!
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t</div>


";
        
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
        return array (  164 => 41,  151 => 34,  145 => 31,  142 => 30,  136 => 29,  130 => 27,  127 => 26,  123 => 25,  116 => 21,  109 => 17,  102 => 13,  97 => 10,  93 => 9,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template2.html.twig' %}

{% block title %}New Reservation
{% endblock %}

{% block body %}
\t<section id=\"hero\" class=\"hero d-flex align-items-center\"></section>
\t<div class=\"container\">
\t\t{% for parking in parkings %}
\t\t\t<div class=\"d-flex flex-column justify-content-center border rounded-4 p-3 bg-secondary\">
\t\t\t\t<p>
\t\t\t\t\tNom :
\t\t\t\t\t{{ parking.nom }}
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tAdresse :
\t\t\t\t\t{{ parking.adresse }}
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tCapacité :
\t\t\t\t\t{{ parking.capacite }}
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tPlaces disponibles:
\t\t\t\t\t{% for place in places %}
\t\t\t\t\t\t{% if parking.id == place.parking.id %}
\t\t\t\t\t\t\t{{ place.id }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</p>
\t\t\t\t<button class=\"btn btn-primary collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse{{ parking.id }}\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
\t\t\t\t\tRéserver
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse\" id=\"collapse{{ parking.id }}\" style=\"\">
\t\t\t\t\t<div class=\"card card-body\">
\t\t\t\t\t\tHi!
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t</div>


{% endblock %}
", "reservation/step2.html.twig", "D:\\Personal files\\Documents\\ENSIAS IDSIT\\Frameworks Web\\Workspace\\ipark\\templates\\reservation\\step2.html.twig");
    }
}

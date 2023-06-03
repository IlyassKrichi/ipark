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

        echo "Step2
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parkings"]) || array_key_exists("parkings", $context) ? $context["parkings"] : (function () { throw new RuntimeError('Variable "parkings" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["parking"]) {
            // line 11
            echo "\t\t\t<div class=\"d-flex flex-column justify-content-center border rounded-4 p-3 bg-secondary\">
\t\t\t\t<p>
\t\t\t\t\tNom :
\t\t\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "nom", [], "any", false, false, false, 14), "html", null, true);
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tAdresse :
\t\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "adresse", [], "any", false, false, false, 18), "html", null, true);
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tCapacité :
\t\t\t\t\t";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "capacite", [], "any", false, false, false, 22), "html", null, true);
            echo "
\t\t\t\t</p>
\t\t\t\t<input type=\"hidden\" id=\"parking_id\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "parking", [], "any", false, false, false, 24)), "html", null, true);
            echo "\">
\t\t\t\t<button class=\"btn btn-primary collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\" aria-expanded=\"false\" aria-controls=\"collapse";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\">
\t\t\t\t\tSéléctionner
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse\" id=\"collapse";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\" style=\"\">
\t\t\t\t\t<div class=\"card card-body mt-2\">
\t\t\t\t\t\tPlaces disponibles:
\t\t\t\t\t\t<select type=\"choice\" class=\"form-select mt-1\" id=\"place_id\" name=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "place", [], "any", false, false, false, 31)), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
                // line 33
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 33) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["place"], "parking", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33))) {
                    // line 34
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["place"], "id", [], "any", false, false, false, 34), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["place"], "id", [], "any", false, false, false, 34), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<button class=\"btn btn-primary mt-3\" type=\"submit\">Réserver</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
\t</div>


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
        return array (  181 => 43,  170 => 37,  164 => 36,  156 => 34,  153 => 33,  149 => 32,  145 => 31,  139 => 28,  131 => 25,  125 => 24,  120 => 22,  113 => 18,  106 => 14,  101 => 11,  97 => 10,  93 => 9,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template2.html.twig' %}

{% block title %}Step2
{% endblock %}

{% block body %}
\t<section id=\"hero\" class=\"hero d-flex align-items-center\"></section>
\t<div class=\"container\">
\t\t{{ form_start(form) }}
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
\t\t\t\t<input type=\"hidden\" id=\"parking_id\" value=\"{{ parking.id }}\" name=\"{{ field_name(form.parking) }}\">
\t\t\t\t<button class=\"btn btn-primary collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse{{ parking.id }}\" aria-expanded=\"false\" aria-controls=\"collapse{{ parking.id }}\">
\t\t\t\t\tSéléctionner
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse\" id=\"collapse{{ parking.id }}\" style=\"\">
\t\t\t\t\t<div class=\"card card-body mt-2\">
\t\t\t\t\t\tPlaces disponibles:
\t\t\t\t\t\t<select type=\"choice\" class=\"form-select mt-1\" id=\"place_id\" name=\"{{ field_name(form.place) }}\">
\t\t\t\t\t\t\t{% for place in places %}
\t\t\t\t\t\t\t\t{% if parking.id == place.parking.id %}
\t\t\t\t\t\t\t\t\t<option value=\"{{ place.id }}\">{{ place.id }}</option>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<button class=\"btn btn-primary mt-3\" type=\"submit\">Réserver</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t\t{{ form_end(form) }}
\t</div>


{% endblock %}
", "reservation/step2.html.twig", "D:\\Personal files\\Documents\\ENSIAS IDSIT\\Frameworks Web\\Workspace\\ipark\\templates\\reservation\\step2.html.twig");
    }
}

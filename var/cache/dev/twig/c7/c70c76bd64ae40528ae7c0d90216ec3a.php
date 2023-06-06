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
        echo "\t<section id=\"hero\" class=\"hero d-flex align-items-center\" style=\"min-height: 100vh;\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"text-center color-black\">Available Parkings</h1>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 mx-auto\">
\t\t\t\t\t<div class=\"card rounded-3 border-3\">
\t\t\t\t\t\t";
        // line 13
        if ( !(isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "\t\t\t\t\t\t\t<h3 style=\"color: black; text-align: center; font-size: 35px\" class=\"my-4\">No Parkings found.</h3>
\t\t\t\t\t\t";
        } else {
            // line 16
            echo "\t\t\t\t\t\t\t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
            echo "
\t\t\t\t\t\t\t";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["parkings"]) || array_key_exists("parkings", $context) ? $context["parkings"] : (function () { throw new RuntimeError('Variable "parkings" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["parking"]) {
                // line 18
                echo "\t\t\t\t\t\t\t";
                $context["f"] = false;
                // line 19
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 19, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
                    // line 20
                    echo "\t\t\t\t\t\t\t\t";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["place"], "parking", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20) == twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 20)) && (twig_get_attribute($this->env, $this->source, $context["place"], "type", [], "any", false, false, false, 20) == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 20, $this->source); })())))) {
                        // line 21
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["f"] = true;
                        // line 22
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 23
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "\t\t\t\t\t\t\t";
                if ((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 24, $this->source); })())) {
                    // line 25
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["distances"]) || array_key_exists("distances", $context) ? $context["distances"] : (function () { throw new RuntimeError('Variable "distances" does not exist.', 25, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["parking"], "nom", [], "any", false, false, false, 25), [], "array", false, false, false, 25) <= 5)) {
                        // line 26
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"container py-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card shadow-0 border rounded-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-6 col-xl-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\" style=\"color: black;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                        // line 31
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "nom", [], "any", false, false, false, 31), "html", null, true);
                        echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-1 mb-0 text-muted small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Address:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 34
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "adresse", [], "any", false, false, false, 34), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2 text-muted small\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Capacity:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 38
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "capacite", [], "any", false, false, false, 38), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 border-sm-start-none border-start\" style=\"margin-left: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-success\">Distance to Parking:</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 45
                        if ((twig_get_attribute($this->env, $this->source, (isset($context["distances"]) || array_key_exists("distances", $context) ? $context["distances"] : (function () { throw new RuntimeError('Variable "distances" does not exist.', 45, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["parking"], "nom", [], "any", false, false, false, 45), [], "array", false, false, false, 45) < 1)) {
                            // line 46
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-success mt-1\">";
                            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["distances"]) || array_key_exists("distances", $context) ? $context["distances"] : (function () { throw new RuntimeError('Variable "distances" does not exist.', 46, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["parking"], "nom", [], "any", false, false, false, 46), [], "array", false, false, false, 46) * 100), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tm</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 49
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-success mt-1\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["distances"]) || array_key_exists("distances", $context) ? $context["distances"] : (function () { throw new RuntimeError('Variable "distances" does not exist.', 49, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["parking"], "nom", [], "any", false, false, false, 49), [], "array", false, false, false, 49), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tKm</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 52
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"parking_id\" value=\"";
                        // line 53
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 53), "html", null, true);
                        echo "\" name=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "parking", [], "any", false, false, false, 53)), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse";
                        // line 54
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 54), "html", null, true);
                        echo "\" aria-expanded=\"false\" aria-controls=\"collapse";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 54), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSelect
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapse";
                        // line 60
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 60), "html", null, true);
                        echo "\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-body rounded-0\" style=\"border-top: 3px solid rgb(222, 226, 230); border-bottom: 0px; border-left: 0px; border-right: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color: black;\">Available Places:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select type=\"choice\" class=\"form-select mt-1\" id=\"place_id\" name=\"";
                        // line 63
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "place", [], "any", false, false, false, 63)), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 64
                        $context["price"] = 0;
                        // line 65
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["c"] = "Not Covered";
                        // line 66
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 66, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
                            // line 67
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 67) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["place"], "parking", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67))) {
                                // line 68
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                if (((twig_get_attribute($this->env, $this->source, $context["place"], "type", [], "any", false, false, false, 68) == "Car") && (twig_get_attribute($this->env, $this->source, $context["place"], "couverture", [], "any", false, false, false, 68) == "Oui"))) {
                                    // line 69
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["price"] = 10;
                                    // line 70
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["c"] = "Covered";
                                    // line 71
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif (((twig_get_attribute($this->env, $this->source, $context["place"], "type", [], "any", false, false, false, 71) == "Car") && (twig_get_attribute($this->env, $this->source, $context["place"], "couverture", [], "any", false, false, false, 71) == "Non"))) {
                                    // line 72
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["price"] = 8;
                                    // line 73
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif (((twig_get_attribute($this->env, $this->source, $context["place"], "type", [], "any", false, false, false, 73) == "Motorcycle") && (twig_get_attribute($this->env, $this->source, $context["place"], "couverture", [], "any", false, false, false, 73) == "Oui"))) {
                                    // line 74
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["price"] = 8;
                                    // line 75
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["c"] = "Covered";
                                    // line 76
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif (((twig_get_attribute($this->env, $this->source, $context["place"], "type", [], "any", false, false, false, 76) == "Motorcycle") && (twig_get_attribute($this->env, $this->source, $context["place"], "couverture", [], "any", false, false, false, 76) == "Non"))) {
                                    // line 77
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["price"] = 6;
                                    // line 78
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif (((twig_get_attribute($this->env, $this->source, $context["place"], "type", [], "any", false, false, false, 78) == "Bike") && (twig_get_attribute($this->env, $this->source, $context["place"], "couverture", [], "any", false, false, false, 78) == "Oui"))) {
                                    // line 79
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["price"] = 6;
                                    // line 80
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["c"] = "Covered";
                                    // line 81
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif (((twig_get_attribute($this->env, $this->source, $context["place"], "type", [], "any", false, false, false, 81) == "Bike") && (twig_get_attribute($this->env, $this->source, $context["place"], "couverture", [], "any", false, false, false, 81) == "Non"))) {
                                    // line 82
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["price"] = 4;
                                    // line 83
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif (((twig_get_attribute($this->env, $this->source, $context["place"], "type", [], "any", false, false, false, 83) == "Truck") && (twig_get_attribute($this->env, $this->source, $context["place"], "couverture", [], "any", false, false, false, 83) == "Oui"))) {
                                    // line 84
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["price"] = 12;
                                    // line 85
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["c"] = "Covered";
                                    // line 86
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 87
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["price"] = 10;
                                    // line 88
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 89
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["place"], "type", [], "any", false, false, false, 89) == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 89, $this->source); })()))) {
                                    // line 90
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["place"], "id", [], "any", false, false, false, 90), "html", null, true);
                                    echo "\">Place ";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["place"], "id", [], "any", false, false, false, 90), "html", null, true);
                                    echo " - ";
                                    echo twig_escape_filter($this->env, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 90, $this->source); })()), "html", null, true);
                                    echo " / ";
                                    echo twig_escape_filter($this->env, twig_round((((isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 90, $this->source); })()) * (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 90, $this->source); })())) / 3600), 2), "html", null, true);
                                    echo " Dh</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 92
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 94
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 95
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"montant\" value=\"";
                        echo twig_escape_filter($this->env, twig_round((((isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 95, $this->source); })()) * (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 95, $this->source); })())) / 3600), 2), "html", null, true);
                        echo "\" name=\"montant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-lg-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary mt-3 col-md-3\" type=\"submit\">Book</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                }
                // line 107
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parking'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 109
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), 'form_end');
            echo "
\t\t\t\t\t\t";
        }
        // line 111
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
        return array (  348 => 111,  343 => 109,  340 => 108,  334 => 107,  318 => 95,  312 => 94,  308 => 92,  296 => 90,  293 => 89,  290 => 88,  287 => 87,  284 => 86,  281 => 85,  278 => 84,  275 => 83,  272 => 82,  269 => 81,  266 => 80,  263 => 79,  260 => 78,  257 => 77,  254 => 76,  251 => 75,  248 => 74,  245 => 73,  242 => 72,  239 => 71,  236 => 70,  233 => 69,  230 => 68,  227 => 67,  222 => 66,  219 => 65,  217 => 64,  213 => 63,  207 => 60,  196 => 54,  190 => 53,  187 => 52,  180 => 49,  173 => 46,  171 => 45,  161 => 38,  154 => 34,  148 => 31,  141 => 26,  138 => 25,  135 => 24,  129 => 23,  126 => 22,  123 => 21,  120 => 20,  115 => 19,  112 => 18,  108 => 17,  103 => 16,  99 => 14,  97 => 13,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
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
\t\t\t\t\t\t\t{% set f = false %}
\t\t\t\t\t\t\t{% for place in places %}
\t\t\t\t\t\t\t\t{% if place.parking.id == parking.id and place.type == type %}
\t\t\t\t\t\t\t\t\t{% set f = true %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% if f %}
\t\t\t\t\t\t\t\t{% if distances[parking.nom] <= 5 %}
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-body rounded-0\" style=\"border-top: 3px solid rgb(222, 226, 230); border-bottom: 0px; border-left: 0px; border-right: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color: black;\">Available Places:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select type=\"choice\" class=\"form-select mt-1\" id=\"place_id\" name=\"{{ field_name(form.place) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set price = 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set c = \"Not Covered\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for place in places %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if parking.id == place.parking.id %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if place.type == \"Car\" and place.couverture == \"Oui\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set price = 10 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set c = \"Covered\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif place.type == \"Car\" and place.couverture == \"Non\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set price = 8 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif place.type == \"Motorcycle\" and place.couverture == \"Oui\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set price = 8 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set c = \"Covered\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif place.type == \"Motorcycle\" and place.couverture == \"Non\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set price = 6 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif place.type == \"Bike\" and place.couverture == \"Oui\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set price = 6 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set c = \"Covered\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif place.type == \"Bike\" and place.couverture == \"Non\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set price = 4 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif place.type == \"Truck\" and place.couverture == \"Oui\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set price = 12 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set c = \"Covered\" %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% set price = 10 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if place.type == type %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ place.id }}\">Place {{ place.id }} - {{ c }} / {{ ((difference * price) / 3600)|round(2) }} Dh</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"montant\" value=\"{{ ((difference * price) / 3600)|round(2) }}\" name=\"montant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-lg-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary mt-3 col-md-3\" type=\"submit\">Book</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t
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

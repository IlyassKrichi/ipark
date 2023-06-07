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

/* reservation/step3.html.twig */
class __TwigTemplate_33bcf39fdaae02edd38f8cc5f5534423 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/step3.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/step3.html.twig"));

        $this->parent = $this->loadTemplate("template2.html.twig", "reservation/step3.html.twig", 1);
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

        echo "Payment
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
        echo "<section id=\"hero\" class=\"hero d-flex align-items-center\" style=\"min-height: 100vh;\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 mx-auto\">
\t\t\t\t\t<div class=\"card rounded-3 border-1\">
\t\t\t\t\t<div class=\"card-header bg-transparent\" style=\"color: black;\"><h1 class=\"card-title text-center color-black\">Payment</h1></div>
\t\t\t\t\t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t<div class=\"card-body\" style=\"color: black;\">
\t\t\t\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "mode_paiement", [], "any", false, false, false, 15), 'row', ["label" => "Payment Card"]);
        echo "
\t\t\t\t\t\t\t<label for=\"lastname\" class=\"form-label\">Last Name</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"lastname\" class=\"form-control\">
\t\t\t\t\t\t\t<label for=\"firstname\" class=\"form-label mt-3\">First Name</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"firstname\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "montant_paye", [], "any", false, false, false, 20), 'widget', ["attr" => ["id" => "montant_paye", "value" => (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 20, $this->source); })()), "required" => "required", "hidden" => "hidden"]]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "date_paiement", [], "any", false, false, false, 21), 'widget', ["attr" => ["id" => "date_paiement", "value" => twig_date_format_filter($this->env, "now", "Y-m-d"), "required" => "required", "hidden" => "hidden"]]);
        echo "
\t\t\t\t\t\t\t\t<label for=\"creditcard\" class=\"form-label mt-3\">Credit Card Number</label>
\t\t\t\t\t\t\t\t<input type=\"tel\" id=\"creditcard\" name=\"creditcard\" inputmode=\"numeric\" class=\"form-control\" maxlength=\"16\" pattern=\"[0-9]{16}\" autocomplete=\"cc-number\" required>
\t\t\t\t\t\t\t\t<label for=\"cvc\" class=\"form-label mt-3\">CVC Code</label>
\t\t\t\t\t\t\t\t<input type=\"tel\" id=\"cvc\" name=\"cvc\" inputmode=\"numeric\" class=\"form-control\" maxlength=\"4\" pattern=\"[0-9]{3,4}\" autocomplete=\"cc-csc\" required>
\t\t\t\t\t\t\t\t<label for=\"expiration\" class=\"form-label mt-3\">Expiration Date</label>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"expiration\" name=\"expiration\" class=\"form-control\" placeholder=\"MM / YY\" pattern=\"(0[1-9]|1[0-2]) \\/ ([0-9]{2})\" autocomplete=\"cc-exp\" required>

\t\t\t\t\t\t\t\t<div class=\"card-footer d-flex justify-content-center bg-transparent mt-3\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-lg btn-primary\" type=\"submit\">
\t\t\t\t\t\t\t\t\tSubmit
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
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
        return "reservation/step3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 36,  114 => 21,  110 => 20,  102 => 15,  97 => 13,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template2.html.twig' %}

{% block title %}Payment
{% endblock %}

{% block body %}
<section id=\"hero\" class=\"hero d-flex align-items-center\" style=\"min-height: 100vh;\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 mx-auto\">
\t\t\t\t\t<div class=\"card rounded-3 border-1\">
\t\t\t\t\t<div class=\"card-header bg-transparent\" style=\"color: black;\"><h1 class=\"card-title text-center color-black\">Payment</h1></div>
\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t<div class=\"card-body\" style=\"color: black;\">
\t\t\t\t\t\t{{ form_row(form.mode_paiement, { label: 'Payment Card' }) }}
\t\t\t\t\t\t\t<label for=\"lastname\" class=\"form-label\">Last Name</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"lastname\" class=\"form-control\">
\t\t\t\t\t\t\t<label for=\"firstname\" class=\"form-label mt-3\">First Name</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"firstname\" class=\"form-control\">
\t\t\t\t\t\t\t\t{{ form_widget(form.montant_paye, {'attr': {'id': 'montant_paye', 'value': price, 'required': 'required', 'hidden': 'hidden'}}) }}
\t\t\t\t\t\t\t\t{{ form_widget(form.date_paiement, {'attr': {'id': 'date_paiement', 'value': \"now\"|date('Y-m-d'), 'required': 'required', 'hidden': 'hidden'}}) }}
\t\t\t\t\t\t\t\t<label for=\"creditcard\" class=\"form-label mt-3\">Credit Card Number</label>
\t\t\t\t\t\t\t\t<input type=\"tel\" id=\"creditcard\" name=\"creditcard\" inputmode=\"numeric\" class=\"form-control\" maxlength=\"16\" pattern=\"[0-9]{16}\" autocomplete=\"cc-number\" required>
\t\t\t\t\t\t\t\t<label for=\"cvc\" class=\"form-label mt-3\">CVC Code</label>
\t\t\t\t\t\t\t\t<input type=\"tel\" id=\"cvc\" name=\"cvc\" inputmode=\"numeric\" class=\"form-control\" maxlength=\"4\" pattern=\"[0-9]{3,4}\" autocomplete=\"cc-csc\" required>
\t\t\t\t\t\t\t\t<label for=\"expiration\" class=\"form-label mt-3\">Expiration Date</label>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"expiration\" name=\"expiration\" class=\"form-control\" placeholder=\"MM / YY\" pattern=\"(0[1-9]|1[0-2]) \\/ ([0-9]{2})\" autocomplete=\"cc-exp\" required>

\t\t\t\t\t\t\t\t<div class=\"card-footer d-flex justify-content-center bg-transparent mt-3\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-lg btn-primary\" type=\"submit\">
\t\t\t\t\t\t\t\t\tSubmit
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</section>
{% endblock %}
", "reservation/step3.html.twig", "D:\\Personal files\\Documents\\ENSIAS IDSIT\\Frameworks Web\\Workspace\\ipark\\templates\\reservation\\step3.html.twig");
    }
}

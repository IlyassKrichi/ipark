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

/* reservation\resevationPdf.html.twig */
class __TwigTemplate_e5050cead8aa9591e730a64cad73227d extends Template
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
        return "template3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation\\resevationPdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation\\resevationPdf.html.twig"));

        $this->parent = $this->loadTemplate("template3.html.twig", "reservation\\resevationPdf.html.twig", 1);
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

        echo "Reservation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Reservation</h1>

    <table class=\"table\">
    
        <tbody>
            <tr>
                <th class=\"text-left\"><span style=\"color: blue;\">Numero de reservation</span></th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-left\"><span style=\"color: blue; text-align: left;\">Id Client</span></th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["clientId"]) || array_key_exists("clientId", $context) ? $context["clientId"] : (function () { throw new RuntimeError('Variable "clientId" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-left\"><span style=\"color: blue;\">Nom</span></th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["clientNom"]) || array_key_exists("clientNom", $context) ? $context["clientNom"] : (function () { throw new RuntimeError('Variable "clientNom" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-left\"><span style=\"color: blue;\">Prenom</span></th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["clientPrenom"]) || array_key_exists("clientPrenom", $context) ? $context["clientPrenom"] : (function () { throw new RuntimeError('Variable "clientPrenom" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-left\"><span style=\"color: blue;\">Email</span></th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["clientEmail"]) || array_key_exists("clientEmail", $context) ? $context["clientEmail"] : (function () { throw new RuntimeError('Variable "clientEmail" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-left\"><span style=\"color: blue;\">GSM</span></th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["clientGsm"]) || array_key_exists("clientGsm", $context) ? $context["clientGsm"] : (function () { throw new RuntimeError('Variable "clientGsm" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "</td>
            </tr>
            

            <tr>
                <th class=\"text-left\"><span style=\"color: blue;\">Date_reservation</span></th>
                <td>";
        // line 39
        ((twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 39, $this->source); })()), "dateReservation", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 39, $this->source); })()), "dateReservation", [], "any", false, false, false, 39), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-left\"><span style=\"color: blue;\">Type_vehicule</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 43, $this->source); })()), "typeVehicule", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
            </tr>
            
        </tbody>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reservation\\resevationPdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 43,  141 => 39,  132 => 33,  125 => 29,  118 => 25,  111 => 21,  104 => 17,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template3.html.twig' %}

{% block title %}Reservation{% endblock %}

{% block body %}
    <h1>Reservation</h1>

    <table class=\"table\">
    
        <tbody>
            <tr>
                <th class=\"text-left\"><span style=\"color: blue;\">Numero de reservation</span></th>
                <td>{{ reservation.id }}</td>
            </tr>
            <tr>
                <th class=\"text-left\"><span style=\"color: blue; text-align: left;\">Id Client</span></th>
                <td>{{ clientId }}</td>
            </tr>
            <tr>
                <th class=\"text-left\"><span style=\"color: blue;\">Nom</span></th>
                <td>{{ clientNom }}</td>
            </tr>
            <tr>
                <th class=\"text-left\"><span style=\"color: blue;\">Prenom</span></th>
                <td>{{ clientPrenom }}</td>
            </tr>
            <tr>
                <th class=\"text-left\"><span style=\"color: blue;\">Email</span></th>
                <td>{{ clientEmail }}</td>
            </tr>
            <tr>
                <th class=\"text-left\"><span style=\"color: blue;\">GSM</span></th>
                <td>{{ clientGsm }}</td>
            </tr>
            

            <tr>
                <th class=\"text-left\"><span style=\"color: blue;\">Date_reservation</span></th>
                <td>{{ reservation.dateReservation ? reservation.dateReservation|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th class=\"text-left\"><span style=\"color: blue;\">Type_vehicule</th>
                <td>{{ reservation.typeVehicule }}</td>
            </tr>
            
        </tbody>
    </table>
{% endblock %}", "reservation\\resevationPdf.html.twig", "D:\\Personal files\\Documents\\ENSIAS IDSIT\\Frameworks Web\\Workspace\\ipark\\templates\\reservation\\resevationPdf.html.twig");
    }
}

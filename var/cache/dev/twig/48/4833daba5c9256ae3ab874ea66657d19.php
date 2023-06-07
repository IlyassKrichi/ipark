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
            'PageTitle' => [$this, 'block_PageTitle'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation\\resevationPdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation\\resevationPdf.html.twig"));

        $this->parent = $this->loadTemplate("template2.html.twig", "reservation\\resevationPdf.html.twig", 1);
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

        echo "Purchase Confirmation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_PageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitle"));

        // line 5
        echo "    <h1>Purchase Confirmation</h1>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 mx-auto\">
\t\t\t\t\t<div class=\"card rounded-3 border-1\">
\t\t\t\t\t<div class=\"card-header bg-transparent\" style=\"color: black;\"><h1 class=\"card-title text-center color-black\">Ticket</h1></div>
\t\t\t\t\t\t<div class=\"card-body\" style=\"color: black;\">
\t\t\t\t\t\t\t <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th class=\"text-left\"><span style=\"color: blue;\"><strong>Last Name:</strong></span></th>
                                        <td>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["clientNom"]) || array_key_exists("clientNom", $context) ? $context["clientNom"] : (function () { throw new RuntimeError('Variable "clientNom" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th class=\"text-left\"><span style=\"color: blue;\">First Name:</span></th>
                                        <td>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["clientPrenom"]) || array_key_exists("clientPrenom", $context) ? $context["clientPrenom"] : (function () { throw new RuntimeError('Variable "clientPrenom" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th class=\"text-left\"><span style=\"color: blue;\">Email:</span></th>
                                        <td>";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["clientEmail"]) || array_key_exists("clientEmail", $context) ? $context["clientEmail"] : (function () { throw new RuntimeError('Variable "clientEmail" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th class=\"text-left\"><span style=\"color: blue;\">Phone:</span></th>
                                        <td>";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["clientGsm"]) || array_key_exists("clientGsm", $context) ? $context["clientGsm"] : (function () { throw new RuntimeError('Variable "clientGsm" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th class=\"text-left\"><span style=\"color: blue;\">Booking Date:</span></th>
                                        <td>";
        // line 35
        ((twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 35, $this->source); })()), "dateReservation", [], "any", false, false, false, 35)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 35, $this->source); })()), "dateReservation", [], "any", false, false, false, 35), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th class=\"text-left\"><span style=\"color: blue;\">Vehicle:</th>
                                        <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 39, $this->source); })()), "typeVehicule", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th class=\"text-left\"><span style=\"color: blue;\">Check-in:</th>
                                        <td>";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["checkin"]) || array_key_exists("checkin", $context) ? $context["checkin"] : (function () { throw new RuntimeError('Variable "checkin" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th class=\"text-left\"><span style=\"color: blue;\">Check-out:</th>
                                        <td>";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["checkout"]) || array_key_exists("checkout", $context) ? $context["checkout"] : (function () { throw new RuntimeError('Variable "checkout" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "</td>
                                    </tr>
                                </tbody>
                            </table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
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
        return array (  171 => 47,  164 => 43,  157 => 39,  150 => 35,  143 => 31,  136 => 27,  129 => 23,  122 => 19,  110 => 9,  100 => 8,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template2.html.twig' %}

{% block title %}Purchase Confirmation{% endblock %}
{% block PageTitle %}
    <h1>Purchase Confirmation</h1>
{% endblock %}

{% block body %}
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 mx-auto\">
\t\t\t\t\t<div class=\"card rounded-3 border-1\">
\t\t\t\t\t<div class=\"card-header bg-transparent\" style=\"color: black;\"><h1 class=\"card-title text-center color-black\">Ticket</h1></div>
\t\t\t\t\t\t<div class=\"card-body\" style=\"color: black;\">
\t\t\t\t\t\t\t <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th class=\"text-left\"><span style=\"color: blue;\"><strong>Last Name:</strong></span></th>
                                        <td>{{ clientNom }}</td>
                                    </tr>
                                    <tr>
                                        <th class=\"text-left\"><span style=\"color: blue;\">First Name:</span></th>
                                        <td>{{ clientPrenom }}</td>
                                    </tr>
                                    <tr>
                                        <th class=\"text-left\"><span style=\"color: blue;\">Email:</span></th>
                                        <td>{{ clientEmail }}</td>
                                    </tr>
                                    <tr>
                                        <th class=\"text-left\"><span style=\"color: blue;\">Phone:</span></th>
                                        <td>{{ clientGsm }}</td>
                                    </tr>
                                    <tr>
                                        <th class=\"text-left\"><span style=\"color: blue;\">Booking Date:</span></th>
                                        <td>{{ reservation.dateReservation ? reservation.dateReservation|date('Y-m-d') : '' }}</td>
                                    </tr>
                                    <tr>
                                        <th class=\"text-left\"><span style=\"color: blue;\">Vehicle:</th>
                                        <td>{{ reservation.typeVehicule }}</td>
                                    </tr>
                                    <tr>
                                        <th class=\"text-left\"><span style=\"color: blue;\">Check-in:</th>
                                        <td>{{ checkin }}</td>
                                    </tr>
                                    <tr>
                                        <th class=\"text-left\"><span style=\"color: blue;\">Check-out:</th>
                                        <td>{{ checkout }}</td>
                                    </tr>
                                </tbody>
                            </table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
{% endblock %}", "reservation\\resevationPdf.html.twig", "D:\\Personal files\\Documents\\ENSIAS IDSIT\\Frameworks Web\\Workspace\\ipark\\templates\\reservation\\resevationPdf.html.twig");
    }
}

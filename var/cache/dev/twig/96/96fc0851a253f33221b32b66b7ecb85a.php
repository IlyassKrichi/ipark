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

/* reservation/admin.html.twig */
class __TwigTemplate_2108378eef42743e1639a2e8188762ab extends Template
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
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/admin.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "reservation/admin.html.twig", 1);
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

        echo "Admin Dashboard";
        
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
        echo "<div class=\"row\">
  <div class=\"col-md-4 mb-4\">
    <a href=";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
        echo " class=\"card shadow rounded text-center\" style=\"text-decoration: none;\">
      <div class=\"card-body my-5\">
        <h5 class=\"card-title\" style=\"font-size: 40px;\">Clients</h5>
      </div>
    </a>
  </div>
  <div class=\"col-md-4 mb-4\">
    <a href=";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        echo " class=\"card shadow rounded text-center\" style=\"text-decoration: none;\">
      <div class=\"card-body my-5\">
        <h5 class=\"card-title\" style=\"font-size: 40px;\">Reservations</h5>
      </div>
    </a>
  </div>
  <div class=\"col-md-4 mb-4\">
    <a href=";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parking_index");
        echo " class=\"card shadow rounded text-center\" style=\"text-decoration: none;\">
      <div class=\"card-body my-5\">
        <h5 class=\"card-title\" style=\"font-size: 40px;\">Parkings</h5>
      </div>
    </a>
  </div>
  <div class=\"col-md-4\">
    <a href=";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paiement_index");
        echo " class=\"card shadow rounded text-center\" style=\"text-decoration: none;\">
      <div class=\"card-body my-5\">
        <h5 class=\"card-title\" style=\"font-size: 40px;\">Payments</h5>
      </div>
    </a>
  </div>
  <div class=\"col-md-4\">
    <a href=";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_place_index");
        echo " class=\"card shadow rounded text-center\" style=\"text-decoration: none;\">
      <div class=\"card-body my-5\">
        <h5 class=\"card-title\" style=\"font-size: 40px;\">Places</h5>
      </div>
    </a>
  </div>
  <div class=\"col-md-4\">
    <a href=";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entree_sortie_index");
        echo " class=\"card shadow rounded text-center\" style=\"text-decoration: none;\">
      <div class=\"card-body my-5\">
        <h5 class=\"card-title\" style=\"font-size: 40px;\">Check in - out</h5>
      </div>
    </a>
  </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reservation/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 44,  151 => 37,  141 => 30,  131 => 23,  121 => 16,  111 => 9,  107 => 7,  97 => 6,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block title %}Admin Dashboard{% endblock %}
{% block PageTitle %}
{% endblock %}
{% block body %}
<div class=\"row\">
  <div class=\"col-md-4 mb-4\">
    <a href={{ path('app_client_index') }} class=\"card shadow rounded text-center\" style=\"text-decoration: none;\">
      <div class=\"card-body my-5\">
        <h5 class=\"card-title\" style=\"font-size: 40px;\">Clients</h5>
      </div>
    </a>
  </div>
  <div class=\"col-md-4 mb-4\">
    <a href={{ path('app_reservation_index') }} class=\"card shadow rounded text-center\" style=\"text-decoration: none;\">
      <div class=\"card-body my-5\">
        <h5 class=\"card-title\" style=\"font-size: 40px;\">Reservations</h5>
      </div>
    </a>
  </div>
  <div class=\"col-md-4 mb-4\">
    <a href={{ path('app_parking_index') }} class=\"card shadow rounded text-center\" style=\"text-decoration: none;\">
      <div class=\"card-body my-5\">
        <h5 class=\"card-title\" style=\"font-size: 40px;\">Parkings</h5>
      </div>
    </a>
  </div>
  <div class=\"col-md-4\">
    <a href={{ path('app_paiement_index') }} class=\"card shadow rounded text-center\" style=\"text-decoration: none;\">
      <div class=\"card-body my-5\">
        <h5 class=\"card-title\" style=\"font-size: 40px;\">Payments</h5>
      </div>
    </a>
  </div>
  <div class=\"col-md-4\">
    <a href={{ path('app_place_index') }} class=\"card shadow rounded text-center\" style=\"text-decoration: none;\">
      <div class=\"card-body my-5\">
        <h5 class=\"card-title\" style=\"font-size: 40px;\">Places</h5>
      </div>
    </a>
  </div>
  <div class=\"col-md-4\">
    <a href={{ path('app_entree_sortie_index') }} class=\"card shadow rounded text-center\" style=\"text-decoration: none;\">
      <div class=\"card-body my-5\">
        <h5 class=\"card-title\" style=\"font-size: 40px;\">Check in - out</h5>
      </div>
    </a>
  </div>
</div>

{% endblock %}
", "reservation/admin.html.twig", "D:\\Personal files\\Documents\\ENSIAS IDSIT\\Frameworks Web\\Workspace\\ipark\\templates\\reservation\\admin.html.twig");
    }
}

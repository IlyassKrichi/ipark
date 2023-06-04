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

/* security/login.html.twig */
class __TwigTemplate_79dde4e9f786e54b8689902b9d75a543 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'modal' => [$this, 'block_modal'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "security/login.html.twig", 1);
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

        echo "Log in!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        // line 7
        echo "\t";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "\t\t\t\t<div class=\"modal fade\" id=\"modalerror\" tabindex=\"-1\" role=\"dialog\">
\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })()), "messageKey", [], "any", false, false, false, 10), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })()), "messageData", [], "any", false, false, false, 10), "security"), "html", null, true);
            echo "</div> 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t";
        }
        // line 14
        echo "\t\t<div class=\"modal fade\" id=\"modalLoginForm\" tabindex=\"-1\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t<h4 class=\"modal-title w-100 font-weight-bold\">Sign in</h4>
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body mx-3\">
\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t<label for=\"inputEmail\">Email</label>
\t\t\t\t\t\t\t<input type=\"email\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control my-1\" autocomplete=\"email\" style=\"padding-top: 12px; padding-bottom: 12px;\" required autofocus>
\t\t\t\t\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control my-1\" autocomplete=\"current-password\" style=\"padding-top: 12px; padding-bottom: 12px;\" required>

\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

\t\t\t\t\t\t\t<div class=\"form-check my-2\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" id=\"flexCheckDefault\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"flexCheckDefault\">
\t\t\t\t\t\t\t\t\tRemember me
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<a style=\"margin-left: 163px\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Forgot password?</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-footer d-flex justify-content-center\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-lg btn-primary\" type=\"submit\">
\t\t\t\t\t\t\t\t\tSign in
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 36,  123 => 29,  116 => 25,  103 => 14,  96 => 10,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block title %}Log in!
{% endblock %}

{% block modal %}
\t{% if error %}
\t\t\t\t<div class=\"modal fade\" id=\"modalerror\" tabindex=\"-1\" role=\"dialog\">
\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div> 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t{% endif %}
\t\t<div class=\"modal fade\" id=\"modalLoginForm\" tabindex=\"-1\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header text-center\">
\t\t\t\t\t\t<h4 class=\"modal-title w-100 font-weight-bold\">Sign in</h4>
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body mx-3\">
\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t<label for=\"inputEmail\">Email</label>
\t\t\t\t\t\t\t<input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control my-1\" autocomplete=\"email\" style=\"padding-top: 12px; padding-bottom: 12px;\" required autofocus>
\t\t\t\t\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control my-1\" autocomplete=\"current-password\" style=\"padding-top: 12px; padding-bottom: 12px;\" required>

\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

\t\t\t\t\t\t\t<div class=\"form-check my-2\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" id=\"flexCheckDefault\">
\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"flexCheckDefault\">
\t\t\t\t\t\t\t\t\tRemember me
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<a style=\"margin-left: 163px\" href=\"{{ path('app_forgot_password_request') }}\">Forgot password?</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-footer d-flex justify-content-center\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-lg btn-primary\" type=\"submit\">
\t\t\t\t\t\t\t\t\tSign in
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
{% endblock %}
", "security/login.html.twig", "D:\\Personal files\\Documents\\ENSIAS IDSIT\\Frameworks Web\\Workspace\\ipark\\templates\\security\\login.html.twig");
    }
}

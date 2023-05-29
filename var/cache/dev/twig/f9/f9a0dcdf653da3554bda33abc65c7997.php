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

/* reservation/scripts.js */
class __TwigTemplate_44e606e8ac9ad0501cfaf2d356aa2ca9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/scripts.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/scripts.js"));

        // line 1
        echo "var dateReservation = document.getElementById(\"date_reservation\");
dateReservation.min = new Date().toISOString().split(\"T\")[0];
dateReservation.valueAsDate = new Date();

var input = document.getElementById(\"adresse\");
var autocomplete = new google.maps.places.Autocomplete(input);
autocomplete.setOptions({
  componentRestrictions: {
    country: \"MA\",
  },
});

autocomplete.addListener(\"place_changed\", function () {
  var place = autocomplete.getPlace();
  // Do something with the place here.
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reservation/scripts.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("var dateReservation = document.getElementById(\"date_reservation\");
dateReservation.min = new Date().toISOString().split(\"T\")[0];
dateReservation.valueAsDate = new Date();

var input = document.getElementById(\"adresse\");
var autocomplete = new google.maps.places.Autocomplete(input);
autocomplete.setOptions({
  componentRestrictions: {
    country: \"MA\",
  },
});

autocomplete.addListener(\"place_changed\", function () {
  var place = autocomplete.getPlace();
  // Do something with the place here.
});
", "reservation/scripts.js", "D:\\Personal files\\Documents\\ENSIAS IDSIT\\Frameworks Web\\Workspace\\ipark\\templates\\reservation\\scripts.js");
    }
}

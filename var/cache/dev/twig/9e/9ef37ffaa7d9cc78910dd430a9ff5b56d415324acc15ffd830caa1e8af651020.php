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

/* default/bookings.html.twig */
class __TwigTemplate_d709791daf77ed8d60c8aaceb1c18cea0a8cd13dada5d9c5a8a06f5028a38540 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/bookings.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/bookings.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"BookingsInfo\">
        <h1 class=\"bookings-Content_Title\">Bookings</h1>
        <h2 class=\"bookings-Content_subTitle\">For a fast booking</h2>
        <p class=\"BookingsInfo-content\">Located near the breathtaking Glen Canyon National Recreation Area, La Quinta Inn & Suites® by Wyndham Page at Lake Powell hotel provides the perfect home base for your northern Arizona adventures. Our pet-friendly hotel provides easy access to the Glen Canyon Dam, Antelope Canyon, Horseshoe Bend, and the Salt River Project – Navajo Generating Station. Make the most of your stay with free daily breakfast, high-speed WiFi, and our outdoor pool.</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/bookings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"BookingsInfo\">
        <h1 class=\"bookings-Content_Title\">Bookings</h1>
        <h2 class=\"bookings-Content_subTitle\">For a fast booking</h2>
        <p class=\"BookingsInfo-content\">Located near the breathtaking Glen Canyon National Recreation Area, La Quinta Inn & Suites® by Wyndham Page at Lake Powell hotel provides the perfect home base for your northern Arizona adventures. Our pet-friendly hotel provides easy access to the Glen Canyon Dam, Antelope Canyon, Horseshoe Bend, and the Salt River Project – Navajo Generating Station. Make the most of your stay with free daily breakfast, high-speed WiFi, and our outdoor pool.</p>
{% endblock %}", "default/bookings.html.twig", "/Users/xearts/ankita/blog/templates/default/bookings.html.twig");
    }
}

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

/* default/rooms.html.twig */
class __TwigTemplate_b7b7de9559438850a9d60e0eb5284949a1836582585afd2f0cb387057558a748 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/rooms.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/rooms.html.twig", 1);
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
        echo "            <div class=\"RoomsInfo\">
                <h1 class=\"rooms-Content_Title\">Rooms</h1>
                <h2 class=\"rooms-Content_subTitle\">For a relaxing and comfortable stay.</h2>
                <p class=\"RoomsInfo-content\"> We offer 3 types of guest rooms each of which reflect a different part of Kyoto and has its own unique design: \"Chic\" rooms reflect Kyoto's stylish reputation; <b>\"Charming\" </b>rooms remind you of Kyoto's late evening sunset and <i>\"Gorgeous\"</i> rooms offer an elegant and relaxing color-scheme.</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/rooms.html.twig";
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
            <div class=\"RoomsInfo\">
                <h1 class=\"rooms-Content_Title\">Rooms</h1>
                <h2 class=\"rooms-Content_subTitle\">For a relaxing and comfortable stay.</h2>
                <p class=\"RoomsInfo-content\"> We offer 3 types of guest rooms each of which reflect a different part of Kyoto and has its own unique design: \"Chic\" rooms reflect Kyoto's stylish reputation; <b>\"Charming\" </b>rooms remind you of Kyoto's late evening sunset and <i>\"Gorgeous\"</i> rooms offer an elegant and relaxing color-scheme.</p>
{% endblock %}", "default/rooms.html.twig", "/Users/xearts/ankita/blog/templates/default/rooms.html.twig");
    }
}

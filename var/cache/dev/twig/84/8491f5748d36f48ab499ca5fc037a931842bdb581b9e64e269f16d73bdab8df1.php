<?php

/* Person/show.html.twig */
class __TwigTemplate_d6d55243ae6d22132301ff390d55844867115d77ba0b2f3bf6cffdffabcb25a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Person/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30b040342dea5353986bdee90aaaf8b3a8b9d5d1e6d50c2f4b6efbbf4a93f5d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b040342dea5353986bdee90aaaf8b3a8b9d5d1e6d50c2f4b6efbbf4a93f5d6->enter($__internal_30b040342dea5353986bdee90aaaf8b3a8b9d5d1e6d50c2f4b6efbbf4a93f5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Person/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30b040342dea5353986bdee90aaaf8b3a8b9d5d1e6d50c2f4b6efbbf4a93f5d6->leave($__internal_30b040342dea5353986bdee90aaaf8b3a8b9d5d1e6d50c2f4b6efbbf4a93f5d6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c52fe805ade1b38d52b9616b5ea71e33bac16261bed04cadcf63004a7589da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c52fe805ade1b38d52b9616b5ea71e33bac16261bed04cadcf63004a7589da1->enter($__internal_3c52fe805ade1b38d52b9616b5ea71e33bac16261bed04cadcf63004a7589da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Information sur l'inventaire de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["persons"]) || array_key_exists("persons", $context) ? $context["persons"] : (function () { throw new Twig_Error_Runtime('Variable "persons" does not exist.', 3, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo " ";
        
        $__internal_3c52fe805ade1b38d52b9616b5ea71e33bac16261bed04cadcf63004a7589da1->leave($__internal_3c52fe805ade1b38d52b9616b5ea71e33bac16261bed04cadcf63004a7589da1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_65cadfac7af40271de3b1c66ba2a07368efa16c2c37a939c6f9b503c220de026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65cadfac7af40271de3b1c66ba2a07368efa16c2c37a939c6f9b503c220de026->enter($__internal_65cadfac7af40271de3b1c66ba2a07368efa16c2c37a939c6f9b503c220de026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1> Information sur l'inventaire de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["persons"]) || array_key_exists("persons", $context) ? $context["persons"] : (function () { throw new Twig_Error_Runtime('Variable "persons" does not exist.', 6, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</h1>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["persons"]) || array_key_exists("persons", $context) ? $context["persons"] : (function () { throw new Twig_Error_Runtime('Variable "persons" does not exist.', 7, $this->getSourceContext()); })()), "inventories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["inv"]) {
            // line 8
            echo "        Matière : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["inv"], "material", array()), "name", array()), "html", null, true);
            echo "  Nombres : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["inv"], "numberOfItem", array()), "html", null, true);
            echo " </br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
        
        $__internal_65cadfac7af40271de3b1c66ba2a07368efa16c2c37a939c6f9b503c220de026->leave($__internal_65cadfac7af40271de3b1c66ba2a07368efa16c2c37a939c6f9b503c220de026_prof);

    }

    public function getTemplateName()
    {
        return "Person/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 10,  64 => 8,  60 => 7,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} Information sur l'inventaire de {{ persons.name }} {% endblock %}

{% block body %}
    <h1> Information sur l'inventaire de {{ persons.name }}</h1>
    {% for inv in  persons.inventories %}
        Matière : {{ inv.material.name }}  Nombres : {{ inv.numberOfItem }} </br>
    {% endfor %}

{% endblock %}", "Person/show.html.twig", "/Users/jeremyclerot/Documents/PHP/TPZ2/templates/Person/show.html.twig");
    }
}

<?php

/* Inventory/index.html.twig */
class __TwigTemplate_b32d79509dface02bedf9ec372d9cbf0fee5d105d1a54fa341ecff144f59b796 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Inventory/index.html.twig", 1);
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
        $__internal_75d87ca93b1e2f7da0ec255af50bc2fe2cfb640ba548d2b703904dd88cbac13a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d87ca93b1e2f7da0ec255af50bc2fe2cfb640ba548d2b703904dd88cbac13a->enter($__internal_75d87ca93b1e2f7da0ec255af50bc2fe2cfb640ba548d2b703904dd88cbac13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Inventory/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75d87ca93b1e2f7da0ec255af50bc2fe2cfb640ba548d2b703904dd88cbac13a->leave($__internal_75d87ca93b1e2f7da0ec255af50bc2fe2cfb640ba548d2b703904dd88cbac13a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_16ee94caef8438f630babd2df3d8d1f630a21fa42fe5eb2895420c1d0da9eee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ee94caef8438f630babd2df3d8d1f630a21fa42fe5eb2895420c1d0da9eee0->enter($__internal_16ee94caef8438f630babd2df3d8d1f630a21fa42fe5eb2895420c1d0da9eee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " INDEX ! ";
        
        $__internal_16ee94caef8438f630babd2df3d8d1f630a21fa42fe5eb2895420c1d0da9eee0->leave($__internal_16ee94caef8438f630babd2df3d8d1f630a21fa42fe5eb2895420c1d0da9eee0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_07f35aaad7fa7fd8b90aff4b3001a9e164faf4a6e7219b8ac2670e2734a2250d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f35aaad7fa7fd8b90aff4b3001a9e164faf4a6e7219b8ac2670e2734a2250d->enter($__internal_07f35aaad7fa7fd8b90aff4b3001a9e164faf4a6e7219b8ac2670e2734a2250d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new Twig_Error_Runtime('Variable "inventory" does not exist.', 6, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["User"]) {
            // line 7
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['User'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_07f35aaad7fa7fd8b90aff4b3001a9e164faf4a6e7219b8ac2670e2734a2250d->leave($__internal_07f35aaad7fa7fd8b90aff4b3001a9e164faf4a6e7219b8ac2670e2734a2250d_prof);

    }

    public function getTemplateName()
    {
        return "Inventory/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} INDEX ! {% endblock %}

{% block body %}
    {% for User in  inventory %}
    {% endfor %}
{% endblock %}

", "Inventory/index.html.twig", "/Users/jeremyclerot/Documents/PHP/TPZ2/templates/Inventory/index.html.twig");
    }
}

<?php

/* Inventory/new.html.twig */
class __TwigTemplate_a1d33d697c26942af43cf75a4d364c87e19478217f5f219603daccd30405eda2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Inventory/new.html.twig", 1);
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
        $__internal_ff7b519dc35b67f6156ab19eda6a1544ff516f33a77fcd55af77132130c76bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7b519dc35b67f6156ab19eda6a1544ff516f33a77fcd55af77132130c76bd0->enter($__internal_ff7b519dc35b67f6156ab19eda6a1544ff516f33a77fcd55af77132130c76bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Inventory/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff7b519dc35b67f6156ab19eda6a1544ff516f33a77fcd55af77132130c76bd0->leave($__internal_ff7b519dc35b67f6156ab19eda6a1544ff516f33a77fcd55af77132130c76bd0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b35e6302eeb908abdca7cd3e5c2e7607bf0828c3b34a9dec28e300f485a7b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b35e6302eeb908abdca7cd3e5c2e7607bf0828c3b34a9dec28e300f485a7b7d->enter($__internal_9b35e6302eeb908abdca7cd3e5c2e7607bf0828c3b34a9dec28e300f485a7b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " New Inventory";
        
        $__internal_9b35e6302eeb908abdca7cd3e5c2e7607bf0828c3b34a9dec28e300f485a7b7d->leave($__internal_9b35e6302eeb908abdca7cd3e5c2e7607bf0828c3b34a9dec28e300f485a7b7d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7cf48cafe3aa2d5b590c84ac0b60c28058c2ad8b6340b7918a36a2625af9d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7cf48cafe3aa2d5b590c84ac0b60c28058c2ad8b6340b7918a36a2625af9d34->enter($__internal_e7cf48cafe3aa2d5b590c84ac0b60c28058c2ad8b6340b7918a36a2625af9d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>New Inventory </h1>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

";
        
        $__internal_e7cf48cafe3aa2d5b590c84ac0b60c28058c2ad8b6340b7918a36a2625af9d34->leave($__internal_e7cf48cafe3aa2d5b590c84ac0b60c28058c2ad8b6340b7918a36a2625af9d34_prof);

    }

    public function getTemplateName()
    {
        return "Inventory/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} New Inventory{% endblock %}

{% block body %}
    <h1>New Inventory </h1>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}

{% endblock %}

", "Inventory/new.html.twig", "/Users/jeremyclerot/Documents/PHP/TPZ2/templates/Inventory/new.html.twig");
    }
}

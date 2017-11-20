<?php

/* Material/new.html.twig */
class __TwigTemplate_5cd8e137537e302132e720964f29cc0c2dafc7e1923f8091afe87969ad54a56d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Material/new.html.twig", 1);
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
        $__internal_c90d55397535e92bf9ed05a3c97a25d17c4299d46d9aa71d906ca0df95a02904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90d55397535e92bf9ed05a3c97a25d17c4299d46d9aa71d906ca0df95a02904->enter($__internal_c90d55397535e92bf9ed05a3c97a25d17c4299d46d9aa71d906ca0df95a02904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Material/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c90d55397535e92bf9ed05a3c97a25d17c4299d46d9aa71d906ca0df95a02904->leave($__internal_c90d55397535e92bf9ed05a3c97a25d17c4299d46d9aa71d906ca0df95a02904_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aba9e9bf0a19fed8d4db81ac0decc5ba9ca296abc0ca79d5459615f2589adf5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba9e9bf0a19fed8d4db81ac0decc5ba9ca296abc0ca79d5459615f2589adf5d->enter($__internal_aba9e9bf0a19fed8d4db81ac0decc5ba9ca296abc0ca79d5459615f2589adf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " New Material";
        
        $__internal_aba9e9bf0a19fed8d4db81ac0decc5ba9ca296abc0ca79d5459615f2589adf5d->leave($__internal_aba9e9bf0a19fed8d4db81ac0decc5ba9ca296abc0ca79d5459615f2589adf5d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cec7e87dac86e4f607b1896e10f2a0851a17ea4d6d2649e146bd3c5090b84bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cec7e87dac86e4f607b1896e10f2a0851a17ea4d6d2649e146bd3c5090b84bd->enter($__internal_5cec7e87dac86e4f607b1896e10f2a0851a17ea4d6d2649e146bd3c5090b84bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>New Material </h1>
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
        
        $__internal_5cec7e87dac86e4f607b1896e10f2a0851a17ea4d6d2649e146bd3c5090b84bd->leave($__internal_5cec7e87dac86e4f607b1896e10f2a0851a17ea4d6d2649e146bd3c5090b84bd_prof);

    }

    public function getTemplateName()
    {
        return "Material/new.html.twig";
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

{% block title %} New Material{% endblock %}

{% block body %}
    <h1>New Material </h1>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}

{% endblock %}

", "Material/new.html.twig", "/Users/jeremyclerot/Documents/PHP/TPZ2/templates/Material/new.html.twig");
    }
}

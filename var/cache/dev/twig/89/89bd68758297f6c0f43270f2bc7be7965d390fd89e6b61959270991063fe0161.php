<?php

/* Person/new.html.twig */
class __TwigTemplate_c706ac2da0e7f00730fe2c499e5ff8c0d822aaa7893c9bbd141a1d78b0c28960 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Person/new.html.twig", 1);
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
        $__internal_c0407908caafd1409f75d2b9a199fcefce673e3597bf60f9d1e3be651c3985ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0407908caafd1409f75d2b9a199fcefce673e3597bf60f9d1e3be651c3985ed->enter($__internal_c0407908caafd1409f75d2b9a199fcefce673e3597bf60f9d1e3be651c3985ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Person/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0407908caafd1409f75d2b9a199fcefce673e3597bf60f9d1e3be651c3985ed->leave($__internal_c0407908caafd1409f75d2b9a199fcefce673e3597bf60f9d1e3be651c3985ed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3229d21d936a99788e6f83bdd6e6b21611a0dfc760898cfc31ab7265e13d9934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3229d21d936a99788e6f83bdd6e6b21611a0dfc760898cfc31ab7265e13d9934->enter($__internal_3229d21d936a99788e6f83bdd6e6b21611a0dfc760898cfc31ab7265e13d9934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " New Person";
        
        $__internal_3229d21d936a99788e6f83bdd6e6b21611a0dfc760898cfc31ab7265e13d9934->leave($__internal_3229d21d936a99788e6f83bdd6e6b21611a0dfc760898cfc31ab7265e13d9934_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa22f651e3593a541317e92fa0df65722882f9156ec6f6278c7cfa27f34fb6be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa22f651e3593a541317e92fa0df65722882f9156ec6f6278c7cfa27f34fb6be->enter($__internal_aa22f651e3593a541317e92fa0df65722882f9156ec6f6278c7cfa27f34fb6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>New Person </h1>
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
        
        $__internal_aa22f651e3593a541317e92fa0df65722882f9156ec6f6278c7cfa27f34fb6be->leave($__internal_aa22f651e3593a541317e92fa0df65722882f9156ec6f6278c7cfa27f34fb6be_prof);

    }

    public function getTemplateName()
    {
        return "Person/new.html.twig";
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

{% block title %} New Person{% endblock %}

{% block body %}
    <h1>New Person </h1>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}

{% endblock %}

", "Person/new.html.twig", "/Users/jeremyclerot/Documents/PHP/TPZ2/templates/Person/new.html.twig");
    }
}

<?php

/* index.html.twig */
class __TwigTemplate_946bdf50a5056beab9bbc99cb74ba98d8e95eb0d5233aa435ba4bef392b950df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
        $__internal_f23b866ea8f7e0af65897377dac368b7fc76c44a219c631bcd36a79348023005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23b866ea8f7e0af65897377dac368b7fc76c44a219c631bcd36a79348023005->enter($__internal_f23b866ea8f7e0af65897377dac368b7fc76c44a219c631bcd36a79348023005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f23b866ea8f7e0af65897377dac368b7fc76c44a219c631bcd36a79348023005->leave($__internal_f23b866ea8f7e0af65897377dac368b7fc76c44a219c631bcd36a79348023005_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ca86d014da9d685e00b806214ad5273ea18b7d6c73a265cc9efb6e0463662a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca86d014da9d685e00b806214ad5273ea18b7d6c73a265cc9efb6e0463662a7->enter($__internal_3ca86d014da9d685e00b806214ad5273ea18b7d6c73a265cc9efb6e0463662a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Index
";
        
        $__internal_3ca86d014da9d685e00b806214ad5273ea18b7d6c73a265cc9efb6e0463662a7->leave($__internal_3ca86d014da9d685e00b806214ad5273ea18b7d6c73a265cc9efb6e0463662a7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a973190878bf72047f7a4c5e3d9556c63dc0c8401bdd27c9c356a557a110dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a973190878bf72047f7a4c5e3d9556c63dc0c8401bdd27c9c356a557a110dec->enter($__internal_6a973190878bf72047f7a4c5e3d9556c63dc0c8401bdd27c9c356a557a110dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6a973190878bf72047f7a4c5e3d9556c63dc0c8401bdd27c9c356a557a110dec->leave($__internal_6a973190878bf72047f7a4c5e3d9556c63dc0c8401bdd27c9c356a557a110dec_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
    Index
{% endblock title %}

{% block body %}
{% endblock body %}", "index.html.twig", "/Users/jeremyclerot/Documents/PHP/TPZ2/templates/index.html.twig");
    }
}

<?php

/* base.html.twig */
class __TwigTemplate_d4a037215bc366522c19a0da06735f5c209916f05c72a3241da90ca4a97576e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c242e9d58902102d5097f63584dd944285df2c8734480b585ec1e3509658ffc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c242e9d58902102d5097f63584dd944285df2c8734480b585ec1e3509658ffc8->enter($__internal_c242e9d58902102d5097f63584dd944285df2c8734480b585ec1e3509658ffc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_c242e9d58902102d5097f63584dd944285df2c8734480b585ec1e3509658ffc8->leave($__internal_c242e9d58902102d5097f63584dd944285df2c8734480b585ec1e3509658ffc8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_917faf44b79b76763b33151a267fa14334a102835a6fd7fa57129187e34ce0e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917faf44b79b76763b33151a267fa14334a102835a6fd7fa57129187e34ce0e9->enter($__internal_917faf44b79b76763b33151a267fa14334a102835a6fd7fa57129187e34ce0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_917faf44b79b76763b33151a267fa14334a102835a6fd7fa57129187e34ce0e9->leave($__internal_917faf44b79b76763b33151a267fa14334a102835a6fd7fa57129187e34ce0e9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_51ce53747a5d42541f51bccd77f720c7e23adc642032d857498ffaa4e4bdd6ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ce53747a5d42541f51bccd77f720c7e23adc642032d857498ffaa4e4bdd6ab->enter($__internal_51ce53747a5d42541f51bccd77f720c7e23adc642032d857498ffaa4e4bdd6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_51ce53747a5d42541f51bccd77f720c7e23adc642032d857498ffaa4e4bdd6ab->leave($__internal_51ce53747a5d42541f51bccd77f720c7e23adc642032d857498ffaa4e4bdd6ab_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_804d28120fa8d0c9d511d1a30ed6551e29e4aaf6b59aeff9dbc9fe809866659f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804d28120fa8d0c9d511d1a30ed6551e29e4aaf6b59aeff9dbc9fe809866659f->enter($__internal_804d28120fa8d0c9d511d1a30ed6551e29e4aaf6b59aeff9dbc9fe809866659f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_804d28120fa8d0c9d511d1a30ed6551e29e4aaf6b59aeff9dbc9fe809866659f->leave($__internal_804d28120fa8d0c9d511d1a30ed6551e29e4aaf6b59aeff9dbc9fe809866659f_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e3f30f6b97dca6fe86c31fa7701b4f31e37170d5945031f82b89642aa30eb6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e3f30f6b97dca6fe86c31fa7701b4f31e37170d5945031f82b89642aa30eb6b->enter($__internal_3e3f30f6b97dca6fe86c31fa7701b4f31e37170d5945031f82b89642aa30eb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3e3f30f6b97dca6fe86c31fa7701b4f31e37170d5945031f82b89642aa30eb6b->leave($__internal_3e3f30f6b97dca6fe86c31fa7701b4f31e37170d5945031f82b89642aa30eb6b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 10,  79 => 9,  68 => 6,  56 => 5,  47 => 11,  44 => 10,  42 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/jeremyclerot/Documents/PHP/TPZ2/templates/base.html.twig");
    }
}

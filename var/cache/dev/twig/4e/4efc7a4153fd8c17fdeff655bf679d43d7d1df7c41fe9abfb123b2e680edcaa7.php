<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_9c86c846ecc1b0fab6cf8b55cc9a900abf6b556c052dff43bfa94f1e326af347 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e86010111ffea350e9621e31aa66a5975cabf1441d5de016f5b7945aec1217c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e86010111ffea350e9621e31aa66a5975cabf1441d5de016f5b7945aec1217c0->enter($__internal_e86010111ffea350e9621e31aa66a5975cabf1441d5de016f5b7945aec1217c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e86010111ffea350e9621e31aa66a5975cabf1441d5de016f5b7945aec1217c0->leave($__internal_e86010111ffea350e9621e31aa66a5975cabf1441d5de016f5b7945aec1217c0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}

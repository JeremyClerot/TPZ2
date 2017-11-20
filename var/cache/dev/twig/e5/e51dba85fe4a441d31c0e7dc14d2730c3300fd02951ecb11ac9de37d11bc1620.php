<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_51e96d265ffd442c9acf4f9f0f00b0bea77a11d99ac9aca29cf0e3ffe9a13059 extends Twig_Template
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
        $__internal_0f3c4d920a2d347049376d5a1e973ac0134e50d14812e6d1794f6dd32d1172b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3c4d920a2d347049376d5a1e973ac0134e50d14812e6d1794f6dd32d1172b2->enter($__internal_0f3c4d920a2d347049376d5a1e973ac0134e50d14812e6d1794f6dd32d1172b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_0f3c4d920a2d347049376d5a1e973ac0134e50d14812e6d1794f6dd32d1172b2->leave($__internal_0f3c4d920a2d347049376d5a1e973ac0134e50d14812e6d1794f6dd32d1172b2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}

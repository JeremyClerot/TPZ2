<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_a59504698e2c6c2a1b222d46e01540b4f8ea6512eee0ee5e91767be113a1e6c6 extends Twig_Template
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
        $__internal_2b5bd559cf875dfbcd17f7b512236de0328d4d125df5e6fa80f9cf114f532de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b5bd559cf875dfbcd17f7b512236de0328d4d125df5e6fa80f9cf114f532de2->enter($__internal_2b5bd559cf875dfbcd17f7b512236de0328d4d125df5e6fa80f9cf114f532de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2b5bd559cf875dfbcd17f7b512236de0328d4d125df5e6fa80f9cf114f532de2->leave($__internal_2b5bd559cf875dfbcd17f7b512236de0328d4d125df5e6fa80f9cf114f532de2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/twig-bundle/Resources/views/Exception/error.txt.twig");
    }
}

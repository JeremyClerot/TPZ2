<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_7ec04a8ab54a906cce9afe851a984d2728f27995d26373971bb05f9a02bb67a0 extends Twig_Template
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
        $__internal_b760288a7da9ee426d2e11a54522b7d04a576cf8538d0ef89b0712713c25ff2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b760288a7da9ee426d2e11a54522b7d04a576cf8538d0ef89b0712713c25ff2d->enter($__internal_b760288a7da9ee426d2e11a54522b7d04a576cf8538d0ef89b0712713c25ff2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_b760288a7da9ee426d2e11a54522b7d04a576cf8538d0ef89b0712713c25ff2d->leave($__internal_b760288a7da9ee426d2e11a54522b7d04a576cf8538d0ef89b0712713c25ff2d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/twig-bundle/Resources/views/Exception/error.js.twig");
    }
}

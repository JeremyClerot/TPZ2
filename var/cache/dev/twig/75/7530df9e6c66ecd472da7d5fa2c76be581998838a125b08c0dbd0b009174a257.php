<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_37cd4b9304be9f33d3d8b74463abb0a828f5a705596f5ed7b3f8f8987cb9ea3d extends Twig_Template
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
        $__internal_a937479e12919757e6cb6c15891045f49cdaaff498cd7b1bd71e096c6bc19568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a937479e12919757e6cb6c15891045f49cdaaff498cd7b1bd71e096c6bc19568->enter($__internal_a937479e12919757e6cb6c15891045f49cdaaff498cd7b1bd71e096c6bc19568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_a937479e12919757e6cb6c15891045f49cdaaff498cd7b1bd71e096c6bc19568->leave($__internal_a937479e12919757e6cb6c15891045f49cdaaff498cd7b1bd71e096c6bc19568_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/twig-bundle/Resources/views/Exception/error.css.twig");
    }
}

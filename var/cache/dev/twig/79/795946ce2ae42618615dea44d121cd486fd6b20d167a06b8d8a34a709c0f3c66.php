<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_cfb00ee3563c63d6cc27ef409ac174b6403021597771674bbce59acda2241cc6 extends Twig_Template
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
        $__internal_5a7da3f818459b359daf9f085100e9098688192b24b28a524dc74decb2255d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7da3f818459b359daf9f085100e9098688192b24b28a524dc74decb2255d4d->enter($__internal_5a7da3f818459b359daf9f085100e9098688192b24b28a524dc74decb2255d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_5a7da3f818459b359daf9f085100e9098688192b24b28a524dc74decb2255d4d->leave($__internal_5a7da3f818459b359daf9f085100e9098688192b24b28a524dc74decb2255d4d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}

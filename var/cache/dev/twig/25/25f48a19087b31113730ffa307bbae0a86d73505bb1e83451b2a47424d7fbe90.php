<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ee65b321406a0d2ed6143a885dc4a3e3101884187b59c40a11da024d7c2cfde9 extends Twig_Template
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
        $__internal_5e0d55f6607323703d41e80485bf9141f4bcd1b82fbd693375d21ce17912aabd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0d55f6607323703d41e80485bf9141f4bcd1b82fbd693375d21ce17912aabd->enter($__internal_5e0d55f6607323703d41e80485bf9141f4bcd1b82fbd693375d21ce17912aabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_5e0d55f6607323703d41e80485bf9141f4bcd1b82fbd693375d21ce17912aabd->leave($__internal_5e0d55f6607323703d41e80485bf9141f4bcd1b82fbd693375d21ce17912aabd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}

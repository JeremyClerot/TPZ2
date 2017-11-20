<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_42200fa87594f84ca008300e8c635020c008ade650754a3d04d9d047f70f3b33 extends Twig_Template
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
        $__internal_7c03cebe3d5c4c4b9ac35d1d97914bf70482abef82a608a85b016bf26496f9a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c03cebe3d5c4c4b9ac35d1d97914bf70482abef82a608a85b016bf26496f9a2->enter($__internal_7c03cebe3d5c4c4b9ac35d1d97914bf70482abef82a608a85b016bf26496f9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7c03cebe3d5c4c4b9ac35d1d97914bf70482abef82a608a85b016bf26496f9a2->leave($__internal_7c03cebe3d5c4c4b9ac35d1d97914bf70482abef82a608a85b016bf26496f9a2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}

<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_fc36cb96ae171a94e2f66cedd21df13de170a55f4e8b3cac25ca7db32028f394 extends Twig_Template
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
        $__internal_045a47b07fef3ae5465db91d657d77d8c10f456edf9bc64d47d4b52b723c8b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045a47b07fef3ae5465db91d657d77d8c10f456edf9bc64d47d4b52b723c8b91->enter($__internal_045a47b07fef3ae5465db91d657d77d8c10f456edf9bc64d47d4b52b723c8b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_045a47b07fef3ae5465db91d657d77d8c10f456edf9bc64d47d4b52b723c8b91->leave($__internal_045a47b07fef3ae5465db91d657d77d8c10f456edf9bc64d47d4b52b723c8b91_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}

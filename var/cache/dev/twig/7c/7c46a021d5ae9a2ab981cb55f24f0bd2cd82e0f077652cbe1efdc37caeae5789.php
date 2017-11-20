<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_ac2f035427de9424e29d162f5e691dcbf8a9ebf34c2bcca50bc203ecfed3222c extends Twig_Template
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
        $__internal_886e8a6688b6caa47f2dabc09fd40ad893116eef5232ec1b66280b0ffb615f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_886e8a6688b6caa47f2dabc09fd40ad893116eef5232ec1b66280b0ffb615f39->enter($__internal_886e8a6688b6caa47f2dabc09fd40ad893116eef5232ec1b66280b0ffb615f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_886e8a6688b6caa47f2dabc09fd40ad893116eef5232ec1b66280b0ffb615f39->leave($__internal_886e8a6688b6caa47f2dabc09fd40ad893116eef5232ec1b66280b0ffb615f39_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/twig-bundle/Resources/views/Exception/error.json.twig");
    }
}

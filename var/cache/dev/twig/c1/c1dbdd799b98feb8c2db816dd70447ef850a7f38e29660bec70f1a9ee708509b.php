<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_2c9f0272afa066f6a384ca574c60005f3f1194c8d05f176c7bd575c71afe0159 extends Twig_Template
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
        $__internal_67256514b9a2c32099a9f2ac19cce1db2682a0daaa0c4ec69e023798bea3f900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67256514b9a2c32099a9f2ac19cce1db2682a0daaa0c4ec69e023798bea3f900->enter($__internal_67256514b9a2c32099a9f2ac19cce1db2682a0daaa0c4ec69e023798bea3f900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_67256514b9a2c32099a9f2ac19cce1db2682a0daaa0c4ec69e023798bea3f900->leave($__internal_67256514b9a2c32099a9f2ac19cce1db2682a0daaa0c4ec69e023798bea3f900_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}

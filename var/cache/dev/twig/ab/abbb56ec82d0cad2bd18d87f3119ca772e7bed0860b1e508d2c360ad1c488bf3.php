<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_d34826e629b5d0970aae8252012ba549d3ce63b20185b646cba0c0efaa1ea914 extends Twig_Template
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
        $__internal_e17f930b2970e93806b05824cb28f4557a58d2192c4edbcf593c4fba8fadabfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17f930b2970e93806b05824cb28f4557a58d2192c4edbcf593c4fba8fadabfd->enter($__internal_e17f930b2970e93806b05824cb28f4557a58d2192c4edbcf593c4fba8fadabfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e17f930b2970e93806b05824cb28f4557a58d2192c4edbcf593c4fba8fadabfd->leave($__internal_e17f930b2970e93806b05824cb28f4557a58d2192c4edbcf593c4fba8fadabfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}

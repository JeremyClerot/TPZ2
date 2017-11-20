<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_88e8a104e63c84966ca4105577ae2ebe825fbe8472b4656af1149eecbaf7b09c extends Twig_Template
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
        $__internal_1d4ab112dea5579607c098db5681980fec571c1951ceec3d17c2fbf0a7882d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4ab112dea5579607c098db5681980fec571c1951ceec3d17c2fbf0a7882d8d->enter($__internal_1d4ab112dea5579607c098db5681980fec571c1951ceec3d17c2fbf0a7882d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1d4ab112dea5579607c098db5681980fec571c1951ceec3d17c2fbf0a7882d8d->leave($__internal_1d4ab112dea5579607c098db5681980fec571c1951ceec3d17c2fbf0a7882d8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/email_widget.html.php");
    }
}

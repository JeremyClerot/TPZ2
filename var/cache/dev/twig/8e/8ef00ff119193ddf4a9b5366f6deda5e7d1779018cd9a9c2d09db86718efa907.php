<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_81dcc03fa58ee2c748c66b70e01273a6c57806e62a777baa3d4a9d263b572bda extends Twig_Template
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
        $__internal_526fe87c905a2152f8851fca62f42a73b007c247ca4417da87ec9adab7992f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_526fe87c905a2152f8851fca62f42a73b007c247ca4417da87ec9adab7992f08->enter($__internal_526fe87c905a2152f8851fca62f42a73b007c247ca4417da87ec9adab7992f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_526fe87c905a2152f8851fca62f42a73b007c247ca4417da87ec9adab7992f08->leave($__internal_526fe87c905a2152f8851fca62f42a73b007c247ca4417da87ec9adab7992f08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}

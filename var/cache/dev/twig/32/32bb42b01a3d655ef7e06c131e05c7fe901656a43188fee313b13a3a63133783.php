<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_5d96cf8d2043a79d0b7dd11591cd39a929b5d09a5b1a2bb61f08fac28d1fd5fb extends Twig_Template
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
        $__internal_6e77a2b2cd6fa95576b8600816b5af22c03eebcef7781b28b70aac2c6a65a285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e77a2b2cd6fa95576b8600816b5af22c03eebcef7781b28b70aac2c6a65a285->enter($__internal_6e77a2b2cd6fa95576b8600816b5af22c03eebcef7781b28b70aac2c6a65a285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6e77a2b2cd6fa95576b8600816b5af22c03eebcef7781b28b70aac2c6a65a285->leave($__internal_6e77a2b2cd6fa95576b8600816b5af22c03eebcef7781b28b70aac2c6a65a285_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_compound.html.php");
    }
}

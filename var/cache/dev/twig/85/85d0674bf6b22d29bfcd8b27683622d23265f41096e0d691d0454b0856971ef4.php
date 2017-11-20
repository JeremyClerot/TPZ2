<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a5d51ef21c601fac48df32a42d26315c2727b9af131e076ca07f42a099f59e42 extends Twig_Template
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
        $__internal_e6395787068823fc6fd6356164d6657563b68c4b254c127ff9a3a1516ea51330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6395787068823fc6fd6356164d6657563b68c4b254c127ff9a3a1516ea51330->enter($__internal_e6395787068823fc6fd6356164d6657563b68c4b254c127ff9a3a1516ea51330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e6395787068823fc6fd6356164d6657563b68c4b254c127ff9a3a1516ea51330->leave($__internal_e6395787068823fc6fd6356164d6657563b68c4b254c127ff9a3a1516ea51330_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}

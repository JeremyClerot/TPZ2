<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_af103d6d5d0a502e3dc77a6dcef4bf796502bf83073379593be6713de2c70d5c extends Twig_Template
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
        $__internal_94cd8cf72f3a0da3754695e33312e4d581a775f3051e5393a16d59a1cd354c67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94cd8cf72f3a0da3754695e33312e4d581a775f3051e5393a16d59a1cd354c67->enter($__internal_94cd8cf72f3a0da3754695e33312e4d581a775f3051e5393a16d59a1cd354c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_94cd8cf72f3a0da3754695e33312e4d581a775f3051e5393a16d59a1cd354c67->leave($__internal_94cd8cf72f3a0da3754695e33312e4d581a775f3051e5393a16d59a1cd354c67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}

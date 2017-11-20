<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_177d4a5d939086a8e4af005ed55ad1161d5f9db27d821729f4d12272c28008ce extends Twig_Template
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
        $__internal_2ee85a1cbc344cafa5f396575060d3311eb153e4c5955dc02ab790417fe86356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee85a1cbc344cafa5f396575060d3311eb153e4c5955dc02ab790417fe86356->enter($__internal_2ee85a1cbc344cafa5f396575060d3311eb153e4c5955dc02ab790417fe86356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_2ee85a1cbc344cafa5f396575060d3311eb153e4c5955dc02ab790417fe86356->leave($__internal_2ee85a1cbc344cafa5f396575060d3311eb153e4c5955dc02ab790417fe86356_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}

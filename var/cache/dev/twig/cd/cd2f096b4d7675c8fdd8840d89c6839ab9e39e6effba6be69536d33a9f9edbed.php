<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_433637036a39f68a1ed0e7009f6d49111798520b1a4eb00689e7e8552119c083 extends Twig_Template
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
        $__internal_57e6f9e95d084e1d103d9673bbb2a203db62ef3e2c9545de1531a4799687718e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e6f9e95d084e1d103d9673bbb2a203db62ef3e2c9545de1531a4799687718e->enter($__internal_57e6f9e95d084e1d103d9673bbb2a203db62ef3e2c9545de1531a4799687718e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_57e6f9e95d084e1d103d9673bbb2a203db62ef3e2c9545de1531a4799687718e->leave($__internal_57e6f9e95d084e1d103d9673bbb2a203db62ef3e2c9545de1531a4799687718e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}

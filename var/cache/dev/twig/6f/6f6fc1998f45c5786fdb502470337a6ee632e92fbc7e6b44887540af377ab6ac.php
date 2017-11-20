<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_3e394aa7db9941a85b0361e82a159ebb3b8220446a387cc10f8a6a5e3b63edd2 extends Twig_Template
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
        $__internal_de78da414e5957679b15b46e008af8110b7da16c532ba3ae13029f389f0abd5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de78da414e5957679b15b46e008af8110b7da16c532ba3ae13029f389f0abd5d->enter($__internal_de78da414e5957679b15b46e008af8110b7da16c532ba3ae13029f389f0abd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_de78da414e5957679b15b46e008af8110b7da16c532ba3ae13029f389f0abd5d->leave($__internal_de78da414e5957679b15b46e008af8110b7da16c532ba3ae13029f389f0abd5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/search_widget.html.php");
    }
}

<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c9009c18b3f2baf0dbdbd54df77e5cec57058ed06594cebfa844dc036645cf1b extends Twig_Template
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
        $__internal_00ecc887e3c65add46b3369ba0b1c50531ee339d0b589affd915752d1777f921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ecc887e3c65add46b3369ba0b1c50531ee339d0b589affd915752d1777f921->enter($__internal_00ecc887e3c65add46b3369ba0b1c50531ee339d0b589affd915752d1777f921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_00ecc887e3c65add46b3369ba0b1c50531ee339d0b589affd915752d1777f921->leave($__internal_00ecc887e3c65add46b3369ba0b1c50531ee339d0b589affd915752d1777f921_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}

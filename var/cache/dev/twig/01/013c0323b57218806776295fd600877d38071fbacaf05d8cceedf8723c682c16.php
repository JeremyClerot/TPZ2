<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_803cc6912e269183387494d363c236d046f72b6d91fb631e637be2fbcac6d9e3 extends Twig_Template
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
        $__internal_e6e932312fa7c779933dbaa519391846841d0bb1e4e6a95d51e2959871fbda1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e932312fa7c779933dbaa519391846841d0bb1e4e6a95d51e2959871fbda1f->enter($__internal_e6e932312fa7c779933dbaa519391846841d0bb1e4e6a95d51e2959871fbda1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e6e932312fa7c779933dbaa519391846841d0bb1e4e6a95d51e2959871fbda1f->leave($__internal_e6e932312fa7c779933dbaa519391846841d0bb1e4e6a95d51e2959871fbda1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/container_attributes.html.php");
    }
}

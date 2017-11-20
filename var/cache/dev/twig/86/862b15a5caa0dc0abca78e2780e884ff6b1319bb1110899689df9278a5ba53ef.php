<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_d1d2cfb428e87d061eb9f796770eb0f8b37c6d6369e7b15e04ced300553affc0 extends Twig_Template
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
        $__internal_2879f6f4164590e37a7b5d654e39c07386837111a33df3db9b3a9039ce339328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2879f6f4164590e37a7b5d654e39c07386837111a33df3db9b3a9039ce339328->enter($__internal_2879f6f4164590e37a7b5d654e39c07386837111a33df3db9b3a9039ce339328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_2879f6f4164590e37a7b5d654e39c07386837111a33df3db9b3a9039ce339328->leave($__internal_2879f6f4164590e37a7b5d654e39c07386837111a33df3db9b3a9039ce339328_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}

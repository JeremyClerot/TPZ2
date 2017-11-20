<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_440e6beb74919e5fb13c48a073c7629bbda231c8621a2f1bb40f8509a8308f1d extends Twig_Template
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
        $__internal_bd2c342e5bf91698584cebf11eadd5c0261f5007632259e128ea848c6e591fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2c342e5bf91698584cebf11eadd5c0261f5007632259e128ea848c6e591fbd->enter($__internal_bd2c342e5bf91698584cebf11eadd5c0261f5007632259e128ea848c6e591fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_bd2c342e5bf91698584cebf11eadd5c0261f5007632259e128ea848c6e591fbd->leave($__internal_bd2c342e5bf91698584cebf11eadd5c0261f5007632259e128ea848c6e591fbd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/integer_widget.html.php");
    }
}

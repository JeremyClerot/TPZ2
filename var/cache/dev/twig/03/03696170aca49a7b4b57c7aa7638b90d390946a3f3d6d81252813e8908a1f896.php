<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_487d4c815930cc291a8edfc47d9176d2ffecc205b1a3984515aaf6150940d6fa extends Twig_Template
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
        $__internal_0e9fee9b214295fefb3cc5ea1d82da9abf11afd82dc9065a2da935969021fbd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9fee9b214295fefb3cc5ea1d82da9abf11afd82dc9065a2da935969021fbd6->enter($__internal_0e9fee9b214295fefb3cc5ea1d82da9abf11afd82dc9065a2da935969021fbd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0e9fee9b214295fefb3cc5ea1d82da9abf11afd82dc9065a2da935969021fbd6->leave($__internal_0e9fee9b214295fefb3cc5ea1d82da9abf11afd82dc9065a2da935969021fbd6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}

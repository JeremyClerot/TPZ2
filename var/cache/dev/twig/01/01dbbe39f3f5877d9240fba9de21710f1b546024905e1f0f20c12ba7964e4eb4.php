<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_23e17f7a249502dc418a70361e53db912a12f264ae76a480237535893d9d287b extends Twig_Template
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
        $__internal_9c99beef805f282245528b1a1d8242ae9cf19ef3768646e3adccb05a597f0c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c99beef805f282245528b1a1d8242ae9cf19ef3768646e3adccb05a597f0c6d->enter($__internal_9c99beef805f282245528b1a1d8242ae9cf19ef3768646e3adccb05a597f0c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9c99beef805f282245528b1a1d8242ae9cf19ef3768646e3adccb05a597f0c6d->leave($__internal_9c99beef805f282245528b1a1d8242ae9cf19ef3768646e3adccb05a597f0c6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}

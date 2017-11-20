<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_715172a150be30425a38416214f0984b74674449a2228f32c7a59b5c33222ee5 extends Twig_Template
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
        $__internal_dd72cbe8e6ee47db4e24fec64d042a730cbae60376dca3518f8cd179161c61a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd72cbe8e6ee47db4e24fec64d042a730cbae60376dca3518f8cd179161c61a9->enter($__internal_dd72cbe8e6ee47db4e24fec64d042a730cbae60376dca3518f8cd179161c61a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_dd72cbe8e6ee47db4e24fec64d042a730cbae60376dca3518f8cd179161c61a9->leave($__internal_dd72cbe8e6ee47db4e24fec64d042a730cbae60376dca3518f8cd179161c61a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}

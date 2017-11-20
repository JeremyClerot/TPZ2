<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_e4ac3f5aa96285d388b10702c59749f0dddf647253a7bc8453086cc9ea09fd83 extends Twig_Template
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
        $__internal_8159c5efba0bfdcd670b9b4cb94a2e4caf05cf67d09a32244ffc10344264a919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8159c5efba0bfdcd670b9b4cb94a2e4caf05cf67d09a32244ffc10344264a919->enter($__internal_8159c5efba0bfdcd670b9b4cb94a2e4caf05cf67d09a32244ffc10344264a919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_8159c5efba0bfdcd670b9b4cb94a2e4caf05cf67d09a32244ffc10344264a919->leave($__internal_8159c5efba0bfdcd670b9b4cb94a2e4caf05cf67d09a32244ffc10344264a919_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/number_widget.html.php");
    }
}

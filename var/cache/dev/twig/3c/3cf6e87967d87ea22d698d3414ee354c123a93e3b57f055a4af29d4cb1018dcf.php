<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_725ea3cc86a2dc9fd6038327c1409df52f3059415a141f46c7957446f15be138 extends Twig_Template
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
        $__internal_e2ae94c29178a604f11d9068f4cda83ba3a76106a33eefd65fe588d1bf4a296e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ae94c29178a604f11d9068f4cda83ba3a76106a33eefd65fe588d1bf4a296e->enter($__internal_e2ae94c29178a604f11d9068f4cda83ba3a76106a33eefd65fe588d1bf4a296e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e2ae94c29178a604f11d9068f4cda83ba3a76106a33eefd65fe588d1bf4a296e->leave($__internal_e2ae94c29178a604f11d9068f4cda83ba3a76106a33eefd65fe588d1bf4a296e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/hidden_widget.html.php");
    }
}

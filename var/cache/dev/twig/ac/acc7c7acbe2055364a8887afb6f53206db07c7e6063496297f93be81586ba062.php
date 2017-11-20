<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_76baf3fb4d8f3d40d833254bfd1b50302da29587f33f53b4b42ddeddf30cde07 extends Twig_Template
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
        $__internal_cb0388b0ef5594d669cb92d6f66253bbeca3cb3026f9c987ace0178eac350123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0388b0ef5594d669cb92d6f66253bbeca3cb3026f9c987ace0178eac350123->enter($__internal_cb0388b0ef5594d669cb92d6f66253bbeca3cb3026f9c987ace0178eac350123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cb0388b0ef5594d669cb92d6f66253bbeca3cb3026f9c987ace0178eac350123->leave($__internal_cb0388b0ef5594d669cb92d6f66253bbeca3cb3026f9c987ace0178eac350123_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}

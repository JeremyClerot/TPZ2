<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_6ebc595450c70822fc697099c4e60bb01630e9ab1b900a43b4f6916e5cd742c6 extends Twig_Template
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
        $__internal_f39508cdf344ebe8d195b266f62f1ccf5b7a5bfbeda7db6941f4853117e4634d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39508cdf344ebe8d195b266f62f1ccf5b7a5bfbeda7db6941f4853117e4634d->enter($__internal_f39508cdf344ebe8d195b266f62f1ccf5b7a5bfbeda7db6941f4853117e4634d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f39508cdf344ebe8d195b266f62f1ccf5b7a5bfbeda7db6941f4853117e4634d->leave($__internal_f39508cdf344ebe8d195b266f62f1ccf5b7a5bfbeda7db6941f4853117e4634d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}

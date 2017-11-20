<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_939081f5d5f6e13332e9bd3dab3359195b562ac02874751260a45f7d1ebcd9ae extends Twig_Template
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
        $__internal_5791d41480d35cddb9f1a9fa20f8854df70f480364c7da5d5b43376e0ff7ea9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5791d41480d35cddb9f1a9fa20f8854df70f480364c7da5d5b43376e0ff7ea9e->enter($__internal_5791d41480d35cddb9f1a9fa20f8854df70f480364c7da5d5b43376e0ff7ea9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5791d41480d35cddb9f1a9fa20f8854df70f480364c7da5d5b43376e0ff7ea9e->leave($__internal_5791d41480d35cddb9f1a9fa20f8854df70f480364c7da5d5b43376e0ff7ea9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}

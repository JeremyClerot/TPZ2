<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_950db706ce418fa001b5cbed587dba4f26dc29253e96da218a6da5f18fdb0103 extends Twig_Template
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
        $__internal_af976a2f44d303e104e8b492e16bd5eed842cc69e6238a97914a68dcdce2b544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af976a2f44d303e104e8b492e16bd5eed842cc69e6238a97914a68dcdce2b544->enter($__internal_af976a2f44d303e104e8b492e16bd5eed842cc69e6238a97914a68dcdce2b544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_af976a2f44d303e104e8b492e16bd5eed842cc69e6238a97914a68dcdce2b544->leave($__internal_af976a2f44d303e104e8b492e16bd5eed842cc69e6238a97914a68dcdce2b544_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}

<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_984d28558afcafda3144633b2b7e6dac2ab370be660bc09ce681da643286e733 extends Twig_Template
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
        $__internal_c0fa0e397791479d71dea91bbbd1b3d7f0869a479d2c3649c17ac07f81c385ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0fa0e397791479d71dea91bbbd1b3d7f0869a479d2c3649c17ac07f81c385ba->enter($__internal_c0fa0e397791479d71dea91bbbd1b3d7f0869a479d2c3649c17ac07f81c385ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c0fa0e397791479d71dea91bbbd1b3d7f0869a479d2c3649c17ac07f81c385ba->leave($__internal_c0fa0e397791479d71dea91bbbd1b3d7f0869a479d2c3649c17ac07f81c385ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/datetime_widget.html.php");
    }
}

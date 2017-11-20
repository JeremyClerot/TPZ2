<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0eca156573564bb417162ac9d0f9572f5ed02b1b18ba60f0255bc9c839029394 extends Twig_Template
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
        $__internal_9fc42711e2b7edcda6251795b34deea10bbf2956f2a12d4be594c91c5096f127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc42711e2b7edcda6251795b34deea10bbf2956f2a12d4be594c91c5096f127->enter($__internal_9fc42711e2b7edcda6251795b34deea10bbf2956f2a12d4be594c91c5096f127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_9fc42711e2b7edcda6251795b34deea10bbf2956f2a12d4be594c91c5096f127->leave($__internal_9fc42711e2b7edcda6251795b34deea10bbf2956f2a12d4be594c91c5096f127_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}

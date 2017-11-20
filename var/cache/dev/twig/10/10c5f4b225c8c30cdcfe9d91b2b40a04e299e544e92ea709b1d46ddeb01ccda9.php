<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_87bf25ee74a43a1087080a168dad2f7be480eb5a250ddc431149d578d8fa1ab3 extends Twig_Template
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
        $__internal_4f1b818017949b6d31723b9b7dcd16e912629a770aa6d91e406559d95fd6be04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1b818017949b6d31723b9b7dcd16e912629a770aa6d91e406559d95fd6be04->enter($__internal_4f1b818017949b6d31723b9b7dcd16e912629a770aa6d91e406559d95fd6be04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_4f1b818017949b6d31723b9b7dcd16e912629a770aa6d91e406559d95fd6be04->leave($__internal_4f1b818017949b6d31723b9b7dcd16e912629a770aa6d91e406559d95fd6be04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}

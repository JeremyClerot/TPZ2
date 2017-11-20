<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_2e352119a8c27e199b7f2cf7a977549de8704d08df3a0b564f28195f400cdded extends Twig_Template
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
        $__internal_6ab26f59740fa312c4fa3f4e3155af8cdd1ff275b3d365f0c4ee8c1b38f24540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab26f59740fa312c4fa3f4e3155af8cdd1ff275b3d365f0c4ee8c1b38f24540->enter($__internal_6ab26f59740fa312c4fa3f4e3155af8cdd1ff275b3d365f0c4ee8c1b38f24540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6ab26f59740fa312c4fa3f4e3155af8cdd1ff275b3d365f0c4ee8c1b38f24540->leave($__internal_6ab26f59740fa312c4fa3f4e3155af8cdd1ff275b3d365f0c4ee8c1b38f24540_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}

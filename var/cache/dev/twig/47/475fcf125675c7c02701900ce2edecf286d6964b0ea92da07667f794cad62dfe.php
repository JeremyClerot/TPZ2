<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_fc5046cd0f8c42b979e7c663fdf42351c2b51e98ede551ca74d218dd7b195030 extends Twig_Template
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
        $__internal_6ecdc7ec7118ae321a87a9a24fdc7ec2878547ff79e770ede34bec4efcf7a156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ecdc7ec7118ae321a87a9a24fdc7ec2878547ff79e770ede34bec4efcf7a156->enter($__internal_6ecdc7ec7118ae321a87a9a24fdc7ec2878547ff79e770ede34bec4efcf7a156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_6ecdc7ec7118ae321a87a9a24fdc7ec2878547ff79e770ede34bec4efcf7a156->leave($__internal_6ecdc7ec7118ae321a87a9a24fdc7ec2878547ff79e770ede34bec4efcf7a156_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}

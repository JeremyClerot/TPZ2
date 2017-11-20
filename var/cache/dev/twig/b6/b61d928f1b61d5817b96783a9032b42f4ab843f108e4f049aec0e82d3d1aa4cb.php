<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_31101463f66e12687e77a8d6e7522b87d5251a8ad1449f2d0908140674b825ee extends Twig_Template
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
        $__internal_25eaf3b163b0588cd8763f42327b7011f8340bf57dff4168d701734bcc346d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25eaf3b163b0588cd8763f42327b7011f8340bf57dff4168d701734bcc346d7c->enter($__internal_25eaf3b163b0588cd8763f42327b7011f8340bf57dff4168d701734bcc346d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_25eaf3b163b0588cd8763f42327b7011f8340bf57dff4168d701734bcc346d7c->leave($__internal_25eaf3b163b0588cd8763f42327b7011f8340bf57dff4168d701734bcc346d7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/url_widget.html.php");
    }
}

<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8d54a5370719dae5c67f04072c3e4a9ad807ff71c667069273440f539806a74a extends Twig_Template
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
        $__internal_7200b3e4de6a650fcf5cd99eeae7ab2523bc86d8bcbe539f0b63b71034eb9f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7200b3e4de6a650fcf5cd99eeae7ab2523bc86d8bcbe539f0b63b71034eb9f7e->enter($__internal_7200b3e4de6a650fcf5cd99eeae7ab2523bc86d8bcbe539f0b63b71034eb9f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_7200b3e4de6a650fcf5cd99eeae7ab2523bc86d8bcbe539f0b63b71034eb9f7e->leave($__internal_7200b3e4de6a650fcf5cd99eeae7ab2523bc86d8bcbe539f0b63b71034eb9f7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}

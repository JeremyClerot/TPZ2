<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0b0aad8220e974b9fff28cca5959015b4071ae63b2dcf4610488b336966df0eb extends Twig_Template
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
        $__internal_dc29a2748161f1140b204ecf25dc3c702f785df203e046b0d05f575d9c6a5891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc29a2748161f1140b204ecf25dc3c702f785df203e046b0d05f575d9c6a5891->enter($__internal_dc29a2748161f1140b204ecf25dc3c702f785df203e046b0d05f575d9c6a5891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_dc29a2748161f1140b204ecf25dc3c702f785df203e046b0d05f575d9c6a5891->leave($__internal_dc29a2748161f1140b204ecf25dc3c702f785df203e046b0d05f575d9c6a5891_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}

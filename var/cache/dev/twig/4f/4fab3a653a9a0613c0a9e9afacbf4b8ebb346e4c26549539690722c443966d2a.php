<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_29ba61799a15fb57b0707c15a4f96d264d792b049994a142c287f1d914d1a07d extends Twig_Template
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
        $__internal_72ed4dcd3010aba659b838b4b6aad5de9f7a022ffc05ea7e89197fa75ae98cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ed4dcd3010aba659b838b4b6aad5de9f7a022ffc05ea7e89197fa75ae98cb9->enter($__internal_72ed4dcd3010aba659b838b4b6aad5de9f7a022ffc05ea7e89197fa75ae98cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_72ed4dcd3010aba659b838b4b6aad5de9f7a022ffc05ea7e89197fa75ae98cb9->leave($__internal_72ed4dcd3010aba659b838b4b6aad5de9f7a022ffc05ea7e89197fa75ae98cb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}

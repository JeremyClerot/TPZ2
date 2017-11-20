<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_1386aace87b3742dd4c9b0929e1e408f90e36dca7156b7be315ed70c93e51445 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93ad35aaa9af44998996acfb241c3b0c1355bd322992c395713a909a984f8d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ad35aaa9af44998996acfb241c3b0c1355bd322992c395713a909a984f8d1a->enter($__internal_93ad35aaa9af44998996acfb241c3b0c1355bd322992c395713a909a984f8d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_93ad35aaa9af44998996acfb241c3b0c1355bd322992c395713a909a984f8d1a->leave($__internal_93ad35aaa9af44998996acfb241c3b0c1355bd322992c395713a909a984f8d1a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1db7c322f84a5295f816aac819f0ec8f3eece172df475a605b80e4ae8771213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1db7c322f84a5295f816aac819f0ec8f3eece172df475a605b80e4ae8771213->enter($__internal_f1db7c322f84a5295f816aac819f0ec8f3eece172df475a605b80e4ae8771213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f1db7c322f84a5295f816aac819f0ec8f3eece172df475a605b80e4ae8771213->leave($__internal_f1db7c322f84a5295f816aac819f0ec8f3eece172df475a605b80e4ae8771213_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b82841d95e7b5ad0dfa8e2b1d86f8e9bcebc04c8f0e26f3fc71c55a8feebda1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b82841d95e7b5ad0dfa8e2b1d86f8e9bcebc04c8f0e26f3fc71c55a8feebda1->enter($__internal_6b82841d95e7b5ad0dfa8e2b1d86f8e9bcebc04c8f0e26f3fc71c55a8feebda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6b82841d95e7b5ad0dfa8e2b1d86f8e9bcebc04c8f0e26f3fc71c55a8feebda1->leave($__internal_6b82841d95e7b5ad0dfa8e2b1d86f8e9bcebc04c8f0e26f3fc71c55a8feebda1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1388b16e1cb169144b0c48698e3ea477f4512d6d8f3a5c83f542bc14177e1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1388b16e1cb169144b0c48698e3ea477f4512d6d8f3a5c83f542bc14177e1af->enter($__internal_e1388b16e1cb169144b0c48698e3ea477f4512d6d8f3a5c83f542bc14177e1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e1388b16e1cb169144b0c48698e3ea477f4512d6d8f3a5c83f542bc14177e1af->leave($__internal_e1388b16e1cb169144b0c48698e3ea477f4512d6d8f3a5c83f542bc14177e1af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  108 => 10,  97 => 7,  85 => 34,  83 => 33,  73 => 26,  63 => 19,  56 => 15,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}

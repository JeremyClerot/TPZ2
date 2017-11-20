<?php

/* Material/index.html.twig */
class __TwigTemplate_2d8d73b26f5cbf7eb7c96fb30bf171995381a5663b32393be9cd0456b156d4ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Material/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60680d9b4e82984c415ee0d47c853744cda682f3615716857a66739cb3e5748b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60680d9b4e82984c415ee0d47c853744cda682f3615716857a66739cb3e5748b->enter($__internal_60680d9b4e82984c415ee0d47c853744cda682f3615716857a66739cb3e5748b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Material/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60680d9b4e82984c415ee0d47c853744cda682f3615716857a66739cb3e5748b->leave($__internal_60680d9b4e82984c415ee0d47c853744cda682f3615716857a66739cb3e5748b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a020dd56b963813d56236ffed5cee1d49af85f3960c789884c1247e8ca1b255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a020dd56b963813d56236ffed5cee1d49af85f3960c789884c1247e8ca1b255->enter($__internal_7a020dd56b963813d56236ffed5cee1d49af85f3960c789884c1247e8ca1b255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Index Material ";
        
        $__internal_7a020dd56b963813d56236ffed5cee1d49af85f3960c789884c1247e8ca1b255->leave($__internal_7a020dd56b963813d56236ffed5cee1d49af85f3960c789884c1247e8ca1b255_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa7cbb9ed7be7d950327d50736dd6b6f001ca02c17d5257f98535be5b447fe6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7cbb9ed7be7d950327d50736dd6b6f001ca02c17d5257f98535be5b447fe6c->enter($__internal_aa7cbb9ed7be7d950327d50736dd6b6f001ca02c17d5257f98535be5b447fe6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materials"]) || array_key_exists("materials", $context) ? $context["materials"] : (function () { throw new Twig_Error_Runtime('Variable "materials" does not exist.', 6, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["User"]) {
            // line 7
            echo "        ID: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["User"], "id", array()), "html", null, true);
            echo "
        Name: ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["User"], "name", array()), "html", null, true);
            echo "
        Max_Weight: ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["User"], "max_weight", array()), "html", null, true);
            echo "</br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['User'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_aa7cbb9ed7be7d950327d50736dd6b6f001ca02c17d5257f98535be5b447fe6c->leave($__internal_aa7cbb9ed7be7d950327d50736dd6b6f001ca02c17d5257f98535be5b447fe6c_prof);

    }

    public function getTemplateName()
    {
        return "Material/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 9,  63 => 8,  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} Index Material {% endblock %}

{% block body %}
    {% for User in  materials %}
        ID: {{ User.id }}
        Name: {{ User.name }}
        Max_Weight: {{ User.max_weight }}</br>
    {% endfor %}
{% endblock %}

", "Material/index.html.twig", "/Users/jeremyclerot/Documents/PHP/TPZ2/templates/Material/index.html.twig");
    }
}

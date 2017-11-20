<?php

/* Person/index.html.twig */
class __TwigTemplate_132020bf40c2df4949ee22a5eb4a0bedb60a8e17167895187d9890e641aee0e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Person/index.html.twig", 1);
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
        $__internal_0a15ceaf317fe78ef6151e27e62fe1b5e0fda8fb8147ced98f9fb4439ae19d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a15ceaf317fe78ef6151e27e62fe1b5e0fda8fb8147ced98f9fb4439ae19d36->enter($__internal_0a15ceaf317fe78ef6151e27e62fe1b5e0fda8fb8147ced98f9fb4439ae19d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Person/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a15ceaf317fe78ef6151e27e62fe1b5e0fda8fb8147ced98f9fb4439ae19d36->leave($__internal_0a15ceaf317fe78ef6151e27e62fe1b5e0fda8fb8147ced98f9fb4439ae19d36_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_60ba561565d0aa1221f8b2eac4db49901951eec519421b76b8180c0bd96d5ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ba561565d0aa1221f8b2eac4db49901951eec519421b76b8180c0bd96d5ba7->enter($__internal_60ba561565d0aa1221f8b2eac4db49901951eec519421b76b8180c0bd96d5ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " INDEX Person ";
        
        $__internal_60ba561565d0aa1221f8b2eac4db49901951eec519421b76b8180c0bd96d5ba7->leave($__internal_60ba561565d0aa1221f8b2eac4db49901951eec519421b76b8180c0bd96d5ba7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_31ab06214f1358e27d6cc3d62611f52752b82599a2fa994d151c6c27d7e974f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ab06214f1358e27d6cc3d62611f52752b82599a2fa994d151c6c27d7e974f1->enter($__internal_31ab06214f1358e27d6cc3d62611f52752b82599a2fa994d151c6c27d7e974f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 6, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["User"]) {
            // line 7
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["User"], "id", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["User"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["User"], "maxWeight", array()), "html", null, true);
            echo " </br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['User'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
";
        
        $__internal_31ab06214f1358e27d6cc3d62611f52752b82599a2fa994d151c6c27d7e974f1->leave($__internal_31ab06214f1358e27d6cc3d62611f52752b82599a2fa994d151c6c27d7e974f1_prof);

    }

    public function getTemplateName()
    {
        return "Person/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 9,  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} INDEX Person {% endblock %}

{% block body %}
    {% for User in  users %}
        {{ User.id }}  {{ User.name }} {{ User.maxWeight }} </br>
    {% endfor %}

{% endblock %}", "Person/index.html.twig", "/Users/jeremyclerot/Documents/PHP/TPZ2/templates/Person/index.html.twig");
    }
}

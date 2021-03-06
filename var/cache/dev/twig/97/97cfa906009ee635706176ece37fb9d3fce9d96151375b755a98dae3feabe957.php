<?php

/* form_table_layout.html.twig */
class __TwigTemplate_03c983b93fdd9fc05a965e6956fd652f5193d8f26bbfc5bfda191d81e55d171d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b3f355c78544f25b8414ebccd78dc47cbc53991bae67eb043c88ada986ee3ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3f355c78544f25b8414ebccd78dc47cbc53991bae67eb043c88ada986ee3ca->enter($__internal_3b3f355c78544f25b8414ebccd78dc47cbc53991bae67eb043c88ada986ee3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_3b3f355c78544f25b8414ebccd78dc47cbc53991bae67eb043c88ada986ee3ca->leave($__internal_3b3f355c78544f25b8414ebccd78dc47cbc53991bae67eb043c88ada986ee3ca_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_bf35114b98c91684c83f6ffabc2eb256c09604d52433c121ad9bd991177f275a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf35114b98c91684c83f6ffabc2eb256c09604d52433c121ad9bd991177f275a->enter($__internal_bf35114b98c91684c83f6ffabc2eb256c09604d52433c121ad9bd991177f275a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_bf35114b98c91684c83f6ffabc2eb256c09604d52433c121ad9bd991177f275a->leave($__internal_bf35114b98c91684c83f6ffabc2eb256c09604d52433c121ad9bd991177f275a_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_20cac4baceada1a367932fab22057506145018a1538abedf6a59358760d43ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20cac4baceada1a367932fab22057506145018a1538abedf6a59358760d43ec9->enter($__internal_20cac4baceada1a367932fab22057506145018a1538abedf6a59358760d43ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_20cac4baceada1a367932fab22057506145018a1538abedf6a59358760d43ec9->leave($__internal_20cac4baceada1a367932fab22057506145018a1538abedf6a59358760d43ec9_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_d53971607ee9e7d3f727f6d1d2945b60c743a5943db1d89ee66601a059352945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53971607ee9e7d3f727f6d1d2945b60c743a5943db1d89ee66601a059352945->enter($__internal_d53971607ee9e7d3f727f6d1d2945b60c743a5943db1d89ee66601a059352945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_d53971607ee9e7d3f727f6d1d2945b60c743a5943db1d89ee66601a059352945->leave($__internal_d53971607ee9e7d3f727f6d1d2945b60c743a5943db1d89ee66601a059352945_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_048c4c0291356d8c26c67bcb8e10464d82f5c0e1ad2ceb7655bfafe1fd2d2195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048c4c0291356d8c26c67bcb8e10464d82f5c0e1ad2ceb7655bfafe1fd2d2195->enter($__internal_048c4c0291356d8c26c67bcb8e10464d82f5c0e1ad2ceb7655bfafe1fd2d2195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "parent", array())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_048c4c0291356d8c26c67bcb8e10464d82f5c0e1ad2ceb7655bfafe1fd2d2195->leave($__internal_048c4c0291356d8c26c67bcb8e10464d82f5c0e1ad2ceb7655bfafe1fd2d2195_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 43,  139 => 42,  137 => 41,  133 => 38,  131 => 37,  128 => 35,  126 => 34,  122 => 33,  116 => 32,  108 => 28,  106 => 27,  103 => 25,  97 => 24,  89 => 20,  87 => 19,  83 => 16,  77 => 15,  69 => 11,  67 => 10,  65 => 9,  62 => 7,  60 => 6,  57 => 4,  51 => 3,  44 => 32,  42 => 24,  40 => 15,  38 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/Users/jeremyclerot/Documents/PHP/TPZ2/vendor/symfony/twig-bridge/Resources/views/Form/form_table_layout.html.twig");
    }
}

<?php

/* continue_registration/index.html.twig */
class __TwigTemplate_e066993d2b1cb9d6c834447e910e324b1fe54aeb7a9ca482626ab9bee088ae23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ubase.html.twig", "continue_registration/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ubase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c3f0f3970ec467af391f841ad8a772e26cdca8821e5bf1768bc66b66cc952cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c3f0f3970ec467af391f841ad8a772e26cdca8821e5bf1768bc66b66cc952cb->enter($__internal_0c3f0f3970ec467af391f841ad8a772e26cdca8821e5bf1768bc66b66cc952cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "continue_registration/index.html.twig"));

        $__internal_5da06996150d1c411bcc34f60c5a5d58a65dade6278d3a6e1e43d397e23632a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da06996150d1c411bcc34f60c5a5d58a65dade6278d3a6e1e43d397e23632a0->enter($__internal_5da06996150d1c411bcc34f60c5a5d58a65dade6278d3a6e1e43d397e23632a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "continue_registration/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c3f0f3970ec467af391f841ad8a772e26cdca8821e5bf1768bc66b66cc952cb->leave($__internal_0c3f0f3970ec467af391f841ad8a772e26cdca8821e5bf1768bc66b66cc952cb_prof);

        
        $__internal_5da06996150d1c411bcc34f60c5a5d58a65dade6278d3a6e1e43d397e23632a0->leave($__internal_5da06996150d1c411bcc34f60c5a5d58a65dade6278d3a6e1e43d397e23632a0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3106ed00f2122fcbf66146f03a7d3782010d1a1001183d302ca7d18a38988f18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3106ed00f2122fcbf66146f03a7d3782010d1a1001183d302ca7d18a38988f18->enter($__internal_3106ed00f2122fcbf66146f03a7d3782010d1a1001183d302ca7d18a38988f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1da0549669e0853e20277a22c4a6a3ce32caa223e20cf43b1beef2cf28159eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da0549669e0853e20277a22c4a6a3ce32caa223e20cf43b1beef2cf28159eef->enter($__internal_1da0549669e0853e20277a22c4a6a3ce32caa223e20cf43b1beef2cf28159eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-10 col-md-offset-1\"> 
            ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                <div class=\"alert alert-info\" role=\"alert\"><p style=\"text-align: center\">Login to your Account</p></div>
                ";
        // line 7
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors')) {
            // line 8
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 9
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
                    </div>
                ";
        } elseif (        // line 11
($context["errors"] ?? $this->getContext($context, "errors"))) {
            // line 12
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["error"]);
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 14
                echo "                            <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "                    </div>
                ";
        }
        // line 18
        echo "                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email address</label>
                    ";
        // line 20
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors')) {
            // line 21
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 25
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Password</label>
                    ";
        // line 29
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'errors')) {
            // line 30
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">
                            ";
            // line 31
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 34
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
                <hr style=\"border: solid green 1px;\">
                <h3 style=\"text-align: center\">Haven't initiate registration yet? </h3>
                <div class=\"col-md-6 col-md-offset-3\" style=\"margin-bottom:0px\"> 
                    <div class=\"list-group\" style=\"margin-bottom:0px\">
                        <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("startReg");
        echo "\" class=\"list-group-item active\">Start Online Application</a>
                    </div>
                </div>
                <div class=\"col-md-12\"> 
                    <h3 style=\"text-align: center\">Click <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("editReg");
        echo "\"><span class=\"label label-default\">here</span></a> to edit your registration.</h3>
                </div>
            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_1da0549669e0853e20277a22c4a6a3ce32caa223e20cf43b1beef2cf28159eef->leave($__internal_1da0549669e0853e20277a22c4a6a3ce32caa223e20cf43b1beef2cf28159eef_prof);

        
        $__internal_3106ed00f2122fcbf66146f03a7d3782010d1a1001183d302ca7d18a38988f18->leave($__internal_3106ed00f2122fcbf66146f03a7d3782010d1a1001183d302ca7d18a38988f18_prof);

    }

    public function getTemplateName()
    {
        return "continue_registration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 47,  145 => 45,  138 => 41,  130 => 36,  124 => 34,  118 => 31,  115 => 30,  113 => 29,  105 => 25,  99 => 22,  96 => 21,  94 => 20,  90 => 18,  86 => 16,  77 => 14,  73 => 13,  70 => 12,  68 => 11,  63 => 9,  60 => 8,  58 => 7,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'ubase.html.twig' %}
{% block body %}
    <div class=\"col-md-10 col-md-offset-1\"> 
        <div class=\"col-md-10 col-md-offset-1\"> 
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                <div class=\"alert alert-info\" role=\"alert\"><p style=\"text-align: center\">Login to your Account</p></div>
                {% if form_errors(form) %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(form) }}
                    </div>
                {%elseif errors%}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {% for error in error %}
                            <li>{{ error }}</li>
                        {% endfor %}
                    </div>
                {% endif %}
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email address</label>
                    {% if form_errors(form.email) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.email) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Password</label>
                    {% if form_errors(form.password) %}
                        <div class=\"alert alert-danger\" role=\"alert\">
                            {{ form_errors(form.password) }}
                        </div>
                    {% endif %}
                    {{ form_widget(form.password, {'attr': {'class': 'form-control'}}) }}
                </div>
                {{ form_widget(form.submit, {'attr': {'class': 'btn btn-success'}}) }}
                <hr style=\"border: solid green 1px;\">
                <h3 style=\"text-align: center\">Haven't initiate registration yet? </h3>
                <div class=\"col-md-6 col-md-offset-3\" style=\"margin-bottom:0px\"> 
                    <div class=\"list-group\" style=\"margin-bottom:0px\">
                        <a href=\"{{ url(\"startReg\") }}\" class=\"list-group-item active\">Start Online Application</a>
                    </div>
                </div>
                <div class=\"col-md-12\"> 
                    <h3 style=\"text-align: center\">Click <a href=\"{{ url(\"editReg\") }}\"><span class=\"label label-default\">here</span></a> to edit your registration.</h3>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", "continue_registration/index.html.twig", "C:\\xampp\\htdocs\\online_admission_application\\app\\Resources\\views\\continue_registration\\index.html.twig");
    }
}

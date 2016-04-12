<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f843dfb9385bf23c39e1c33a1d84eed7fc43f279e7b497032aadc216c2f7c606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0af43e13e4d2e961b588ace0ad4d3e3412fbf3c2435e18636e2466a908ae7c50 = $this->env->getExtension("native_profiler");
        $__internal_0af43e13e4d2e961b588ace0ad4d3e3412fbf3c2435e18636e2466a908ae7c50->enter($__internal_0af43e13e4d2e961b588ace0ad4d3e3412fbf3c2435e18636e2466a908ae7c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0af43e13e4d2e961b588ace0ad4d3e3412fbf3c2435e18636e2466a908ae7c50->leave($__internal_0af43e13e4d2e961b588ace0ad4d3e3412fbf3c2435e18636e2466a908ae7c50_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7f0a4cb05e07595ef04ef8b8aba912e6f0164e6f73b726faccc9f61eea705195 = $this->env->getExtension("native_profiler");
        $__internal_7f0a4cb05e07595ef04ef8b8aba912e6f0164e6f73b726faccc9f61eea705195->enter($__internal_7f0a4cb05e07595ef04ef8b8aba912e6f0164e6f73b726faccc9f61eea705195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7f0a4cb05e07595ef04ef8b8aba912e6f0164e6f73b726faccc9f61eea705195->leave($__internal_7f0a4cb05e07595ef04ef8b8aba912e6f0164e6f73b726faccc9f61eea705195_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_118aa9867969d74a23c43092bd7aaf118b16d8694d7febf19e90eb26477db51d = $this->env->getExtension("native_profiler");
        $__internal_118aa9867969d74a23c43092bd7aaf118b16d8694d7febf19e90eb26477db51d->enter($__internal_118aa9867969d74a23c43092bd7aaf118b16d8694d7febf19e90eb26477db51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_118aa9867969d74a23c43092bd7aaf118b16d8694d7febf19e90eb26477db51d->leave($__internal_118aa9867969d74a23c43092bd7aaf118b16d8694d7febf19e90eb26477db51d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9be49250f93431dda80f9d997858a6c2408a75890a668c621d1abe0f4d31a178 = $this->env->getExtension("native_profiler");
        $__internal_9be49250f93431dda80f9d997858a6c2408a75890a668c621d1abe0f4d31a178->enter($__internal_9be49250f93431dda80f9d997858a6c2408a75890a668c621d1abe0f4d31a178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9be49250f93431dda80f9d997858a6c2408a75890a668c621d1abe0f4d31a178->leave($__internal_9be49250f93431dda80f9d997858a6c2408a75890a668c621d1abe0f4d31a178_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

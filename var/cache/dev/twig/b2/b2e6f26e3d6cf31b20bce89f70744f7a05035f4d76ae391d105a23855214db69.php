<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8d81f9254112d1333ef2f734a6c2fa09b9047d4447c076b69e411480763006b8 extends Twig_Template
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
        $__internal_bfb0f300500f9282d052febfcd9d7f903d7c05cd81faac5d9697d4f87d9040ae = $this->env->getExtension("native_profiler");
        $__internal_bfb0f300500f9282d052febfcd9d7f903d7c05cd81faac5d9697d4f87d9040ae->enter($__internal_bfb0f300500f9282d052febfcd9d7f903d7c05cd81faac5d9697d4f87d9040ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfb0f300500f9282d052febfcd9d7f903d7c05cd81faac5d9697d4f87d9040ae->leave($__internal_bfb0f300500f9282d052febfcd9d7f903d7c05cd81faac5d9697d4f87d9040ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eea6dc38ae0619b17a3c0952dfba38a7276e4a5914594ca434e2df2c1d50056d = $this->env->getExtension("native_profiler");
        $__internal_eea6dc38ae0619b17a3c0952dfba38a7276e4a5914594ca434e2df2c1d50056d->enter($__internal_eea6dc38ae0619b17a3c0952dfba38a7276e4a5914594ca434e2df2c1d50056d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_eea6dc38ae0619b17a3c0952dfba38a7276e4a5914594ca434e2df2c1d50056d->leave($__internal_eea6dc38ae0619b17a3c0952dfba38a7276e4a5914594ca434e2df2c1d50056d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1bc6bfbb016cd423fedcaa45d76be1ef0f2504c21ffca5af7c211ed63fe73fc = $this->env->getExtension("native_profiler");
        $__internal_d1bc6bfbb016cd423fedcaa45d76be1ef0f2504c21ffca5af7c211ed63fe73fc->enter($__internal_d1bc6bfbb016cd423fedcaa45d76be1ef0f2504c21ffca5af7c211ed63fe73fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d1bc6bfbb016cd423fedcaa45d76be1ef0f2504c21ffca5af7c211ed63fe73fc->leave($__internal_d1bc6bfbb016cd423fedcaa45d76be1ef0f2504c21ffca5af7c211ed63fe73fc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f62cef9bbab51ab6ca9efad1959df694d146483737cac810a26a7ce71de660f3 = $this->env->getExtension("native_profiler");
        $__internal_f62cef9bbab51ab6ca9efad1959df694d146483737cac810a26a7ce71de660f3->enter($__internal_f62cef9bbab51ab6ca9efad1959df694d146483737cac810a26a7ce71de660f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f62cef9bbab51ab6ca9efad1959df694d146483737cac810a26a7ce71de660f3->leave($__internal_f62cef9bbab51ab6ca9efad1959df694d146483737cac810a26a7ce71de660f3_prof);

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

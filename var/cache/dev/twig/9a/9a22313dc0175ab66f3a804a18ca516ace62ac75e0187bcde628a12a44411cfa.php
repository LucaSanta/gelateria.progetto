<?php

/* base.html.twig */
class __TwigTemplate_a808b36b626716b062f66579693624eb818b107ef045486d672d3481d11be63f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d7ad8a210c6feff35ea4ca4d0f4aec6598d5a513e496a3f1348f5dcd8c68858 = $this->env->getExtension("native_profiler");
        $__internal_7d7ad8a210c6feff35ea4ca4d0f4aec6598d5a513e496a3f1348f5dcd8c68858->enter($__internal_7d7ad8a210c6feff35ea4ca4d0f4aec6598d5a513e496a3f1348f5dcd8c68858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7d7ad8a210c6feff35ea4ca4d0f4aec6598d5a513e496a3f1348f5dcd8c68858->leave($__internal_7d7ad8a210c6feff35ea4ca4d0f4aec6598d5a513e496a3f1348f5dcd8c68858_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_260e8896d85f6e652e2e5274c7b0a2583a41d90b47d3f562198545885170ef08 = $this->env->getExtension("native_profiler");
        $__internal_260e8896d85f6e652e2e5274c7b0a2583a41d90b47d3f562198545885170ef08->enter($__internal_260e8896d85f6e652e2e5274c7b0a2583a41d90b47d3f562198545885170ef08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_260e8896d85f6e652e2e5274c7b0a2583a41d90b47d3f562198545885170ef08->leave($__internal_260e8896d85f6e652e2e5274c7b0a2583a41d90b47d3f562198545885170ef08_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_63f04cdbdddf9612a91ad00d031ac8f0abae070168f7af1afba51da2cf6f3d7b = $this->env->getExtension("native_profiler");
        $__internal_63f04cdbdddf9612a91ad00d031ac8f0abae070168f7af1afba51da2cf6f3d7b->enter($__internal_63f04cdbdddf9612a91ad00d031ac8f0abae070168f7af1afba51da2cf6f3d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_63f04cdbdddf9612a91ad00d031ac8f0abae070168f7af1afba51da2cf6f3d7b->leave($__internal_63f04cdbdddf9612a91ad00d031ac8f0abae070168f7af1afba51da2cf6f3d7b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_904f5e8d63dd94fa5b16faaf72ebd53a3f4e79e729c2e03880b65b0e5ed47504 = $this->env->getExtension("native_profiler");
        $__internal_904f5e8d63dd94fa5b16faaf72ebd53a3f4e79e729c2e03880b65b0e5ed47504->enter($__internal_904f5e8d63dd94fa5b16faaf72ebd53a3f4e79e729c2e03880b65b0e5ed47504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_904f5e8d63dd94fa5b16faaf72ebd53a3f4e79e729c2e03880b65b0e5ed47504->leave($__internal_904f5e8d63dd94fa5b16faaf72ebd53a3f4e79e729c2e03880b65b0e5ed47504_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7c2e34f44e047d415a683a3810ceb03b6c9ed58f556e9febdc33732fcde3deac = $this->env->getExtension("native_profiler");
        $__internal_7c2e34f44e047d415a683a3810ceb03b6c9ed58f556e9febdc33732fcde3deac->enter($__internal_7c2e34f44e047d415a683a3810ceb03b6c9ed58f556e9febdc33732fcde3deac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7c2e34f44e047d415a683a3810ceb03b6c9ed58f556e9febdc33732fcde3deac->leave($__internal_7c2e34f44e047d415a683a3810ceb03b6c9ed58f556e9febdc33732fcde3deac_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

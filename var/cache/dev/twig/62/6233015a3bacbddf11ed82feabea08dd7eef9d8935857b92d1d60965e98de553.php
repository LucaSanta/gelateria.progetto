<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_49c82eb0e19114368c8de2a92cdb635d92782b069bcff2f89db09a2600b8713e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acc3230ab86daf59f0ec80f8d9cf18fbd3501584199cdb1847583d5b5d3a836b = $this->env->getExtension("native_profiler");
        $__internal_acc3230ab86daf59f0ec80f8d9cf18fbd3501584199cdb1847583d5b5d3a836b->enter($__internal_acc3230ab86daf59f0ec80f8d9cf18fbd3501584199cdb1847583d5b5d3a836b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acc3230ab86daf59f0ec80f8d9cf18fbd3501584199cdb1847583d5b5d3a836b->leave($__internal_acc3230ab86daf59f0ec80f8d9cf18fbd3501584199cdb1847583d5b5d3a836b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9b8615c04ff770a6589e58cf3dbf3f34adcdae50ecf9424c8d7375b6e80ecfa9 = $this->env->getExtension("native_profiler");
        $__internal_9b8615c04ff770a6589e58cf3dbf3f34adcdae50ecf9424c8d7375b6e80ecfa9->enter($__internal_9b8615c04ff770a6589e58cf3dbf3f34adcdae50ecf9424c8d7375b6e80ecfa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9b8615c04ff770a6589e58cf3dbf3f34adcdae50ecf9424c8d7375b6e80ecfa9->leave($__internal_9b8615c04ff770a6589e58cf3dbf3f34adcdae50ecf9424c8d7375b6e80ecfa9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fcb571dcc7e8e8aaf829e8646c7d06121627650c0f44946d95f09b376908edbc = $this->env->getExtension("native_profiler");
        $__internal_fcb571dcc7e8e8aaf829e8646c7d06121627650c0f44946d95f09b376908edbc->enter($__internal_fcb571dcc7e8e8aaf829e8646c7d06121627650c0f44946d95f09b376908edbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fcb571dcc7e8e8aaf829e8646c7d06121627650c0f44946d95f09b376908edbc->leave($__internal_fcb571dcc7e8e8aaf829e8646c7d06121627650c0f44946d95f09b376908edbc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dfd49efb34c3d8466fc2aa7840ba3a58e8e44fb4561e26615fca356d54d375d8 = $this->env->getExtension("native_profiler");
        $__internal_dfd49efb34c3d8466fc2aa7840ba3a58e8e44fb4561e26615fca356d54d375d8->enter($__internal_dfd49efb34c3d8466fc2aa7840ba3a58e8e44fb4561e26615fca356d54d375d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dfd49efb34c3d8466fc2aa7840ba3a58e8e44fb4561e26615fca356d54d375d8->leave($__internal_dfd49efb34c3d8466fc2aa7840ba3a58e8e44fb4561e26615fca356d54d375d8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

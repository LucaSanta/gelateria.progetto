<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_72ad988c80f28099e2cd78f24b3a4c84d643fe5617d9bf51bf7eb9fdcc2fd7cd extends Twig_Template
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
        $__internal_f22a13415c1b34a17573a2cfd6bc4c40d76489faf73268a44be43b165b19cd00 = $this->env->getExtension("native_profiler");
        $__internal_f22a13415c1b34a17573a2cfd6bc4c40d76489faf73268a44be43b165b19cd00->enter($__internal_f22a13415c1b34a17573a2cfd6bc4c40d76489faf73268a44be43b165b19cd00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f22a13415c1b34a17573a2cfd6bc4c40d76489faf73268a44be43b165b19cd00->leave($__internal_f22a13415c1b34a17573a2cfd6bc4c40d76489faf73268a44be43b165b19cd00_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aa2adc9b5be34879ec81127cf5e99897fa70470fd33178adff2ffc0b63f22f6d = $this->env->getExtension("native_profiler");
        $__internal_aa2adc9b5be34879ec81127cf5e99897fa70470fd33178adff2ffc0b63f22f6d->enter($__internal_aa2adc9b5be34879ec81127cf5e99897fa70470fd33178adff2ffc0b63f22f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aa2adc9b5be34879ec81127cf5e99897fa70470fd33178adff2ffc0b63f22f6d->leave($__internal_aa2adc9b5be34879ec81127cf5e99897fa70470fd33178adff2ffc0b63f22f6d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b7d959dc9b081d66e66db4c6e40ec4d26f78676bba05937a557e359ab5c30aaa = $this->env->getExtension("native_profiler");
        $__internal_b7d959dc9b081d66e66db4c6e40ec4d26f78676bba05937a557e359ab5c30aaa->enter($__internal_b7d959dc9b081d66e66db4c6e40ec4d26f78676bba05937a557e359ab5c30aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b7d959dc9b081d66e66db4c6e40ec4d26f78676bba05937a557e359ab5c30aaa->leave($__internal_b7d959dc9b081d66e66db4c6e40ec4d26f78676bba05937a557e359ab5c30aaa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_37ba77fec49d53f8f0d42e357faa7f34e7e7e9956ebfca54707a2addec58b6f9 = $this->env->getExtension("native_profiler");
        $__internal_37ba77fec49d53f8f0d42e357faa7f34e7e7e9956ebfca54707a2addec58b6f9->enter($__internal_37ba77fec49d53f8f0d42e357faa7f34e7e7e9956ebfca54707a2addec58b6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_37ba77fec49d53f8f0d42e357faa7f34e7e7e9956ebfca54707a2addec58b6f9->leave($__internal_37ba77fec49d53f8f0d42e357faa7f34e7e7e9956ebfca54707a2addec58b6f9_prof);

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

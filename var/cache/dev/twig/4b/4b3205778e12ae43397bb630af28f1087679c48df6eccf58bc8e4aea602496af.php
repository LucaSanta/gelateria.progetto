<?php

/* FrontBundle:Home:comefunziona.html.twig */
class __TwigTemplate_4f304ea20cd47c8704cc32bf7bdaf6d00c40aab96bd828bd73edde5baec5d5d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::basehome.html.twig", "FrontBundle:Home:comefunziona.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::basehome.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fc6f2d821b98fdef2322df3c29c463cd94e73c05d451f39cca17b31d478726a = $this->env->getExtension("native_profiler");
        $__internal_5fc6f2d821b98fdef2322df3c29c463cd94e73c05d451f39cca17b31d478726a->enter($__internal_5fc6f2d821b98fdef2322df3c29c463cd94e73c05d451f39cca17b31d478726a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Home:comefunziona.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fc6f2d821b98fdef2322df3c29c463cd94e73c05d451f39cca17b31d478726a->leave($__internal_5fc6f2d821b98fdef2322df3c29c463cd94e73c05d451f39cca17b31d478726a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_12c3024beffb3eaf3c9d54fbb0be1eb0624eca6deb6b82eed8613f450cd38dae = $this->env->getExtension("native_profiler");
        $__internal_12c3024beffb3eaf3c9d54fbb0be1eb0624eca6deb6b82eed8613f450cd38dae->enter($__internal_12c3024beffb3eaf3c9d54fbb0be1eb0624eca6deb6b82eed8613f450cd38dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<title>Gelatò - Come funziona</title>
<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" type=\"image/png\"/>
<link rel=\"stylesheet\" href=\"/css/comefunziona.css\" type=\"text/css\">
<div class=\"trasparente\">
    <p class=\"click\">Il miglior gelato a portata di click!</p>
    <p class=\"istruzioni\">Scegli le migliori gelaterie per gusto, città o giorno di apertura <br/> e condividi con i tuoi amici le tue gelaterie preferite!</p>
  </div>
  <div class=\"mockup\"><img id=\"mockupid\" src=\"/img/mockup.png\" alt=\"Mockup\"></div>
";
        
        $__internal_12c3024beffb3eaf3c9d54fbb0be1eb0624eca6deb6b82eed8613f450cd38dae->leave($__internal_12c3024beffb3eaf3c9d54fbb0be1eb0624eca6deb6b82eed8613f450cd38dae_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Home:comefunziona.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::basehome.html.twig" %}*/
/* {% block body %}*/
/* <title>Gelatò - Come funziona</title>*/
/* <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}" type="image/png"/>*/
/* <link rel="stylesheet" href="/css/comefunziona.css" type="text/css">*/
/* <div class="trasparente">*/
/*     <p class="click">Il miglior gelato a portata di click!</p>*/
/*     <p class="istruzioni">Scegli le migliori gelaterie per gusto, città o giorno di apertura <br/> e condividi con i tuoi amici le tue gelaterie preferite!</p>*/
/*   </div>*/
/*   <div class="mockup"><img id="mockupid" src="/img/mockup.png" alt="Mockup"></div>*/
/* {% endblock %}*/

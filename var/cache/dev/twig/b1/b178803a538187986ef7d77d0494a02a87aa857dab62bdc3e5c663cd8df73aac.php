<?php

/* BackBundle:Reportistica:tabella.html.twig */
class __TwigTemplate_cea7d61b89c7499caf88cdb82ed985ffc40abc64a5f29606a4b1d9ca83279e18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseadmin.html.twig", "BackBundle:Reportistica:tabella.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08098565b52af44d80cbeb00b1e2d94530c83a47fb7479f55777521c7553b184 = $this->env->getExtension("native_profiler");
        $__internal_08098565b52af44d80cbeb00b1e2d94530c83a47fb7479f55777521c7553b184->enter($__internal_08098565b52af44d80cbeb00b1e2d94530c83a47fb7479f55777521c7553b184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Reportistica:tabella.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08098565b52af44d80cbeb00b1e2d94530c83a47fb7479f55777521c7553b184->leave($__internal_08098565b52af44d80cbeb00b1e2d94530c83a47fb7479f55777521c7553b184_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff7ead2e20b3c93f276ffb78b7b541c60ca217bd40b9c328eec44695b05d23ba = $this->env->getExtension("native_profiler");
        $__internal_ff7ead2e20b3c93f276ffb78b7b541c60ca217bd40b9c328eec44695b05d23ba->enter($__internal_ff7ead2e20b3c93f276ffb78b7b541c60ca217bd40b9c328eec44695b05d23ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Reportistica";
        
        $__internal_ff7ead2e20b3c93f276ffb78b7b541c60ca217bd40b9c328eec44695b05d23ba->leave($__internal_ff7ead2e20b3c93f276ffb78b7b541c60ca217bd40b9c328eec44695b05d23ba_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5ba672d4745ebd38d35e272e9d37581ca3b797b7bc8f9a083429d037f68c3808 = $this->env->getExtension("native_profiler");
        $__internal_5ba672d4745ebd38d35e272e9d37581ca3b797b7bc8f9a083429d037f68c3808->enter($__internal_5ba672d4745ebd38d35e272e9d37581ca3b797b7bc8f9a083429d037f68c3808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "        <link rel=\"stylesheet\" href=\"/css/reportistica.css\" href=\"/css/reportistica.css\" type=\"text/css\">
";
        
        $__internal_5ba672d4745ebd38d35e272e9d37581ca3b797b7bc8f9a083429d037f68c3808->leave($__internal_5ba672d4745ebd38d35e272e9d37581ca3b797b7bc8f9a083429d037f68c3808_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3dcf5c1e50059eb9eed5bbc8ebde0f6ff50e5cfe8eff01bb987eaa0f68512f77 = $this->env->getExtension("native_profiler");
        $__internal_3dcf5c1e50059eb9eed5bbc8ebde0f6ff50e5cfe8eff01bb987eaa0f68512f77->enter($__internal_3dcf5c1e50059eb9eed5bbc8ebde0f6ff50e5cfe8eff01bb987eaa0f68512f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "

  <div id=\"larghezza\">
    <div id=\"sidebar\" class=\"sidebar1\">
      <br/>
      <form  method=\"GET\">

        <div class=\"lineaunoform\">
        <p class=\"benvenuto\">Reportistica:</p> 
        <p>Seleziona Gusto:</p>
        <input class=\"inputalto\" type=\"text\" name=\"Gusto\" value=\"Nome Gusto\">
      <br/>
      <p>Seleziona Città:</p>
        <input class=\"inputalto\" type=\"text\" name=\"Comune\" value=\"Nome Città\">

      <input class=\"bottone\" type=\"submit\" value=\"Ricerca\" />
        </div>

      </form>


      <form class=\"aggiungi\" method=\"GET\">
      <div class=\"lineadueform\">
      <p class=\"benvenuto\">Aggiungi - Modifica</p>   
        <p>Gelateria:</p>
              <input class=\"inputalto\" type=\"text\" name=\"Nuova gelateria\" value=\"Nome gelateria\">
         <p>Gusto:</p>      

      <input class=\"inputalto\" type=\"text\" name=\"Aggiungi gusto\" value=\"Nome gusto\">
       <input class=\"bottone\" type=\"submit\" value=\"Invia\" />

      </form>
      </div>

    </div>
    
    <div id=\"gelateria\">
      <div id=\"descrizione\">
        <p class=\"nomegelateria\">Reportistica \$parametro</p>       
        <p class=\"indirizzo\">Invia reportistica via mail >> <br/></p>
        <br/>
       <img class=\"grafico\" src=\"/img/Grafico_3.jpg\"></p><br/>
     
        <br/>
       

      </div>
    </div>
</div>



";
        
        $__internal_3dcf5c1e50059eb9eed5bbc8ebde0f6ff50e5cfe8eff01bb987eaa0f68512f77->leave($__internal_3dcf5c1e50059eb9eed5bbc8ebde0f6ff50e5cfe8eff01bb987eaa0f68512f77_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Reportistica:tabella.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 8,  61 => 7,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::baseadmin.html.twig" %}*/
/* */
/* {% block title %}Reportistica{% endblock %}*/
/* {% block stylesheets %}        <link rel="stylesheet" href="/css/reportistica.css" href="/css/reportistica.css" type="text/css">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*   <div id="larghezza">*/
/*     <div id="sidebar" class="sidebar1">*/
/*       <br/>*/
/*       <form  method="GET">*/
/* */
/*         <div class="lineaunoform">*/
/*         <p class="benvenuto">Reportistica:</p> */
/*         <p>Seleziona Gusto:</p>*/
/*         <input class="inputalto" type="text" name="Gusto" value="Nome Gusto">*/
/*       <br/>*/
/*       <p>Seleziona Città:</p>*/
/*         <input class="inputalto" type="text" name="Comune" value="Nome Città">*/
/* */
/*       <input class="bottone" type="submit" value="Ricerca" />*/
/*         </div>*/
/* */
/*       </form>*/
/* */
/* */
/*       <form class="aggiungi" method="GET">*/
/*       <div class="lineadueform">*/
/*       <p class="benvenuto">Aggiungi - Modifica</p>   */
/*         <p>Gelateria:</p>*/
/*               <input class="inputalto" type="text" name="Nuova gelateria" value="Nome gelateria">*/
/*          <p>Gusto:</p>      */
/* */
/*       <input class="inputalto" type="text" name="Aggiungi gusto" value="Nome gusto">*/
/*        <input class="bottone" type="submit" value="Invia" />*/
/* */
/*       </form>*/
/*       </div>*/
/* */
/*     </div>*/
/*     */
/*     <div id="gelateria">*/
/*       <div id="descrizione">*/
/*         <p class="nomegelateria">Reportistica $parametro</p>       */
/*         <p class="indirizzo">Invia reportistica via mail >> <br/></p>*/
/*         <br/>*/
/*        <img class="grafico" src="/img/Grafico_3.jpg"></p><br/>*/
/*      */
/*         <br/>*/
/*        */
/* */
/*       </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */

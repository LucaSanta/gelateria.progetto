<?php

/* BackBundle:Edit:editgusto.html.twig */
class __TwigTemplate_68d9336ccee2cfeb39b6f80a6af36c6b9d904069ae666df67aaa43e395c32aee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseadmin.html.twig", "BackBundle:Edit:editgusto.html.twig", 1);
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
        $__internal_493083e82eb4ada91d0b7b861c85d8b5666db9abc62a0c7dd73c74a7105d7eb7 = $this->env->getExtension("native_profiler");
        $__internal_493083e82eb4ada91d0b7b861c85d8b5666db9abc62a0c7dd73c74a7105d7eb7->enter($__internal_493083e82eb4ada91d0b7b861c85d8b5666db9abc62a0c7dd73c74a7105d7eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Edit:editgusto.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_493083e82eb4ada91d0b7b861c85d8b5666db9abc62a0c7dd73c74a7105d7eb7->leave($__internal_493083e82eb4ada91d0b7b861c85d8b5666db9abc62a0c7dd73c74a7105d7eb7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_827ba1f93b07af43541c4213dc7a052c5aeaf66f316b9cbcb5624691377f8c91 = $this->env->getExtension("native_profiler");
        $__internal_827ba1f93b07af43541c4213dc7a052c5aeaf66f316b9cbcb5624691377f8c91->enter($__internal_827ba1f93b07af43541c4213dc7a052c5aeaf66f316b9cbcb5624691377f8c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Gusto";
        
        $__internal_827ba1f93b07af43541c4213dc7a052c5aeaf66f316b9cbcb5624691377f8c91->leave($__internal_827ba1f93b07af43541c4213dc7a052c5aeaf66f316b9cbcb5624691377f8c91_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_087b0bf2b3cf99e4cb79772ab3e56d66284105fe1a77c53bbd9a4438ef966279 = $this->env->getExtension("native_profiler");
        $__internal_087b0bf2b3cf99e4cb79772ab3e56d66284105fe1a77c53bbd9a4438ef966279->enter($__internal_087b0bf2b3cf99e4cb79772ab3e56d66284105fe1a77c53bbd9a4438ef966279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "        <link rel=\"stylesheet\" href=\"/css/admingelateria.css\" href=\"/css/admingelateria.css\" type=\"text/css\">";
        
        $__internal_087b0bf2b3cf99e4cb79772ab3e56d66284105fe1a77c53bbd9a4438ef966279->leave($__internal_087b0bf2b3cf99e4cb79772ab3e56d66284105fe1a77c53bbd9a4438ef966279_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_20d50f2c25d674c5a8b1a018e35c5abcbd8dbd3beec31dccadcc056a39f5c48b = $this->env->getExtension("native_profiler");
        $__internal_20d50f2c25d674c5a8b1a018e35c5abcbd8dbd3beec31dccadcc056a39f5c48b->enter($__internal_20d50f2c25d674c5a8b1a018e35c5abcbd8dbd3beec31dccadcc056a39f5c48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo " <div id=\"larghezza\">
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
          <form method=\"GET\">  
          <p class=\"titolomodificagusto\">Aggiungi gusto:</p> 

          <input class=\"inputalto\" type=\"text\" name=\"Aggiungi gusto\" value=\"Nome gusto\">
                  <br/>

       <input class=\"bottone\" type=\"submit\" value=\"Aggiungi\" />

      </form>       
                        <br/>
                  <br/>


      <p class=\"titolomodificagusto\">Elimina gusto:</p> 
        <form action=\"GET\">
        <select id=\"gusto1\" class=\"formgusti\" name=\"gusto1\">
          <option value=\"Cioccolato\">Cioccolato</option>
          <option value=\"Pistacchio\">Pistacchio</option>
          <option value=\"Crema\">Crema</option>
          <option value=\"Vaniglia\">Vaniglia</option>
        </select>
        <br/>
      <input class=\"bottone\" type=\"submit\" value=\"Cancella\" />
      </form>

       </form>
        </div>
    </div>    
  </div>


";
        
        $__internal_20d50f2c25d674c5a8b1a018e35c5abcbd8dbd3beec31dccadcc056a39f5c48b->leave($__internal_20d50f2c25d674c5a8b1a018e35c5abcbd8dbd3beec31dccadcc056a39f5c48b_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Edit:editgusto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 8,  60 => 7,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::baseadmin.html.twig" %}*/
/* */
/* {% block title %}Edit Gusto{% endblock %}*/
/* {% block stylesheets %}        <link rel="stylesheet" href="/css/admingelateria.css" href="/css/admingelateria.css" type="text/css">{% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*  <div id="larghezza">*/
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
/*       */
/* */
/*       <div id="descrizione">*/
/*           <form method="GET">  */
/*           <p class="titolomodificagusto">Aggiungi gusto:</p> */
/* */
/*           <input class="inputalto" type="text" name="Aggiungi gusto" value="Nome gusto">*/
/*                   <br/>*/
/* */
/*        <input class="bottone" type="submit" value="Aggiungi" />*/
/* */
/*       </form>       */
/*                         <br/>*/
/*                   <br/>*/
/* */
/* */
/*       <p class="titolomodificagusto">Elimina gusto:</p> */
/*         <form action="GET">*/
/*         <select id="gusto1" class="formgusti" name="gusto1">*/
/*           <option value="Cioccolato">Cioccolato</option>*/
/*           <option value="Pistacchio">Pistacchio</option>*/
/*           <option value="Crema">Crema</option>*/
/*           <option value="Vaniglia">Vaniglia</option>*/
/*         </select>*/
/*         <br/>*/
/*       <input class="bottone" type="submit" value="Cancella" />*/
/*       </form>*/
/* */
/*        </form>*/
/*         </div>*/
/*     </div>    */
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */

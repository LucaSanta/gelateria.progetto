<?php

/* FrontBundle:User:Userpswdimenticata.html.twig */
class __TwigTemplate_be01e7e1852ced96712946c8a5b6cc03af7f72bdeeed1c4ab0b0aabd6bde0711 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseuser.html.twig", "FrontBundle:User:Userpswdimenticata.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseuser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_758240c8a14a1969887d61671ef906581730def7317b6000e600cbe6b1152a77 = $this->env->getExtension("native_profiler");
        $__internal_758240c8a14a1969887d61671ef906581730def7317b6000e600cbe6b1152a77->enter($__internal_758240c8a14a1969887d61671ef906581730def7317b6000e600cbe6b1152a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:User:Userpswdimenticata.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_758240c8a14a1969887d61671ef906581730def7317b6000e600cbe6b1152a77->leave($__internal_758240c8a14a1969887d61671ef906581730def7317b6000e600cbe6b1152a77_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d46c2f5551211cb5a875d43dac892248f6fd971866cff1897c6891cf9f4662e1 = $this->env->getExtension("native_profiler");
        $__internal_d46c2f5551211cb5a875d43dac892248f6fd971866cff1897c6891cf9f4662e1->enter($__internal_d46c2f5551211cb5a875d43dac892248f6fd971866cff1897c6891cf9f4662e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "        <link rel=\"stylesheet\" href=\"/css/login.css\" href=\"/css/login.css\" type=\"text/css\">
";
        
        $__internal_d46c2f5551211cb5a875d43dac892248f6fd971866cff1897c6891cf9f4662e1->leave($__internal_d46c2f5551211cb5a875d43dac892248f6fd971866cff1897c6891cf9f4662e1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_919efc7d74aaf49df94b7204799490f3eeca16789800e29883ae900324c663dd = $this->env->getExtension("native_profiler");
        $__internal_919efc7d74aaf49df94b7204799490f3eeca16789800e29883ae900324c663dd->enter($__internal_919efc7d74aaf49df94b7204799490f3eeca16789800e29883ae900324c663dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
   <div class=\"trasparente\">
    <p class=\"click\">Pirla!</p>
    <p class=\"istruzioni\">Inserisci il tuo nome utente e la tua mail per ricevere una nuova password tramite e-mail!</p>
    <br/><br/>
    <div id=\"formid\">
      <form action=\"GET\">
        <label class=\"nomeutente\" for=\"nomeutente\">nome utente</label><br/>
        <input type=\"text\" name=\"nomeutente\"/>
        <br/><br/>
        <label class=\"mail\" for=\"mail\">email</label><br/>
        <input type=\"mail\"  name=\"mail\"/>
        <br/><br/>
        <input class=\"bottone\" type=\"submit\" value=\"Conferma\"/>
      </form>
    </div>




  <div class=\"gelatini\"><img id=\"gelatinoidpsw\" src=\"/img/gelatino2.png\" alt=\"Gelatino\">  
  

</div>
 ";
        
        $__internal_919efc7d74aaf49df94b7204799490f3eeca16789800e29883ae900324c663dd->leave($__internal_919efc7d74aaf49df94b7204799490f3eeca16789800e29883ae900324c663dd_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:User:Userpswdimenticata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/*  {% extends "::baseuser.html.twig" %}*/
/* */
/* {% block stylesheets %}        <link rel="stylesheet" href="/css/login.css" href="/css/login.css" type="text/css">*/
/* {% endblock %}*/
/*  {% block body %}*/
/* */
/*    <div class="trasparente">*/
/*     <p class="click">Pirla!</p>*/
/*     <p class="istruzioni">Inserisci il tuo nome utente e la tua mail per ricevere una nuova password tramite e-mail!</p>*/
/*     <br/><br/>*/
/*     <div id="formid">*/
/*       <form action="GET">*/
/*         <label class="nomeutente" for="nomeutente">nome utente</label><br/>*/
/*         <input type="text" name="nomeutente"/>*/
/*         <br/><br/>*/
/*         <label class="mail" for="mail">email</label><br/>*/
/*         <input type="mail"  name="mail"/>*/
/*         <br/><br/>*/
/*         <input class="bottone" type="submit" value="Conferma"/>*/
/*       </form>*/
/*     </div>*/
/* */
/* */
/* */
/* */
/*   <div class="gelatini"><img id="gelatinoidpsw" src="/img/gelatino2.png" alt="Gelatino">  */
/*   */
/* */
/* </div>*/
/*  {% endblock %}*/
/* */
/* */

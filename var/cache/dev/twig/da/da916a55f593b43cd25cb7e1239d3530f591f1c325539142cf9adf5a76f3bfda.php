<?php

/* FrontBundle:User:userregistrati.html.twig */
class __TwigTemplate_94ff07f46d0dee2a3b55142a40ee5072cbd9cf80fe787476f27957d314cfa924 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseuser.html.twig", "FrontBundle:User:userregistrati.html.twig", 1);
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
        $__internal_a901c77693ba123979e966d33bb026307b5dea13fbc32394ac35c6201ad7249e = $this->env->getExtension("native_profiler");
        $__internal_a901c77693ba123979e966d33bb026307b5dea13fbc32394ac35c6201ad7249e->enter($__internal_a901c77693ba123979e966d33bb026307b5dea13fbc32394ac35c6201ad7249e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:User:userregistrati.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a901c77693ba123979e966d33bb026307b5dea13fbc32394ac35c6201ad7249e->leave($__internal_a901c77693ba123979e966d33bb026307b5dea13fbc32394ac35c6201ad7249e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5dc9b478e162adcd5dc36fa852f19fed6de88f7256fb9465189b4aec80c53b2a = $this->env->getExtension("native_profiler");
        $__internal_5dc9b478e162adcd5dc36fa852f19fed6de88f7256fb9465189b4aec80c53b2a->enter($__internal_5dc9b478e162adcd5dc36fa852f19fed6de88f7256fb9465189b4aec80c53b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "        <link rel=\"stylesheet\" href=\"/css/login.css\" href=\"/css/login.css\" type=\"text/css\">
";
        
        $__internal_5dc9b478e162adcd5dc36fa852f19fed6de88f7256fb9465189b4aec80c53b2a->leave($__internal_5dc9b478e162adcd5dc36fa852f19fed6de88f7256fb9465189b4aec80c53b2a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d3efaa7c80c8260da4d53fa509990f7bf09d9fff12ddf6d282427391c318af1 = $this->env->getExtension("native_profiler");
        $__internal_9d3efaa7c80c8260da4d53fa509990f7bf09d9fff12ddf6d282427391c318af1->enter($__internal_9d3efaa7c80c8260da4d53fa509990f7bf09d9fff12ddf6d282427391c318af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <div class=\"trasparente\">
    <p class=\"click\">Registrati!</p>
    <p class=\"istruzioni\">Inserisci qui le tue informazioni personali per registrarti e accedere a tutte le funzionalità del sito!</p>
    <br/><br/>
    <div id=\"formid\">
      <form action=\"GET\">
        <label class=\"nomeutente\" for=\"nomeutente\">nome utente</label><br/>
        <input type=\"text\" name=\"nomeutente\"/>
        <br/><br/>
        <label class=\"mail\" for=\"mail\">email</label><br/>
        <input type=\"mail\"  name=\"mail\"/>
        <br/><br/>
        <label class=\"password\" for=\"password1\">password</label><br/>
        <input class=\"password\" type=\"password\" name=\"password1\"/>
        <br/><br/>
        <label class=\"password\" for=\"password2\">Conferma password</label><br/>
        <input class=\"password\" type=\"password\" name=\"password2\"/>
        <br/><br/>
        <input class=\"bottone\" type=\"submit\" value=\"entra\"/>
      </form>
    </div>




  <div class=\"gelatini\"><img id=\"gelatinoidpsw\" src=\"/img/gelatino2.png\" alt=\"Gelatino\">  
  

</div>
 ";
        
        $__internal_9d3efaa7c80c8260da4d53fa509990f7bf09d9fff12ddf6d282427391c318af1->leave($__internal_9d3efaa7c80c8260da4d53fa509990f7bf09d9fff12ddf6d282427391c318af1_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:User:userregistrati.html.twig";
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
/*   <div class="trasparente">*/
/*     <p class="click">Registrati!</p>*/
/*     <p class="istruzioni">Inserisci qui le tue informazioni personali per registrarti e accedere a tutte le funzionalità del sito!</p>*/
/*     <br/><br/>*/
/*     <div id="formid">*/
/*       <form action="GET">*/
/*         <label class="nomeutente" for="nomeutente">nome utente</label><br/>*/
/*         <input type="text" name="nomeutente"/>*/
/*         <br/><br/>*/
/*         <label class="mail" for="mail">email</label><br/>*/
/*         <input type="mail"  name="mail"/>*/
/*         <br/><br/>*/
/*         <label class="password" for="password1">password</label><br/>*/
/*         <input class="password" type="password" name="password1"/>*/
/*         <br/><br/>*/
/*         <label class="password" for="password2">Conferma password</label><br/>*/
/*         <input class="password" type="password" name="password2"/>*/
/*         <br/><br/>*/
/*         <input class="bottone" type="submit" value="entra"/>*/
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

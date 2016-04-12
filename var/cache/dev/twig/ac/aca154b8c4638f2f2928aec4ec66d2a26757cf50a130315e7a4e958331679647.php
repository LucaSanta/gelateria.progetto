<?php

/* FrontBundle:User:userlogin.html.twig */
class __TwigTemplate_a9417f680931a098c5806a08707e379ac8e49187629f525089e5b89eb2d6e780 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseuser.html.twig", "FrontBundle:User:userlogin.html.twig", 1);
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
        $__internal_ce93b6b41bf4001510c92bbbf0f77ba1e4f3c3ab8a68e5271524ddda4d04e7fc = $this->env->getExtension("native_profiler");
        $__internal_ce93b6b41bf4001510c92bbbf0f77ba1e4f3c3ab8a68e5271524ddda4d04e7fc->enter($__internal_ce93b6b41bf4001510c92bbbf0f77ba1e4f3c3ab8a68e5271524ddda4d04e7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:User:userlogin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce93b6b41bf4001510c92bbbf0f77ba1e4f3c3ab8a68e5271524ddda4d04e7fc->leave($__internal_ce93b6b41bf4001510c92bbbf0f77ba1e4f3c3ab8a68e5271524ddda4d04e7fc_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6dc1c16998626fa7b447f465d3d5f137e100507008dddde031553ba2d2d99165 = $this->env->getExtension("native_profiler");
        $__internal_6dc1c16998626fa7b447f465d3d5f137e100507008dddde031553ba2d2d99165->enter($__internal_6dc1c16998626fa7b447f465d3d5f137e100507008dddde031553ba2d2d99165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "        <link rel=\"stylesheet\" href=\"/css/login.css\" href=\"/css/login.css\" type=\"text/css\">
";
        
        $__internal_6dc1c16998626fa7b447f465d3d5f137e100507008dddde031553ba2d2d99165->leave($__internal_6dc1c16998626fa7b447f465d3d5f137e100507008dddde031553ba2d2d99165_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c17f0011a4c1d0e86d36348f5b99f05860fd283358313b02aa1d795f4a52e39e = $this->env->getExtension("native_profiler");
        $__internal_c17f0011a4c1d0e86d36348f5b99f05860fd283358313b02aa1d795f4a52e39e->enter($__internal_c17f0011a4c1d0e86d36348f5b99f05860fd283358313b02aa1d795f4a52e39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <div class=\"trasparente\">
    <p class=\"click\">Bentornato!</p>
    <p class=\"istruzioni\">Inserisci qui le tue informazioni personali per accedere a tutte le funzionalità del sito!</p>
    <br/><br/>
    <div id=\"formid\">
      <form action=\"GET\">
        <label class=\"nomeutente\" for=\"nomeutente\">nome utente</label><br/>
        <input type=\"text\" name=\"nomeutente\"/>
        <br/><br/>
        <label class=\"mail\" for=\"mail\">email</label><br/>
        <input type=\"mail\"  name=\"mail\"/>
        <br/><br/>
        <label class=\"password\" for=\"password\">password</label><br/>
        <input class=\"password\" type=\"password\" name=\"password\"/>
        <br/><br/><br/>
        <input class=\"bottone\" type=\"submit\" value=\"entra\"/>
      </form>
    </div>
  </div>



  <div class=\"gelatini\"><img id=\"gelatinoid\" src=\"/img/gelatino2.png\" alt=\"Gelatino\">  
  <p class=\"registrati\"> Non hai un account? <a href=\"/app_dev.php/Userregistrati\">Registrati</a>
 </p>
  <p class=\"passwordimenticata\">Hai smarrito la tua Password? <a href=\"/app_dev.php/Userpswdimenticata\">Clicca qui</a></p>

</div>

 ";
        
        $__internal_c17f0011a4c1d0e86d36348f5b99f05860fd283358313b02aa1d795f4a52e39e->leave($__internal_c17f0011a4c1d0e86d36348f5b99f05860fd283358313b02aa1d795f4a52e39e_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:User:userlogin.html.twig";
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
/* {% extends "::baseuser.html.twig" %}*/
/* */
/* {% block stylesheets %}        <link rel="stylesheet" href="/css/login.css" href="/css/login.css" type="text/css">*/
/* {% endblock %}*/
/*  {% block body %}*/
/*   <div class="trasparente">*/
/*     <p class="click">Bentornato!</p>*/
/*     <p class="istruzioni">Inserisci qui le tue informazioni personali per accedere a tutte le funzionalità del sito!</p>*/
/*     <br/><br/>*/
/*     <div id="formid">*/
/*       <form action="GET">*/
/*         <label class="nomeutente" for="nomeutente">nome utente</label><br/>*/
/*         <input type="text" name="nomeutente"/>*/
/*         <br/><br/>*/
/*         <label class="mail" for="mail">email</label><br/>*/
/*         <input type="mail"  name="mail"/>*/
/*         <br/><br/>*/
/*         <label class="password" for="password">password</label><br/>*/
/*         <input class="password" type="password" name="password"/>*/
/*         <br/><br/><br/>*/
/*         <input class="bottone" type="submit" value="entra"/>*/
/*       </form>*/
/*     </div>*/
/*   </div>*/
/* */
/* */
/* */
/*   <div class="gelatini"><img id="gelatinoid" src="/img/gelatino2.png" alt="Gelatino">  */
/*   <p class="registrati"> Non hai un account? <a href="/app_dev.php/Userregistrati">Registrati</a>*/
/*  </p>*/
/*   <p class="passwordimenticata">Hai smarrito la tua Password? <a href="/app_dev.php/Userpswdimenticata">Clicca qui</a></p>*/
/* */
/* </div>*/
/* */
/*  {% endblock %}*/
/* */

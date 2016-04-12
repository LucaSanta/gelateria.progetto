<?php

/* FrontBundle:User:userlogin.html.twig */
class __TwigTemplate_95284ca17753e3c592d80977526b5d9b5c2ac4900209a33c912e7eac55429fb6 extends Twig_Template
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
        $__internal_28d2cfedf1500cb34cd54b17d976f05caa5674e8a54fb2609abaa24a28ae4d9c = $this->env->getExtension("native_profiler");
        $__internal_28d2cfedf1500cb34cd54b17d976f05caa5674e8a54fb2609abaa24a28ae4d9c->enter($__internal_28d2cfedf1500cb34cd54b17d976f05caa5674e8a54fb2609abaa24a28ae4d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:User:userlogin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28d2cfedf1500cb34cd54b17d976f05caa5674e8a54fb2609abaa24a28ae4d9c->leave($__internal_28d2cfedf1500cb34cd54b17d976f05caa5674e8a54fb2609abaa24a28ae4d9c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_71f1c3eba35aa03cb04bd1b6f3d885c3e9086a2d42368f45399f7e31abf1d5bd = $this->env->getExtension("native_profiler");
        $__internal_71f1c3eba35aa03cb04bd1b6f3d885c3e9086a2d42368f45399f7e31abf1d5bd->enter($__internal_71f1c3eba35aa03cb04bd1b6f3d885c3e9086a2d42368f45399f7e31abf1d5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "        <link rel=\"stylesheet\" href=\"/css/login.css\" href=\"/css/login.css\" type=\"text/css\">
";
        
        $__internal_71f1c3eba35aa03cb04bd1b6f3d885c3e9086a2d42368f45399f7e31abf1d5bd->leave($__internal_71f1c3eba35aa03cb04bd1b6f3d885c3e9086a2d42368f45399f7e31abf1d5bd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ace02cec9c2f76dbe660806d9685f358830932990ff5b811b94a0e9fbed5e84 = $this->env->getExtension("native_profiler");
        $__internal_8ace02cec9c2f76dbe660806d9685f358830932990ff5b811b94a0e9fbed5e84->enter($__internal_8ace02cec9c2f76dbe660806d9685f358830932990ff5b811b94a0e9fbed5e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8ace02cec9c2f76dbe660806d9685f358830932990ff5b811b94a0e9fbed5e84->leave($__internal_8ace02cec9c2f76dbe660806d9685f358830932990ff5b811b94a0e9fbed5e84_prof);

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

<?php

/* FrontBundle:User:Userimpostazioniutente.html.twig */
class __TwigTemplate_bc54046563f81fd52de616739eef6fa087856259441af610e65a8bd30b6c8656 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontBundle:User:Userimpostazioniutente.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cd2505dac6ab1dd3dbd044a61c73f2f2c0f6226701097d3db1bc66dcf142863 = $this->env->getExtension("native_profiler");
        $__internal_8cd2505dac6ab1dd3dbd044a61c73f2f2c0f6226701097d3db1bc66dcf142863->enter($__internal_8cd2505dac6ab1dd3dbd044a61c73f2f2c0f6226701097d3db1bc66dcf142863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:User:Userimpostazioniutente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cd2505dac6ab1dd3dbd044a61c73f2f2c0f6226701097d3db1bc66dcf142863->leave($__internal_8cd2505dac6ab1dd3dbd044a61c73f2f2c0f6226701097d3db1bc66dcf142863_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9581783ed9d87ecdb6a2c9c92df835db73a80973844cfbf0b731b0e29be27b26 = $this->env->getExtension("native_profiler");
        $__internal_9581783ed9d87ecdb6a2c9c92df835db73a80973844cfbf0b731b0e29be27b26->enter($__internal_9581783ed9d87ecdb6a2c9c92df835db73a80973844cfbf0b731b0e29be27b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "        <link rel=\"stylesheet\" href=\"/css/impostazioneutente.css\" href=\"/css/impostazioneutente.css\" type=\"text/css\">
";
        
        $__internal_9581783ed9d87ecdb6a2c9c92df835db73a80973844cfbf0b731b0e29be27b26->leave($__internal_9581783ed9d87ecdb6a2c9c92df835db73a80973844cfbf0b731b0e29be27b26_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_52dd5caa4e2a0e8f851c0074baaea3b99e3b92e40f7702ac5edea9517b41c5eb = $this->env->getExtension("native_profiler");
        $__internal_52dd5caa4e2a0e8f851c0074baaea3b99e3b92e40f7702ac5edea9517b41c5eb->enter($__internal_52dd5caa4e2a0e8f851c0074baaea3b99e3b92e40f7702ac5edea9517b41c5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div id=\"gelateria\">
      <div id=\"idgelatino\"><img class=\"gelatino\" src=\"/img/gelatino3.png\"></div>
      <div id=\"descrizione\">
          <form method=\"GET\">


      <label for=”Nomeutente″>Nome utente:<br></label>
      <input class=\"nomegelateria\" name=\"Nomeutente\" type=\"text\" value=\"Beatrice\" size=\"40\" maxlength=\"200\" />
              <br/>

      <label for=”mail″>E-mail:<br></label>
      <input class=\"indirizzo\" name=\"mail\" type=\"text\" value=\"beatrice.castaldo@gmail.com\" size=\"40\" maxlength=\"200\" />
        <br/>

      <label for=”PSW″>Password:<br></label>
      <input class=\"indirizzo\" name=\"PSW\" type=\"password\" value=\"MilanoCapitale!\" size=\"40\" maxlength=\"200\" />
       <br/>


      <label for=”PSW2″>Conferma Password:<br></label>
      <input class=\"indirizzo\" name=\"PSW2\" type=\"password\" value=\"MilanoCapitale!\" size=\"40\" maxlength=\"200\" />
      <br/>

      

        <input class=\"bottone\" type=\"submit\" value=\"Salva\" />

       </form>


        <br/>
        <p class=\"gustidisponibili\">Lista delle gelaterie preferite <a href=\"#\"><img class=\"icona1\" src=\"/img/shapes.png\"></a>
</p>
        <div class=\"gusti\">
        <div class=\"elencogusti\">
          <p>Gelateria Giolitti <a href=\"#\"><img class=\"icona1\" src=\"/img/cestino.png\"></a> </p>
          <p>Gelateria Santa <a href=\"#\"><img class=\"icona1\" src=\"/img/cestino.png\"></a></p>
          <p>Gelateria Castaldo <a href=\"#\"><img class=\"icona1\" src=\"/img/cestino.png\"></a></p>
          <p>Gelateria Tundra  <a href=\"#\"><img class=\"icona1\" src=\"/img/cestino.png\"></a></p>
          <p>Gelateria Sir Oliver <a href=\"#\"><img class=\"icona1\" src=\"/img/cestino.png\"></a></p>
        </div>
      </div>
      
      </div>
    </div>
  </div>


 ";
        
        $__internal_52dd5caa4e2a0e8f851c0074baaea3b99e3b92e40f7702ac5edea9517b41c5eb->leave($__internal_52dd5caa4e2a0e8f851c0074baaea3b99e3b92e40f7702ac5edea9517b41c5eb_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:User:Userimpostazioniutente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  48 => 4,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block stylesheets %}        <link rel="stylesheet" href="/css/impostazioneutente.css" href="/css/impostazioneutente.css" type="text/css">*/
/* {% endblock %}*/
/*  {% block body %}*/
/* <div id="gelateria">*/
/*       <div id="idgelatino"><img class="gelatino" src="/img/gelatino3.png"></div>*/
/*       <div id="descrizione">*/
/*           <form method="GET">*/
/* */
/* */
/*       <label for=”Nomeutente″>Nome utente:<br></label>*/
/*       <input class="nomegelateria" name="Nomeutente" type="text" value="Beatrice" size="40" maxlength="200" />*/
/*               <br/>*/
/* */
/*       <label for=”mail″>E-mail:<br></label>*/
/*       <input class="indirizzo" name="mail" type="text" value="beatrice.castaldo@gmail.com" size="40" maxlength="200" />*/
/*         <br/>*/
/* */
/*       <label for=”PSW″>Password:<br></label>*/
/*       <input class="indirizzo" name="PSW" type="password" value="MilanoCapitale!" size="40" maxlength="200" />*/
/*        <br/>*/
/* */
/* */
/*       <label for=”PSW2″>Conferma Password:<br></label>*/
/*       <input class="indirizzo" name="PSW2" type="password" value="MilanoCapitale!" size="40" maxlength="200" />*/
/*       <br/>*/
/* */
/*       */
/* */
/*         <input class="bottone" type="submit" value="Salva" />*/
/* */
/*        </form>*/
/* */
/* */
/*         <br/>*/
/*         <p class="gustidisponibili">Lista delle gelaterie preferite <a href="#"><img class="icona1" src="/img/shapes.png"></a>*/
/* </p>*/
/*         <div class="gusti">*/
/*         <div class="elencogusti">*/
/*           <p>Gelateria Giolitti <a href="#"><img class="icona1" src="/img/cestino.png"></a> </p>*/
/*           <p>Gelateria Santa <a href="#"><img class="icona1" src="/img/cestino.png"></a></p>*/
/*           <p>Gelateria Castaldo <a href="#"><img class="icona1" src="/img/cestino.png"></a></p>*/
/*           <p>Gelateria Tundra  <a href="#"><img class="icona1" src="/img/cestino.png"></a></p>*/
/*           <p>Gelateria Sir Oliver <a href="#"><img class="icona1" src="/img/cestino.png"></a></p>*/
/*         </div>*/
/*       </div>*/
/*       */
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/* */
/*  {% endblock %}*/
/* */

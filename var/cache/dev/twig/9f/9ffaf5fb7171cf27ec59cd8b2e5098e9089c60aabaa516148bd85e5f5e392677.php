<?php

/* BackBundle:Edit:edit.html.twig */
class __TwigTemplate_b9607016ea55c8f548bc38bf01202364f7d0bd197cb249ae4a88753d574377ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseadmin.html.twig", "BackBundle:Edit:edit.html.twig", 1);
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
        $__internal_49c1cf4c87c5181571cc5891aa091d0042b487732d2143ab3fe99803e709809d = $this->env->getExtension("native_profiler");
        $__internal_49c1cf4c87c5181571cc5891aa091d0042b487732d2143ab3fe99803e709809d->enter($__internal_49c1cf4c87c5181571cc5891aa091d0042b487732d2143ab3fe99803e709809d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Edit:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49c1cf4c87c5181571cc5891aa091d0042b487732d2143ab3fe99803e709809d->leave($__internal_49c1cf4c87c5181571cc5891aa091d0042b487732d2143ab3fe99803e709809d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6cc93b68e4c1b04e6e1eee07402d223d5e7be8383bcb1352c4da3f80b8499485 = $this->env->getExtension("native_profiler");
        $__internal_6cc93b68e4c1b04e6e1eee07402d223d5e7be8383bcb1352c4da3f80b8499485->enter($__internal_6cc93b68e4c1b04e6e1eee07402d223d5e7be8383bcb1352c4da3f80b8499485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Gelateria";
        
        $__internal_6cc93b68e4c1b04e6e1eee07402d223d5e7be8383bcb1352c4da3f80b8499485->leave($__internal_6cc93b68e4c1b04e6e1eee07402d223d5e7be8383bcb1352c4da3f80b8499485_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c9404e18b52380280725b4387911f7e3a19ce339e59790cb7529c359e3341c14 = $this->env->getExtension("native_profiler");
        $__internal_c9404e18b52380280725b4387911f7e3a19ce339e59790cb7529c359e3341c14->enter($__internal_c9404e18b52380280725b4387911f7e3a19ce339e59790cb7529c359e3341c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "        <link rel=\"stylesheet\" href=\"/css/admingelateria.css\" href=\"/css/admingelateria.css\" type=\"text/css\">";
        
        $__internal_c9404e18b52380280725b4387911f7e3a19ce339e59790cb7529c359e3341c14->leave($__internal_c9404e18b52380280725b4387911f7e3a19ce339e59790cb7529c359e3341c14_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b97a4ece6f9c2534b9228ca66a0bf3fdbe381f5c7e24609c19e9c043e0ee46e = $this->env->getExtension("native_profiler");
        $__internal_1b97a4ece6f9c2534b9228ca66a0bf3fdbe381f5c7e24609c19e9c043e0ee46e->enter($__internal_1b97a4ece6f9c2534b9228ca66a0bf3fdbe381f5c7e24609c19e9c043e0ee46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
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
      

          <form method=\"GET\">         
      <div id=\"descrizione\">
       <label for=”Nomeutente″>Nome gelateria:<br></label>
      <input class=\"nomegelateria\" name=\"Nomeutente\" type=\"text\" value=\"Gelateria Giolitti\" size=\"40\" maxlength=\"200\" />
              <br/>


        <fieldset>
        <label class=\"labelimmagine\">Scegli immagine:</label><br><br>
            <label for=\"1\"><img class=\"gelatino\" src=\"/img/gelatino1.png\"></label>
            <input id=\"1\"  type=\"radio\" name=\"imglogogel\" value=\"1\"/>

            <label for=\"2\"><img class=\"gelatino\" src=\"/img/gelatino2.png\"></label>
            <input id=\"2\"  type=\"radio\" name=\"imglogogel\" value=\"2\"/>

            <label for=\"3\"><img class=\"gelatino\" src=\"/img/gelatino3.png\"></label>
            <input id=\"3\"  type=\"radio\" name=\"imglogogel\" value=\"3\"/>

            <label for=\"4\"><img class=\"gelatino\" src=\"/img/gelatino4.png\"></label>
            <input id=\"4\"  type=\"radio\" name=\"imglogogel\" value=\"4\"/>

            <label for=\"5\"><img class=\"gelatino\" src=\"/img/gelatino5.png\"></label>
            <input id=\"5\"  type=\"radio\" name=\"imglogogel\" value=\"5\"/>

            <label for=\"6\"><img class=\"gelatino\" src=\"/img/gelatino6.png\"></label>
            <input id=\"6\" type=\"radio\" name=\"imglogogel\" value=\"6\"/>
        

    </fieldset>

     
      <label for=”indirizzo″>Indirizzo:<br></label>
      <input class=\"indirizzo\" name=\"indirizzo\" type=\"text\" value=\"Via Uffici del Vicario, 40 \" size=\"40\" maxlength=\"200\" />
        <br/>

      <label for=”indirizzo″>Città:<br></label>
      <input class=\"indirizzo\" name=\"città\" type=\"text\" value=\"Roma \" size=\"40\" maxlength=\"200\" />
        <br/>

      <label for=”phone″>Tel:<br></label>
      <input class=\"indirizzo\" name=\"phone\" type=\"text\" value=\"+39 06 699 12 43\" size=\"40\" maxlength=\"200\" />
       <br/>
       <br/>

      <fieldset>
        <label class=\"labelimmagine\"><p class=\"gustidisponibili\">Seleziona i gusti disponibili in gelateria:</p>
</label>
        <br/>

            <input id=\"Cioccolato\"  type=\"checkbox\" name=\"gusto\" value=\"Cioccolato\"/>
            <label for=\"Cioccolato\">Cioccolato</label>
          
            <input id=\"Pistacchio\"  type=\"checkbox\" name=\"gusto\" value=\"Pistacchio\"/>
            <label for=\"Pistacchio\">Pistacchio</label>
            
            <input id=\"Amarena\"  type=\"checkbox\" name=\"gusto\" value=\"Amarena\"/>
            <label for=\"Amarena\">Amarena</label>

            <input id=\"Tiramisu\"  type=\"checkbox\" name=\"gusto\" value=\"Tiramisu\"/>
            <label for=\"Tiramisu\">Tiramisu</label>

            <input id=\"Melone\"  type=\"checkbox\" name=\"gusto\" value=\"Melone\"/>
            <label for=\"Melone\">Melone</label>

            <input id=\"Crema\"  type=\"checkbox\" name=\"gusto\" value=\"Crema\"/>
            <label for=\"Crema\">Crema</label>
            </fieldset>
                   <br/>


        <input class=\"bottone\" type=\"submit\" value=\"Salva\" />
        <form action=\"GET\">
      <input class=\"bottone\" type=\"submit\" value=\"Cancella\" />
      </form>

       </form>
        </div>
    </div>   
</div>    
";
        
        $__internal_1b97a4ece6f9c2534b9228ca66a0bf3fdbe381f5c7e24609c19e9c043e0ee46e->leave($__internal_1b97a4ece6f9c2534b9228ca66a0bf3fdbe381f5c7e24609c19e9c043e0ee46e_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Edit:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::baseadmin.html.twig" %}*/
/* */
/* {% block title %}Edit Gelateria{% endblock %}*/
/* {% block stylesheets %}        <link rel="stylesheet" href="/css/admingelateria.css" href="/css/admingelateria.css" type="text/css">{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <div id="larghezza">*/
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
/*           <form method="GET">         */
/*       <div id="descrizione">*/
/*        <label for=”Nomeutente″>Nome gelateria:<br></label>*/
/*       <input class="nomegelateria" name="Nomeutente" type="text" value="Gelateria Giolitti" size="40" maxlength="200" />*/
/*               <br/>*/
/* */
/* */
/*         <fieldset>*/
/*         <label class="labelimmagine">Scegli immagine:</label><br><br>*/
/*             <label for="1"><img class="gelatino" src="/img/gelatino1.png"></label>*/
/*             <input id="1"  type="radio" name="imglogogel" value="1"/>*/
/* */
/*             <label for="2"><img class="gelatino" src="/img/gelatino2.png"></label>*/
/*             <input id="2"  type="radio" name="imglogogel" value="2"/>*/
/* */
/*             <label for="3"><img class="gelatino" src="/img/gelatino3.png"></label>*/
/*             <input id="3"  type="radio" name="imglogogel" value="3"/>*/
/* */
/*             <label for="4"><img class="gelatino" src="/img/gelatino4.png"></label>*/
/*             <input id="4"  type="radio" name="imglogogel" value="4"/>*/
/* */
/*             <label for="5"><img class="gelatino" src="/img/gelatino5.png"></label>*/
/*             <input id="5"  type="radio" name="imglogogel" value="5"/>*/
/* */
/*             <label for="6"><img class="gelatino" src="/img/gelatino6.png"></label>*/
/*             <input id="6" type="radio" name="imglogogel" value="6"/>*/
/*         */
/* */
/*     </fieldset>*/
/* */
/*      */
/*       <label for=”indirizzo″>Indirizzo:<br></label>*/
/*       <input class="indirizzo" name="indirizzo" type="text" value="Via Uffici del Vicario, 40 " size="40" maxlength="200" />*/
/*         <br/>*/
/* */
/*       <label for=”indirizzo″>Città:<br></label>*/
/*       <input class="indirizzo" name="città" type="text" value="Roma " size="40" maxlength="200" />*/
/*         <br/>*/
/* */
/*       <label for=”phone″>Tel:<br></label>*/
/*       <input class="indirizzo" name="phone" type="text" value="+39 06 699 12 43" size="40" maxlength="200" />*/
/*        <br/>*/
/*        <br/>*/
/* */
/*       <fieldset>*/
/*         <label class="labelimmagine"><p class="gustidisponibili">Seleziona i gusti disponibili in gelateria:</p>*/
/* </label>*/
/*         <br/>*/
/* */
/*             <input id="Cioccolato"  type="checkbox" name="gusto" value="Cioccolato"/>*/
/*             <label for="Cioccolato">Cioccolato</label>*/
/*           */
/*             <input id="Pistacchio"  type="checkbox" name="gusto" value="Pistacchio"/>*/
/*             <label for="Pistacchio">Pistacchio</label>*/
/*             */
/*             <input id="Amarena"  type="checkbox" name="gusto" value="Amarena"/>*/
/*             <label for="Amarena">Amarena</label>*/
/* */
/*             <input id="Tiramisu"  type="checkbox" name="gusto" value="Tiramisu"/>*/
/*             <label for="Tiramisu">Tiramisu</label>*/
/* */
/*             <input id="Melone"  type="checkbox" name="gusto" value="Melone"/>*/
/*             <label for="Melone">Melone</label>*/
/* */
/*             <input id="Crema"  type="checkbox" name="gusto" value="Crema"/>*/
/*             <label for="Crema">Crema</label>*/
/*             </fieldset>*/
/*                    <br/>*/
/* */
/* */
/*         <input class="bottone" type="submit" value="Salva" />*/
/*         <form action="GET">*/
/*       <input class="bottone" type="submit" value="Cancella" />*/
/*       </form>*/
/* */
/*        </form>*/
/*         </div>*/
/*     </div>   */
/* </div>    */
/* {% endblock %}*/

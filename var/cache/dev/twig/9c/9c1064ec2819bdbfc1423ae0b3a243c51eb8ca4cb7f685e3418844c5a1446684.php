<?php

/* FrontBundle:Gelateria:segnala.html.twig */
class __TwigTemplate_c456a92ebfe4caaff1d443d2db2241b43062b0d7e8d0c6a20964f20fc6d8e9e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontBundle:Gelateria:segnala.html.twig", 1);
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
        $__internal_ee006a9d147c6115ef8304771b6aaa93c224fe9901be453583544beff2dc8c13 = $this->env->getExtension("native_profiler");
        $__internal_ee006a9d147c6115ef8304771b6aaa93c224fe9901be453583544beff2dc8c13->enter($__internal_ee006a9d147c6115ef8304771b6aaa93c224fe9901be453583544beff2dc8c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Gelateria:segnala.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee006a9d147c6115ef8304771b6aaa93c224fe9901be453583544beff2dc8c13->leave($__internal_ee006a9d147c6115ef8304771b6aaa93c224fe9901be453583544beff2dc8c13_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c59845d721d7e340fe3f3a9b9504ce91cd08d0fb46556bd146f955fcb6537c31 = $this->env->getExtension("native_profiler");
        $__internal_c59845d721d7e340fe3f3a9b9504ce91cd08d0fb46556bd146f955fcb6537c31->enter($__internal_c59845d721d7e340fe3f3a9b9504ce91cd08d0fb46556bd146f955fcb6537c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "        <link rel=\"stylesheet\" href=\"/css/segnalagelateria.css\" href=\"/css/segnalagelateria.css\" type=\"text/css\">
";
        
        $__internal_c59845d721d7e340fe3f3a9b9504ce91cd08d0fb46556bd146f955fcb6537c31->leave($__internal_c59845d721d7e340fe3f3a9b9504ce91cd08d0fb46556bd146f955fcb6537c31_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffc3038ab89cb4527dbb3a0a0ceab92421b2f770660783e226e2a5df125a07b0 = $this->env->getExtension("native_profiler");
        $__internal_ffc3038ab89cb4527dbb3a0a0ceab92421b2f770660783e226e2a5df125a07b0->enter($__internal_ffc3038ab89cb4527dbb3a0a0ceab92421b2f770660783e226e2a5df125a07b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "  <div id=\"gelateria\">
      <div id=\"idgelatino\"><img class=\"gelatino\" src=\"/img/gelatino3.png\"></div>

          <form method=\"GET\">         
      <div id=\"descrizione\">
        <p class=\"titolosegnala\">Segnalaci una gelateria non presente nel sito!</p><br/>
        <label for=”Nomeutente″>Nome gelateria:<br></label>
      <input class=\"nomegelateria\" name=\"Nomeutente\" type=\"text\" value=\"Gelateria Giolitti\" size=\"40\" maxlength=\"200\" />
              <br/>

     
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
        <br/><br/>
            <input id=\"Cioccolato\" type=\"checkbox\" name=\"gusto\" value=\"Cioccolato\"/>
            <label class=\"scegligusti\" for=\"Cioccolato\">Cioccolato</label>
            <input id=\"Pistacchio\"  type=\"checkbox\" name=\"gusto\" value=\"Pistacchio\"/>
            <label class=\"scegligusti\" for=\"Pistacchio\">Pistacchio</label>
            <input id=\"Amarena\"  type=\"checkbox\" name=\"gusto\" value=\"Amarena\"/>
            <label class=\"scegligusti\" for=\"Amarena\">Amarena</label>
            <input id=\"Tiramisu\"  type=\"checkbox\" name=\"gusto\" value=\"Tiramisu\"/>
            <label class=\"scegligusti\" for=\"Tiramisu\">Tiramisù</label>
            <input id=\"Melone\"  type=\"checkbox\" name=\"gusto\" value=\"Melone\"/>
            <label class=\"scegligusti\" for=\"Melone\">Melone</label>
            <input id=\"Crema\"  type=\"checkbox\" name=\"gusto\" value=\"Crema\"/>
            <label class=\"scegligusti\" for=\"Crema\">Crema</label>

            <br/><br/>

            <input id=\"Limone\" type=\"checkbox\" name=\"gusto\" value=\"Limone\"/>
            <label class=\"scegligusti\" for=\"Limone\">Limone</label>
            <input id=\"Frutti di bosco\" type=\"checkbox\" name=\"gusto\" value=\"Frutti di bosco\"/>
            <label class=\"scegligusti\" for=\"Frutti di bosco\">Frutti di bosco</label>
            <input id=\"Cocco\" type=\"checkbox\" name=\"gusto\" value=\"Cocco\"/>
            <label class=\"scegligusti\" for=\"Cocco\">Cocco</label>
            <input id=\"Arancia\"  type=\"checkbox\" name=\"gusto\" value=\"Arancia\"/>
            <label class=\"scegligusti\" for=\"Arancia\">Arancia</label>
            <input id=\"Puffo\" type=\"checkbox\" name=\"gusto\" value=\"Puffo\"/>
            <label class=\"scegligusti\" for=\"Puffo\">Puffo</label>
            <input id=\"Nocciola\" type=\"checkbox\" name=\"gusto\" value=\"Nocciola\"/>
            <label class=\"scegligusti\" for=\"Nocciola\">Nocciola</label>
      </fieldset>

      <br/><br/>


        <input class=\"bottone\" type=\"submit\" value=\"Salva\" />
        <form action=\"GET\">
      <input class=\"bottone\" type=\"submit\" value=\"Cancella\" />
      </form>

       </form>
        </div>
    </div>    
  </div>
";
        
        $__internal_ffc3038ab89cb4527dbb3a0a0ceab92421b2f770660783e226e2a5df125a07b0->leave($__internal_ffc3038ab89cb4527dbb3a0a0ceab92421b2f770660783e226e2a5df125a07b0_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Gelateria:segnala.html.twig";
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
/* {% block stylesheets %}        <link rel="stylesheet" href="/css/segnalagelateria.css" href="/css/segnalagelateria.css" type="text/css">*/
/* {% endblock %}*/
/* {% block body %}*/
/*   <div id="gelateria">*/
/*       <div id="idgelatino"><img class="gelatino" src="/img/gelatino3.png"></div>*/
/* */
/*           <form method="GET">         */
/*       <div id="descrizione">*/
/*         <p class="titolosegnala">Segnalaci una gelateria non presente nel sito!</p><br/>*/
/*         <label for=”Nomeutente″>Nome gelateria:<br></label>*/
/*       <input class="nomegelateria" name="Nomeutente" type="text" value="Gelateria Giolitti" size="40" maxlength="200" />*/
/*               <br/>*/
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
/*         </label>*/
/*         <br/><br/>*/
/*             <input id="Cioccolato" type="checkbox" name="gusto" value="Cioccolato"/>*/
/*             <label class="scegligusti" for="Cioccolato">Cioccolato</label>*/
/*             <input id="Pistacchio"  type="checkbox" name="gusto" value="Pistacchio"/>*/
/*             <label class="scegligusti" for="Pistacchio">Pistacchio</label>*/
/*             <input id="Amarena"  type="checkbox" name="gusto" value="Amarena"/>*/
/*             <label class="scegligusti" for="Amarena">Amarena</label>*/
/*             <input id="Tiramisu"  type="checkbox" name="gusto" value="Tiramisu"/>*/
/*             <label class="scegligusti" for="Tiramisu">Tiramisù</label>*/
/*             <input id="Melone"  type="checkbox" name="gusto" value="Melone"/>*/
/*             <label class="scegligusti" for="Melone">Melone</label>*/
/*             <input id="Crema"  type="checkbox" name="gusto" value="Crema"/>*/
/*             <label class="scegligusti" for="Crema">Crema</label>*/
/* */
/*             <br/><br/>*/
/* */
/*             <input id="Limone" type="checkbox" name="gusto" value="Limone"/>*/
/*             <label class="scegligusti" for="Limone">Limone</label>*/
/*             <input id="Frutti di bosco" type="checkbox" name="gusto" value="Frutti di bosco"/>*/
/*             <label class="scegligusti" for="Frutti di bosco">Frutti di bosco</label>*/
/*             <input id="Cocco" type="checkbox" name="gusto" value="Cocco"/>*/
/*             <label class="scegligusti" for="Cocco">Cocco</label>*/
/*             <input id="Arancia"  type="checkbox" name="gusto" value="Arancia"/>*/
/*             <label class="scegligusti" for="Arancia">Arancia</label>*/
/*             <input id="Puffo" type="checkbox" name="gusto" value="Puffo"/>*/
/*             <label class="scegligusti" for="Puffo">Puffo</label>*/
/*             <input id="Nocciola" type="checkbox" name="gusto" value="Nocciola"/>*/
/*             <label class="scegligusti" for="Nocciola">Nocciola</label>*/
/*       </fieldset>*/
/* */
/*       <br/><br/>*/
/* */
/* */
/*         <input class="bottone" type="submit" value="Salva" />*/
/*         <form action="GET">*/
/*       <input class="bottone" type="submit" value="Cancella" />*/
/*       </form>*/
/* */
/*        </form>*/
/*         </div>*/
/*     </div>    */
/*   </div>*/
/* {% endblock %}*/
/* */

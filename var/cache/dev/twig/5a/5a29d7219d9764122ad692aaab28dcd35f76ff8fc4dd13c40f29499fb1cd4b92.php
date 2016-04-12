<?php

/* FrontBundle:Home:home.html.twig */
class __TwigTemplate_f853913011d3a1d5282730d3e18f75688ea8a2d51ac4a638ceabbae2b90dd862 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::basehome.html.twig", "FrontBundle:Home:home.html.twig", 1);
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
        $__internal_f62991da03f269cff7b933a431cd87826c816a75b5537e264c2a69c5734f257b = $this->env->getExtension("native_profiler");
        $__internal_f62991da03f269cff7b933a431cd87826c816a75b5537e264c2a69c5734f257b->enter($__internal_f62991da03f269cff7b933a431cd87826c816a75b5537e264c2a69c5734f257b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Home:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f62991da03f269cff7b933a431cd87826c816a75b5537e264c2a69c5734f257b->leave($__internal_f62991da03f269cff7b933a431cd87826c816a75b5537e264c2a69c5734f257b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e36f01e1246d9b6ba1133c90b7bfe6615475a882e14acc8a61b4c8e3a8d5e70b = $this->env->getExtension("native_profiler");
        $__internal_e36f01e1246d9b6ba1133c90b7bfe6615475a882e14acc8a61b4c8e3a8d5e70b->enter($__internal_e36f01e1246d9b6ba1133c90b7bfe6615475a882e14acc8a61b4c8e3a8d5e70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<title>Gelatò</title>
  <div class=\"trasparente\">
        <form method=\"GET\">
            
            <h2>Trova la tua gelateria!</h2>
            <p>Seleziona i tuoi gusti preferiti oppure scegli il comune o il giorno in cui vorresti andare a rinfrescare la tua giornata!</p>
 
            <div class=\"lineaunoform\">
                
                <select id=\"gusto1\" class=\"formgusti\" name=\"gusto1\">
                    <option value=\"Cioccolato\">Cioccolato</option>
                    <option value=\"Pistacchio\">Pistacchio</option>
                    <option value=\"Crema\">Crema</option>
                    <option value=\"Vaniglia\">Vaniglia</option>
                </select>
                <select id=\"gusto2\"  class=\"formgusti\" name=\"gusto2\">
                    <option value=\"Cioccolato\">Cioccolato</option>
                    <option value=\"Pistacchio\">Pistacchio</option>
                    <option value=\"Crema\">Crema</option>
                    <option value=\"Vaniglia\">Vaniglia</option>
                </select>
                <select id=\"gusto3\" class=\"formgusti\" name=\"gusto3\">
                    <option value=\"Cioccolato\">Cioccolato</option>
                    <option value=\"Pistacchio\">Pistacchio</option>
                    <option value=\"Crema\">Crema</option>
                    <option value=\"Vaniglia\">Vaniglia</option>
                </select>
            </div>
            
            <div class=\"lineadueform\">
                <input type=\"text\" class=\"formgusti\" name=\"Comune\" value=\"Comune\">
            
                <select id=\"giorni\"  class=\"formgusti\" name=\"aperture\">
                    <option value=\"Lun\">Lunedì</option>
                    <option value=\"Mart\">Martedì</option>
                    <option value=\"Merc\">Mercoledì</option>
                    <option value=\"Giov\">Giovedì</option>
                </select>
            </div>
            <br/>
            <div style=\"text-align:center;\">
             <input type=\"submit\" class=\"bottone\" value=\"Ricerca\" />
         </div>
    
 </form>
</div>
";
        
        $__internal_e36f01e1246d9b6ba1133c90b7bfe6615475a882e14acc8a61b4c8e3a8d5e70b->leave($__internal_e36f01e1246d9b6ba1133c90b7bfe6615475a882e14acc8a61b4c8e3a8d5e70b_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Home:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::basehome.html.twig" %}*/
/* {% block body %}*/
/* <title>Gelatò</title>*/
/*   <div class="trasparente">*/
/*         <form method="GET">*/
/*             */
/*             <h2>Trova la tua gelateria!</h2>*/
/*             <p>Seleziona i tuoi gusti preferiti oppure scegli il comune o il giorno in cui vorresti andare a rinfrescare la tua giornata!</p>*/
/*  */
/*             <div class="lineaunoform">*/
/*                 */
/*                 <select id="gusto1" class="formgusti" name="gusto1">*/
/*                     <option value="Cioccolato">Cioccolato</option>*/
/*                     <option value="Pistacchio">Pistacchio</option>*/
/*                     <option value="Crema">Crema</option>*/
/*                     <option value="Vaniglia">Vaniglia</option>*/
/*                 </select>*/
/*                 <select id="gusto2"  class="formgusti" name="gusto2">*/
/*                     <option value="Cioccolato">Cioccolato</option>*/
/*                     <option value="Pistacchio">Pistacchio</option>*/
/*                     <option value="Crema">Crema</option>*/
/*                     <option value="Vaniglia">Vaniglia</option>*/
/*                 </select>*/
/*                 <select id="gusto3" class="formgusti" name="gusto3">*/
/*                     <option value="Cioccolato">Cioccolato</option>*/
/*                     <option value="Pistacchio">Pistacchio</option>*/
/*                     <option value="Crema">Crema</option>*/
/*                     <option value="Vaniglia">Vaniglia</option>*/
/*                 </select>*/
/*             </div>*/
/*             */
/*             <div class="lineadueform">*/
/*                 <input type="text" class="formgusti" name="Comune" value="Comune">*/
/*             */
/*                 <select id="giorni"  class="formgusti" name="aperture">*/
/*                     <option value="Lun">Lunedì</option>*/
/*                     <option value="Mart">Martedì</option>*/
/*                     <option value="Merc">Mercoledì</option>*/
/*                     <option value="Giov">Giovedì</option>*/
/*                 </select>*/
/*             </div>*/
/*             <br/>*/
/*             <div style="text-align:center;">*/
/*              <input type="submit" class="bottone" value="Ricerca" />*/
/*          </div>*/
/*     */
/*  </form>*/
/* </div>*/
/* {% endblock %}*/

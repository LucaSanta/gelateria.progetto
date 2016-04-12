<?php

/* ::base.html.twig */
class __TwigTemplate_659e64abdccfc42aff9cb1b8fab23af5e07ff7e97abc0e16fd0d0a66b5a9b12c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_148d312f767ac107f6923066942b78208470ab8338fa234763df9e26388c6ebb = $this->env->getExtension("native_profiler");
        $__internal_148d312f767ac107f6923066942b78208470ab8338fa234763df9e26388c6ebb->enter($__internal_148d312f767ac107f6923066942b78208470ab8338fa234763df9e26388c6ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
   <header>
  <div class=\"logo\">
    <a href=\"/header.html\" class=\"logo\"><img src=\"/img/Logo.png\" alt=\"logo\"></a>
  </div>
  <div class=\"pulsanteapp\">
  <!-- div che contiene il menu -->
<ul id=\"menu\"> <!-- lista principale: definisce il menu nella sua interezza -->
    <li>
        <a href=\"/app_dev.php/Userimpostazioniutente\" class=\"utente\">Beatrice!</a> <!-- primo list-item, prima voce del menu -->
        <ul > <!-- Lista annidata: voci del sotto-menu -->
            <li><a href=\"/app_dev.php/Userimpostazioniutente\">Impostazioni</a></li>
            <li><a href=\"/app_dev.php/home\">Logout</a></li>
        </ul> <!-- Fine del sotto-menu -->
    </li> <!-- Chiudo il list-item -->
 
    
  </div>
</header>
<nav id=\"navbar\">
  <ul class=\"menu\">
    <li><a href=\"/app_dev.php/home\">Home</a></li>
    <li><a href=\"/app_dev.php/gelaterie\">Gelaterie</a></li>
    <li><a href=\"/app_dev.php/comefunziona\">Come funziona</a></li>
  </ul>
</nav>

<!-- fine parte alta-->

<div id=\"boximg\">
  <div id=\"larghezza\">
    <div id=\"sidebar\" class=\"sidebar1\">


        <p class=\"benvenuto\">Beatrice!</p> <!-- primo list-item, prima voce del menu -->
     
      <br/>
      <p>Cerca per gusto:</p>
       <form method=\"GET\">
        <div class=\"lineaunoform\">
          <select name=\"gusto1\" class=\"formgusti\">
            <option value=\"Primo\">Primo gusto</option>
            <option value=\"Cioccolato\">Cioccolato</option>
            <option value=\"Pistacchio\">Pistacchio</option>
            <option value=\"Crema\">Crema</option>
            <option value=\"Vaniglia\">Vaniglia</option>
          </select>
          <br/>
          <select name=\"gusto2\" class=\"formgusti\">
            <option value=\"Secondo\">Secondo gusto</option>
            <option value=\"Cioccolato\">Cioccolato</option>
            <option value=\"Pistacchio\">Pistacchio</option>
            <option value=\"Crema\">Crema</option>
            <option value=\"Vaniglia\">Vaniglia</option>
          </select>
          <br/>
          <select name=\"gusto3\" class=\"formgusti\">
            <option value=\"Terzo\">Terzo gusto</option>
            <option value=\"Cioccolato\">Cioccolato</option>
            <option value=\"Pistacchio\">Pistacchio</option>
            <option value=\"Crema\">Crema</option>
            <option value=\"Vaniglia\">Vaniglia</option>
          </select>
        </div>
      <br/>
      <p>Cerca per città:</p>
        <select name=\"città\" class=\"formgusti\">
          <option value=\"Città\">Seleziona la città</option>
          <option value=\"Milano\">Milano</option>
          <option value=\"Roma\">Roma</option>
          <option value=\"Napoli\">Napoli</option>
          <option value=\"Palermo\">Palermo</option>
        </select>
      <br/>
      <br/>
      <p>Cerca per giorno di apertura:</p>
        <select name=\"giorno\"class=\"formgusti\">
            <option value=\"Giorno\">Seleziona il giorno</option>
            <option value=\"Lunedì\">Lunedì</option>
            <option value=\"Martedì\">Martedì</option>
            <option value=\"Mercoledì\">Mercoledì</option>
            <option value=\"Giovedì\">Giovedì</option>
            <option value=\"Venerdì\">Venerdì</option>
            <option value=\"Sabato\">Sabato</option>
            <option value=\"Domenica\">Domenica</option>
        </select>
        <input class=\"bottone\" type=\"submit\" value=\"Ricerca\" />

      </form>
    </div>
        ";
        // line 100
        $this->displayBlock('body', $context, $blocks);
        // line 101
        echo "            </div>


        ";
        // line 104
        $this->displayBlock('javascripts', $context, $blocks);
        // line 105
        echo "         <footer id=\"tutto\">
    <div id=\"contenitorelogo\">
      <img  class=\"logofooter\"  src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/Logo.png"), "html", null, true);
        echo "\" alt=\"logo\">
    </div>
    <br/>
    <div id=\"contenitoresocial\">
      <img class=\"social\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/facebook1.png"), "html", null, true);
        echo "\" alt=\"Facebook\">
      <img class=\"social\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/twitter1.png"), "html", null, true);
        echo "\" alt=\"Twitter\">
      <img class=\"social\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/email1.png"), "html", null, true);
        echo "\" alt=\"Email\">
    </div>

    <div id=\"boxtesti\">
      <div id=\"boxtesto1\">
        <p class=\"titolifooter\">Chi siamo</p>
        <p class=\"testifooter\">Leader nazionale nella produzione di gelato sfuso, Gelatone B&B ha deciso di affidarsi alla TAG Solutions per lo sviluppo di una piattaforma web-based dedicata alla ricerca delle gelaterie sul territorio italiano.</p>
      </div>
      <div id=\"boxtesto2\">
        <p class=\"titolifooter\">Contatti</p>
        <p class=\"testifooter\">info@gelato.b&b.com<br/>
          Viale Umbria 76<br/>
          20021, Milano<br/>
        <a href=\"/app_dev.php/segnalagelateria\">Segnala Gelateria</a><br/>
</p>
        </div>
        <div id=\"boxtesto3\">
          <p class=\"titolifooter\">Gelatone B&B</p>
          <p class=\"testifooter\">Capitale Sociale Euro 10.000,00 i.v.<br/>
            P.IVA IT 03419970987<br/>
            C.F. - R.I. BS 03419970987<br/>
            R.E.A. CCIAA BS 532571</p>
          </div>
          <div id=\"boxtesto4\">
            <p class=\"titolifooter\">Le città più ricercate</p>
            <p class=\"testifooter\"><a href=\"#\">Ricerca su Milano</a><br/>
              <a href=\"/app_dev.php/tabella\">Ricerca su Roma</a><br/>
              <a href=\"/app_dev.php/edit\">Ricerca su Napoli</a><br/>
              <a href=\"/app_dev.php/editgusto\">Ricerca su Palermo</a></p>
            </div>
          </div>
        </footer>

    </body>
</html>";
        
        $__internal_148d312f767ac107f6923066942b78208470ab8338fa234763df9e26388c6ebb->leave($__internal_148d312f767ac107f6923066942b78208470ab8338fa234763df9e26388c6ebb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3765b7c4fb3b3263c0c02b59a73e2d12ad78fadee5caef46a147dc7e58f23b8 = $this->env->getExtension("native_profiler");
        $__internal_a3765b7c4fb3b3263c0c02b59a73e2d12ad78fadee5caef46a147dc7e58f23b8->enter($__internal_a3765b7c4fb3b3263c0c02b59a73e2d12ad78fadee5caef46a147dc7e58f23b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a3765b7c4fb3b3263c0c02b59a73e2d12ad78fadee5caef46a147dc7e58f23b8->leave($__internal_a3765b7c4fb3b3263c0c02b59a73e2d12ad78fadee5caef46a147dc7e58f23b8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d42983ed33f3a33c31a37f2b950b1514531dcc5b2ebd2fc05495a199d1064494 = $this->env->getExtension("native_profiler");
        $__internal_d42983ed33f3a33c31a37f2b950b1514531dcc5b2ebd2fc05495a199d1064494->enter($__internal_d42983ed33f3a33c31a37f2b950b1514531dcc5b2ebd2fc05495a199d1064494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d42983ed33f3a33c31a37f2b950b1514531dcc5b2ebd2fc05495a199d1064494->leave($__internal_d42983ed33f3a33c31a37f2b950b1514531dcc5b2ebd2fc05495a199d1064494_prof);

    }

    // line 100
    public function block_body($context, array $blocks = array())
    {
        $__internal_316afc32643dc1bb3fe31405c98d14765e7e250baaba8da724edf470dbabad6d = $this->env->getExtension("native_profiler");
        $__internal_316afc32643dc1bb3fe31405c98d14765e7e250baaba8da724edf470dbabad6d->enter($__internal_316afc32643dc1bb3fe31405c98d14765e7e250baaba8da724edf470dbabad6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_316afc32643dc1bb3fe31405c98d14765e7e250baaba8da724edf470dbabad6d->leave($__internal_316afc32643dc1bb3fe31405c98d14765e7e250baaba8da724edf470dbabad6d_prof);

    }

    // line 104
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c811c5f12128737dfe8f402f023a9bfc796bc96c291d4fd7b1eb23ba6a65feeb = $this->env->getExtension("native_profiler");
        $__internal_c811c5f12128737dfe8f402f023a9bfc796bc96c291d4fd7b1eb23ba6a65feeb->enter($__internal_c811c5f12128737dfe8f402f023a9bfc796bc96c291d4fd7b1eb23ba6a65feeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c811c5f12128737dfe8f402f023a9bfc796bc96c291d4fd7b1eb23ba6a65feeb->leave($__internal_c811c5f12128737dfe8f402f023a9bfc796bc96c291d4fd7b1eb23ba6a65feeb_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 104,  229 => 100,  218 => 6,  206 => 5,  164 => 113,  160 => 112,  156 => 111,  149 => 107,  145 => 105,  143 => 104,  138 => 101,  136 => 100,  41 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*    <header>*/
/*   <div class="logo">*/
/*     <a href="/header.html" class="logo"><img src="/img/Logo.png" alt="logo"></a>*/
/*   </div>*/
/*   <div class="pulsanteapp">*/
/*   <!-- div che contiene il menu -->*/
/* <ul id="menu"> <!-- lista principale: definisce il menu nella sua interezza -->*/
/*     <li>*/
/*         <a href="/app_dev.php/Userimpostazioniutente" class="utente">Beatrice!</a> <!-- primo list-item, prima voce del menu -->*/
/*         <ul > <!-- Lista annidata: voci del sotto-menu -->*/
/*             <li><a href="/app_dev.php/Userimpostazioniutente">Impostazioni</a></li>*/
/*             <li><a href="/app_dev.php/home">Logout</a></li>*/
/*         </ul> <!-- Fine del sotto-menu -->*/
/*     </li> <!-- Chiudo il list-item -->*/
/*  */
/*     */
/*   </div>*/
/* </header>*/
/* <nav id="navbar">*/
/*   <ul class="menu">*/
/*     <li><a href="/app_dev.php/home">Home</a></li>*/
/*     <li><a href="/app_dev.php/gelaterie">Gelaterie</a></li>*/
/*     <li><a href="/app_dev.php/comefunziona">Come funziona</a></li>*/
/*   </ul>*/
/* </nav>*/
/* */
/* <!-- fine parte alta-->*/
/* */
/* <div id="boximg">*/
/*   <div id="larghezza">*/
/*     <div id="sidebar" class="sidebar1">*/
/* */
/* */
/*         <p class="benvenuto">Beatrice!</p> <!-- primo list-item, prima voce del menu -->*/
/*      */
/*       <br/>*/
/*       <p>Cerca per gusto:</p>*/
/*        <form method="GET">*/
/*         <div class="lineaunoform">*/
/*           <select name="gusto1" class="formgusti">*/
/*             <option value="Primo">Primo gusto</option>*/
/*             <option value="Cioccolato">Cioccolato</option>*/
/*             <option value="Pistacchio">Pistacchio</option>*/
/*             <option value="Crema">Crema</option>*/
/*             <option value="Vaniglia">Vaniglia</option>*/
/*           </select>*/
/*           <br/>*/
/*           <select name="gusto2" class="formgusti">*/
/*             <option value="Secondo">Secondo gusto</option>*/
/*             <option value="Cioccolato">Cioccolato</option>*/
/*             <option value="Pistacchio">Pistacchio</option>*/
/*             <option value="Crema">Crema</option>*/
/*             <option value="Vaniglia">Vaniglia</option>*/
/*           </select>*/
/*           <br/>*/
/*           <select name="gusto3" class="formgusti">*/
/*             <option value="Terzo">Terzo gusto</option>*/
/*             <option value="Cioccolato">Cioccolato</option>*/
/*             <option value="Pistacchio">Pistacchio</option>*/
/*             <option value="Crema">Crema</option>*/
/*             <option value="Vaniglia">Vaniglia</option>*/
/*           </select>*/
/*         </div>*/
/*       <br/>*/
/*       <p>Cerca per città:</p>*/
/*         <select name="città" class="formgusti">*/
/*           <option value="Città">Seleziona la città</option>*/
/*           <option value="Milano">Milano</option>*/
/*           <option value="Roma">Roma</option>*/
/*           <option value="Napoli">Napoli</option>*/
/*           <option value="Palermo">Palermo</option>*/
/*         </select>*/
/*       <br/>*/
/*       <br/>*/
/*       <p>Cerca per giorno di apertura:</p>*/
/*         <select name="giorno"class="formgusti">*/
/*             <option value="Giorno">Seleziona il giorno</option>*/
/*             <option value="Lunedì">Lunedì</option>*/
/*             <option value="Martedì">Martedì</option>*/
/*             <option value="Mercoledì">Mercoledì</option>*/
/*             <option value="Giovedì">Giovedì</option>*/
/*             <option value="Venerdì">Venerdì</option>*/
/*             <option value="Sabato">Sabato</option>*/
/*             <option value="Domenica">Domenica</option>*/
/*         </select>*/
/*         <input class="bottone" type="submit" value="Ricerca" />*/
/* */
/*       </form>*/
/*     </div>*/
/*         {% block body %}{% endblock %}*/
/*             </div>*/
/* */
/* */
/*         {% block javascripts %}{% endblock %}*/
/*          <footer id="tutto">*/
/*     <div id="contenitorelogo">*/
/*       <img  class="logofooter"  src="{{ asset('img/Logo.png') }}" alt="logo">*/
/*     </div>*/
/*     <br/>*/
/*     <div id="contenitoresocial">*/
/*       <img class="social" src="{{ asset('img/facebook1.png') }}" alt="Facebook">*/
/*       <img class="social" src="{{ asset('img/twitter1.png') }}" alt="Twitter">*/
/*       <img class="social" src="{{ asset('img/email1.png') }}" alt="Email">*/
/*     </div>*/
/* */
/*     <div id="boxtesti">*/
/*       <div id="boxtesto1">*/
/*         <p class="titolifooter">Chi siamo</p>*/
/*         <p class="testifooter">Leader nazionale nella produzione di gelato sfuso, Gelatone B&B ha deciso di affidarsi alla TAG Solutions per lo sviluppo di una piattaforma web-based dedicata alla ricerca delle gelaterie sul territorio italiano.</p>*/
/*       </div>*/
/*       <div id="boxtesto2">*/
/*         <p class="titolifooter">Contatti</p>*/
/*         <p class="testifooter">info@gelato.b&b.com<br/>*/
/*           Viale Umbria 76<br/>*/
/*           20021, Milano<br/>*/
/*         <a href="/app_dev.php/segnalagelateria">Segnala Gelateria</a><br/>*/
/* </p>*/
/*         </div>*/
/*         <div id="boxtesto3">*/
/*           <p class="titolifooter">Gelatone B&B</p>*/
/*           <p class="testifooter">Capitale Sociale Euro 10.000,00 i.v.<br/>*/
/*             P.IVA IT 03419970987<br/>*/
/*             C.F. - R.I. BS 03419970987<br/>*/
/*             R.E.A. CCIAA BS 532571</p>*/
/*           </div>*/
/*           <div id="boxtesto4">*/
/*             <p class="titolifooter">Le città più ricercate</p>*/
/*             <p class="testifooter"><a href="#">Ricerca su Milano</a><br/>*/
/*               <a href="/app_dev.php/tabella">Ricerca su Roma</a><br/>*/
/*               <a href="/app_dev.php/edit">Ricerca su Napoli</a><br/>*/
/*               <a href="/app_dev.php/editgusto">Ricerca su Palermo</a></p>*/
/*             </div>*/
/*           </div>*/
/*         </footer>*/
/* */
/*     </body>*/
/* </html>*/

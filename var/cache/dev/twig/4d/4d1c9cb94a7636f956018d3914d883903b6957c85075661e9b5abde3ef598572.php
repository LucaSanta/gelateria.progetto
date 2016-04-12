<?php

/* ::baseadmin.html.twig */
class __TwigTemplate_7f24469c409f52186e8bc41afb20c1592276d27cd5a90a9393140ab312014e14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24ffb881b2077374cfae19b9ce38a9d6b0fd9d2b1c2b8bd189aa485ba8999253 = $this->env->getExtension("native_profiler");
        $__internal_24ffb881b2077374cfae19b9ce38a9d6b0fd9d2b1c2b8bd189aa485ba8999253->enter($__internal_24ffb881b2077374cfae19b9ce38a9d6b0fd9d2b1c2b8bd189aa485ba8999253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseadmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "  <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>

<body>
 <header>
  <div class=\"logo\">
    <a href=\"header.html\" class=\"logo\"><img src=\"/img/Logo.png\" alt=\"logo\"></a>
  </div>
 <div class=\"pulsanteapp\">
<a href=\"/reportistica.html\">Admin</a>
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
";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "
</div>

  <footer id=\"tutto\">
    <div id=\"contenitorelogo\">
      <img  class=\"logofooter\" src=\"/img/Logo.png\" alt=\"logo\">
    </div>
    <br/>
    <div id=\"contenitoresocial\">
      <img class=\"social\" src=\"/img/facebook1.png\" alt=\"Facebook\">
      <img class=\"social\" src=\"/img/twitter1.png\" alt=\"Twitter\">
      <img class=\"social\" src=\"/img/email1.png\" alt=\"Email\">
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
    </html>
";
        
        $__internal_24ffb881b2077374cfae19b9ce38a9d6b0fd9d2b1c2b8bd189aa485ba8999253->leave($__internal_24ffb881b2077374cfae19b9ce38a9d6b0fd9d2b1c2b8bd189aa485ba8999253_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_977b3ad971138d0fbd2bd56fd685185fb3d9260c39f3555f2248188fda3ed420 = $this->env->getExtension("native_profiler");
        $__internal_977b3ad971138d0fbd2bd56fd685185fb3d9260c39f3555f2248188fda3ed420->enter($__internal_977b3ad971138d0fbd2bd56fd685185fb3d9260c39f3555f2248188fda3ed420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_977b3ad971138d0fbd2bd56fd685185fb3d9260c39f3555f2248188fda3ed420->leave($__internal_977b3ad971138d0fbd2bd56fd685185fb3d9260c39f3555f2248188fda3ed420_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_4cbe6f40aec2fe185790b555cf7fe0185a86e505fc1a381718591c4d7869b0e4 = $this->env->getExtension("native_profiler");
        $__internal_4cbe6f40aec2fe185790b555cf7fe0185a86e505fc1a381718591c4d7869b0e4->enter($__internal_4cbe6f40aec2fe185790b555cf7fe0185a86e505fc1a381718591c4d7869b0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4cbe6f40aec2fe185790b555cf7fe0185a86e505fc1a381718591c4d7869b0e4->leave($__internal_4cbe6f40aec2fe185790b555cf7fe0185a86e505fc1a381718591c4d7869b0e4_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b0bad977dab16361071466947bbca4f602562d9910a554f2edb170058354485 = $this->env->getExtension("native_profiler");
        $__internal_0b0bad977dab16361071466947bbca4f602562d9910a554f2edb170058354485->enter($__internal_0b0bad977dab16361071466947bbca4f602562d9910a554f2edb170058354485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0b0bad977dab16361071466947bbca4f602562d9910a554f2edb170058354485->leave($__internal_0b0bad977dab16361071466947bbca4f602562d9910a554f2edb170058354485_prof);

    }

    public function getTemplateName()
    {
        return "::baseadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 32,  133 => 9,  122 => 8,  68 => 34,  66 => 32,  39 => 9,  37 => 8,  32 => 6,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*   {% block stylesheets %}{% endblock %}*/
/*   <title>{% block title %}{% endblock %}</title>*/
/* </head>*/
/* */
/* <body>*/
/*  <header>*/
/*   <div class="logo">*/
/*     <a href="header.html" class="logo"><img src="/img/Logo.png" alt="logo"></a>*/
/*   </div>*/
/*  <div class="pulsanteapp">*/
/* <a href="/reportistica.html">Admin</a>*/
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
/* {% block body %}*/
/* {% endblock %}*/
/* */
/* </div>*/
/* */
/*   <footer id="tutto">*/
/*     <div id="contenitorelogo">*/
/*       <img  class="logofooter" src="/img/Logo.png" alt="logo">*/
/*     </div>*/
/*     <br/>*/
/*     <div id="contenitoresocial">*/
/*       <img class="social" src="/img/facebook1.png" alt="Facebook">*/
/*       <img class="social" src="/img/twitter1.png" alt="Twitter">*/
/*       <img class="social" src="/img/email1.png" alt="Email">*/
/*     </div>*/
/* */
/*     <div id="boxtesti">*/
/*       <div id="boxtesto1">*/
/*         <p class="titolifooter">Chi siamo</p>*/
/*         <p class="testifooter">Leader nazionale nella produzione di gelato sfuso, Gelatone B&B ha deciso di affidarsi alla TAG Solutions per lo sviluppo di una piattaforma web-based dedicata alla ricerca delle gelaterie sul territorio italiano.</p>*/
/*       </div>*/
/* <div id="boxtesto2">*/
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
/* */
/*     </body>*/
/*     </html>*/
/* */

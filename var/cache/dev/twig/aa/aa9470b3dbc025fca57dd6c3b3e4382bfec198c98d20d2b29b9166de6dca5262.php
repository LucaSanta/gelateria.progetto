<?php

/* ::baseuser.html.twig */
class __TwigTemplate_e39c7aa9a4f858b569200482b2b5b3732e75afabb700c335f6fb33fe4fba9412 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74fd7c557a969aedcb5be5c57c53068cec74af35ed2c95f38ca3c5c6439e4fbd = $this->env->getExtension("native_profiler");
        $__internal_74fd7c557a969aedcb5be5c57c53068cec74af35ed2c95f38ca3c5c6439e4fbd->enter($__internal_74fd7c557a969aedcb5be5c57c53068cec74af35ed2c95f38ca3c5c6439e4fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseuser.html.twig"));

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
        echo "\" /></head>

<body>
 <header>
  <div class=\"logo\">
    <a href=\"/header.html\" class=\"logo\"><img src=\"/img/Logo.png\" alt=\"logo\"></a>
  </div>
  <div class=\"pulsanteapp\">
    <a href=\"/app_dev.php/Userlogin\" class=\"app\">login</a>
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
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "</div>

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
        
        $__internal_74fd7c557a969aedcb5be5c57c53068cec74af35ed2c95f38ca3c5c6439e4fbd->leave($__internal_74fd7c557a969aedcb5be5c57c53068cec74af35ed2c95f38ca3c5c6439e4fbd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c840d876cb8c8d1515a3517f717d45ba77c6dfa9e78a346cde2ce90fe79d7a0 = $this->env->getExtension("native_profiler");
        $__internal_2c840d876cb8c8d1515a3517f717d45ba77c6dfa9e78a346cde2ce90fe79d7a0->enter($__internal_2c840d876cb8c8d1515a3517f717d45ba77c6dfa9e78a346cde2ce90fe79d7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2c840d876cb8c8d1515a3517f717d45ba77c6dfa9e78a346cde2ce90fe79d7a0->leave($__internal_2c840d876cb8c8d1515a3517f717d45ba77c6dfa9e78a346cde2ce90fe79d7a0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_029e4ccd57eed9fb61a87759a0e9d8eb05e9144c2886c03f34e62bfb092d9b61 = $this->env->getExtension("native_profiler");
        $__internal_029e4ccd57eed9fb61a87759a0e9d8eb05e9144c2886c03f34e62bfb092d9b61->enter($__internal_029e4ccd57eed9fb61a87759a0e9d8eb05e9144c2886c03f34e62bfb092d9b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_029e4ccd57eed9fb61a87759a0e9d8eb05e9144c2886c03f34e62bfb092d9b61->leave($__internal_029e4ccd57eed9fb61a87759a0e9d8eb05e9144c2886c03f34e62bfb092d9b61_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_9dcd3d0d3ce29c91cb8ddbc8f02a8d24f9cdaeca271e11195c4aee9086ceed52 = $this->env->getExtension("native_profiler");
        $__internal_9dcd3d0d3ce29c91cb8ddbc8f02a8d24f9cdaeca271e11195c4aee9086ceed52->enter($__internal_9dcd3d0d3ce29c91cb8ddbc8f02a8d24f9cdaeca271e11195c4aee9086ceed52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9dcd3d0d3ce29c91cb8ddbc8f02a8d24f9cdaeca271e11195c4aee9086ceed52->leave($__internal_9dcd3d0d3ce29c91cb8ddbc8f02a8d24f9cdaeca271e11195c4aee9086ceed52_prof);

    }

    public function getTemplateName()
    {
        return "::baseuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 30,  132 => 6,  120 => 5,  67 => 32,  65 => 30,  40 => 8,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" /></head>*/
/* */
/* <body>*/
/*  <header>*/
/*   <div class="logo">*/
/*     <a href="/header.html" class="logo"><img src="/img/Logo.png" alt="logo"></a>*/
/*   </div>*/
/*   <div class="pulsanteapp">*/
/*     <a href="/app_dev.php/Userlogin" class="app">login</a>*/
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

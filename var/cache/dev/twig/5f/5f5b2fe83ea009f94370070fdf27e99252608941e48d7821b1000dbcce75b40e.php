<?php

/* ::baseuser.html.twig */
class __TwigTemplate_96c66d7719416e3c7f9f12620a41d7e7befeac1fa7e74b9779721a6cb5033d11 extends Twig_Template
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
        $__internal_88edf7b3ee0e7a98070d629deb422d50b26b174b4d84bebe11ae604794f9bf5b = $this->env->getExtension("native_profiler");
        $__internal_88edf7b3ee0e7a98070d629deb422d50b26b174b4d84bebe11ae604794f9bf5b->enter($__internal_88edf7b3ee0e7a98070d629deb422d50b26b174b4d84bebe11ae604794f9bf5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseuser.html.twig"));

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
        
        $__internal_88edf7b3ee0e7a98070d629deb422d50b26b174b4d84bebe11ae604794f9bf5b->leave($__internal_88edf7b3ee0e7a98070d629deb422d50b26b174b4d84bebe11ae604794f9bf5b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bde79b18c1f20577284f936b9c1444f3c466acd2f3d056758fadff0edfd9be7 = $this->env->getExtension("native_profiler");
        $__internal_2bde79b18c1f20577284f936b9c1444f3c466acd2f3d056758fadff0edfd9be7->enter($__internal_2bde79b18c1f20577284f936b9c1444f3c466acd2f3d056758fadff0edfd9be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2bde79b18c1f20577284f936b9c1444f3c466acd2f3d056758fadff0edfd9be7->leave($__internal_2bde79b18c1f20577284f936b9c1444f3c466acd2f3d056758fadff0edfd9be7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_47e9adbecdd3981364fbc03988e4b51214f83bd84cdb12af53b31d5afe2fc5ac = $this->env->getExtension("native_profiler");
        $__internal_47e9adbecdd3981364fbc03988e4b51214f83bd84cdb12af53b31d5afe2fc5ac->enter($__internal_47e9adbecdd3981364fbc03988e4b51214f83bd84cdb12af53b31d5afe2fc5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_47e9adbecdd3981364fbc03988e4b51214f83bd84cdb12af53b31d5afe2fc5ac->leave($__internal_47e9adbecdd3981364fbc03988e4b51214f83bd84cdb12af53b31d5afe2fc5ac_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_457a787da01c11a6e0f32927df4cd3a45f7111b6a569b4a56bb7f638893e6e9d = $this->env->getExtension("native_profiler");
        $__internal_457a787da01c11a6e0f32927df4cd3a45f7111b6a569b4a56bb7f638893e6e9d->enter($__internal_457a787da01c11a6e0f32927df4cd3a45f7111b6a569b4a56bb7f638893e6e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_457a787da01c11a6e0f32927df4cd3a45f7111b6a569b4a56bb7f638893e6e9d->leave($__internal_457a787da01c11a6e0f32927df4cd3a45f7111b6a569b4a56bb7f638893e6e9d_prof);

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

<?php

/* ::basehome.html.twig */
class __TwigTemplate_2b8e2c8d4fb626f3e426304f94cab0432302690ab434a8077b48da55b89aaf3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab524bfd8fc5b9c7a446a13ea73acfca79f9bc6fe2d53797bcf3b15b9d3cb189 = $this->env->getExtension("native_profiler");
        $__internal_ab524bfd8fc5b9c7a446a13ea73acfca79f9bc6fe2d53797bcf3b15b9d3cb189->enter($__internal_ab524bfd8fc5b9c7a446a13ea73acfca79f9bc6fe2d53797bcf3b15b9d3cb189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::basehome.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"/css/header.css\" type=\"text/css\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" type=\"image/png\"/>
</head>
<body>
 <header>
  <div class=\"logo\">
    <a href=\"/\" class=\"logo\"><img src=\"/img/Logo.png\" alt=\"logo\"></a>
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
<main id=\"boximg\">
";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "</main>
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
        </html>";
        
        $__internal_ab524bfd8fc5b9c7a446a13ea73acfca79f9bc6fe2d53797bcf3b15b9d3cb189->leave($__internal_ab524bfd8fc5b9c7a446a13ea73acfca79f9bc6fe2d53797bcf3b15b9d3cb189_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea63f1de9ef4d99567673dafbf15506b88298a973991103c6d8f1f475478dbf0 = $this->env->getExtension("native_profiler");
        $__internal_ea63f1de9ef4d99567673dafbf15506b88298a973991103c6d8f1f475478dbf0->enter($__internal_ea63f1de9ef4d99567673dafbf15506b88298a973991103c6d8f1f475478dbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ea63f1de9ef4d99567673dafbf15506b88298a973991103c6d8f1f475478dbf0->leave($__internal_ea63f1de9ef4d99567673dafbf15506b88298a973991103c6d8f1f475478dbf0_prof);

    }

    public function getTemplateName()
    {
        return "::basehome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 28,  57 => 29,  55 => 28,  32 => 8,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <link rel="stylesheet" href="/css/header.css" type="text/css">*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}" type="image/png"/>*/
/* </head>*/
/* <body>*/
/*  <header>*/
/*   <div class="logo">*/
/*     <a href="/" class="logo"><img src="/img/Logo.png" alt="logo"></a>*/
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
/* <!-- fine parte alta-->*/
/* <main id="boximg">*/
/* {% block body %}{% endblock %}*/
/* </main>*/
/*  <footer id="tutto">*/
/*     <div id="contenitorelogo">*/
/*       <img  class="logofooter" src="/img/Logo.png" alt="logo">*/
/*     </div>*/
/*     <br/>*/
/*     <div id="contenitoresocial">*/
/*       <img class="social" src="/img/facebook1.png" alt="Facebook">*/
/*       <img class="social" src="/img/twitter1.png" alt="Twitter">*/
/*       <img class="social" src="/img/email1.png" alt="Email">*/
/*     </div>*/
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
/*         </body>*/
/*         </html>*/

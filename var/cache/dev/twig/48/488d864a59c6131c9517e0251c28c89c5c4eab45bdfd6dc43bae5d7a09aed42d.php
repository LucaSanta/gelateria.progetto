<?php

/* FrontBundle:Gelateria:GelateriaShop.html.twig */
class __TwigTemplate_718fba7c21f75e08cbfe554a071daccbb9debb36e02fd59caff674c3776283a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontBundle:Gelateria:GelateriaShop.html.twig", 1);
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
        $__internal_0e79d7cdb6cd609df3e8e9b429b99c4429408f3509bfa272e27bac6c3491fd74 = $this->env->getExtension("native_profiler");
        $__internal_0e79d7cdb6cd609df3e8e9b429b99c4429408f3509bfa272e27bac6c3491fd74->enter($__internal_0e79d7cdb6cd609df3e8e9b429b99c4429408f3509bfa272e27bac6c3491fd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Gelateria:GelateriaShop.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e79d7cdb6cd609df3e8e9b429b99c4429408f3509bfa272e27bac6c3491fd74->leave($__internal_0e79d7cdb6cd609df3e8e9b429b99c4429408f3509bfa272e27bac6c3491fd74_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_94e228cc0e466c80c30f70922304f8bbd67f47ba3a84cc9113904bf6df9b62e0 = $this->env->getExtension("native_profiler");
        $__internal_94e228cc0e466c80c30f70922304f8bbd67f47ba3a84cc9113904bf6df9b62e0->enter($__internal_94e228cc0e466c80c30f70922304f8bbd67f47ba3a84cc9113904bf6df9b62e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "        <link rel=\"stylesheet\" href=\"/css/gelateria.css\" href=\"/css/gelateria.css\" type=\"text/css\">
";
        
        $__internal_94e228cc0e466c80c30f70922304f8bbd67f47ba3a84cc9113904bf6df9b62e0->leave($__internal_94e228cc0e466c80c30f70922304f8bbd67f47ba3a84cc9113904bf6df9b62e0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_630ba873616b61b88bc0ec003f12b25247fa5cbb299afcbe6e6374e397439896 = $this->env->getExtension("native_profiler");
        $__internal_630ba873616b61b88bc0ec003f12b25247fa5cbb299afcbe6e6374e397439896->enter($__internal_630ba873616b61b88bc0ec003f12b25247fa5cbb299afcbe6e6374e397439896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
   <div id=\"gelateria\">
      <div id=\"idgelatino\"><img class=\"gelatino\" src=\"/img/gelatino3.png\"></div>
      <div id=\"descrizione\">
        <p class=\"nomegelateria\">Gelateria Giolitti</p>       
        <p class=\"indirizzo\">Via Uffici del Vicario, 40 - 00186 Roma <br/> Tel: +39 06 699 12 43</p>
        <br/>
        <p class=\"istruzioni\">L'idea è di applicare alla produzione del gelato un principio comune a tutti i migliori ristoranti del mondo: l'acquisto di materie prime di qualità assoluta. <br/>È con questo obiettivo che dal 2002 viaggiamo alla ricerca del meglio che il mondo dell’agricoltura può offrire, seguendo semplici ma rigorosi principi: solo frutta fresca, proveniente dai migliori consorzi d’Italia e dalla nostra azienda agricola Mura Mura®; nessun utilizzo di coloranti, aromi, conservanti o emulsionanti.
        Giolitti è anche gelato artigianale. Fresco di stagione e sempre pronto in comode porzioni da gustare a casa. Lo trovi in ciotole da 500 g. o monoporzioni.</p><br/>
        <div id=\"preferiti\">
          <a href=\"#\"><img class=\"icona1\" src=\"/img/shapes.png\"></a>
          <p class=\"preferiti\">Aggiungi alla lista dei preferiti</p>
        </div>
        <div id=\"preferiti\">
          <a href=\"#\"><img class=\"icona2\" src=\"/img/email.png\"></a>
          <p class=\"preferiti\"><a href=\"/mail.html\"> Invita i tuoi amici per un gelato!</a></p><br/>
        </div>
        <br/>
        <p class=\"gustidisponibili\">Guarda tutti i gusti disponibili!</p>
        <div class=\"gusti\">
        <div class=\"elencogusti\">
          <p>Cioccolato</p>
          <p>Pistacchio</p>
          <p>Amarena</p>
          <p>Cioccolato</p>
          <p>Crema</p>
        </div>
      </div>
      
      </div>
    </div>
  </div>


";
        
        $__internal_630ba873616b61b88bc0ec003f12b25247fa5cbb299afcbe6e6374e397439896->leave($__internal_630ba873616b61b88bc0ec003f12b25247fa5cbb299afcbe6e6374e397439896_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Gelateria:GelateriaShop.html.twig";
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
/* {% block stylesheets %}        <link rel="stylesheet" href="/css/gelateria.css" href="/css/gelateria.css" type="text/css">*/
/* {% endblock %}*/
/*  {% block body %}*/
/* */
/*    <div id="gelateria">*/
/*       <div id="idgelatino"><img class="gelatino" src="/img/gelatino3.png"></div>*/
/*       <div id="descrizione">*/
/*         <p class="nomegelateria">Gelateria Giolitti</p>       */
/*         <p class="indirizzo">Via Uffici del Vicario, 40 - 00186 Roma <br/> Tel: +39 06 699 12 43</p>*/
/*         <br/>*/
/*         <p class="istruzioni">L'idea è di applicare alla produzione del gelato un principio comune a tutti i migliori ristoranti del mondo: l'acquisto di materie prime di qualità assoluta. <br/>È con questo obiettivo che dal 2002 viaggiamo alla ricerca del meglio che il mondo dell’agricoltura può offrire, seguendo semplici ma rigorosi principi: solo frutta fresca, proveniente dai migliori consorzi d’Italia e dalla nostra azienda agricola Mura Mura®; nessun utilizzo di coloranti, aromi, conservanti o emulsionanti.*/
/*         Giolitti è anche gelato artigianale. Fresco di stagione e sempre pronto in comode porzioni da gustare a casa. Lo trovi in ciotole da 500 g. o monoporzioni.</p><br/>*/
/*         <div id="preferiti">*/
/*           <a href="#"><img class="icona1" src="/img/shapes.png"></a>*/
/*           <p class="preferiti">Aggiungi alla lista dei preferiti</p>*/
/*         </div>*/
/*         <div id="preferiti">*/
/*           <a href="#"><img class="icona2" src="/img/email.png"></a>*/
/*           <p class="preferiti"><a href="/mail.html"> Invita i tuoi amici per un gelato!</a></p><br/>*/
/*         </div>*/
/*         <br/>*/
/*         <p class="gustidisponibili">Guarda tutti i gusti disponibili!</p>*/
/*         <div class="gusti">*/
/*         <div class="elencogusti">*/
/*           <p>Cioccolato</p>*/
/*           <p>Pistacchio</p>*/
/*           <p>Amarena</p>*/
/*           <p>Cioccolato</p>*/
/*           <p>Crema</p>*/
/*         </div>*/
/*       </div>*/
/*       */
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */

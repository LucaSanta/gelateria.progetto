<?php

/* FrontBundle:Gelateria:GelateriaList.html.twig */
class __TwigTemplate_71297a9baf1644ec1d8be9a107992ca962dd32bfdde59024d8d2938d12bdfab1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontBundle:Gelateria:GelateriaList.html.twig", 1);
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
        $__internal_f272c9d31b624c9f830ffddbda7ef54939017afb84df6eea87797fb10eef3fee = $this->env->getExtension("native_profiler");
        $__internal_f272c9d31b624c9f830ffddbda7ef54939017afb84df6eea87797fb10eef3fee->enter($__internal_f272c9d31b624c9f830ffddbda7ef54939017afb84df6eea87797fb10eef3fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Gelateria:GelateriaList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f272c9d31b624c9f830ffddbda7ef54939017afb84df6eea87797fb10eef3fee->leave($__internal_f272c9d31b624c9f830ffddbda7ef54939017afb84df6eea87797fb10eef3fee_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_14088cd3e80ca09ca3e1a3bcdbbdebc148f95443d54507d886cf69350b69faf4 = $this->env->getExtension("native_profiler");
        $__internal_14088cd3e80ca09ca3e1a3bcdbbdebc148f95443d54507d886cf69350b69faf4->enter($__internal_14088cd3e80ca09ca3e1a3bcdbbdebc148f95443d54507d886cf69350b69faf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "        <link rel=\"stylesheet\" href=\"/css/elenco.css\" href=\"/css/elenco.css\" type=\"text/css\">
";
        
        $__internal_14088cd3e80ca09ca3e1a3bcdbbdebc148f95443d54507d886cf69350b69faf4->leave($__internal_14088cd3e80ca09ca3e1a3bcdbbdebc148f95443d54507d886cf69350b69faf4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a906a7cc72dc0f172268b9aac33dfa2ce4b778294c346ddb877c5794463f4bf2 = $this->env->getExtension("native_profiler");
        $__internal_a906a7cc72dc0f172268b9aac33dfa2ce4b778294c346ddb877c5794463f4bf2->enter($__internal_a906a7cc72dc0f172268b9aac33dfa2ce4b778294c346ddb877c5794463f4bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
   <div id=\"gelateria\">
      <div id=\"idgelatino\"><img class=\"gelatino\" src=\"img/gelatino3.png\"></div>
      <div id=\"descrizione\">
        <p class=\"nomegelateria\">Gelateria Giolitti</p>       
        <p class=\"indirizzo\">Via Uffici del Vicario, 40 - 00186 Roma <br/> Tel: +39 06 699 12 43</p>
        <br/>
        <p class=\"istruzioni\">L'idea è di applicare alla produzione del gelato un principio comune a tutti i migliori ristoranti del mondo: l'acquisto di materie prime di qualità assoluta. <br/>È con questo obiettivo che dal 2002 viaggiamo alla ricerca del meglio che il mondo dell’agricoltura può offrire, seguendo semplici ma rigorosi principi: solo frutta fresca, proveniente dai migliori consorzi d’Italia e dalla nostra azienda agricola Mura Mura®; nessun utilizzo di coloranti, aromi, conservanti o emulsionanti.
        Giolitti è anche gelato artigianale. Fresco di stagione e sempre pronto in comode porzioni da gustare a casa. Lo trovi in ciotole da 500 g. o monoporzioni.</p><br/>
        <div id=\"preferiti\">
          <a href=\"#\"><img class=\"icona1\" src=\"img/shapes.png\"></a>
          <p class=\"preferiti\">Aggiungi alla lista dei preferiti</p>
        </div>
        <div id=\"preferiti\">
          <a href=\"#\"><img class=\"icona2\" src=\"img/email.png\"></a>
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
        
        $__internal_a906a7cc72dc0f172268b9aac33dfa2ce4b778294c346ddb877c5794463f4bf2->leave($__internal_a906a7cc72dc0f172268b9aac33dfa2ce4b778294c346ddb877c5794463f4bf2_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Gelateria:GelateriaList.html.twig";
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
/* {% block stylesheets %}        <link rel="stylesheet" href="/css/elenco.css" href="/css/elenco.css" type="text/css">*/
/* {% endblock %}*/
/*  {% block body %}*/
/* */
/*    <div id="gelateria">*/
/*       <div id="idgelatino"><img class="gelatino" src="img/gelatino3.png"></div>*/
/*       <div id="descrizione">*/
/*         <p class="nomegelateria">Gelateria Giolitti</p>       */
/*         <p class="indirizzo">Via Uffici del Vicario, 40 - 00186 Roma <br/> Tel: +39 06 699 12 43</p>*/
/*         <br/>*/
/*         <p class="istruzioni">L'idea è di applicare alla produzione del gelato un principio comune a tutti i migliori ristoranti del mondo: l'acquisto di materie prime di qualità assoluta. <br/>È con questo obiettivo che dal 2002 viaggiamo alla ricerca del meglio che il mondo dell’agricoltura può offrire, seguendo semplici ma rigorosi principi: solo frutta fresca, proveniente dai migliori consorzi d’Italia e dalla nostra azienda agricola Mura Mura®; nessun utilizzo di coloranti, aromi, conservanti o emulsionanti.*/
/*         Giolitti è anche gelato artigianale. Fresco di stagione e sempre pronto in comode porzioni da gustare a casa. Lo trovi in ciotole da 500 g. o monoporzioni.</p><br/>*/
/*         <div id="preferiti">*/
/*           <a href="#"><img class="icona1" src="img/shapes.png"></a>*/
/*           <p class="preferiti">Aggiungi alla lista dei preferiti</p>*/
/*         </div>*/
/*         <div id="preferiti">*/
/*           <a href="#"><img class="icona2" src="img/email.png"></a>*/
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

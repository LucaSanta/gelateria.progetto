<?php

/* FrontBundle:Gelateria:rotta.html.twig */
class __TwigTemplate_a95681111a71547ceb6164a1efcde79b640e6e80ddecd4b6a66d814d2a2f2412 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontBundle:Gelateria:rotta.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8e6e68ed47ed6b99151fb25b84f49374fa43f824ef104f34f9abecd6182deed = $this->env->getExtension("native_profiler");
        $__internal_f8e6e68ed47ed6b99151fb25b84f49374fa43f824ef104f34f9abecd6182deed->enter($__internal_f8e6e68ed47ed6b99151fb25b84f49374fa43f824ef104f34f9abecd6182deed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Gelateria:rotta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8e6e68ed47ed6b99151fb25b84f49374fa43f824ef104f34f9abecd6182deed->leave($__internal_f8e6e68ed47ed6b99151fb25b84f49374fa43f824ef104f34f9abecd6182deed_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d2bc9178b53f40a111b0a58f1935ef7866fe752a282d9aab14564b33bf37e89e = $this->env->getExtension("native_profiler");
        $__internal_d2bc9178b53f40a111b0a58f1935ef7866fe752a282d9aab14564b33bf37e89e->enter($__internal_d2bc9178b53f40a111b0a58f1935ef7866fe752a282d9aab14564b33bf37e89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "        <link rel=\"stylesheet\" href=\"/css/elenco.css\" href=\"/css/elenco.css\" type=\"text/css\">
";
        
        $__internal_d2bc9178b53f40a111b0a58f1935ef7866fe752a282d9aab14564b33bf37e89e->leave($__internal_d2bc9178b53f40a111b0a58f1935ef7866fe752a282d9aab14564b33bf37e89e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_866e218c5c284dd7ab4bd8a9d0bda642545b0719d7eaf98946b2230b48b1a209 = $this->env->getExtension("native_profiler");
        $__internal_866e218c5c284dd7ab4bd8a9d0bda642545b0719d7eaf98946b2230b48b1a209->enter($__internal_866e218c5c284dd7ab4bd8a9d0bda642545b0719d7eaf98946b2230b48b1a209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gelateria";
        
        $__internal_866e218c5c284dd7ab4bd8a9d0bda642545b0719d7eaf98946b2230b48b1a209->leave($__internal_866e218c5c284dd7ab4bd8a9d0bda642545b0719d7eaf98946b2230b48b1a209_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a875e908648a821f6c20194867fced041c31067b2d28cbda6ef03d38ae16040 = $this->env->getExtension("native_profiler");
        $__internal_7a875e908648a821f6c20194867fced041c31067b2d28cbda6ef03d38ae16040->enter($__internal_7a875e908648a821f6c20194867fced041c31067b2d28cbda6ef03d38ae16040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo " <div id=\"gelateria\">
          <p class=\"parametro\">Elenco gelaterie per \$parametro!</p>

      <div id=\"idgelatino\"><img class=\"gelatino\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/gelatino5.png"), "html", null, true);
        echo "\"></div>
      <div id=\"descrizione\">
           <p class=\"nomegelateria\"><a class=\"scheda\" href=\"/app_dev.php/gelateria/1\">Gelateria Giolitti </a><br/>
</p>         
        <div class=\"indirizzo\">Via Uffici del Vicario, 40 - 00186 Roma <br/> Tel: +39 06 699 12 43</div>
        <br/>

      </div>
    </div>

  <div id=\"gelateria\">
      <div id=\"idgelatino\"><img class=\"gelatino\" src=\"/img/gelatino6.png\"></div>
      <div id=\"descrizione\">
        <p class=\"nomegelateria\"><a class=\"scheda\" href=\"/app_dev.php/gelateria/{id}\">Gelateria Giolitti </a><br/>
</p>       
        <p class=\"indirizzo\">Via Uffici del Vicario, 40 - 00186 Roma <br/> Tel: +39 06 699 12 43</p>
        <br/>
      </div>
    </div>


    <div id=\"gelateria\">
      <div id=\"idgelatino\"><img class=\"gelatino\" src=\"/img/gelatino3.png\"></div>
      <div id=\"descrizione\">
   <p class=\"nomegelateria\"><a class=\"scheda\" href=\"/app_dev.php/gelateria/{id}\">Gelateria Giolitti </a><br/>
</p>   
        <p class=\"indirizzo\">Via Uffici del Vicario, 40 - 00186 Roma <br/> Tel: +39 06 699 12 43</p>
        <br/>
      </div>
    </div>   

 <div id=\"gelateria\">
      <div id=\"idgelatino\"><img class=\"gelatino\" src=\"/img/gelatino1.png\"></div>
      <div id=\"descrizione\">
   <p class=\"nomegelateria\"><a class=\"scheda\" href=\"/app_dev.php/gelateria/{id}\">Gelateria Giolitti </a><br/>
</p>   
        <p class=\"indirizzo\">Via Uffici del Vicario, 40 - 00186 Roma <br/> Tel: +39 06 699 12 43</p>
        <br/>
      </div>
    </div>

    <div id=\"gelateria\">
      <div id=\"idgelatino\"><img class=\"gelatino\" src=\"/img/gelatino2.png\"></div>
      <div id=\"descrizione\">
   <p class=\"nomegelateria\"><a class=\"scheda\" href=\"/app_dev.php/gelateria/{id}\">Gelateria Giolitti </a><br/>
</p>   
        <p class=\"indirizzo\">Via Uffici del Vicario, 40 - 00186 Roma <br/> Tel: +39 06 699 12 43</p>
        <br/>
      </div>
    </div>

     <div id=\"gelateria\">
      <div id=\"idgelatino\"><img class=\"gelatino\" src=\"/img/gelatino4.png\"></div>
      <div id=\"descrizione\">
   <p class=\"nomegelateria\"><a class=\"scheda\" href=\"/app_dev.php/gelateria/{id}\">Gelateria Giolitti </a><br/>
</p>   
        <p class=\"indirizzo\">Via Uffici del Vicario, 40 - 00186 Roma <br/> Tel: +39 06 699 12 43</p>
        <br/>
      </div>
    </div>



  </div>
  <!--<div class=\"mockup\"><img id=\"mockupid\" src=\"img/mockup.png\" alt=\"Mockup\"></div>-->
</div>


";
        
        $__internal_7a875e908648a821f6c20194867fced041c31067b2d28cbda6ef03d38ae16040->leave($__internal_7a875e908648a821f6c20194867fced041c31067b2d28cbda6ef03d38ae16040_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Gelateria:rotta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  67 => 8,  61 => 7,  49 => 5,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block stylesheets %}        <link rel="stylesheet" href="/css/elenco.css" href="/css/elenco.css" type="text/css">*/
/* {% endblock %}*/
/* */
/* {% block title %}Gelateria{% endblock %}*/
/* */
/* {% block body %}*/
/*  <div id="gelateria">*/
/*           <p class="parametro">Elenco gelaterie per $parametro!</p>*/
/* */
/*       <div id="idgelatino"><img class="gelatino" src="{{ asset('img/gelatino5.png') }}"></div>*/
/*       <div id="descrizione">*/
/*            <p class="nomegelateria"><a class="scheda" href="/app_dev.php/gelateria/1">Gelateria Giolitti </a><br/>*/
/* </p>         */
/*         <div class="indirizzo">Via Uffici del Vicario, 40 - 00186 Roma <br/> Tel: +39 06 699 12 43</div>*/
/*         <br/>*/
/* */
/*       </div>*/
/*     </div>*/
/* */
/*   <div id="gelateria">*/
/*       <div id="idgelatino"><img class="gelatino" src="/img/gelatino6.png"></div>*/
/*       <div id="descrizione">*/
/*         <p class="nomegelateria"><a class="scheda" href="/app_dev.php/gelateria/{id}">Gelateria Giolitti </a><br/>*/
/* </p>       */
/*         <p class="indirizzo">Via Uffici del Vicario, 40 - 00186 Roma <br/> Tel: +39 06 699 12 43</p>*/
/*         <br/>*/
/*       </div>*/
/*     </div>*/
/* */
/* */
/*     <div id="gelateria">*/
/*       <div id="idgelatino"><img class="gelatino" src="/img/gelatino3.png"></div>*/
/*       <div id="descrizione">*/
/*    <p class="nomegelateria"><a class="scheda" href="/app_dev.php/gelateria/{id}">Gelateria Giolitti </a><br/>*/
/* </p>   */
/*         <p class="indirizzo">Via Uffici del Vicario, 40 - 00186 Roma <br/> Tel: +39 06 699 12 43</p>*/
/*         <br/>*/
/*       </div>*/
/*     </div>   */
/* */
/*  <div id="gelateria">*/
/*       <div id="idgelatino"><img class="gelatino" src="/img/gelatino1.png"></div>*/
/*       <div id="descrizione">*/
/*    <p class="nomegelateria"><a class="scheda" href="/app_dev.php/gelateria/{id}">Gelateria Giolitti </a><br/>*/
/* </p>   */
/*         <p class="indirizzo">Via Uffici del Vicario, 40 - 00186 Roma <br/> Tel: +39 06 699 12 43</p>*/
/*         <br/>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div id="gelateria">*/
/*       <div id="idgelatino"><img class="gelatino" src="/img/gelatino2.png"></div>*/
/*       <div id="descrizione">*/
/*    <p class="nomegelateria"><a class="scheda" href="/app_dev.php/gelateria/{id}">Gelateria Giolitti </a><br/>*/
/* </p>   */
/*         <p class="indirizzo">Via Uffici del Vicario, 40 - 00186 Roma <br/> Tel: +39 06 699 12 43</p>*/
/*         <br/>*/
/*       </div>*/
/*     </div>*/
/* */
/*      <div id="gelateria">*/
/*       <div id="idgelatino"><img class="gelatino" src="/img/gelatino4.png"></div>*/
/*       <div id="descrizione">*/
/*    <p class="nomegelateria"><a class="scheda" href="/app_dev.php/gelateria/{id}">Gelateria Giolitti </a><br/>*/
/* </p>   */
/*         <p class="indirizzo">Via Uffici del Vicario, 40 - 00186 Roma <br/> Tel: +39 06 699 12 43</p>*/
/*         <br/>*/
/*       </div>*/
/*     </div>*/
/* */
/* */
/* */
/*   </div>*/
/*   <!--<div class="mockup"><img id="mockupid" src="img/mockup.png" alt="Mockup"></div>-->*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */

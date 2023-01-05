<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_271132b43e80c929e944cb42724ead0c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Acceuil";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styleHome.css"), "html", null, true);
        echo "\">
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/\">TeaTipTop</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
      <ul class=\"navbar-nav me-auto\">
         <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_code_cadeau_check");
        echo "\" id=\"ticketsRecord\">Mes gains</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/\" id=\"enterCode\">Saisir un code</a>
            </li>
      
            
      </ul>
      <form class=\"d-flex\">
        <li class=\"nav-item d-flex\">
                <a class=\"nav-link\" style=\"color:white;\" href=\"/logout\">Déconnection</a>
            </li>
      </form>
    </div>
  </div>
</nav>






<br/> <br/> <br/><br/> <br/> <br/>
<div class=\"app d-flex flex-row align-items-center\"  >
    <div class=\"container\" >
        <div class=\"justify-content-center row\">
            <div class=\"col-md-8\" >
                <div class=\"card-group\" >
                    <div class=\"text-white cardSubmitCodeCadeau py-5 d-md-down-none card\" style=\"background-color: rgba(0, 0, 245, 0.5)\">
                        <div class=\"text-center card-body\">
                            <div class=\"col-12 contentCodeCadeau\" id=\"blockCodeCadeau\">
                                <h2 class=\"text-white\">Veuillez rentrer le code cadeau de 10 chiffres se trouvant sur votre facture.</h2>
                                <p class=\"Bold\" id=\"result\"></p>
                                <br/>
                                <div class=\"row\">
                                <div class=\"col-7\">
                                <input id=\"codeCadeau\" type=\"text\" id=\"inp\" placeholder=\"Entrez ici votre code cadeau !\" class=\"form-control\">
                                </div>
                                <div class=\"col-4\">
                                <input type=\"button\" id=\"submitCodeCadeau\" value=\"Valider\"  class=\"btn btn-success btn-block\">
                                </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                          

                            <div class=\"card border-success contentCodeCadeau col-sm-6 mt-4 \" style=\"background-color: rgba(245, 225, 235, 0.8)\" id=\"blockTicketcRecord\" hidden=true >
                            <div class=\"card-body\">
                            <h4 class=\"card-title\">Mes Gains :</h4>
                            <p class=\"card-text\" id=\"\">Vous avez gagné <B>";
        // line 75
        echo twig_escape_filter($this->env, ($context["ticketsCount"] ?? null), "html", null, true);
        echo " </b> cadeau. Voici la liste des gain que vous avez déjà gagné :</p>
                                <ul>
                                ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ticketsOwnByUser"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 78
            echo "                                    <li style=\"list-style: none;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticket"], "ticket", [], "any", false, false, false, 78), "title", [], "any", false, false, false, 78), "html", null, true);
            echo "</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                                </ul>
                            </div>
                            </div>
 

                         
</div>
       
    </div>
</div>


<script>


\$(document).on('click','#submitCodeCadeau',function(e){
    e.preventDefault();
    codeCadeau = document.getElementById('codeCadeau').value;
    if(codeCadeau.length != 10 || isNaN(codeCadeau)){
        result = document.getElementById('result');
        result.style = \"color:red;\";
        result.innerHTML = \"Le code doit contenir 10 chiffres.\"
        setTimeout(function(){result.innerHTML = \"Le code doit contenir 10 chiffres.\";},2000);

    }
    else{
        \$.ajax({
            url: 'codecadeau/check',
            method:'post',
            datatype:'json',
            data: {
                \"codeCadeau\" : codeCadeau
            },
            async:true,
            success: function(\$data){
                if(\$data === 0){
                    result = document.getElementById('result');
                    result.style = \"color:red;\";
                    result.innerHTML = \"Le code à déjà été utiliser\";
                    setTimeout(function(){result.innerHTML = \"\";},2000);
                }
                else if(\$data === 1){
                    result = document.getElementById('result');
                    result.style = \"color:red;\";
                    result.innerHTML = \"Le délais pour obtenir votre gain est dépassé.\";
                    setTimeout(function(){result.innerHTML = \"\";},20000);
                }
                else{
                    result = document.getElementById('result');
                    result.style = \"color:white;\";
                    result.innerHTML = \"vous avez remporter un: \"+\$data+\" !\";
                    setTimeout(function(){result.innerHTML = \"\";},2000);
                }
            }
        });
    }
});

\$(document).on('click','#ticketsRecord',function(e){
    e.preventDefault();
    blockCodeCadeau = document.getElementById('blockCodeCadeau');
    blockTicketcRecord = document.getElementById('blockTicketcRecord');
    blockCodeCadeau.hidden = false;
    blockTicketcRecord.hidden = false;

});

\$(document).on('click','#enterCode',function(e){
    e.preventDefault();
    blockCodeCadeau = document.getElementById('blockCodeCadeau');
    blockTicketcRecord = document.getElementById('blockTicketcRecord');
    blockCodeCadeau.hidden = false;
    blockTicketcRecord.hidden = false;

});

</script>
";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 80,  149 => 78,  145 => 77,  140 => 75,  83 => 21,  70 => 10,  66 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "C:\\wamp64\\www\\tiptop2\\templates\\home\\index.html.twig");
    }
}

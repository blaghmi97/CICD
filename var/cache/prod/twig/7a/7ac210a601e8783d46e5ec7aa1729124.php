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

/* security/login.html.twig */
class __TwigTemplate_72f942ad3df6a0ee91ae0fa9554c69f7 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Se Connecter !";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        
       
        ";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "

<br/><br/><br/><br/><br/><br/>
<div class=\"app d-flex flex-row align-items-center\">
    <div class=\"container\">
        <div class=\"justify-content-center row\">
            <div class=\"col-md-8 \">
            <div class=\"card border-primary mb-3\" style=\"background-color: rgba(245, 245, 245, 0.7)\">
                <h3>Bienvenue sur TeaTipTop le jeu-concours!</h3>
                <p class=\"presentationOfTheGame\">Ce jeu vous permettra de remportez des lots allant d'un infuseur a thé jusqu'a 69€ de coffret cadeaux!</p>
                <p class=\"presentationOfTheGame\">100% des lots sont gagnant et un grand tirage au sort aura lieu a la fin pour 
                séléctionné un chance qui remportera 1 ans de thé gratuit d'une valeur de 360€ !</p>
                <div class=\"card-group\">
                    <div class=\"p-4 card\">
                        <div class=\"card-body\">
                            <form method=\"post\">
                                ";
        // line 25
        if (($context["error"] ?? null)) {
            // line 26
            echo "                                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 26), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 28
        echo "                                <h1>Connexion</h1>
                                <p class=\"text-muted\">Se connecter à votre compte</p>
                                <div class=\"mb-3 input-group\">
                                    <input type=\"email\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"email\" autocomplete=\"email\" required autofocus>
                                </div>
                                <div class=\"mb-2 input-group\">
                                    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"mot de passe\" autocomplete=\"current-password\" required>
                                </div>
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                <div class=\"row mt-3\">
                                        <button type=\"submit\" class=\" btn buttonSubmitLogin btn-block\">Se connecter</button>
                                </div>
                            </form>
         
                        </div>
                    </div>
                    <div class=\"text-white cardCreatAccount py-5 d-md-down-none card\">
                        <div class=\"text-center card-body\">
                            <div>
                                <h2 class=\"text-white\">Créer un compte</h2>
                                <p>Si vous souhaitez participer au jeu-concours et voir l'historique de vos gain, vous devez créer un compte.</p>
                                <a href=\"/register\">
                                    <button tabindex=\"-1\" class=\"mt-3 btn buttonSubmitRegister\">Rejoindre !</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>



   
</script>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 36,  100 => 31,  95 => 28,  89 => 26,  87 => 25,  69 => 9,  65 => 8,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "C:\\wamp64\\www\\tiptop2\\templates\\security\\login.html.twig");
    }
}

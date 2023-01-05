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

/* admin/index.html.twig */
class __TwigTemplate_7cbbe335b933f104f6d74e92f1763d4a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard.css"), "html", null, true);
        echo "\">

";
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\" id=\"topSideBar\" data-baseurl=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
        echo "\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/admin\">TeaTipTop</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
          <ul class=\"navbar-nav me-auto\">
       
                  <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\" id=\"statistiques\">Statistiques</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\" id=\"newsletter\">Data</a>
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



<section class=\"wrapper\" id=\"blockStatistique\">
  <div class=\"row row-cols-1 row-cols-md-1 g-4 mb-4²\" >
    <div class=\"col mb-4\">
      <div class=\"card bg-light\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">Tickets restant</h5>
          <p class=\"card-text\">";
        // line 47
        echo twig_escape_filter($this->env, ((((twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["tickets"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "ticketsLeft", [], "any", false, false, false, 47) + twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["tickets"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null), "ticketsLeft", [], "any", false, false, false, 47)) + twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["tickets"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[2] ?? null) : null), "ticketsLeft", [], "any", false, false, false, 47)) + twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["tickets"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[3] ?? null) : null), "ticketsLeft", [], "any", false, false, false, 47)) + twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["tickets"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[4] ?? null) : null), "ticketsLeft", [], "any", false, false, false, 47)), "html", null, true);
        echo "/100</p>
        </div>
      </div>
    </div>
    </div>
    <div class=\"row row-cols-1 row-cols-md-2 g-4 \">
      ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tickets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 54
            echo "      <div class=\"col\">
        <div class=\"card bg-light\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "title", [], "any", false, false, false, 57), "html", null, true);
            echo "</h5>
            <p class=\"card-text\">tickets restant : ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "ticketsLeft", [], "any", false, false, false, 58), "html", null, true);
            echo "</p>
          </div>
        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    </div>

  ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aboutUs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["about"]) {
            // line 66
            echo "  <input type=\"hidden\" class=\"aboutUsInfo\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "aboutUs", [], "any", false, false, false, 66), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["about"], "count", [], "any", false, false, false, 66), "html", null, true);
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['about'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 69
            echo "  <input type=\"hidden\" class=\"cityInfo\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "city", [], "any", false, false, false, 69), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "count", [], "any", false, false, false, 69), "html", null, true);
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo " 

  <div class=\"container\">
    
    <div class=\"row mt-4\">
    <div class=\"col-6\">
<div class=\"card border-primary \" style=\"max-width: 40rem;\">
      <div class=\"card-header\">Comment les participants ont appris l'existance du jeu :</div>
      <div class=\"card-body\">
        <div class=\"chart-container mt-3\" style=\"position: relative; height:60vh; width:28vw ;\">
          <canvas id=\"myChart\" width=\"50\" height=\"50\"></canvas>
        </div>
      </div>
</div>
</div>

 <div class=\"col-6\">
<div class=\"card border-primary\" style=\"max-width: 40rem;\">

     <div class=\"card-header\">Localisation des participants (5 maximum) :</div>
      <div class=\"card-body\">
        <div class=\"chart-container mt-3\" style=\"position: relative; height:60vh; width:28vw\">
          <canvas id=\"myChartBar\" width=\"50\" height=\"50\"></canvas>
        </div>
      </div>
    </div>
</div>
  </div>

</section>

<section class=\"wrapper\" id=\"blockNewsletter\" hidden=true>
<div class=\"app d-flex mt-5 flex-row align-items-center\">
    <div class=\"container\">
        <div class=\"justify-content-center row\">
            <div class=\"col-md-8\">
                <div class=\"card-group\">
                    <div class=\"text-white py-5 d-md-down-none card blockBackgroundNewsletter\">
                        <div class=\"text-center card-body blockBackgroundNewsletter\" id=\"listCustomerTickets\">
                            <div class=\"col-12 contentUserGain\" id=\"blockUserGain\">
                                <p>";
        // line 111
        echo twig_escape_filter($this->env, ($context["newsLetterCustomerNB"] ?? null), "html", null, true);
        echo " client qui ce sont inscris à la newsletter.</p>
                                <p>Télécharger un fichier CSV contenant leurs email :</p>
                                <input type=\"button\" id=\"sendNewsletter\" value=\"Telecharger\">
                                <a href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Mails");
        echo "\" class=\"btn btn-success\">Télécharger</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  
</section>



<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js\"></script>
<script>

  var topSideBar = document.getElementById('topSideBar');
  baseUrl = topSideBar.dataset.baseurl;

  ";
        // line 136
        echo "  titleAboutUs = [];
  countAboutUs = [];
  aboutUsInfo = document.getElementsByClassName('aboutUsInfo');
  for(i=0;i<aboutUsInfo.length;i++){
    data = aboutUsInfo[i].value;
    data = data.split(\"-\");
    titleAboutUs.push(data[0]);
    countAboutUs.push(parseInt(data[1]));
  }

  const ctx = document.getElementById('myChart').getContext('2d');
  const myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: titleAboutUs,
          datasets: [{
              data: countAboutUs,
              backgroundColor: [
                  'rgba(255, 99, 132, 0.5)',
                  'rgba(54, 162, 235, 0.5)',
                  'rgba(255, 206, 86, 0.5)',
                  'rgba(75, 192, 192, 0.5)',
                  'rgba(255, 159, 64, 0.5)'
              ]
          }]
      },
      options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'top',
        },
        title: {
          display: true,
          text: 'Chart.js Doughnut Chart'
        }
      }
    }
  });

";
        // line 177
        echo "
  titleCity = [];
  countCity = [];
  cityInfo = document.getElementsByClassName('cityInfo');
  for(i=0;i<cityInfo.length;i++){
    data = cityInfo[i].value;
    data = data.split(\" \");
    
    titleCity.push(data[0]);
    countCity.push(parseInt(data[1]));
  }

  const ctxBar = document.getElementById('myChartBar').getContext('2d');
  const myChartBar = new Chart(ctxBar, {
     type: 'doughnut',
      data: {
          labels: titleCity,
          datasets: [{
              data: countCity,
              backgroundColor: [
                  'rgba(255, 99, 132, 0.5)',
                  'rgba(54, 162, 235, 0.5)',
                  'rgba(255, 206, 86, 0.5)',
                  'rgba(75, 192, 192, 0.5)',
                  'rgba(255, 159, 64, 0.5)'
              ]
          }]
      },
      options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'top',
        },
        title: {
          display: true,
          text: 'Chart.js Doughnut Chart'
        }
      }
    }
  });

";
        // line 220
        echo "\$(document).on('click','#statistiques',function(e){
    e.preventDefault();
    blockStatistique = document.getElementById('blockStatistique');
    blockNewsletter = document.getElementById('blockNewsletter');
    blockStatistique.hidden = false;
    blockNewsletter.hidden = true;
});
\$(document).on('click','#newsletter',function(e){
    e.preventDefault();
    blockStatistique = document.getElementById('blockStatistique');
    blockNewsletter = document.getElementById('blockNewsletter');
    blockStatistique.hidden = true;
    blockNewsletter.hidden = false;
});

";
        // line 236
        echo "\$(document).on('click','#sendNewsletter',function(e){
    emailInfo = document.getElementsByClassName('emailInfo');
    csvContent = \"data:text/csv;charset=utf-8,\";
    for(i=0;i<emailInfo.length;i++){
      csvContent += emailInfo[i].value + \"\\r\\n\";
    }
      var encodedUri = encodeURI(csvContent);
      var link = document.createElement(\"a\");
      link.setAttribute(\"href\", encodedUri);
      link.setAttribute(\"download\", \"customers_email.csv\");
      document.body.appendChild(link);
      link.click();
});

</script>

";
    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 236,  338 => 220,  294 => 177,  252 => 136,  228 => 114,  222 => 111,  180 => 71,  169 => 69,  164 => 68,  153 => 66,  149 => 65,  145 => 63,  134 => 58,  130 => 57,  125 => 54,  121 => 53,  112 => 47,  75 => 13,  71 => 11,  67 => 10,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/index.html.twig", "C:\\wamp64\\www\\tiptop2\\templates\\admin\\index.html.twig");
    }
}

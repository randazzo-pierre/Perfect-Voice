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

/* User/Photolist.html.twig */
class __TwigTemplate_6abc7091a8b3210df161cfff8596a9f22cd66229a7563259a5619383d457626f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('head', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('css', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('body', $context, $blocks);
    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=devide-width, initial-scale=1.0, shrink-to-fit=no\">
    <title>Perfect Voice</title>
";
    }

    // line 8
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <link href=\"http://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Titillium+Web\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" href=\"/asset/css/style.css\">
";
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    <nav id=\"nav\" class=\"navbar navbar-expand-lg navbar-light bg-light d-flex sticky\">
        <a class=\"navbar-brand mr-auto\" href=\"#\"><img src=\"/asset/uploads/images/logotexte.png\" width=\"200px\"
                                                      alt=\"Logo Perfect Voice\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\"
                aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse justify-end\" id=\"navbarNavDropdown\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Language
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"#\">Français</a>
                        <a class=\"dropdown-item\" href=\"#\">Anglais</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Vertical navbar -->
    <div class=\"vertical-nav bg-white\" id=\"sidebar\">
        <div class=\"py-4 px-3 mb-4 bg-light\">
            <div class=\"media d-flex align-items-center\">
                <div class=\"media-body\">
                    <h5 class=\"m-0\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "uti_prenom", [], "any", false, false, false, 45), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "uti_nom", [], "any", false, false, false, 45), "html", null, true);
        echo "</h5>
                </div>
            </div>
        </div>

        <p class=\"text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0\">Mon compte</p>

        <ul class=\"nav flex-column bg-white mb-0\">
            <li class=\"nav-item\">
                <a href=\"/Mesvoix\" class=\"nav-link text-light font-italic bg-danger\">
                    <i class=\"fa fa-th-large mr-3 text-primary fa-fw\"></i>
                    Mes voix
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/Match\" class=\"nav-link text-light font-italic bg-danger\">
                    <i class=\"fa fa-picture-o mr-3 text-primary fa-fw\"></i>
                    Mes matchs
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/Profil\" class=\"nav-link text-light font-italic bg-danger\">
                    <i class=\"fa fa-address-card mr-3 text-primary fa-fw\"></i>
                    Mon profil
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/Messages\" class=\"nav-link text-light font-italic bg-danger\">
                    <i class=\"fa fa-cubes mr-3 text-primary fa-fw\"></i>
                    Messages
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/Rechercher\" class=\"nav-link text-light font-italic bg-danger\">
                    <i class=\"fa fa-picture-o mr-3 text-primary fa-fw\"></i>
                    Rechercher
                </a>
            </li>

        </ul>

        <p class=\"text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0\">Autres</p>

        <ul class=\"nav flex-column bg-white mb-0\">
            <li class=\"nav-item\">
                <a href=\"/apropos\" class=\"nav-link text-dark font-italic\">
                    <i class=\"fa fa-area-chart mr-3 text-primary fa-fw\"></i>
                    A propos
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/contacteznous\" class=\"nav-link text-dark font-italic\">
                    <i class=\"fa fa-bar-chart mr-3 text-primary fa-fw\"></i>
                    Contactez-nous
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link text-dark font-italic\">
                    <i class=\"fa fa-pie-chart mr-3 text-primary fa-fw\"></i>
                    Paramètres
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/Logout\" class=\"nav-link text-dark font-italic\">
                    <i class=\"fa fa-pie-chart mr-3 text-primary fa-fw\"></i>
                    Se déconnecter
                </a>
            </li>
        </ul>
    </div>
    <!-- Fin navbar -->
    <br /><br />
    <div class=\"container\" style=\"width:900px;\">
        <h3 align=\"center\">Gallerie</h3>
        <br />
        <div align=\"right\">
            <button type=\"button\" name=\"add\" id=\"add\" class=\"btn btn-success\">Add</button>
        </div>
        <br />
        <div id=\"image_data\">

        </div>
    </div>

    <div id=\"imageModal\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Add Image</h4>
                </div>
                <div class=\"modal-body\">
                    <form id=\"image_form\" method=\"post\" enctype=\"multipart/form-data\">
                        <p><label>Select Image</label>
                            <input type=\"file\" name=\"image\" id=\"image\" /></p><br />
                        <input type=\"hidden\" name=\"action\" id=\"action\" value=\"insert\" />
                        <input type=\"hidden\" name=\"image_id\" id=\"image_id\" />
                        <input type=\"submit\" name=\"insert\" id=\"insert\" value=\"Insert\" class=\"btn btn-info\" />

                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>

    <table class=\"table table-bordered table-striped\">
    <tr>
        <th width=\"5%\">ID</th>
        <th width=\"5%\">Image</th>
        <th width=\"5%\">Change</th>
        <th width=\"5%\">Remove</th>
    </tr>
    <tr>
        <td>'.\$row[\"id\"].'</td>
        <td>
            <img src=\"\" height=\"60\" width=\"75\" class=\"img-thumbnail\" />
        </td>
        <td><button type=\"button\" name=\"update\" class=\"btn btn-warning bt-xs update\" id=\"'.\$row[\"id\"].'\">Change</button></td>
        <td><button type=\"button\" name=\"delete\" class=\"btn btn-danger bt-xs delete\" id=\"'.\$row[\"id\"].'\">Remove</button></td>
    </tr>
    <script>
        \$(document).ready(function(){

            fetch_data();

            function fetch_data()
            {
                var action = \"fetch\";
                \$.ajax({
                    url:\"PhotoController.php\",
                    method:\"POST\",
                    data:{action:action},
                    success:function(data)
                    {
                        \$('#image_data').html(data);
                    }
                })
            }
            \$('#add').click(function(){
                \$('#imageModal').modal('show');
                \$('#image_form')[0].reset();
                \$('.modal-title').text(\"Add Image\");
                \$('#image_id').val('');
                \$('#action').val('insert');
                \$('#insert').val(\"Insert\");
            });
            \$('#image_form').submit(function(event){
                event.preventDefault();
                var image_name = \$('#image').val();
                if(image_name == '')
                {
                    alert(\"Please Select Image\");
                    return false;
                }
                else
                {
                    var extension = \$('#image').val().split('.').pop().toLowerCase();
                    if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                    {
                        alert(\"Invalid Image File\");
                        \$('#image').val('');
                        return false;
                    }
                    else
                    {
                        \$.ajax({
                            url:\"PhotoController.php\",
                            method:\"POST\",
                            data:new FormData(this),
                            contentType:false,
                            processData:false,
                            success:function(data)
                            {
                                alert(data);
                                fetch_data();
                                \$('#image_form')[0].reset();
                                \$('#imageModal').modal('hide');
                            }
                        });
                    }
                }
            });
            \$(document).on('click', '.update', function(){
                \$('#image_id').val(\$(this).attr(\"id\"));
                \$('#action').val(\"update\");
                \$('.modal-title').text(\"Update Image\");
                \$('#insert').val(\"Update\");
                \$('#imageModal').modal(\"show\");
            });
            \$(document).on('click', '.delete', function(){
                var image_id = \$(this).attr(\"id\");
                var action = \"delete\";
                if(confirm(\"confirmé la suppression ?\"))
                {
                    \$.ajax({
                        url:\"PhotoController.php\",
                        method:\"POST\",
                        data:{image_id:image_id, action:action},
                        success:function(data)
                        {
                            alert(data);
                            fetch_data();
                        }
                    })
                }
                else
                {
                    return false;
                }
            });
        });
    </script>

  ";
        // line 261
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 262
        echo "  <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
      <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
      <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "User/Photolist.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  344 => 262,  337 => 261,  116 => 45,  86 => 17,  82 => 16,  73 => 9,  69 => 8,  62 => 3,  58 => 2,  54 => 16,  51 => 15,  49 => 8,  46 => 7,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block head %}
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=devide-width, initial-scale=1.0, shrink-to-fit=no\">
    <title>Perfect Voice</title>
{% endblock %}

{% block css %}
    <link href=\"http://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Titillium+Web\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" href=\"/asset/css/style.css\">
{% endblock %}

{% block body %}
    <nav id=\"nav\" class=\"navbar navbar-expand-lg navbar-light bg-light d-flex sticky\">
        <a class=\"navbar-brand mr-auto\" href=\"#\"><img src=\"/asset/uploads/images/logotexte.png\" width=\"200px\"
                                                      alt=\"Logo Perfect Voice\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\"
                aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse justify-end\" id=\"navbarNavDropdown\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Language
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"#\">Français</a>
                        <a class=\"dropdown-item\" href=\"#\">Anglais</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Vertical navbar -->
    <div class=\"vertical-nav bg-white\" id=\"sidebar\">
        <div class=\"py-4 px-3 mb-4 bg-light\">
            <div class=\"media d-flex align-items-center\">
                <div class=\"media-body\">
                    <h5 class=\"m-0\">{{ session.uti_prenom }} {{ session.uti_nom }}</h5>
                </div>
            </div>
        </div>

        <p class=\"text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0\">Mon compte</p>

        <ul class=\"nav flex-column bg-white mb-0\">
            <li class=\"nav-item\">
                <a href=\"/Mesvoix\" class=\"nav-link text-light font-italic bg-danger\">
                    <i class=\"fa fa-th-large mr-3 text-primary fa-fw\"></i>
                    Mes voix
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/Match\" class=\"nav-link text-light font-italic bg-danger\">
                    <i class=\"fa fa-picture-o mr-3 text-primary fa-fw\"></i>
                    Mes matchs
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/Profil\" class=\"nav-link text-light font-italic bg-danger\">
                    <i class=\"fa fa-address-card mr-3 text-primary fa-fw\"></i>
                    Mon profil
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/Messages\" class=\"nav-link text-light font-italic bg-danger\">
                    <i class=\"fa fa-cubes mr-3 text-primary fa-fw\"></i>
                    Messages
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/Rechercher\" class=\"nav-link text-light font-italic bg-danger\">
                    <i class=\"fa fa-picture-o mr-3 text-primary fa-fw\"></i>
                    Rechercher
                </a>
            </li>

        </ul>

        <p class=\"text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0\">Autres</p>

        <ul class=\"nav flex-column bg-white mb-0\">
            <li class=\"nav-item\">
                <a href=\"/apropos\" class=\"nav-link text-dark font-italic\">
                    <i class=\"fa fa-area-chart mr-3 text-primary fa-fw\"></i>
                    A propos
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/contacteznous\" class=\"nav-link text-dark font-italic\">
                    <i class=\"fa fa-bar-chart mr-3 text-primary fa-fw\"></i>
                    Contactez-nous
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link text-dark font-italic\">
                    <i class=\"fa fa-pie-chart mr-3 text-primary fa-fw\"></i>
                    Paramètres
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/Logout\" class=\"nav-link text-dark font-italic\">
                    <i class=\"fa fa-pie-chart mr-3 text-primary fa-fw\"></i>
                    Se déconnecter
                </a>
            </li>
        </ul>
    </div>
    <!-- Fin navbar -->
    <br /><br />
    <div class=\"container\" style=\"width:900px;\">
        <h3 align=\"center\">Gallerie</h3>
        <br />
        <div align=\"right\">
            <button type=\"button\" name=\"add\" id=\"add\" class=\"btn btn-success\">Add</button>
        </div>
        <br />
        <div id=\"image_data\">

        </div>
    </div>

    <div id=\"imageModal\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Add Image</h4>
                </div>
                <div class=\"modal-body\">
                    <form id=\"image_form\" method=\"post\" enctype=\"multipart/form-data\">
                        <p><label>Select Image</label>
                            <input type=\"file\" name=\"image\" id=\"image\" /></p><br />
                        <input type=\"hidden\" name=\"action\" id=\"action\" value=\"insert\" />
                        <input type=\"hidden\" name=\"image_id\" id=\"image_id\" />
                        <input type=\"submit\" name=\"insert\" id=\"insert\" value=\"Insert\" class=\"btn btn-info\" />

                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>

    <table class=\"table table-bordered table-striped\">
    <tr>
        <th width=\"5%\">ID</th>
        <th width=\"5%\">Image</th>
        <th width=\"5%\">Change</th>
        <th width=\"5%\">Remove</th>
    </tr>
    <tr>
        <td>'.\$row[\"id\"].'</td>
        <td>
            <img src=\"\" height=\"60\" width=\"75\" class=\"img-thumbnail\" />
        </td>
        <td><button type=\"button\" name=\"update\" class=\"btn btn-warning bt-xs update\" id=\"'.\$row[\"id\"].'\">Change</button></td>
        <td><button type=\"button\" name=\"delete\" class=\"btn btn-danger bt-xs delete\" id=\"'.\$row[\"id\"].'\">Remove</button></td>
    </tr>
    <script>
        \$(document).ready(function(){

            fetch_data();

            function fetch_data()
            {
                var action = \"fetch\";
                \$.ajax({
                    url:\"PhotoController.php\",
                    method:\"POST\",
                    data:{action:action},
                    success:function(data)
                    {
                        \$('#image_data').html(data);
                    }
                })
            }
            \$('#add').click(function(){
                \$('#imageModal').modal('show');
                \$('#image_form')[0].reset();
                \$('.modal-title').text(\"Add Image\");
                \$('#image_id').val('');
                \$('#action').val('insert');
                \$('#insert').val(\"Insert\");
            });
            \$('#image_form').submit(function(event){
                event.preventDefault();
                var image_name = \$('#image').val();
                if(image_name == '')
                {
                    alert(\"Please Select Image\");
                    return false;
                }
                else
                {
                    var extension = \$('#image').val().split('.').pop().toLowerCase();
                    if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                    {
                        alert(\"Invalid Image File\");
                        \$('#image').val('');
                        return false;
                    }
                    else
                    {
                        \$.ajax({
                            url:\"PhotoController.php\",
                            method:\"POST\",
                            data:new FormData(this),
                            contentType:false,
                            processData:false,
                            success:function(data)
                            {
                                alert(data);
                                fetch_data();
                                \$('#image_form')[0].reset();
                                \$('#imageModal').modal('hide');
                            }
                        });
                    }
                }
            });
            \$(document).on('click', '.update', function(){
                \$('#image_id').val(\$(this).attr(\"id\"));
                \$('#action').val(\"update\");
                \$('.modal-title').text(\"Update Image\");
                \$('#insert').val(\"Update\");
                \$('#imageModal').modal(\"show\");
            });
            \$(document).on('click', '.delete', function(){
                var image_id = \$(this).attr(\"id\");
                var action = \"delete\";
                if(confirm(\"confirmé la suppression ?\"))
                {
                    \$.ajax({
                        url:\"PhotoController.php\",
                        method:\"POST\",
                        data:{image_id:image_id, action:action},
                        success:function(data)
                        {
                            alert(data);
                            fetch_data();
                        }
                    })
                }
                else
                {
                    return false;
                }
            });
        });
    </script>

  {% block javascript %}
  <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
      <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
      <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
  {% endblock %}
{% endblock %}", "User/Photolist.html.twig", "C:\\Dev\\Perfect Voice\\templates\\User\\Photolist.html.twig");
    }
}

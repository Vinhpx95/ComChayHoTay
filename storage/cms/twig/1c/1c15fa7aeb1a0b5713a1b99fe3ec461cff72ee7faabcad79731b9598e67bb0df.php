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

/* C:\Users\Administrator\Documents\Git\ComChayHoTay/themes/comchayhotay/layouts/default.htm */
class __TwigTemplate_c00768c1c0038f251b748f8fa0a9e66d0d1cbcc3c210ef0118e16fff0c17e81f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title>Cơm chay Hồ Tây</title>
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_description", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"Cơm chay Hồ Tây\">
    <meta name=\"author\" content=\"Cơm chay Hồ Tây\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"Cơm chay Hồ Tây\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/lotus.png");
        echo "\">
    <!-- Bootstrap -->
    <link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
    <!-- Style CSS -->
    <link href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">
    <!-- Google Fonts -->
    <link
        href=\"https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i%7cZilla+Slab:300,300i,400,400i,500,500i,600,600i,700,700i\"
        rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.carousel.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.theme.default.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/jquery-ui.css");
        echo "\" rel=\"stylesheet\">
    <!-- FontAwesome CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/fontello.css");
        echo "\">
    <link href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/font-awesome.min.css");
        echo "\" rel=\"stylesheet\">
    ";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 28
        echo "    <style>
        .restaurant-name {
            text-align: center;
            font-size: 36px;
            text-transform: uppercase;
            color: #1AA644;

        }
    </style>
</head>

<body>
    <!-- top-bar -->
    <div class=\"top-bar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-4 col-sm-5 hidden-xs\">
                    <div class=\"support-bar\">
                        <span class=\"support-icon\"><i class=\"icon-circular-clock\"></i></span>
                        <p class=\"support-text\">
                            Mon to Fri : 11:00am - 10:00pm
                            <br> Sat to Sun : 08:00am - 11:00pm
                        </p>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-4 col-sm-2 col-xs-12\">
                    <div class=\"logo\"><a href=\"index.html\"><img src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/lotus.png");
        echo "\" alt=\"\"
                                width=\"90px\" height=\"90px\"></a></div>
                    <div class=\"restaurant-name\">Cơm chay Hồ Tây</div>
                </div>
                <div class=\"col-lg-3 col-md-4 col-sm-5 hidden-xs\">
                    <div class=\"support-bar\">
                        <div class=\"support-icon\"><i class=\"icon-at-email\"></i></div>
                        <p class=\"support-text\"> 167 Science Center Drive, USA
                            <br> +180-123-4567
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.top-bar -->
    <!-- Header -->
    <div class=\"header-wrapper\">
        ";
        // line 72
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 73
        echo "    </div>

    <!-- Content -->
    ";
        // line 76
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 77
        echo "
    <!-- Footer -->
    <div class=\"footer\">
        ";
        // line 80
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 81
        echo "    </div>

    <!-- Scripts -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/jquery.min.js");
        echo "\" type=\"text/javascript\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/bootstrap.min.js");
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>

    <script src=\"";
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/menumaker.js");
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/jquery.sticky.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 92
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/sticky-header.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/owl.carousel.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/multiple-carousel.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 95
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/jquery-ui.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 96
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/date.js");
        echo "\"></script>
    ";
        // line 97
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 98
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 99
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Administrator\\Documents\\Git\\ComChayHoTay/themes/comchayhotay/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 99,  223 => 98,  212 => 97,  208 => 96,  204 => 95,  200 => 94,  196 => 93,  192 => 92,  188 => 91,  184 => 90,  179 => 88,  175 => 87,  170 => 85,  164 => 81,  160 => 80,  155 => 77,  153 => 76,  148 => 73,  144 => 72,  123 => 54,  95 => 28,  92 => 27,  88 => 26,  84 => 25,  79 => 23,  75 => 22,  71 => 21,  63 => 16,  58 => 14,  53 => 12,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title>Cơm chay Hồ Tây</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"Cơm chay Hồ Tây\">
    <meta name=\"author\" content=\"Cơm chay Hồ Tây\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"Cơm chay Hồ Tây\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/lotus.png'|theme }}\">
    <!-- Bootstrap -->
    <link href=\"{{ 'assets/css/bootstrap.min.css'|theme }}\" rel=\"stylesheet\">
    <!-- Style CSS -->
    <link href=\"{{ 'assets/css/style.css'|theme }}\" rel=\"stylesheet\">
    <!-- Google Fonts -->
    <link
        href=\"https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i%7cZilla+Slab:300,300i,400,400i,500,500i,600,600i,700,700i\"
        rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/owl.carousel.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/owl.theme.default.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/jquery-ui.css'|theme }}\" rel=\"stylesheet\">
    <!-- FontAwesome CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/css/fontello.css'|theme }}\">
    <link href=\"{{ 'assets/css/font-awesome.min.css'|theme }}\" rel=\"stylesheet\">
    {% styles %}
    <style>
        .restaurant-name {
            text-align: center;
            font-size: 36px;
            text-transform: uppercase;
            color: #1AA644;

        }
    </style>
</head>

<body>
    <!-- top-bar -->
    <div class=\"top-bar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-4 col-sm-5 hidden-xs\">
                    <div class=\"support-bar\">
                        <span class=\"support-icon\"><i class=\"icon-circular-clock\"></i></span>
                        <p class=\"support-text\">
                            Mon to Fri : 11:00am - 10:00pm
                            <br> Sat to Sun : 08:00am - 11:00pm
                        </p>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-4 col-sm-2 col-xs-12\">
                    <div class=\"logo\"><a href=\"index.html\"><img src=\"{{ 'assets/images/lotus.png'|theme }}\" alt=\"\"
                                width=\"90px\" height=\"90px\"></a></div>
                    <div class=\"restaurant-name\">Cơm chay Hồ Tây</div>
                </div>
                <div class=\"col-lg-3 col-md-4 col-sm-5 hidden-xs\">
                    <div class=\"support-bar\">
                        <div class=\"support-icon\"><i class=\"icon-at-email\"></i></div>
                        <p class=\"support-text\"> 167 Science Center Drive, USA
                            <br> +180-123-4567
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.top-bar -->
    <!-- Header -->
    <div class=\"header-wrapper\">
        {% partial 'site/header' %}
    </div>

    <!-- Content -->
    {% page %}

    <!-- Footer -->
    <div class=\"footer\">
        {% partial 'site/footer' %}
    </div>

    <!-- Scripts -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"{{ 'assets/javascript/jquery.min.js'|theme }}\" type=\"text/javascript\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"{{ 'assets/javascript/bootstrap.min.js'|theme }}\" type=\"text/javascript\"></script>
    <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>

    <script src=\"{{ 'assets/javascript/menumaker.js'|theme }}\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/javascript/jquery.sticky.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/javascript/sticky-header.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/javascript/owl.carousel.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/javascript/multiple-carousel.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/javascript/jquery-ui.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/javascript/date.js'|theme }}\"></script>
    {% framework extras %}
    {% scripts %}

</body>

</html>", "C:\\Users\\Administrator\\Documents\\Git\\ComChayHoTay/themes/comchayhotay/layouts/default.htm", "");
    }
}

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

/* C:\Users\Administrator\Documents\Git\ComChayHoTay/themes/comchayhotay/partials/site/header.htm */
class __TwigTemplate_93428c4a45e58d3fa959b914dbddb041f4b93692ee006096fc52f0161e8ee5c5 extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <!-- navigations-->
            <div class=\"navigation\">
                <div id=\"navigation\">
                    <ul>
                        <li class=\"active\"><a href=\"index.html\">Home</a></li>
                        <li><a href=\"menu.html\">Menu</a>
                        </li>
                        <li><a href=\"blog-default.html\">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.navigations-->
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Administrator\\Documents\\Git\\ComChayHoTay/themes/comchayhotay/partials/site/header.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <!-- navigations-->
            <div class=\"navigation\">
                <div id=\"navigation\">
                    <ul>
                        <li class=\"active\"><a href=\"index.html\">Home</a></li>
                        <li><a href=\"menu.html\">Menu</a>
                        </li>
                        <li><a href=\"blog-default.html\">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.navigations-->
        </div>
    </div>
</div>", "C:\\Users\\Administrator\\Documents\\Git\\ComChayHoTay/themes/comchayhotay/partials/site/header.htm", "");
    }
}

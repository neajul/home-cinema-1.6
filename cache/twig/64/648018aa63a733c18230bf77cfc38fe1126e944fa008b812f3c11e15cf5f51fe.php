<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* theme.php.twig */
class __TwigTemplate_113f88c9f785fa7b62f7a1fb5e8c034fa8fd5762ca644a7f9aaefe0f8c9d638e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<?php
namespace Grav\\Theme;

use Grav\\Common\\Theme;

class ";
        // line 6
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("camel", $this->getAttribute(($context["component"] ?? null), "name", []));
        echo " extends Theme
{
    // Access plugin events in this class
}
";
    }

    public function getTemplateName()
    {
        return "theme.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Grav\\Theme;

use Grav\\Common\\Theme;

class {{ component.name|camelize }} extends Theme
{
    // Access plugin events in this class
}
", "theme.php.twig", "/Users/lukasengelhardt/Dropbox/Current Work/Sandberg/yr 1/08 home cinema/1 code/home-cinema-1.6/user/plugins/devtools/components/theme/pure-blank/theme.php.twig");
    }
}

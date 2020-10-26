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

/* blueprints.yaml.twig */
class __TwigTemplate_15fc670571cdc89bf49acac7b3c684359d3cd6ed14b4d0256cfc8e31dc9ddaed extends \Twig\Template
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
        $context["githubid"] = (($this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", []), "githubid", [])) ? ($this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", []), "githubid", [])) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", []), "name", []))));
        // line 2
        echo "name: ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("title", $this->getAttribute(($context["component"] ?? null), "name", []));
        echo "
slug: ";
        // line 3
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute(($context["component"] ?? null), "name", []));
        echo "
type: theme
version: 0.1.0
description: ";
        // line 6
        echo $this->getAttribute(($context["component"] ?? null), "description", []);
        echo "
icon: rebel
author:
  name: ";
        // line 9
        echo $this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", []), "name", []);
        echo "
  email: ";
        // line 10
        echo $this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", []), "email", []);
        echo "
homepage: https://github.com/";
        // line 11
        echo ($context["githubid"] ?? null);
        echo "/grav-theme-";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute(($context["component"] ?? null), "name", []));
        echo "
demo: http://demo.yoursite.com
keywords: grav, theme, etc
bugs: https://github.com/";
        // line 14
        echo ($context["githubid"] ?? null);
        echo "/grav-theme-";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute(($context["component"] ?? null), "name", []));
        echo "/issues
readme: https://github.com/";
        // line 15
        echo ($context["githubid"] ?? null);
        echo "/grav-theme-";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute(($context["component"] ?? null), "name", []));
        echo "/blob/develop/README.md
license: MIT

dependencies:
  - { name: grav, version: '>=1.6.0' }

form:
  validation: loose
  fields:
    dropdown.enabled:
        type: toggle
        label: Dropdown in Menu
        highlight: 1
        default: 1
        options:
          1: PLUGIN_ADMIN.ENABLED
          0: PLUGIN_ADMIN.DISABLED
        validate:
          type: bool
";
    }

    public function getTemplateName()
    {
        return "blueprints.yaml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  65 => 14,  57 => 11,  53 => 10,  49 => 9,  43 => 6,  37 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set githubid = component.author.githubid ?: component.author.name|hyphenize -%}
name: {{ component.name|titleize }}
slug: {{ component.name|hyphenize }}
type: theme
version: 0.1.0
description: {{ component.description }}
icon: rebel
author:
  name: {{ component.author.name }}
  email: {{ component.author.email }}
homepage: https://github.com/{{ githubid }}/grav-theme-{{ component.name|hyphenize }}
demo: http://demo.yoursite.com
keywords: grav, theme, etc
bugs: https://github.com/{{ githubid }}/grav-theme-{{ component.name|hyphenize }}/issues
readme: https://github.com/{{ githubid }}/grav-theme-{{ component.name|hyphenize }}/blob/develop/README.md
license: MIT

dependencies:
  - { name: grav, version: '>=1.6.0' }

form:
  validation: loose
  fields:
    dropdown.enabled:
        type: toggle
        label: Dropdown in Menu
        highlight: 1
        default: 1
        options:
          1: PLUGIN_ADMIN.ENABLED
          0: PLUGIN_ADMIN.DISABLED
        validate:
          type: bool
", "blueprints.yaml.twig", "/Users/lukasengelhardt/Dropbox/Current Work/Sandberg/yr 1/08 home cinema/1 code/home-cinema-1.6/user/plugins/devtools/components/theme/pure-blank/blueprints.yaml.twig");
    }
}

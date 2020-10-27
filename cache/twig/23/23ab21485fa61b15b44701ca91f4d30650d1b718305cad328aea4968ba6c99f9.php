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

/* default.html.twig */
class __TwigTemplate_9de1010f2d790d8318db6231ea774d674d03bfa4fa56e4b0976dd16d3e1fca4f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 5
        echo "
";
        // line 7
        echo "  ";
        // line 8
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if (($this->getAttribute($context["p"], "template", []) == "day")) {
                // line 9
                echo "    <div class=\"day-container\">
      ";
                // line 11
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "header", []), "programitems", []));
                foreach ($context['_seq'] as $context["_key"] => $context["pitem"]) {
                    // line 12
                    echo "        <div class=\"program-item\">
        ";
                    // line 14
                    echo "          <span class=\"starting-time\">";
                    echo $this->getAttribute($context["pitem"], "start", []);
                    echo "</span>
        ";
                    // line 16
                    echo "          <span class=\"duration\">";
                    echo $this->getAttribute($context["pitem"], "duration", []);
                    echo " min</span>
        ";
                    // line 18
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["pitem"], "mainimage", []));
                    foreach ($context['_seq'] as $context["image"] => $context["notimportant"]) {
                        // line 19
                        echo "            <img class=\"main-img\" src=\"";
                        echo $context["image"];
                        echo "\" alt=\"\">
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['image'], $context['notimportant'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo "        ";
                    // line 22
                    echo "          ";
                    // line 23
                    echo "          ";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["pitem"], "movies", [])) > 1)) {
                        // line 24
                        echo "            <ul class=\"content-list\">
              <li><h1>";
                        // line 25
                        echo $this->getAttribute($context["pitem"], "title", []);
                        echo "</h1></li>
              ";
                        // line 26
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["pitem"], "movies", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
                            // line 27
                            echo "                <li>
                  <span>";
                            // line 28
                            echo $this->getAttribute($context["movie"], "title", []);
                            echo "</span>
                  <span>";
                            // line 29
                            echo $this->getAttribute($context["movie"], "author", []);
                            echo "</span>
                  <span>";
                            // line 30
                            echo $this->getAttribute($context["movie"], "length", []);
                            echo " min</span>
                </li>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 33
                        echo "              <li>";
                        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($context["pitem"], "desription", []));
                        echo "</li>
              <li>";
                        // line 34
                        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($context["pitem"], "credits", []));
                        echo "</li>
            </ul>
            <ul class=\"department-list\">
            ";
                        // line 37
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["pitem"], "movies", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
                            // line 38
                            echo "              <li>
                <span>";
                            // line 39
                            echo $this->getAttribute($context["movie"], "department", []);
                            echo "</span>
              </li>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 42
                        echo "            </ul>
        ";
                        // line 44
                        echo "          ";
                    } else {
                        // line 45
                        echo "            <ul class=\"content-list\">
              <li><h1>";
                        // line 46
                        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($context["pitem"], "movies", [])), "title", []);
                        echo "</h1></li>
              <li><span>";
                        // line 47
                        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($context["pitem"], "movies", [])), "author", []);
                        echo "</span></li>
              <li>";
                        // line 48
                        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($context["pitem"], "desription", []));
                        echo "</li>
              <li>";
                        // line 49
                        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($context["pitem"], "credits", []));
                        echo "</li>
            </ul>
            <ul class=\"department-list\">
              <li>
                <span>";
                        // line 53
                        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($context["pitem"], "movies", [])), "department", []);
                        echo "</span>
              </li>
            </ul>
          ";
                    }
                    // line 57
                    echo "        </div>

        ";
                    // line 59
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, $context["pitem"]);
                    echo "
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "    </div>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 61,  192 => 59,  188 => 57,  181 => 53,  174 => 49,  170 => 48,  166 => 47,  162 => 46,  159 => 45,  156 => 44,  153 => 42,  144 => 39,  141 => 38,  137 => 37,  131 => 34,  126 => 33,  117 => 30,  113 => 29,  109 => 28,  106 => 27,  102 => 26,  98 => 25,  95 => 24,  92 => 23,  90 => 22,  88 => 21,  79 => 19,  74 => 18,  69 => 16,  64 => 14,  61 => 12,  56 => 11,  53 => 9,  47 => 8,  45 => 7,  42 => 5,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
{# first, about part #}

{# then, program part #}
  {# loop through days #}
  {% for p in pages.children.visible if p.template == \"day\" %}
    <div class=\"day-container\">
      {# loop through program items #}
      {% for pitem in p.header.programitems %}
        <div class=\"program-item\">
        {# start time #}
          <span class=\"starting-time\">{{pitem.start}}</span>
        {# duration #}
          <span class=\"duration\">{{pitem.duration}} min</span>
        {# main image #}
          {% for image, notimportant in pitem.mainimage %}
            <img class=\"main-img\" src=\"{{image}}\" alt=\"\">
          {% endfor %}
        {# content #}
          {# multiple movies #}
          {% if pitem.movies|length > 1 %}
            <ul class=\"content-list\">
              <li><h1>{{pitem.title}}</h1></li>
              {% for movie in pitem.movies %}
                <li>
                  <span>{{movie.title}}</span>
                  <span>{{movie.author}}</span>
                  <span>{{movie.length}} min</span>
                </li>
              {% endfor %}
              <li>{{pitem.desription|markdown}}</li>
              <li>{{pitem.credits|markdown}}</li>
            </ul>
            <ul class=\"department-list\">
            {% for movie in pitem.movies %}
              <li>
                <span>{{movie.department}}</span>
              </li>
            {% endfor %}
            </ul>
        {# just one movie #}
          {% else %}
            <ul class=\"content-list\">
              <li><h1>{{pitem.movies|first.title}}</h1></li>
              <li><span>{{pitem.movies|first.author}}</span></li>
              <li>{{pitem.desription|markdown}}</li>
              <li>{{pitem.credits|markdown}}</li>
            </ul>
            <ul class=\"department-list\">
              <li>
                <span>{{pitem.movies|first.department}}</span>
              </li>
            </ul>
          {% endif %}
        </div>

        {{dump(pitem)}}
      {% endfor %}
    </div>
  {% endfor %}
{% endblock %}
", "default.html.twig", "/Users/lukasengelhardt/Dropbox/Current Work/Sandberg/yr 1/08 home cinema/1 code/home-cinema-1.6/user/themes/cinema-theme/templates/default.html.twig");
    }
}

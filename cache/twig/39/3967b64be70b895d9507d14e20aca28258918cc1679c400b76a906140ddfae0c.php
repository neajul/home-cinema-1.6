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

/* user-manager.html.twig */
class __TwigTemplate_dc10790f833c80dd476bbb639c0481293c5f518c0449be6c2c4953cf7057d7cc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'titlebar' => [$this, 'block_titlebar'],
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
        // line 2
        $context["macros"] = $this->loadTemplate("user-manager-macros.html.twig", "user-manager.html.twig", 2)->unwrap();
        // line 4
        $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.USER_MANAGER");
        // line 26
        $context["ps"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
        // line 27
        $context["appendUrl"] = ("?filter=" . twig_urlencode_filter(($context["filter"] ?? null)));
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "user-manager.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_titlebar($context, array $blocks = [])
    {
        // line 7
        echo "  ";
        if ( !($context["user"] ?? null)) {
            // line 8
            echo "  <div class=\"button-bar\">
    <a class=\"button\" href=\"#modal-admin-addon-user-manager-new\" data-remodal-target=\"modal-admin-addon-user-manager-new\"><i class=\"fa fa-plus\"></i> ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
            echo "</a>
  </div>

  <h1><i class=\"fa fa-fw fa-user-o\"></i> ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.USER_MANAGER"), "html", null, true);
            echo "</h1>
  ";
        } else {
            // line 14
            echo "  <div class=\"button-bar\">
    <a class=\"button\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/user-manager\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>
    ";
            // line 16
            if (($context["exists"] ?? null)) {
                // line 17
                echo "    <a class=\"button disable-after-click\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => ((($this->getAttribute(($context["uri"] ?? null), "route", [0 => true], "method") . "/task") . ($context["ps"] ?? null)) . "userDelete"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DELETE"), "html", null, true);
                echo "</a>
    <a class=\"button disable-after-click\" href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => ((($this->getAttribute(($context["uri"] ?? null), "route", [0 => true], "method") . "/task") . ($context["ps"] ?? null)) . "userLoginAs"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                echo "\"><i class=\"fa fa-sign-in\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.LOGIN_AS"), "html", null, true);
                echo "</a>
    ";
            }
            // line 20
            echo "    <button class=\"button\" type=\"submit\" name=\"task\" value=\"admin-addon-user-manager-save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
  </div>
  <h1><i class=\"fa fa-fw fa-user\"></i> ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.USER"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", []));
            echo "</h1>
  ";
        }
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        // line 30
        echo "  ";
        if ( !($context["user"] ?? null)) {
            // line 31
            echo "  ";
            $context["style"] = ((array_key_exists("listStyle", $context)) ? (_twig_default_filter(($context["listStyle"] ?? null), "grid")) : ("grid"));
            // line 32
            echo "
  <h1>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.USERS"), "html", null, true);
            echo "</h1>

  ";
            // line 35
            if (($context["filterException"] ?? null)) {
                // line 36
                echo "  <div class=\"notices red\"><h2>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.FILTER_ERROR"), "html", null, true);
                echo "</h2><p>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["filterException"] ?? null), "message", []), "html", null, true);
                echo "</p></div>
  ";
            }
            // line 38
            echo "
  <div class=\"admin-addon-user-manager-filter\">
    <div class=\"admin-addon-user-manager-filter__input\">
      <form method=\"get\">
        <div class=\"block block-text\">
          <div class=\"form-field vertical\">
            <div class=\"form-data\" data-grav-default=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["filter"] ?? null), "html", null, true);
            echo "\">
              <div class=\"form-input-wrapper\">
                <input name=\"filter\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, ($context["filter"] ?? null), "html", null, true);
            echo "\" type=\"text\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.FILTER_USERS"), "html", null, true);
            echo "\">
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>

    <div class=\"admin-addon-user-manager-filter__help\">
      <a href=\"https://github.com/david-szabo97/grav-plugin-admin-addon-user-manager/blob/master/docs/filter.md#users\" class=\"button\" target=\"_new\"><i class=\"fa fa-question\"></i> ";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.HELP"), "html", null, true);
            echo "</a>
    </div>
  </div>

  <div class=\"admin-addon-user-manager-style\">
    ";
            // line 60
            if ((($context["style"] ?? null) != "grid")) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, ((((((($this->getAttribute(($context["uri"] ?? null), "route", [0 => true], "method") . "/listStyle") . ($context["ps"] ?? null)) . "grid") . "/page") . ($context["ps"] ?? null)) . $this->getAttribute(($context["pagination"] ?? null), "current", [])) . ($context["appendUrl"] ?? null)), "html", null, true);
                echo "\"><i class=\"fa fa-th\"></i></a>";
            } else {
                echo "<i class=\"fa fa-th\"></i>";
            }
            // line 61
            echo "    ";
            if ((($context["style"] ?? null) != "list")) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, ((((((($this->getAttribute(($context["uri"] ?? null), "route", [0 => true], "method") . "/listStyle") . ($context["ps"] ?? null)) . "list") . "/page") . ($context["ps"] ?? null)) . $this->getAttribute(($context["pagination"] ?? null), "current", [])) . ($context["appendUrl"] ?? null)), "html", null, true);
                echo "\"><i class=\"fa fa-list\"></i></a>";
            } else {
                echo "<i class=\"fa fa-list\"></i>";
            }
            // line 62
            echo "  </div>

  <form method=\"post\">
    <div class=\"admin-addon-user-manager admin-addon-user-manager--";
            // line 65
            echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
            echo "\">
      ";
            // line 66
            if (twig_test_empty(($context["users"] ?? null))) {
                // line 67
                echo "        <h2>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.NO_RESULTS"), "html", null, true);
                echo "</h2>
      ";
            } else {
                // line 69
                echo "          ";
                if ((($context["style"] ?? null) == "list")) {
                    // line 70
                    echo "          <div class=\"cell cell--header\">
            <div class=\"user\">
              <div class=\"user__checkbox\"><input type=\"checkbox\" id=\"selectAll\" /></div>
              <div class=\"user__username\">";
                    // line 73
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.USERNAME"), "html", null, true);
                    echo "</div>
              <div class=\"user__email\">";
                    // line 74
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EMAIL"), "html", null, true);
                    echo "</div>
              <div class=\"user__actions\">";
                    // line 75
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.ACTIONS"), "html", null, true);
                    echo "</div>
            </div>
          </div>
          ";
                }
                // line 79
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 80
                    echo "          <div class=\"cell\">
            <div class=\"user\">
              ";
                    // line 82
                    if ((($context["style"] ?? null) == "grid")) {
                        // line 83
                        echo "              <div class=\"user__avatar\"><a href=\"";
                        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                        echo "/user-manager/";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                        echo "\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "avatarUrl", []), "html", null, true);
                        echo "\" /></a></div>
              ";
                    } else {
                        // line 85
                        echo "              <div class=\"user__checkbox\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                        echo "\" /></div>
              ";
                    }
                    // line 87
                    echo "              <div class=\"user__username\"><a href=\"";
                    echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                    echo "/user-manager/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
                    echo "</a></div>
              <div class=\"user__email\">";
                    // line 88
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", []), "html", null, true);
                    echo "</div>
              <div class=\"user__actions\">
                <a href=\"";
                    // line 90
                    echo twig_escape_filter($this->env, ((($context["base_url"] ?? null) . "/user-expert/") . $this->getAttribute($context["user"], "username", [])), "html", null, true);
                    echo "\" class=\"expert\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.EXPERT"), "html", null, true);
                    echo "</a>
                <a href=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((((($context["base_url"] ?? null) . "/user-manager/") . $this->getAttribute($context["user"], "username", [])) . "/task") . ($context["ps"] ?? null)) . "userDelete"), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                    echo "\" class=\"delete\" onclick=\"return confirm('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.USER_CONFIRM_DELETE"), "html", null, true);
                    echo "');\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DELETE"), "html", null, true);
                    echo "</a>
              </div>
            </div>
          </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "      ";
            }
            // line 97
            echo "    </div>

    <div class=\"admin-addon-user-manager-bulk-action\">
      <a data-remodal-target=\"modal-admin-addon-user-manager-bulk\" class=\"button\">";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_ADDON_USER_MANAGER.BULK_ACTION"), "html", null, true);
            echo "</a>
    </div>
  </form>

  ";
            // line 104
            echo $context["macros"]->getpagination(($context["pagination"] ?? null), ((($this->getAttribute(($context["uri"] ?? null), "route", [0 => true], "method") . "/listStyle") . ($context["ps"] ?? null)) . ($context["listStyle"] ?? null)), ($context["ps"] ?? null), ($context["appendUrl"] ?? null));
            echo "

  <div class=\"remodal\" data-remodal-id=\"modal-admin-addon-user-manager-new\" data-remodal-options=\"hashTracking: false\">
    <form method=\"post\" onsubmit='handleAdminAddonUserManagerSubmit(this); return false;'>
      ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 109
                echo "        ";
                if ($this->getAttribute($context["field"], "type", [])) {
                    // line 110
                    echo "          ";
                    if (($this->getAttribute($context["field"], "name", []) == "username")) {
                        // line 111
                        echo "          ";
                        $context["field"] = twig_array_merge($context["field"], ["validate" => twig_array_merge($this->getAttribute($context["field"], "validate", []), ["pattern" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "system", []), "username_regex", [])])]);
                        // line 112
                        echo "          ";
                    }
                    // line 113
                    echo "          <div class=\"block block-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", []), "html", null, true);
                    echo "\">
            ";
                    // line 114
                    $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "user-manager.html.twig", 114)->display($context);
                    // line 115
                    echo "          </div>
        ";
                }
                // line 117
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "
      <div class=\"button-bar\">
        <button class=\"button primary\" >";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
            echo "</button>
      </div>
    </form>
  </div>

  <div class=\"remodal\" data-remodal-id=\"modal-admin-addon-user-manager-bulk\" data-remodal-options=\"hashTracking: false\">
    <form method=\"post\" onsubmit='handleAdminAddonUserManagerBulkSubmit(this);'>
      ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["bulkFields"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 128
                echo "        ";
                if ($this->getAttribute($context["field"], "type", [])) {
                    // line 129
                    echo "          ";
                    if (($this->getAttribute($context["field"], "name", []) == "groups")) {
                        // line 130
                        echo "          ";
                        $context["field"] = twig_array_merge($context["field"], ["options" => ($context["groupnames"] ?? null)]);
                        // line 131
                        echo "          ";
                    }
                    // line 132
                    echo "          ";
                    if (($this->getAttribute($context["field"], "name", []) == "permissions")) {
                        // line 133
                        echo "          ";
                        $context["field"] = twig_array_merge($context["field"], ["selectize" => ["options" => ($context["permissions"] ?? null)]]);
                        // line 134
                        echo "          ";
                    }
                    // line 135
                    echo "          <div class=\"block block-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", []), "html", null, true);
                    echo "\">
            ";
                    // line 136
                    $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "user-manager.html.twig", 136)->display($context);
                    // line 137
                    echo "          </div>
        ";
                }
                // line 139
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "
      <div class=\"button-bar\">
        <button class=\"button primary\" >";
            // line 142
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
            echo "</button>
      </div>
    </form>
  </div>

  <script>
    function handleAdminAddonUserManagerSubmit(form) {
      var username = form.querySelector('[name=username]').value;
      window.location = '";
            // line 150
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/user-manager/' + username;
    }

    var selectAllEle = document.getElementById('selectAll');
    var selectEles = document.querySelectorAll('input[name=\"selected[]\"]');
    selectAllEle.addEventListener('change', function(e) {
      for (var i = 0; i < selectEles.length; i++) {
        selectEles[i].checked = this.checked;
      }
    });

    function handleAdminAddonUserManagerBulkSubmit(form) {
      for (var i = 0; i < selectEles.length; i++) {
        form.appendChild(selectEles[i]);
      }
    }
  </script>
  ";
        } else {
            // line 168
            echo "  <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", []), "html", null, true);
            echo "</h1>

  ";
            // line 170
            $this->loadTemplate("partials/blueprints.html.twig", "user-manager.html.twig", 170)->display(twig_array_merge($context, ["data" => ($context["user"] ?? null), "blueprints" => ($context["blueprints"] ?? null)]));
            // line 171
            echo "
  <div class=\"remodal\" data-remodal-id=\"changes\">
    <form>
      <h1>";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_TITLE"), "html", null, true);
            echo "</h1>
      <p class=\"bigger\">
        ";
            // line 176
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_DESC"), "html", null, true);
            echo "
      </p>
      <br>
      <div class=\"button-bar\">
        <a class=\"button secondary\" data-leave-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
            // line 180
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
            echo "</a>
        <a class=\"button\" data-leave-action=\"continue\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
            // line 181
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
            echo "</a>
      </div>
    </form>
  </div>

  <script>
    \$('[name=\"task\"][value\$=\"save\"]').on('click._grav', function(event) {
      \$(global).off('beforeunload');
    });
  </script>

  <!-- Temporary fix: https://github.com/getgrav/grav-plugin-admin/pull/1379 -->
  <style>
    .permission-container {
      overflow: hidden;
    }
  </style>
  ";
        }
    }

    public function getTemplateName()
    {
        return "user-manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  508 => 181,  504 => 180,  497 => 176,  492 => 174,  487 => 171,  485 => 170,  479 => 168,  458 => 150,  447 => 142,  443 => 140,  429 => 139,  425 => 137,  423 => 136,  418 => 135,  415 => 134,  412 => 133,  409 => 132,  406 => 131,  403 => 130,  400 => 129,  397 => 128,  380 => 127,  370 => 120,  366 => 118,  352 => 117,  348 => 115,  346 => 114,  341 => 113,  338 => 112,  335 => 111,  332 => 110,  329 => 109,  312 => 108,  305 => 104,  298 => 100,  293 => 97,  290 => 96,  275 => 91,  269 => 90,  264 => 88,  255 => 87,  249 => 85,  239 => 83,  237 => 82,  233 => 80,  228 => 79,  221 => 75,  217 => 74,  213 => 73,  208 => 70,  205 => 69,  199 => 67,  197 => 66,  193 => 65,  188 => 62,  179 => 61,  171 => 60,  163 => 55,  149 => 46,  144 => 44,  136 => 38,  128 => 36,  126 => 35,  121 => 33,  118 => 32,  115 => 31,  112 => 30,  109 => 29,  100 => 22,  94 => 20,  87 => 18,  80 => 17,  78 => 16,  72 => 15,  69 => 14,  64 => 12,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  44 => 1,  42 => 27,  40 => 26,  38 => 4,  36 => 2,  30 => 1,);
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
{% import 'user-manager-macros.html.twig' as macros %}

{% set title = \"PLUGIN_ADMIN_ADDON_USER_MANAGER.USER_MANAGER\"|tu %}

{% block titlebar %}
  {% if not user %}
  <div class=\"button-bar\">
    <a class=\"button\" href=\"#modal-admin-addon-user-manager-new\" data-remodal-target=\"modal-admin-addon-user-manager-new\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}</a>
  </div>

  <h1><i class=\"fa fa-fw fa-user-o\"></i> {{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.USER_MANAGER\"|tu }}</h1>
  {% else %}
  <div class=\"button-bar\">
    <a class=\"button\" href=\"{{ base_url }}/user-manager\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
    {% if exists %}
    <a class=\"button disable-after-click\" href=\"{{ uri.addNonce(uri.route(true) ~ '/task' ~ ps ~ 'userDelete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i> {{ \"PLUGIN_ADMIN.DELETE\"|tu }}</a>
    <a class=\"button disable-after-click\" href=\"{{ uri.addNonce(uri.route(true) ~ '/task' ~ ps ~ 'userLoginAs', 'admin-form', 'admin-nonce') }}\"><i class=\"fa fa-sign-in\"></i> {{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.LOGIN_AS\"|tu }}</a>
    {% endif %}
    <button class=\"button\" type=\"submit\" name=\"task\" value=\"admin-addon-user-manager-save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
  </div>
  <h1><i class=\"fa fa-fw fa-user\"></i> {{ \"PLUGIN_ADMIN.USER\"|tu }}: {{ user.username|e }}</h1>
  {% endif %}
{% endblock %}

{% set ps = config.system.param_sep %}
{% set appendUrl = '?filter=' ~ filter|url_encode %}

{% block content %}
  {% if not user %}
  {% set style = listStyle|default('grid') %}

  <h1>{{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.USERS\"|tu }}</h1>

  {% if filterException %}
  <div class=\"notices red\"><h2>{{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.FILTER_ERROR\"|tu }}</h2><p>{{ filterException.message }}</p></div>
  {% endif %}

  <div class=\"admin-addon-user-manager-filter\">
    <div class=\"admin-addon-user-manager-filter__input\">
      <form method=\"get\">
        <div class=\"block block-text\">
          <div class=\"form-field vertical\">
            <div class=\"form-data\" data-grav-default=\"{{ filter }}\">
              <div class=\"form-input-wrapper\">
                <input name=\"filter\" value=\"{{ filter }}\" type=\"text\" placeholder=\"{{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.FILTER_USERS\"|tu }}\">
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>

    <div class=\"admin-addon-user-manager-filter__help\">
      <a href=\"https://github.com/david-szabo97/grav-plugin-admin-addon-user-manager/blob/master/docs/filter.md#users\" class=\"button\" target=\"_new\"><i class=\"fa fa-question\"></i> {{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.HELP\"|tu }}</a>
    </div>
  </div>

  <div class=\"admin-addon-user-manager-style\">
    {% if style != 'grid' %}<a href=\"{{ uri.route(true) ~ '/listStyle' ~ ps ~ 'grid' ~ '/page' ~ ps ~ pagination.current ~ appendUrl }}\"><i class=\"fa fa-th\"></i></a>{% else %}<i class=\"fa fa-th\"></i>{% endif %}
    {% if style != 'list' %}<a href=\"{{ uri.route(true) ~ '/listStyle' ~ ps ~ 'list' ~ '/page' ~ ps ~ pagination.current ~ appendUrl }}\"><i class=\"fa fa-list\"></i></a>{% else %}<i class=\"fa fa-list\"></i>{% endif %}
  </div>

  <form method=\"post\">
    <div class=\"admin-addon-user-manager admin-addon-user-manager--{{ style }}\">
      {% if users is empty %}
        <h2>{{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.NO_RESULTS\"|tu }}</h2>
      {% else %}
          {% if style == 'list' %}
          <div class=\"cell cell--header\">
            <div class=\"user\">
              <div class=\"user__checkbox\"><input type=\"checkbox\" id=\"selectAll\" /></div>
              <div class=\"user__username\">{{ \"PLUGIN_ADMIN.USERNAME\"|tu }}</div>
              <div class=\"user__email\">{{ \"PLUGIN_ADMIN.EMAIL\"|tu }}</div>
              <div class=\"user__actions\">{{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.ACTIONS\"|tu }}</div>
            </div>
          </div>
          {% endif %}
          {% for user in users %}
          <div class=\"cell\">
            <div class=\"user\">
              {% if style == 'grid' %}
              <div class=\"user__avatar\"><a href=\"{{ base_url }}/user-manager/{{ user.username }}\"><img src=\"{{ user.avatarUrl }}\" /></a></div>
              {% else %}
              <div class=\"user__checkbox\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ user.username }}\" /></div>
              {% endif %}
              <div class=\"user__username\"><a href=\"{{ base_url }}/user-manager/{{ user.username }}\">{{ user.username }}</a></div>
              <div class=\"user__email\">{{ user.email }}</div>
              <div class=\"user__actions\">
                <a href=\"{{ base_url ~ '/user-expert/' ~ user.username }}\" class=\"expert\">{{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.EXPERT\"|tu }}</a>
                <a href=\"{{ uri.addNonce(base_url ~ '/user-manager/' ~ user.username ~ '/task' ~ ps ~ 'userDelete', 'admin-form', 'admin-nonce') }}\" class=\"delete\" onclick=\"return confirm('{{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.USER_CONFIRM_DELETE\"|tu }}');\">{{ \"PLUGIN_ADMIN.DELETE\"|tu }}</a>
              </div>
            </div>
          </div>
          {% endfor %}
      {% endif %}
    </div>

    <div class=\"admin-addon-user-manager-bulk-action\">
      <a data-remodal-target=\"modal-admin-addon-user-manager-bulk\" class=\"button\">{{ \"PLUGIN_ADMIN_ADDON_USER_MANAGER.BULK_ACTION\"|tu }}</a>
    </div>
  </form>

  {{ macros.pagination(pagination, uri.route(true) ~ '/listStyle' ~ ps ~ listStyle, ps, appendUrl) }}

  <div class=\"remodal\" data-remodal-id=\"modal-admin-addon-user-manager-new\" data-remodal-options=\"hashTracking: false\">
    <form method=\"post\" onsubmit='handleAdminAddonUserManagerSubmit(this); return false;'>
      {% for field in fields %}
        {% if field.type %}
          {% if field.name == 'username' %}
          {% set field = field|merge({ validate: field.validate|merge({ pattern: grav.config.system.username_regex })}) %}
          {% endif %}
          <div class=\"block block-{{field.type}}\">
            {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
          </div>
        {% endif %}
      {% endfor %}

      <div class=\"button-bar\">
        <button class=\"button primary\" >{{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</button>
      </div>
    </form>
  </div>

  <div class=\"remodal\" data-remodal-id=\"modal-admin-addon-user-manager-bulk\" data-remodal-options=\"hashTracking: false\">
    <form method=\"post\" onsubmit='handleAdminAddonUserManagerBulkSubmit(this);'>
      {% for field in bulkFields %}
        {% if field.type %}
          {% if field.name == 'groups' %}
          {% set field = field|merge({options: groupnames}) %}
          {% endif %}
          {% if field.name == 'permissions' %}
          {% set field = field|merge({selectize: { options: permissions }}) %}
          {% endif %}
          <div class=\"block block-{{field.type}}\">
            {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
          </div>
        {% endif %}
      {% endfor %}

      <div class=\"button-bar\">
        <button class=\"button primary\" >{{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</button>
      </div>
    </form>
  </div>

  <script>
    function handleAdminAddonUserManagerSubmit(form) {
      var username = form.querySelector('[name=username]').value;
      window.location = '{{ base_url }}/user-manager/' + username;
    }

    var selectAllEle = document.getElementById('selectAll');
    var selectEles = document.querySelectorAll('input[name=\"selected[]\"]');
    selectAllEle.addEventListener('change', function(e) {
      for (var i = 0; i < selectEles.length; i++) {
        selectEles[i].checked = this.checked;
      }
    });

    function handleAdminAddonUserManagerBulkSubmit(form) {
      for (var i = 0; i < selectEles.length; i++) {
        form.appendChild(selectEles[i]);
      }
    }
  </script>
  {% else %}
  <h1>{{ user.username }}</h1>

  {% include 'partials/blueprints.html.twig' with { data: user, blueprints: blueprints } %}

  <div class=\"remodal\" data-remodal-id=\"changes\">
    <form>
      <h1>{{ \"PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_TITLE\"|tu }}</h1>
      <p class=\"bigger\">
        {{ \"PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_DESC\"|tu }}
      </p>
      <br>
      <div class=\"button-bar\">
        <a class=\"button secondary\" data-leave-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</a>
        <a class=\"button\" data-leave-action=\"continue\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
      </div>
    </form>
  </div>

  <script>
    \$('[name=\"task\"][value\$=\"save\"]').on('click._grav', function(event) {
      \$(global).off('beforeunload');
    });
  </script>

  <!-- Temporary fix: https://github.com/getgrav/grav-plugin-admin/pull/1379 -->
  <style>
    .permission-container {
      overflow: hidden;
    }
  </style>
  {% endif %}
{% endblock %}
", "user-manager.html.twig", "/Users/lukasengelhardt/Dropbox/Current Work/Sandberg/yr 1/08 home cinema/1 code/home-cinema-1.6/user/plugins/admin-addon-user-manager/templates/user-manager.html.twig");
    }
}
